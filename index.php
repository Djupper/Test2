<?php
require_once 'mpdf60/mpdf.php';
$text =  require_once '1.html';
$text='<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="content-type" content="text/html; charset=utf-8" /></head><body>'.$html.'</body></html>';

$mpdf = new \mPDF('utf-8', 'A4', '0', 'serif','5', '-10', '5', '5', '0', '0', 'L');

$mpdf->CSSselectMedia='pdf';

$mpdf->WriteHTML($text, 0);

$file_name = $_SERVER['DOCUMENT_ROOT'].'/pdf/test.pdf';

$mpdf->Output($file_name);
?>