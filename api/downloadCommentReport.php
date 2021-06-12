<?php
$root = "../";
include_once($root."config/config.inc.php");
include_once($root."field_mapping.php");
include_once($root."buildsearch.php");
include $root.'PHPExcel/Classes/PHPExcel.php';
include $root.'PHPExcel/Classes/PHPExcel/IOFactory.php';
ini_set('max_execution_time', 3000); 

is_login($root); 
is_admin($root);


$final_query="SELECT t1.`Date`,t1.`ADDED BY` as `CRM User`,t1.PID as `Profile Id`, t2.`First Name` , t2.`Last Name` ,t1.Comments FROM `tblcomments` t1 left join tblprofiles t2 on t1.PID=t2.ID";
$comment_header=array(
	"Date"=>"Date",
	"CRM User"=>"CRM User",
	"Profile Id"=>"Profile ID",
	"First Name"=>"First Name",
	"Last Name"=>"Last Name",
	"Comments"=>"Comments"
);
$objPHPExcel = new PHPExcel(); 

$objPHPExcel->getActiveSheet()->getStyle("1:1")->getFont()->setBold( true );
// Add some data to the second sheet, resembling some different data types
$objPHPExcel->setActiveSheetIndex(0);

$sheetObj = $objPHPExcel->getActiveSheet();
$i=0;
foreach($comment_header as $key=> $value){
	$sheetObj->setCellValueByColumnAndRow($i,1,$value);
	$i++;
}

$count_rows=2; 

// get profile data===============
$select_query= $mysqli->query($final_query);
$i=0;
while($data_val_arr = $select_query->fetch_array()){
	
	foreach($comment_header as $key=> $value){
		if (array_key_exists($key, $data_val_arr)){
			
			$sheetObj->setCellValueByColumnAndRow($i,$count_rows,$data_val_arr[$key]);				
			
		}
		$i++;
	}
	
    $count_rows++;	
    $i=0;
  
}

// file name ================
$file_name = date('Y-m-d').'-comments-report'.".xlsx";

// Redirect output to a client’s web browser (Excel5)
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="'.$file_name.'"');
header('Cache-Control: max-age=0');
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$objWriter->save('php://output');

?>