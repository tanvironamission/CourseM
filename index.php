<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  $id = $_SESSION["id"];
  $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE id = $id");
  $row = mysqli_fetch_assoc($result);
}
else{
  header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Index</title>
  </head>
  <body>
    <h1>Welcome <?php echo $row["name"]; ?></h1>
    <!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>home</title>
 <!-- font awesome cdn link -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-
awesome/5.15.3/css/all.min.css">
 <!-- custom css file link -->
 <link rel="stylesheet" href="style.css">
</head>
<body>
 
<div class="container">
<header>
 <a href="#" class="logo">Course<span>M</span></a>
 <div id="menu" class="fas fa-bars"></div>
 <nav class="navbar">
 <a href="home.html">home</a>
 <a href="course.html">course</a>
 <a href="teacher.html">teacher</a>
 <a href="price.html">price</a>
 <a href="review.html">review</a>
 <a href="contact.html">contact</a>
 </nav>
</header>
<!-- home section -->
<section class="home">
 <div class="content">
 <h3>Online courses is a better way of Learning</h3>
 <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia repellat 
aperiam libero, beatae debitis iusto quia sit aliquid placeat facilis?</p>
 <a href="#" class="btn">get started</a>
 </div>
 <div class="image">
 <img src="images/img1.jpg" alt="">
 </div>
</section>
<!-- footer section -->
<section class="footer">
 <div class="box-container">
 <div class="box">
 <h3>about us</h3>
 <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, 
maxime!</p>
 </div>
 <div class="box">
 <h3>quick links</h3>
 <a href="#">home</a>
 <a href="#">course</a>
 <a href="#">teacher</a>
 <a href="#">price</a>
 <a href="#">review</a>
 <a href="#">contact</a>
 </div>
 <div class="box">

<h3>follow us</h3>
 <a href="#">facebook</a>
 <a href="#">twitter</a>
 <a href="#">instagram</a>
 <a href="#">linkedin</a>
 </div>
 <div class="box">
 <h3>contact us</h3>
 <p> <i class="fas fa-phone"></i> +123-456-7890 </p>
 <p> <i class="fas fa-envelope"></i> studysmart@gmail.com </p>
 <p> <i class="fas fa-map-marker-alt"></i> mumbai, india - 400104 </p>
 </div>
 </div>
 <div class="credit"> created by <span> mr. web designer </span> | all rights 
reserved </div>
</section>
</div>
<!-- custom js file link -->
<script src="js/script.js"></script>
</body>
</html>
    <a href="logout.php">Logout</a>
  </body>
</html>
