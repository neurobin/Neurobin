<?php $projectName="demo"; ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<base href="../../" />
		<?php chdir("../../"); ?>
		<?php
		require_once 'head.php';
		?>
		<meta name="description" content="Demo">
		<meta name="keywords" content="website, widget" />
		<title>Demo</title>

	</head>
	<body onload="startTime()" style="background-color: #929292;">

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
					Calculator
				</p>
				<p class="project-tagline">
Calculator widget 
				</p>

			</div>
		</div>

		<!-- show off ends here-->
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="head-buttons">
						

					</div>
				</div>
			</div>

		</div>

		<div class="container" id="content-container2">
			<div class="row">
				<div class="col-xs-2" id="content-left"></div>
				<div class="col-xs-8 " id="content-soft">
<script type="text/javascript" src="Demo/widget1/calc.js"></script>
<div id="neurobin-com-widget-calc"></div>
<br></br>
<p>It's a dummy project to show an example of a simple widget which can be embedded to other sites.</p>
<p>Embed this code to see it in action on your website:</p>
<pre><code>&lt;script type="text/javascript" src="http://neurobin.github.io/Demo/widget1/calc.js"&gt;&lt;/script&gt;
&lt;div id="neurobin-com-widget-calc"&gt;&lt/div&gt;</code></pre>
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
