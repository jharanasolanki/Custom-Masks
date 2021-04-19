<?php
 if(!isset($_SESSION)) 
 { 
     session_start(); 
 } 
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
  <link rel="stylesheet" href="css/nav.css">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
  <style>

  </style>
</head>

<div class="topnav" id="myTopnav">
  <a href="index.php" class="active">Home</a>
  <a href="aboutus.php">About us</a>
  <a href="makemasks.php">Make Mask</a>
  <a href="catalog.php">Catalogue</a>
  <?php
      if(isset($_SESSION['username']))
      {
        if($_SESSION['accountid']==40)
        {
          echo "<a href='addmask.php'>Add Inventory</a>";
          echo "<a href='sendmailfrontend.php'>Send Emails</a>";
        }
      }
  ?>
  <div class="topnav-right">



    <?php
      if(isset($_SESSION['username']))
      {
        $uname=$_SESSION['username'];
        print <<< END
        <a href="cart.php">Cart</a>
    <a href="wishlist.php">Wishlist</a>
    <a href="orders.php">Orders</a>
        <div class="dropdown">
    <button class="dropbtn">Hey $uname!
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="logout.php">Logout</a>
    </div>
  </div>
END;
    
      }
      else
      {
        echo "<a href='signin.php'>Log In</a>";
      }
    ?>
    <!--<a href=" signup.php " >Signup</a>-->



  <a href=" javascript:void(0); " style=" font-size:15px; " class=" icon " onclick=" myFunction() ">&#9776;</a>
  </div>
</div>













<script>
function myFunction() {
  var x = document.getElementById(" myTopnav ");
  if (x.className === " topnav ") {
    x.className += " responsive ";
  } else {
    x.className = " topnav ";
  }
}

</script>

</html>