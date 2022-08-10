<?php
/*
課題
直方体の体積を求める関数を作成してください。
その関数を使用し、縦=5cm、横=10cm、高さ=8cmの直方体の体積を求めてください。
*/

echo calc(5,10,8);

function calc($length,$width,$height) {
    $value = $length * $width * $height;
    return $value;
}
?>