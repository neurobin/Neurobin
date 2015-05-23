<!DOCTYPE html>
<html lang="en">
	<head>
		<base href="../" />
		<?php chdir("../"); ?>
		<?php
		require_once 'head.php';
		?>
		<meta name="description" content="Tic Tac Toe Game">
		<meta name="keywords" content="tic tac toe,tic,tac,toe, games by neurobin,neurobin" />
		<title>Tic Tac Toe@Neurobin</title>
		<link rel="shortcut icon" href="img/imwtictactoe.png" type="image/x-icon" />

	</head>
	<body onload="startTime()">

		<?php
		require_once ('header.php');
		?>

		<!--Navigation bar ends here -->
		<!-- fixed share button-->
		<?php
		require_once ('fixedsharebutton.php');
		?>
		<!-- fixed share button end-->
		<div class="container" id="showoff-soft">
			<div class="row line-after">

				<p class="project-name">
					Tic Tac Toe
				</p>
				<p class="project-tagline">
					Unbeatable Tic Tac Toe Game
				</p>

			</div>
		</div>

		<!-- show off ends here-->
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="head-buttons">
						<!--<a href="https://github.com/neurobin/MARRIAGE29">View On Github</a>-->
						<a href="https://play.google.com/store/apps/details?id=com.jsoft.tictactoe">For Android</a>
						<!--<a href="https://github.com/neurobin/MARRIAGE29/archive/master.tar.gz">Download .tar.gz</a>
-->
					</div>
				</div>
			</div>

		</div>

		<div class="container" id="content-container2">
			<div class="row">
				<div class="col-xs-2" id="content-left"></div>
				<div class="col-xs-8 " id="content-soft">

					<p>
This is the Tic Tac Toe game we all know about. The only thing that's mentionable in this particular development is that the AI
in this game is totally unbeatable. There wasn't any particular algorithm followed to make it invincible. 
It's just developed with plain game playing logic taken from personal game playing experience. 
It's kinda funny though, if you lose to this AI, it means losing to me.
					</p>
					<p>Wanna prove me wrong? Then just try....</p>
					
				<h2>Releases:</h2>
		<h3>Android:</h3>		
<ul> 
<li><a href="https://play.google.com/store/apps/details?id=com.jsoft.tictactoe">At Google Play Store</a></li>
<li><a href="http://www.mobango.com/impossible-to-win-tic-tac-toe/?cid=1924085&catid=10&frompage=search&pni=7">At Mobango</a></li>
<li><a href="http://www.mobogenie.com/download-impossible-to-win-tic-tac-toe-3462449.html">At Mobogenie</a></li>
</ul>				
				



				</div>
				<div class="col-xs-2" id="content-right"></div>

			</div>
		</div>

		<!--Content  ends here -->
		<?php
		require_once ('footer.php');
		?>

	</body>
</html>
