<!DOCTYPE html>
<html lang="en">
<head>
    <title>w3html</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php require_once "../common/styles.php" ?>
</head>
<body>
<?php include "../common/topmenu.php"  ?>
  <div class="container-fluid d-flex p-0 ">
  <?php include "../common/leftmenu.php" ?>
        
    <div class="container main">
      <div class="">                
      <h1>HTML Links</h1>

<hr>
<p>Links are found in nearly all web pages. Links allow users to click their way from page to page.</p>
<hr>

<h2>HTML Links - Hyperlinks</h2>
<p>HTML links are hyperlinks.</p>
<p>You can click on a link and jump to another document.</p>
<p>When you move the mouse over a link, the mouse arrow will turn into a little hand.</p>
<div>
<p><strong>Note:</strong> A link does not have to be text. A link can be an image 
or any other HTML element!</p>
</div>
<hr>

<h2>HTML Links - Syntax</h2>
<p>The HTML <code >&lt;a&gt;</code> tag defines a hyperlink. 
It has the following syntax:</p>

<p>The most important attribute of the <code >&lt;a&gt;</code> <a> element is the <code >
href</code> attribute, which indicates the link's destination.</a></p>
<p>The <em>link text</em> is the part that will be visible to the reader.</p>
<p>Clicking on the link text, will send the reader to the specified URL address.</p>


<p>By default, links will appear as follows in all browsers:</p>
<ul>
<li>An unvisited link is underlined and blue</li>
<li>A visited link is underlined and purple</li>
<li>An active link is underlined and red</li>
</ul>
<div>
<p><strong>Tip:</strong> Links can of course be styled with CSS, to get 
another look!</p>
</div>
<hr>

<h2>HTML Links - The target Attribute</h2>
<p>By default, the linked page will be displayed in the current browser window. 
To change this, you must specify another target for the link.</p>
<p>The <code >target</code> attribute specifies where to open the linked document.</p>
<p>The <code >target</code> attribute can have one of the following values:</p>
<ul>
<li><code >_self</code> - Default. Opens the document in 
the same window/tab as it was clicked</li>
<li><code >_blank</code> - Opens the document in a new window or tab</li>
<li><code >_parent</code> - Opens the document in the parent frame</li>
<li><code >_top</code> - Opens the document in the full body of the window</li>
</ul>

<hr>
<h2>Absolute URLs vs. Relative URLs</h2>
<p>Both examples above are using an <strong>absolute URL</strong> (a full web address) 
in the <code >href</code> attribute.</p>
<p>A local link (a link to a page within the same website) is specified with a 
<strong>relative URL</strong> (without 
the "https://www" part):</p>

<hr>

<hr>

<h2>HTML Links - Use an Image as a Link</h2>
<p>To use an image as a link, just put the <code >&lt;img&gt;</code> 
tag inside the <code >&lt;a&gt;</code> tag:</p>
<hr>

<h2>Link to an Email Address</h2>
<p>Use <code >
mailto:</code> inside the <code >
href</code> attribute to create a link that opens the user's email program (to 
let them send a new email):</p>
<hr>

<h2>Button as a Link</h2>
<p>To use an HTML button as a link, you have to add some JavaScript code.</p>
<p>JavaScript allows you to specify what happens at certain events, such as a click of a button:</p>

<div>
<p><strong>Tip:</strong> Learn more about JavaScript in our <a href="/js/default.asp">JavaScript Tutorial</a>.</p>
</div>
<hr>

<h2>Link Titles</h2>
<p>The <code >title</code> attribute specifies extra information about an element.
The information is most often shown as a tooltip text when the mouse moves over the element.</p>

<hr>

<h2>More on Absolute URLs and Relative URLs</h2>

<div>
<p>You can read more about file paths in the chapter <a href="/html/html_filepaths.asp">HTML 
File Paths</a>.</p>
</div>
<hr>

<h2>Chapter Summary</h2>
<ul>
<li>Use the <code >&lt;a&gt;</code> element to define a link</li>
<li>Use the <code >href</code> attribute to define the link address</li>
<li>Use the <code >target</code> attribute to define where to open the linked document</li>
<li>Use the <code >&lt;img&gt;</code> element (inside <code >&lt;a&gt;</code>) 
to use an image as a link</li>
<li>Use the <code >
mailto:</code> scheme inside the <code >
href</code> attribute to create a link that opens the user's email program</li>
</ul>
<hr>

<h2>HTML Link Tags</h2>
<table>
<tbody><tr>
<th style="width:30%">Tag</th>
<th>Description</th></tr><tr>
<td><a href="/tags/tag_a.asp">&lt;a&gt;</a></td><td>Defines a hyperlink</td></tr>
</tbody></table>
<div>
<p>For a complete list of all available HTML tags, visit our <a href="/tags/default.asp">HTML Tag Reference</a>.</p>
</div>

<br>

<div id="mypagediv2" style="position:relative;text-align:center;"></div>
<br>

      </div>
    </div>
  </div>

    <?php require_once "../common/scripts.php" ?>

</body>
</html>

