<?php
session_start();#session stated and connection to the database established
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
		        echo "<script>alert('This Registration no. is already registered. Please Login to view your profile.')</script>
                      <script>window.location='signupnow.php'</script>" ;$a="1"; #if unique id or email already exist in the database
		        break;
		    }
		}
		for($x = 0; $x <= $l; $x++)
		{
			$m="a$x";$n="b$x";
			$j=$$m;
			$u=$$n;
			$sql="SELECT $u FROM class WHERE Batch= $j";
			$result = mysqli_query($conn,$sql);
			if($result!=='0')
			{echo " <Script> alert('The Batch $j and subject $u  selected are already registered under a different username. Please select correct data!') </script><script>window.location='signupnow.php'</script>";$a='1';break;} #if one teacher is already registered to a group
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
					$result=mysqli_query($conn, $sqli);echo "<script>alert('Registered as Teacher of $u of Batch $h')</script>
                    <script>window.location='index.php'</script><br>";  #registration successful , Redirecting to login page
				}
				
				if($result)
				   {
					   $sql="INSERT INTO teacher (regno, pass, name, email, user) VALUES ('$regno','$pas','$name', '$email', 'teacher')";
				    if (mysqli_query($conn, $sql)) 
		        		{
		            		echo "<script>alert('You have signed up successfully! Please Login to view your profile')</script>
                            <script>window.location='index.php'</script>";
		        		} 
		        	else 
		        		{
		            		echo "Error: " . $sql . "<br>" . mysqli_error($conn); #error generated
		        
		        		}
				   }
				
		        
				
		    }
}
	
else {echo "<script>alert('Wrong data entered. Please enter data carefully!')</script>
            <script>window.location='signupnow.php'</script>";} 
?>