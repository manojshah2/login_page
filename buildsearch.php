<?php
$root = "../";
include_once("config/config.inc.php");
include_once("field_mapping.php");
ini_set('max_execution_time', 3000); 
error_reporting(E_ERROR | E_PARSE);

function addIncomeParam($search_condition,$ai,$ai2,$column1,$column2){
  if($ai>=0){
    if(strlen($search_condition)>0){
      $search_condition =$search_condition." and ";
    }
    $search_condition = $search_condition." (`".$column1."`>=".$ai." and `".$column2."`<=".$ai2.")"; 
  }
  return $search_condition;
}
function addSearchParam($search_condition, $column, $db_header ) {
    if (strlen($column)>0){
      $data_split = explode(",",$column);
      $cond = "";
      foreach($data_split as $key => $value) {  
        $cond = $cond." or `".$db_header."`='".$value."'";
      }
      $cond = substr($cond,3);
      if(strlen($search_condition)>0){
        $search_condition = $search_condition." and (".$cond.") ";
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
    $income_value=$income_value*10;
  }

  if(strpos($income_str,"1000+")!==false){
    $income_value=$income_value*10;
  }

  return $income_value;

}


  
function createSearch($searchId){
    global $mysqli;
    $result =$mysqli->query("select SEARCH from tblsearch where ID=".$searchId);
    $data=array();
    while($fetchdata=$result->fetch_array()){
        $data=json_decode($fetchdata[0],true);
    }

    if (count($data)<1){
        echo "Search Not Found. Please goto Search Profile and Perform Search Again.";
        exit();
    }

    $search_condition="";
    $fromage= $data["fromage"];
    $toage = $data["toage"];

    $fromheight=$data["fromheight"];
    $toheight=$data["toheight"];
    $fromheight=getHeight($fromheight);
    $toheight=getHeight($toheight);

    $ai=getIncome($data["annual_income1"]);
    $ai2=getIncome($data["annual_income2"]);

    $wbi=getIncome($data["wedding_budget1"]);
    $wbi2=getIncome($data["wedding_budget2"]);

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
    $search_condition = addIncomeParam($search_condition,$ai,$ai2,"ANNUAL INCOME VALUE","ANNUAL INCOME2 VALUE");
    $search_condition = addIncomeParam($search_condition,$wbi,$wbi2,"Wedding Budget Value","Wedding Budget2 Value");
    $search_condition = addIncomeParam($search_condition,$fi,$fi2,"FAMILY INCOME VALUE","FAMILY INCOME2 VALUE");
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

    return $search_condition;
}
?>