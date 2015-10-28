<!DOCTYPE html>
<html lang="en">
	<head>
		<base href="../../"/>
		<?php chdir("../../"); ?>
		<?php
		require_once 'head.php';
		?>

		<meta name="description" content="Web Applications">
		<meta name="keywords" content="neurobin, web, apps, web apps" />
		<title>Web Apps<?php echo $titletag ?></title>

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
		<div class="container" id="showoff-lin">
			<div class="row" >
				<div class="col-xs-12">

					<div id="container" class="line-after">
						<p><img alt="logo" src="img/web.jpeg" />Web<sup>Apps</sup>
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
							<a href="uedit">Universal Text Editor</a>
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
