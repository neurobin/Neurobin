<!DOCTYPE html>

<html lang="en_US">
<head>

<script>
	if (window.location.protocol != "http:")
		window.location.href = "http:" + window.location.href.substring(window.location.protocol.length);
</script>

<link href="http://gmpg.org/xfn/11" rel="profile">
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!-- CSS -->

<meta name="author" content="jahidul hamid" >
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="../style/mycss.css" />
<link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="../script/myjs.js"></script>
<!--<script async="true" src="https://use.edgefonts.net/source-code-pro.js"></script>-->


<link rel="stylesheet" href="../Highlightjs/styles/github.css">
<script src="../Highlightjs/highlight.pack.js"></script>
<script>hljs.initHighlightingOnLoad();</script>

<link rel="shortcut icon" href="img/logo48.png" type="image/x-icon" />

		<script src="scripts/src-noconflict/ace.js" type="text/javascript"></script>
		<script src="scripts/src-noconflict/ext-language_tools.js"></script>
		<script src="scripts/src-noconflict/mode-php.js"></script>
		<script src="scripts/src-noconflict/ext-spellcheck.js"></script>

		<meta name="description" content="Universal Text Editor">
		<meta name="keywords" content="neurobin,text,editor,uedit" />
		<title>Uedit @ Neurobin</title>
    
    <!--
    Ace
      version %version%
      commit  %commit%
    -->

    <!--<link rel="stylesheet" href="demo/kitchen-sink/styles.css" type="text/css" media="screen" charset="utf-8">-->
    <!--<script async="true" src="https://use.edgefonts.net/source-code-pro.js"></script>-->

    <!--<link href="./doc/site/images/favicon.ico" rel="icon" type="image/x-icon">-->
</head>
<body onload="startTime()">


		<?php
		require_once ('../header.php');
		?>

		<!--Navigation bar ends here -->
		<!-- fixed share button-->
		<?php
		require_once ('../fixedsharebutton.php');
		?>
		<!-- fixed share button end-->
		<div class="container" id="content-container3" >
			<div class="row" >
				<div class="col-xs-3">

				



<div id="optionsPanel">

  <table id="controls">
    <tr>
      <td>
        <label for="doc">Document</label>
      </td><td>
        <select id="doc" size="1">
        </select>
      </td>
    </tr>
    <tr>
      <td >
        <label for="mode">Mode</label>
      </td><td>
        <select id="mode" size="1">
        </select>
      </td>
    </tr>
    <tr>
      <td>
        <label for="split">Split</label>
      </td><td>
        <select id="split" size="1">
          <option value="none">None</option>
          <option value="below">Below</option>
          <option value="beside">Beside</option>
        </select>
      </td>
    </tr>
    <tr>
      <td >
        <label for="theme">Theme</label>
      </td><td>
        <select id="theme" size="1">
          
        </select>
      </td>
    </tr>
    <tr>
      <td>
        <label for="fontsize">Font Size</label>
      </td><td>
        <select id="fontsize" size="1">
          <option value="10px">10px</option>
          <option value="11px">11px</option>
          <option value="12px" selected="selected">12px</option>
          <option value="13px">13px</option>
          <option value="14px">14px</option>
          <option value="16px">16px</option>
          <option value="18px">18px</option>
          <option value="20px">20px</option>
          <option value="24px">24px</option>
        </select>
      </td>
    </tr>
    <tr>
      <td>
        <label for="folding">Code Folding</label>
      </td><td>
        <select id="folding" size="1">
          <option value="manual">manual</option>
          <option value="markbegin" selected="selected">mark begin</option>
          <option value="markbeginend">mark begin and end</option>
        </select>
      </td>
    </tr>
    <tr>
      <td >
        <label for="keybinding">Key Binding</label>
      </td><td>
        <select id="keybinding" size="1">
          <option value="ace">Ace</option>
          <option value="vim">Vim</option>
          <option value="emacs">Emacs</option>
          <option value="custom">Custom</option>
        </select>
      </td>
    </tr>
    <tr>
      <td >
        <label for="soft_wrap">Soft Wrap</label>
      </td><td>
        <select id="soft_wrap" size="1">
          <option value="off">Off</option>
          <option value="40">40 Chars</option>
          <option value="80">80 Chars</option>
          <option value="free">Free</option>
        </select>
      </td>
    </tr>

    <tr><td colspan="2">
    <table id="more-controls">
    <tr>
      <td>
        <label for="select_style">Full Line Selection</label>
      </td><td>
        <input type="checkbox" name="select_style" id="select_style" checked>
      </td>
    </tr>
    <tr>
      <td>
        <label for="highlight_active">Highlight Active Line</label>
      </td><td>
        <input type="checkbox" name="highlight_active" id="highlight_active" checked>
      </td>
    </tr>
    <tr>
      <td >
        <label for="show_hidden">Show Invisibles</label>
      </td><td>
        <input type="checkbox" name="show_hidden" id="show_hidden" checked>
      </td>
    </tr>
    <tr>
      <td >
        <label for="display_indent_guides">Show Indent Guides</label>
      </td><td>
        <input type="checkbox" name="display_indent_guides" id="display_indent_guides" checked>
      </td>
    </tr>
    <tr>
      <td >
        <label for="show_hscroll">Persistent HScroll</label>
      </td><td>
        <input type="checkbox" name="show_hscroll" id="show_hscroll">
		<label for="show_hscroll">VScroll</label>
        <input type="checkbox" name="show_vscroll" id="show_vscroll">
      </td>
    </tr>
    <tr>
      <td >
        <label for="animate_scroll">Animate scrolling</label>
      </td><td>
        <input type="checkbox" name="animate_scroll" id="animate_scroll">
      </td>
    </tr>
    <tr>
      <td >
        <label for="show_gutter">Show Gutter</label>
      </td><td>
        <input type="checkbox" id="show_gutter" checked>
      </td>
    </tr>
    <tr>
      <td >
        <label for="show_print_margin">Show Print Margin</label>
      </td><td>
        <input type="checkbox" id="show_print_margin" checked>
      </td>
    </tr>
    <tr>
      <td >
        <label for="soft_tab">Use Soft Tab</label>
      </td><td>
        <input type="checkbox" id="soft_tab" checked>
      </td>
    </tr>
    <tr>
      <td >
        <label for="highlight_selected_word">Highlight selected word</label>
      </td>
      <td>
        <input type="checkbox" id="highlight_selected_word" checked>
      </td>
    </tr>
    <tr>
      <td >
        <label for="enable_behaviours">Enable Behaviours</label>
      </td>
      <td>
        <input type="checkbox" id="enable_behaviours">
      </td>
    </tr>
    <tr>
      <td >
        <label for="fade_fold_widgets">Fade Fold Widgets</label>
      </td>
      <td>
        <input type="checkbox" id="fade_fold_widgets">
      </td>
    </tr>
    <tr>
      <td >
        <label for="elastic_tabstops">Enable Elastic Tabstops</label>
      </td>
      <td>
        <input type="checkbox" id="elastic_tabstops">
      </td>
    </tr>
    <tr>
      <td >
        <label for="isearch">Incremental Search</label>
      </td>
      <td>
        <input type="checkbox" id="isearch">
      </td>
    </tr>
    <tr>
      <td >
        <label for="highlight_token">Show token info</label>
      </td>
      <td>
        <input type="checkbox" id="highlight_token">
      </td>
    </tr>
    <tr>
      <td >
        <label for="read_only">Read-only</label>
      </td>
      <td>
        <input type="checkbox" id="read_only">
      </td>
    </tr>
    <tr>
      <td >
        <label for="scrollPastEnd">Scroll Past End</label>
      </td>
      <td>
        <input type="checkbox" id="scrollPastEnd" checked>
      </td>
    </tr>
    <tr>
      <td colspan="2">
        <input type="button" value="Edit Snippets" onclick="env.editSnippets()">
      </td>
    </tr>
  </table>
  </td></tr>
  </table>

</div>
</div>
<div class="col-xs-8">
  <div id="editor-container" contenteditable="true" spellcheck="true" lang="en_US"></div>
  </div>
  
  <div class="col-xs-1"></div>
  
  </div>
  </div>
  
  <?php require_once('../footer.php'); ?>

<!--DEVEL-->
  <script type="text/javascript">
      var require = {
          baseUrl: window.location.protocol + "//" + window.location.host + window.location.pathname.split("/").slice(0, -1).join("/"),
          paths: {
              ace: "lib/ace"
          },
          waitSeconds: 30
      };
  </script>
  <!--<script src="demo/kitchen-sink/require.js" data-main="demo/kitchen-sink/demo" type="text/javascript"></script>-->
<script src="scripts/uedit.js" type="text/javascript"></script>
<!--DEVEL-->

<!--PACKAGE
  <script src="src/ace.js" data-ace-base="src" type="text/javascript" charset="utf-8"></script>
  <script src="src/keybinding-vim.js"></script>
  <script src="src/keybinding-emacs.js"></script>
  <script src="demo/kitchen-sink/demo.js"></script>
  <script type="text/javascript" charset="utf-8">
    require("kitchen-sink/demo");
  </script>
    PACKAGE-->

</body>
</html>
