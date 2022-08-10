<?php
// index.php

//変数の宣言は$を使用することで宣言することができる

/*
■変数の宣言では以下のルールを守る必要がある。
$から始まること
英数字、_は使用可能
$の直後に数字はつけられない（$7elevenは悪い例）
大文字と小文字は区別される（$Appleと$appleは違う変数）
*/

$message = "Hello World";

echo $message;



//変数の型は格納する値によって決められる

// 文字列（ダブルクオーテーションで囲んだ場合）
$moziretu = "this is a pen";

//数字（値をそのまま格納、小数値にも対応）

$x = 8;
$y = 5.55;

echo '<br>';

/*
    ・改行について
    phpの場合、明確に改行を与えないと、つながった一つの文として
    ひょうじされてしまう。

    改行を入れたいときは「'<br>'」を使用して改行しよう。
*/

//改行されない例
echo $moziretu;
echo $x;
echo $y;

echo '<br>';

//改行される例
echo $message;
echo '<br>';
echo $x;
echo '<br>';
echo $y;
echo '<br>';

/*
    ・変数の方も含めて表示をしてくれる「var_dump」
*/
echo $message,":";
var_dump($message);
echo '<br>';
echo $x,":";
var_dump($x);
echo '<br>';
echo $y,":";
var_dump($y);
echo '<br>';

?>

<?php
    //・論理値（要するにboolean）
    $flug = true;
    var_dump($flug);
    echo '<br>';


    // NULLの記載方法
    $emp = NULL;
    var_dump($emp);
    echo '<br>';
?>