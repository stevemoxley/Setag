<?php 	session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/setag.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Setag Corporation | Property Management | Winchester, MO</title>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<style type="text/css">
#top {
	vertical-align: top;
	text-align: left;
}
#table1 {
	border: 1px solid #000;
}
#spd {
	margin-left: 100px;
	width: 175px;
}
.background .container .content #form1 #table1 table {
	border: 1px solid #000;
}
.background .container .content #form1 #table1 table tr td {
	border: 1px solid #000;
}
.box1 {
	border-top-width: 1px;
	border-right-width: 1px;
	border-top-style: solid;
	border-top-color: #000;
	border-right-color: #000;
	border-bottom-color: #000;
	border-left-color: #000;
	border-right-style: solid;
}
.box2 {
	border-top-width: 1px;
	border-top-style: solid;
	border-top-color: #000;
	border-right-color: #000;
	border-bottom-color: #000;
	border-left-color: #000;
}
.textboxes {
	border: thin solid #000;
	margin-left: 100px;
	width: 175px;
	font-family: Verdana, Geneva, sans-serif;
	font-size: 14px;
	text-align: left;
}
.background .container .content #form1 table tr {
	height: 0px;
}
.background .container .content #form1 table tr td {
	height: 30px;
}
.background .container .content #form1 table {
	height: auto;
}
#table2 {
	width: 900px;
	height: 300px;
}
#description2 {
	width: 350px;
	font-family: Verdana, Geneva, sans-serif;
	font-size: 14px;
	text-align: left;
	vertical-align: top;
	margin-left: 125px;
	resize: none;
}
#subtext {
	font-size: 10px;
}
#textfield {
	font-family: "Times New Roman", Times, serif;
	font-size: 14px;
}
.background .container .content h2 {
}
#header {
	font-size: 24px;
	font-weight: bolder;
}
</style>
<!-- InstanceEndEditable -->
<style type="text/css">
<!--
body {
	font: 100%/1.4 Verdana, Arial, Helvetica, sans-serif;
	margin: 0;
	padding: 0;
	color: #000;
	height: 150px;
	z-index: -1;
}

/* ~~ Element/tag selectors ~~ */
ul, ol, dl { /* Due to variations between browsers, it's best practices to zero padding and margin on lists. For consistency, you can either specify the amounts you want here, or on the list items (LI, DT, DD) they contain. Remember that what you do here will cascade to the .nav list unless you write a more specific selector. */
	padding: 0;
	margin: 0;
}
h1, h2, h3, h4, h5, h6, p {
	margin-top: 0;	 /* removing the top margin gets around an issue where margins can escape from their containing div. The remaining bottom margin will hold it away from any elements that follow. */
	padding-right: 15px;
	padding-left: 15px; /* adding the padding to the sides of the elements within the divs, instead of the divs themselves, gets rid of any box model math. A nested div with side padding can also be used as an alternate method. */
}
a img { /* this selector removes the default blue border displayed in some browsers around an image when it is surrounded by a link */
	border: none;
}

/* ~~ Styling for your site's links must remain in this order - including the group of selectors that create the hover effect. ~~ */
a:link {
	color: #FFF;
	text-decoration: none; /* unless you style your links to look extremely unique, it's best to provide underlines for quick visual identification */
}
a:visited {
	color: #FFF;
	text-decoration: none;
}
a:hover, a:active, a:focus { /* this group of selectors will give a keyboard navigator the same hover experience as the person using a mouse. */
	text-decoration: none;
}

/* ~~this fixed width container surrounds the other divs~~ */
.container {
	width: 960px;
	background: #FFF;
	margin: 0 auto;
	border: 1px solid #000;
}

/* ~~ the header is not given a width. It will extend the full width of your layout. It contains an image placeholder that should be replaced with your own linked logo ~~ */
.header {
	background: #FFF;
	border-bottom-width: 1px;
	border-bottom-style: solid;
	border-bottom-color: #000;
}

/* ~~ These are the columns for the layout. ~~ 

1) Padding is only placed on the top and/or bottom of the divs. The elements within these divs have padding on their sides. This saves you from any "box model math". Keep in mind, if you add any side padding or border to the div itself, it will be added to the width you define to create the *total* width. You may also choose to remove the padding on the element in the div and place a second div within it with no width and the padding necessary for your design. You may also choose to remove the padding on the element in the div and place a second div within it with no width and the padding necessary for your design.

2) No margin has been given to the columns since they are all floated. If you must add margin, avoid placing it on the side you're floating toward (for example: a right margin on a div set to float right). Many times, padding can be used instead. For divs where this rule must be broken, you should add a "display:inline" declaration to the div's rule to tame a bug where some versions of Internet Explorer double the margin.

3) Since classes can be used multiple times in a document (and an element can also have multiple classes applied), the columns have been assigned class names instead of IDs. For example, two sidebar divs could be stacked if necessary. These can very easily be changed to IDs if that's your preference, as long as you'll only be using them once per document.

4) If you prefer your nav on the right instead of the left, simply float these columns the opposite direction (all right instead of all left) and they'll render in reverse order. There's no need to move the divs around in the HTML source.

*/
.sidebar1 {
	float: left;
	width: 180px;
	padding-bottom: 10px;
}
.content {
	width: 944px;
	float: left;
	border-right-width: 3px;
	border-bottom-width: 3px;
	border-left-width: 3px;
	border-right-style: solid;
	border-bottom-style: solid;
	border-left-style: solid;
	border-right-color: #414141;
	border-bottom-color: #414141;
	border-left-color: #414141;
	padding-top: 20px;
	padding-right: 0;
	padding-bottom: 10px;
	padding-left: 10px;
}

/* ~~ This grouped selector gives the lists in the .content area space ~~ */
.content ul, .content ol { 
	padding: 0 15px 15px 40px; /* this padding mirrors the right padding in the headings and paragraph rule above. Padding was placed on the bottom for space between other elements on the lists and on the left to create the indention. These may be adjusted as you wish. */
}

/* ~~ The navigation list styles (can be removed if you choose to use a premade flyout menu like Spry) ~~ */
ul.nav {
	list-style: none; /* this removes the list marker */
	border-top: 1px solid #666; /* this creates the top border for the links - all others are placed using a bottom border on the LI */
	margin-bottom: 15px; /* this creates the space between the navigation on the content below */
}
ul.nav li {
	border-bottom: 1px solid #666; /* this creates the button separation */
}
ul.nav a, ul.nav a:visited { /* grouping these selectors makes sure that your links retain their button look even after being visited */
	padding: 5px 5px 5px 15px;
	display: block; /* this gives the link block properties causing it to fill the whole LI containing it. This causes the entire area to react to a mouse click. */
	width: 160px;  /*this width makes the entire button clickable for IE6. If you don't need to support IE6, it can be removed. Calculate the proper width by subtracting the padding on this link from the width of your sidebar container. */
	text-decoration: none;
	background: #6D2527;
}
ul.nav a:hover, ul.nav a:active, ul.nav a:focus { /* this changes the background and text color for both mouse and keyboard navigators */
	background: #6D2527;
	color: #000;
}

/* ~~ The footer ~~ */
.footer {
	background: #CCC49F;
	position: relative;/* this gives IE6 hasLayout to properly clear */
	clear: both; /* this clear property forces the .container to understand where the columns end and contain them */
	background-color: #6D2527;
	padding-top: 10px;
	padding-right: 0;
	padding-bottom: 10px;
	padding-left: 0;
	font-family: Georgia, "Times New Roman", Times, serif;
	font-size: 12px;
	color: #FFF;
}

/* ~~ miscellaneous float/clear classes ~~ */
.fltrt {  /* this class can be used to float an element right in your page. The floated element must precede the element it should be next to on the page. */
	float: right;
	margin-left: 8px;
}
.fltlft { /* this class can be used to float an element left in your page. The floated element must precede the element it should be next to on the page. */
	float: left;
	margin-right: 8px;
}
.clearfloat { /* this class can be placed on a <br /> or empty div as the final element following the last floated div (within the #container) if the #footer is removed or taken out of the #container */
	clear:both;
	height:0;
	font-size: 1px;
	line-height: 0px;
}

.topbar {
	height: 30px;
	width: auto;
}

.menubar {
	height:75px;
	width:960px;
	border-right-width: 0px;
	border-left-width: 0px;
	border-right-style: none;
	border-left-style: none;
	border-top-width: 0px;
	border-bottom-width: 0px;
	border-top-style: none;
	border-bottom-style: none;
	background-image:url(images/menubar.png);
}

.sidebar {
	width:180px;
	height:150px;
	float: left;
	background-color: #414141;
}

.background{
	height:150px;
	background-color: #FFF;
}

.menubarlinks{
	height:25px;
	width:960px;
	padding-top: 30px;
	padding-left: 10px;
	padding-right: 10px;
	color: #FFF;
}
a:hover {
	text-decoration: underline;
	color: #900;
}
a:active {
	text-decoration: none;
	color: #F00;
}

.telnumber{
	width:150px;
	height:25px;
	color: #FFF;
}

#buttons{
	width:960px;
	height:33px;
	padding-top: 10px;
}

td.clear {
background-color:transparent;
text-align:center;
color:#FFF;
}
td.aboutuson {
background-color:transparent;
text-align:center;
color:#C36;
text-decoration:underline;
}

#emaillink {
	color:#00C;
}

#emaillink a:hover {
	color:#FFF;
	text-decoration:none;
}
-->
</style><script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-21248926-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script></head>

<body>
<?
	include 'scripts.php';
	
?>
<div class="topbar"><p align="center">Setag Property Management Corporation</p></div>
<div class="background">

<div class="container">
  <div class="header">
    <table width="500" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td><a href="index.php"><img src="images/logo2.png" alt="Insert Logo Here" name="Insert_logo" width="275" height="148" border="0" id="Insert_logo" style="background: #C6D580; display:block; background-color: #FFFFFF;" /></a></td>
        <td><img src="images/homeslide.gif" /></td>
      </tr>
    </table>
  </div>
  <div class="menubar">
  	<div id="buttons"><table width="935" height="33" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td class="clear" onmouseover="className='aboutuson'" onmouseout="className='clear'" width="21"></td>
    <td class="clear" onmouseover="className='aboutuson'" onmouseout="className='clear'" width="157"><a href="index.php">Home</a></td>
    <td class="clear" onmouseover="className='aboutuson'" onmouseout="className='clear'" width="173"><a href="aboutus.php">About Us</a></td>
    <td class="clear" onmouseover="className='aboutuson'" onmouseout="className='clear'" width="167"><a href="properties.php">Properties</a></td>
    <td class="clear" onmouseover="className='aboutuson'" onmouseout="className='clear'" width="168"><a href="info.php">Tenant Info</a></td>
    <td class="clear" onmouseover="className='aboutuson'" onmouseout="className='clear'" width="165"><a href="contactus.php">Contact Us</a></td>
    <td width="84">&nbsp;</td>
  </tr>
</table>
</div>
  </div>
  <!-- InstanceBeginEditable name="mainContent" -->
  <div class="content">
  
  <?  $username = $_SESSION['username'];
  $pass = $_SESSION['password'];
  if($pass <> '' && $username <> ''){
  ?>
  <form id="form1" name="form1" method="post" action="">
    <table width="900" border="0" cellpadding="5" cellspacing="5" id="table2" height="300">
        <tr>
          <td height="30" colspan="5" id="header">Add  Property</td>
          </tr>
        <tr>
          <td width="181" height="30">Address:<br />
            <span id="subtext">(Never shown on the website)</span></td>
          <td height="30"><input name="address" type="text" class="textboxes" id="address" /></td>
          <td>&nbsp;</td>
          <td>Headline :</td>
          <td><input name="shortdescription" type="text" class="textboxes" id="shortdescription"/></td>
        </tr>
        <tr>
    <td width="181"></span>Location:</td>
    <td width="279"><input name="location" type="text" class="textboxes" id="location2" /></td>
    <td width="1">&nbsp;</td>
    <td width="101"><label for="bathrooms"></label>
    Number of Bedrooms:</td>
    <td width="279"><input name="rooms" type="text" class="textboxes" id="rooms" /></td>
        </tr>
  <tr>
    <td colspan="2">Long Property Description :</td>
    <td>&nbsp;</td>
    <td>Number of Bathrooms:</td>
    <td><input name="bathrooms" type="text" class="textboxes"/></td>
  </tr>
  <tr>
    <td colspan="2"><label for="description"></label>
      <textarea name="description" id="description2" cols="45" rows="5"></textarea></td>
    <td rowspan="3">&nbsp;</td>
    <td>Rent:
      <label for="address"></label></td>
    <td><input name="rent" type="text" class="textboxes" id="rent" /></td>
  </tr>
  <tr>
    <td colspan="2">Notes:</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2"><textarea name="notes" cols="45" rows="5"id="description2"></textarea></td>
    <td colspan="2">&nbsp;</td>
  </tr>
      </table>
<br />
        <input type="submit" name="submit" id="submit" value="Submit" />
      </p>
</form>
    
      <? 
  
  if($_POST['submit'] <> ''){
	  if($_POST['description'] <> ''){
		  if($_POST['location'] <>''){
			  if($_POST['shortdescription'] <> ''){
			  insertProp($_POST['shortdescription'],$_POST['address'],$_POST['description'],$_POST['rooms'],$_POST['bathrooms'],$_POST['location'],$_POST['rent'],$_POST['notes']);
			  
			  addEditDate();
			  echo "<br>Property Added to database<br>";
			  }else {echo "Headline cannot be blank";
			  }}else{ echo "Location cannot be blank";}
	  }else{
		  echo "Description cannot be blank"; }
	  

  }
  
  ?>
    
    
    <?
    }else{echo"<BR><BR>Access Denied";}?>
    <a id="emaillink" href="adminpanel.php">Property Panel</a>
  </div>
  <!-- InstanceEndEditable -->
  <div class="footer">
    <p class="footer"><center>
      <p>107 Solley |Winchester, MO 63021 | T: (636)220-7501 |  F: (636)220-8501 | email : <a href="mailto:1setag@gmail.com" id="emaillink">1setag@gmail.com</a><br />© 2011 Setag Property Management Corp. All rights reserved<br /><a href="login.php"><font size="-2">Login</font></a></p></center> 
    <!-- end .footer --></div>
  <!-- end .container --></div>
  </div>

</body>
<!-- InstanceEnd --></html>
