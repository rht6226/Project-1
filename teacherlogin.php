

<!DOCTYPE html>
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
margin:70px auto 40px 0px;
    padding: 10%;}

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
    <h1 class="h1 display-5">Username</h1>
    <span><br>Department | Post <br> </span>
    </div>
          <div class="col-sm-1 col-lg-1 col-md-1">
            <button type="button" class="btn btn-sm btn-danger">Log out</button>
          </div>
  </div>
    
    
    <div class="container title">
        <form>
    <div class="row justify-content-between">
        <div class="col-sm-4">
            <?php
               $host = "localhost";
            $username = "root";
            $password = "";
            $database= "login";
            $connect = mysqli_connect($host ,$username , $password ,$database);
if (!$connect)	{
die("could not connect to the databse");    }
            
$st = mysqli_query($connect,"SELECT * FROM users ");
            if(mysqli_num_rows($st))    {
                $select = "<select name='select' class='ddmenu'>" ;
    while($var= mysqli_fetch_array($st))   {
          $select = $select . "<option value=" . $var['name'].">" . 
              $var['name']. "</option>";
                    }
                $select.="</select>";
                echo $select;
            }
            
             
            ?>
        </div>
        
        
        <div class="col-sm-4">
        
            <input class="ddmenu" type="date">
            <button type="submit" class="btn btn-success btn-lg">Submit</button>
            
            
        </div></div></form></div>
        
        
        <div class="container tableofdata">
            
            
<?php
            
$host = "localhost";
$username = "root";
$password = "";
$database= "login";
$connect = mysqli_connect($host ,$username , $password , $database);
if (!$connect)	{
die("could not connect to the databse");    }

$result = mysqli_query($connect , "SELECT * FROM users");

echo  " <div class='container'>
        <table class='table'>
        <thead>
        <tr class='success'>
        <th>S. No. </th>
        <th>Name</th>
        <th>Registration Number</th>
        <th>Branch</th>
        <th>Present</th>
        </tr>
        </thead>
        <tbody>";
            
            
$serial = 1;
while($var= mysqli_fetch_array($result)) {
    echo "<tr><td>" 
        . $serial . 
        "</td><td>" 
        . $var['name'] .
        "</td><td>" 
        . $var['reg'] .
        "</td><td>" 
        . $var['password'] .
        "</td><td>" 
        ."<form><input type='checkbox' checked style='width:25px; height:25px;'>". 
        "</td>" ;
        
        $serial = $serial +1;
                                            }
        
            
        echo"</form>
            </tbody>
             </table>
             <button type='submit' class='btn btn-long btn-success' action=''>Submit Attendence</submit>";

                                ?>
    </div>


<div class="container content">
  <div class="row" >

</div>

</div>
</div>
    
<div class="container">
    
    </div>

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
