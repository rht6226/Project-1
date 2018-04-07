<?php
session_start();
$host='localhost';
$user='root';
$pass='';
$db='id5276922_first';

$conn=mysqli_connect($host, $user, $pass, $db) or die("Didn't Connect to the server. Please check your connection! If problem persists please try after sometime");
if(isset($_POST["regno"]))
	$regno=mysqli_real_escape_string($conn,$_POST["regno"]);
if(isset($_POST["pass"]))
	$pas=mysqli_real_escape_string($conn,$_POST["pass"]);
if(isset($_POST["name"]))
	$name=mysqli_real_escape_string($conn,$_POST["name"]);
if(isset($_POST["email"]))
	$email=mysqli_real_escape_string($conn,$_POST["email"]);
if(isset($_POST["user"]))
	$user=mysqli_real_escape_string($conn,$_POST["user"]);
if(isset($_POST["root"]))
	$root=mysqli_real_escape_string($conn,$_POST["root"]);

$k="0";	//loop for batch batch=group
for($x = 0; $x <= 20; $x++)
	{
		$m="a$x";
		if(isset($_POST["a$x"]))
		{$$m=mysqli_real_escape_string($conn,$_POST["a$x"]);$k=$x;}
	}

$l="0";	//loop for name of subject
for($x = 0; $x <= 20; $x++)
	{
		$n="b$x";
		if(isset($_POST["b$x"]))
		{$$n=mysqli_real_escape_string($conn,$_POST["b$x"]);$l=$x;}
	}
if($k==$l)
{		
		$sql = "SELECT * FROM teacher";
		$result = mysqli_query($conn,$sql);
		$a="0";
		while($row=mysqli_fetch_array($result))
		{	
		    if($regno==$row['regno'] or $email==$row['email'])
		    {
		        echo "<h2>This Registration no. is already registered. Please Login to view your profile.</h2>";$a="1";
		        break;
		    }
		}
		for($x = 0; $x <= $l; $x++)
		{
			$m="a$x";$n="b$x";
			$j=$$m;
			$u=$$n;
			$sql="SELECT $u FROM class WHERE Batch= '$j'";
			$result = mysqli_query($conn,$sql);
			if($result)
			{echo " <h2> The Batch $j and subject $u  selected are already registered under a different username. Please select correct data! </h2>";$a='1';break;}
		}
		    $result;
			if($a=="0")
		    {
				for($x = 0; $x <= $l; $x++)
				{
					$m="a$x";$n="b$x";
					$h=$$m;
					$u=$$n;
					$sqli="UPDATE class SET  $u='$regno' WHERE Batch = '$h' ";
					$result=mysqli_query($conn, $sqli);echo "Registered as Teacher of $u of Batch $h <br>";
				}
				
				if($result)
				   {
					   $sql="INSERT INTO teacher (regno, pass, name, email, user) VALUES ('$regno','$pas','$name', '$email', '$user')";
				    if (mysqli_query($conn, $sql)) 
		        		{
		            		echo "You have signed up successfully! Please Login to view your profile";
		        		} 
		        	else 
		        		{
		            		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		        
		        		}
				   }
				
		        
				
		    }
}
	
else {echo "Wrong data entered. Please enter data carefully!";}
?>