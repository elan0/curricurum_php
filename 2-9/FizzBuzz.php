<?php
/*
今回は中間テストということで、プログラミング初心者の実力試しに出される FizzBuzz問題 を解いていただきます。
この問題は非常に有名で、PHPだけでなく他のあらゆる言語で実施されています。

3の倍数のとき、 Fizz! と出力します。
5の倍数のとき、 Buzz! と出力します。
3の倍数かつ5の倍数のとき、 FizzBuzz!! と出力します。(15の倍数、と考えるのはナシです。)
3の倍数でも、5の倍数でもない場合は、その数を出力します。
それを1〜100まで実施してください。
*/

define("Fizz", 3);
define("Buzz", 5);

//1~100まで出力
for($value = 1;$value <= 100;$value++) {
    //FizzBuzz条件
    if($value%Fizz == 0 && $value%Buzz == 0) {
        echo "FizzBuzz!";
    }elseif($value%Fizz == 0) {
        echo "Fizz!";
    }elseif($value%Buzz == 0) {
        echo "Buzz!";
    }else {
        echo $value;
    }
    echo '<br>';
}

?>