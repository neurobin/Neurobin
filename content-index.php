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
?>