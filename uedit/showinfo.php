<!DOCTYPE html>
<html lang="en">
	<head>
		<base href="../" />
		<?php chdir("../"); ?>


<script>
	if (window.location.protocol != "http:")
		window.location.href = "http:" + window.location.href.substring(window.location.protocol.length);
</script>

<link href="http://gmpg.org/xfn/11" rel="profile">
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!-- CSS -->

<meta name="author" content="Jahidul Hamid" >
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="style/mycss.css" />
<!--<link rel="stylesheet" href="style/mycss.min.css" />-->
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
<script src="script/jquery.min.1.7.1.custom.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<!--<script src="script/myjs.js"></script>-->
<script src="script/myjs.min.js"></script>


<link rel="stylesheet" href="Highlightjs/styles/github.css">
<script src="Highlightjs/highlight.pack.js"></script>
<script>hljs.initHighlightingOnLoad();</script>

<link rel="shortcut icon" href="img/logo48.png" type="image/x-icon" />


		<meta name="description" content="Universal Text Editor User Manual">
		<meta name="keywords" content="uedit,neurobin,universal text editor,text editor" />
		<title>Uedit User Manual @ Neurobin</title>

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
					Uedit
				</p>
				<p class="project-tagline">
					Universal Text Editor User Manual
				</p>

			</div>
		</div>

		<!-- show off ends here-->
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="head-buttons">
						<a href="https://github.com/neurobin/uedit">View On Github</a>
<a href="uedit/uedit.php">Editor</a>
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
//$filename="https://raw.github.com/neurobin/uedit/master/README.md";
$filename="uedit/info.md";
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
