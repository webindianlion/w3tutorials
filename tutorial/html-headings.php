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
      <h1>HTML Headings</h1>
<hr>
<p>HTML headings are titles or subtitles that you want to display on a webpage.</p>
<hr>



<hr>
<h2>HTML Headings</h2>
<p>HTML headings are defined with the <code >&lt;h1&gt;</code> to <code >&lt;h6&gt;</code> tags.</p>
<p><code >&lt;h1&gt;</code> defines the most important heading. <code >&lt;h6&gt;</code> defines the least important heading.</p>

<div>
<p><strong>Note:</strong> Browsers automatically add some white space (a margin) before and after a heading.</p>
</div>
<hr>

<h2>Headings Are Important</h2>
<p>Search engines use the headings to index the structure and content of your web pages.</p>
<p>Users often skim a page by its headings. It is important to use headings to show the document structure.</p>
<p><code >&lt;h1&gt;</code> headings should be used for main headings, followed by <code >&lt;h2&gt;</code> headings, then the less important 
<code >&lt;h3&gt;</code>, and so on.</p>
<div>
<p><strong>Note:</strong> Use HTML headings for headings only. Don't use headings to make text 
<strong>BIG</strong> or <strong>bold</strong>.</p>
</div>
<hr>
<h2>Bigger Headings</h2>

<p>Each HTML heading has a default size. However, you can specify the size for any heading 
with the <code >style</code> attribute, using the CSS <code >font-size</code> property:</p>


<hr>

<hr>
<h2>HTML Exercises</h2>
<form autocomplete="off" id="w3-exerciseform" action="exercise.asp?filename=exercise_html_headings1" method="post" target="_blank">
<h2>Test Yourself With Exercises</h2>
<div>
<h2>Exercise:</h2>
<p>Use the correct HTML tag to add a heading with the text "London".</p>
<div>
<input name="ex1" maxlength="15" style="width: 155px;">
<br>
<br>
&lt;p&gt;London is the capital city of England.
It is the most populous city in the United Kingdom,
with a metropolitan area of over 13 million inhabitants.&lt;/p&gt;
</div>
<br>
<button type="submit">Submit Answer »</button>
<p><a target="_blank" href="exercise.asp?filename=exercise_html_headings1">Start the Exercise</a></p>
</div>
</form>
<hr>

<h2>HTML Tag Reference</h2>
<p>W3Schools' tag reference contains additional information about these tags and their attributes.</p>
<table>
<tbody><tr>
<th>Tag</th>
<th>Description</th>
</tr>
<tr>
<td><a href="/tags/tag_html.asp">&lt;html&gt;</a></td>
<td>Defines the root of an HTML document</td>
</tr>
<tr>
<td><a href="/tags/tag_body.asp">&lt;body&gt;</a></td>
<td>Defines the document's body</td>
</tr>
<tr>
<td><a href="/tags/tag_hn.asp">&lt;h1&gt; to &lt;h6&gt;</a></td>
<td>Defines HTML headings</td>
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

