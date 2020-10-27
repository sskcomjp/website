<?php
$text = $_GET["val"]; //valの値を受け取り変数に格納
//val.txtに値を上書き保存
$A = file_put_contents('/var/www/html/samplePhp/val.txt',$text,FILE_APPEND);
//val.txtの値を読み込み変数$sに格納
$s = file_get_contents('/var/www/html/samplePhp/val.txt');
print($s);
?>
