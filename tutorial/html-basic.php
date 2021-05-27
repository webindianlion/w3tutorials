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
      <h1>HTML Basic Examples</h1>
    
    <hr>
    <p>In this chapter we will show some basic HTML examples.</p>
    <p>Don't worry if we use tags you have not learned about yet.</p>
    <hr>
    
    <h2>HTML Documents</h2>
    <p>All HTML documents must start with a document type declaration: <code >&lt;!DOCTYPE html&gt;</code>.</p>
    <p>The HTML document itself begins with <code >&lt;html&gt;</code> and ends with <code >&lt;/html&gt;</code>.</p>
    <p>The visible part of the HTML document is between <code >&lt;body&gt;</code> and <code >&lt;/body&gt;</code>. </p>
    
    <hr>
    
    <h2>The &lt;!DOCTYPE&gt; Declaration</h2>
    <p>The <code >&lt;!DOCTYPE&gt;</code> declaration represents the document type, and helps browsers to display web pages correctly.</p>
    <p>It must only appear once, at the top of the page (before any HTML tags). </p>
    <p>The <code >&lt;!DOCTYPE&gt;</code> declaration is not case sensitive.</p>
    <p>The <code >&lt;!DOCTYPE&gt;</code> declaration for HTML5 is:</p>
    
    <hr>
    
    <h2>HTML Headings</h2>
    <p>HTML headings are defined with the <code >&lt;h1&gt;</code> to <code >&lt;h6&gt;</code> tags.</p>
    <p><code >&lt;h1&gt;</code> defines the most important heading. <code >&lt;h6&gt;</code> defines the least important 
    heading:&nbsp;</p>
        
    <hr>
    
    <h2>HTML Paragraphs</h2>
    <p>HTML paragraphs are defined with the <code >&lt;p&gt;</code> tag:</p>
    
    <hr>
    
    <h2>HTML Links</h2>
    <p>HTML links are defined with the <code >&lt;a&gt;</code> tag:</p>
    
    <p>The link's destination is specified in the <code >href</code> attribute.&nbsp;</p>
    <p>Attributes are used to provide additional information about HTML elements.</p>
    <p>You will learn more about attributes in a later chapter.</p>
    <hr>
    
    <h2>HTML Images</h2>
    <p>HTML images are defined with the <code >&lt;img&gt;</code> tag.</p>
    <p>The source file (<code >src</code>), alternative text (<code >alt</code>), 
    <code >width</code>, and <code >height</code> are provided as attributes:</p>
    
    <hr>
    
    <h2>How to View HTML Source?</h2>
    <p>Have you ever seen a Web page and wondered "Hey! How did they do that?"</p>
    <h3>View HTML Source Code:</h3>
    <p>Right-click in an HTML page and select "View Page Source" (in 
    Chrome) or "View Source" (in Edge), or similar in other browsers. This will open a window 
    containing the HTML source code of the page.</p>
    <h3>Inspect an HTML Element:</h3>
    <p>Right-click on an element (or a blank area), and choose "Inspect" or 
    "Inspect Element" to see what elements are made up of (you will see both 
    the HTML and the CSS). You can also edit the HTML or CSS on-the-fly in the 
    Elements or Styles panel that opens.</p>
    
    <br>
    
    <div id="mypagediv2" style="position:relative;text-align:center;"></div>
    <br>

      </div>
    </div>
  </div>

    <?php require_once "../common/scripts.php" ?>

</body>
</html>

