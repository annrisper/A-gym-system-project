<?php 
session_start();

	include("connection1.php");
	include("functions1.php");

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
        <a href="home2.php">home</a>
        <a href="schedule.php">schedule</a>
        <a href="logout1.php">Logout</a>

    </nav>

</header>

<!-- header section ends     -->

<section class="home" id="home">
<h1 class="heading"><span> Hello, <?php echo $user_data['trainer_name']; ?>
</span> </h1>
</section>


<!--Register section begins-->

<section class="form-1" id="Register">
    <h1 class="heading"> <span>SCHEDULE YOUR TRAINEE</span> </h1>

    <form action="schedule-1.php" method="POST" class="register-form">

        <div class="flex">
           <div class="inputBox">
              <span>Trainee's name :</span>
              <input type='text' placeholder="Enter your Trainee's Name" name= 'trainee'>
           </div>
           <div class="inputBox">
              <span>Body Workout :</span>
              <select name="workout" id="workout">
               <option value="Chest">Chest</option>
               <option value="Leg and Cardio">Leg and Cardio</option>
               <option value="Back">Back</option>
               <option value="Shoulders and Cardio">Shoulders and Cardio</option>
              </select> 
           </div>
           <div class="inputBox">
              <span>Training Date :</span>
              <input type='date' placeholder="Enter your Training Date" name='date'>
           </div>
           <div class="inputBox">
              <span>Routin Set :</span>
              <select name="set_1" id="set_1">
              <option value="5x5 Heavy">4x(8-12) Progressive Overload</option>
               <option value="5x5 Heavy">5x5 Heavy</option>
               <option value="10x10 Moderate Weight">10x10 Moderate Weight</option>
              </select>          
             </div>
           <div class="inputBox">
              <span>Trainer's Name :</span>
              <select name="trainer" id="trainer">
               <option value="Moreen wangui">Moreen wangui</option>
               <option value="Christine muthoni">christine muthoni</option>
               <option value="Anthony Macharia">Anthony macharia</option>
               <option value="kelvin mwangi">kelvin Mwangi</option>
              </select>
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
            <a class="links" href="home2.php">home</a>
            <a class="links" href="schedule.php">about</a>
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
            <p> <i class="fas fa-phone"></i> 0111650571 </p>
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