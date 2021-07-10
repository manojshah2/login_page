<?php

include('../config/config.inc.php');
include('../config/comfunc.php');
error_reporting(E_ERROR | E_PARSE);

$root = "../";  
is_login($root); 

## Read value
$draw = $_REQUEST['draw'];
$row = $_REQUEST['start'];
$rowperpage = $_REQUEST['length']; // Rows display per page
$columnIndex = $_REQUEST['order'][0]['column']; // Column index
$columnName = $_REQUEST['columns'][$columnIndex]['data']; // Column name
$columnSortOrder = $_REQUEST['order'][0]['dir']; // asc or desc
$searchValue = $_REQUEST['search']['value']; // Search value

$table = 'tblproposal';
$con=$mysqli;

## Search 
$searchQuery = " ";
if(isset($_REQUEST['search_keywords'])){
   $searchQuery=$_REQUEST['search_keywords'];
}

$profile_id ='';
$source='';
$whereCondition="";

if(isset($_REQUEST['profile_id'])){
   $profile_id=$_REQUEST['profile_id'];
}

if(strlen($profile_id)>0){
   $whereCondition = "  `UNIQUE ID`=".$profile_id;
}

if (strlen($searchQuery)>2){
   $and_cond="";
   if(strlen($whereCondition)>1){
      $and_cond = " and ";
   }
   $whereCondition = $whereCondition.$and_cond." (`UNIQUE ID` =".$searchQuery."  ) ";
   
}
if (strlen($whereCondition)<1){
   $whereCondition =" 1";
}

$final_query="select count(*) as allcount from ".$table." where ".$whereCondition;
## Total number of records without filtering
//echo $final_query;
$sel = mysqli_query($con,$final_query);
$records = mysqli_fetch_assoc($sel);
$totalRecords = $records['allcount'];

## Total number of record with filtering
#$sel = mysqli_query($con,"select count(*) as allcount from ".$table." WHERE 1 ".$searchQuery);
#$records = mysqli_fetch_assoc($sel);
#$totalRecordwithFilter = $records['allcount'];



## Fetch records
$empQuery = "select * from ".$table." where ".$whereCondition." ORDER BY `DATE SENT` DESC  limit ".$row.",".$rowperpage;
##echo $empQuery;
$empRecords = mysqli_query($con, $empQuery);
$data = array();

##data to be made available on datatable
$headers="ID|FIRST NAME|LAST NAME|";

while ($row = mysqli_fetch_assoc($empRecords)) {
    $data[] = array($row['ID'],
    $row['PROFILE PROPOSED BY'],
    $row['UNIQUE ID'],
    $row['PROFILE NAME'],
    $row['PROFILE SOURCE'],    
    $row['PROFILE STATUS'],
    formatDate($row["DATE SENT"]),
    $row["PROFILE SHORTLISTED ID"],
    $row["PROFILE SHORTLISTED NAME"],
    $row["PROFILE SHORTLISTED SOURCE"],
    $row["PROFILE SHORTLISTED STATUS"],
    $row["REJECTION REASON"],
    $row["MEETING TYPE"],
    $row["MEETING STATUS"],    
    $row["ID"]
    );
 }

 ## Response
$response = array(
    "draw" => intval($draw),
    "iTotalRecords" => 0,
    "iTotalDisplayRecords" => $totalRecords,
    "aaData" => $data
  );

  echo json_encode($response);
?>