<?php
/*
Author name: SRIDHAR K NAYAK
E-mail ID:   sridharsourceus@gmail.com
Date:        15-12-2017
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
    <title>Why US</title>
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



<!-- WRITE MAIN CONTENT HERE -->
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
  <style>
 
  ul.nav-pills {
      top: 20px;
      position: fixed;
  }
 
  </style>

<body data-spy="scroll" data-target="#myScrollspy" data-offset="1">

<div class="container-fluid">
  <div class="row">
       <div class="col-md-10">

<span class="bgtext"> WHY US </span>
      
      <div id="section1" class="bg-default">    
        <br><br><h3>What sets us apart</h3><br>
        <img align="right" src="images/whyus.png" class="img-fluid" id="myImg" height="100px" width="200px" /> <br>
          
          

        <h5> Employee </h5><br>
        
        <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ev  er since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. </p> <br><br>

       

        <center><iframe width="340" height="250" src="https://www.youtube.com/embed/5Aawqth97fs?autoplay=1">
        </iframe></center>

          <br><br>
      </div>
    
  

      <div id="section2" class="bg-default"> 
        <br><br><h3>What sets us apart</h3><br>
         <img align="right" src="images/whyus.png" class="img-fluid" id="myImg" height="100px" width="200px" /> <br>
        <h5> Employer </h5><br>

        <p>  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ev  er since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. </p><br><br>
      


        <center><iframe width="340" height="250" src="https://www.youtube.com/embed/BRlqDsDqQ3Q?autoplay=1">
        </iframe></center>

          <br><br>

      </div>
    
      

     <div id="section3" class="bg-default">         
       <br><br><h3>What sets us apart</h3><br>
         <img align="right" src="images/whyus.png" class="img-fluid" id="myImg" height="100px" width="200px" /> <br>
        <h5> Student</h5><br>

        <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ev  er since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. </p><br><br>
     


        <center><iframe width="340" height="250" src="https://www.youtube.com/embed/h4oWLjHHoDY?autoplay=1">
        </iframe></center>

        <br><br>

      </div>
    
 
      

      <div id="section4" class="bg-default">         
        <br><br><h3>What sets us apart</h3><br>
         <img  align="right" src="images/whyus.png" class="img-fluid" id="myImg" height="100px" width="200px"/> <br>
        <h5> Faculty </h5><br>

        <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ev  er since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. </p><br><br>
     
     

        <center><iframe width="340" height="250" src="https://www.youtube.com/embed/3AnpN4IiAKw?autoplay=1">
        </iframe></center>

        <br><br>

      </div>
    
     
      

      <div id="section5" class="bg-default">         
        <br><br><h3>What sets us apart</h3><br>
         <img  align="right" src="images/whyus.png" class="img-fluid" id="myImg" height="100px" width="200px"/> <br>
        <h5> College </h5><br>

        <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ev  er since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><br><br>
      


        <center><iframe width="340" height="250" src="https://www.youtube.com/embed/yWrQuenntOc?autoplay=1">
        </iframe></center>

          <br><br><br><br><br>
      </div>
    
   
    </div>


    <div class="col-md-2">
      <div class="sridhar-card6 card">
    <nav id="myScrollspy">
      <ul class="nav nav-pills flex-column">
         <li class="nav-item">
          <img src="images\whyus2.png" height="65" width="184px"/> <br>
          <br><a href="#section1" " class="btn btn-warning btn-block" > <font size="4px">Employee</font> </a> </p>
         </li>
         
        <li class="nav-item">
          <a href="#section2"  class="btn btn-warning btn-block"> <font size="4px">Employer</font> </a> </p>
        </li>
        <li class="nav-item">
         <a href="#section3"  class="btn btn-warning btn-block"> <font size="4px">Student</font> </a> </p>
          
        </li>
        <li class="nav-item">
           <a href="#section4"  class="btn btn-warning btn-block"> <font size="4px">Faculty</font> </a> </p>
        </li>
        <li class="nav-item">
            <a href="#section5"  class="btn btn-warning btn-block"> <font size="4px">College</font> </a> </p>
        </li>
      </ul>
    </nav>
    </div>
    </div>
  </div>
</div>

</body>
</html>






<!-- WRITE MAIN CONTENT HERE -->



<!-- NOTE: Please keep your code clean + readable and add comments -->










<!-- MAIN CONTENT ENDS -->
  </div>
</div>
<?php include_once("script.php"); ?>
</body>
</html>
