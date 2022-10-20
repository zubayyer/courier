<?php
session_start();
require_once("../connection.php");
// if(!isset($_SESSION["user"])){
//     header("location:register/login.php");

// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Logis Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Logis - v1.2.1
  * Template URL: https://bootstrapmade.com/logis-bootstrap-logistics-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <!-- <a href="index.html" class="logo d-flex align-items-center"> -->
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <a href="indexx.php" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>Courier MS</h3>
                </a>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="indexx.php" class="active">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#Agents">Agents</a></li>
          <li><a href="#contact">Contact</a></li>
          <?php 
          if(isset($_SESSION["user"])){?>
          <li><a class="get-a-quote" href="register/logout.php">Log Out</a></li> 
          <li class="get-a-quote">
          <?php
            echo $_SESSION["user"];
         }
         else{?>
          <li><a class="get-a-quote" href="register/login.php">Log In</a></li> 
          <?php
         }
          ?></li> 
          

       

        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">
    <div class="container">
      <div class="row gy-4 d-flex justify-content-between">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h2 data-aos="fade-up">Your Lightning Fast Delivery Partner</h2>
          <p data-aos="fade-up" data-aos-delay="100">With the largest retail network in the country and a strong fleet of 600+ satellite tracked vehicles; Domestic Express offers its customers a range of cost-effective shipping solutions within Pakistan.</p>

          <form action="#" method="post" class="form-search d-flex align-items-stretch mb-3" data-aos="fade-up" data-aos-delay="200">
            <input type="text" name="track" class="form-control" placeholder="Track your courier">
            <button type="submit" name="search" class="btn btn-primary">Track</button>
          </form>
  <?php
    if(isset($_POST["search"])){
      // unset($_SESSION["stat"]);
    $Id = $_POST["track"];
    $fetch1 = "select * from orderstatus where Courier_Id = '$Id'";
    $execute1 = mysqli_query($cnct, $fetch1);
    $check = mysqli_num_rows($execute1);
    if ($check > 0) {
    $xx = mysqli_fetch_array($execute1);
    $stat = $xx[2];
    }
    $fetch = "select * from courier where Id = '$Id'";
    $execute = mysqli_query($cnct, $fetch);
    $row_num = mysqli_num_rows($execute);
    if ($row_num > 0) {?>
      <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                      <h3>Your Courier is <?php echo $stat  ; ?></h3>
                    </div>
      <div class="table-responsive">
      <table class="table text-start align-middle table-bordered table-hover mb-0" id="myTable">
           <thead>
           <tr class="text-white">
           <th scope="col"><h3>Item</h3></th>
           <th scope="col"><h3>Type</h3></th>
           <th scope="col"><h3>Sender</h3></th>
           <th scope="col"><h3>Address</h3></th>
           <th scope="col"><h3>Phone</h3></th>
           <th scope="col"><h3>Reciever</h3></th>
           <th scope="col"><h3>Reciever email</h3></th>
           <th scope="col"><h3>Address</h3></th>
           <th scope="col"><h3>Phone</h3></th>
           <th scope="col"><h3>Sending date</h3></th>
           <th scope="col"><h3>Delivery date</h3></th>
           <th scope="col"><h3>Amount</h3></th>
           <th scope="col"><h3>Desired date</h3></th>
           <th scope="col"><h3>Track Id</h3></th>
           </tr>
           </thead>
           <tbody>
             <?php
             while($x = mysqli_fetch_array($execute)){?>
                 <tr>
                 <td ><?php echo $x[1]; ?></td>
                 <td ><?php echo $x[2]; ?></td>
                 <td ><?php echo $x[3]; ?></td>
                 <td ><?php echo $x[4]; ?></td>
                 <td ><?php echo $x[5]; ?></td>
                 <td ><?php echo $x[6]; ?></td>
                 <td ><?php echo $x[7]; ?></td>
                 <td ><?php echo $x[8]; ?></td>
                 <td ><?php echo $x[9]; ?></td>
                 <td ><?php echo $x[10]; ?></td>
                 <td ><?php echo $x[11]; ?></td>
                 <td ><?php echo $x[12]; ?></td>
                 <td ><?php echo $x[13]; ?></td>
                 <td ><?php echo $x[0]; ?></td>
                 </tr>
               
             <?php
             }
             echo'</tbody></table></div></div></div>';
             }
    
            else{
              echo "Tracking Id not found";
            }

          }
?>
          <div class="row gy-4" data-aos="fade-up" data-aos-delay="400">

            <div class="col-lg-3 col-6">
              <div class="stats-item text-center w-100 h-100">
                <?php
                $run = mysqli_query($cnct,"select * from register where Role = 'Agent'");
                $agents = mysqli_num_rows($run);
                ?>
                <span data-purecounter-start="0" data-purecounter-end="<?php echo $agents ; ?>" data-purecounter-duration="1" class="purecounter"></span>
                <p>Agents</p>
              </div>
            </div><!-- End Stats Item -->

            <div class="col-lg-3 col-6">
              <div class="stats-item text-center w-100 h-100">
              <?php
                $run1 = mysqli_query($cnct,"select * from User");
                $users = mysqli_num_rows($run1);
                ?>
                <span data-purecounter-start="0" data-purecounter-end="<?php echo $users ; ?>" data-purecounter-duration="1" class="purecounter"></span>
                <p>users</p>
              </div>
            </div><!-- End Stats Item -->

            <div class="col-lg-3 col-6">
              <div class="stats-item text-center w-100 h-100">
              <?php
                $run2 = mysqli_query($cnct,"select * from courier");
                $couriers = mysqli_num_rows($run2);
                ?>
                <span data-purecounter-start="0" data-purecounter-end="<?php echo $couriers ; ?>" data-purecounter-duration="1" class="purecounter"></span>
                <p>Couriers</p>
              </div>
            </div><!-- End Stats Item -->


          </div>
        </div>

        <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out">
          <img src="assets/img/hero-img.svg" class="img-fluid mb-3 mb-lg-0" alt="">
        </div>

      </div>
    </div>
  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
      <div class="container">

        <div class="row gy-4">
        <?php
                          $queryy = "select * from couriertype";
                          $runn = mysqli_query($cnct,$queryy);
                          $count = 0;
                          while ($x = mysqli_fetch_array($runn)) { 
                            // $count++ ;
                            ?>
          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up">
            <div class="icon flex-shrink-0"><i class="fa-solid fa-cart-flatbed"></i></div>
            <div>
              <h4 class="title"><?php echo $x[1]; ?></h4>
              <p class="description"><?php echo $x[2]; ?></p>
              <!-- <a href="service-details.html" class="readmore stretched-link"><span>Learn More</span><i class="bi bi-arrow-right"></i></a> -->
            </div>
          </div>
          <!-- End Service Item -->

         <?php } ?>
        </div>

      </div>
    </section><!-- End Featured Services Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about pt-0">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">
          <div class="col-lg-6 position-relative align-self-start order-lg-last order-first">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
            <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a>
          </div>
          <div class="col-lg-6 content order-last  order-lg-first">
            <h3>About Us</h3>
            <p class="text-justify">
            <?php
            $query = "select * from aboutus";
            $run = mysqli_query($cnct,$query);
            $arr = mysqli_fetch_array($run);
            echo $arr[1];
             ?>
             </p>
           
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->
 <!-- ======= Contact Section ======= -->
 <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <span>Contact Us</span>
          <h2>Contact Us</h2>

        </div>
        <!-- <div>
          <iframe style="border:0; width: 100%; height: 340px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
        </div> -->
        <!-- End Google Maps -->

        <div class="row gy-4 mt-4">

          <!-- <div class="col-lg-4"> -->

            <!-- <div class="info-item d-flex">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h4>Location:</h4>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>
            </div> -->
            <!-- End Info Item -->

            <!-- <div class="info-item d-flex">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h4>Email:</h4>
                <p>info@example.com</p>
              </div>
            </div> -->
            <!-- End Info Item -->

            <!-- <div class="info-item d-flex">
              <i class="bi bi-phone flex-shrink-0"></i>
              <div>
                <h4>Call:</h4>
                <p>+1 5589 55488 55</p>
              </div>
            </div> -->
            <!-- End Info Item -->

          <!-- </div> -->

          <div class="col-lg-12">
            <form action="" method="post">

          
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" value="<?php if(isset($_SESSION["user"])){ echo $_SESSION["user"]; }
                  else {
                  echo "";
                  }?>" id="name" placeholder="Your Name" readonly>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" value="<?php if(isset($_SESSION["user"])){ echo $_SESSION["email"]; }
                  else {
                  echo "";
                  }?>"
                   name="email" id="email" placeholder="Your Email" readonly>
                </div>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <!-- <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div> -->
              <div class="text-center"><button type="submit" class="btn btn-primary mt-3" name= "btn">Send Message</button></div>
            </form>
          </div><!-- End Contact Form -->
          <?php
          if(isset($_POST["btn"])){
            $email = $_POST["email"];
            $name = $_POST["name"];
            $msg = $_POST["message"];
            $queryM = "INSERT INTO `contact`( `Name`, `Email`, `Message`) VALUES
            ('$name','$email','$msg')";
            $runM = mysqli_query($cnct , $queryM);
            if($runM==true){
                echo "<script>alert('Message sent')</script>";
                
            }
            else{
                mysqli_errno($cnct);
            }
            }
          ?>

        </div>

      </div>
    </section><!-- End Contact Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services pt-0">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <span>Our Services</span>
          <h2>Our Services</h2>

        </div>

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/storage-service.jpg" alt="" class="img-fluid">
              </div>
              <h3><a href="service-details.html" class="stretched-link">Storage</a></h3>
              <p>Studio by TCS showcases carefully curated collections from an array of Pakistani designers and brings the best of Pakistani fashion to your doorstep.</p>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/logistics-service.jpg" alt="" class="img-fluid">
              </div>
              <h3><a href="service-details.html" class="stretched-link">Logistics</a></h3>
              <p>Octara is an enterprise specializing in Corporate Trainings & Workshops, Seminars, Conferences, Publications and Ancillary Management Services</p>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/cargo-service.jpg" alt="" class="img-fluid">
              </div>
              <h3><a href="service-details.html" class="stretched-link">Cargo</a></h3>
              <p>TCS Sentiments continues to strengthen relationships and spread happiness by allowing people to send gifts, cakes and flowers to Pakistan.</p>
            </div>
          </div><!-- End Card Item -->

         

        </div>
      </div>
    </section><!-- End Services Section -->

    
    <!-- ======= Testimonials Section ======= -->
    <section id="Agents" class="testimonials">
      <div class="container">
        <div class="slides-1 swiper" data-aos="fade-up">
          <div class="swiper-wrapper">
            <?php
                          $query = "select * from register";
                          $run = mysqli_query($cnct,$query);
                          while ($x = mysqli_fetch_array($run)) {?>
            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="../Admin/<?php echo $x[9] ?>" class="testimonial-img" alt="">
                <h3><?php echo $x[1] ?></h3>
                <h4><?php echo $x[7] ?></h4>
                <!-- <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div> -->
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                 Address: <?php echo $x[4] ?> <br>Phone.no: <?php echo $x[5] ?>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div>
            <!-- End testimonial item -->
            <?php } ?>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <span>Frequently Asked Questions</span>
          <h2>Frequently Asked Questions</h2>

        </div>

        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="200">
          <div class="col-lg-10">
            <div class="accordion accordion-flush" id="faqlist">
            <?php
                          $query = "select * from questions";
                          $run = mysqli_query($cnct,$query);
                          $count = 0;
                          while ($x = mysqli_fetch_array($run)) { 
                            $count++ ;
                            ?>
              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-<?php echo $count; ?> ">
                    <i class="bi bi-question-circle question-icon"></i>
                   <?php
                            echo $x[1];
                ?>
                  </button>
                </h3>
                <div id="faq-content-<?php echo $count; ?>" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                <?php echo $x[2] ; ?> 
                </div>
                </div>
              </div><!-- # Faq item-->

                    <?php  }
                      ?>

           
            </div>

          </div>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-info">
          <a href="indexx.php" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>Courier MS</h3>
                </a>
      </a>
          <p>With the largest retail network in the country and a strong fleet of 600+ satellite tracked vehicles; Domestic Express offers its customers a range of cost-effective shipping solutions within Pakistan.</p>
          <!-- <div class="social-links d-flex mt-4">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div> -->
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="indexx.php">Home</a></li>
            <li><a href="#about">About us</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#agent">Agents</a></li>
            <li></li>
          </ul>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li>Cargo</li>
            <li>Storage</li>
            <li>Marketing</li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Contact Us</h4>
          <a href="#contact" class="text-white">Contac Us</a>
          <p>
            SITE Area <br>
            Karachi, KHI 535022<br>
            Pakistan <br><br>
            <strong>Phone:</strong> +92 312 4561254<br>
            <strong>Email:</strong> zbr@gmail.com<br>
          </p>

        </div>

      </div>
    </div>

   

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>