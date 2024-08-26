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

<!-- blogs section starts  -->

<section class="blogs" id="blogs">

    <h1 class="heading"> <span>daily posts</span> </h1>

    <div class="swiper blogs-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide slide">
                <div class="image">
                    <img src="images/blog-1.jpg" alt="">
                </div>
                <div class="content">
                    <div class="link"> <a href="#">by Christian Bale</a> <span>|</span> <a href="#">14 january, 2023</a> </div>
                    <h3>The journey of becoming a lion and lioness</h3>
                    <p>I was obese before joining the Lionheart gym 2years ago. I was tired of always being the fat individual in my surroundings and made a choice to change my body. I joined the Lionheart gym and each day always felt invigorating. I am now a lion and walking prouldy as a fit individual in my surroundings. I am now respected by all that demeaned me.</p>
                </div>
            </div>
            
            <div class="swiper-slide slide">
                <div class="image">
                    <img src="images/blog-2.jpg" alt="">
                </div>
                <div class="content">
                    <div class="link"> <a href="#">by Jorja Smith</a> <span>|</span> <a href="#">14 january, 2023</a> </div>
                    <h3>fitness is not about being better than someone else</h3>
                    <p>Since i joined Lionheart Gym, I have learnt so much from the trainers. Training sessions have made me connect with my body. I became patient in seeing results and with time all the pressure i had due to voices of comparisons drastically went down. I can proudly say that i have control over my mind and body and i appreciate each and every progressive step i make. </p>
                </div>
            </div>

            <div class="swiper-slide slide">
                <div class="image">
                    <img src="images/blog-3.jpg" alt="">
                </div>
                <div class="content">
                    <div class="link"> <a href="#">by Samuel.L.Jackson</a> <span>|</span> <a href="#">14 january, 2023</a> </div>
                    <h3>Fitness is the first step to achieving optimum confidence in a persons life</h3>
                    <p>I remember I was always a lazy individual. I have been deregistered in four colleges because of that character. Joining the gym, really had a great impact in helping me connect with my potential. Day after day my confidence grew. I became proud of my body and my mind gradually became focused. I started working hard in areas of interest of my life. I am now enrolled in a new college and my grades are always increasing.</p>
                </div>
            </div>

            <div class="swiper-slide slide">
                <div class="image">
                    <img src="images/blog-4.jpg" alt="">
                </div>
                <div class="content">
                    <div class="link"> <a href="#">by Brad Pitt</a> <span>|</span> <a href="#">14 january, 2023</a> </div>
                    <h3>Pain is gain</h3>
                    <p>In my time in the Lionheart gym, through proper guidance from my trainers i realised that the world is so cruell and nothing is achieved without hardwork. It was hard to cope up with the pain my body underwent at the beginning of my journey to becoming a lion. With time I started seeing substantial results and I accepted pain as a fuel to achieve success. I am no longer afraid.  </p>
                </div>
            </div>

        </div>

        <div class="swiper-pagination"></div>

    </div>
    <a href="register1.php" class="btn">get started</a>

</section>

<!-- blogs section ends -->





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
            <p> <i class="fas fa-phone"></i>0111650571</p>
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

<div class="credit"> created by <span> ANNRISPER> | all rights reserved! </div>

<!-- footer section ends -->













<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>