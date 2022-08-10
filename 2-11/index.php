<form action="result.php" method="get">
  名前：<input type="text" name="my_name" />
  <br>
  メールアドレス：<input type="text" name="email" />
  <br>
  パスワード：<input type="password" name="password" />
  <br>
  <input type="submit" value="送信" />
</form>


<?php
/*
・入力フォームの使用方法
まず、入力フォームの作成時には
phpではなく、htmlでフォーマットを作成します。
フォーマットの枠をまず作ります

・外枠
    <form action="result.php" method="get">
で作成ができます。
actionにはデータの送信先を記載、
methodにはgetやpost等の通信手段を記載します。

・内枠内の入力内容
　 名前：<input type="text" name="my_name" />
  <br>
  パスワード：<input type="password" name="password" />
  <br>
  <input type="submit" value="送信" />
typeには入力形式を属性として記載 nameにはデータの渡し先の変数名を記載

*/
?>