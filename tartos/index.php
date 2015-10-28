<?php $projectName="tartos"; ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<base href="../" />
		<?php chdir("../"); ?>
		<?php
		require_once 'head.php';
		?>
		<meta name="description" content="TAR to self-extracting shell script">
		<meta name="keywords" content="self-extracting, shell, script, linux, archive, tar, bash, binary" />
		<title>Tar to shell script converter<?php echo $titletag ?></title>

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
					Tartos
				</p>
				<p class="project-tagline">
					TAR to self-extracting shell script (bash)
				</p>

			</div>
		</div>

		<!-- show off ends here-->
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="head-buttons">
						<a href="https://github.com/neurobin/tartos">View On Github</a>
						<a href="https://github.com/neurobin/tartos/archive/master.zip">Download .zip</a>
						<a href="https://github.com/neurobin/tartos/archive/master.tar.gz">Download .tar.gz</a>

					</div>
				</div>
			</div>

		</div>

		<div class="container" id="content-container2">
			<div class="row">
				<div class="col-xs-2" id="content-left"></div>
				<div class="col-xs-8 " id="content-soft">
					<p>
						The <span class="quote">tartos.sh</span> script is a standalone bash shell script which binds different type of TAR archives
						to a single bash shell script (The <span class="quote">tartos</span> file is a binary of it). This kind of approach is
						generally adopted to make a single install scipt from an existing tar archives with executables or
						installable software. It can be used to make a self extracting archive/installer
						which does some additional jobs like installing softwares, compared to the conventional
						tar archive files. The tartos script itself is written in bash and thus depends on it and on
						the package tar.
					</p>
					<h2>Supported TARs:</h2>
					<pre class="quote">.tar
.tar.lz
.tar.lzo
.tar.lzma
.tar.gz
.tar.xz
.tar.bz2</pre>					

 <h2>Install:</h2>
					<h3>From Source:</h3>

					<p>
						Give the "install" file execution permission and run it once in terminal or drag &amp; drop it in terminal and hit enter.
					</p>

					<h3>For Ubuntu:</h3>
					<pre><code>sudo apt-add-repository -y ppa:neurobin/ppa
sudo apt-get update
sudo apt-get install tartos
</code></pre>																																								

 <h2>Use:</h2>
					<pre><code>tartos archive scriptname</code></pre>
					<span class="quote">archive</span> is the TAR archive file/path and <span class="quote">scriptname</span> is the name of the script to be created <h2>Advanced Use:</h2>
					<pre><code>tartos archive scriptname "commands" -o outputdir</code></pre>

					<p>
						<span class="quote"> outputdir</span> is a directory which will be bound inside the shell script so that
						whent the script runs, the entire output will be put in that directory.
					</p>
					<h3>Key Points:</h3>
					<ol>
						<li>
							<p>
								It can take upto four arguments, the first argument is a tar archive,
							</p>
							<p>
								second one is the name of the target script file
							</p>
							<p>
								and third one is custom command and the 4th argument is of type [-o outdir]
							</p>
							<p>
								[-o outdir] can take any position as long as the sequence of the first three argument is maintained.
							</p>
							<p>
								Ex1: <span class="inline-code">tartos path_to_tar_file script_name_or_path command</span>
							</p>
							<p>
								Ex2: <span class="inline-code">tartos archive script command -o directory</span>
							</p>
							<p>
								Ex3: <span class="inline-code">tartos -O directory archive script command</span>
							</p>
							<p>
								-o and -O is equivalent
							</p>
						</li>
						<li>
							<p>
								output directory can be specified without -o too. In that case all the arguments are mandatory
							</p>
							<pre><code>tartos archive script "commands" outdir</code></pre>							


						</li>
						<li>
							It will ask for necessary arguments/info as it needs on the way.
						</li>
						<li>
							Give commands inside quotation mark: double quotation is recommended
						</li>
						<li>
							<p>
								Best way of giving custom command is to write them in another script and put that script
								as a command into tartos command input.
							</p>
							Ex:
							<pre><code>Enter custom command or script (if any): ./mycustomscript</code></pre>							


							<p class="quote">
								if the path to the script contains space, use double quotes
							</p>
						</li>
					</ol>

					<h2>Manual Page:</h2>
					<p>
						After installing it, you can access the man page by running:
					</p>
					<pre><code>man tartos</code></pre>
					<p>
						or can get help by running:
					</p>
					<p class="inline-code">
						tartos -h
					</p>
					<p>
						or
					</p>
					<p class="inline-code">
						tartos --help
					</p>

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
