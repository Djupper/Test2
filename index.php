<?php
require_once 'mpdf60/mpdf.php';
//$html =  require_once '2.html';
ob_start();
include_once('5.html');
$html = ob_get_contents();
ob_end_clean();


$text = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" 
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"></head><body>' . $html . '</body></html>';

$mpdf = new \mPDF('utf-8', 'A4', '0', 'serif', '5', '-10', '5', '5', '0', '0', 'L');

$mpdf->CSSselectMedia = 'pdf';

$mpdf->WriteHTML($text, 0);

$file_name = $_SERVER['DOCUMENT_ROOT'] . '/pdf/test.pdf';

$mpdf->Output($file_name);
?>