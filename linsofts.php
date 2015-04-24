<!DOCTYPE html>
<html lang="en">
	<head>
		<script>
			if (window.location.protocol != "http:")
				window.location.href = "http:" + window.location.href.substring(window.location.protocol.length);
		</script>

		<link href="http://gmpg.org/xfn/11" rel="profile">

		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<meta name="description" content="Softwares for Linux">
		<meta name="keywords" content="linux, softwares, shell, softs, software, soft" />
		<meta name="author" content="Jahidul Hamid"/>

		<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<!-- CSS -->

		<title>Linux Softs - Neurobin</title>
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
		require_once('header.php');
		?>

		<!--Navigation bar ends here -->
		<!-- fixed share button-->
		<div id="share-button-fixed">
			<a id="share-btn1" href="http://www.facebook.com/sharer.php?u=http://neurobin.github.io/" onclick="return newShareWindow(this.href,400,400)" class="social-button-fixed"><i class="fa fa-facebook"></i> share</a>

			<a id="share-btn2" href="http://twitter.com/home?status=http://neurobin.github.io/" onclick="return newShareWindow(this.href,400,400)" class="social-button-fixed"><i class="fa fa-twitter"></i> share</a>

		</div>
		<!-- fixed share button end-->
		<div class="container" id="showoff-lin">
			<div class="row" >
				<div class="col-xs-12">

					<div id="container" class="line-after">
						<p><img alt="linux logo" src="img/linux.jpeg" />Linux<sup>Softwares</sup>
						</p>
					</div>

				</div>
			</div>
		</div>

		<!-- show off ends here-->

		<div class="container" id="content-container2">

			<div class="row">
				<div class="col-xs-2" id="content-left"></div>
				<div class="col-xs-8" id="content-lin">
					<ul>
						<li>
							<a href="shc">Shell Script Compiler</a>
						</li>
						<li>
							<a href="tartos">Tartos (TAR to self extracting shell script)</a>
						</li>
						<li>
							<a href="JLIVECD">JLIVECD (Live CD/DVD customization tool)</a>
						</li>
						<li>
							<a href="JSiteCopier">JSiteCopier (Website copier)</a>
						</li>
						<li>
							<a href="OracleJDKInstaller">OracleJDKInstaller</a>
						</li>
						<li>
							<a href="gccInstaller">GCC Installer</a>
						</li>
						<li>
							<a href="MT7630E">MT7630E (driver for this Wifi+BT combo chip)</a>
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
