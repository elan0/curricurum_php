<html>
<?php
    /*
    ・条件分岐（if文の使い方）
    ifはもしもの条件が()上でtrueになったときに、
    {}内の処理を実行する、というような動きをします。
    以下見本です。
    */

    //条件がtrueだった場合
    $age = 22;

    if ($age >= 20) {
        echo "お酒が飲めるぞ！";
    } else {
        echo "お酒は二十歳になってから！";
    }
    echo '<br>';

    //条件がfalseだった場合
    $age = 18;

    if ($age >= 20) {
        echo "お酒が飲めるぞ！";
    } else {
        echo "お酒は二十歳になってから！";
    }
    echo '<br>';

    /*
        「>=」や「==」のような条件文で使われるようなものを比較演算子といいます。
        比較演算子はほかにも以下のような例があります。
        ・A == B	AとBは等しい場合
        ・A != B	AとBが等しくない場合
        ・A > B 	BがA未満の場合
        ・A >= B	AがB以上の場合
        ・A < B	    AがB未満の場合
        ・A <= B	AがB以下の場合
    */

    // 比較演算子を使わずに条件を設定したい場合
    $is_student = true;
    if ($is_student) {
        echo 'あなたは学生です。';
    }
    echo '<br>';

    /*
    ・複数の条件をif文に取り込みたいと考えたとき
    &&、||を使うことで複数の条件を出すことができる。

    */

    // 条件使用例1
    $age = 24;
    $is_student = true;
    if ($age < 25 && $is_student) {
        echo '学割パックが使えるよ';
    }
    echo '<br>';

    // 条件使用例2
    if ($age < 25 && $is_student) {
        echo '学割パックが使えるよ';
    } elseif ($age < 25) {
        echo '若者応援割引が使えるよ';
    }
    echo '<br>';

    // 条件使用例3
    $blood = 'B';
    if($blood == 'A') {
        echo "A型です";
    } elseif($blood == 'B') {
        echo "B型です";
    } elseif($blood == 'O') {
        echo "O型です";
    }    elseif($blood == 'AB') {
        echo "AB型です";
    } else {
        echo "A/B/O/ABから選択してください";
    }
    echo '<br>';

    //条件使用例3はcase文の記載で条件を作ることも可能
    switch ($blood) {
        case 'A':
            print 'A型です';
            break;
        case 'B':
            print 'B型です';
            break;
        case 'O':
            print 'O型です';
            break;
        case 'AB':
            print 'Ab型です';
            break;
        default:
            print 'A/B/O/ABから選択してください';
    }
    echo '<br>';

    /*
        ・参考演算子
        if文については、通常のifの代わりに簡易的に条件を作る方法がある
        次の条件文1,条件文2はどちらも同じ意味の処理をすることができる

        記載方法は「（条件式）? 式1:式2」になる
    */

    //条件文1
    $name = "";
    if($name != "") {
        echo '名前を受け付けました！';
    } else {
        echo '名前を入力してください';
    }
    echo '<br>';

    //同じ条件文2
    echo ($name != "") ? '名前を受付ました！':'名前を入力してください';
    echo '<br>';

    /*
    ・補足、比較方法をより厳しく
    一致するかの比較演算子には「==」が使用されていたが、
    「==」では値の比較までしかできない。
    「===」を使うことで「型が一致しているか」まで確認することができる
    */

    $string = '1';
    $int = 1;

    if (1 === $string) {
        echo '変数stringはint型です';
    } else {
        echo '変数stringはstring型です';
    }
    echo '<br>';

    if (1 === $int) {
        echo '変数stringはint型です';
    } else {
        '変数stringはstring型です';
    }
    echo '<br>';
?>

<p style="color:red;"></p>
<p style="color:red;">チャレンジ！</p>

<?php
    /*
     以下の条件分岐をif文を使用して作成してみましょう！

    名前とパスワードの変数を用意する。
    名前が「 taro 」、パスワードが「 pass 」であった場合、「 ログイン成功です 」と出力する。
    名前だけ正しかった場合、「 パスワードが間違っています。 」と出力する。
    パスワードだけ正しかった場合、「 名前が間違っています。 」と出力する。
    名前もパスワードも間違っていた場合は、「 入力情報が間違っています 」と出力する。
    */

    $loginName = 'taro';
    $loginPass = 'pass';

    if($loginName == 'taro' && $loginPass == 'pass') {
        echo 'ログイン成功です！';
    } elseif($loginName == 'taro') {
        echo 'パスワードが間違っています';
    } elseif($loginPass == 'pass') {
        echo '名前が間違っています';
    } else {
        echo '入力情報が間違っています';
    }
?>
</html>