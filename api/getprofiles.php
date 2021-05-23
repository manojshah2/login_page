<?php

include('../config/config.inc.php');
include('../config/comfunc.php');


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

$table = 'tblprofiles';
$con=$mysqli;

## Search 
$searchQuery = " ";
if(isset($_REQUEST['search_keywords'])){
   $searchQuery=$_REQUEST['search_keywords'];
}

$type ='total';
$source='';
if(isset($_REQUEST['type'])){
   $type=$_REQUEST['type'];
}

if(isset($_REQUEST['source'])){
   $source=$_REQUEST['source'];
}

$whereCondition= "";
if($type=="paid"){
   $whereCondition = "  `client type`='PAID'";
}else if($type=="unpaid"){
   $whereCondition= "  `CLIENT TYPE` is null or ( `CLIENT TYPE`<>'PAID' and `CLIENT TYPE`<>'Pay At Roka') ";
}else if($type=="payatroka"){
   $whereCondition = " `client type`='Pay At Roka'";
}else if($type=="lead"){
   $whereCondition = " `client type`='lead'";
}
else if($type=="meeting"){
   $whereCondition = " `client type`='meeting'";
}else if($type=="postmeeting-willdecide"){
   $whereCondition = " `client type`='PostMeeting-WillDecide'";
}else if($type=="rejectedcompletely"){
   $whereCondition = " `client type`='rejected completely'";
}else if($type=="postsamplewilldecide"){
   $whereCondition = " `client type`='post sample will decide'";
}


if (strlen($searchQuery)>2){
   $and_cond="";
   if(strlen($whereCondition)>1){
      $and_cond = " and ";
   }
   $whereCondition = $whereCondition.$and_cond." (`FIRST NAME` like '%".$searchQuery."%' or `LAST NAME` like '%".$searchQuery."%' or `Data Taken From` like '%".$searchQuery."%' or `ID` = '".$searchQuery."' or `PHONE` = '".$searchQuery."' or `EMAIL` = '".$searchQuery."' ) ";
   
}


if(strlen($source)>1){
   if (strlen($whereCondition)>0){
      $whereCondition = $whereCondition." and `Data Taken From`='".$source."'";
   }else{
      $whereCondition = " `Data Taken From`='".$source."'";
   }
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
$empQuery = "select * from ".$table." where ".$whereCondition." ORDER BY `ADDED DATE` DESC  limit ".$row.",".$rowperpage;
#echo $empQuery;
$empRecords = mysqli_query($con, $empQuery);
$data = array();

##data to be made available on datatable
$headers="ID|FIRST NAME|LAST NAME|";

while ($row = mysqli_fetch_assoc($empRecords)) {
    $data[] = array($row['ID'],
    $row['FIRST NAME']." ".$row['LAST NAME'],
    $row['GENDER'],
    getAge($row["DOB"]),
    formatDate($row["ADDED DATE"]),
    $row["PACKAGE TYPE"],
    $row["Payment Given"],
    $row["SOLD BY"],
    $row["RELIGION"],
    $row["Data Taken From"],
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