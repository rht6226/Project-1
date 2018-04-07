<?php
session_start();
$host='localhost';
$user='root';
$pass='';
$db='id5276922_first';

$conn=mysqli_connect($host, $user, $pass, $db) or die("Didn't Connect to the server. Please check your connection! If problem persists please try after sometime");
if(isset($_POST["regno"]))//injection protect
	$regno=mysqli_real_escape_string($conn,$_POST["regno"]);
if(isset($_POST["pass"]))
	$pas=mysqli_real_escape_string($conn,$_POST["pass"]);
if(isset($_POST["name"]))
	$name=mysqli_real_escape_string($conn,$_POST["name"]);
if(isset($_POST["email"]))
	$email=mysqli_real_escape_string($conn,$_POST["email"]);
if(isset($_POST["batch"]))
	$batch=mysqli_real_escape_string($conn,$_POST["batch"]);
$sql = "SELECT * FROM student";
		$result = mysqli_query($conn,$sql);
		$a="0";
		while($row=mysqli_fetch_array($result))
		{	
		    if($regno==$row['regno'] or $email==$row['email'])
		    {
		        echo "This Registration no. is already registered. Please Login to view your profile.";$a="1";
		        break;
		    }
		}
if($a=="0")
		 {
			$sql="INSERT INTO student (regno, pass, name, email, user, batch) VALUES ('$regno','$pas','$name', '$email', 'student', '$batch')";
			$sqli="INSERT INTO maths_$batch (id) VALUES ('$regno')";$res=mysqli_query($conn, $sqli);
			$sqli="INSERT INTO ecology_$batch (id) VALUES ('$regno')";$res=mysqli_query($conn, $sqli);
			$sqli="INSERT INTO c_$batch (id) VALUES ('$regno')";$res=mysqli_query($conn, $sqli);
			$sqli="INSERT INTO clab_$batch (id) VALUES ('$regno')";$res=mysqli_query($conn, $sqli);
			$sqli="INSERT INTO english_$batch (id) VALUES ('$regno')";$res=mysqli_query($conn, $sqli);
			$sqli="INSERT INTO englishlab_$batch (id) VALUES ('$regno')";$res=mysqli_query($conn, $sqli);
			$sqli="INSERT INTO commwork_$batch (id) VALUES ('$regno')";$res=mysqli_query($conn, $sqli);
			$sqli="INSERT INTO ed_$batch (id) VALUES ('$regno')";$res=mysqli_query($conn, $sqli);
			$sqli="INSERT INTO edlab_$batch (id) VALUES ('$regno')";$res=mysqli_query($conn, $sqli);
			$sqli="INSERT INTO physics_$batch (id) VALUES ('$regno')";$res=mysqli_query($conn, $sqli);
			$sqli="INSERT INTO physicslab_$batch (id) VALUES ('$regno')";$res=mysqli_query($conn, $sqli);
			$sqli="INSERT INTO chemistry_$batch (id) VALUES ('$regno')";$res=mysqli_query($conn, $sqli);
			$sqli="INSERT INTO chemistrylab_$batch (id) VALUES ('$regno')";$res=mysqli_query($conn, $sqli);
			$sqli="INSERT INTO workshop_$batch (id) VALUES ('$regno')";$res=mysqli_query($conn, $sqli);
			$sqli="INSERT INTO workshoplab_$batch (id) VALUES ('$regno')";$res=mysqli_query($conn, $sqli);
			$sqli="INSERT INTO engmech_$batch (id) VALUES ('$regno')";$res=mysqli_query($conn, $sqli);
			$sqli="INSERT INTO engmechlab_$batch (id) VALUES ('$regno')";$res=mysqli_query($conn, $sqli);
			
				    if (mysqli_query($conn, $sql)) 
		        		{
		            		echo "You have signed up successfully! Please Login to view your profile";
		        		} 
		        	else 
		        		{
		            		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		        
		        		}
		 }
?>