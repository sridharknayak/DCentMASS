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
<<<<<<< HEAD
        <li><a href="#">Forum</a></li>
        <li><a href="#">Contact Us</a></li>
        <li style="border-bottom:  2px solid #06f;"><a href="#">FAQs</a></li>
      </ul>
=======
        <!-- <li><a href="#">Forum</a></li> -->
        <li style="border-bottom:  2px solid #06f;"><a href="#">Contact Us</a></li>
        <!-- <li style="border-bottom:  2px solid #06f;"><a href="#">FAQs</a></li> -->
  </ul>
>>>>>>> c14db1cdb1fbe6cdefc7101d6824dd25e02bc8a2
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
<<<<<<< HEAD
 
 <div class="row">
        <div class="col-md-8">
            <div class="pageheading">
                Hunt Your Dream Job
            </div>
            <div class="sideheading">
              Be FIRST, Apply FIRST, Get hired NOW  
            </div>
            <div class="image">
                <img src="images/seeker3.jpg" class="img-responsive">
            </div>
                   <!-- Drop down button -->
                    
                        <!-- Example single danger button -->
                       <div class="coosejob">
                       <div class="btn-group">
                         <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                   Available Jobs
                         </button>
                         <div class="dropdown-menu">
                           <a class="dropdown-item" href="#">Web Designer</a></br>
                           <a class="dropdown-item" href="#">Android Developer</a>
                           <a class="dropdown-item" href="#">Networking </a>
                           <div class="dropdown-divider"></div>
                           <a class="dropdown-item" href="#">Testing</a>
                         </div>
                       </div>
                   </div>

             <div class="choosefile">
                <a href="#" class="btn btn-primary btn-md active" role="button" aria-pressed="true">Upload your Resume</a> 
            </div>     
             <div class="choosefile">
                <a href="#" class="btn btn-primary btn-md active" role="button" aria-pressed="true"> Upload your Photo </a> </div>
                <div class="choosefile">
                      <a href="#" class="btn btn-primary btn-md active" role="button" aria-pressed="true">Submit</a>   
                    
                </div>


              
                  <!-- Drop down button ends-->



         </div>
        <div class="col-md-4">
            <div class="righttext">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

              
            </div>
            
        </div>
    </div>



   
    <div class="row">
        <div class="col-md-12">
            <div class="Partners">
                Our partners
            </div>    
                <div id="Carousel" class="carousel slide">
                    <div class="slider">
                 
                <ol class="carousel-indicators">
                    <li data-target="#Carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#Carousel" data-slide-to="1"></li>
                    <li data-target="#Carousel" data-slide-to="2"></li>
                </ol>
                 
                <!-- Carousel items -->
                
                <div class="carousel-inner">
                    
                <div class="item active">
                    <div class="row">

                      <div class="col-md-3"><a href="#" class="thumbnail"><img src="images/Logo1.jpg" class="img-responsive"></a></div>
                      <div class="col-md-3"><a href="#" class="thumbnail"><img src="images/logo2.jpg" class="img-responsive"></a></div>
                      <div class="col-md-3"><a href="#" class="thumbnail"><img src="images/logo3.jpg" class="img-responsive"></a></div>
                      <div class="col-md-3"><a href="#" class="thumbnail"><img src="images/logo5.jpg" class="img-responsive"></a></div>
                    </div><!--.row-->
                </div><!--.item-->
                 
                <div class="item">
                    <div class="row">
                    <div class="col-md-3"><a href="#" class="thumbnail"><img src="images/logo6.jpg" class="img-responsive"></a></div>
                    <div class="col-md-3"><a href="#" class="thumbnail"><img src="images/logo7.jpg" class="img-responsive"></a></div>
                    <div class="col-md-3"><a href="#" class="thumbnail"><img src="images/logo8.jpg" class="img-responsive"></a></div>
                    <div class="col-md-3"><a href="#" class="thumbnail"><img src="images/Logo1.jpg" class="img-responsive"></a></div>
                    </div><!--.row-->
                </div><!--.item-->
                 
                <!--.item-->
                 
                </div><!--.carousel-inner-->
                  <a data-slide="prev" href="#Carousel" class="left carousel-control">‹</a>
                  <a data-slide="next" href="#Carousel" class="right carousel-control">›</a>
                </div>
            </div><!--.Carousel-->
            </div>
                 
        </div>


<!-- ======================================================================================================= -->


=======
<span class="bgtext"> Background Text </span>
>>>>>>> c14db1cdb1fbe6cdefc7101d6824dd25e02bc8a2

<!-- WRITE MAIN CONTENT HERE -->

         
<!-- MAIN CONTENT ENDS -->
  </div>
</div>






<!-- WRITE MAIN CONTENT HERE -->



<!-- NOTE: Please keep your code clean + readable and add comments -->










<!-- MAIN CONTENT ENDS -->
	</div>
</div>
<?php include_once("script.php"); ?>
<?php include_once("script.php"); ?>


</body>
</html>
