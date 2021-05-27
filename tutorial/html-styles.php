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
          
<h1>HTML Styles - CSS</h1>

<hr>
<p>CSS stands for Cascading Style Sheets.</p>
<p>CSS saves a lot of work. It can control the layout of multiple 
web pages all at once.</p>
<hr>

<div style="position:relative;height:220px;margin-top:50px;">
<div style="opacity:0.5;position:absolute;left:50px;top:-30px;width:300px;height:150px;background-color:#40B3DF"></div>
<divw3-theme" style="opacity:0.3;position:absolute;left:120px;top:20px;width:100px;height:170px;"></div>
<div style="margin-top:30px;width:360px;height:130px;padding:20px;border-radius:10px;border:10px solid #EE872A;font-size:120%;">
<h1>CSS = Styles and Colors</h1>
<div style="letter-spacing:12px;font-size:15px;position:relative;left:25px;top:10px;">Manipulate Text</div>
<div style="color:#40B3DF;letter-spacing:12px;font-size:15px;position:relative;left:25px;top:20px;">Colors,
<span style="background-color:#B4009E;color:#ffffff;">&nbsp;Boxes</span></div>
</div>
</div>
<br>
<hr>

<h2>What is CSS?</h2>
<p>Cascading Style Sheets (CSS) is used to format the layout of a webpage.</p>
<p>With CSS, you can control the color, font, the size of text, the spacing 
between elements, how elements are positioned and laid out, what background 
images or background colors are to be used, different displays for different devices 
and screen sizes, and much more!</p>

<div>
<p><strong>Tip:</strong> The word <strong>cascading</strong> means that a style 
applied to a parent element will also apply to all children elements within the 
parent. So, if you set the color of the body text to "blue", all headings, 
paragraphs, and other text elements within the body will also get the same color (unless you specify 
something else)!</p>
</div>
<hr>

<h2>Using CSS</h2>
<p>CSS can be added to HTML documents in 3 ways:</p>
<ul>
<li><strong>Inline</strong> - by using the <code >style</code> attribute inside HTML elements</li>
<li><strong>Internal</strong> - by using a <code >&lt;style&gt;</code> element in the <code >&lt;head&gt;</code> section</li>
<li><strong>External</strong> - by using a <code >&lt;link&gt;</code> 
element to link to an external CSS file</li>
</ul>
<p>The most common way to add CSS, is to keep the styles in external CSS 
files. However, in this tutorial we will use inline and internal styles, because this is easier to 
demonstrate, and easier for you to try it yourself.</p>
<hr>

<h2>Inline CSS</h2>
<p>An inline CSS is used to apply a unique style to a single HTML element.</p>
<p>An inline CSS uses the <code >style</code> attribute of an HTML element.</p>
<p>The following example sets the text color of the <code >&lt;h1&gt;</code> element to blue, 
and the text color of the <code >&lt;p&gt;</code> element to red:</p>

<hr>

<hr>
<h2>Internal CSS</h2>
<p>An internal CSS is used to define a style for a single HTML page.</p>
<p>An internal CSS is defined in the <code >&lt;head&gt;</code> section of an HTML page, 
within a <code >&lt;style&gt;</code> element.</p>
<p>The following example sets the text color of ALL the <code >&lt;h1&gt;</code> elements 
(on that page) to blue, and the text color of ALL the <code >&lt;p&gt;</code> elements to 
red. In addition, the page will be displayed with a "powderblue" background 
color:&nbsp;</p>

<hr>

<h2>External CSS</h2>
<p>An external style sheet is used to define the style for many HTML pages.</p>
<p>To use an external style sheet, add a link to it in the <code >&lt;head&gt;</code> section of each HTML page:</p>

<p>The external style sheet can be written in any text editor. The file must not contain any 
HTML code, and must be saved with a .css extension.</p>
<p>Here is what the "styles.css" file looks like:</p>

<div>
<p><strong>Tip:</strong> With an external style sheet, you can change the look of an entire web site, by changing one file!</p>
</div>
<hr>

<h2>CSS Colors, Fonts and Sizes</h2>
<p>Here, we will demonstrate some commonly used CSS properties. You will learn 
more about them later.</p>
<p>The CSS <code >color</code> property defines the text color to be used.</p>
<p>The CSS <code >font-family</code> property defines the font to be used.</p>
<p>The CSS <code >font-size </code> property defines the text size to be used.</p>

<hr>

<h2>CSS Border</h2>
<p>The CSS <code >border</code> property defines a border 
around an HTML element.</p>
<p><strong>Tip:</strong> You can define a border for nearly all HTML elements.</p>

<hr>

<h2>CSS Padding</h2>
<p>The CSS <code >padding</code> property defines a padding 
(space) between the text and the border.</p>

<hr>

<h2>CSS Margin</h2>
<p>The CSS <code >margin</code> property defines a margin 
(space) outside the border.</p>

<hr>

<h2>Link to External CSS</h2>
<p>External style sheets can be referenced with a full URL or with a path relative to the current web page.</p>

<div>
<p>You can read more about file paths in the chapter <a href="/html/html_filepaths.asp">HTML 
File Paths</a>.</p>
</div>
<hr>

<h2>Chapter Summary</h2>
<ul>
<li>Use the HTML <code >style</code> attribute for inline styling</li>
<li>Use the HTML <code >&lt;style&gt;</code> element to define internal CSS</li>
<li>Use the HTML <code >&lt;link&gt;</code> element to refer to an external CSS file</li>
<li>Use the HTML <code >&lt;head&gt;</code> element to store &lt;style&gt; and &lt;link&gt; elements</li>
<li>Use the CSS <code >color</code> property for text colors</li>
<li>Use the CSS <code >font-family</code> property for text fonts</li>
<li>Use the CSS <code >font-size</code> property for text sizes</li>
<li>Use the CSS <code >border</code> property for borders</li>
<li>Use the CSS <code >padding</code> property for space inside the border</li>
<li>Use the CSS <code >margin</code> property for space outside the border</li>
</ul>
<div>
<p><strong>Tip:</strong> You can learn much more about CSS in our <a href="/css/default.asp">CSS Tutorial</a>.</p>
</div>
<hr>

<h2>HTML Exercises</h2>
<form autocomplete="off" id="w3-exerciseform" action="exercise.asp?filename=exercise_html_css1" method="post" target="_blank">
<h2>Test Yourself With Exercises</h2>
<div>
<h2>Exercise:</h2>
<p>Use CSS to set the background color of the document (body) to yellow.</p>
<div>
&lt;!DOCTYPE html&gt;
<br>
&lt;html&gt;
<br>
&lt;head&gt;
<br>
&lt;style&gt;
<br>
<input name="ex1" maxlength="4" style="width: 50px;"> <input name="ex2" maxlength="1" style="width: 18px;">
<br>
&nbsp;&nbsp;<input name="ex3" spellcheck="false" maxlength="16" style="width: 166px;">:yellow;
<br>
<input name="ex4" spellcheck="false" maxlength="1" style="width: 18px;">
<br>
&lt;/style&gt;
<br>
&lt;/head&gt;
<br>
&lt;body&gt;
<br><br>
&lt;h1&gt;My Home Page&lt;/h1&gt;
<br><br>
&lt;/body&gt;
<br>
&lt;/html&gt;
</div>
<br>
<button type="submit">Submit Answer »</button>
<p><a target="_blank" href="exercise.asp?filename=exercise_html_css1">Start the Exercise</a></p>
</div>
</form>
<hr>

<h2>HTML Style Tags</h2>
<table>
<tbody><tr>
<th>Tag</th>
<th>Description</th>
</tr>
<tr>
<td><a href="/tags/tag_style.asp">&lt;style&gt;</a></td>
<td>Defines style information for an HTML document</td>
</tr>
<tr>
<td><a href="/tags/tag_link.asp">&lt;link&gt;</a></td>
<td>Defines a link between a document and an external resource </td>
</tr>
</tbody></table>
<div>
<p>For a complete list of all available HTML tags, visit our <a href="/tags/default.asp">HTML Tag Reference</a>.</p>
</div>

<br>

<div id="mypagediv2" style="position:relative;text-align:center;"></div>
<br>
    </div>
  </div>

    <?php require_once "../common/scripts.php" ?>

</body>
</html>

