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
               
                <h1 class="bd-title heading1">HTML Introduction</h1>

<hr>
<p>HTML is the standard markup language for creating Web pages.</p>
<hr>

<h2>What is HTML?</h2>
<ul>
<li>HTML stands for Hyper Text Markup Language</li>
  <li>HTML is the standard markup language for creating Web pages</li>
  <li>HTML describes the structure of a Web page</li>
  <li>HTML consists of a series of elements</li>
  <li>HTML elements tell the browser how to display the content</li>
  <li>HTML elements label pieces of content such as "this is a heading", "this 
  is a paragraph", "this is a link", etc.</li>
</ul>
<hr>

<h2>A Simple HTML Document</h2>

<h3>Example Explained</h3>
<ul>
<li>The <code >&lt;!DOCTYPE html&gt;</code> declaration defines 
that this document is an HTML5 document</li>
<li>The <code >&lt;html&gt;</code> element is the root element of an HTML 
page</li>
 <li>The <code >&lt;head&gt;</code> element contains meta information about the 
 HTML page</li>
 <li>The <code >&lt;title&gt;</code> element specifies a title for the 
 HTML page (which is shown in the browser's title bar or in the page's tab)</li>
 <li>The <code >&lt;body&gt;</code> element defines the 
 document's body, and is a container for all the visible contents, such as 
 headings, paragraphs, images, hyperlinks, tables, lists, etc.</li>
 <li>The <code >&lt;h1&gt;</code> element defines a large heading</li>
 <li>The <code >&lt;p&gt;</code> element defines a paragraph</li>
</ul>
<hr>

<h2>What is an HTML Element?</h2>
<p>An HTML element is defined by a start tag, some content, and an end tag:</p>
<div>
<span><span>&lt;</span>tagname<span>&gt;</span></span>Content goes here...<span><span>&lt;</span>/tagname<span>&gt;</span></span>
</div>

<p>The HTML <strong>element</strong> is everything from the start tag to the end tag:</p>

<div>
<span><span>&lt;<span>h1</span>&gt;</span></span>My 
  First Heading<span><span>&lt;</span>/h1<span>&gt;</span></span>
</div>

<div>
<span><span>&lt;</span>p<span>&gt;</span></span>My first paragraph.<span><span>&lt;</span>/p<span>&gt;</span></span>
</div>

<table>
<tbody><tr>
<th>Start tag</th>
<th>Element content</th>
<th>End tag</th>
</tr>
<tr>
<td>&lt;h1&gt;</td>
<td>My First Heading</td>
<td>&lt;/h1&gt;</td>
</tr>
<tr>
<td>&lt;p&gt;</td>
<td>My first paragraph.</td>
<td>&lt;/p&gt;</td>
</tr>
<tr>
<td>&lt;br&gt;</td>
<td><em>none</em></td>
<td><em>none</em></td>
</tr>
</tbody></table>

<div>
<p><strong>Note:</strong> Some HTML elements have no content (like the &lt;br&gt; 
element). These elements are called empty elements. Empty elements do not have an end tag!</p>
</div>
<hr>

<hr>
<h2>Web Browsers</h2>
<p>The purpose of a web browser (Chrome, Edge, Firefox, Safari) is to read HTML documents and display them 
correctly.</p>
<p>A browser does not display the HTML tags, but uses them to determine how to display the document:</p>
<p><img alt="View in Browser" src="img_chrome.png"></p>
<hr>

<h2>HTML Page Structure</h2>
<p>Below is a visualization of an HTML page structure:</p>
<div style="width:99%;border:1px solid grey;padding:3px;margin:0;background-color:#ddd">&lt;html&gt;
<div style="width:90%;border:1px solid grey;padding:3px;margin:20px">&lt;head&gt;
<div style="width:90%;border:1px solid grey;padding:5px;margin:20px">&lt;title&gt;Page title&lt;/title&gt;
</div>
&lt;/head&gt;
</div>
<div style="width:90%;border:1px solid grey;padding:3px;margin:20px;background-color:#ddd">&lt;body&gt;
<div style="width:90%;border:1px solid grey;padding:3px;margin:20px;background-color:#fff">
<div style="width:90%;border:1px solid grey;padding:5px;margin:20px">&lt;h1&gt;This is a heading&lt;/h1&gt;</div>
<div style="width:90%;border:1px solid grey;padding:5px;margin:20px">&lt;p&gt;This is a paragraph.&lt;/p&gt;</div>
<div style="width:90%;border:1px solid grey;padding:5px;margin:20px">&lt;p&gt;This is another paragraph.&lt;/p&gt;</div>
</div>
&lt;/body&gt;
</div>
&lt;/html&gt;
</div>
<div>
<p><strong>Note:</strong> The content inside the &lt;body&gt; section (the white area above) 
will be displayed in a browser. The content inside the &lt;title&gt; element will be 
shown in the browser's title bar or in the page's tab.</p>
</div>
<hr>

<h2>HTML History</h2>
<p>Since the early days of the World Wide Web, there have been many versions of HTML:</p>
<table>
  <tbody><tr>
    <th>Year</th>
    <th>Version</th>
  </tr>
  <tr>
    <td>1989</td>
    <td>Tim Berners-Lee invented www</td>
  </tr>
  <tr>
    <td>1991</td>
    <td>Tim Berners-Lee invented HTML</td>
  </tr>
  <tr>
    <td>1993</td>
    <td>Dave Raggett drafted HTML+</td>
  </tr>
  <tr>
    <td>1995</td>
    <td>HTML Working Group defined HTML 2.0</td>
  </tr>
  <tr>
    <td>1997</td>
    <td>W3C Recommendation: HTML 3.2</td>
  </tr>
  <tr>
    <td>1999</td>
    <td>W3C Recommendation: HTML 4.01</td>
  </tr>
  <tr>
    <td>2000</td>
    <td>W3C Recommendation: XHTML 1.0</td>
  </tr>
  <tr>
    <td>2008</td>
    <td>WHATWG HTML5 First Public Draft</td>
  </tr>
  <tr>
    <td>2012</td>
    <td><a href="http://whatwg.org/html/" target="_blank">WHATWG HTML5 Living Standard</a></td>
  </tr>
  <tr>
    <td>2014</td>
    <td><a href="http://www.w3.org/TR/html5/" target="_blank">W3C Recommendation: HTML5</a></td>
  </tr>
  <tr>
    <td>2016</td>
    <td>W3C Candidate Recommendation: HTML 5.1</td>
  </tr>
  <tr>
    <td>2017</td>
    <td><a href="http://www.w3.org/TR/html51/" target="_blank">W3C Recommendation: HTML5.1 2nd Edition</a></td>
  </tr>
  <tr>
    <td>2017</td>
    <td><a href="http://www.w3.org/TR/html52/" target="_blank">W3C Recommendation: HTML5.2</a></td>
  </tr>
</tbody></table>

<div>
<p>This tutorial follows the latest HTML5 standard.</p>
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

