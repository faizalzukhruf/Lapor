<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title><?= $data['title'] ?></title>
		<link rel="stylesheet" href="<?= BASEURL; ?>/assets/css/style.css">
		<link rel="stylesheet" href="<?= BASEURL; ?>/assets/css/<?= $data['css'] ?>">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>
		<nav>
			<div class="width">
				<div class="left">
					<a href="<?= BASEURL; ?>">LAPOR!</a>
				</div>
				<div class="right">
					<a href="<?= BASEURL ?>/tentang" class="menu">Tentang</a>
					<a href="<?= BASEURL ?>/hubungi-kami" class="menu">Hubungi Kami</a>
					<a href="javascript:void(0)" class="signin" id="signin">Masuk</a>
					<a href="javascript:void(0)" class="signup" id="signup">Daftar</a>
				</div>
			</div>
		</nav>