<?php>
  session_destroy(); #destroys session once the log out button has been pressed and then redirects the user to the homepage.
echo "<script>alert('You have successfully been logged out')</script>"
echo "<script>window.location='index.php'</script>"; #Redirecting to home page

?>