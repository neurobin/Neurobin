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
		<script src="uedit/scripts/FileSaver.min.js" type="text/javascript"></script>
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
		
<div id="openModal" class="modalDialog">
	<div>
		<a onclick="closeModalDialog()" title="Close" class="close">X</a>
		<h2></h2>
		<p></p>
		<button name="No" value="left" id="openModal-btn-left" onclick="processModalDialgButtonEvent(this.id)"></button>
		<button name="Yes" value="right" id="openModal-btn-right" onclick="processModalDialgButtonEvent(this.id)"></button>
		</div>
</div>


<nav id="context-menu">
  <ul class="context-menu-items">
    <li class="context-menu-btn-item">
      <a name="edit" class="context-menu-link disabled-link">
        <i class="fa fa-edit"></i> Edit
      </a>
    </li>
    <li class="context-menu-btn-item">
      <a name="delete" class="context-menu-link">
        <i class="fa fa-minus"></i> Delete
      </a>
    </li>
    <li class="context-menu-btn-item">
      <a name="show-info" class="context-menu-link disabled-link">
        <i class="fa fa-suitcase"></i> Show Info
      </a>
    </li>
  </ul>
</nav>
		
		
		

<div class="input-dialog" id="uedit-add-button-dialog">
<p>Add Button</p>
<input name="input-dialog-input-field" type="text" id="uedit-add-button-dialog-lang" placeholder="Language/Section" value="html" title="Put the language/section name" maxlength="30">

<br>
<input name="input-dialog-input-field" type="text" id="uedit-add-button-dialog-start" placeholder="Start" value="" title="Put the start tag">
<br>
<input name="input-dialog-input-field" type="text" id="uedit-add-button-dialog-end" placeholder="End" value="" title="Put the end tag">
<br>
<input name="input-dialog-input-field" type="text" id="uedit-add-button-dialog-title" placeholder="Title" value="Custom Button" title="Put the title">

<br>
<input name="input-dialog-input-field" type="text" id="uedit-add-button-dialog-class" placeholder="Class" value="" title="Put the class name">
<br>
<input name="input-dialog-input-field" type="text" id="uedit-add-button-dialog-innerhtml" placeholder="Button name" value="" title="Put the button name" required="true">
<span class="glyphicon glyphicon-asterisk required-flag"></span>
<br>
<select name="input-dialog-input-field" id="uedit-add-button-dialog-type" title="Type of input box">
    <option value="input">Text Field</option>
    <option value="textarea">Text Area</option>
</select>
<br>
<input name="input-dialog-input-field" type="number" id="uedit-add-button-dialog-position" placeholder="Position" value="" title="Put the position index">
<br>
<button id="uedit-add-button-dialog-cancel-button" formnovalidate="true" onclick="itemGone('uedit-add-button-dialog')">Close</button>
<button id="uedit-add-button-dialog-submit-button" onclick="validateForm('uedit-add-button-dialog','toolBar1')">Add</button>



</div>




<div class="container" id="ueditor" >
<div class="row" id="ueditor-row">

<div class="col-xs-3" >
<div class="row">
<div class="col-xs-12" id="settings-bar">
<button id="uedit-settings" title="Settings" class="options-button"></button>
<button id="add-button" title="Add new button" class="options-button" onclick="showInputDialog('uedit-add-button-dialog')"></button>
<button id="uedit-delete-button" title="Delete button/s" class="options-button" onclick="showButtonDeleteDialog('uedit-delete-button-dialog')"></button>
<button id="reset-toolBar1-button" title="Reset To Default" class="options-button" onclick="resetButtonsToDefault('toolBar1','html','editor-buttons')"></button>
<br>
<table id="uedit-save-as-table">
<tr>
<td id="uedit-save-as-table-tr1-td1" style="width:40%;">
<button id="uedit-save-as-button" class="options-button" onclick="saveAsUeditMainContent()">Save</button>
</td>
<td id="uedit-save-as-table-tr1-td2" style="width:60%;">
<textarea id="save-as-path-input-field" style="resize:none;"></textarea>
</td>
</tr>
</table>
</div>
</div>
<div class="row">
<div class="col-xs-12" id="toolBox">
<div >
<table id="toolBar1"></table>


</div>
</div>
</div>


</div>






<div class="col-xs-9">
<div id="editor-container" contenteditable="true" spellcheck="true" lang="en_US">
</div>
</div> 


</div>
			</div>
	












<script>
initAceEditor();
createButtonFromJSON('toolBar1',"html","editor-buttons");
getFromStorage();
setMainContentFromStorage();
autoSaveMainContent();

</script>


	</body>
</html>