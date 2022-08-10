<?php
/*
以下のフォーム、および表示画面を作成してください。

景品応募フォームを想定し、名前、景品選択、個数の入力欄を用意します。
名前はtextで入力します。
景品はradioで準備します。
個数はselectタグとし、1から10まで選択可能としてください。
各name属性はお任せします。
*/



?>
<form action="checkresult.php" method="post">
    お名前：<input type="text" name="my_name">
    <br>
    ご希望商品：
        <input type="radio" name="Item" value="A賞">A賞
        <input type="radio" name="Item" value="B賞">B賞
        <input type="radio" name="Item" value="C賞">C賞
    <br>
    <select name="kazu">
        <?php
            for($i=1;$i<=10;$i++) { ?>
                <option value="<?php echo $i; ?>">
                <?php echo $i; ?>
                </option>
        <?php } ?>
    </select>
    <br>
    <input type="submit" value="申込">
</form>