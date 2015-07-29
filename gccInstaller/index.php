<?php $projectName="gccInstaller"; ?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<base href="../" />
		<?php chdir("../"); ?>
		<?php
		require_once 'head.php';
		?>
		<meta name="description" content="Install GCC compiler from source">
		<meta name="keywords" content="gcc,installer,linux" />
		<title>GCC Installer@Neurobin</title>

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
					GCC INSTALLER
				</p>
				<p class="project-tagline">
					Install GCC compiler from source
				</p>

			</div>
		</div>

		<!-- show off ends here-->
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="head-buttons">
						<a href="https://github.com/neurobin/gccInstaller">View On Github</a>
						<a href="https://github.com/neurobin/gccInstaller/archive/master.zip">Download .zip</a>
						<a href="https://github.com/neurobin/gccInstaller/archive/master.tar.gz">Download .tar.gz</a>

					</div>
				</div>
			</div>

		</div>

		<div class="container" id="content-container2">
			<div class="row">
				<div class="col-xs-2" id="content-left"></div>
				<div class="col-xs-8 " id="content-soft">
					<p>
						This is a simple shell script written in bash to install GNU GCC compiler from official source code. This may be useful when you want the latest version of gcc which isn't available in binary form for your running Linux system.
					</p>
<h2> How To:</h2>
<ol><li>

    Download the official source code (in tar.bz2) from <a href="http://ftp.gnu.org/gnu/gcc/">here</a>. Choose the latest version.
</li><li>
    Put the <span class="quote">gccinstall</span> file into that folder where the <span class="quote">tar.bz2</span> archive is.
</li><li>
    Give it execution permission and run it.
</li><li>
    It will ask for version number, give it. If there is no other file starting with <span class="quote">gcc</span> in that folder then simply hitting enter without giving version number will do too.
</li>
</ol>
<?php require_once('contribute-message.php'); ?>
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
