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
      <h1>HTML Quotation and Citation Elements</h1>

<hr>
<p>In this chapter we will go through the 
<code >&lt;blockquote&gt;</code>,<code >&lt;q&gt;</code>, <code >&lt;abbr&gt;</code>, <code >&lt;address&gt;</code>, <code >&lt;cite&gt;</code>, 
and <code >&lt;bdo&gt;</code> HTML elements.</p>
<hr>

<hr>

<h2>HTML &lt;blockquote&gt; for Quotations</h2>
<p>The HTML <code >&lt;blockquote&gt;</code> element defines a section that 
is quoted from another source.</p>
<p>Browsers usually indent <code >&lt;blockquote&gt;</code> elements.</p>

<hr>

<h2>HTML &lt;q&gt; for Short Quotations</h2>
<p>The HTML <code >&lt;q&gt;</code> tag defines a short quotation.</p>
<p>Browsers normally insert quotation marks around the quotation.</p>

<hr>

<hr>
<h2>HTML &lt;abbr&gt; for Abbreviations</h2>
<p>The HTML <code >&lt;abbr&gt;</code> tag defines an abbreviation or an acronym, like "HTML", 
"CSS", "Mr.", 
"Dr.", "ASAP", "ATM".</p>
<p>Marking abbreviations can give useful information to browsers, translation 
systems and search-engines.</p>
<p><b>Tip:</b> Use the global title attribute to 
show the description for the 
abbreviation/acronym when you mouse over the element.&nbsp;</p>

<hr>

<h2>HTML &lt;address&gt; for Contact Information</h2>
<p>The HTML <code >&lt;address&gt;</code> tag defines the contact information for the author/owner of a document 
or an article.</p>
<p>The contact information can be an email address, URL, physical address, phone 
number, social media handle, etc.</p>
<p>The text in the <code >&lt;address&gt;</code> element usually renders in <i>italic,</i> 
and browsers will
always add a line break before and after the <code >&lt;address&gt;</code> element.</p>

<hr>

<h2>HTML &lt;cite&gt; for Work Title</h2>
<p>The HTML <code >&lt;cite&gt;</code> tag defines the title of a 
creative work (e.g. a book, a poem, a song, a movie, a painting, a sculpture, etc.).</p>
<p><b>Note:</b> A person's name is not the title of a work.</p>
<p>The text in the <code >&lt;cite&gt;</code> element usually renders in <i>italic</i>.</p>

<hr>

<h2>HTML &lt;bdo&gt; for Bi-Directional Override</h2>
<p>BDO stands for Bi-Directional Override.</p>
<p>The HTML <code >&lt;bdo&gt;</code> tag is used to override 
the current text direction:</p>

<hr>
<h2>HTML Exercises</h2>
<form autocomplete="off" id="w3-exerciseform" action="exercise.asp?filename=exercise_html_quotation_elements1" method="post" target="_blank">
<h2>Test Yourself With Exercises</h2>
<div>
<h2>Exercise:</h2>
<p>Use an HTML element to add quotation marks around the letters "cool".</p>
<div>
&lt;p&gt;
<br>
I am so <input name="ex1" maxlength="3" style="width: 37px;">cool<input name="ex2" maxlength="4" style="width: 46px;">.
<br>
&lt;/p&gt;
</div>
<br>
<button type="submit">Submit Answer »</button>
<p><a target="_blank" href="exercise.asp?filename=exercise_html_quotation_elements1">Start the Exercise</a></p>
</div>
</form>
<hr>

<h2>HTML Quotation and Citation Elements</h2>
<table>
<tbody><tr>
<th style="width:20%">Tag</th>
<th>Description</th>
</tr>
<tr>
<td><a href="/tags/tag_abbr.asp">&lt;abbr&gt;</a></td>
<td>Defines an abbreviation or acronym</td>
</tr>
<tr>
<td><a href="/tags/tag_address.asp">&lt;address&gt;</a></td>
<td>Defines contact information for the author/owner of a document</td>
</tr>
<tr>
<td><a href="/tags/tag_bdo.asp">&lt;bdo&gt;</a></td>
<td>Defines the text direction</td>
</tr>
<tr>
<td><a href="/tags/tag_blockquote.asp">&lt;blockquote&gt;</a></td>
<td> Defines a section that is quoted from another source</td>
</tr>
<tr>
<td><a href="/tags/tag_cite.asp">&lt;cite&gt;</a></td>
<td>Defines the title of a work</td>
</tr>
<tr>
<td><a href="/tags/tag_q.asp">&lt;q&gt;</a></td>
<td>Defines a short inline quotation</td>
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

