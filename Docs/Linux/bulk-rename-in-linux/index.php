<?php 
$curdir='Docs/Linux/bulk-rename-in-linux';
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<base href="../../../" />
		<?php chdir("../../../"); ?>
		<?php
		require_once 'head.php';
		?>

		<meta name="description" content="Rename files folders/directories in bulk in Unix/Linux">
		<meta name="keywords" content="rename files in linux, rename files folders in bulk in linux, bulk rename files in linux" />

		<title>Bulk rename files/directories in Linux<?php echo $titletag ?></title>

	</head>
	<body onload="startTime()">

		<?php
		require_once ('header.php');
		?>

		<!--Navigation bar ends here -->
		<!-- fixed share button-->
		<?php
		require_once 'fixedsharebutton.php';
		?>
		<!-- fixed share button end-->
		<div class="container" id="showoff-soft">
			<div class="row line-after">

				<h1 class="tutorial-name">
					Bulk rename files or directories in Linux
				</h1>
				<p class="tutorial-tagline">
					<a class="disabled-link" id="applicable-to">Applicable To: </a> Unix, Linux, All 32/64 bit Unix like OS.
				</p>

			</div>
		</div>
		
				<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="head-buttons">
					<?php require_once('utils.php');
					deployGitDownloadButtons('neurobin','rnm','release');
					?>
					</div>
				</div>
			</div>

		</div>

		<!-- show off ends here-->

		<div class="container" id="content-container2">
			<div class="row">
				<div class="col-xs-2" id="content-left">
					<nav>
						<div id="content-links">
							<p>
								Content
							</p>
					<?php
					require_once ('content-index.php');
					deployIdedContentIndex($curdir.'/content-index');
					?>

						</div>
					</nav>
				</div>
				<div class="col-xs-8 " id="content-tutorial">
<?php
include "Parsedown.php";
$parse=new Parsedown();
//$filename=$curdir."/objectives";
//echo  $parse->text(file_get_contents($filename));
$filename=$curdir.'/content1.md';
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
