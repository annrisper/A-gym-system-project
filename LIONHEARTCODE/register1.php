<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LIONHEART</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
<!-- header section starts      -->

<header class="header">

    <a href="#" class="logo"> <span>LIONHEART</span>FITNESS </a>

    <div id="menu-btn" class="fas fa-bars"></div>

    <nav class="navbar">
        <a href="home1.php">home</a>
        <a href="about1.php">about</a>
        <a href="trainers1.php">trainers</a>
        <a href="pricing1.php">pricing</a>
        <a href="register1.php">Register</a>
        <a href="blogs1.php">blogs</a>
        <a href="logout.php">Logout</a>

    </nav>

</header>

<!-- header section ends     -->

<section class="home" id="home">
<h1 class="heading"><span> Hello, <?php echo $user_data['user_name']; ?>
</span> </h1>
</section>


<!--Register section begins-->

<section class="form-1" id="Register">
    <h1 class="heading"> <span>REGISTER NOW !</span> </h1>

    <form action="register-form.php" method="POST" class="register-form">

        <div class="flex">
           <div class="inputBox">
              <span>name :</span>
              <input type='text' placeholder="Enter your Name" name= 'name'>
           </div>
           <div class="inputBox">
              <span>email :</span>
              <input type='email' placeholder="Enter your Email" name='email'>
           </div>
           <div class="inputBox">
              <span>phone :</span>
              <input type='text' placeholder="Enter your Number" name='phone'>
           </div>
           <div class="inputBox">
              <span>id number :</span>
              <input type='text' placeholder="Enter your Id Number" name='id'>
           </div>
           <div class="inputBox">
              <span>Pricing Plan :</span>
              <select name="plan" id="plan">
               <option value="Basic">Basic</option>
               <option value="Premium">Premium</option>
              </select>          
             </div>
           <div class="inputBox">
              <span>Trainer :</span>
              <select name="trainer" id="trainer">
               <option value="Moreen wangui">Moreen wangui</option>
               <option value="Christine muthoni">Christine muthoni</option>
               <option value="Anthony macharia">Antony macharia</option>
               <option value="Kelvin mwangi">kelvin mwangi</option>
              </select>
            </div>
           <div class="inputBox">
              <span>Date to Begin Training :</span>
              <input type='date' name='date'>
           </div>
           
        </div>
  
        <input type='submit' value="submit" class="btn" name='send'>
  
     </form>
</section>

<!--Register section ends-->




<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>quick links</h3>
            <a class="links" href="home1.php">home</a>
            <a class="links" href="about1.php">about</a>
            <a class="links" href="pricing1.php">pricing</a>
            <a class="links" href="trainers1.php">trainers</a>
            <a class="links" href="register1.php">Register</a>
            <a class="links" href="blogs1.php">blogs</a>
        </div>

        <div class="box">
            <h3>opening hours</h3>
            <p> monday : <i> 6:00am - 9:30pm </i> </p>
            <p> tuesday : <i> 6:00am - 9:30pm </i> </p>
            <p> wednesday : <i> 6:00am - 9:30pm </i> </p>
            <p> friday : <i> 6:00am - 9:30pm </i> </p>
            <p> saturday : <i> 6:00am - 9:30pm </i> </p>
            <p> sunday : <i> closed </i> </p>
        </div>

        <div class="box">
            <h3>opening hours</h3>
            <p> <i class="fas fa-phone"></i> 0111650571</p>
            <p> <i class="fas fa-phone"></i> 0111650571</p>
            <p> <i class="fas fa-envelope"></i> annrisperw@gmail.com </p>
            <p> <i class="fas fa-map"></i> Nyeri, Kenya - 53185 </p>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-linkedin"></a>
                <a href="#" class="fab fa-pinterest"></a>
            </div>
        </div>

       

    </div>

</section>

<div class="credit"> created by <span> ANNRISPER</span> | all rights reserved! </div>

<!-- footer section ends -->













<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>