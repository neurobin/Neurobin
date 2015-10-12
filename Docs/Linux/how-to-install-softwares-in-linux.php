<!DOCTYPE html>
<html lang="en">
	<head>
		<base href="../../" />
		<?php chdir("../../"); ?>
		<?php
		require_once 'head.php';
		?>

		<meta name="description" content="Installing Softwares On Linux">
		<meta name="keywords" content="tutorial, on, how, to, install, softwares, linux, app, installing, software" />

		<title>Installing Softwares On Linux | Neurobin</title>

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
					Installing Softwares In Linux
				</p>
				<p class="tutorial-tagline">
					<a class="disabled-link" id="applicable-to">Applicable To:</a> Ubuntu, Ubuntu family distributions, Linux Mint, Debian(partial) and derivatives.
				</p>

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
							<ol>
								<li>
									<a href="Docs/Linux/how-to-install-softwares-in-linux.php#1">Through a software manager</a>
								</li>
								<li>
									<a href="Docs/Linux/how-to-install-softwares-in-linux.php#2">Through synaptic package manager</a>
								</li>
								<li>
									<a href="Docs/Linux/how-to-install-softwares-in-linux.php#3">Through terminal</a>
								</li>
								<li>
									<a href="Docs/Linux/how-to-install-softwares-in-linux.php#4">PPA installation</a>
								</li>
								<li>
									<a href="Docs/Linux/how-to-install-softwares-in-linux.php#5">Installing .deb packages</a>
								</li>
								<li>
									<a href="Docs/Linux/how-to-install-softwares-in-linux.php#6">Installing .rpm packages</a>
								</li>
								<li>
									<a href="Docs/Linux/how-to-install-softwares-in-linux.php#7">Installing from archives</a>
								</li>
								<li>
									<a href="Docs/Linux/how-to-install-softwares-in-linux.php#8">Pre-installed archives</a>
								</li>
								<li>
									<a href="Docs/Linux/how-to-install-softwares-in-linux.php#9">Installing .sh files</a>
								</li>
								<li>
									<a href="Docs/Linux/how-to-install-softwares-in-linux.php#10">Installing .run files</a>
								</li>

							</ol>

						</div>
					</nav>
				</div>
				<div class="col-xs-8 " id="content-tutorial">
					<!-- This is where you will put the content-->
					<p>
						There are several ways of installing softwares in linux and they are described in many tutorials. this tutorial will cover most of the processes of installing softwares in a linux system.
					</p>
					<p class="section-head">
						Online installation:
					</p>

					<p class="section-sub2" id="1">
						#1. Through a software manager:
					</p>

					First open the terminal and run this command to get the latest version of the software:
					<pre><code>sudo apt-get update</code></pre>																				
					

Then





					<ol>
						<li>
							Open software manager/center. it's in the menu.
						</li>
						<li>
							Search your desired software in the search box
						</li>
						<li>
							If it's in the list then it will appear before you .
						</li>
						<li class="message">
							If it's not in the list follow the instructions in the ppa installation section of this tutorial.
						</li>
						<li>
							Now double click on the desired software entry and then click "install".
						</li>
						<li>
							It will be installed on your system as per your network connection speed.
						</li>
					</ol>
					<p class="section-sub2" id="2">
						#2. Through synaptic package manager:
					</p>

					If it is absent in your linux distribution then you will have to install it through software manager/center first.

					To me it's the best way to install softwares in linux.
					<ol>
						<li>
							Open synaptic package manager. click reload to get the latest version of the softwares.
						</li>
						<li>
							Search your desired software/s in the search box.
						</li>
						<li>
							Right click each software you want to install and mark them for installing. it will mark additional dependencies on it's own.
						</li>
						<li class="message">
							If your softwares not in the list follow the instructions in the ppa installation section of this tutorial.
						</li>
						<li>
							After marking for installing, click apply
						</li>
						<li>
							It will download and install the marked softwares.
						</li>
					</ol>
					<p class="section-sub2">
						Additional info:
					</p>

					If you have a list of softwares then save the file with the list, with .list extension (this file should contain the exact package name one at every line with an extra string "install" included after each package name preceding by an space/tab). then go to file->read markings  and then brows to the file and open it. synaptic will mark the softwares in the list automatically.

					<p class="section-sub2" id="3">
						#3. Through terminal:
					</p>

					If you know the exact name of the software then you can install it through terminal by simply entering the command:
					<pre><code>sudo apt-get update    <span class="comment">(to get the latest version)</span> 
sudo apt-get install software-package-name
</code></pre>
					That's it. <span class="message">If it says "unable to locate package..."  then follow the instructions in the ppa installation section of this tutorial. </span>
					<p class="section-sub2" id="4">
						#4. PPA installation:
					</p>

					If your software's not in the software list then it may come from private package archives (PPA's).
					<br />

					These are private development of softwares so use it at your own risk.
					<br />

					Steps:
					<ol>
						<li>
							Search google for the ppa address for your software. (like ppa for package-name)
						</li>
						<li>
							Then add it to the repository by entering this command in terminal:

							<p class="inline-code">
								sudo add-apt-repository ppa:.....whatever_it_is
							</p>
						</li>
						<li>
							Then run this command (must)

							<p class="inline-code">
								sudo apt-get update
							</p>
						</li>
						<li>
							Now your desired software is in the list. so you can follow one of the above processes (#1,#2,#3)
						</li>
					</ol>

					<p class="section-head">
						Offline installation:
					</p>

					Say, you downloaded your desired softwares from some website. in this case if you don't trust the origin of the software then don't install it or install it at your own risk.

					Your downloaded softwares may come as a .zip,  tar.gz, tar.bz2,    .deb,   .rpm,  .tgz,   tar.xz  or any other types of archives.

					If you are in linux mint or in ubuntu or in a debian based OS try to download .deb packages because it's easier to install in debian based OS.

					<p class="section-sub2" id="5">
						#5. Installing .deb packages:
					</p>

					<p class="section-sub3">
						through terminal:
					</p>
					<pre><code>cd path_to_the_directory_that_contains_the_.deb_file
sudo dpkg -i filename.deb
</code></pre>
					<p class="section-sub3">
						Through gdebi package manager:
					</p>

					<p class="message">
						if gdebi is not installed then you have to install it through one of the processes #1,#2,#3 (requires internet connection)
					</p>

					Then double click on the .deb file or open the file with gdebi package manager and click install.

					It will be istalled soon.
					<p class="section-sub2" id="6">
						#6. Installing .rpm packages:
					</p>

					rpm has to be installed in the system, otherwise follow one of the processes #1,#2,#3 to install rpm (requires internet connection)
					<pre><code>cd path_to_the_directory_that_contains_the_.rpm_file
sudo rpm -i filename.rpm
</code></pre>																				





					<p class="section-sub2" id="7">
						#7. Installing from archives(.zip tar.gz.......etc):
					</p>

					these archives generally conatains the source of the package. each of them generally has a different approach to install. I will be discussing a common method which will supposedly work for all of them.

					General requirements:
					<ol>

						<li>
							flex
						</li>

						<li>
							bison or bison++
						</li>

						<li>
							python
						</li>
					</ol>
					<p>
						As these archives contains the source, your system needs the required programming languages to compile and build the source. so the general requirement packages stated above may not be sufficient for you. in that case you have to install the required packages through one of the processes #1,#2,#3 (requires internet connection).
						You can know about the dependencies about your software in a readme file included in the archives.
					</p>
					Steps:
					<ol>
						<li>
							Open the archives with archive manager by double clicking it, then extract it.
							<pre><code>cd path-to-the-extracted-folder</code></pre>																												





						</li>
						<li>
							Inside the extracted folder look carefully....
							<ol>
								<li>
									If you find a file named <span class="quote">configure</span> then : 									<pre><code>./configure
make
sudo make install
</code></pre>
									
If the first code fails to execute then run this code before above codes:
 									<pre><code>chmod +x configure</code></pre>
								</li>
								<li>
									If you find a file named <span class="quote">install.sh</span> then 									<pre><code>chmod +x install.sh
./install.sh or sudo ./install.sh <span class="comment">(if it needs root permission)</span>
</code></pre>
									
or you can double click it and select run in terminal or simply run.





									<p class="message">
										N.B: Sometimes there is a file, something like your_software_name.sh is found instead of install.sh. for this case you have to replace install.sh with the correct name in the previous codes.
									</p>
								</li>
								<li>
									If you find a file named <span class="quote">install</span> then 									<pre><code>chmod +x install
./install or sudo ./install <span class="comment"> (if it needs root permission)</span>
</code></pre>
									
or you can double click it and select run in terminal or simply run





								</li>
								<li>
									If you find a file named <span class="quote">make</span> (if there is no configure file) then 									<pre><code>make
sudo make install</code></pre>





								</li>
							</ol>
						</li>
					</ol>
					If you still can't find the required files

					then it may be in a special folder (generally in a folder named 'bin'). move to this folder with cd command with appropriate path and then look again and follow the same process.

					<p class="section-sub2" id="8">
						#8. Pre installed archives:
					</p>

					Some packages are archived as pre installed packages i.e you don't have to install them , you just need to extract them in a secure place and theres an executable file (name is generally same as the software name) in the extracted folder or in child folders like bin,build etc. you have to find it and make it executable.
					<br />
					<p class="qoute">
						Example: eclipse, adt bundle (android developing tool)
					</p>

					Code to make executable:
					<pre><code>chmod +x filename_with_exact_path
</code></pre>																									
Then you can run it with :

 					<pre><code>cd filename_with_exact_path
./filename</code></pre>

or double clicking it and selecting run in terminal or run, whatever supports your software.






					<p class="section-sub2" id="9">
						#9. Installing .sh files:
					</p>

					Some softwares come with a .sh file to install it
					<pre><code>chmod +x filename.sh 
./filename.sh <span class="comment"> or sudo ./filename.sh (if it needs root permission)</span>
</code></pre>																									
or double click it and select run in terminal or run, whatever supports your software.






					<p class="section-sub2" id="10">
						#10. Installing .run files:
					</p>

					Some softwares come with a .run file to install it
					<pre><code>chmod +x filename.run
./filename.run <span class="comment"> or sudo ./filename.run (if it needs root permission)</span>
</code></pre>																									
or double click it and select run in terminal or run, whatever supports your software.






					<p class="section-sub3">
						Additional info about offline installation:
					</p>

					Often, softwares generally have a lot of dependencies. You need to download all of them, which sometimes can be very difficult and tiring. for this you can follow the instructions here which will save your time and effort.

					<p class="error">
						W: The first three online methods are the safest way to install a software. For other methods you have to take risks of potential damage of your system or software dependencies.
					</p>
					<!-- This is where you will put the content-->
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
