<?php
/*
    ・便利な関数
    数字の処理に対して、様々な関数を使ってデータの加工、編集を
    することができる。以下に例を示す。
*/

//ceil(切り上げ)

$x = 5.2;
echo ceil($x);
echo '<br>';

//floor(切り捨て)

$y = 5.2;
echo floor($y);
echo '<br>';

//round(四捨五入)
$z =5.2;
echo round($z);
echo '<br>';


//pi(円周率)
echo pi();
echo '<br>';

function cirxleArea($r) {
    $circle_area = $r * $r * pi();
    echo $circle_area;
    echo '<br>';
}
cirxleArea(2);

//mt_rand(乱数)
echo mt_rand(1,100);
echo '<br>';

//strlen(文字列の長さ)
    $str = "hogehoge";
    echo strlen($str);
    echo '<br>';

//strpos(検索)
//検索対象の文字が何文字目にあるかを返す。
    $str = "yoneyama";
    echo strpos($str,"a");
    echo '<br>';
//substr(対象の文字列, 開始位置, 文字数)
/*
正の順番と負の順番があるので注意
1,2,3,4,5,6,7,8...
※始まりの文字から数える場合
-5,-4,-3,-2,-1...
※終わりの文字から数える場合
*/
$str = "yoneyama";
echo substr($str, -2, 2);
echo '<br>';



//str_replace(置き換える前の文字列, 置き換えた後の文字列, 対象の文字列)で置き換え
    $str = "yoneyama";
    echo str_replace("neya","NEYA",$str);
    echo '<br>';

/*
・日本語において、文字列操作の関数を使用する場合
日本語の場合、アルファベット等の通常の文字列と違いマルチバイト
文字列で構成されている
マルチバイトの場合、↑のstren、strpos等が使用できないため、
関数は
mb_stren
mb_strpos
mb_substr
等で表現するとよい
*/

//printf（フォーマット化した文字列を出力）
$name = "米山さん";
$limit_number = 40;
echo $name."の残り時間はあと".$limit_number."です";
echo '<br>';
printf("%sの残り時間はあと%dです", $name, $limit_number);
echo '<br>';

/*
printf前半に文章、後半に数値を入れることで表示させることができます。
%s…文字列
%d…数値
*/

$limit_hour = 20;
$limit_minute = 10;
printf("残り%02d時間%02d分", $limit_hour, $limit_minute);
echo '<br>';
$limit_hour = 4;
$limit_minute = 4;
printf("残り%02d時間%02d分", $limit_hour, $limit_minute);
echo '<br>';
/*
数字や文字が複数ある場合も同じように%dを複数足すことで
処理をすることができます。
また、変数に値を入れるだけなら、sprintfを使うことも可能です。（加工して表示しない）
*/


?>
