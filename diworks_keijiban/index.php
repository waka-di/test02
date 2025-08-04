<!doctype html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title> diworkslog掲示板</title>
        <link rel = "stylesheet" type="text/css" href="style.css">
    </head>
    <body>
      <?php    //DBから投稿内容を取得する用
      mb_internal_encoding("utf8"); 
      $pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","disql");    
      $stmt = $pdo -> query("select*from diworks_keijiban");

      ?>
      
        <header>
            <div class="header-up">
              <div class="logo">
                <img src="diblog_logo.jpg">
              </div>
            </div>
            <div class="top-bar">
              <ul>
                <li>トップ</li>
                <li>プロフィール</li>
                <li>D.I.Blogについて</li>
                <li>登録フォーム</li>
                <li>問い合わせ</li>
                <li>その他</li>
              </ul>
            </div>
        </header>
        <main>
            <div class="container">
                <div class="main-container">
                    <h1>プログラミングに役立つ掲示板</h1>
                        <div class="main_form">
                            <form method="post" action="insert.php">
                                <h2>入力フォーム</h2>
                                    <div>
                                        <label>ハンドルネーム</label><br>
                                        <input type="text"  class="text" size="35" name="handlename" required> <!--name=箱の名前-->
                                    </div>
                                    <div>
                                        <label>タイトル</label>
                                        <br>
                                        <input type="text" class="text" size="35" name="title" required> 
                                    </div>
                                    <div>
                                       <label>コメント</label>
                                        <br>
                                        <textarea class="text" name="comments" cols="70" rows="6" required></textarea>
                                    </div>
                                    <div>
                                        <input type = "submit" class="submit" value="投稿する">
                                    </div>
                            </form>
                        </div>    
                        <div class="main_post">
                            <?php
                                while($row = $stmt -> fetch()){
                                echo "<div class='kiji'>";
                                echo "<h3>".$row['title']."</h3>";    
                                echo "<div class='contents'>";
                                echo $row['comments'];  
                                echo "<div class='handlename' > posted by" .$row['handlename']."</div>";
                                echo  " </div>";
                                echo  " </div>";
                                    }
                             ?>
                        </div>
                </div>
                <div class="aside-container">
                    <div class="aside-title">人気の記事</div>
                        <ul>
                            <li>PHPオススメ本</li>
                            <li>PHP  MyAdminの使い方</li>
                            <li>いま 人気のエディタTops</li>
                            <li>HTMLの基礎</li>
                        </ul>
                    <div class="aside-title">オススメリンク</div>
                        <ul>
                            <li class="line-spacing">ディーアイワークス株式会社</li>
                            <li>XAMPPのダウンロード</li>
                            <li>Eclipseのダウンロード</li>
                            <li>Braketsのダウンロード</li>
                        </ul>
                    <div class="aside-title">カテゴリ</div>
                        <ul>
                            <li>HTML</li>
                            <li>PHP</li>
                            <li>MySQL</li>
                            <li>JavaScript</li>
                        </ul>
                </div>
            </div>
        </main>
        <footer>
            Copyright D.I.works|D.I.blog is the one which provides A to Z about programming
        </footer>
    </body>
</html>