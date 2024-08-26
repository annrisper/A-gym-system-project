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
<!-- home section starts  -->

<section class="home" id="home">

    <div class="swiper home-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide slide" style="background: url(images/home-bg-1.jpg) no-repeat;">
                <div class="content">
                    <span>be strong, be a lion</span>
                    <h3>Make yourself <abbr title=""></abbr> a Strong God </h3>
                    <a href="pricing1.php" class="btn">get started</a>
                </div>
            </div>

            <div class="swiper-slide slide" style="background: url(images/home-bg-2.jpg) no-repeat;">
                <div class="content">
                    <span>be fit, be a lioness</span>
                    <h3>Time to make yourself cut weight</h3>
                    <a href="pricing1.php" class="btn">get started</a>
                </div>
            </div>

            <div class="swiper-slide slide" style="background: url(images/home-bg-3.jpg) no-repeat;">
                <div class="content">
                    <span>be shredded, be lean</span>
                    <h3>Time to get Shredded No excuses</h3>
                    <a href="pricing1.php" class="btn">get started</a>
                </div>
            </div>

        </div>

        <div class="swiper-pagination"></div>

    </div>

</section>

<!-- features section starts  -->

<section class="features" id="features">

    <h1 class="heading"> <span>gym features</span> </h1>

    <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="images/f-img-1.jpg" alt="">
            </div>
            <div class="content">
                <img src="images/icon-1.png" alt="">
                <h3>body building</h3>
                <a href="about1.php" class="btn">read more</a>
            </div>
        </div>

        <div class="box second">
            <div class="image">
                <img src="images/f-img-2.jpg" alt="">
            </div>
            <div class="content">
                <img src="images/icon-2.png" alt="">
                <h3>gym for men</h3>
                <a href="about1.php" class="btn">read more</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/f-img-3.jpg" alt="">
            </div>
            <div class="content">
                <img src="images/icon-3.png" alt="">
                <h3>gym for women</h3>
                <a href="about1.php" class="btn">read more</a>
            </div>
        </div>

    </div>

</section>

<!-- features section ends -->

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
        <a href="about1.php" class="btn">read more</a>
    </div>

</section>

<!-- about section ends -->

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
                    <p>I was obese </p>
                </div>
                <a href="blogs1.php" class="btn">read more</a>
            </div>
            
            <div class="swiper-slide slide">
                <div class="image">
                    <img src="images/blog-2.jpg" alt="">
                </div>
                <div class="content">
                    <div class="link"> <a href="#">by Mark Walburg</a> <span>|</span> <a href="#">14 january, 2023</a> </div>
                    <h3>fitness is not about being better than someone else</h3>
                    <p>Since i joined Lionheart Gym,</p>
                </div>
                <a href="blogs1.php" class="btn">read more</a>
            </div>


        </div>

        <div class="swiper-pagination"></div>

    </div>

</section>

<!-- blogs section ends -->

<!-- pricing section starts  -->

<section class="pricing" id="pricing">

    <div class="information">
        <span>pricing plan</span>
        <h3>affordable pricing plan for your</h3>
        <p> <i class="fas fa-check"></i> cardio exercise </p>
        <p> <i class="fas fa-check"></i> weight lifting </p>
        <p> <i class="fas fa-check"></i> diet plans </p>
        <p> <i class="fas fa-check"></i> overall results </p>
    </div>
    <a href="pricing1.php" class="btn">All Pricing</a>

    
</section>

<!-- pricing section ends -->


<!-- banner section starts  -->

<section class="banner">

    <span>JOIN US NOW</span>
    <h3>get upto 50% discount</h3>
    <a href="pricing1.php" class="btn">get discount</a>

</section>

<!-- banner section ends -->


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