<!DOCTYPE html>
<html lang="en">
	<head>
		<base href="../../"/>
		<?php chdir("../../"); ?>

		<?php
		require_once 'head.php';
		?>

		<meta name="description" content="Games by Neurobin">
		<meta name="keywords" content="games, softwares, Neurobin" />

		<title>Games<?php echo $titletag ?></title>

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
		<div class="container" id="showoff-win">
			<div class="row" >
				<div class="col-xs-12">

					<div id="container" class="line-after">
						<p><img alt="logo" src="img/games.jpeg" />Games
						</p>
					</div>

				</div>
			</div>
		</div>

		<!-- show off ends here-->

		<div class="container" id="content-container2">
			<div class="row">
				<div class="col-xs-2" id="content-left"></div>
				<div class="col-xs-8" id="content-win">
					<ul>
						<li>
							<a href="MARRIAGE29">29 (Card Game)</a>
						</li>
						<li>
							<a href="TicTacToe">IMW-Tic Tac Toe (Impossible To Win)</a>
						</li>
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
