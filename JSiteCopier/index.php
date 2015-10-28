<?php $projectName="JSiteCopier"; ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<base href="../" />
		<?php chdir("../"); ?>
		<?php
		require_once 'head.php';
		?>
		<meta name="description" content="Copy An Entire Website">
		<meta name="keywords" content="website,copier,jsitecopy,linux,JSiteCopier" />
		<title>Website copier<?php echo $titletag ?></title>

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
					JSiteCopier
				</p>
				<p class="project-tagline">
					Copy An Entire Website
				</p>

			</div>
		</div>

		<!-- show off ends here-->
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="head-buttons">
						<a href="https://github.com/neurobin/JSiteCopier">View On Github</a>
						<a href="https://github.com/neurobin/JSiteCopier/archive/release.zip">Download .zip</a>
						<a href="https://github.com/neurobin/JSiteCopier/archive/release.tar.gz">Download .tar.gz</a>

					</div>
				</div>
			</div>

		</div>

		<div class="container" id="content-container2">
			<div class="row">
				<div class="col-xs-2" id="content-left"></div>
				<div class="col-xs-8 " id="content-soft">
					<p>
						This is a shell script written in bash to copy an entire website. It uses  <span class="quote">wget</span> to download web pages and mirror the site into a local directory.
					</p>
					<h2>Install:</h2>
					<ol>
						<li>
							<p>
								You can simply run the script <span class="quote">jsitecopy</span> in terminal or install it by running <span class="inline-code">install.sh</span>. Installing it will enable it to be run from menu (Network category) with mouse click or from terminal just by entering <span class="inline-code">jsitecopy</span> without any path.
							</p>
						</li>
						<li>
							<p>
								Whether you run either of them , you first need to give them execution permission.
							</p>
						</li>
					</ol>
					<h2> How To Use:</h2>
					<ol>
						<li>

							Make sure the url contains the <span class="quote">www</span> or <span class="quote">http</span> term, otherwise it may download a single file and leave everything untouched.
						</li>
						<li>
							Don't use quotes in urls or file/folder path
						</li>
						<li>
							<p>
								Spaces are allowed in path
							</p>
							<pre class="quote"><code>Ex: ~/Downloads/New Site
~/Downloads/"New Site" is invalid because quotes aren't allowed.</code></pre>

						</li>
						<li>
							Verbose mode means it will show output in terminal or put a log in a file in wget-log in your home directory
						</li>
						<li>
							Interval means the time interval between each file download.
						</li>
						<li>
							This script runs wget which works in the background even after closing the terminal. If you want to close it, you have to run <span class="inline-code"> pkill wget</span> in a terminal.
						</li>
					</ol>

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
