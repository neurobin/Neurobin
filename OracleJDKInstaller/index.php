<!DOCTYPE html>
<html lang="en">
	<head>
		<base href="../" />
		<?php chdir("../"); ?>
		<?php
		require_once 'head.php';
		?>
		<meta name="description" content="Oracle JDK Installer">
		<meta name="keywords" content="oracle, jdk, installer, linux" />

		<title>Oraji@Neurobin</title>

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
					Oraji
				</p>
				<p class="project-tagline">
					Oracle JDK Installer
				</p>

			</div>
		</div>

		<!-- show off ends here-->
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="head-buttons">
						<a href="https://github.com/neurobin/OracleJDKInstaller">View On Github</a>
						<a href="https://github.com/neurobin/OracleJDKInstaller/archive/master.zip">Download .zip</a>
						<a href="https://github.com/neurobin/OracleJDKInstaller/archive/master.tar.gz">Download .tar.gz</a>

					</div>
				</div>
			</div>

		</div>

		<div class="container" id="content-container2">
			<div class="row">
				<div class="col-xs-2" id="content-left"></div>
				<div class="col-xs-8 " id="content-soft">
					<p>
						Oracle JDK installler script for linux.
					</p>
					<h2>How To Use:</h2>
					<ol>
						<li>
							Put the <span class="quote">oraji</span> file inside the folder where you have downloaded the archive of oracle jdk (tar.gz)
						</li>
						<li>
							Give the install script execution permission <span class="inline-code">sudo chmod +x path_to_the_folder/oraji</span>
						</li>
						<li>
							Now run the script <span class="quote">oraji</span> in terminal, or just drag and drop it in terminal and hit enter.
						</li>
						<li>
							It will ask for version number. Give the version number. <span class="quote">Example: 8 or 8u25, must match with the archive</span>
						</li>
					</ol>

					<h2>Contribute:</h2>
					<p class="quote">
						If you have any suggestion or see any problem, please open an issue <a href="https://github.com/neurobin/OracleJDKInstaller/issues">here</a>
					</p>

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
