<?php
$root = "../";
include_once("config/config.inc.php");
include_once("field_mapping.php");
ini_set('max_execution_time', 3000); 
error_reporting(E_ERROR | E_PARSE);

function addIncomeParam($search_condition,$ai,$ai2,$column1,$column2,$cond,$currency,$currency_db){
  if($ai>=0){
    if(strlen($search_condition)>0){
      $search_condition =$search_condition.$cond;
    }
    $search_condition = $search_condition." (`".$column1."`>=".$ai." and `".$column2."`<=".$ai2." and `".$currency_db."`='".$currency."')"; 
  }
  return $search_condition;
}
function addSearchParam($search_condition, $column, $db_header, $comp ="=",$cond1=" and " ) {
    $comp_options="";
    if ($comp=="like"){
      $comp_options="%";
    }
    
    if (strlen($column)>0){
      if(strpos($column, 'Matter') !== false or strpos($column, 'Specified') !== false){
        return $search_condition;
      }
      $data_split = explode(",",$column);
      $cond = "";
      foreach($data_split as $key => $value) {  
        $cond = $cond." or `".$db_header."` ".$comp."  '".$value.$comp_options."'";
      }
      $cond = substr($cond,3);
      if(strlen($search_condition)>0){
        $search_condition = $search_condition." ".$cond1." (".$cond.") ";
      }else {
        $search_condition = $search_condition." (".$cond.") ";
      }
    }
    return $search_condition;
}

function getHeight($height){
  if(strlen($height)>0){
    $height=explode("m",explode("(",$height)[1])[0];
    return $height;
  }else{
    return 0;
  }
}
function getIncome($income_str) {
  if(strlen($income_str)<1){
    return -1;
  }
  $income_str=str_replace("Rs.","",$income_str);
  preg_match('~[0-9\\.]+~', $income_str, $m );
  $income_value=floatval($m[0]);

  if(strpos($income_str,"Crore")!==false){
    $income_value=$income_value*100;
  }

  if(strpos($income_str,"1000+")!==false){
    $income_value=$income_value*10;
  }

  return $income_value;

}

function getProfileData($pid){
  global $mysqli;
  $result =$mysqli->query("select * from tblprofiles where ID=".$pid);
  $data=array();
  
  while($fetchdata=$result->fetch_array()){
      $data=$fetchdata;
  }

  //print_r($data);  //for getting actual search from db;
  
  if (count($data)<1){
      echo "Search Not Found. Please goto Search Profile and Perform Search Again.";
      exit();
  }

  

  return createSQL($data);
}

function createSQL($data){

  $sql = "";

  $gender = $data["GENDER"];
  $fromage = $data["PP FROMAGE"];
  $toage = $data["PP TOAGE"];

  $fromheight=$data["PP MIN HEIGHT"];
  $toheight=$data["PP MAX HEIGHT"];
  $fromheight=getHeight($fromheight);
  $toheight=getHeight($toheight);

  $ai=getIncome($data["PP INCOME"]);
  $ai2=getIncome($data["PP INCOME2"]);

  $gender =  $data["GENDER"];
  if ($gender == "Male"){
    $gender = "Female";
  }else if($gender == "Female"){
    $gender = "Male";
  }

  if(strlen($fromage)>0){
    $age_crit = "case when (TIMESTAMPDIFF(YEAR,DOB,current_date()))>=".$fromage." and (TIMESTAMPDIFF(YEAR,DOB,current_date()))<=".$toage." then 1 end as AGE_COUNT";
    $sep = (strlen($sql)>0)?',':'';
    $sql = $sql.$sep.$age_crit;
  }

  if($ai>-1){
    $crit = "case when `ANNUAL INCOME VALUE`>=".$ai." and `ANNUAL INCOME2 VALUE`<=".$ai2." then 1 end as INCOME_COUNT";
    $sep = (strlen($sql)>0)?',':'';
    $sql = $sql.$sep.$crit;
  }
  
  $sql = buildSelect($sql,$data["PP RELIGION"],'RELIGION');
  $sql = buildSelect($sql,$data["PP CASTE"],'CASTE');
  $sql = buildSelect($sql,$data["PP COUNTRY"],'COUNTRY OF RESIDENCE');
  $sql = buildSelect($sql,$data["PP STATE"],'STATE OF RESIDENCE');
  $sql = buildSelect($sql,$data["PP MARITAL STATUS"],'MARITAL STATUS');
  $sql = buildSelect($sql,$data["PP MANGLIK"],'MANGLIK');
  $sql = buildSelect($sql,$data["PP EMPLOYED AS"],'Occupation');
  $sql = buildSelect($sql,$data["PP VEG/NON VEG"],'FOOD HABITS');
  $sql = buildSelect($sql,$data["PP DRINKER"],'DRINK');
  $sql = buildSelect($sql,$data["PP BODY TYPE"],'BODY TYPE');
  $sql = buildSelect($sql,$data["PP Complexion"],'COMPLEXION');
  $sql = buildSelect($sql,$data["PP MOTHER TONGUE"],'MOTHER TONGUE');
  $sql = buildSelect($sql,$gender,'GENDER');
  
  
  #print_r($sql);
  return $sql;


}

function buildSelect($sql,$data,$db_header){
  if(strpos($data, 'Matter') !== false or strpos($data, 'Specified') !== false or strpos($data, 'Doesn') !== false){
    return $sql;
  }
  $data_split = explode(",",$data);
  $cond = "";
  foreach($data_split as $key => $value) {  
    if(strlen($value)>0){
      $cond = $cond."  when `".$db_header."`= '".$value."' then 1 ";
    }
  }
  
  if(strlen($cond)>0){
    $cond = $cond."  else 0 ";
    $cond = "case ".$cond." end as ".str_replace(' ','_',$db_header)."_COUNT";
    if(strlen($sql)>0){
      $sql = $sql.",".$cond;
    }else{
      $sql = $cond;
    }
  }
  
  return $sql;
}

function createSearchFromProfile($pid){
  global $mysqli;
  $result =$mysqli->query("select * from tblprofiles where ID=".$pid);
  $data=array();
  
  while($fetchdata=$result->fetch_array()){
      $data=$fetchdata;
  }

  

  //print_r($data);  //for getting actual search from db;
  
  if (count($data)<1){
      echo "Search Not Found. Please goto Search Profile and Perform Search Again.";
      exit();
  }

  $search_condition="";
  $gender = $data["GENDER"];
  $fromage = $data["PP FROMAGE"];
  $toage = $data["PP TOAGE"];

  $fromheight=$data["PP MIN HEIGHT"];
  $toheight=$data["PP MAX HEIGHT"];
  $fromheight=getHeight($fromheight);
  $toheight=getHeight($toheight);

  $ai=getIncome($data["PP INCOME"]);
  $ai2=getIncome($data["PP INCOME2"]);

  $gender =  $data["GENDER"];
  if ($gender == "Male"){
    $gender = "Female";
  }else if($gender == "Female"){
    $gender = "Male";
  }

  //print_r($toheight);
  if(strlen($fromage)>0){
      $search_condition = $search_condition." (TIMESTAMPDIFF(YEAR,DOB,current_date())>=".$fromage." and TIMESTAMPDIFF(YEAR,DOB,current_date())<=".$toage." ) "; 
  }

  if($fromheight>0){
    if(strlen($search_condition)>0){
      $search_condition =$search_condition." or ";
    }
    $search_condition = $search_condition." ( `HEIGHT VALUE`>=".$fromheight." and `HEIGHT VALUE`<=".$toheight.")"; 
  }
  //print_r($data["PP RELIGION"]);
  //$search_condition = addIncomeParam($search_condition,$ai,$ai2,"ANNUAL INCOME VALUE","ANNUAL INCOME2 VALUE",$cond="or");
  //$search_condition = addIncomeParam($search_condition,$wbi,$wbi2,"Wedding Budget Value","Wedding Budget2 Value");
  //$search_condition = addIncomeParam($search_condition,$fi,$fi2,"FAMILY INCOME VALUE","FAMILY INCOME2 VALUE");
  $search_condition = addSearchParam($search_condition,$data["PP RELIGION"],"RELIGION","=","or");
  $search_condition = addSearchParam($search_condition,$data["PP CASTE"],"CASTE","=","or");
  $search_condition = addSearchParam($search_condition,$data["PP COUNTRY"],"COUNTRY OF RESIDENCE","=","or");
  $search_condition = addSearchParam($search_condition,$data["PP STATE"],"STATE OF RESIDENCE","=","or");
  
  $search_condition = addSearchParam($search_condition,$data["PP MARITAL STATUS"],"MARITAL STATUS","=","or");
  $search_condition = addSearchParam($search_condition,$data["PP MANGLIK"],"MANGLIK","=","or");  
  $search_condition = addSearchParam($search_condition,$data["PP EMPLOYED AS"],"Occupation","=","or");  
  $search_condition = addSearchParam($search_condition,$data["PP VEG/NON VEG"],"FOOD HABITS","=","or");
  $search_condition = addSearchParam($search_condition,$data["PP DRINKER"],"DRINK","=","or");
  $search_condition = addSearchParam($search_condition,$data["PP SMOKER"],"SMOKE","=","or");  
  $search_condition = addSearchParam($search_condition,$data["PP BODY TYPE"],"BODY TYPE","=","or");  
  $search_condition = addSearchParam($search_condition,$data["PP Complexion"],"COMPLEXION","=","or");
  $search_condition = addSearchParam($search_condition,$gender,"GENDER","=","or");
  
  //print_r($search_condition);
  return $search_condition;
}

  
function createSearch($searchId){
    global $mysqli;
    $result =$mysqli->query("select SEARCH from tblsearch where ID=".$searchId);
    $data=array();
    
    while($fetchdata=$result->fetch_array()){
        $data=json_decode($fetchdata[0],true);
    }

    //print_r($data);  //for getting actual search from db;
    
    if (count($data)<1){
        echo "Search Not Found. Please goto Search Profile and Perform Search Again.";
        exit();
    }

    $search_condition="";
    $gender = $data["gender"];
    $fromage = $data["fromage"];
    $toage = $data["toage"];
    

    $fromheight=$data["fromheight"];
    $toheight=$data["toheight"];
    $fromheight=getHeight($fromheight);
    $toheight=getHeight($toheight);

    $ai_currency=$data["income_currency"];
    $ai=getIncome($data["annual_income1"]);
    $ai2=getIncome($data["annual_income2"]);

    $wb_currency=$data["wedding_currency"];
    $wbi=getIncome($data["wedding_budget1"]);
    $wbi2=getIncome($data["wedding_budget2"]);

    $fi_currency=$data["family_currency"];
    $fi=getIncome($data["family_income1"]);
    $fi2=getIncome($data["family_income2"]);
    
    //print_r($toheight);
    if(strlen($fromage)>0){
        $search_condition = $search_condition." TIMESTAMPDIFF(YEAR,DOB,current_date())>=".$fromage." and TIMESTAMPDIFF(YEAR,DOB,current_date())<=".$toage; 
    }

    if($fromheight>0){
      if(strlen($search_condition)>0){
        $search_condition =$search_condition." and ";
      }
      $search_condition = $search_condition." (`HEIGHT VALUE`>=".$fromheight." and `HEIGHT VALUE`<=".$toheight.")"; 
    }
    //print_r($data);
    $search_condition = addIncomeParam($search_condition,$ai,$ai2,"ANNUAL INCOME VALUE","ANNUAL INCOME2 VALUE"," and ", $ai_currency,"INCOME CURRENCY");
    $search_condition = addIncomeParam($search_condition,$wbi,$wbi2,"Wedding Budget Value","Wedding Budget2 Value"," and ", $wb_currency,"FAMILY INCOME CURRENCY");
    $search_condition = addIncomeParam($search_condition,$fi,$fi2,"FAMILY INCOME VALUE","FAMILY INCOME2 VALUE", " and ",$fi_currency,"FAMILY INCOME CURRENCY");
    $search_condition = addSearchParam($search_condition,$data["religion"],"RELIGION");
    $search_condition = addSearchParam($search_condition,$data["caste"],"CASTE");
    $search_condition = addSearchParam($search_condition,$data["country"],"COUNTRY OF RESIDENCE");
    $search_condition = addSearchParam($search_condition,$data["state"],"STATE OF RESIDENCE");
    $search_condition = addSearchParam($search_condition,$data["open_for_divorce"],"Open For Divorcee");
    $search_condition = addSearchParam($search_condition,$data["open_for_outside_india"],"Open For Outside India");
    $search_condition = addSearchParam($search_condition,$data["marital_status"],"MARITAL STATUS");
    $search_condition = addSearchParam($search_condition,$data["manglik"],"MANGLIK");
    $search_condition = addSearchParam($search_condition,$data["believes_in_horoscope"],"BELIEVES IN HOROSCOPE ");
    $search_condition = addSearchParam($search_condition,$data["occupation"],"Occupation");
    $search_condition = addSearchParam($search_condition,$data["from_premium_institute"],"From Premium Institute");
    $search_condition = addSearchParam($search_condition,$data["residential_type"],"Residential Type");
    $search_condition = addSearchParam($search_condition,$data["affluence_level"],"AFFLUENCE LEVEL");
    $search_condition = addSearchParam($search_condition,$data["family_type"],"FAMILY TYPE");
    $search_condition = addSearchParam($search_condition,$data["willing_to_stay"],"Willing To Stay");
    $search_condition = addSearchParam($search_condition,$data["food_habits"],"FOOD HABITS");
    $search_condition = addSearchParam($search_condition,$data["drink"],"DRINK");
    $search_condition = addSearchParam($search_condition,$data["smoke"],"SMOKE");
    $search_condition = addSearchParam($search_condition,$data["looks"],"LOOKS");
    $search_condition = addSearchParam($search_condition,$data["body_type"],"BODY TYPE");
    $search_condition = addSearchParam($search_condition,$data["communication"],"Communication");
    $search_condition = addSearchParam($search_condition,$data["complexion"],"COMPLEXION");
    $search_condition = addSearchParam($search_condition,$data["gender"],"GENDER");
    $search_condition = addSearchParam($search_condition,$data["data_source"],"Data Taken From");
    $search_condition = addSearchParam($search_condition,$data["first_name"],"FIRST NAME" , 'like');
    $search_condition = addSearchParam($search_condition,$data["last_name"],"LAST NAME",'like');
    $search_condition = addSearchParam($search_condition,$data["phone"],"PHONE",'like');
    $search_condition = addSearchParam($search_condition,$data["profile_id"],"PID",'like');
    $search_condition = addNotNull($search_condition,$data["search_with"]);

    //print_r($search_condition);
    return $search_condition;
}

function addNotNull($search_condition,$search_with){
  $search_col=array();
  if (strpos($search_with, 'mobile') !== false){
    array_push($search_col," LENGTH(`PHONE`)>0 ");
  }
  if (strpos($search_with, 'email') !== false){
    array_push($search_col," LENGTH(`email`)>0 ");
  }
  $cond= implode(" and ",$search_col);

  if(strlen($search_condition)>0){
    $search_condition = $search_condition." and ".$cond;
  }else{
    $search_condition = $cond;
  }

  return $search_condition;
  
}
?>