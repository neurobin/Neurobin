<?php
function deployContentIndex($file){
$handle = fopen($file, "r");
$i=1;
if ($handle) {
	echo '<div id="content-index"><ol>';
    while (($line = fgets($handle)) !== false) {
        // process the line read.
        $line=trim($line);
        if(empty($line)) {continue;}
        $html='<li><a href="' .dirname($file) . "/#" . $i . '">' . $line . '</a></li>';
        echo $html;
        $i++;
    }
    echo "</ol></div>";
    fclose($handle);
} else {
    // error opening the file.
}
}

function deployIdedContentIndex($file){
$handle = fopen($file, "r");
$i=1;$j=1;
if ($handle) {
	echo '<div id="content-index"><ol>';
    while (($line = fgets($handle)) !== false) {
        // process the line read.
        $line=trim($line);
        if(empty($line)) {continue;}
        $pattern='/^#(\S+)(.*)/';
        preg_match($pattern, $line,$matches);
        $html='<li><a href="' .dirname($file) . "/#" . $matches[1] . '">' . $matches[2] . '</a></li>';
        echo $html;
        $i++;
    }
    echo "</ol></div>";
    fclose($handle);
} else {
    // error opening the file.
}

}

?>