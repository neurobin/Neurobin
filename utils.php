<?php
function scanDirAndSetAnchor($basedir,$exclude=['img','script','scripts','images']){
$dirs = array_diff(scandir($basedir), array('..', '.'));

foreach ($dirs as $dir){
 foreach($exclude as $ex){if($dir==$ex) {continue 2;} }

 if(is_dir($basedir.'/'.$dir)){
 	
$name=str_replace('-', ' ', $dir); 	
$name=ucfirst($name);
 echo '
 <li>
<a href="'.$basedir.'/'.$dir.'">'. $name .'</a> 
</li>
 ';

}
}
}

function getRelativePathIncludingBase($basedir){
$dirpath=realpath(dirname($_SERVER['PHP_SELF']));
$curdirpath=preg_replace('/.*?\/'.$basedir.'\//',$basedir.'/', $dirpath);
return $curdirpath;
}

function getRelativePath($basedir){
$dirpath=realpath(dirname($_SERVER['PHP_SELF']));
$curdirpath=preg_replace('/.*?\/'.$basedir.'\//','./', $dirpath);
return $curdirpath;
}

function deployGitDownloadButtons($username,$projectname,$branch){
	echo '
<div id="downloads-from-github">
<a href="https://github.com/'.$username.'/'.$projectname.'">View On Github</a>
<a href="https://github.com/'.$username.'/'.$projectname.'/archive/'.$branch.'.zip">Download .zip</a>
<a href="https://github.com/'.$username.'/'.$projectname.'/archive/'.$branch.'.tar.gz">Download .tar.gz</a>
</div>
';

}

?>