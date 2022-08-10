<?php

    /*
    ・ループ分
    ※無限ループあり、走行には注意
    ループ分はwhile、do while、forの3津がある。
    それぞれの使い方は以下の通り
    */

    //while文
    /*
    $num = 0;
    while($num <10) {
        echo $num;
        $num++;
    }
    */

    /*
    $num = 0;    //初期化式
    ($num < 10)  //条件式→falseなら終了

    $num++;      //変化式 $num = 1
    ($num < 10)  //条件式→falseなら終了

    $num++;      //変化式 $num = 2
    ($num < 10)  //falseになるまで繰り返します
    */

    //do~while文
    /*
    $num = 0; 
    do {
        echo $num;
        $num++; 
    } while($num < 10);
    */

    //for文
    /*
    for($i=0;$i<10;$i++) { 
        echo $i;
    }
    */

    //・while文は途中breakを挟むことでループから抜け出させることも可能
    /*
    $num = 0
    while($num < 10) {
        echo $num;
        $num++;
        if($num == 5) {
            break;
        }
    }
    */
    
    
    //チャレンジ
    /*
    ループ文を使用して0から100まで表示するループ文を作りましょう
    while、forはどちらを使用していただいてもかまいません。
    改行を入れておくと見やすくなります（これは任意です。）。
    */

    $number = 0;
    while($number <= 100) {
        echo $number;
        echo '<br>';
        $number++;
    }

?>