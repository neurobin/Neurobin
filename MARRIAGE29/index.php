<?php $projectName="MARRIAGE29"; ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<base href="../" />
		<?php chdir("../"); ?>
		<?php
		require_once 'head.php';
		?>
		<meta name="description" content="Marriage 29 Card Game">
		<meta name="keywords" content="29,marriage 29,29 card game,marriage card game, games by neurobin,neurobin" />
		<title>MARRIAGE29<?php echo $titletag ?></title>
		<link rel="shortcut icon" href="img/29.jpg" type="image/x-icon" />

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
					MARRIAGE29
				</p>
				<p class="project-tagline">
					29 Card Game, Also Known As MARRIAGE
				</p>

			</div>
		</div>

		<!-- show off ends here-->
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="head-buttons">
						<a href="https://github.com/neurobin/MARRIAGE29">View On Github</a>
						<a href="https://github.com/neurobin/MARRIAGE29/archive/master.zip">Download .zip</a>
						<a href="https://github.com/neurobin/MARRIAGE29/archive/master.tar.gz">Download .tar.gz</a>

					</div>
				</div>
			</div>

		</div>

		<div class="container" id="content-container2">
			<div class="row">
				<div class="col-xs-2" id="content-left"></div>
				<div class="col-xs-8 " id="content-soft">

					<p>
						This is the 29 card game which is also known as Marriage. It's core program is written in C++ and the graphics is developed with <a href="http://www.thegamecreators.com/?m=view_product&id=2128">Dark GDK</a>.
					</p>

					<h2>Install:</h2>
					<h3>On Windows:</h3>

					<p>
						The file provided is a single <span class="quote">.msi</span> file (Microsoft installer). It can be installed by running it and simply going through the installation process
					</p>

					<h3>On Linux:</h3>

					<p>
						It can be installed and played on Linux system with the help of <a href="https://www.winehq.org/">wine</a>.
					</p>

					<h2>Rules:</h2>
					<p>
						You can find the general rules of playing this game in this <a href="http://en.wikipedia.org/wiki/Mariage_%28card_game%29">wiki page</a>.
					</p>
					<h3> Some specific rules:</h3>
					<ol>
						<li>
							Marriage point starts at a call of 17. For call 17 Marriage point is 1, for 18: 2, for 19: 3 and for 20 and above: 4
						</li>
						<li>
							Marriage point for opponent is always 4
						</li>
						<li>
							If the player getting first card in a deal doesn't get any point in hand, that deal will be dismissed
						</li>
						<li>
							If a player doesn't get any point at hand while he/she chose 7 card as trump, that deal will be dismissed
						</li>
						<li>
							If a player gets all of the 4 Jacks alone, that deal will be dismissed
						</li>
						<li>
							If the two opponents altogether doesn't get any trump card or only the 7 numbered card of trump card, that deal will be dismissed
						</li>
						<li>
							If someone wants to play single (without letting his/her partner join in), he/she will win or lose 3 sets at once
						</li>
						<li>
							If a team gets/loses all the cards in a specific deal, they will get two sets of win/loss
						</li>

					</ol>
					
					<?php require_once('social-pages.php'); ?>

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
