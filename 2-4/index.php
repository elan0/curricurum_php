<?php
    //代入演算子「=」
    $x =5;
    //連結演算子「.」
    echo "hello"."world";
    //連結演算子「.」（変数版）
    $hello = "hello";
    $world = "World";
    echo $hello.$world;
    echo '<br>';

    //計算式の方法
    echo "計算式の表示結果"
    echo 1 + 1;
    echo '<br>';
    echo 10 - 1;
    echo '<br>';
    echo 2 * 2;
    echo '<br>';
    echo 10 / 5;
    echo '<br>';
    echo 5 % 3;
    echo '<br>';

    //単項演算子
    echo "単項演算子の動きの結果"
    $a = 0;
    $a++;
    echo $a;
    echo "：";
    $a--;
    echo $a;
    echo '<br>';

    //単項演算子の応用
    echo "単項演算子の動きの結果(+=,-=)"
    $a += 5;
    echo $a;
    echo "：";
    $a -= 5;
    echo $a;
    echo '<br>';

/*
    ・IT用語を調べてみよう
    1. エビデンス
        実際の処理を確認するための証拠という意味
    2. バッチ
        修正前のものから修正後のものに置き換える作業、
        または処理が動くように処理を追加で当てること
    3. MVCモデル
        開発時の構成モデルの一つ
        モデル・ビュー・コントローラーの処理を
        分けることでシステム全体として見やすい状態を作ることができる
*/
?>