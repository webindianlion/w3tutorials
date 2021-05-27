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
      <h1>HTML Paragraphs</h1>
<hr>
<p>A paragraph always starts on a new line, and is usually a block of text.</p>
<hr>

<h2>HTML Paragraphs</h2>
<p>The HTML <code >&lt;p&gt;</code> element defines a paragraph.</p>
<p>A paragraph always starts on a new line, and browsers automatically add some white space (a margin) before and after a paragraph.</p>

<hr>

<h2>HTML Display</h2>
<p>You cannot be sure how HTML will be displayed.</p>
<p>Large or small screens, and resized windows will create different results. </p>
<p>With HTML, you cannot change the display by adding extra spaces or extra lines in your HTML code.</p>
<p>The browser will automatically remove any extra spaces and lines when the page is 
displayed:</p>

<hr>

<hr>
<h2>HTML Horizontal Rules</h2>
<p>The <code >&lt;hr&gt;</code> tag defines a thematic break in an HTML page, and is most often 
displayed as a horizontal rule.</p>
<p>The <code >&lt;hr&gt;</code> element is used to separate content (or define a change) in an HTML 
page:</p>

<p>The <code >&lt;hr&gt;</code> tag is an empty tag, which means that it has no end tag.</p>
<hr>

<h2>HTML Line Breaks</h2>
<p>The HTML <code >&lt;br&gt;</code> element defines a line break.</p>
<p>Use <code >&lt;br&gt;</code> if you want a line break (a new line) without starting a new paragraph:</p>

<p>The <code >&lt;br&gt;</code> tag is an empty tag, which means that it has no end tag.</p>
<hr>

<h2>The Poem Problem</h2>
<p>This poem will display on a single line:</p>

<hr>

<h2>Solution - The HTML &lt;pre&gt; Element</h2>
<p>The HTML <code >&lt;pre&gt;</code> element defines preformatted text.</p>
<p>The text inside a <code >&lt;pre&gt;</code> element is displayed in a fixed-width font (usually 
Courier), and it preserves both spaces and line breaks:</p>

<hr>
<h2>HTML Exercises</h2>
<form autocomplete="off" id="w3-exerciseform" action="exercise.asp?filename=exercise_html_paragraphs1" method="post" target="_blank">
<h2>Test Yourself With Exercises</h2>
<div>
<h2>Exercise:</h2>
<p>Use the correct HTML tag to add a paragraph with the text "Hello World!".</p>
<div>
&lt;html&gt;
<br>
&lt;body&gt;
<br>
<input name="ex1" maxlength="19" style="width: 195px;">
<br>
&lt;/body&gt;
<br>
&lt;/html&gt;
</div>
<br>
<button type="submit">Submit Answer »</button>
<p><a target="_blank" href="exercise.asp?filename=exercise_html_paragraphs1">Start the Exercise</a></p>
</div>
</form>
<hr>

<h2>HTML Tag Reference</h2>
<p>W3Schools' tag reference contains additional information about HTML elements and their attributes.</p>
<table>
<tbody><tr>
<th>Tag</th>
<th>Description</th>
</tr>
<tr>
<td><a href="/tags/tag_p.asp">&lt;p&gt;</a></td>
<td>Defines a paragraph</td>
</tr>
<tr>
<td><a href="/tags/tag_hr.asp">&lt;hr&gt;</a></td>
<td>Defines a thematic change in the content</td>
</tr>
<tr>
<td><a href="/tags/tag_br.asp">&lt;br&gt;</a></td>
<td>Inserts a single line break</td>
</tr>
<tr>
<td><a href="/tags/tag_pre.asp">&lt;pre&gt;</a></td>
<td>Defines pre-formatted text</td>
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
  </div>

    <?php require_once "../common/scripts.php" ?>

</body>
</html>

