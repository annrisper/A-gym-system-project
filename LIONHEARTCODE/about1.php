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

<!-- about section starts  -->

<!-- about section starts  -->

<section class="about" id="about">

    <div class="image">
        <img src="images/about-img.jpg" alt="">
    </div>

    <div class="content">
        <span>about us</span>
        <h3 class="title">Buliding a Fit and Healthy Community anad Generation</h3>
        <p>Are you tired of your physical appearance? Do you want to better your health? Lionheart is established to transform the physical lifestyle of our members. The health of our members is of high interest to us during the transformation. With the help and exemplary guide of our tainers, members get to achieve a strong body and mind.</p>
        <div class="box-container">
            <div class="box">
                <h3><i class="fas fa-check"></i>body and mind</h3>
                <p>Time to make your body lean and mind strong.</p>
            </div>
            <div class="box">
                <h3><i class="fas fa-check"></i>healthy life</h3>
                <p>Learn to live a healthy life</p>
            </div>
            <div class="box">
                <h3><i class="fas fa-check"></i>strategies</h3>
                <p>Get healthy and workout routines in ones transformation journey</p>
            </div>
            <div class="box">
                <h3><i class="fas fa-check"></i>workout</h3>
                <p>Have your days scheduled with effective workout routines</p>
            </div>
        </div>   
    </div>

</section>

<!-- about section ends -->
<!-- review section starts  -->

<section class="review">
    <h1 class="heading"> <span>Client Reviews</span> </h1>
    <div class="information">
        <span>testimonials</span>
        <h3>what our clients says</h3>
    </div>

    <div class="swiper review-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide slide">
                <p>I have had the best fitness experience in Lionheart Gym</p>
                <div class="user">
                    <img src="images/pic-1.png" alt="">
                    <div class="info">
                        <h3>Alan Shore</h3>
                        <span>lawyer</span>
                    </div>
                    <i class="fas fa-quote-left"></i>
                </div>
            </div>

            <div class="swiper-slide slide">
                <p>I never thought i would ever cut my weight and be shredded after living my whole being a fat individual</p>
                <div class="user">
                    <img src="images/pic-2.png" alt="">
                    <div class="info">
                        <h3>Hamisi Rahman</h3>
                        <span>student</span>
                    </div>
                    <i class="fas fa-quote-left"></i>
                </div>
            </div>

            <div class="swiper-slide slide">
                <p>My confidence is now at a top-notch</p>
                <div class="user">
                    <img src="images/pic-3.png" alt="">
                    <div class="info">
                        <h3>Stephen Curry</h3>
                        <span>athlete</span>
                    </div>
                    <i class="fas fa-quote-left"></i>
                </div>
            </div>

            <div class="swiper-slide slide">
                <p>Lionheart Gym has the best trainers ever</p>
                <div class="user">
                    <img src="images/pic-4.png" alt="">
                    <div class="info">
                        <h3>Doja Cat</h3>
                        <span>Rapper</span>
                    </div>
                    <i class="fas fa-quote-left"></i>
                </div>
            </div>

        </div>

    </div>
    <a href="login.php" class="btn">get started</a>

</section>

<!-- review section ends -->


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
            <p> <i class="fas fa-phone"></i> 0111650571 </p>
            <p> <i class="fas fa-phone"></i> 0111650571</p>
            <p> <i class="fas fa-envelope"></i>annrisperw@gmail.com </p>
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

<div class="credit"> created by <span>ANNRISPER GICHUHI</span> | all rights reserved! </div>

<!-- footer section ends -->













<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>