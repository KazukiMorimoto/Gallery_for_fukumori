<?php
mb_language("japanese");
mb_internal_encoding("UTF-8");
 
//データ格納
 $to = $_POST["email"];
 $subject = "お問い合わせ";
$header = "From: inquiry@shouichifukumori.com";
 $header .= "\n";
$header .= "Bcc: inquiry@shouichifukumori.com";
 $message = "お問い合わせ頂きありがとうございます。" . "\n" .
 "お問い合わせを下記内容にて受け付け致しました。" . "\n" . "\n" .
 "お名前：" . $_POST["name"] . "\n" .
 "E-Mail：" . $_POST["email"] . "\n" .
 "お問い合わせ内容：" . "\n" .
 $_POST["message"] ;
 
//メール送信
  mb_send_mail($to, $subject, $message, $header);

?>


    <!doctype html>
    <html>

    <head>
        <meta charset="UTF-8">

        <title>SHOUICHI FUKUMORIのGallary</title>
        <meta name="Description" content="福森翔一の個人ホームページ　過去の作品やブログを公開" <link href="css/reset.css" rel="stylesheet" type="text/css">
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <link href="/img/favicon.jpg" rel="icon" type="image/x-icon" />


    </head>

    <body>
        <div id="wrapper">
            <header>
                <div id="logo">
                    <a href="index.html">SHOUICHI FUKUMORI</a>
                </div>
                <nav>
                    <ul id="menu">
                        <li><a href="information.html">Information</a></li>
                        <li><a href="photography.html">Photography</a></li>
                        <li><a href="works.html">Works</a></li>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="about.html">About</a></li>
                        <li class="activepage"><a href="contact.html">Contact</a></li>
                    </ul>
                </nav>
            </header>
            <div class="cf clearfloat"></div>
            <!-- Contact -->
            <main>
                <article>
                    <section id="confirm_form">
                        <p>確認メールを送信致しましたので、確認をお願い致します。</p>
                    </section>
                </article>
            </main>
        </div>
    </body>

    </html>