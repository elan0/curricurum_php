<?php

/*
それぞれの下の三角形の面積を求めなさい。
1) 底面10cm 高さ5cm
2) 底面15cm 高さ8cm
3) 底面8cm   高さ6cm

通常の場合以下のように一つずつ処理を書くことで計算ができる
（同じ処理なのに何度も書くのはもったいないが・・・
*/
// 1)
$base1 = 10;
$height1 = 5;
$area1 = $base1 * $height1 / 2;

// 2)
$base2 = 15;
$height2 = 8;
$area2 = $base2 * $height2 / 2;

// 3)
$base3 = 8;
$height3 = 6;
$area3 = $base3 * $height3 / 2;

/*
    処理が同じなのであればfunctionを使用して
    簡単に処理を書くことができるようになる
    functonの作り方は以下の用に作成する
*/
function getTriangleArea($base, $height) {
    $area = $base * $height / 2;
    print "三角形の面積は".$area."だよ";
    echo '<br>';
}

//関数をそのまま使用してみる
getTriangleArea(10,5);
getTriangleArea(15,8);
getTriangleArea(8,6);


/*
・ローカル変数について
変数は{}でせんげんされたものは基本的に{}内でしか使用できません。
以下の例だと、$mynameの変数を呼び出そうとしていますが、
この状態だとじょび出すことはできません。
*/
function sayHi($name = "goto") {
    // 関数の中で定義する変数 => ローカル変数
    $myname = "php";
    return "Hi! ".$name." from ".$myname;
}
//echo $myname;
echo sayHi();
echo '<br>';

/*
・外部の変数と中の変数が同じだった場合
*/

$myname2 = "ruby";
function sayHi2($name = "goto") {
    $myname2 = "php";
    return "Hi ".$name." from ".$myname2;
}

echo '<br>';

echo sayHi2();
echo '<br>';
echo $myname2;
echo '<br>';

?>