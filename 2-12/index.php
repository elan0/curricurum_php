<?php
/*
    こんかいの例ではpostを使って送信します
*/
?>
<form action="result.php" method="post">
        <!-- この中にinputタグを記述していきます。 --> 
        <!-- まずはtype=textです。1行の入力欄です。 -->
        私の名前：<input type="text" name="my_name"/>
        <br>
        <!-- 次はtype=passwordです。パスワードのような、入力値を隠したい場合に使用します。。 -->
        <input type="password" name="password" />
        <br>
        <!-- そしてtype=submitです。これでデータを送信できます。 -->
        <input type="submit" value="送信します" />
        <br>

    
        <input type="submit" value="送信" />
</form>
<form action="result2.php" methiod="post">
    私の名前：<input type="text" name="my_name"/>
        <br>
    <input type="password" name="password" />
        <br>
    <!-- type="radio、選択肢を作れます -->
    <input type="radio" name= "sex" value="男性">男性
    <input type="radio" name="sex" value="女性">女性
    <!-- 隠しフォーム -->
    <input type="hidden" name="hidden_param" value="隠しパラメータから" />
    <!-- 選択式のフォーム -->
    年齢：
    <select name="age">
        <option value="21">21</option>
        <option value="22">22</option>
        <option value="23">23</option>
        <option value="24">24</option>
    </select>
    <!-- 選択式のフォームは量が多くなると書くのが大変ですが、 -->
    <!-- 簡単に書くこともできます。 -->
    <select name="number">
        <?php
            for($i=1;$i<=10;$i++) { ?>
                <option value="<?php echo $i; ?>">
                <?php echo $i; ?>
                </option>
        <?php} ?>

    </select>

    <input type="submit" value="送信するよ！">
</form>