<!DOCTYPE html>
<html lang="en">
	<head>
		<base href="../../"/>
		<?php chdir("../../"); ?>

		<?php
		require_once 'head.php';
		?>

		<meta name="description" content="Android apps">
		<meta name="keywords" content="android, app, apps, softwares, softs, software, soft" />

		<title>Android apps@Neurobin</title>

	</head>
	<body onload="startTime()">

		<?php
		require_once 'header.php';
		?>

		<!--Navigation bar ends here -->
		<!-- fixed share button-->
		<?php
			require_once ('fixedsharebutton.php');
		?>
		<!-- fixed share button end-->
		<div class="container" id="showoff-and">
			<div class="row" >
				<div class="col-xs-12">

					<div id="container" class="line-after">
						<p><img alt="logo" src="img/and.png" />Android<sup>Apps</sup>
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
							<a href="TicTacToe" target="_blank">Impossible To Win Tic Tac Toe</a>
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
