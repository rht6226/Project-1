<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Autour One">
<link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

<title>Sign up</title>

<style>
.titleSec {
  background: #00C9FF;
background: -webkit-linear-gradient(to right, #92FE9D, #00C9FF);
background: linear-gradient(to right, #92FE9D, #00C9FF);
height : 40vh;
}
    .navd{
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
    .pad{
        padding:20px;
        margin-top: 15px;
    }
    .head{
        text-align: center;
        color:snow;
    }
    .select{
        width:50%;
        padding: 0.375rem 0.75rem;
        line-height:1rem;
        border:1px solid #ced4da;
        border-radius: 0.25rem;
    }
</style>
</head>
<body>


<nav class="navbar navbar-expand-md  navbar-light navd fixed-top">
  <a class="navbar-brand" href="#">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">

      <li class="nav-item">
        <a class="nav-link" href="mnnit.ac.in">MNNIT</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://www.academics.mnnit.ac.in/new">Academics</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Admissions</a>
      </li>
    </ul>
  </div>
</nav>

<div class="jumbotron titleSec">

   <h1 class="head">What are you?</h1>
    <h3 class="head">Sign up as : </h3>
   <div class="row  justify-content-around pad">
    <div class="col-sm-1 col-md-1">
       <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#signupt">Teacher</button>
  </div>
       
       <div class="col-sm-1 col-md-1">
       <button class="btn btn-danger btn-lg" data-toggle="modal" data-target="#signups"  >Student</button>
  </div>
</div>

</div>
    
<div class="container-fluid">


  <div class="modal fade" id="signupt">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">


        <div class="modal-header">
          <h4 class="modal-title">Sign up</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>


        <div class="modal-body">


  <form  action="teachernew.php" method="post">				<!--teacher sign up-->
   <div class="form-group">
    <label for="name">Name</label>
    <input type="name" class="form-control" id="name" placeholder="Enter name" name="name" required>
 </div>
  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" placeholder="Password" name="pass" required>
  </div>
  <div class="form-group">
      <label for="name">Your Unique Id</label>
    <input type="name" class="form-control" id="name"  placeholder="Enter Id" name="regno" required>
 </div>
      <div class="form-group">
    <label for="name">Root Password</label>
    <input type="name" class="form-control" id="name" placeholder="Enter name" name="root" required>
 </div>
      
<div>
      <?php
    include "choice.php";
    ?>
</div>
      
  
<div class="modal-footer">

          <button type="submit" class="btn btn-primary" >Submit</button>
        </div>

</form>


</div>


      </div>
    </div>
  </div>
 </div>
    
    
    
    
    
<div class="container-fluid">


  <div class="modal fade" id="signups">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">


        <div class="modal-header">
          <h4 class="modal-title">Sign up</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>


        <div class="modal-body">


  <form  action="studentnew.php" method="post">						<!--Student sign up-->
   <div class="form-group">
    <label for="name">Name</label>
    <input type="name" class="form-control" id="name" placeholder="Enter name" name="name" required>
 </div>
  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" placeholder="Password" name="pass" required>
  </div>
  <div class="form-group">
      <label for="name">Registration Number</label>
    <input type="name" class="form-control" id="name"  placeholder="Enter Id" name="regno" required>
 </div>


  
    <select class="select" name="batch">
        <option disabled selected value>Select Group</option>
  <option value="a1">A1</option>
  <option value="a2">A2</option>
  <option value="a3">A3</option>
  <option value="b1">B1</option>
  <option value="b2">B2</option>
  <option value="b3">B3</option>
  <option value="c1">C1</option>
  <option value="c2">C2</option>
  <option value="c3">C3</option>
  <option value="d1">D1</option>
  <option value="d2">D2</option>
  <option value="d3">D3</option>
  <option value="e1">E1</option>
  <option value="e2">E2</option>
  <option value="e3">E3</option>
  <option value="f1">F1</option>
  <option value="f2">F2</option>
  <option value="f3">F3</option>
  <option value="g1">G1</option>
  <option value="g2">G2</option>
      </select>
  

      <div class="modal-footer">

          <button type="submit" class="btn btn-primary">Submit</button>
        </div>

 
  
</form>


</div>



        
      </div>
    </div>
  </div>
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
