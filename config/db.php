<?php
class Server {
    var $sql="";
    var $column_names = array();
    var $column_values = array();
    var $param = array();
    var $conn;

    var $where_count;
    var $where_cond;

    var $IsConnected=false;

    public function __construct($conn){
        
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }else{
            $this->IsConnected=true;
        }
        $this->conn=$conn;
    }

    function IsConnected(){
        return $this->IsConnected;
    }
    
    function AddParam($col_name,$col_value,$where=false){
        $new_col="`".$col_name."`";
        if (in_array($new_col, $this->column_names)){
            //skip the duplicate addition of column names
        }else{
            if($where){
                $this->where_cond=$this->where_cond.",".$new_col."=?";  
                $this->where_count++;              
            }
            array_push($this->column_names,"`".$col_name."`");
            array_push($this->column_values,$col_value);
            array_push($this->param,"?");            
        }
    }

    function UpdateQuery($tableName){
        $col=implode(",",$this->column_names);
        $value=implode(",",$this->column_values);
        $parameter=implode(",",$this->param);

        $where=$this->where_cond;

        if(strlen($where)<1){
            return "No Where Condition";
        }

        $update_content="";

        for($x=0;$x<count($this->column_names)-$this->where_count;$x++){
            $update_content=$update_content.",".$this->column_names[$x]."=?";
        }

        $update_content= substr($update_content,1);        

        $sql="UPDATE ".$tableName." SET ".$update_content." WHERE ".substr($this->where_cond,1);
        
        $stmt=$this->conn->prepare($sql);
        
        $types=str_repeat("s",count($this->column_values));
        if($types&&$this->column_values)
        {
            $bind_names[] = $types;
            for ($i=0; $i<count($this->column_values);$i++) 
            {
                $bind_name = 'bind' . $i;
                $$bind_name = $this->column_values[$i];
                $bind_names[] = &$$bind_name;
            }
            $return = call_user_func_array(array($stmt,'bind_param'),$bind_names);
        }
        
        
        if($stmt->execute()){
            $message["status"]=true;
            $message["rows"]=$stmt->affected_rows;
            $message["error"]='';
        }else{
            $message["status"]=false;
            $message["rows"]=0;
            $message["error"]=$this->conn->error;
        }
        
        $stmt->close();
        //$this->conn->close();

        return $message;

    }

    function InsertQuery($tableName){

        $col=implode(",",$this->column_names);
        $value=implode(",",$this->column_values);
        $parameter=implode(",",$this->param);

        $sql="INSERT INTO ".$tableName."(".$col.") VALUES (".$parameter.") ";

        $stmt=$this->conn->prepare($sql);
        $types=str_repeat("s",count($this->column_values));
        if($types&&$this->column_values)
        {
            $bind_names[] = $types;
            for ($i=0; $i<count($this->column_values);$i++) 
            {
                $bind_name = 'bind' . $i;
                $$bind_name = $this->column_values[$i];
                $bind_names[] = &$$bind_name;
            }
            $return = call_user_func_array(array($stmt,'bind_param'),$bind_names);
        }

        if($stmt->execute()){
            $message["status"]=true;
            $message["data"]=$stmt->insert_id;
            $message["error"]="";
        }else{
            $message["status"]=false;
            $message["error"]=$this->conn->error;
        }

        $stmt->close();
        //$this->conn->close();

        return $message;


    }
}
?>