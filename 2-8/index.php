<?php

    /*
    foreachを使った配列の全出力
    */

    $fruits = ["りんご","みかん","もも"];

    echo $fruits[0];
    echo $fruits[1];
    echo $fruits[2];
    echo '<br>';

    foreach($fruits as $value) {
        echo $value;
    }
    echo '<br>';


    /*
    foreachを使用した配列の全出力（連想配列版）
    */
    $fruits2 = ["apple" =>"りんご", "orange" => "みかん", "peach" => "もも"];

    foreach($fruits2 as $key => $value) {
        echo $value;
    }

    echo '<br>';

?>