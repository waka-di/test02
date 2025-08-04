<?php 
    mb_internal_encoding("utf8");  //文字化けしないように
    $pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","disql");    //DBと接続するときの決まり文句
    $pdo -> exec("insert into diworks_keijiban(handlename,title,comments)         
        values('".$_POST['handlename']."','".$_POST['title']."','".$_POST['comments']."');");   //$pdo ->exec＝DB格納する際に記述するSQL文する決まり文句 
    header("Location:http://localhost/diworks_keijiban/index.php");  //リダイレクト 他ページに自動的に移動
?>