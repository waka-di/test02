<!doctype html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>お問合わせフォームを作る</title>
        <link rel = "stylesheet" type="text/css" href="style2.css">
    </head>
    <body>
        <h1>お問合せ内容確認</h1>
            <div class="confirm">
                <p>お問い合わせ内容はこちらで宜しいでしょうか？<br>
                   よろしければ「送信する」ボタンを押してください。
                </p>
                <p>名前<br>
                <?php echo $_POST['name']; ?>     <!-- 『index.html』から引き渡された『name』という箱を表示する -->
                </p>
                <p>メールアドレス<br>
                <?php echo $_POST['mail']; ?>
                </p>
                <p>年齢<br>
                <?php echo $_POST['age']."歳"; ?>
                </p>
                <p>コメント<br>
                <?php echo $_POST['comments']; ?>
                </p>
                <form action="index.html">  <!-- action=リンク先のURL-->
                    <input type="button" class="button1" value="戻って修正する" onClick="history.back()"> <!-- value=ボタン上に表示されるテキスト-->
                </form>
                <form action="insert.php" method="post">   
                    <input type="submit" class="button2" value="登録する">
                    <input type="hidden" value="<?php echo $_POST['name'];?>" name="name">　　<!-- hidden=代入した内容を表示しない-->
                    <input type="hidden" value="<?php echo $_POST['mail'];?>" name="mail">
                    <input type="hidden" value="<?php echo $_POST['age'];?>" name="age">     <!-- inputでinsert.phpへ引き渡す-->
                    <input type="hidden" value="<?php echo $_POST['comments'];?>" name="comments">  
                </form>
            </div>
    </body>
</html>
