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
      <h1>HTML Colors</h1>

<hr>
<p>HTML colors are specified with predefined color names, or with 
RGB, HEX, HSL, RGBA, or HSLA values.</p>
<hr>

<h2>Color Names</h2>
<p>In HTML, a color can be specified by using a color name:</p>
<div style="margin:0 -16px;line-height:80px;color:white;">
<div>
  <div style="background-color:tomato;">Tomato</div>
</div>
<div>
  <div style="background-color:orange;">Orange</div>
</div>
<div>
  <div style="background-color:dodgerblue;">DodgerBlue</div>
</div>
<div>
  <div style="background-color:mediumseagreen;">MediumSeaGreen</div>
</div>
<div>
  <div style="background-color:gray;">Gray</div>
</div>
<div>
  <div style="background-color:slateblue;">SlateBlue</div>
</div>
<div>
  <div style="background-color:violet;">Violet</div>
</div>
<div>
  <div style="background-color:lightgray;color:#444444">LightGray</div>
</div>
</div>
<p>
<a target="_blank" href="tryit.asp?filename=tryhtml_color_names">Try it Yourself »</a>
</p>
<p>HTML supports <a href="/colors/colors_names.asp">140 standard color names</a>.</p>
<hr>

<h2>Background Color</h2>
<p>You can set the background color for HTML elements:</p>

<div style="background-color:dodgerblue; text-align:center;color:white;font-size:24px;">Hello World</div>
<br>
<div style="background-color:tomato;color:white;"><br>
Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.<br><br>
</div>

<hr>
<h2>Text Color</h2>
<p>You can set the color of text:</p>
<h3 style="color:tomato">Hello World</h3>
<p style="color:dodgerblue">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
<p style="color:mediumseagreen">Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>

<hr>
<h2>Border Color</h2>
<p>You can set the color of borders:</p>
<h2 style="border: 2px solid Tomato;">Hello World</h2>
<h2 style="border: 2px solid DodgerBlue;">Hello World</h2>
<h2 style="border: 2px solid Violet;">Hello World</h2>

<hr>
<h2>Color Values</h2>
<p>In HTML, colors can also be specified using RGB values, HEX values, HSL 
values, RGBA values, and HSLA values.</p>
<p>The following three &lt;div&gt; elements have their background color set with RGB, 
HEX, and HSL values:</p>

<div style="line-height:60px;color:white;font-size:20px;font-weight:bold;font-family:Consolas, 'Courier New', Courier, monospace">
<div style="background-color:rgb(255, 99, 71);margin:10px 0;">rgb(255, 99, 71)</div>
<div style="background-color:#ff6347;margin:10px 0;">#ff6347</div>
<div style="background-color:hsl(9, 100%, 64%);margin:10px 0;">hsl(9, 100%, 64%)</div>
</div>
<p>The following two &lt;div&gt; elements have their background color set with RGBA 
and HSLA values, which adds an Alpha channel to the color (here we have 50% 
transparency):</p>
<div style="line-height:60px;color:white;font-size:20px;font-weight:bold;font-family:Consolas, 'Courier New', Courier, monospace">
<div style="background-color:rgba(255, 99, 71, 0.5);margin:10px 0;">rgba(255, 99, 71, 0.5)</div>
<div style="background-color:hsla(9, 100%, 64%, 0.5);margin:10px 0;">hsla(9, 100%, 64%, 0.5)</div>
</div>

<div>
<h3>Learn more about Color Values</h3>
<p>You will learn more about <a href="html_colors_rgb.asp">RGB</a>, <a href="html_colors_hex.asp">HEX</a> and <a href="html_colors_hsl.asp">HSL</a> in the next chapters.</p>
</div>

<br>
<div id="mypagediv2" style="position:relative;text-align:center;"></div>
<br>


<!---+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++--->


<div>
    
<h1>HTML RGB and RGBA Colors</h1>

<hr>
<p>An RGB color value represents RED, GREEN, and BLUE light 
sources.</p>
<p>An RGBA color value is an extension of RGB with an 
Alpha channel (opacity).</p>
<hr>

<h2>RGB Color Values</h2>
<p>In HTML, a color can be specified as an RGB value, using this formula:</p> 
<p style="font-size:20px;font-weight:bold;font-family:Consolas, 'Courier New', Courier, monospace">rgb(<em>red,</em> <em>green</em>, <em>blue</em>)</p>
<p>Each parameter (red, green, and 
blue) defines the intensity of the color with a value between 0 and 255.</p>
<p>This means that there are 256 x 256 x 256 = 16777216 possible colors!</p>
<p>For example, rgb(255, 0, 0) is displayed as red, 
because red is set to its highest value (255), and the other two (green and blue) are 
set to 0.</p>
<p>Another example, rgb(0, 255, 0) is displayed as green, 
because green is set to its highest value (255), and the other two (red and blue) are 
set to 0.</p>
<p>To display black, set all color parameters to 0, like this: rgb(0, 0, 0).</p>
<p>To display white, set all color parameters to 255, like 
this: rgb(255, 255, 255). </p>
<p>Experiment by mixing the RGB values below:</p>

<div>
<div>
  <div>
  </div>
  <div>
    <div id="rgbresult" style="line-height: 80px; background-color: rgb(255, 99, 71);"><p id="rgbresulttext" style="font-size: 120%; font-weight: bold; font-family: Consolas, &quot;Courier New&quot;, Courier, monospace; color: rgb(255, 255, 255);">rgb(255, 99, 71)</p></div>
  </div>
  <div>
  </div>
</div>
<div>
  <div>
    <p>RED</p>
    <input onchange="changeRGB()" oninput="changeRGB()" type="range" id="slideRed" name="slideRed" value="255" min="0" max="255">
    <div id="valRed2" xstyle="background-color:red;border-radius:5px;color:white;opacity:0.8">255</div>
  </div>
  <div>
    <p>GREEN</p>
    <input onchange="changeRGB()" oninput="changeRGB()" type="range" id="slideGreen" name="slideGreen" value="99" min="0" max="255">
    <div id="valGreen2" xstyle="background-color:#00ff00;border-radius:5px;opacity:0.8">99</div>
  </div>
  <div>
    <p>BLUE</p>
    <input onchange="changeRGB()" oninput="changeRGB()" type="range" id="slideBlue" name="slideBlue" value="71" min="0" max="255">
    <div id="valBlue2" xstyle="background-color:blue;border-radius:5px;color:white;opacity:0.8">71</div>
  </div>
</div>
</div>

<hr>

<h2>Shades of Gray</h2>
<p>Shades of gray are often defined using equal values for all three parameters:</p>

<hr>

<h2>RGBA Color Values</h2>
<p>RGBA color values are an extension of RGB color values with an Alpha channel 
- which specifies the opacity for a color.</p>
<p>An RGBA color value is 
specified with:</p>
<p style="font-size:20px;font-weight:bold;font-family:Consolas, 'Courier New', Courier, monospace">rgba(<em>red,</em> <em>green</em>, <em>blue, 
alpha</em>)</p>

<p>The alpha parameter is a number 
between 0.0 (fully transparent) and 1.0 (not transparent at all):</p>
<p>Experiment by mixing the RGBA values below:</p>

<div>
<div>
  <div>
  </div>
  <div>
    <div id="rgbaresult" style="line-height: 80px; background-color: rgba(255, 99, 71, 0.5);"><p id="rgbaresulttext" style="font-size: 120%; font-weight: bold; font-family: Consolas, &quot;Courier New&quot;, Courier, monospace; color: rgb(255, 255, 255);">rgba(255, 99, 71, 0.5)</p></div>
  </div>
  <div>
  </div>
</div>
<div>
  <div>
    <p>RED</p>
    <input onchange="changeRGBA()" oninput="changeRGBA()" type="range" id="slideRedA" name="slideRedA" value="255" min="0" max="255">
    <div id="valRed2A" xstyle="background-color:red;border-radius:5px;color:white;opacity:0.8">255</div>
  </div>
  <div>
    <p>GREEN</p>
    <input onchange="changeRGBA()" oninput="changeRGBA()" type="range" id="slideGreenA" name="slideGreenA" value="99" min="0" max="255">
    <div id="valGreen2A" xstyle="background-color:#00ff00;border-radius:5px;opacity:0.8">99</div>
  </div>
  <div>
    <p>BLUE</p>
    <input onchange="changeRGBA()" oninput="changeRGBA()" type="range" id="slideBlueA" name="slideBlueA" value="71" min="0" max="255">
    <div id="valBlue2A" xstyle="background-color:blue;border-radius:5px;color:white;opacity:0.8">71</div>
  </div>
  <div>
    <p>ALPHA</p>
    <input onchange="changeRGBA()" oninput="changeRGBA()" type="range" id="slideAlphaA" name="slideAlphaA" value="5" min="0" max="10">
    <div id="valAlpha2A" xstyle="background-color:blue;border-radius:5px;color:white;opacity:0.8">0.5</div>
  </div>
</div>
</div>

<br>

<div id="mypagediv2" style="position:relative;text-align:center;"></div>
<br>

</div>


<!---+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++--->


<div>

<h1>HTML HEX Colors</h1>

<hr>
<p>A hexadecimal color is specified with: #RRGGBB, where the RR 
(red), GG (green) and BB (blue) hexadecimal integers specify the components of 
the color.</p>
<hr>

<h2>HEX Color Values</h2>
<p>In HTML, a color can be specified using a hexadecimal value in 
the form:</p>
<p style="font-size:20px;font-weight:bold;font-family:Consolas, 'Courier New', Courier, monospace">#<em>rrggbb</em></p>
<p>Where rr (red), gg (green) and bb (blue) are hexadecimal values between 00 and ff (same as decimal 0-255).</p>
<p>For example, #ff0000 is displayed as red, because red is set to its highest value (ff), and the other 
two (green and blue) are set to 00.</p>
<p>Another example, #00ff00 is displayed as green, 
because green is set to its highest value (ff), and the other two (red and blue) are 
set to 00.</p>
<p>To display black, set all color parameters to 00, like this: #000000.</p>
<p>To display white, set all color parameters to ff, like 
this: #ffffff. </p>

<p>Experiment by mixing the HEX values below:</p>
<div>
<div>
  <div>
  </div>
  <div>
    <div id="hexresult" style="line-height: 80px; background-color: rgb(255, 99, 71);"><p id="hexresulttext" style="font-size: 120%; font-weight: bold; font-family: Consolas, &quot;Courier New&quot;, Courier, monospace; color: rgb(255, 255, 255);">#ff6347</p></div>
  </div>
  <div>
  </div>
</div>
<div>
  <div>
    <p>RED</p>
    <input onchange="changeHex()" oninput="changeHex()" type="range" id="slideRedHex" name="slideRedHex" value="255" min="0" max="255">
    <div id="valRed2Hex" style="font-size:120%;font-family:Consolas, 'Courier New', Courier, monospace;">ff</div>
  </div>
  <div>
    <p>GREEN</p>
    <input onchange="changeHex()" oninput="changeHex()" type="range" id="slideGreenHex" name="slideGreenHex" value="99" min="0" max="255">
    <div id="valGreen2Hex" style="font-size:120%;font-family:Consolas, 'Courier New', Courier, monospace;">63</div>
  </div>
  <div>
    <p>BLUE</p>
    <input onchange="changeHex()" oninput="changeHex()" type="range" id="slideBlueHex" name="slideBlueHex" value="71" min="0" max="255">
    <div id="valBlue2Hex" style="font-size:120%;font-family:Consolas, 'Courier New', Courier, monospace;">47</div>
  </div>
</div>
</div>

<hr>

<h2>Shades of Gray</h2>
<p>Shades of gray are often defined using equal values for all three parameters:</p>


<br>

<div id="mypagediv2" style="position:relative;text-align:center;"></div>
<br>

</div>


<!---+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++--->



<div>
    
<h1>HTML HSL and HSLA Colors</h1>

<hr>
<p>HSL stands for hue, saturation, and lightness.</p>
<p>HSLA color values are an extension of HSL with an Alpha channel 
(opacity).</p>
<hr>

<h2>HSL Color Values</h2>
<p>In HTML, a color can be specified using hue, saturation, and lightness (HSL) in 
the form:</p>
<p style="font-size:20px;font-weight:bold;font-family:Consolas, 'Courier New', Courier, monospace">hsl(<em>hue</em>, <em>saturation</em>, <em>lightness</em>)</p>
<p>Hue is a degree on the color wheel from 0 to 360. 0 is red, 120 is green, and 240 is blue.</p>
<p>Saturation is a percentage value, 0% means a shade of gray, and 100% is the full color.</p>
<p>Lightness is also a percentage value, 0% is black, and 100% is white.</p>

<p>Experiment by mixing the HSL values below:</p>

<div>
<div>
  <div>
  </div>
  <div>
    <div id="hslresult" style="line-height: 80px; background-color: rgb(255, 0, 0);"><p id="hslresulttext" style="font-size: 120%; font-weight: bold; font-family: Consolas, &quot;Courier New&quot;, Courier, monospace; color: rgb(255, 255, 255);">hsl(0, 100%, 50%)</p></div>
  </div>
  <div>
  </div>
</div>
<div>
  <div>
    <p>HUE</p>
    <input onchange="changeHsl()" oninput="changeHsl()" type="range" id="slideHue" name="slideHue" value="0" min="0" max="360">
    <div id="valHue" style="font-size:120%;font-family:Consolas, 'Courier New', Courier, monospace;">0</div>
  </div>
  <div>
    <p>SATURATION</p>
    <input onchange="changeHsl()" oninput="changeHsl()" type="range" id="slideSat" name="slideSat" value="100" min="0" max="100">
    <div id="valSat" style="font-size:120%;font-family:Consolas, 'Courier New', Courier, monospace;">100%</div>
  </div>
  <div>
    <p>LIGHTNESS</p>
    <input onchange="changeHsl()" oninput="changeHsl()" type="range" id="slideLight" name="slideLight" value="50" min="0" max="100">
    <div id="valLight" style="font-size:120%;font-family:Consolas, 'Courier New', Courier, monospace;">50%</div>
  </div>
</div>
</div>

<hr>
<h3>Saturation</h3>
<p>Saturation can be described as the intensity of a color.</p>
<p>100% is pure color, no shades of gray</p>
<p>50% is 50% gray, but you can still see the color.</p>
<p>0% is completely gray, you can no longer see the color.</p>

<hr>

<h3>Lightness</h3>
<p>The lightness of a color can be described as how much light you want to give the color, where 0% means no light (black), 50% means 50% light (neither dark nor light) 100% means full lightness (white).</p>

<hr>

<h2>Shades of Gray</h2>
<p>Shades of gray are often defined by setting the hue and saturation to 0, and 
adjust the lightness from 0% to 100% to get darker/lighter shades:</p>

<hr>
<h2>HSLA Color Values</h2>
<p>HSLA color values are an extension of HSL color values with an Alpha channel 
- which specifies the opacity for a color.</p>
<p>An HSLA color value is 
specified with:</p>
<p style="font-size:20px;font-weight:bold;font-family:Consolas, 'Courier New', Courier, monospace">hsla(<em>hue,</em> <em>saturation</em>, <em>lightness, 
alpha</em>)</p>
<p>The alpha parameter is a number 
between 0.0 (fully transparent) and 1.0 (not transparent at all):</p>

<p>Experiment by mixing the HSLA values below:</p>

<div>
<div>
  <div>
  </div>
  <div>
    <div id="hslaresult" style="line-height: 80px; background-color: rgba(255, 0, 0, 0.5);"><p id="hslaresulttext" style="font-size: 120%; font-weight: bold; font-family: Consolas, &quot;Courier New&quot;, Courier, monospace; color: rgb(255, 255, 255);">hsla(0, 100%, 50%, 0.5)</p></div>
  </div>
  <div>
  </div>
</div>
<div>
  <div>
    <p>HUE</p>
    <input onchange="changeHsla()" oninput="changeHsla()" type="range" id="slideHueA" name="slideHueA" value="0" min="0" max="360">
    <div id="valHueA" style="font-size:120%;font-family:Consolas, 'Courier New', Courier, monospace;">0</div>
  </div>
  <div>
    <p>SATURATION</p>
    <input onchange="changeHsla()" oninput="changeHsla()" type="range" id="slideSatA" name="slideSatA" value="100" min="0" max="100">
    <div id="valSatA" style="font-size:120%;font-family:Consolas, 'Courier New', Courier, monospace;">100%</div>
  </div>
  <div>
    <p>LIGHTNESS</p>
    <input onchange="changeHsla()" oninput="changeHsla()" type="range" id="slideLightA" name="slideLightA" value="50" min="0" max="100">
    <div id="valLightA" style="font-size:120%;font-family:Consolas, 'Courier New', Courier, monospace;">50%</div>
  </div>
  <div>
    <p>ALPHA</p>
    <input onchange="changeHsla()" oninput="changeHsla()" type="range" id="slideHslAlpha" name="slideHslAlpha" value="5" min="0" max="10">
    <div id="valHslAlpha" style="font-size:120%;font-family:Consolas, 'Courier New', Courier, monospace;">0.5</div>
  </div>
</div>
</div>

<br>

<div id="mypagediv2" style="position:relative;text-align:center;"></div>
<br>

</div>

<!---+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++--->

      </div>
    </div>
  </div>

    <?php require_once "../common/scripts.php" ?>

</body>
</html>

