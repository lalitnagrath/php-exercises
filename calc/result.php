<?php

include 'includes/calc.inc.php';

$no1=$_POST['no1'];
$no2=$_POST['no2'];
$cal=$_POST['cal'];

$calculator =new Calc($no1,$no2,$cal);
echo 'Result of ' .$cal .' of '. $no1 .' and '. $no2 .' is= '. $calculator->calcMethod();


?>