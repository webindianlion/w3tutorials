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
      <h1>HTML Text Formatting</h1>

<hr>
<p>HTML contains several elements for defining text with a special meaning.</p>
<hr>


<hr>

<h2>HTML Formatting Elements</h2>

<p>Formatting elements were designed to display special types of text:</p>
<ul>
<li><code >&lt;b&gt;</code> - Bold text</li>
<li><code >&lt;strong&gt;</code> - Important text</li>
<li><code >&lt;i&gt;</code> - Italic text</li>
<li><code >&lt;em&gt;</code> - Emphasized text</li>
<li><code >&lt;mark&gt;</code> - Marked text</li>
<li><code >&lt;small&gt;</code> - Smaller text</li>
<li><code >&lt;del&gt;</code> - Deleted text</li>
<li><code >&lt;ins&gt;</code> - Inserted text</li>
<li><code >&lt;sub&gt;</code> - Subscript text</li>
<li><code >&lt;sup&gt;</code> - Superscript text</li>
</ul>
<hr>

<h2>HTML &lt;b&gt; and &lt;strong&gt; Elements</h2>
<p>The HTML <code >&lt;b&gt;</code> element defines bold text, 
without any extra importance.</p>

<p>The HTML <code >&lt;strong&gt;</code> element defines text 
with strong importance. The content inside is typically displayed in bold.</p>

<hr>

<hr>
<h2>HTML &lt;i&gt; and &lt;em&gt; Elements</h2>
<p>The HTML <code >&lt;i&gt;</code> element defines a part of 
text in an alternate voice or mood. The content inside is typically displayed in 
italic.</p>
<p><strong>Tip:</strong> The <code >&lt;i&gt;</code> tag is often used to indicate a technical term, 
a phrase from another language, a thought, a ship name, etc.</p>

<p>The HTML <code >&lt;em&gt;</code> element defines 
emphasized text. The content inside is typically displayed in italic.</p>
<p><strong>Tip:</strong> A screen reader will pronounce the words in <code >&lt;em&gt;</code> 
with an emphasis, using verbal stress.</p>

<hr>

<h2>HTML &lt;small&gt; Element</h2>
<p>The HTML <code >&lt;small&gt;</code> element defines 
smaller text:</p>

<hr>

<h2>HTML &lt;mark&gt; Element</h2>
<p>The HTML <code >&lt;mark&gt;</code> element defines text 
that should be marked or highlighted:</p>

<hr>

<h2>HTML &lt;del&gt; Element</h2>
<p>The HTML <code >&lt;del&gt;</code> element defines text 
that has been deleted from a document. Browsers will usually strike a line 
through deleted text:</p>

<hr>
<h2>HTML &lt;ins&gt; Element</h2>
<p>The HTML <code >&lt;ins&gt;</code> element defines a text 
that has been inserted into a document. Browsers will usually underline inserted 
text:</p>

<hr>
<h2>HTML &lt;sub&gt; Element</h2>
<p>The HTML <code >&lt;sub&gt;</code> element defines 
subscript text. Subscript text appears half a character below the normal line, 
and is sometimes rendered in a smaller font. Subscript text can be used for 
chemical formulas, like H<sub>2</sub>O:</p>

<hr>
<h2>HTML &lt;sup&gt; Element</h2>
<p>The HTML <code >&lt;sup&gt;</code> element defines 
superscript text. Superscript text appears half a character above the normal 
line, and is sometimes rendered in a smaller font. Superscript text can be used 
for footnotes, like WWW<sup>[1]</sup>:</p>

<hr>
<h2>HTML Exercises</h2>
<form autocomplete="off" id="w3-exerciseform" action="exercise.asp?filename=exercise_html_formatting1" method="post" target="_blank">
<h2>Test Yourself With Exercises</h2>
<div>
<h2>Exercise:</h2>
<p>Add extra importance to the word "degradation" in the paragraph below.</p>
<div>
&lt;p&gt;
<br>
WWF's mission is to stop the
<input name="ex1" maxlength="8" style="width: 86px;">degradation<input name="ex2" maxlength="9" style="width: 96px;"> of our
planet's natural environment.
<br>
&lt;/p&gt;
</div>
<br>
<button type="submit">Submit Answer »</button>
<p><a target="_blank" href="exercise.asp?filename=exercise_html_formatting1">Start the Exercise</a></p>
</div>
</form>
<hr>

<h2>HTML Text Formatting Elements</h2>
<table>
<tbody><tr>
<th style="width:20%">Tag</th>
<th>Description</th>
</tr>
<tr>
<td><a href="/tags/tag_b.asp">&lt;b&gt;</a></td>
<td>Defines bold text</td>
</tr>
<tr>
<td><a href="/tags/tag_em.asp">&lt;em&gt;</a></td>
<td>Defines emphasized text&nbsp;</td>
</tr>
<tr>
<td><a href="/tags/tag_i.asp">&lt;i&gt;</a></td>
<td>Defines a part of text in an alternate voice or mood</td>
</tr>
<tr>
<td><a href="/tags/tag_small.asp">&lt;small&gt;</a></td>
<td>Defines smaller text</td>
</tr>
<tr>
<td><a href="/tags/tag_strong.asp">&lt;strong&gt;</a></td>
<td>Defines important text</td>
</tr>
<tr>
<td><a href="/tags/tag_sub.asp">&lt;sub&gt;</a></td>
<td>Defines subscripted text</td>
</tr>
<tr>
<td><a href="/tags/tag_sup.asp">&lt;sup&gt;</a></td>
<td>Defines superscripted text</td>
</tr>
<tr>
<td><a href="/tags/tag_ins.asp">&lt;ins&gt;</a></td>
<td>Defines inserted text</td>
</tr>
<tr>
<td><a href="/tags/tag_del.asp">&lt;del&gt;</a></td>
<td>Defines deleted text</td>
</tr>
<tr>
<td><a href="/tags/tag_mark.asp">&lt;mark&gt;</a></td>
<td>Defines marked/highlighted text</td>
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

