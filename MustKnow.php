<?php
/*
Author name: Nadeem
E-mail ID:   nadeem566sourceus@gmail.com
Date:        15/12/17
*/
/////////////////////////////////////////////////////////
//include_once("variables.php");
//include_once("checkLoginStatus.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Must Know</title>
    <?php include_once("stylesAndFont.php"); ?>
</head>
<body>
  	<!-- Left bar starts -->
     <div class="left-bar">
      <div class="image1">
        <img src="images/dcentmass_png.png" class="img-responsive">
      </div>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">DCent MASS</a></li>
        <li><a href="#">Our Services</a></li>
        <li><a href="#" class="activeLink">Student Hub</a></li>
        <li><a href="#">Courses</a></li>
        <li><a href="#">Events</a></li>
        <li><a href="#">Media</a></li>
        <li><a href="#">Forum</a></li>
        <li><a href="#">Contact Us</a></li>
        <li style="border-bottom:  2px solid #06f;"><a href="#">FAQs</a></li>
      </ul>
     </div>
     <!-- Left bar ends -->
<!-- Mobile bar starts here -->

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">DCent MASS</a></li>
        <li><a href="#">Our Services</a></li>
        <li><a href="#">Student Hub</a></li>
        <li><a href="#">Courses</a></li>
        <li><a href="#">Events</a></li>
        <li><a href="#">Media</a></li>
        <li><a href="#">Forum</a></li>
        <li><a href="#">Contact Us</a></li>
        <li style="border-bottom:  2px solid #06f;"><a href="#">FAQs</a></li>
</div>

<span id="openNavID" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
<!-- Mobile bar ends here -->
     <!-- Right bar starts -->
     <div class="right-bars">
     	<div class="righ-col-1">
       <a href="#"><div class="rightMenuBlocks"><span class="linkText">Carrer Path</span></div></a>
       <a href="#"><div class="rightMenuBlocks activeLink"><span class="linkText">Must Know</span></div></a>
       <a href="#"><div class="rightMenuBlocks"><span class="linkText">Projects</span></div></a>
       <a href="#"><div class="rightMenuBlocks"><span class="linkText">Upcoming Technologies</span></div></a>
       <a href="#"><div class="rightMenuBlocks"><span class="linkText">Market Trend</span></div></a>
       <a href="#"><div class="rightMenuBlocks"><span class="linkText">Alumni</span></div></a>
       <a href="#"><div class="rightMenuBlocks"><span class="linkText"></span></div></a>
       <a href="#"><div class="rightMenuBlocks"><span class="linkText"></span></div></a>
     	</div>
     	<div class="righ-col-2">
       <a href="#"><div class="rightMenuBlocks"><span class="linkText"></span></div></a>
        <a href="#"><div class="rightMenuBlocks"><span class="linkText"></span></div></a>
        <a href="#"><div class="rightMenuBlocks"><span class="linkText"></span></div></a>
        <a href="#"><div class="rightMenuBlocks"><span class="linkText"></span></div></a>
        <a href="#"><div class="rightMenuBlocks"><span class="linkText"></span></div></a>
        <a href="#"><div class="rightMenuBlocks"><span class="linkText"></span></div></a>
        <a href="#"><div class="rightMenuBlocks"><span class="linkText"></span></div></a>
        <a href="#"><div class="rightMenuBlocks"><span class="linkText"></span></div></a>
     	</div>
     </div>
     
<div class="mainContainer" id="mainContainer">  <!-- DO NOT REMOVE THIS -->
	<div class="container-fluid">
<!-- MAIN CONTENT STARTS -->


<!-- WRITE MAIN CONTENT HERE -->
<div class="container-fluid">
<div class="col-md-12">
<img src="images/i2.png" alt="" class="img2 img-responsive pull-right">
<h2>Must Know</h2>
</div>


<div class="row">
<div class="col-md-3">
<ul>
<button class="btn btn-success btnpad" type="submit">Interview Skills</button><br />
<button class="btn btn-success btnpad" type="submit">Aptitude</button><br />
<button class="btn btn-success btnpad" type="submit">Technical Education</button><br />
<button class="btn btn-success btnpad" type="submit">Resume Preperation</button><br />
<button class="btn btn-success btnpad" type="submit">Soft Skills</button><br />
</ul>
</div>
<div class="col-md-9">
  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequuntur, aspernatur? Reprehenderit, facere animi voluptas eligendi, corporis rem quaerat dignissimos perspiciatis nemo dolore incidunt eum velit, perferendis sit nihil temporibus. Velit?
Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel maxime quidem enim delectus labore similique at, obcaecati soluta tempora facilis, eum vitae? Sint eligendi cumque doloribus! Atque excepturi libero eaque!
Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit optio delectus quidem veniam, ad excepturi incidunt, nisi non harum ut cumque ipsa, eum tempore et vitae doloremque? Aut, quia. Quas!
</div>
</div>





         
<!-- MAIN CONTENT ENDS -->
	</div>
</div>



<?php include_once("script.php"); ?>
</body>
</html>
