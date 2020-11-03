<?php
$root = "../";
include_once($root."config/config.inc.php");
include_once($root."field_mapping.php");
include_once($root."buildsearch.php");
include $root.'PHPExcel/Classes/PHPExcel.php';
include $root.'PHPExcel/Classes/PHPExcel/IOFactory.php';
ini_set('max_execution_time', 3000); 

$searchid=$_REQUEST["searchid"];
$search_condition=createSearch($searchid);
 
if (strlen($search_condition)>0) {
    $final_query="select * from tblprofiles where ".$search_condition;
    $count_query="select count(*) from tblprofiles where ".$search_condition;    
}else {
    print_r("No Result Found");
}

$objPHPExcel = new PHPExcel(); 

$objPHPExcel->getActiveSheet()->getStyle("1:1")->getFont()->setBold( true );
// Add some data to the second sheet, resembling some different data types
$objPHPExcel->setActiveSheetIndex(0);

$sheetObj = $objPHPExcel->getActiveSheet();
$i=0;
foreach($download_header as $key=> $value){
	$sheetObj->setCellValueByColumnAndRow($i,1,$value);
	$i++;
}

$count_rows=2; 

// get profile data===============
$select_query= $mysqli->query($final_query);
$i=0;
while($data_val_arr = $select_query->fetch_array()){
	
	foreach($download_header as $key=> $value){
		if (array_key_exists($key, $data_val_arr)){
			if($i==0){
				$sheetObj->setCellValueByColumnAndRow($i,$count_rows,"LV_".$data_val_arr[$value]);
			}else{
				$sheetObj->setCellValueByColumnAndRow($i,$count_rows,$data_val_arr[$value]);
			}
		}
		$i++;
	}
	
    $count_rows++;	
    $i=0;
  
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