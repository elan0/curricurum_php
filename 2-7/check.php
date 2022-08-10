<?php
/*
課題
以下のように出力されるよう、プログラムを組んでください。
array(3) { ["red"]=> string(3) "赤" ["blue"]=> string(3) "青" ["green"]=> string(3) "緑" }
array(4) { ["red"]=> string(3) "赤" ["blue"]=> string(3) "青" ["green"]=> string(3) "緑" ["yellow"]=> string(6) "黄色" }

出力にはvar_dumpを使用します。
まず、連想配列を定義した後、要素を追加して再度出力します。
*/
    $color =["red" => "赤","blue" => "青","green" => "緑"];

    var_dump($color);
    echo '<br>';
    $color["yellow"] = "黄色";
    var_dump($color);

?>