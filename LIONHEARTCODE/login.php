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
        <a href="index.php">home</a>
        <a href="login.php">Members</a>
        <a href="trainers.php">trainers</a>
        <a href="blogs.php">blogs</a>
        <a href="about.php">about</a>
    </nav>

</header>

<!-- header section ends     -->


<!--Register section begins-->

<section class="form-1" id="Register">
    <h1 class="heading"> <span>LOGIN NOW !</span> </h1>

    <form action="login-1.php" method="POST" class="register-form">

        <div class="flex">
           <div class="inputBox">
              <span>name :</span>
              <input type='text' placeholder="Enter your Name" name= 'user_name'>
           </div>
           <div class="inputBox">
              <span>Password :</span>
              <input type='text' placeholder="Enter your Password" name='password'>
           </div>
        <input type='submit' value="Login" class="btn" name='send'>
    
     </form>


</section>

<!--Register section ends-->

<section class="form-1" id="Register">

     <h1 class="heading"> <span>if not a member</span> </h1>

     <a href="signup.php" class="btn">Sign Up</a>

</section>



<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>quick links</h3>
            <a class="links" href="home.php">home</a>
            <a class="links" href="login.php">members</a>
            <a class="links" href="about.php">about</a>
            <a class="links" href="trainers.php">trainers</a>
            <a class="links" href="blogs.php">blogs</a>
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

<div class="credit"> created by <span>ANNRISPER</span> | all rights reserved! </div>

<!-- footer section ends -->













<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>