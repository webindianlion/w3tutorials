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
      <h1>HTML Elements</h1>
<hr>
<p>An HTML element is defined by a start tag, some content, and an 
end tag.</p>
<hr>

<h2>HTML Elements</h2>

<p>The HTML <strong>element</strong> is everything from the start tag to the end tag:</p>

<div>
<span><span>&lt;</span>tagname<span>&gt;</span></span>Content goes here...<span><span>&lt;</span>/tagname<span>&gt;</span></span>
</div>

<p>Examples of some HTML elements:</p>

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

<h2>Nested HTML Elements</h2>
<p>HTML elements can be nested (this means that elements can contain other elements).</p>
<p>All HTML documents consist of nested HTML elements.</p>
<p>The following example contains four HTML elements (<code >&lt;html&gt;</code>, <code >&lt;body&gt;</code>, <code >&lt;h1&gt;</code> 
and <code >&lt;p&gt;</code>):</p>

<h3>Example Explained</h3>
<p>The <code >&lt;html&gt;</code> element is the root element 
and it defines the whole HTML document.</p>
<p>It has a start tag <code >&lt;html&gt;</code> and an end tag <code >&lt;/html&gt;</code>.</p>
<p>Then, inside the <code >&lt;html&gt;</code> element there is 
a <code >&lt;body&gt;</code> 
element:</p>

<p>The <code >&lt;body&gt;</code> element defines the 
document's body.</p>
<p>It has a start tag <code >&lt;body&gt;</code> and an end tag <code >&lt;/body&gt;</code>.</p>
<p>Then, inside the <code >&lt;body&gt;</code> element there 
are two other elements:
<code >&lt;h1&gt;</code> and <code >
&lt;p&gt;</code>:</p>


<p>The <code >&lt;h1&gt;</code> element defines a heading.</p>
<p>It has a start tag <code >&lt;h1&gt;</code> and an end tag <code >&lt;/h1&gt;</code>:</p>



<p>The <code >&lt;p&gt;</code> element defines a paragraph.</p>
<p>It has a start tag <code >&lt;p&gt;</code> and an end tag <code >&lt;/p&gt;</code>:</p>


<hr>

<hr>
<h2>Never Skip the End Tag</h2>
<p>Some HTML elements will display correctly, even if you forget the end tag:</p>


<p><strong>However, never rely on this! Unexpected results and errors may occur if you forget the end tag!</strong></p>
<hr>

<h2>Empty HTML Elements</h2>
<p>HTML elements with no content are called empty elements.</p>
<p>The <code >&lt;br&gt;</code> tag defines a line break, and 
is an empty element without a closing tag:</p>
<hr>

<h2>HTML is Not Case Sensitive</h2>
<p>HTML tags are not case sensitive: <code >&lt;P&gt;</code> means the same as <code >&lt;p&gt;</code>.</p>
<p>The HTML standard does not require lowercase tags, but W3C
<b>recommends</b> lowercase in HTML, and <b>demands</b> lowercase for stricter document types like XHTML.</p>
<div>
<p>At W3Schools we always use lowercase tag names.</p>
</div>
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

