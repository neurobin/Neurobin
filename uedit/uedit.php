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

		<!--Navigation bar ends here -->
		<!-- fixed share button-->
		<?php
		require_once ('fixedsharebutton.php');
		?>
		<!-- fixed share button end-->


		<div class="container" id="toolBox" >

<div class="row">
<div class="col-xs-3">
<p>Class-------&gt;</p>
</div>
<div class="col-xs-8" id="classBar">
<form>

<table>
    <thead>
        
        <tr>
            <th>Element</th>
            <th>Class</th>
            <th>Element</th>
            <th>Class</th>
            <th>Element</th>
            <th>Class</th>
            
        </tr>
        
    </thead>
    
    <tbody>
        <tr>
            <td>div---&gt;</td>
            <td><input type="text" id="html-div" value=""></td>
            <td>p---&gt;</td>
            <td><input type="text" id="html-p" value=""></td>
            <td>h1---&gt;</td>
            <td><input type="text" id="html-h1" value=""></td>
        </tr>
        <tr>
            <td>h2---&gt;</td>
            <td><input type="text" id="html-h2" value=""></td>
            <td>h3---&gt;</td>
            <td><input type="text" id="html-h3" value=""></td>
            <td>h4---&gt;</td>
            <td><input type="text" id="html-h4" value=""></td>
                  
        
        </tr>
        <tr>
            <td>h5---&gt;</td>
            <td><input type="text" id="html-h5" value=""></td>
            <td>span---&gt;</td>
            <td><input type="text" id="html-span" value=""></td>
            <td>ul---&gt;</td>
            <td><input type="text" id="html-ul" value=""></td>
        </tr>
    </tbody>
    
</table>







</form>


</div>
<div class="col-xs-1"></div>


</div>		
		
		
			<div class="row" >
				<div class="col-xs-3">
<p>Tool Bar---------&gt;</p>
				</div>

<div id="toolBar1" class="col-xs-8">




</div>
<div class="col-xs-1" ></div>
</div>
</div>



<div class="container" id="ueditor">
<div class="row">
<div class="col-xs-3" id="uedit-settings-menu"><?php require_once('uedit/settings-menu.php'); ?>				</div>

<div class="col-xs-8 code">
<div id="editor-container" contenteditable="true" spellcheck="true" lang="en_US">
#!/bin/bash
echo "fdslkfjlsdj"
while true;do
echo fdksjlf
done
</div>
</div> 

<div class="col-xs-1"></div>
</div>
			</div>
	
		<!--Content  ends here -->
		<?php
		require_once ('footer.php');
		?>
<script>
createButtonFromJSON('toolBar1',"html","editor-buttons");

</script>
	</body>
</html>