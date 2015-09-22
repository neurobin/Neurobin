<?php $projectName="rnm"; ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<base href="../" />
		<?php chdir("../"); ?>
		<?php
		require_once 'head.php';
		?>
		<meta name="description" content="Bulk rename utility">
		<meta name="keywords" content="rename,bulk rename,rnm,linux,gnu,unix" />
		<title>rnm @ Neurobin</title>

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
					rnm
				</p>
				<p class="project-tagline">
					Bulk rename utility
				</p>

			</div>
		</div>

		<!-- show off ends here-->
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="head-buttons">
						<a href="https://github.com/neurobin/rnm">View On Github</a>
						<a href="https://github.com/neurobin/rnm/archive/release.zip">Download .zip</a>
						<a href="https://github.com/neurobin/rnm/archive/release.tar.gz">Download .tar.gz</a>
                  <a href="rnm/man.html">ManPage</a>
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
$filename="https://raw.github.com/neurobin/" . $projectName . "/release/README.md";
$changelog="https://raw.github.com/neurobin/" . $projectName . "/release/ChangeLog";
echo  $parse->text(file_get_contents($filename));
echo "<div id=\"changelog\">";
echo  $parse->text(file_get_contents($changelog));
echo "</div>";
?>	

<?php require_once('contribute-message.php'); ?>
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
