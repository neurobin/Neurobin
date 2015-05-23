defer = "true";

var tagStart="",tagEnd="";
sLnk="";
var tagarrHTML=[
["",""],
["<b>","</b>"],
["<i>","</i>"],
["<u>","</u>"],
["<ol>","</ol>"],
["<ul>","</ul>"],
["<li>","</li>"],
["<quote>","</quote>"],
["<blockquote>","</blockquote>"],
["<a"+sLnk+">","</a>"],
["<pre>","</pre>"],
["<code>","</code>"],
["<pre><code>","</code></pre>"],
["<p>","</p>"]
];

function tagParse(lang,tagIndex) {
	//if (tagIndex==1) {tagStart="<b>";tagEnd="</b>";}
	if (lang=="html") {
	tagStart=tagarrHTML[tagIndex][0];
	tagEnd=tagarrHTML[tagIndex][1];
	}
	
}

function htmlHyperLink(lang,elementId,tagIndex,link) {
	sLnk=' href=\"'+link+'\"';
	tagarrHTML[tagIndex]=["<a"+sLnk+">","</a>"];
	wrapSelectedText(lang,elementId,tagIndex);
	
}

function wrapSelectedText(lang,elementId,tagIndex) {
	tagParse(lang,tagIndex);
var textarea = document.getElementById(elementId);
if (textarea.selectionStart === undefined) {	// Internet Explorer
// create a range from the current selection
var textRange = document.selection.createRange ();
// check whether the selection is inside the textarea element
var rangeParent = textRange.parentElement ();
if (rangeParent && rangeParent.id == elementId) {
textRange.text = tagStart + textRange.text + tagEnd;
}
}
else {
// check whether some text is selected inside the textarea element
//if (textarea.selectionStart != textarea.selectionEnd) {
var newText = textarea.value.substring (0, textarea.selectionStart) +
tagStart + textarea.value.substring (textarea.selectionStart, textarea.selectionEnd) + tagEnd +
textarea.value.substring (textarea.selectionEnd);
textarea.value = newText;
//}
}
}
