defer = "true";



var tagStart="",tagEnd="";
sLnk="";
localStoragePrefix="neurobin-uedit-";
projectName="uedit";
autoSaveTimeout=5000;

var jsonDefault = '{"html":[' +
'{"id":"","start":"","end":"","title":"Define it manually","class":"editor-button","innerhtml":"General","type":"textarea"  },' +
'{"id":"","start":"<!-- ","end":" -->","title":"Comment","class":"editor-button","innerhtml":"Comment","type":"input"  },' +
'{"id":"","start":"<p>","end":"</p>","title":"Paragraph","class":"editor-button","innerhtml":"P","type":"input"  },' +
'{"id":"","start":"<a ","end":"</a>","title":"Hyperlink","class":"editor-button","innerhtml":"a href","href":"","type":"input"  },' +
'{"id":"","start":"<ol>","end":"</ol>","title":"Ordered List","class":"editor-button","innerhtml":"ol","type":"input"  },' +
'{"id":"","start":"<ul>","end":"</ul>","title":"Unordered List","class":"editor-button","innerhtml":"ul","type":"input"  },' +
'{"id":"","start":"<li>","end":"</li>","title":"List Item","class":"editor-button","innerhtml":"li","type":"input"  },' +
'{"id":"","start":"<quote>","end":"</quote>","title":"Quote","class":"editor-button","innerhtml":"q","type":"input"  },' +
'{"id":"","start":"<blockquote>","end":"</blockquote>","title":"Block Quote","class":"editor-button","innerhtml":"bq","type":"input"  },' +
'{"id":"","start":"<pre>","end":"</pre>","title":"pre","class":"editor-button","innerhtml":"pre","type":"input"  },' +
'{"id":"","start":"<code>","end":"</code>","title":"Inline Code","class":"editor-button","innerhtml":"code","type":"input"  },' +
'{"id":"","start":"<pre><code>","end":"</code></pre>","title":"Pre-formatted Code","class":"editor-button","innerhtml":"pre/code","type":"input"  },' +
'{"id":"","start":"<img ","end":" />","title":"Image","class":"editor-button","innerhtml":"img","src":"","type":"input"  },' +
'{"id":"","start":"<span>","end":"</span>","title":"Span","class":"editor-button","innerhtml":"span","type":"input"  },' +
'{"id":"","start":"<div>","end":"</div>","title":"Div","class":"editor-button","innerhtml":"div","type":"input"  },' +
'{"id":"","start":"<sup>","end":"</sup>","title":"Superscript","class":"editor-button","innerhtml":"sup","type":"input"  },' +
'{"id":"","start":"<sub>","end":"</sub>","title":"Subscript","class":"editor-button","innerhtml":"sub","type":"input"  },' +
'{"id":"","start":"<kbd>","end":"</kbd>","title":"Keboad key","class":"editor-button","innerhtml":"kbd","type":"input"  },' +
'{"id":"","start":"","end":"<hr>","title":"Horizontal Rule","class":"editor-button","innerhtml":"hr","type":"input"  },' +
'{"id":"","start":"","end":"<br>","title":"New Line","class":"editor-button","innerhtml":"br","type":"input"  },' +
'{"id":"","start":"<var>","end":"</var>","title":"Variable","class":"editor-button","innerhtml":"var","type":"input"  },' +
'{"id":"","start":"<del>","end":"</del>","title":"Deleted text","class":"editor-button","innerhtml":"<del>del</del>","type":"input"  }]}';

json=jsonDefault;




function initAceEditor(){  


 //alert("Script loaded and executed.");
 ace.require("ace/ext/language_tools");
editor = ace.edit("editor-container");
    editor.setTheme("ace/theme/eclipse");
    editor.setShowPrintMargin(false);
    editor.getSession().setMode("ace/mode/php");
    editor.setOptions({
    enableBasicAutocompletion: true,
    spellcheck: true
    
});
   // Use anything defined in the loaded script...

}




function findIndexByIdFromJSON(id){
		   var obj = JSON.parse(json);
    array=obj.html;
    for(i=0;i<array.length;i++){
    if(array[i].id==id){return i;}
    
    }

}




var myEvent = window.attachEvent || window.addEventListener;
var chkevent = window.attachEvent ? 'onbeforeunload' : 'beforeunload'; /// make IE7, IE8 compitable

            myEvent(chkevent, function(e) { // For >=IE7, Chrome, Firefox

         var confirmationMessage = 'Are you sure to leave the page?';  // a space
                //(e || window.event).returnValue = fillStorage();
                return fillStorage();
            });


function getFromStorageById(id){
if (typeof(Storage) != "undefined") {

return localStorage.getItem(localStoragePrefix+id);

}
else {alert("Warning: Local Storage isn't supported..");}

}


function getInputDialogFieldsFromStorage() {
var inputdialogfieldes=document.getElementsByName('input-dialog-input-field');
for (var i=0;i<inputdialogfieldes.length;i++) {
//if (localStorage.getItem("neurobin-uedit-"+inputdialogfieldes[i].id!="")) {
inputdialogfieldes[i].value=localStorage.getItem("neurobin-uedit-"+inputdialogfieldes[i].id);}//}
}


function getToolBar1InputFields() {
var toolBar1inputfields=document.getElementsByName('toolBar1-input-field');

for (var i=0;i<toolBar1inputfields.length;i++) {
//if (localStorage.getItem("neurobin-uedit-"+toolBar1inputfields[i].id)!="") {
toolBar1inputfields[i].value=localStorage.getItem("neurobin-uedit-"+toolBar1inputfields[i].id);}//}

}


function getFromStorage() { 

/*	if (!!localStorage.getItem("neurobin-uedit-html-div")) {
    document.getElementById("html-div").value=localStorage.getItem("neurobin-uedit-html-div");}*/

getInputDialogFieldsFromStorage();
getToolBar1InputFields();


json=getJSONString();



}

document.addEventListener('DOMContentLoaded', function () {
var fun=getFromStorage();
var fun1=setMainContentFromStorage();
$("body").css("overflow", "hidden");
    }, false);
    
function fillStorageById(id,value){
	if (typeof(Storage) != "undefined") {
localStorage.setItem(localStoragePrefix+id,value);
}
else {alert("Warning: Local Storage isn't supported..");}
}


    
function fillStorageFromInputDialogFields() {
var inputdialogfieldes=document.getElementsByName('input-dialog-input-field');
    for (var i=0;i<inputdialogfieldes.length;i++) {
localStorage.setItem("neurobin-uedit-"+inputdialogfieldes[i].id,inputdialogfieldes[i].value);}

}


function fillStorageFromToolBar1InputFields(){
    var toolBar1inputfields=document.getElementsByName('toolBar1-input-field');

    for (var i=0;i<toolBar1inputfields.length;i++) {
localStorage.setItem("neurobin-uedit-"+toolBar1inputfields[i].id,toolBar1inputfields[i].value);}

}

function fillStorageWithMainContent(){
fillStorageById("editor-main-content",editor.getSession().getValue());
}
function setMainContentFromStorage(){
	



editor.getSession().setValue(getFromStorageById("editor-main-content"));



	
}


function fillStorage() {
// Check browser support
if (typeof(Storage) != "undefined") {
    // Store
    
fillStorageFromInputDialogFields();
fillStorageFromToolBar1InputFields();


localStorage.setItem('neurobin-uedit-json',json);
fillStorageWithMainContent();
    // Retrieve
    //document.getElementById("result").innerHTML = localStorage.getItem("lastname");
} else {
    alert("Warning: Local Storage isn't supported..");
}



}




/*function getIFrameDocument(aID){
  // if contentDocument exists, W3C compliant (Mozilla)
  if (document.getElementById(aID).contentDocument){
    return document.getElementById(aID).contentDocument;
  } else {
    // IE
    return document.frames[aID].document;
  }
}*/


/*function setDesignModeOn(id){
 getIFrameDocument(id).designMode = "On";
}
*/



/*function getSelectedText(){var text="";
if (window.getSelection) {text=window.getSelection();}
else{text=document.selection.createRange().text;}
return text;
}*/

/*function getSelectionHtml() {
    var html = "";
    if (typeof window.getSelection != "undefined") {
        var sel = window.getSelection();
        if (sel.rangeCount) {
            var container = document.createElement("div");
            for (var i = 0, len = sel.rangeCount; i < len; ++i) {
                container.appendChild(sel.getRangeAt(i).cloneContents());
            }
            html = container.innerHTML;
        }
    } else if (typeof document.selection != "undefined") {
        if (document.selection.type == "Text") {
            html = document.selection.createRange().htmlText;
        }
    }
    return html;
}*/


/*function replaceSelectedText(replacementText) {
    var sel, range;
    if (window.getSelection) {
        sel = window.getSelection();
        if (sel.rangeCount) {
            range = sel.getRangeAt(0);
            range.deleteContents();
            range.insertNode(document.createTextNode(replacementText));
        }
    } else if (document.selection && document.selection.createRange) {
        range = document.selection.createRange();
        range.text = replacementText;
    }
}*/



function wrapSelectedText(lang,elementId,id) {
	//tagParse(lang,tagIndex);
	//var fun=fillStorage();
	var obj = JSON.parse(json);
    array=obj.html;
	//alert(id+array[0].id);
	tagIndex=findIndexByIdFromJSON(id);



var tagname="",lastchar="",tag="";
tagname=array[tagIndex].start;
lastchar=tagname.slice(-1);
tag=tagname.substring(1,tagname.length-1);
tagname="html-"+tag;
//alert(tagname);
tagStart = document.getElementById(id+"-start").value;
tagEnd   = document.getElementById(id+"-end").value;
if (tagStart==null) {
tagStart=array[tagIndex].start;}
if (tagEnd==null) {
tagEnd=array[tagIndex].end}


var href,src;
href=array[tagIndex].hasOwnProperty("href");
src=array[tagIndex].hasOwnProperty("src");
if (href&&!src) {
var sLnk=prompt('Put the URL here','http:\/\/');
if(sLnk&&sLnk!=''&&sLnk!='http://'){
	link=" href=\""+sLnk+"\">";
var replacementText=tagStart+link+editor.getSelectedText()+tagEnd;
editor.session.replace(editor.selection.getRange(), replacementText);
}
}
else if(src&&!href){
var lnk=prompt('Put the image URL here','http:\/\/');
var alt="image";
alt=lnk.split("/");
alt=alt[alt.length-1].substring(0,50);
if (editor.getSelectedText()!="") {alt=editor.getSelectedText();}
if(lnk&&lnk!=''){
	link=" src=\""+lnk+"\"";
var replacementText=tagStart+" alt=\""+alt+"\""+link+tagEnd;
editor.session.replace(editor.selection.getRange(), replacementText);
}

}

else {



var replacementText=tagStart+editor.getSelectedText()+tagEnd;
editor.session.replace(editor.selection.getRange(), replacementText);
}

}


function createButtonFromAnyJSON(jsonstring,parentId,lang,classname){
	
    var obj = JSON.parse(jsonstring);
    array=obj.html;
    for(var i=0;i<array.length;i++){
    var element = document.createElement("BUTTON");
    var brElement = document.createElement("BR");
    var type="input";
    if (array[i].type=="textarea") {type="textarea";}
    var startInput = document.createElement(type);
    var endInput = document.createElement(type);
    //Assign different attributes to the element. 
    element.innerHTML=array[i].innerhtml;
    if(array[i].id==""||array[i].id==null){
    element.id=lang+"-btn"+i;}
    else {element.id=array[i].id;}
    element.title=array[i].title;
    array[i].id=element.id;
    json=JSON.stringify(obj);
    localStorage.setItem('neurobin-uedit-json',json);
    
    element.class=array[i].class+" "+classname;
    //alert('fds');
    element.onclick=function(){wrapSelectedText("html","editor-container",this.id);};
//create input fields
startInput.value=array[i].start;
if(array[i].type!="textarea"){startInput.type="text";}
startInput.id=element.id+"-start";
startInput.placeholder="start";
startInput.title="This will be inserted at the start of selection";
if(array[i].type="textarea"){startInput.style.resize="none";}
startInput.name="toolBar1-input-field";
    
endInput.value=array[i].end;
if(array[i].type!="textarea"){endInput.type="text";}
endInput.id=element.id+"-end";
endInput.placeholder="end";
endInput.title="This will be inserted at the end of selection";
if(array[i].type="textarea"){endInput.style.resize="none";}
endInput.name="toolBar1-input-field";
    
    
    var foo = document.getElementById(parentId);
    //Append the element in page (in span).
var tr=document.createElement("tr");  
var td1=document.createElement("td");
var td2=document.createElement("td");
var td3=document.createElement("td");
td1.style.width="30%";
td2.style.width="35%";
td2.style.width="35%";
td2.style.overflow="none";
td3.style.overflow="none";
td1.appendChild(element);
td2.appendChild(startInput);
td3.appendChild(endInput);
tr.appendChild(td1);
tr.appendChild(td2);
tr.appendChild(td3);
    
    
    foo.appendChild(tr);
}

}

function createButtonFromJSON(parentId,lang,classname){
    //Create an input type dynamically.  
json=getJSONString();   
var call1=createButtonFromAnyJSON(json,parentId,lang,classname);

var fun=getFromStorage();

}


function createNewButton(parentId,lang,start,end,title,classname,innerhtml,type,position){

insertIntoJSON(lang,start,end,title,classname,innerhtml,type,position);

document.getElementById(parentId).innerHTML="";
createButtonFromJSON(parentId,lang,classname);




}

function validateForm(formId,parentId){
var inputfields=document.getElementsByName("input-dialog-input-field");
for(var i=0;i<inputfields.length;i++){
if (inputfields[i].checkValidity()==false) {
alert("Error: "+inputfields[i].title+" correctly");
return;

}


}
getFormDataAndCreateButton(formId,parentId);
}



function getFormDataAndCreateButton(formId,parentId){
var lang=document.getElementById(formId+"-lang").value;
var start=document.getElementById(formId+"-start").value;
var end=document.getElementById(formId+"-end").value;
var title=document.getElementById(formId+"-title").value;
var classname=document.getElementById(formId+"-class").value;
var innerhtml=document.getElementById(formId+"-innerhtml").value;
var type=document.getElementById(formId+"-type").value;
var position=document.getElementById(formId+"-position").value;

if (type!="textarea") {type="input";}

 createNewButton(parentId,lang,start,end,title,classname,innerhtml,type,position);
 


}

function itemGone(itemId){
document.getElementById(itemId).style.transitionDuration="1s";
document.getElementById(itemId).style.right="-100%";
}


function showInputDialog(formId){
document.getElementById(formId).style.transitionDuration=".7s";
document.getElementById(formId).style.right="0";
}


function insertIntoJSON(lang,start,end,title,classname,innerhtml,type,position){

json=getJSONString();
var obj=JSON.parse(json);
array=obj.html;
var patt=/^[0-9]+$/;
var result = position.match(patt);
if (position<0) {position=0;}
else if (result==null||result==""||position>array.length) {position=array.length;}

var newarrayitem={"id":"","start":"","end":"","title":"","class":"editor-button","innerhtml":"","type":"" };
newarrayitem.id=lang+"-btn"+array.length;
newarrayitem.start=start;
newarrayitem.end=end;
newarrayitem.title=title;
newarrayitem.class=classname;
newarrayitem.innerhtml=innerhtml;
newarrayitem.type=type;
//array.splice(position,0,newarrayitem);
//array.push(newarrayitem);
array.splice(position,0,newarrayitem);
json=JSON.stringify(obj);

localStorage.setItem('neurobin-uedit-json',json);
fillStorageById(newarrayitem.id+"-start",start);
fillStorageById(newarrayitem.id+"-end",end);

}


function getJSONString(){
var jsonString=localStorage.getItem('neurobin-uedit-json');
if (jsonString!=null&&jsonString!="") {json=jsonString;}  
return json;
}

function createButtonFromDefaultJSON(parentId,lang,classname){
document.getElementById(parentId).innerHTML="";
var call1=createButtonFromAnyJSON(jsonDefault,parentId,lang,classname);

}

function resetButtonsToDefault(parentId,lang,classname){
	currentParentId=parentId;
	currentLang=lang;
	currentClassName=classname;

/*    if (confirm("Confirm Action: You are going to delete all custom toolBar buttons and reset them to default") == true) {
        var call1=createButtonFromDefaultJSON(parentId,lang,classname);
    } else {
        
    }	*/
	
var call1=openModalDialog("Attention!!","Are you sure you want to delete all custom buttons?");


}

function openModalDialog(head,msg){
	var dialog=document.getElementById("openModal");

   var header=dialog.getElementsByTagName('h2');
   header[0].innerHTML=head;
   var message=dialog.getElementsByTagName("p");
   message[0].innerHTML=msg;
	
var buttons=dialog.getElementsByTagName("button");
	for (var i=0;i<buttons.length;i++) {
buttons[i].innerHTML=buttons[i].name;
	}

   dialog.style.display="block";
	dialog.style.opacity="1";
	dialog.style.pointerEvents="auto";
   
}

function closeModalDialog(){
	var dialog=document.getElementById("openModal");
	dialog.style.opacity="0";
	dialog.style.pointerEvents="none";
	dialog.style.display="none";


}

function processModalDialgButtonEvent(id){
	if (document.getElementById(id).value=="right") {
	var call1=createButtonFromDefaultJSON(currentParentId,currentLang,currentClassName);
	var call2=closeModalDialog();
	}
	else if(document.getElementById(id).value=="left"){
var call1=closeModalDialog();	
	}
	

}
function autoSaveMainContent(){
	fillStorageWithMainContent();
	setTimeout(autoSaveMainContent,autoSaveTimeout);

}

