<?php session_start();?><!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Autour One">
<link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

<title>Userlogin</title>

<style>
.titleSec {
  background: #00C9FF;
background: -webkit-linear-gradient(to right, #92FE9D, #00C9FF);
background: linear-gradient(to right, #92FE9D, #00C9FF);
height : 26vh;
}
.profilePic  {
  height:100px;
  width:100px;
}
.navs  {
  padding-top:8vh;
}
.navtitle  {
  font-size: 20px;
}
.content{
  padding-top:10vh;
}
    .navstyl    {
        background: #00C9FF;
background: -webkit-linear-gradient(to right, #92FE9D, #00C9FF);
background: linear-gradient(to right, #92FE9D, #00C9FF);
}

</style>
</head>
<body>


<nav class="navbar navbar-expand-md navstyl navbar-light fixed-top">
  <a class="navbar-brand" href="#">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">

      <li class="nav-item">
        <a class="nav-link" href="#">MNNIT</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Academics</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Admissions</a>
      </li>
    </ul>
  </div>
</nav>

<div class="jumbotron titleSec">


    <div class="row justify-content-around">
    <div class="col-sm-2">
        <img src="images.png" class="img-thumbnail img-fluid profilePic"></div>
      
    <div class="col-lg-4 col-sm-4 cl-md-4">
    <?php 
    echo "<h3 class='h3 display-5'>".$_SESSION["name"]."</h3>";
	?>
    <span><br>MNNIT | Student <br> </span>
    </div>
          
          <div class="col-sm-1 col-lg-1 col-md-1">
            <button type="button" class="btn btn-sm btn-danger" onclick="<? echo logout(); ?>">Log out</button>
              
              
              
              
      </div>
  </div>
    
  </div>
    
   
<div class="container navs">
  <ul class="nav nav-tabs">
    <li class="nav-item">
      <button class="nav-link" onclick="toggle()" >Attendence</button>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Profile</a>
    </li>
    
  </ul>
</div>

    
    <div id="table"> 
                <div class="container tableofdata">
            
            
<?php #connection to database established
               $host = "localhost";
            $username = "root";
            $password = "";
            $database= "id5276922_first";
            $connect = mysqli_connect($host ,$username , $password ,$database);
if (!$connect)	{
die("Could not connect to the Database please check your internet connection");    }
            
						
$subject=array("maths","english","physics","ed","edlab","ecology","physicslab","chemistry","chemistrylab","workshop","workshoplab","commwork","c","clab","englishlab","engmech","engmechlab");

$st=mysqli_query($connect,"SELECT column_name FROM INFORMATION_SCHEMA.COLUMNS WHERE table_name=maths_a1");
$n=$_SESSION["batch"];
$m=$_SESSION["regno"];
$ru=mysqli_query($connect,"SELECT * FROM maths_$n WHERE id=$m");
echo "MATHS <br>";
echo  " <div class='container'>
        <table class='table'>";
$serial = 1;
while($var= mysqli_fetch_array($st) AND $va=mysqli_fetch_array($ru) ) {
	
    echo "<tr><td>" 
        . $serial . 
        "</td><td>" 
        . $var .
        "</td><td>" 
        . $va .
        "</td>";
        
        $serial = $serial +1;
                                            }
echo "</table>"

?>
    </div>
            
    </div>
 

    <script> //toggling the display of content via javascript
        function toggle() {
    
    if (document.getElementById("table").style.display === "none") {
        document.getElementById("table").style.display = "block";
    } else {
        document.getElementById("table").style.display = "none";
    }
}
    </script>




<div id="not-table">

<footer class="page-footer font-small mdb-color lighten-3 pt-4 mt-4 bgc">


    <div class="container text-center text-md-left">
        <div class="row my-4">


            <div class="col-md-4 col-lg-3">
                <h5 class="text-uppercase mb-4 font-weight-bold">Footer Content</h5>
                <p>Here you can use rows and columns here to organize your footer content.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet numquam iure provident
                    voluptate esse quasi, veritatis totam voluptas nostrum. </p>
            </div>


            <hr class="clearfix w-100 d-md-none">


            <div class="col-md-2 col-lg-2 ml-auto">
                <h5 class="text-uppercase mb-4 font-weight-bold">About</h5>
                <ul class="list-unstyled">
                    <p>
                        <a href="#!">PROJECTS</a>
                    </p>
                    <p>
                        <a href="#!">ABOUT US</a>
                    </p>
                    <p>
                        <a href="#!">BLOG</a>
                    </p>
                    <p>
                        <a href="#!">AWARDS</a>
                    </p>
                </ul>
            </div>


            <hr class="clearfix w-100 d-md-none">


            <div class="col-md-4 col-lg-3">
                <h5 class="text-uppercase mb-4 font-weight-bold">Address</h5>

                <p>
                    <i class="fa fa-home mr-3"></i> MNNIT Campus,Allahabad,UP,India</p>
                <p>
                    <i class="fa fa-envelope mr-3"></i>mnnit@mnnit.ac.in</p>
                <p>
                    <i class="fa fa-phone mr-3"></i> +91 9031033363</p>
                <p>
                    <i class="fa fa-print mr-3"></i> +91 7753937765</p>
            </div>


            <hr class="clearfix w-100 d-md-none">


            <div class="col-md-2 col-lg-2 text-center">
                <h5 class="text-uppercase mb-4 font-weight-bold">Follow Us</h5>

                <div class="mt-2">

                    <a type="button" class="btn-floating btn-small btn-fb ">
                        <i class="fa fa-facebook"></i>
                    </a>

                    <a type="button" class="btn-floating btn-small btn-tw">
                        <i class="fa fa-twitter"></i>
                    </a>

                    <a type="button" class="btn-floating btn-small btn-gplus">
                        <i class="fa fa-google-plus"></i>
                    </a>

                    <a type="button" class="btn-floating btn-small btn-dribbble">
                        <i class="fa fa-dribbble"></i>
                    </a>
                </div>
            </div>


        </div>
    </div>
    <!--/.Footer Links-->

    <!--Copyright-->
    <div class="footer-copyright py-3 text-center" style="background-color">
        © 2018 Copyright:
        <a href="#"> Legion Initiative</a>
    </div>
    <!--/.Copyright-->

</footer>
</div>






    


  

    <script src="bootstrap/jquery.js"></script>
    <script src="bootstrap-4.0.0/dist/js/bootstrap.bundle.js.map"></script><!--CDN-->
    <script src="bootstrap/js.js"></script>

    <script src="bootstrap/js/bootstrap.js"></script>
    

</body>
</html>
