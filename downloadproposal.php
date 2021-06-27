<?php
$root = "./";
include_once($root."config/config.inc.php");
include_once("field_mapping.php");
include $root.'PHPExcel/Classes/PHPExcel.php';
include $root.'PHPExcel/Classes/PHPExcel/IOFactory.php';
ini_set('max_execution_time', 3000); 
is_login($root); 
is_admin($root);

$start_date=$_REQUEST['start'];
$end_date=$_REQUEST['end'];

$objPHPExcel = new PHPExcel(); 

$objPHPExcel->getActiveSheet()->getStyle("1:1")->getFont()->setBold( true );
// Add some data to the second sheet, resembling some different data types
$objPHPExcel->setActiveSheetIndex(0);

$sheetObj = $objPHPExcel->getActiveSheet();
$i=0;
foreach($download_proposalheader as $key=> $value){
	$sheetObj->setCellValueByColumnAndRow($i,1,$value);
	$i++;
}

$count_rows=2; 

// get product data===============
$select_query= $mysqli->query("select * from tblproposal where `DATE SENT`>='".$start_date."' and `DATE SENT`<='".$end_date."'");
$i=0;
while($data_val_arr = $select_query->fetch_array()){
	#print_r($data_val_arr);
	foreach($download_proposalheader as $key=> $value){
		if (array_key_exists($key, $data_val_arr)){
			$sheetObj->setCellValueByColumnAndRow($i,$count_rows,$data_val_arr[$key]);
		}
		$i++;
	}
	
	$count_rows++;	
	$i=0;
  
}

// file name ================
$file_name = date('Y-m-d').'-proposal'.".xlsx";

// Redirect output to a client’s web browser (Excel5)
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="'.$file_name.'"');
header('Cache-Control: max-age=0');
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$objWriter->save('php://output');

?>