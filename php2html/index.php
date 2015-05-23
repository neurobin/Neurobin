<!DOCTYPE html>
<html lang="en">
	<head>
		<base href="../" />
		<?php chdir("../"); ?>
		<?php
		require_once 'head.php';
		?>
		<meta name="description" content="PHP To HTML Converter">
		<meta name="keywords" content="php, to, html, converter,linux,windows" />
		<title>PHP2HTML@Neurobin</title>

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
					PHP2HTML
				</p>
				<p class="project-tagline">
					PHP To HTML Converter
				</p>

			</div>
		</div>

		<!-- show off ends here-->
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="head-buttons">
						<a href="https://github.com/neurobin/php2html">View On Github</a>
						<a href="https://github.com/neurobin/php2html/archive/release.zip">Download .zip</a>
						<a href="https://github.com/neurobin/php2html/archive/release.tar.gz">Download .tar.gz</a>

					</div>
				</div>
			</div>

		</div>

		<div class="container" id="content-container2">
			<div class="row">
				<div class="col-xs-2" id="content-left"></div>
				<div class="col-xs-8 " id="content-soft">
<?php
include "Parsedown.php";
$parse=new Parsedown();
$filename="https://raw.github.com/neurobin/php2html/release/README.md";
echo  $parse->text(file_get_contents($filename));

?>	
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
