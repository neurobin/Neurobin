<!DOCTYPE html>
<html lang="en">
	<head>
		<base href="../../"/>
		<?php chdir("../../"); ?>
		<?php
		require_once 'head.php';
		?>

		<meta name="description" content="Softwares for Linux">
		<meta name="keywords" content="linux, softwares, shell, softs, software, soft" />
		<title>Linux Softwares<?php echo $titletag ?></title>

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
						<p><img alt="logo" src="img/linux.jpeg" />Linux<sup>Softwares</sup>
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
							<a href="shc">Shell Script Compiler</a>
						</li>
						<li>
							<a href="rnm">rnm (Bulk rename utility for GNU/Linux)</a>
						</li>
						<li>
							<a href="tartos">Tartos (TAR to self extracting shell script)</a>
						</li>
						<li>
							<a href="JLIVECD">JLIVECD (Live CD/DVD customization tool)</a>
						</li>
						<li>
							<a href="JSiteCopier">JSiteCopier (Website copier)</a>
						</li>
						<li>
							<a href="OracleJDKInstaller">OracleJDKInstaller</a>
						</li>
						<li>
							<a href="php2html">PHP2HTML (PHP To HTML Converter)</a>
						</li>
						<li>
							<a href="gccInstaller">GCC Installer</a>
						</li>
						<li>
							<a href="MT7630E">MT7630E (driver for this Wifi+BT combo chip)</a>
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
