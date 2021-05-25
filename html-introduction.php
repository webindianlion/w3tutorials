<!DOCTYPE html>
<html lang="en">
<head>
    <title>w3html</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php require_once "./common/styles.php" ?>
</head>
<body>
<?php include "./common/topmenu.php"  ?>
  <div class="container-fluid d-flex p-0 ">
  <?php include "./common/leftmenu.php" ?>
        
        <div class="container main">
            <div class="">                
                <h1 class="bd-title heading1" >HTML Introduction</h1>
                
                <p class="paragraph">HTML is the standard markup language for creating Web pages.</p>

                <h2 class="heading2">What is HTML?</h2>

                <ul>
                  <li> HTML stands for Hyper Text Markup Language </li>
                  <li> HTML is the standard markup language for creating Web pages </li>
                  <li> HTML describes the structure of a Web page </li>
                  <li> HTML consists of a series of elements </li>
                  <li> HTML elements tell the browser how to display the content </li>
                  <li> HTML elements label pieces of content such as "this is a heading", "this is a paragraph", "this is a link", etc. </li>
                </ul>

<pre class="code">
  &lt;!DOCTYPE html>
    &lt;html>
    &lt;head>
    &lt;title>Page Title&lt;/title>
    &lt;/head>
    &lt;body>

    &lt;h1>My First Heading&lt;/h1>
    &lt;p>My first paragraph.&lt;/p>

    &lt;/body>
    &lt;/html>
</pre>
                <h3>Example Explained</h3>

                <ul>
                  <li> The &lt;!DOCTYPE html> declaration defines that this document is an HTML5 document </li>
                  <li> The &lt;html> element is the root element of an HTML page </li>
                  <li> The &lt;head> element contains meta information about the HTML page </li>
                  <li> The &lt;title> element specifies a title for the HTML page (which is shown in the browser's title bar or in the page's tab) </li>
                  <li> The &lt;body> element defines the document's body, and is a container for all the visible contents, such as headings, paragraphs, images, hyperlinks, tables, lists, etc. </li>
                  <li> The &lt;h1> element defines a large heading </li>
                  <li> The &lt;p> element defines a paragraph </li>
                </ul>

                <h2>What is an HTML Element?</h2>
                <p>An HTML element is defined by a start tag, some content, and an end tag:</p>

<pre>
&lt;tagname>Content goes here...&lt;/tagname>
The HTML element is everything from the start tag to the end tag:
&lt;h1>My First Heading&lt;/h1>
&lt;p>My first paragraph.&lt;/p>
</pre>

<p class="note"><strong>Note:</strong> Some HTML elements have no content (like the &lt;br&gt; 
element). These elements are called empty elements. Empty elements do not have an end tag!</p>
              </div>
        </div>
    </div>

    <?php require_once "./common/scripts.php" ?>

</body>
</html>

