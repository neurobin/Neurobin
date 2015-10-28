<!DOCTYPE html>
<html lang="en">
	<head>

		<base href="../../"/>
		<?php chdir("../../"); ?>
		<?php
		require_once 'head.php';
		?>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<meta name="description" content="Softwares by Neurobin">
		<meta name="keywords" content="neurobin, projects" />

		<title>Softwares<?php echo $titletag ?></title>

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
		<div class="container" id="showoff-lin">
			<div class="row" >
				<div class="col-xs-12">

					<div id="container" class="line-after">
						<p>
							Softwares
						</p>
					</div>

				</div>
			</div>
		</div>

		<!-- show off ends here-->

		<div class="container" id="content-container2">

			<div class="row">
				<div class="col-xs-2" id="content-left"></div>
				<div class="col-xs-8" id="content-tutorial">
					<ul>
						<li>
							<a href="Projects/Softwares/linsofts.php">GNU/Linux</a>
						</li>
						<li>
							<a href="Projects/Softwares/winsofts.php">Windows</a>
						</li>
						<li>
							<a href="Projects/Softwares/andapps.php">Android</a>
						</li>
						<li>
							<a href="Projects/Softwares/webapps.php">Web Apps</a>
						</li>
						<li>
							<a href="Projects/Softwares/games.php">Games</a>
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
