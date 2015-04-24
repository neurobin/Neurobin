<!DOCTYPE html>
<html lang="en">
	<head>

		<script>
			if (window.location.protocol != "http:")
				window.location.href = "http:" + window.location.href.substring(window.location.protocol.length);
		</script>

		<link href="http://gmpg.org/xfn/11" rel="profile">

		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<meta name="description" content="Android apps">
		<meta name="keywords" content="android, app, apps, softwares, softs, software, soft" />
		<meta name="author" content="Jahidul Hamid"/>

		<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<!-- CSS -->

		<title>Android apps - Neurobin</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
		<link rel="stylesheet" href="style/mycss.css" />
		<link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
		<script src="script/myjs.js"></script>

		<link rel="shortcut icon" href="img/logo48.png" type="image/x-icon" />

	</head>
	<body onload="startTime()">

				<?php
		require_once 'header.php';
		?>

		<!--Navigation bar ends here -->
		<!-- fixed share button-->
		<div id="share-button-fixed">
			<a id="share-btn1" href="http://www.facebook.com/sharer.php?u=http://neurobin.github.io/" onclick="return newShareWindow(this.href,400,400)" class="social-button-fixed"><i class="fa fa-facebook"></i> share</a>

			<a id="share-btn2" href="http://twitter.com/home?status=http://neurobin.github.io/" onclick="return newShareWindow(this.href,400,400)" class="social-button-fixed"><i class="fa fa-twitter"></i> share</a>

		</div>
		<!-- fixed share button end-->
		<div class="container" id="showoff-and">
			<div class="row" >
				<div class="col-xs-12">

					<div id="container" class="line-after">
						<p><img alt="android logo" src="img/and.png" />Android<sup>Apps</sup>
						</p>
					</div>
				</div>
			</div>
		</div>

		<!-- show off ends here-->
		<div class="container" id="content-container2">

			<div class="row">
				<div class="col-xs-2" id="content-left"></div>
				<div class="col-xs-8" id="content-and">
					<ul>
						<li>
							<a href="https://play.google.com/store/apps/details?id=com.jsoft.tictactoe" target="_blank">Impossible To Win Tic Tac Toe</a>
						</li>

					</ul>
				</div>
				<div class="col-xs-2" id="content-right"></div>

			</div>
		</div>
		<!--Content  ends here -->
				<?php
		require_once('footer.php');
		?>

	</body>
</html>
