<!DOCTYPE html>
<html lang="en">
	<head>
		<base href="../../"/>
		<?php chdir("../../"); ?>
		<?php
		require_once 'head.php';
		?>
		<meta name="description" content="Linux Tutorials by Neurobin">
		<meta name="keywords" content="linux, tutorials" />

		<title>Linux Tutorials<?php echo $titletag ?></title>

	</head>
	<body onload="startTime()">

		<?php
		require_once 'header.php';
		?>

		<!--Navigation bar ends here -->
		<!-- fixed share button-->
		<?php
		require_once 'fixedsharebutton.php';
		?>
		<!-- fixed share button end-->
		<div class="container" id="showoff-lin">
			<div class="row" >
				<div class="col-xs-12">

					<div id="container" class="line-after">
						<p><img alt="linux logo" src="img/linux.jpeg" />Linux<sup>Tutorials</sup>
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
						<?php
require_once('utils.php');
scanDirAndSetAnchor('Docs/Linux');

?>	

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
