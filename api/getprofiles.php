<?php

include('../config/config.inc.php');

## Read value
$draw = $_REQUEST['draw'];
$row = $_REQUEST['start'];
$rowperpage = $_REQUEST['length']; // Rows display per page
$columnIndex = $_REQUEST['order'][0]['column']; // Column index
$columnName = $_REQUEST['columns'][$columnIndex]['data']; // Column name
$columnSortOrder = $_REQUEST['order'][0]['dir']; // asc or desc
$searchValue = $_REQUEST['search']['value']; // Search value

$table = 'tblProfiles';
$con=$mysqli;

## Search 
$searchQuery = " ";
if($searchValue != ''){
    $searchQuery = " and (emp_name like '%".$searchValue."%' or 
         email like '%".$searchValue."%' or 
         city like'%".$searchValue."%' ) ";
 }

## Total number of records without filtering
$sel = mysqli_query($con,"select count(*) as allcount from ".$table);
$records = mysqli_fetch_assoc($sel);
$totalRecords = $records['allcount'];

## Total number of record with filtering
$sel = mysqli_query($con,"select count(*) as allcount from ".$table." WHERE 1 ".$searchQuery);
$records = mysqli_fetch_assoc($sel);
$totalRecordwithFilter = $records['allcount'];

## Fetch records
$empQuery = "select * from ".$table."  limit ".$row.",".$rowperpage;
#echo $empQuery;
$empRecords = mysqli_query($con, $empQuery);
$data = array();

while ($row = mysqli_fetch_assoc($empRecords)) {
    $data[] = array( 
       $row['ID'],$row['PID'],$row['ADDED DATE']
    );
 }

 ## Response
$response = array(
    "draw" => intval($draw),
    "iTotalRecords" => $totalRecordwithFilter,
    "iTotalDisplayRecords" => $totalRecords,
    "aaData" => $data
  );

  echo json_encode($response);
?>