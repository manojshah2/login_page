<?php
$root = "./";
include_once($root."config/config.inc.php");
include $root.'PHPExcel/Classes/PHPExcel.php';
include $root.'PHPExcel/Classes/PHPExcel/IOFactory.php';
ini_set('max_execution_time', 3000); 

$start_date=$_REQUEST['start'];
$end_date=$_REQUEST['end'];

$objPHPExcel = new PHPExcel(); 

$objPHPExcel->getActiveSheet()->getStyle("A1:I1")->getFont()->setBold( true );
// Add some data to the second sheet, resembling some different data types
$objPHPExcel->setActiveSheetIndex(0);
$objPHPExcel->getActiveSheet()->setCellValue('A1', 'Sr No');
$objPHPExcel->getActiveSheet()->setCellValue('B1', 'Source'); 
$objPHPExcel->getActiveSheet()->setCellValue('C1', 'Enter ID'); 

$count_rows=2; 

// get product data===============
$select_query= $mysqli->query("select * from tblprofiles where `ADDED DATE`>='".$start_date."' and `ADDED DATE`<='".$end_date."'");
$p=1;
while($data_val_arr = $select_query->fetch_array()){
	$objPHPExcel->getActiveSheet()->setCellValue('A'.$count_rows, $p);
	$objPHPExcel->getActiveSheet()->setCellValue('B'.$count_rows, $data_val_arr['Data Taken From']);
	$objPHPExcel->getActiveSheet()->setCellValue('C'.$count_rows, $data_val_arr['PID']);
	
	$count_rows++;	
  $p++;
}

// file name ================
$file_name = date('Y-m-d').'-profiles'.".xlsx";

// Redirect output to a client’s web browser (Excel5)
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="'.$file_name.'"');
header('Cache-Control: max-age=0');
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$objWriter->save('php://output');

?>