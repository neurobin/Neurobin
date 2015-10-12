<!DOCTYPE html>
<html lang="en">
	<head>
		<base href="../../../" />
		<?php chdir("../../../"); ?>
		<?php
		require_once 'head.php';
		?>

		<meta name="description" content="Android time picker example">
		<meta name="keywords" content="neurobin, android, time picker, example" />

		<title>Android Time Picker Example in Android Studio | Neurobin</title>

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
					Android Time Picker Example
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
						<a href="https://github.com/Aapps/TimePicker">View On Github</a>
						<a href="https://github.com/Aapps/TimePicker/archive/master.zip">Download .zip</a>
						<a href="https://github.com/Aapps/TimePicker/archive/master.tar.gz">Download .tar.gz</a>

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
					deployContentIndex('Docs/Android/android-time-picker-example/content-index');
					?>

						</div>
					</nav>
				</div>
				<div class="col-xs-8 " id="content-tutorial">
<?php
include "Parsedown.php";
$parse=new Parsedown();
$filename="Docs/Android/android-time-picker-example/objectives";
echo  $parse->text(file_get_contents($filename));
$filename='Docs/Android/android-time-picker-example/content1';
require_once('image-gallery.php');
showCarousel('Docs/Android/android-time-picker-example/img','s1*','Time Picker Example by Neurobin');
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
