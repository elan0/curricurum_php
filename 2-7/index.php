<?php


    /*
    ・phpの配列について
    変数をそのまま書くと行が長くなってとにかくめんどくさいです。
    記載量を簡単にするための手段の一つとして配列を使うことができます。
    */

    //配列を使わない例
    $country_1 = "Amerika";
    $country_2 = "Japan";
    $country_3 = "China";
    $country_4 = "Korea";

    echo $country_1;
    echo $country_2;
    echo $country_3;
    echo $country_4;
    echo '<br>';

    //配列の宣言、使用方法
    $countries = ["America","Japan","China","Korea"];

    echo $countries[0];
    echo $countries[1];
    echo $countries[2];
    echo $countries[3];
    echo '<br>';

    /*
    配列の各要素にアクセスするには上の記載方法で行けますが、
    配列全体を表示したい場合はvar_dumpを使うことでも可能
    表示→array(4) { [0]=> string(7) "America" [1]=> string(5) "Japan" [2]=> string(5) "China" [3]=> string(5) "Korea" }
    */

    var_dump($countries);
    echo '<br>';


    /*
        ・連想配列
        配列と似た仕組みだが、
        通常の配列の場合、0箱目、2箱目のように指定する部分を
        名称を付けて管理することができる。
        まず、通常例として以下の例を出す
    */
    $fruits = ["りんご", "みかん", "ぶどう"];

    // 0番目のりんごを出力
    echo $fruits[0];
    echo `<br />`;
    // 1番目のみかんを出力
    echo $fruits[1];
    echo `<br />`;
    // 2番目のぶどうを出力
    echo $fruits[2];
    echo `<br />`;
    // 配列全体を出力
    var_dump($fruits);

    /*
    これを名称で引っ張る宣言を以下のように指定できる。
    */

    $fruits2 = ["apple" => "りんご","orange" => "みかん","grape" => "ぶどう"];

    //りんごを出力
    echo $fruits2["apple"];
    echo '<br>';
    echo $fruits2["orange"];
    echo '<br>';
    echo $fruits2["grape"];
    echo '<br>';
    var_dump($fruits2);

    /*
    ・phpならではの配列の便利ポイント
    phpの場合、javaと違い配列の数は後から増やすことも可能になる
    以下の場合だと特に利便性を感じられる
    */

    $fruits3 = ["りんご","みかん","ぶどう"];
    $fruits3[3] = "もも";

    //連想配列の場合
    $fruits4 = ["apple" => "りんご","orange" => "みかん","grape" => "ぶどう"];
    $fruits4["peach"] = "もも";


?>