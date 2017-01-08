<?php
mb_language("japanese");
mb_internal_encoding("UTF-8");
 
//データ格納
 $to = $_POST["email"];
 $subject = "お問い合わせ";
 $header = "From: sounding.stereo.sound@gmail.com";
 $header .= "\n";
 $header .= "Bcc: sounding.stereo.sound@gmail.com";
 $message = "お問い合わせいただき誠にありがとうございます。" . "\n" .
 "お客様からのお問い合わせを下記内容にて受け付けました" . "\n" . "\n" .
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
<meta name="Description" content="福森翔一の個人ホームページ　過去の作品やブログを公開"

<link href="css/reset.css" rel="stylesheet"	type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">

</head>

<body>
<div id="wrapper">
	<header>
		<div id="logo">
			<img src="img/nav/shouichifukumori.png">
		</div>
		<nav>
			<ul id="menu">
				<li><a href="##.html">Information</a></li>
				<li><a href="photography.html">Photography</a></li>
				<li><a href="##.html">Works</a></li>
				<li><a href="blog.html">Blog</a></li>
				<li><a href="##.html">About</a></li>
				<li><a href="##.html">Contact</a></li>
			</ul>
		</nav>
	</header>
<div class="cf clearfloat"></div>
<!-- Contact -->
	<main>
		<article>
			<section id="confirm_form">
				<p>お問い合わせありがとうございました。</p>
                <p>入力を送信いたしました。確認をお願い致します。<p>
			</section>
		</article>
	</main>
	<footer>
		<div id="copyright">
			<small>Copyright&copy;2016 TDP. ALL right reserved</small>
		</div>
	</footer>
</div>
</body>
</html>