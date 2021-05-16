<?php
$root = "../";  
include($root.'config/config.inc.php');
is_login($root); 
require "../dompdf/autoload.inc.php";
use Dompdf\Dompdf;

if (isset($_REQUEST["profilechecksum"])){
    $dompdf = new DOMPDF();  //if you use namespaces you may use new \DOMPDF()
    $html =file_get_contents($root_name.'/profile/exportpdfsample.php?profilechecksum='.$_REQUEST["profilechecksum"]);
    //echo $html;
    
    $dompdf->load_html($html);
    $dompdf->render();

    $dompdf->stream($_REQUEST["profilechecksum"].".pdf");
    //$dompdf->stream("hello.pdf", array("Attachment" => false));   //for displaying in browser
}
?>