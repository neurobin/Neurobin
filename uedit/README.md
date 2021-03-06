This is a tiny attempt to develop a Universal Text Editor.

<div id="screenshots"></div>
#Screenshots:
<img class="full-width-img"  alt="screenshot1.png" src="uedit/images/screenshot1.png" />

#Features Available:

<ol>
<li>You never need to worry about saving your content. It's always saved, even if your pc shuts down suddenly due to power failure or other unexpected events (As long as you don't uninstall your browser it's available).</li>
<li>Syntax highlighting for  PHP HTML CSS and JavaScript.</li>

<li>Content Assist for PHP HTML CSS and JavaScript.</li>

<li>Buttons can be defined to modify text.</li>

<li>Default button set for HTML and PHP.</li>

<li>Buttons are customizable (create and delete).</li>
</ol>

<div id="install"></div>
#Install:

It doesn't require any special installation method. It resides on your browser. You just need to visit the page <a href="uedit/uedit.php">Go Edit</a> and let the necessary files (~1MB) be downloaded just once. You will then be able to use it offline when all of it's requirements are cached in the browser.

<div id="usage"></div>
#Usage:
The salient feature is the custom buttons. A custom button can be defined to do various types of text manipulation.

For example:

<ol>
<li>
<p>If the <kbd class="button">General</kbd> button has a <code>start</code> value <code>&lt;span class="quote"&gt;</code> and <code>end</code> value of <code>&lt;/span&gt;</code>
then by clicking it you can simply enter the whole string as <code>start</code> <code>end</code> or if you perform this action on
a selected text, it will replace the text with <code>&lt;span class="quote"&gt;text&lt;/span&gt;</code> i.e <code>start</code>text<code>end</code></p>
</li>
<li>
<p>If you define the <code>start</code> value with <code>&lt;!-- </code> and <code>end</code> value with <code> --&gt;</code>, you will get HTML Comment.</p>
</li>
<li>
<p>If you define the <code>start</code> value with <code>//</code> and leave <code>end</code> empty, you will get single line comment which is the same for several languages.</p>
</li>
<li>
<p>If you define the start value with <code>/*</code> and end value with <code>*/</code>, you get a multiline comment.</p>
</li>
<li>
<p>You can put your code snippet in the <code>start</code> and <code>end</code> boxes and insert them into editor by simply clicking on the corresponding button.</p>
</li>
<li>You can even put an entire file content into those two boxes and insert them anywhere in the editor by simple button click.</li>
<li>To edit properties of a button, right click on that button and select <q>edit</q>.</li>
<li>To delete a button, right click on that button and select <q>delete</q>.</li>
<li>You can set keyboard shortcuts for your custom buttons. To set a keyboard shortcut for an existing button, right click on the button and fill the fileds marked by the name <span class="quote">KBDS</span>. The same applies for adding a new button too.</li>
</ol>

<div id="tips"></div>
#Quick Tips:
There are no mouse options for search/find/replace. You need to use keyboard shortcuts:

## Find/Replace

| Windows/Linux                  | Mac                            | Action                         |
|:-------------------------------|:-------------------------------|:-------------------------------|  
| Ctrl-F | Command-F | Find |
| Ctrl-R | Command-Option-F | Replace |
| Ctrl-K | Command-G | Find next |
| Ctrl-Shift-K | Command-Shift-G | Find previous |

<br>

Use the <span class="button">SAVE TO DISK</span> button or keyboard shortcut (<kbd>Ctrl+S</kbd> in Windows/Linux and <kbd>command+S</kbd> in Mac) to save content.

Set feasible keyboard shortcuts for your busy buttons to gain speed and productivity.

#Things to care:

1. The <span class="button">SAVE TO DISK</span> button requires Flash. Either enable Flash or use the alternative Keyboard Shortcut <kbd>Ctrl+S</kbd>.
2. If you want to update the App, you will need to delete the cache (and/or cookie) from your browser. In Firefox you can delete cache selectively only for this app from <span class="light-quote">Preference->Advanced->Offline Web Content and User Data</span>.

