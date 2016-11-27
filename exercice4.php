<?php
/**
 * Created by PhpStorm.
 * User: meg4r0m
 * Date: 27/11/16
 * Time: 19:13
 */
$varstring = "bonjour";
$varint = "10";
$varfloat = "10.30";
$varboolean = true;

echo "ma variable string: ".$varstring."<br />";
echo "ma variable int: ".$varint."<br />";
echo "ma variable float: ".$varfloat."<br />";
if ($varboolean == true) {
    echo "ma variable boolean: true";
}else{
    echo "ma variable boolean: false";
}
?>