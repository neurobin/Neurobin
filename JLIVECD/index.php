<?php $projectName="JLIVECD"; ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<base href="../" />
		<?php chdir("../"); ?>

		<?php
		require_once 'head.php';
		?>
		<meta name="description" content="Live CD/DVD customization tool">
		<meta name="keywords" content="customize ubuntu live cd/dvd, customize linux mint live cd/dvd, ubuntu live cd/dvd customization, linux mint live cd/dvd customization, live cd/dvd customization" />

		<title>Live CD/DVD customization tool for Ubuntu and it's derivatives<?php echo $titletag ?></title>
		<link rel="shortcut icon" href="JLIVECD/img/48.png" type="image/x-icon" />

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
					JLIVECD
				</p>
				<p class="project-tagline">
					Live CD/DVD customization tool
				</p>

			</div>
		</div>

		<!-- show off ends here-->
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="head-buttons">
						<a href="https://github.com/neurobin/JLIVECD">View On Github</a>
						<a href="https://github.com/neurobin/JLIVECD/archive/release.zip">Download .zip</a>
						<a href="https://github.com/neurobin/JLIVECD/archive/release.tar.gz">Download .tar.gz</a>

					</div>
				</div>
			</div>

		</div>

		<div class="container" id="content-container2">
			<div class="row">
				<div class="col-xs-2" id="content-left"></div>
				<div class="col-xs-8 " id="content-soft">
					<h2>Disclaimer:</h2>
					<p>

						Customized ISOs for personal use are fine. If you want to share your customization with others, whether for free or for purchase, you'll have to rename it; remove all distro specific artwork, branding, and other identity elements; and you can't confuse your intended users about the customization being associated in any way with the base distro.

						You're free to use the softwares without renaming those, as they are licensed under GPL. But otherwise, it will be your own creation and no longer you base distros'.

						The name and identity elements of a distro are trademarked and copyrighted. Unless you have approval from appropriate authorization you can't use those (identity elements and name).
					</p>
					<h2 id="features">Features:</h2>
					<ol>
<li>
You can save your project in a suitable directory and keep adding and changing things while checking the ISOs' built on those changes.
</li>
<li>
Your changes are always saved. You can resume it whenever you like.
</li>
<li>
It remembers your previous choice (the project directory, the desired ISO name and the original ISO path). Just hit <kbd>Enter</kbd> when you are prompt for input in such cases.
</li>
<li>You only need to give it the original ISO once, every time after that, you can just go to the chroot terminal and keep customizing things.</li>
<li>It remembers user choices for various options and prompts both globally and locally (project-wise).</li>
					
					
					
					</ol>
					
					
					

					<h2>Requirements:</h2>
					<ol>
					<li>
bash (This is installed by default in most Linux distros)					
					</li>
						<li>

							squashfs-tools
						</li>
						<li>
							genisoimage
						</li>
						<li>xterm (optional)</li>
					</ol>

					<p>
						Install requirements:
					</p>
					<pre><code>sudo apt-get install squashfs-tools genisoimage</code></pre>
					<p>Optionally you can keep <code>xterm</code> installed. It will act as a backup terminal if the default terminal fails to run.</p>
					<pre><code>sudo apt-get install xterm</code></pre>
					<h2>Installation:</h2>

					Give the <span class="quote">install.sh</span> file execution permission and run it in terminal: 
					<pre><code>chmod +x ./install.sh
./install.sh     # or you can just drag & drop in terminal</code></pre>
					<h2>How to use:</h2>

					<p>
						Run <code>JLstart</code> in a terminal:
					</p>
					<pre><code>~$ JLstart

Is this a new project: (y/n)?n

[sudo] password for user:

...............................</code></pre>
					<p>
						or run it from the menu:
					</p>
					<img alt="menu screenshot" src="JLIVECD/img/runjlivecd.png" class="half-image"/>
					<p>
						Hints are given on the go, follow them to successfully create a customized live cd/dvd.
					</p>
<h2>Directories & Files:</h2>
<ol>
<li>
In your project directory, you will find some default directories. Don't change their names. The directories are:
<ol>
<li>
<span class="quote">debcache:</span> <span class="light-quote">.deb</span> files are kept here. See <a href="JLIVECD/#debcache-management">debcache management</a> for more details.
</li>
<li>
<span class="quote">edit:</span> This is the root filesystem (i.e /) for the live system (chroot system). Any change you make here will appear in the finalized ISO.
</li>
<li>
<span class="quote">extracted:</span> This is where the original ISO is extracted. You can change several things here, like Diskname, release, date, splash screen, etc.
</li>
<li>
<span class="quote">mnt:</span> A directory used only for mounting ISO image.
</li>
</ol>
<li>
There's also an additional file named <span class="quote">.config</span>, which contains configuration of the corresponding project i.e DiskName and some other defaults for various options.
</li>
</li>

</ol>					
					

					<h2>Things To Care:</h2>
					<ol>

						<li>

							<p>
								Don't use quotation in file/folder path
							</p>

							<p >
								<span class="quote">~/"some folder"</span> or <span class="quote">"~/some folder"</span> is invalid
							</p>

							<p >
								<span class="quote">~/some folder</span> is valid
							</p>
						</li>
						<li>
							Don't use <span class="quote">spaces</span> in project path (only allowed in base iso path).
						</li>
						<li>
In a fresh start, don't close the terminal when it is extracting the original ISO. You can close it safely after it finishes extracting and the chroot is closed and another prompt for input is appeared.			
						</li>
						<li>Don't close the chroot and host terminal simultaneously. You can close the host terminal safely after an input prompt appears after closing the chroot terminal.</li>
<li>
The default answer is <span class="quote">no</span> for all <span class="quote">yes/no</span> type questions unless specified otherwise.
</li>		
<li>
The default answers for <code>yes/no</code> type questions are changed according to previous choices for some questions (retain home directory? etc..). For example, if you choose <code>y</code> for the question <code>retain home directory (y/n)?</code>; next time if you just hit <kbd>Enter</kbd>, it will take <code>y</code> instead of <code>n</code>. This is project specific i.e each project remembers its own options.

</li>
			
					</ol>
					
					<h2>Some Tips & Tricks:</h2>
					<ol>
					<li>
					If you are not being able to get connected to internet in chroot, you can try running the code: <code>JLopt -rn</code> in another terminal in your main system. This may happen if you start JLIVECD before connecting your pc to the internet
					</li>
					<li>
					If you want to change the timeout value then run this code in a terminal in your main system:
					<pre><code>JLopt -t timeout_value</code></pre><span class="quote">timeout_value</span> should be replaced with your desired time in seconds. Ex: for 12 seconds timeout:
					<pre><code>JLopt -t 12</code></pre>
					</li>
					<li>
JLIVECD seems to have problem running the <code>mate-terminal</code> properly. For mate DE, install <code>xterm</code> instead:
<pre><code>sudo apt-get install xterm</code></pre> 			
					</li>
					<li>
You can change the default terminal JLIVECD uses for chroot. To change the primary default terminal, run the following command in a terminal in your main system:
<pre><code>JLopt -t1 actual-terminal-command</code></pre>
To change the secondary default:
<pre><code>JLopt -t2 actual-terminal-command</code></pre>
For Example, adding gnome-terminal as the primary default:
<pre><code>JLopt -t1 gnome-terminal</code></pre>
		</li>
					
					</ol>

					<h2 id="debcache-management">Special Feature:</h2>

					<p>
						I call it <span class="quote">debcache management!</span>
					</p>
					<ol>

						<li>
							Just put your <span class="quote">.deb</span> files in <span class="quote">edit/var/cache/apt/archives</span> folder and they won't be downloaded again in the software installaion process.
						</li>
						<li>
							They will be moved automatically to a folder named <span class="quote">debcache</span> (located in the same directory as <span class="quote">edit</span> prior to image creation so that they won't be included in the iso image.
						</li>
						<li>
							You never need to delete <span class="quote">.deb</span> files from <span class="quote">edit/var/cache/apt/archives</span> manually and you shouldn't.
						</li>
						<li>
							If you don't delete the .deb files then you will never need to download them again as long as they remain the updated files according to your package list (which you get from <span class="inline-code">apt-get update</span>. debcache management will take proper measures to move the files to required places to minimize downloads of packages from internet.
						</li>
						<li>
							Altenatively, you can put the <span class="quote">.deb</span> files in <span class="quote">debcache</span> folder too, but in that case you need to run the application after you have finished copying files to this folder...
						</li>
					</ol>

					<h2>Change Logs:</h2>
					<span class="quote">version 2.0:</span>

					<ol>
						<li>
							<p>
								You can use short cut in names for path to base iso i.e <span class="quote">xubuntu</span> for <span class="quote">xubuntu-14.04.1-x64.iso</span> if there is no other file named <span class="quote">xubuntu</span> in the same folder. You can even use only <span class="quote">x</span> if there is no other file starting with x in the same folder.
							</p>
							<p>
								Example:
							</p>
							<span class="inline-code"> enter base iso path: ~/Downloads/x</span>

							<p>
								As there is only one file that matches <span class="quote">x</span> is <span class="quote">xubuntu-14.04.1-x64.iso</span> it will take that file as input automatically.
							</p>
						</li>
						<li>
							You can use full path wih or without <span class="quote">.iso</span>
						</li>
					</ol>
					
					<span class="quote">version 2.0.5:</span>
					<ol>
					<li>
					New install or update of this tool will not delete the history i.e hitting <kbd>Enter</kbd> to take the previous choice won't be affected. This was first implemented in version 2.0.4, i.e version >=2.0.4 can be safely updated to any later version.
					</li>
					<li>
					Added another compression method (fast compression).
					</li>
<li>
Minor potential bug fixes.
</li>					
<li>
Docs updated.
</li>
					
					</ol>
					
					<span class="quote">version 2.0.7:</span>
					<ol>
<li>
<code>xterm</code> is added as a secondary terminal besides the default <code>x-terminal-emulator</code>.
</li>	
<li>
Docs updated.
</li>
					
					
					
					</ol>
					<span class="quote">version 2.1.0</span>
<ol>
<li>You can change default terminals without applying patch to the source code.</li>
<li>It now remembers several project-wise options (delete home directory?, fast compression?, etc..).</li>
<li>Options are handled with config files both globally and project-wise.</li>
<li>Added show version info (<code>JLopt -v</code>)</li>
<li>Added show help menu (<code>JLopt -h</code>)</li>
<li>New script <code>JLopt</code> contains several useful functionality.</li>
<li>Several potential bug fixes.</li>
<li>Docs updated.</li>


</ol>					
					

					<h2>Tested OS:</h2>
					<ul>
						<li>
							Linux Mint 17 cinnamon
						</li>
						<li>
							Linux Mint 17 XFCE
						</li>
						<li>
							Xubuntu 14.04.1 LTS
						</li>
						<li>
							Ubuntu 14.04.1 LTS
						</li>
						<li>
							Ubuntu 14.04.3 LTS
						</li>
					</ul>

					<h2>Additonal info:</h2>
					<ol>
						<li>
							<p>
								In Linux Mint 17 XFCE there's a bug. To fix this edit <span class="quote">/usr/sbin/invoke-rc.d</span> file (in chroot) as: replace <span class="quote">exit 100</span> with <span class="quote">exit 0</span> at line 285 and 421, then apply upgrade. after upgrading revert this modification (must).
							</p>
						</li>
						<li>
							<p>
								In Linux Mint 17 xfce, if you install nautilus then it will set gnome-session as default session and if gnome desktop is not installed then no desktop window will show up in live session. change the link <span class="quote">/usr/bin/x-session-manager</span> to point to <span class="quote">/usr/bin/xfce4-session</span>
							</p>
						</li>
						<li>
							<p>
								In xubuntu 14.04.1 there's another bug: Can't open <span class="quote">/scripts/casper-functions</span> error) to fix this, run this code in chroot:
							</p>
							<pre><code>ln -s /usr/share/initramfs-tools/scripts /scripts</code></pre>																																										







							<p>
								Follow the following link for bug report:
							</p>

							<a href="https://bugs.launchpad.net/ubuntu/+source/systemd/+bug/1325142">https://bugs.launchpad.net/ubuntu/+source/systemd/+bug/1325142</a>
						</li>
						<li>
						<p>
In Ubuntu 14.04 Gnome LTS you might encounter two more bugs: 						
						</p>
						<p>One should be solved by editing:</p><pre><code>/var/lib/dpkg/info/whoopsie.prerm
/var/lib/dpkg/info/libpam-systemd\:amd64.prerm
/var/lib/dpkg/info/libpam-systemd\:amd64.postinst</code></pre>

(change <code>exit $?</code> to <code>exit 0</code> in the <span class="light-quote">invoke-rc.d</span> lines)
<p>Other one should be solved by editing:</p><pre><code>/etc/kernel/postrm.d/zz-update-grub
/etc/kernel/postinst.d/zz-update-grub</code></pre>
find the following and comment out the <code>if</code> an <code>fi</code> line:
<pre><code>if [ -e /boot/grub/grub.cfg ]; then
   #exec update-grub
fi
</code></pre>
<p>Revert these changes before exiting the chroot.</p>
<p>Follow the following link for bug report:</p>
<a href="https://bugs.launchpad.net/ubuntu/+source/systemd/+bug/1325142">https://bugs.launchpad.net/ubuntu/+source/systemd/+bug/1325142</a>
						
						</li>
<li>
You may encounter another bug: <span class="quote">Ubiquity installer</span>, hang/freeze on harddisk detection`. This bug can be solved by editing the file <span class="light-quote">edit/usr/share/applications/ubiquity-gtkui.desktop</span> and changing the section <code>exex</code> from

<pre><code>sh -c 'ubiquity gtk_ui'</code></pre>

to 

<pre><code>sh -c 'sudo ubiquity gtk_ui'</code></pre>


</li>						
						
						
					</ol>

<?php require_once('contribute-message.php'); ?>

					<h2><a href="http://en.wikipedia.org/wiki/JLIVECD">Find On Wiki</a></h2>
					<?php require_once('social-pages.php'); ?>

					<h2><a id="authors--" class="anchor" href="#authors--" aria-hidden="true"><span class="octicon octicon-link"></span></a>Author: </h2>

					<p>
						Md. Jahidul Hamid
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
