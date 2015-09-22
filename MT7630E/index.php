<?php $projectName="MT7630E"; ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<base href="../" />
		<?php chdir("../"); ?>
		<?php
		require_once 'head.php';
		?>
		<meta name="description" content="Mediatek 7630E driver for Linux">
		<meta name="keywords" content="mt7630e,linux driver,mediatek,ubuntu,linux" />
		<title>MT7630E@Neurobin</title>

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
					MT7630E
				</p>
				<p class="project-tagline">
					Mediatek 7630E driver for Linux
				</p>

			</div>
		</div>

		<!-- show off ends here-->
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="head-buttons">
						<a href="https://github.com/neurobin/MT7630E">View On Github</a>
						<a href="https://github.com/neurobin/MT7630E/archive/release.zip">Download .zip</a>
						<a href="https://github.com/neurobin/MT7630E/archive/release.tar.gz">Download .tar.gz</a>

					</div>
				</div>
			</div>

		</div>

		<div class="container" id="content-container2">
			<div class="row">
				<div class="col-xs-2" id="content-left"></div>
				<div class="col-xs-8 " id="content-soft">
					<p>
						This is an easy installation package of the <a href="http://www.mediatek.com/en/downloads/mt7630-pcie/">Mediatek official driver</a> which is modified by various contributors throughout Github and released under GPL.
						</p>
<h2> Component:</h2>

<ol><li>
rt2x00: Wi-Fi driver source code</li><li>
btloader: Bluetooth firmware loader source code</li><li>
firmware: Firmware binary code (MT7650E234.bin is for Wi-Fi, mt76x0.bin is for Bluetooth)</li>
</ol>


<h2> Installation:</h2>

<p>
First give some file execution permission:</p>

     <pre><code>chmod +x install test uninstall</code></pre>
  <p> 
Now to install it, run:</p>  

     <pre><code>./install</code></pre>
     <p>
To test it without installing, run:</p>

     <pre><code>./test</code></pre>
   <p>
To uninstall, run:</p>  

      <pre><code>./uninstall</code></pre>
  
<p>
The driver will automatically load at startup.... </p> 

<h2>Contributors:</h2>
<ol>
	<li><a href="https://github.com/neurobin">Neurobin</a> </li>
	<li><a href="https://github.com/kuba-moo">kuba-moo</a> </li>
	<li><a href="https://github.com/anthonywong">anthonywong</a> </li>
	<li><a href="https://github.com/sergeyksv">sergeyksv</a> </li>
	<li><a href="https://github.com/tobiasBora">tobiasBora</a></li>
</ol>
<p>And many more unsung heroes...</p>

					<?php require_once('contribute-message.php'); ?>
					

					<p class="light-quote">You can follow this <a href="https://bugs.launchpad.net/ubuntu/+source/linux/+bug/1220146">bug report</a> for more information</p>
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
