<?php #login via checking each and every row in the table
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST")
{
$host='localhost';
$user='root';
$pass='';
$db='id5276922_first';
#connect to database
$conn=mysqli_connect($host, $user, $pass, $db) or die("Didn't Connect to the server. Please check your connection! If problem persists please try after sometime");

$pas=mysqli_real_escape_string($conn,$_POST["pass"]);
$email=mysqli_real_escape_string($conn,$_POST["email"]);
$a="0";
$sql = "SELECT * FROM teacher";
$sqli="SELECT * FROM student";
$result = mysqli_query($conn,$sql);
$resultt=mysqli_query($conn,$sqli);
while($row=mysqli_fetch_array($result))
{	
    if($email==$row['email'] and $pas==$row['pass'])
    {   
		$_SESSION["regno"]=$row['regno'];
        $_SESSION["batch"]=$row['batch'];
	 	$_SESSION["name"]=$row['name'];
        header("Location: teacherlogin.php");
        $a="1";
        break;
    }
}
    
	if($a=="0")
	{	
		while($row=mysqli_fetch_array($resultt))
		{if($email==$row['email'] and $pas==$row['pass'])
		$_SESSION["regno"]=$row['regno'];
		$_SESSION["name"]=$row['name'];
        header("Location: studentlogin.php");
        $a="1";
        break;}
	}
    
    {echo "<script>alert('The email ID and Password entered does not match')</script>";}#if login fails
	
}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Autour One"><!--CDN-->
<link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

<style>

body, html {
    height: 100%;
    margin: 0;
}

.hero-image {
	background: #00C9FF;
background: -webkit-linear-gradient(to right, #92FE9D, #00C9FF);
background: linear-gradient(to right, #92FE9D, #00C9FF);

 height: 70vh;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;

}

.hero-text {
  text-align: center;
  position: absolute;
  top: 56%;
  left: 50%;
  transform: translate(-50%, -50%);
  color:#000;
}

.hero-text button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 10px 25px;
  color: black;
  background-color: #ddd;
  text-align: center;
  cursor: pointer;
}

.hero-text button:hover {
  background-color: #555;
  color: white;
}
    .navbg  {
        background: #00C9FF;
background: -webkit-linear-gradient(to right, #92FE9D, #00C9FF);
background: linear-gradient(to right, #92FE9D, #00C9FF);
    }



</style>
<title>MNNIT Register</title>
</head>
<body>

<div class="hero-image row">
<nav class="navbar navbar-expand-md navbg  navbar-light fixed-top"> <!--bootstrap classes for navigation bar--> 
  <a class="navbar-brand" href="index.php">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">

      <li class="nav-item">
        <a class="nav-link" href="http://mnnit.ac.in">MNNIT</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://academics.mnnit.ac.in">Academics</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="aboutus.html">About us</a>
      </li>
    </ul>
  </div>
</nav>

  <div class="hero-text col-sm">
    <h1 style=" font-size:70px;font-family:'Palatino Linotype', 'Book Antiqua', Palatino, serif" >The MNNIT Register</h1>
    <br/>
    <button type="button" class="btn" data-toggle="modal" data-target="#login" >Get started</button></div>
</div>

  <div class="modal fade" id="login">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">


        <div class="modal-header">
          <h4 class="modal-title">Log in</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>


        <div class="modal-body">

           <form  action="" method="post"> <!--data submission via POST method-->
  <div id="body1" class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" name="email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" placeholder="Password" name="pass">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="rem">
    <label class="form-check-label" for="rem">Remember me</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>






        <div class="modal-footer">
        <p>Don't have an account <a href="signupnow.php">Sign up here</a></p><!--hyperlink to the sign up page-->

          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>

      </div>
    </div>
  </div>
  </div>

  
 

  <div class="container-fluid">
   <div class="row">
    <div class="col-sm-2">
  <img src="images.png" style="float:left"></div><div class="col-sm-10">
  <br/>
  <br><br><br><br><br><br>
 <h3> Track Your Attendance</h3> <!--intro-->
 <br/>
 <p>>>Now simplify the tedious task of keeping attendance.</p>
 <p>>>Manage attendance of your classes/groups with just a click away.Tracking is entirely web based so you can enter data from anywhere you can access the internet!</p><p>>>You will have a variety of reports at your fingertips. You can view and print in depth reports by student or class and export them to Excel or download and share via PDF.</p>
  </div>
 </div>

<div class="row" style="padding:7%; background-color:#9C9; color:#FFF; font-family:'Times New Roman', Times, serif ">
    <h1 class="text-center col-sm">Quote of the day: You can always keep fighting...</h1>
</div>
<div>

<footer class="page-footer font-small mdb-color lighten-3 pt-4 mt-4">


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
        <a href="aboutus.php"> Legion Initiative</a>
    </div>
    <!--/.Copyright-->

</footer>
</div>
</div>




<script src="bootstrap/jquery.js"></script>
<script src="bootstrap-4.0.0/dist/js/bootstrap.bundle.js.map"></script>
<script src="bootstrap/js.js"></script>

<script src="bootstrap/js/bootstrap.js"></script>



</body>
</html>