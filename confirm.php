<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Progate</title>
	<link rel="icon" href="wanko.ico">
	<link rel="stylesheet" href="stylesheet.css">
	<link rel="stylesheet" href="responsive.css">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
</head>
<body>
	<div class="info">
		<h1>登録内容確認</h1>
		<p>メールアドレス：<?php echo $_POST['email'] ?></p>
		<!-- <p>パスワード：<?php echo $_POST['password'] ?></p>
		<p>パスワード：<?php echo strlen($_POST['password']) ?></p> -->
		<div class="black_circle">
			<p>パスワード：</p>
			<?php for($i = 0; $i < strlen($_POST['password']); $i++): ?>
				<p>●</p>
			<?php endfor ?>
		</div>
	</div>
</body>
</html>