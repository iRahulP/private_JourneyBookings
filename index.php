

<?php 
require'includes/connect.php';
session_start();

if(isset($_SESSION['username'])){
  $done = TRUE;
} else {
  $done = FALSE;
}

if(isset($_POST['finds'])){
  if(isset($_SESSION['username'])){
    header("Location: Plan.php");
  }
  else{
    header("Location: Login.php");
  }


}

?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Tours nd Travels</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
<style>
  mytable {
  border-collapse: collapse;
}
</style>
</head>
<body>

<?php 
if(!isset($_SESSION['username'])){
?>
 <nav class='white' role='navigation'>
    <div class='nav-wrapper container'>
      <a id='logo-container' href='' class='brand-logo'>Tours and Travels</a>
    <ul class='right hide-on-med-and-down'>
        <li>
<a class='waves-effect waves-light btn' href='login.php'> LOGIN </a>
        </li>
      </ul>
      <ul class='right hide-on-med-and-down'>
       <li>  <a href='Register.php' class='waves-effect waves-light btn'><i class='material-icons right'>cloud</i>REGISTER</a>
        </li>
      </ul>
    </div>
  </nav>
<?php
}

else{

 ?>
 <nav class='white' role='navigation'>
    <div class='nav-wrapper container'>
      <a id='logo-container' href='' class='brand-logo'>Tours and Travels</a>
    <ul class='right hide-on-med-and-down'>
        <li>
<a class='waves-effect waves-light btn'> <b><?php echo $_SESSION['username'] ?></b></a>
        
</li>

    <ul class='right hide-on-med-and-down'>
        <li>
<a class='waves-effect waves-light btn' href='logout.php'> LOGOUT </a>
        </li>
      </ul>
<ul class='right hide-on-med-and-down'>
        <li>

<a class='waves-effect waves-light btn'>  <i class="medium material-icons">account_circle</i></a>

</li>
      </ul>
               
      </ul>
    </div>
  </nav>
<?php
}

?>
  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center teal-text text-lighten-2"><b>CrossCountry Tours</b></h1>
        <div class="row center">
          <h5 class="header col s12 light"><i>A Place to Plan Complete Tour...</i></h5>
        </div>

        <div class="row center">
        <br><br><br><br>
          <a href="" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Get Started</a>
        </div>
        <br><br>
<h5 class="header center white-text text-lighten-3"><b>MUMBAI - PUNE - NAGPUR - HYDERABAD</b></h5>
        
      </div>

    </div>
    <div class="parallax"><img src="background1.jpg" alt="Unsplashed background img 1"></div>
  </div>


  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <form method="POST" action=""><table class="table">
        <tr>	<td><b>Enter Starting City</b><input type="text" name="startcity"></td>
          <td><b>Enter Destination City</b><input type="text" name="destcity"></td>
          <tr><td><b>Enter Date of Journey</b><input type="date" name="doj"></td><td><center> <input type="Submit" name="finds" value="FIND" id="download-button" class="waves-effect waves-light btn"></center>
        </td></tr>
</table>
         
        </form>

        </div>

    </div>
  </div>


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light">Private Journey,We got bunch of SUV's to Consider!</h5>
        <br>
<a class="waves-effect waves-light btn">Book Tour</a>
          <br><i class="material-icons">directions_car</i>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="background2.jpg" alt="Unsplashed background img 2"></div>
  </div>

  <div class="container">
    <div class="section">

      <div class="row">
        <div class="col s12 center">
          <h3><i class="mdi-content-send brown-text"></i></h3>
          <h4>Contact Us</h4>
          <p class="left-align center">U got any Problem on Website,Contact us to Help Everyone dealing with the Problems!</p></div>
      </div>

    </div>
  </div>


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="background3.jpg" alt="Unsplashed background img 3"></div>
  </div>

  <footer class="page-footer teal">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text"><b>Devil's Tier</b></h5>
          <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any Amount would help support and continue development on this project and is greatly appreciated.</p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text"><b>Name</b></h5>
          <ul>
            <li><a class="white-text" href="#!">Himanshu</a></li>
            <li><a class="white-text" href="#!">Rahul</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text"><b>Contact</b></h5>
          <ul>
            <li><a class="white-text" href="#!">+512746583899</a></li>
            <li><a class="white-text" href="#!">+222237592874</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="brown-text text-lighten-3" href="#">Daredevil</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>
