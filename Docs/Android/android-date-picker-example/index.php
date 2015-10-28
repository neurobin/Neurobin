<?php 
$curdir='Docs/Android/android-date-picker-example';
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<base href="../../../" />
		<?php chdir("../../../"); ?>
		<?php
		require_once 'head.php';
		?>

		<meta name="description" content="Android date picker example">
		<meta name="keywords" content="neurobin, android, date picker, example" />

		<title>Android Date Picker Example in Android Studio<?php echo $titletag ?></title>

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

				<p class="tutorial-name">
					Android Date Picker Example
				</p>
				<p class="tutorial-tagline">
					<a class="disabled-link" id="applicable-to">IDE: </a> Android Studio
				</p>

			</div>
		</div>
		
				<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="head-buttons">
						<a href="https://github.com/Aapps/DatePicker">View On Github</a>
						<a href="https://github.com/Aapps/DatePicker/archive/master.zip">Download .zip</a>
						<a href="https://github.com/Aapps/DatePicker/archive/master.tar.gz">Download .tar.gz</a>

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
					deployContentIndex($curdir.'/content-index');
					?>

						</div>
					</nav>
				</div>
				<div class="col-xs-8 " id="content-tutorial">
<?php
include "Parsedown.php";
$parse=new Parsedown();
$filename=$curdir."/objectives";
echo  $parse->text(file_get_contents($filename));
$filename=$curdir.'/content1';
require_once('image-gallery.php');
showCarousel($curdir.'/img','s1*','Date Picker Example by Neurobin');
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
