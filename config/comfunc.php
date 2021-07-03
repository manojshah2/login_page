<?php
function getAge($dob_str){   
   $dob=new DateTime($dob_str);
   if ($dob->format('Y')<1900){
       return "";
   }
   $today=new DateTime('today');   
   return $dob->diff($today)->y." Yrs";
}

function formatDate($date_str){   
    $date_obj=new DateTime($date_str);
    return $date_obj->format('Y-m-d');
}

function checkIfValue($param){
    if(isset($_REQUEST[$param]) && $_REQUEST[$param]!=''){
        return true;
    }else{
        return false;
    }
}

function getInputValue($param){
    if(isset($_REQUEST[$param]) && $_REQUEST[$param]!=''){
        return $_REQUEST[$param];
    }else{
        return "";
    }
}

function getKeyValue($aray,$key){
    if(array_key_exists($key,$aray)){
        return $aray[$key];        
    }else{
        return "";
    }
}

function getArrayValue($profile1,$database_col_name,$default_value=""){
    $actual_col=$database_col_name;
    if(array_key_exists($actual_col,$profile1)){
        return htmlspecialchars($profile1[$actual_col],ENT_QUOTES,"UTF-8");
    }else{
        return $default_value;
    }                
}

?>