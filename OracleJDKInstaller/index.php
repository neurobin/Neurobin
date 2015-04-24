<!DOCTYPE html>
<html lang="en">
	<head>
		<script>
			if (window.location.protocol != "http:")
				window.location.href = "http:" + window.location.href.substring(window.location.protocol.length);
		</script>
		<base href="../" />
		<link href="http://gmpg.org/xfn/11" rel="profile">

		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<meta name="description" content="Oracle JDK Installer">
		<meta name="keywords" content="oracle, jdk, installer, linux" />
		<meta name="author" content="Jahidul Hamid"/>

		<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<!-- CSS -->

		<title>Oraji - Neurobin</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
		<link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
		<!-- My includes-->

		<link rel="stylesheet" href="style/mycss.css" />
		<script src="script/myjs.js"></script>

		<!--My includes ends here -->

		<link rel="shortcut icon" href="img/logo48.png" type="image/x-icon" />

	</head>
	<body onload="startTime()">

						<?php
		require_once('../header.php');
		?>
		<!--Navigation bar ends here -->
		<!-- fixed share button-->
		<div id="share-button-fixed">
			<a id="share-btn1" href="http://www.facebook.com/sharer.php?u=http://neurobin.github.io/" onclick="return newShareWindow(this.href,400,400)" class="social-button-fixed"><i class="fa fa-facebook"></i> share</a>

			<a id="share-btn2" href="http://twitter.com/home?status=http://neurobin.github.io/" onclick="return newShareWindow(this.href,400,400)" class="social-button-fixed"><i class="fa fa-twitter"></i> share</a>

		</div>
		<!-- fixed share button end-->
		<div class="container" id="showoff-soft">
			<div class="row line-after">

				<p class="project-name">
					Oraji
				</p>
				<p class="project-tagline">
					Oracle JDK Installer
				</p>

			</div>
		</div>

		<!-- show off ends here-->
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="head-buttons">
						<a href="https://github.com/neurobin/OracleJDKInstaller">View On Github</a>
						<a href="https://github.com/neurobin/OracleJDKInstaller/archive/master.zip">Download .zip</a>
						<a href="https://github.com/neurobin/OracleJDKInstaller/archive/master.tar.gz">Download .tar.gz</a>

					</div>
				</div>
			</div>

		</div>

		<div class="container" id="content-container2">
			<div class="row">
				<div class="col-xs-2" id="content-left"></div>
				<div class="col-xs-8 " id="content-soft">
					<p>
						Oracle JDK installler script for linux.
					</p>
					<h2>How To Use:</h2>
					<ol><li>
Put the <span class="quote">oraji</span> file inside the folder where you have downloaded the archive of oracle jdk (tar.gz)</li><li>
Give the install script execution permission <span class="inline-code">sudo chmod +x path_to_the_folder/oraji</span></li><li>
Now run the script <span class="quote">oraji</span> in terminal, or just drag and drop it in terminal and hit enter.</li><li>
It will ask for version number. Give the version number. <span class="quote">Example: 8 or 8u25, must match with the archive</span></li>
</ol>

																			
<h2>Contribute:</h2>
<p class="quote">If you have any suggestion or see any problem, please open an issue <a href="https://github.com/neurobin/OracleJDKInstaller/issues">here</a> </p>


				</div>
				<div class="col-xs-2" id="content-right"></div>

			</div>
		</div>

		<!--Content  ends here -->
				<?php
		require_once('../footer.php');
		?>

	</body>
</html>
