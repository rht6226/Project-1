<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Autour One">
<link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    
 <script>
    function select() {
        var items = document.getElementsById('attend');
        for (var i = 0; i < items.length; i++) {
            if (items[i].type == 'checkbox')
                items[i].checked = true;
        }
    }

    function unselect() {
        var items = document.getElementsById('attend');
        for (var i = 0; i < items.length; i++) {
            if (items[i].type == 'checkbox')
                items[i].checked = false;
        }
    }			
</script>   

    

  
 

<title>Userlogin</title>

<style>
.titleSec {
  background: #00C9FF;
background: -webkit-linear-gradient(to right, #92FE9D, #00C9FF);
background: linear-gradient(to right, #92FE9D, #00C9FF);
height : 26vh;
}
    .navstyle {
         background: #00C9FF;
background: -webkit-linear-gradient(to right, #92FE9D, #00C9FF);
background: linear-gradient(to right, #92FE9D, #00C9FF);
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
    .tableofdata{
margin: 10vh 10% 10vh 10%;
    padding-left:50px;}

    .title{
        margin-top: 50px;
}
    .success{
 background: #00C9FF;
background: -webkit-linear-gradient(to right, #92FE9D, #00C9FF);
background: linear-gradient(to right, #92FE9D, #00C9FF);
color:snow;}
    .ddmenu {
        width:70%;
        height:50px;
        padding: 0.375rem 0.75rem;
        line-height:1rem;
        border:1px solid #ced4da;
        border-radius: 0.25rem;
    }



</style>
</head>
<body>


<nav class="navbar navbar-expand-md navstyle navbar-light fixed-top">
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
    <span><br>MNNIT | Professor <br> </span>
    </div>
          <div class="col-sm-1 col-lg-1 col-md-1">
            <form action="logout.php"><button type="submit" class="btn btn-sm btn-danger">Log out</button></form>
          </div>
  </div>
    
    
    <div class="container title">
       <form action="go.php"  method="post"> 
    <div class="row justify-content-between">
        <div class="col-sm-4">
        
			<?php
               $host = "localhost";
            $username = "root";
            $password = "";
            $database= "id5276922_first";
            $connect = mysqli_connect($host ,$username , $password ,$database);
if (!$connect)	{
die("Could not connect to the Database please check your internet connection");    }
            
						
$subject=array("maths","english","physics","ed","edlab","ecology","physicslab","chemistry","chemistrylab","workshop","workshoplab","commwork","c","clab","englishlab","engmech","engmechlab");

$f=$_SESSION['regno'];
$select = "<select name='select' class='ddmenu'>" ;echo $select;$option = "<option disabled selected value>Select the group</option>";
for($i=0;$i<17;$i++)
{	$g=$subject[$i];
 	$st = mysqli_query($connect,"SELECT Batch FROM class WHERE $g='$f' ");						

    	while($var= mysqli_fetch_array($st))
		{	
			
			$d=$var['Batch'];
			$n="$d $g";
			$up= strtoupper("$n");
			$m="$g"."_"."$d";
    		$option = $option . "<option value=" .$m.">" . $n. "</option>";
		}
		
}
			echo $option;
		$select="</select>";
		echo $select;
            ?>
        </div>
        
        
        <div class="col-sm-4">
            <input class="ddmenu" type="date" name="date">
            <button type="submit" class="btn btn-success btn-lg">Submit</button>
            
            
        </div></div></form></div>
        
<br/>

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





  


   

    <script src="bootstrap/jquery.js"></script>
    <script src="bootstrap-4.0.0/dist/js/bootstrap.bundle.js.map"></script>
    <script src="bootstrap/js.js"></script>

    <script src="bootstrap/js/bootstrap.js"></script>
    <script>

</body>
</html>