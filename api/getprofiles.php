<?php

include('../config/config.inc.php');
include('../config/comfunc.php');

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

$type ='total';
if(isset($_REQUEST['type'])){
   $type=$_REQUEST['type'];
}

$whereCondition= " ";
if($type=="paid"){
   $whereCondition = " where `client type`='PAID'";
}else if($type=="unpaid"){
   $whereCondition= " WHERE  `CLIENT TYPE` is null or ( `CLIENT TYPE`<>'PAID' and `CLIENT TYPE`<>'Pay At Roka') ";
}else if($type=="payatroka"){
   $whereCondition = " where `client type`='Pay At Roka'";
}

## Total number of records without filtering
$sel = mysqli_query($con,"select count(*) as allcount from ".$table.$whereCondition);
$records = mysqli_fetch_assoc($sel);
$totalRecords = $records['allcount'];

## Total number of record with filtering
#$sel = mysqli_query($con,"select count(*) as allcount from ".$table." WHERE 1 ".$searchQuery);
#$records = mysqli_fetch_assoc($sel);
#$totalRecordwithFilter = $records['allcount'];


## Fetch records
$empQuery = "select * from ".$table.$whereCondition." ORDER BY `ADDED DATE` DESC  limit ".$row.",".$rowperpage;
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