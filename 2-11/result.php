<?php
$my_name = $_GET['my_name'];
$email = $_GET['email'];
$password = $_GET['password'];
?>
<p>私の名前は、<?php echo $my_name; ?></p>
<p>私のメールアドレスは、<?php echo $email; ?></p>
<p>私のパスワードは、<?php echo $password; ?></p>



<?php
/*
フォームから送られてきたデータは
$_GET['my_name'];
を使用することで取得することが可能になります。

$my_name = $_GET['my_name'];
$password = $_GET['password'];


*/
?>