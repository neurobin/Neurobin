<?php $projectName="shc"; ?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<base href="../" />
		<?php chdir("../"); ?>
		<?php
		require_once 'head.php';
		?>
		<meta name="description" content="Shell Script Compiler">
		<meta name="keywords" content="shell, script, compiler, linux" />

		<title>SHC@Neurobin</title>

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
					SHC
				</p>
				<p class="project-tagline">
					The Generic Shell Script Compiler
				</p>

			</div>
		</div>

		<!-- show off ends here-->
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="head-buttons">
						<a href="https://github.com/neurobin/shc">View On Github</a>
						<a href="https://github.com/neurobin/shc/archive/3.9.1.zip">Download .zip</a>
						<a href="https://github.com/neurobin/shc/archive/3.9.1.tar.gz">Download .tar.gz</a>

					</div>
				</div>
			</div>

		</div>

		<div class="container" id="content-container2">
			<div class="row">
				<div class="col-xs-2" id="content-left"></div>
				<div class="col-xs-8 " id="content-soft">
					<p>
						SHC is a generic shell script compiler. It takes a script, which is
						specified on the command line and produces C source code. The
						generated source code is then compiled and linked to produce a stripped binary.
					</p>
					<h2><a id="install" class="anchor" href="#install" aria-hidden="true"><span class="octicon octicon-link"></span></a>Install:</h2>
					<a class="inline-code">cd</a> to directory "main"... 					<pre><code>cd main
make
sudo make install
</code></pre>
					or simply run the <a class="inline-code">install</a> script/file provided, in terminal: 					<pre><code>./install</code></pre>

 <h3>For Ubuntu</h3>
					<pre><code>sudo add-apt-repository -y ppa:neurobin/ppa
sudo apt-get update
sudo apt-get install shc
</code></pre>																									

 <h2><a id="testing" class="anchor" href="#testing" aria-hidden="true"><span class="octicon octicon-link"></span></a>Testing:</h2>
					<a class="inline-code">cd</a> to test "directory"... 					<pre><code>cd test
shc -f test.bash -o test</code></pre>
					output binary file will be <a class="quote">test</a>. If no output file is specified
					by the <a class="inline-code">-o</a> option, then it will create an executable with <a class="inline-code">.x</a> extension
					by default

					<h2><a id="known-bugs" class="anchor" href="#known-bugs" aria-hidden="true"><span class="octicon octicon-link"></span></a>Known bugs:</h2>
					<p class="quote">
						The one (and I hope the only) limitation using shc is the
						_SC_ARG_MAX system configuration parameter.
						It limits the maximum length of the arguments to the exec function,
						limiting the maximum length of the runnable script of shc.
						!! - CHECK YOUR RESULTS CAREFULLY BEFORE USING - !!
					</p>
					<?php require_once('contribute-message.php'); ?>
					
					<h2><a id="authors--" class="anchor" href="#authors--" aria-hidden="true"><span class="octicon octicon-link"></span></a>Authors: </h2>
					<p>
						Francisco Rosales Garcia
					</p>
					<p>
						<a href="mailto:frosal@fi.upm.es">frosal@fi.upm.es</a>
					</p>
					<p>
						Jahidul Hamid
					</p>
					<p>
						<a href="http://github.com/neurobin">http://github.com/neurobin</a>
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
