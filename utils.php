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

?>