<?php
   	include("config.php");
  	session_start();
   
   	if($_SERVER["REQUEST_METHOD"] == "POST") 
   	{
    	// username and password sent from form 
    	$myusername = mysqli_real_escape_string($conn,$_POST['uname']);
    	$password = mysqli_real_escape_string($conn,$_POST['password']); 
    	$mypassword=hash('sha256', $password);
      $query = "SELECT * FROM account  WHERE username ='$myusername'";
      $result = mysqli_query($conn, $query);
      if (mysqli_num_rows($result) == 0) 
      { // IF no previous user is using this username.
        header('Location: ' . $_SERVER['HTTP_REFERER']."?err=1?uname=$myusername?password=$password");
      }
      else 
      {
        $sql = "SELECT * FROM account WHERE username = '$myusername' and password = '$mypassword'";
        $result=$conn->query($sql);
        $row = $result->fetch_array(MYSQLI_ASSOC);
        // If result matched $myusername and $mypassword, login successful
        if($row) 
        {
          $_SESSION['username'] = $myusername;
       	  header("location: index.php"); 
    	 }
    	 else 
        {
           header('Location: ' . $_SERVER['HTTP_REFERER']."?err=2?uname=$myusername?password=$password");
        }
      }
  	$conn->close();
   }
?>