<?php
/*
Author name: <Your name>;
E-mail ID:   <Your E-mail ID>
Date:        <dd-mm-yyyy>
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
    <title>Title</title>
    <?php include_once("stylesAndFont.php"); ?>
</head>
<body>
  	<!-- Left bar starts -->
     <div class="left-bar">
      <div class="image1">
        <img src="images/dcentmass_png.png" class="img-fluid">
      </div>
      <ul>
        <!-- User class="activeLink" to make links active -->
        <li class="activeLink"><a href="#"><i class="material-icons">home</i><span class="menuText">Home</span></a></li>
        <li><a href="#"><i class="material-icons">language</i><span class="menuText">DCent MASS</span></a></li>
        <li><a href="#"><i class="material-icons">settings_applications</i><span class="menuText">Our Services</span></a></li>
        <li><a href="#"><i class="material-icons">group_work</i><span class="menuText">Student Hub</span></a></li>
        <li><a href="#"><i class="material-icons">library_books</i><span class="menuText">Courses</span></a></li>
        <li><a href="#"><i class="material-icons">event</i><span class="menuText">Events</span></a></li>
        <li><a href="#"><i class="material-icons">perm_media</i><span class="menuText">Media</span></a></li>
        <!-- <li><a href="#">Forum</a></li> -->
        <li><a href="#"><i class="material-icons">contacts</i><span class="menuText">Contact Us</span></a></li>
        <!-- <li style="border-bottom:  2px solid #06f;"><a href="#"></a></li> -->
        <!-- <li style="border-bottom: 2px solid #06f;"><a href="#">FAQs</a></li> -->
      </ul>
     </div>
     <!-- Left bar ends -->
<!-- Mobile bar starts here -->

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <ul> <!-- User class="activeLink" to make links active -->
        <li><a href="#">Home</a></li>
        <li><a href="#">DCent MASS</a></li>
        <li><a href="#">Our Services</a></li>
        <li><a href="#">Student Hub</a></li>
        <li><a href="#">Courses</a></li>
        <li><a href="#">Events</a></li>
        <li><a href="#">Media</a></li>
        <!-- <li><a href="#">Forum</a></li> -->
        <li style="border-bottom:  2px solid #06f;"><a href="#">Contact Us</a></li>
        <!-- <li style="border-bottom:  2px solid #06f;"><a href="#">FAQs</a></li> -->
  </ul>
</div>

<span id="openNavID" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
<!-- Mobile bar ends here -->
     <!-- Right bar starts -->
     <div class="right-bars">
     	<div class="righ-col-1"> <!-- User class="activeLink" to make links active -->
        <a href="#"><div class="rightMenuBlocks"><span class="linkText">Text 1</span></div></a>
        <a href="#"><div class="rightMenuBlocks"><span class="linkText">Text 2</span></div></a>
        <a href="#"><div class="rightMenuBlocks"><span class="linkText">Text 3</span></div></a>
        <a href="#"><div class="rightMenuBlocks"><span class="linkText">Text 4</span></div></a>
        <a href="#"><div class="rightMenuBlocks"><span class="linkText">Text 5</span></div></a>
        <a href="#"><div class="rightMenuBlocks"><span class="linkText">Text 6</span></div></a>
        <a href="#"><div class="rightMenuBlocks"><span class="linkText">Text 7</span></div></a>
        <a href="#"><div class="rightMenuBlocks"><span class="linkText">Text 8</span></div></a>
         
      </div>
     	<div class="righ-col-2"> <!-- User class="activeLink" to make links active -->
        <a href="#"><div class="rightMenuBlocks"><span class="linkText">Text 9</span></div></a>
        <a href="#"><div class="rightMenuBlocks"><span class="linkText">Text 10</span></div></a>
        <a href="#"><div class="rightMenuBlocks"><span class="linkText">Text 11</span></div></a>
        <a href="#"><div class="rightMenuBlocks"><span class="linkText">Text 12</span></div></a>
        <a href="#"><div class="rightMenuBlocks"><span class="linkText">Text 13</span></div></a>
        <a href="#"><div class="rightMenuBlocks"><span class="linkText">Text 14</span></div></a>
        <a href="#"><div class="rightMenuBlocks"><span class="linkText">Text 15</span></div></a>
        <a href="#"><div class="rightMenuBlocks"><span class="linkText">Text 16</span></div></a>
     	</div>
     </div>
     
<div class="mainContainer" id="mainContainer">  <!-- DO NOT REMOVE THIS -->
	<div class="container-fluid">
<!-- MAIN CONTENT STARTS -->
<br><br><br>
<div class="row">
  <div class="col-md-12"><center><h1>OUR VIDEOS</h1></div></center>
</div>
 <br>                       
<div class="row">

  <div class="col-md-4">
        <a href="#Modal1" role="button" data-toggle="modal"><img src="images/sumaiya_images/1.jpeg" height="100px" width="170px"></a><span>Lorem Ipsum</span><br><br>
        <a href="#Modal2" role="button" data-toggle="modal"><img src="images/sumaiya_images/2.jpeg" height="100px" width="170px"></a><span>Lorem Ipsum</span><br><br>
        <a href="#Modal3" role="button" data-toggle="modal"><img src="images/sumaiya_images/3.jpeg" height="100px" width="170px"></a><span>Lorem Ipsum</span><br><br>
        <a href="#Modal4" role="button" data-toggle="modal"><img src="images/sumaiya_images/4.jpeg" height="100px" width="170px"></a><span>Lorem Ipsum</span><br><br>
  </div>
  <div class="col-md-4">
        <a href="#Modal5" role="button" data-toggle="modal"><img src="images/sumaiya_images/5.jpeg" height="100px" width="170px"></a><span>Lorem Ipsum</span><br><br> 
        <a href="#Modal6" role="button" data-toggle="modal"><img src="images/sumaiya_images/6.jpeg" height="100px" width="170px"></a><span>Lorem Ipsum</span><br><br>
        <a href="#Modal7" role="button" data-toggle="modal"><img src="images/sumaiya_images/7.jpeg" height="100px" width="170px"></a><span>Lorem Ipsum</span><br><br>
        <a href="#Modal8" role="button" data-toggle="modal"><img src="images/sumaiya_images/8.jpeg" height="100px" width="170px"></a><span>Lorem Ipsum</span><br><br>
  </div>
  <div class="col-md-4">
        <a href="#Modal9" role="button" data-toggle="modal"><img src="images/sumaiya_images/5.jpeg" height="100px" width="170px"></a><span>Lorem Ipsum</span><br><br> 
        <a href="#Modal10" role="button" data-toggle="modal"><img src="images/sumaiya_images/6.jpeg" height="100px" width="170px"></a><span>Lorem Ipsum</span><br><br>
        <a href="#Modal11" role="button" data-toggle="modal"><img src="images/sumaiya_images/7.jpeg" height="100px" width="170px"></a><span>Lorem Ipsum</span><br><br>
        <a href="#Modal12" role="button" data-toggle="modal"><img src="images/sumaiya_images/8.jpeg" height="100px" width="170px"></a><span>Lorem Ipsum</span><br><br>
  </div>
</div>





<div class="modal fade" id="Modal1" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-body">
        <h3>Modal Body</h3>
        <iframe width="100%" height="400px" src="https://www.youtube.com/embed/VreG1iC65Lc" frameborder="0" allowfullscreen></iframe><br>  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> 
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="Modal2" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-body">
        <h3>Modal Body</h3>
        <iframe width="100%" height="400px" src="https://www.youtube.com/embed/0z6E_1KonbA" frameborder="0" allowfullscreen></iframe><br>  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> 
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="Modal3" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-body">
        <h3>Modal Body</h3>
        <iframe width="100%" height="400px" src="https://www.youtube.com/embed/VreG1iC65Lc" frameborder="0" allowfullscreen></iframe><br>  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> 
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="Modal4" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-body">
        <h3>Modal Body</h3>
        <iframe width="100%" height="400px" src="https://www.youtube.com/embed/VreG1iC65Lc" frameborder="0" allowfullscreen></iframe><br>  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> 
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="Modal5" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-body">
        <h3>Modal Body</h3>
        <iframe width="100%" height="400px" src="https://www.youtube.com/embed/VreG1iC65Lc" frameborder="0" allowfullscreen></iframe><br>  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> 
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="Modal6" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-body">
        <h3>Modal Body</h3>
        <iframe width="100%" height="400px" src="https://www.youtube.com/embed/VreG1iC65Lc" frameborder="0" allowfullscreen></iframe><br>  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> 
      </div>
    </div>
  </div>
</div>




<div class="modal fade" id="Modal7" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-body">
        <h3>Modal Body</h3>
        <iframe width="100%" height="400px" src="https://www.youtube.com/embed/VreG1iC65Lc" frameborder="0" allowfullscreen></iframe><br>  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> 
      </div>
    </div>
  </div>
</div>



<div class="modal fade" id="Modal8" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-body">
        <h3>Modal Body</h3>
        <iframe width="100%" height="400px" src="https://www.youtube.com/embed/VreG1iC65Lc" frameborder="0" allowfullscreen></iframe><br>  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> 
      </div>
    </div>
  </div>
</div>



<div class="modal fade" id="Modal9" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-body">
        <h3>Modal Body</h3>
        <iframe width="100%" height="400px" src="https://www.youtube.com/embed/VreG1iC65Lc" frameborder="0" allowfullscreen></iframe><br>  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> 
      </div>
    </div>
  </div>
</div>



<div class="modal fade" id="Modal10" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-body">
        <h3>Modal Body</h3>
        <iframe width="100%" height="400px" src="https://www.youtube.com/embed/VreG1iC65Lc" frameborder="0" allowfullscreen></iframe><br>  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> 
      </div>
    </div>
  </div>
</div>



<div class="modal fade" id="Modal11" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-body">
        <h3>Modal Body</h3>
        <iframe width="100%" height="400px" src="https://www.youtube.com/embed/VreG1iC65Lc" frameborder="0" allowfullscreen></iframe><br>  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> 
      </div>
    </div>
  </div>
</div>



<div class="modal fade" id="Modal12" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-body">
        <h3>Modal Body</h3>
        <iframe width="100%" height="400px" src="https://www.youtube.com/embed/VreG1iC65Lc" frameborder="0" allowfullscreen></iframe><br>  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> 
      </div>
    </div>
  </div>
</div>







<!-- WRITE MAIN CONTENT HERE -->



<!-- NOTE: Please keep your code clean + readable and add comments -->










<!-- MAIN CONTENT ENDS -->
	</div>
</div>
<?php include_once("script.php"); ?>
</body>
</html>
