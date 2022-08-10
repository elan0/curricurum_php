<?php
/*
・テキストファイルの作成
テキストファイルの作成を行うこともphpは簡単に作成できる
*/

    //ファイルの作成が可能かどうかの確認
    $testfile = "test.txt";
    $contents = "こんにちは！";

    //1
    if(is_writable($testFile)) {
        
        echo "writeable!!";
        echo '<br>';
    } else {
        echo "not writanle!";
        //2
        exit;
    }
/*
1.
is_writable(パスを含めたファイル名);
書き込みが可能かどうかを判断するためのメソッド
可能な場合trueを返却する。
フォルダの権限やディレクトリが存在しない等で作成できない場合、falseが返却される。

2.
書き込み負荷だった場合は
exitメソッドで処理を終了させます。
*/






?>