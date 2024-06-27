<?php
session_start();

include("connection.php");
// $userprofile = $_SESSION['$user_name'];
// if($userprofile == true)
{

}
//  else
//  {
//      header('location:login.php'); 
// }
?> 



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
      <link rel="stylesheet" href="contact.css">
    <title>Contact US</title>
</head>
<body>


    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a><img src="img/pngtree-sport-car-logo-vector-png-image_6398339.jpg" alt="" width="200px" height="130px"></a>
            <a class="navbar-brand" href="home.php">HOME</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="navbar-brand" href="about.php">ABOUT US</a>
            </li>
              <li class="nav-item">
                <a class="navbar-brand" href="contact.php">CONTACT</a>
            </li>
            <li class="nav-item">
              <a class="navbar-brand" href="product.php">PRODUCTS</a>
          </li>
          <li class="nav-item">
            <a class="navbar-brand" href="service1.php">SERVICE</a>
        </li>
            </ul>
            <!-- <form class="d-flex" role="Login">
            <button class="btn btn-outline-success" type="Login"><a href="login.php">Login</a></li>
              </form> -->
          </div>
        </div>
      </nav>
    

      <div>
        <img src="img/wall.avif" class="img-thumbnail" alt="..." width="100%" height="600px" >
      </div>
<hr> 

<section id="contact">
  
    <h1 class="section-header">Contact</h1>
    
    <div class="contact-wrapper">
    
    <!-- Left contact page --> 

      <form action="#" method="POST" id="contact-form" class="form-horizontal" role="form" >
 
        <div class="form-group">
          <div class="col-sm-12">
            <input type="text" class="form-control" id="name" placeholder="NAME" name="name" required>
          </div>
        </div>
  
        <div class="form-group">
          <div class="col-sm-12">
            <input type="email" class="form-control" id="email" placeholder="EMAIL" name="email" required>
          </div>
        </div>
        <div class="form-group">
            <div class="col-sm-12">
              <input type="phone" class="form-control" id="number" placeholder="PHONE" name="phone" required>
            </div>
          </div>
        <textarea class="form-control" rows="7" placeholder="ADDRESS" name="address" required></textarea>
        
        <button  type="submit" class="btn" name="submit" >Submit</button>
  
      </form>
      
    <!-- Left contact page --> 
      
        <div class="direct-contact-container">
  
          <ul class="contact-list">
            <li class="list-item"><i class="fa fa-map-marker fa-2x"><span class="contact-text place">City, Pune</span></i></li>
            
            <li class="list-item"><i class="fa fa-phone fa-2x"><span class="contact-text phone"><a href="tel:1-212-555-5555" title="Give me a call">(+91) 555-2368</a></span></i></li>
            
            <li class="list-item"><i class="fa fa-envelope fa-2x"><span class="contact-text gmail"><a href="mailto:#" title="Send me an email">cars@gmail.com</a></span></i></li>
            
          </ul>
  
          <hr>
          <ul class="social-media-list">
            <li><a href="#" target="_blank" class="contact-icon">
                <i class="fa-brands fa-facebook"></i></a>
            </li>
            <li><a href="#" target="_blank" class="contact-icon">
                <i class="fa-brands fa-instagram"></i></a>
            </li>
            <li><a href="#" target="_blank" class="contact-icon">
                <i class="fa-brands fa-twitter"></i></a>
            </li>
            <li><a href="#" target="_blank" class="contact-icon">
                <i class="fa-brands fa-github"></i></a>
            </li>       
          </ul>
          <hr>
  
  
        </div>
      
    </div>
    
  </section>  
    
    

<p class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15126.3811971084!2d73.7449297!3d18.5922755!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2bbdefd1552e7%3A0xa3c0fbc9570da5ae!2sXion%20Mall!5e0!3m2!1sen!2sin!4v1690957170955!5m2!1sen!2sin" width="100%" height="200" style="border: 2px;;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
<hr>
    <div class="footer">
<!-- Footer -->
<footer class="bg-dark text-center text-white" >
    <!-- Grid container -->
    <div class="container p-4">
      <!-- Section: Social media -->
      <section class="mb-4">
        <!-- Facebook -->
        <a class="btn btn-outline-light btn-floating m-1" href="/www.facebook.com" role="button"
          ><i class="fab fa-facebook-f"></i
        ></a>
  
        <!-- Twitter -->
        <a class="btn btn-outline-light btn-floating m-1" href="https://twitter.com/" role="button"
          ><i class="fab fa-twitter"></i
        ></a>
  
        <!-- Google -->
        <a class="btn btn-outline-light btn-floating m-1" href="https://www.google.com/" role="button"
          ><i class="fab fa-google"></i
        ></a>
  
        <!-- Instagram -->
        <a class="btn btn-outline-light btn-floating m-1" href="https://www.instagram.com/" role="button"
          ><i class="fab fa-instagram"></i
        ></a>
      </section>
      <!-- Section: Social media -->
  
  
      <!-- Section: Text -->
      <section class="mb-4">
        <p>Choose From The Widest Range of Certified Used Cars in Your City. Book a Test Drive Now! The Hassle Free Used Car Buying Experience. abSure 4S Promise - Sure, Secure, Safe, Smart. Brands: Maruti Suzuki, Honda, Tata, Hyundai, Mahindra, Toyota, Renault, Nissan.
        </p>
      </section>
      <!-- Section: Text -->
  
      <!-- Section: Links -->
      <section class="">
        <!--Grid row-->
        <div class="row">
          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase">Links
            </h5>
  
            <ul class="list-unstyled mb-0">
                <li>
                  <a href="home.php" class="text-white">HOME</a>
                </li>
                <li>
                  <a href="about.php" class="text-white">ABOUT</a>
                </li>
                <li>
                  <a href="contact.php" class="text-white">CONTACT</a>
                </li>
                <li>
                  <a href="product.php" class="text-white">PRODUCT</a>
                </li>
                <li>
                  <a href="service1.php" class="text-white">SERVICE</a>
                </li>
              </ul>
          </div>
          <!--Grid column-->
  
          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase">Online shopping
            </h5>
  
            <ul class="list-unstyled mb-0">
              <li>
                <a href="#!" class="text-white">Terms os Use</a>
              </li>
              <li>
                <a href="#!" class="text-white">Privacy Policy</a>
              </li>
              <li>
                <a href="#!" class="text-white">Returns Policy</a>
              </li>
              <li>
                <a href="#!" class="text-white">Shipping Policy</a>
              </li>
            </ul>
          </div>
          <!--Grid column-->
  
          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase">The Pestsy Difference</h5>
  
            <ul class="list-unstyled mb-0">
              <li>
                <a href="#!" class="text-white">About Us</a>
              </li>
              <li>
                <a href="#!" class="text-white">Articles</a>
              </li>
              <li>
                <a href="#!" class="text-white">Giving Back </a>
              </li>
              
            </ul>
          </div>
          <!--Grid column-->
  
          
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </section>
      <!-- Section: Links -->
    </div>
    <!-- Grid container -->
  
    
  </footer>
  <!-- Footer -->
</div>
</body>
</html>






<?php
// error_reporting();
if (isset($_POST['submit'])) {

  $name=$_POST['name'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $address=$_POST['address'];


   $sql="INSERT INTO `contact`(`name`,`email`,`phone`,`address`) VALUES ('$name','$email',$phone','$address')";
   $data= mysqli_query($conn,$sql);


  if($data){
    echo "Record Updated Successfully";
    
    
  }
  else{
    echo "data do not insert";

}
}

?>