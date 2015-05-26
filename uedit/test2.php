<!DOCTYPE html>
<html lang="en_US">
	<head>
		<base href="../" />
		<?php chdir("../"); ?>
		<?php
		require_once 'head.php';
		?>
		<!--<script src="uedit/uedit.js"></script>-->
		<meta name="description" content="Universal Text Editor">
		<meta name="keywords" content="neurobin,text,editor,uedit" />
		<title>Uedit @ Neurobin</title>
		
		
<link rel="stylesheet" href="uedit/codemirror/lib/codemirror.css">
<script src="uedit/codemirror/lib/codemirror.js"></script>


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




		<div class="container" id="content-container2">
			<div class="row">
				<div class="col-xs-2" id="content-left"></div>

<div id="toolBar1" class="col-xs-8">
<button class="intLink" title="Bold" onclick="wrapSelectedText ('html','textBox','1')"  ><b>B</b></button>
<button class="intLink" title="Italic" onclick="wrapSelectedText('html','textBox','2');"  ><i>I</i></button>
<button class="intLink" title="Underline" onclick="wrapSelectedText('html','textBox','3');"  ><u>U</u></button>
<button class="intLink" title="Ordered list" onclick="wrapSelectedText('html','textBox','4');" >ol</button>
<button class="intLink" title="Unordered list" onclick="wrapSelectedText('html','textBox','5');" >ul</button>
<button class="intLink" title="List item" onclick="wrapSelectedText('html','textBox','6');" >li</button>
<button class="intLink" title="Quote" onclick="wrapSelectedText('html','textBox','7');" >q</button>
<button class="intLink" title="Block quote" onclick="wrapSelectedText('html','textBox','8');" >bq</button>
<button class="intLink" title="Hyper Link" onclick="var sLnk=prompt('Put the URL here','http:\/\/');if(sLnk&&sLnk!=''&&sLnk!='http://'){htmlHyperLink('html','textBox','9',sLnk)}">a href</button>
<button class="intLink" title="Pre formatted text" onclick="wrapSelectedText('html','textBox','10');" >pre</button>
<button class="intLink" title="Code: <code></code>" onclick="wrapSelectedText('html','textBox','11');" >code</button>
<button class="intLink" title="Pre code: <pre><code>" onclick="wrapSelectedText('html','textBox','12');" >pre/code</button>
<!--<img class="intLink" title="Cut" onclick="wrapSelectedText('cut');" src="data:image/gif;base64,R0lGODlhFgAWAIQSAB1ChBFNsRJTySJYwjljwkxwl19vj1dusYODhl6MnHmOrpqbmpGjuaezxrCztcDCxL/I18rL1P///////////////////////////////////////////////////////yH5BAEAAB8ALAAAAAAWABYAAAVu4CeOZGmeaKqubDs6TNnEbGNApNG0kbGMi5trwcA9GArXh+FAfBAw5UexUDAQESkRsfhJPwaH4YsEGAAJGisRGAQY7UCC9ZAXBB+74LGCRxIEHwAHdWooDgGJcwpxDisQBQRjIgkDCVlfmZqbmiEAOw==" />
<img class="intLink" title="Copy" onclick="wrapSelectedText('copy');" src="data:image/gif;base64,R0lGODlhFgAWAIQcAB1ChBFNsTRLYyJYwjljwl9vj1iE31iGzF6MnHWX9HOdz5GjuYCl2YKl8ZOt4qezxqK63aK/9KPD+7DI3b/I17LM/MrL1MLY9NHa7OPs++bx/Pv8/f///////////////yH5BAEAAB8ALAAAAAAWABYAAAWG4CeOZGmeaKqubOum1SQ/kPVOW749BeVSus2CgrCxHptLBbOQxCSNCCaF1GUqwQbBd0JGJAyGJJiobE+LnCaDcXAaEoxhQACgNw0FQx9kP+wmaRgYFBQNeAoGihCAJQsCkJAKOhgXEw8BLQYciooHf5o7EA+kC40qBKkAAAGrpy+wsbKzIiEAOw==" />
<img class="intLink" title="Paste" onclick="wrapSelectedText('paste');" src="data:image/gif;base64,R0lGODlhFgAWAIQUAD04KTRLY2tXQF9vj414WZWIbXmOrpqbmpGjudClFaezxsa0cb/I1+3YitHa7PrkIPHvbuPs+/fvrvv8/f///////////////////////////////////////////////yH5BAEAAB8ALAAAAAAWABYAAAWN4CeOZGmeaKqubGsusPvBSyFJjVDs6nJLB0khR4AkBCmfsCGBQAoCwjF5gwquVykSFbwZE+AwIBV0GhFog2EwIDchjwRiQo9E2Fx4XD5R+B0DDAEnBXBhBhN2DgwDAQFjJYVhCQYRfgoIDGiQJAWTCQMRiwwMfgicnVcAAAMOaK+bLAOrtLUyt7i5uiUhADs=" />
-->


</div>
<div class="col-xs-2" id="content-left"></div>
</div>
<div class="row">
<div class="col-xs-2"></div>
<div class="col-xs-8">

<div id="editor"></div> 
</div>
<div class="col-xs-2"></div>
</div>
			</div>
	
		<!--Content  ends here -->
		<?php
		require_once ('footer.php');
		?>
		<script>
var ce = document.getElementById("editor");
// Probably needs more kludges to be portable... you get the idea
var text ="fdslj" //ce.textContent || ce.innerText;
var editor = CodeMirror(function(node){ce.parentNode.replaceChild(node, ce);}, {
  value: text,
    mode:  "javascript",
  lineNumbers: true
  /* , your options */
});
document.getElementById( 'editor' ).focus();
</script>
	</body>
</html>