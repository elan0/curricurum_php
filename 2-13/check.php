<?php
/*
課題
本項で扱った各メソッドに関して、1つずつ自分で例題をつくって試してみましょう。
凝ったものである必要はありません。
マルチバイト対応の関数はやらなくてもよいです（mb_strlenなど）
*/



//1.ceil(切り上げ)
$baitomoney = 750;
$baitotime = 4.25;
echo ceil($baitomoney * $baitotime);
echo '<br>';

//2.floor(切り捨て)
$yukyuNokori = 5;
$yukyuTime = 1.2;

echo "有給残り".$yukyuNokori * floor($yukyuTime);
echo '<br>';


//3.round(四捨五入)
$BaitoTime = 7.17;
echo round($BaitoTime);
echo '<br>';

//4.pi(円周率)
$r = 10;
echo $r * $r * pi();
echo '<br>';

//5.mt_rand(乱数)
$janken = mt_rand(1,3);
switch($janken) {
    case 1:
        echo "ぐー";
        break;
    case 2;
        echo "ちょき";
        break;
    case 3;
        echo "ぱー";
        break;
    default:
        break;
}
echo '<br>';

//6.strlen(文字列の長さ)
$name = 'kannsai,denkihouankyokai';
echo strlen($name);
echo '<br>';

//7.strpos(検索)
echo strpos($name,"ai");
echo '<br>';

//8.substr(置き換える前の文字列, 置き換えた後の文字列, 対象の文字列)で置き換え
echo substr($name,8,16);
echo '<br>';

//9.printf（フォーマット化した文字列を出力）
$namae ="たかしくん";
$age = 24;
printf("%sは%dの中途採用です！",$name,$age);
echo '<br>';

?>