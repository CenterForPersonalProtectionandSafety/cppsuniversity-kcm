<?php session_start(); /* Starts the session */
if(!isset($_SESSION['UserData']['Username'])){
header("location:login.php");
exit;
}
?>

<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Kennith Copeland Ministries</title>
  <meta name="description" content="CPPS LMS for KCM">
  <meta name="" content="">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Cinzel&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/hero.css">
  <link rel="stylesheet" href="css/card-flip.css">
</head>

<body>
  <?php include 'navigation_login.php'; ?>

<!-- <img src="/assets/images/KCMLogo.png" alt="..." style="" class="KCMLogo"> -->

  <section class="hero">
      <div class="hero-inner">
          <h4>Welcome</h4>
          <h1>Kenneth Copeland Ministries</h1>
          <h3>To the CPPS University</h3>
          <br>
          <br>
          <br>
          <a href="#" id="link_about" class="btn">About Us</a>
          <a href="#" id="link_course" class="btn">Courses</a>
      </div>
  </section>

  <section id="aboutus">
    <header class="text-center py-5 mb-4">
      <div class="container">
        <h1 class="font-weight-light text-white">Who We Are? & Courses Offered</h1>
        <p class="descriptionContent">CPPS is the leading developer and provider of scalable training and consulting solutions in the U.S. for Workplace Violence Prevention, Active Shooter Response, and International Travel Safety. CPPS has worked together with thousands of organizations–large and small–to include over 50% of Fortune 100 corporations, over 1600 colleges and universities; 2000 hospitals and many of the largest non-profit/charitable organizations in the U.S.</p>
      </div>
    </header>

      <div class="wrapper">
          <?php
            //Include the When Lightning Strikes Module
            include 'modules/WLS_Module.php';
            //Include the FPDP Module
            include 'modules/FP_Module.php';
            //Include the Safe Passage Module
            include 'modules/SP_Module.php';
            //Include the Beyond Lockdown Module
            include 'modules/BL_Module.php';
          ?>
      </div>
    </div>
    <br>
    <br>
  </section>
  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/main.js"type="text/javascript"></script>
</body>
</html>
