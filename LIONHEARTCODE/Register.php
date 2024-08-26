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
        <a href="home.php">home</a>
        <a href="about.php">about</a>
        <a href="trainers.php">trainers</a>
        <a href="pricing.php">pricing</a>
        <a href="Register.php">Register</a>
        <a href="blogs.php">blogs</a>
    </nav>

</header>

<!-- header section ends     -->

<div class="heading-1" style="background:url(Gym/IMG-20221118-WA0001.jpg) no-repeat">
   <h1>about us</h1>
</div>

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
               <option value="Basic">Volvo</option>
               <option value="Premium">Saab</option>
              </select>          
             </div>
           <div class="inputBox">
              <span>Trainer :</span>
              <select name="trainer" id="trainer">
               <option value="Moreen wangui">Volvo</option>
               <option value="Christine muthoni">Saab</option>
               <option value="Anthony macharia">Mercedes</option>
               <option value="Kelvin mwngi">Audi</option>
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
            <a class="links" href="home.php">home</a>
            <a class="links" href="about.php">about</a>
            <a class="links" href="pricing.php">pricing</a>
            <a class="links" href="trainers.php">trainers</a>
            <a class="links" href="Register.php">Register</a>
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

<div class="credit"> created by <span>ANNRISPER</span> | all rights reserved! </div>

<!-- footer section ends -->






<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>