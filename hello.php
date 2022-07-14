<?php
$sinhvien = 'Nguyen Van A';
define('PORT', '5000');
echo PORT;
$PORT = (int)PORT;
echo is_int($PORT);
$myArray = array('A', 'B');
print_r($myArray);
echo $myArray[0];
$myArray2Dimension = array();
$myArray2Dimension[0][1] = 123;
$myArray2Dimension[1][2] = 456;
print_r($myArray2Dimension);

echo toString($sinhvien);
echo $sinhvien;
echo toString2($sinhvien);
echo $sinhvien;

function toString($param){
    $param = 'param';
    return $param;
}

function toString2(&$param){
    $param = 'param2';
    return $param;
}

echo '<br/>';
foreach ($_GET as $key => $val)
{
    echo '<strong>' . $key . ' => ' . $val . '</strong><br/>';
}

$file = fopen('test.txt', "r");
// while(!feof($file)) {
//     $line = fgets($file);
//     echo $line . '<br/>';
// }
while(!feof($file)) {
    $character = fgetc($file);
    echo $character . '<br/>';
}

?>