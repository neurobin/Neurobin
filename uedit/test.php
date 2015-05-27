<!DOCTYPE html>
<html xml:lang="en_US" lang="en_US">
	<head>
		<base href="../" />
		<?php chdir("../"); ?>
		<?php
		require_once 'head.php';
		?>
		
		<script src="uedit/scripts/src-noconflict/ace.js" type="text/javascript"></script>
		<script src="uedit/scripts/src-noconflict/ext-language_tools.js"></script>
		<script src="uedit/scripts/src-noconflict/mode-php.js"></script>
		<script src="uedit/scripts/src-noconflict/ext-spellcheck.js"></script>
		<script src="uedit/scripts/uedit.js" type="text/javascript"></script>
		<meta name="description" content="Universal Text Editor">
		<meta name="keywords" content="neurobin,text,editor,uedit" />
		<title>Uedit @ Neurobin</title>
	</head>
	<body onload="startTime()">

		<?php
		require_once ('header.php');
		?>

		<?php
		require_once ('fixedsharebutton.php');
		?>
		<!-- fixed share button end-->






<div class="container" id="ueditor" >
<div class="row" id="ueditor-row">

<div class="col-xs-3" id="toolBox">
<div id="toolBar1">

</div>

</div>






<div class="col-xs-9">
<div id="editor-container" contenteditable="true" spellcheck="true" lang="en_US">
#!/bin/bash
echo "fdslkfjlsdj"
while true;do
echo fdksjlf
done
</div>
</div> 


</div>
			</div>
	

<script>
createButtonFromJSON('toolBar1',"html","editor-buttons");

</script>
	</body>
</html>