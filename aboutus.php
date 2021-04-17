<?php require 'nav.php' ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">


<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

a:link {
  color: white;
}
a:visited {
  color: white;

}
a:hover {
  color: white;

}
a:active {
  color: white;

}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>

   <link rel="stylesheet" href="css/main.css">
   <link rel="stylesheet" href="css/formoid-flat-green.css" type="text/css" />
   <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body class="hero-image">
   <!-- Nav bar --> 
   <!-- Nav bar finishh -->
   <!-- login section -->

<div class="about-section">
  <h1>About Us Page</h1>
  <p>Fabindia is India's largest private platform for products that are made from traditional techniques, skills and hand-based processes.

Fabindia links over 55,000 craft based rural producers to modern urban markets, thereby creating a base for skilled, sustainable rural employment, and preserving India's traditional handicrafts in the process.

Fabindia's products are natural, craft based, contemporary, and affordable.</p>
  <p></p>
</div>

<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="images/team1.jpg" alt="Jane" style="width:100%">
      <div class="container">
        <h2>Jharana Solanki</h2>
        <p class="title">Developer</p>
        <p>Jharana Solanki is the developer of the project.</p>
        <p>jharanasolanki@gmail.com</p>
        <p><button class="button"><a href="jharanasolanki@gmail.com">Contact</a></button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="images/team2.jpg" alt="Mike" style="width:100%">
      <div class="container">
        <h2>Parth Patel</h2>
        <p class="title">Developer and Designer</p>
        <p>Parth Patel is the deveoper and designer of this project.</p>
        <p>parthpatel@gmail.com</p>
        <p><button class="button"><a href="parthpatel@gmail.com">Contact</a></button></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="images/team3.jpg" alt="John" style="width:100%">
      <div class="container">
        <h2>Radhika Patwardhan</h2>
        <p class="title">Teacher Incharge</p>
        <p>Radhika Patwardhan is the teacher incharge for the mini project</p>
        <p>Radhikapatwardhan@gmail.com</p>
        <p><button class="button" ><a href="Radhikapatwardhan@gmail.com">Contact</a></button></p>
      </div>
    </div>
  </div>
</div>
   
   <!-- login section finish -->
   <!-- footer section -->
   
   </div>
</body>

</html>