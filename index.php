<?php 

require_once ("admin/connection.php");

 $sql = "SELECT * from `price`";
 $fire = $connect->query($sql);

  $sql2 = "SELECT * from `feature`";
 $fire2 = $connect->query($sql2);

 $sql3 = "SELECT * from `feedback`";
 $fire3 = $connect->query($sql3);
?>


<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title> DESIGN-IT </title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,700|Raleway:400,700&display=swap" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
  <link href="mypricing.css" rel="stylesheet" />
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <?php
    include ('header.php');
    ?>
    <!-- end header section -->
    <!-- slider section -->
    <section class=" slider_section position-relative">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <div class="detail-box">
              <h2>
                You Dream
              </h2>
              <h1>
              We Design 
              
              </h1>
              <div>
                <a href="">
                  Read More
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-5">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="img-box">
                    <img src="images/img-slide1.png" alt="" />
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="img-box">
                    <img src="images/img-slide2.png" alt="" />
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="img-box">
                    <img src="images/img-slide3.png" alt="" />
                  </div>
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- end slider section -->
  </div>

  <!-- feature section -->
  <section class="feature_section layout_padding2 layout_margin">
    <div class="container">
      <div class="heading_container">
        <h2>
          Features
        </h2>
      </div>
    </div>
    <div class="container">
      <div class="row">
        
        <?php while($feature = mysqli_fetch_assoc($fire2)){ ?>
      <div class="col-md-4">
        <div class="box">
          <div class="head-box">
            <div class="img-box">
              <svg height="512pt" viewBox="0 0 512 512.08926" width="512pt" xmlns="http://www.w3.org/2000/svg">
                <path d="m383.808594 117.007812 11.316406-11.3125 11.3125 11.3125-11.3125 11.3125zm0 0" />
                <path d="m146.390625 354.433594 112-112 11.3125 11.3125-112 112zm0 0" />
                <path d="m32.042969 456.089844h176v16h-176zm0 0" />
                <path d="m32.042969 424.089844h32v16h-32zm0 0" />
                <path d="m80.042969 424.089844h32v16h-32zm0 0" />
                <path d="m128.042969 424.089844h80v16h-80zm0 0" />
                <path
                  d="m455.078125 170.191406c42.605469-42.335937 63.105469-102.078125 55.460937-161.652344l-.796874-6.179687-6.175782-.796875c-59.574218-7.621094-119.304687 12.886719-161.632812 55.496094l-28.945313 28.949218-50.910156-5.65625-76.257813 76.257813 39.601563 39.601563 33.933594-33.945313 11.601562 11.601563-34.222656 34.222656h-204.691406c-17.671875 0-32.0000002 14.328125-32.0000002 32v240c0 17.671875 14.3281252 32 32.0000002 32h352c17.675781 0 32-14.328125 32-32v-214.296875l15.738281-15.734375-5.65625-50.90625zm40.253906-153.398437c2.945313 31.992187-2.863281 64.183593-16.800781 93.128906l-76.320312-76.328125c28.949218-13.929688 61.132812-19.734375 93.121093-16.800781zm-247.289062 134.160156-22.621094 22.632813-16.976563-16.976563 59.503907-59.511719 30.550781 3.398438-27.679688 27.671875zm34.226562 34.222656 16.6875 16.691407-22.632812 22.621093 11.3125 11.3125 22.632812-22.625 16.6875 16.691407-66.632812 66.621093 11.3125 11.3125 66.632812-66.625 11.597657 11.601563-33.941407 33.945312 39.597657 39.589844 12.519531-12.527344v70.304688h-320v-128h140.691406l-16.410156 16.398437 11.3125 11.3125zm117.773438 294.914063c0 8.835937-7.160157 16-16 16h-352c-8.835938 0-16-7.164063-16-16v-240c0-8.835938 7.164062-16 16-16h188.691406l-16 16h-172.691406v160h352v-102.296875l16-16zm-44.519531-176.402344-16.976563-16.964844 22.632813-22.632812 50.449218-50.457032 3.390625 30.550782zm5.65625-62.230469-39.597657-39.589843 33.941407-33.945313-11.3125-11.3125-33.941407 33.9375-39.601562-39.59375 82.578125-82.582031c10.304687-10.296875 21.828125-19.296875 34.308594-26.808594l83.019531 83.015625c-7.515625 12.476563-16.515625 23.996094-26.808594 34.304687zm0 0" />
                <path d="m186.382812 66.429688 64.003907-64 11.3125 11.3125-64.003907 64zm0 0" />
                <path d="m122.382812 66.429688 48-47.996094 11.3125 11.3125-48 48zm0 0" />
                <path d="m434.386719 314.429688 64.003906-64 11.3125 11.3125-64 64zm0 0" />
                <path d="m434.386719 378.429688 47.996093-47.996094 11.316407 11.3125-48 48zm0 0" />
                <path d="m138.386719 306.429688 22.628906-22.625 11.3125 11.3125-22.628906 22.628906zm0 0" />
                <path d="m226.390625 330.429688 22.628906-22.625 11.3125 11.3125-22.628906 22.628906zm0 0" />
                <path d="m232.042969 480.089844h136v-64h-136zm88-48h32v32h-32zm-72 0h56v32h-56zm0 0" />
              </svg>

            </div>
            <h6>
              <?= $feature['title']?>
            </h6>
          </div>
          <div class="detail-box">
            <p>
              <?= $feature['content']?>
              </p>
          </div>
        </div>
         </div>
      <?php } ?>
        
      </div>
    </div>
    <div class="d-flex justify-content-center">
      <a href="feature.php">
        Read More
      </a>
    </div>
  </section>

  <!-- end feature section -->

  <!-- download section -->

  <section class="download_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container">
        <h2>
          UX/UI
        </h2>
      </div>
      <div class="layout_padding2-top">
        <div class="row">
          <div class="col-md-4">
            <div class="box">
              <div class="head-box">
                <div class="img-box">
                  <img src="images/question.png" alt="" />
                </div>
                <h6>
                  Why?
                </h6>
              </div>
              <div class="detail-box">
                <p>
                  The UX/UI Design of the application improves the user experience and customer satisfaction that ultimately helps increase the number of users of the specific application.
                </p>
              </div>
            </div>
            <div class="box">
              <div class="head-box">
                <div class="img-box">
                  <img src="images/how.png" alt="" />
                </div>
                <h6>
                  How?
                </h6>
              </div>
              <div class="detail-box">
                <p>
                  We develop robust and scalable frontends by incorporating the right frameworks, libraries and technology stack as per your requirement.
                </p>
              </div>
            </div>
            
          </div>
          <div class="col-md-4">
            <div class="main-img-box">
              <img src="images/download.png" alt="" />
            </div>
          </div>
          <div class="col-md-4">
            <div class="box">
              <div class="head-box">
                <div class="img-box">
                  <img src="images/what.png" alt="" />
                </div>
                <h6>
                  What?
                </h6>
              </div>
              <div class="detail-box">
                <p>
                  After understanding your product and UX goals, we perform a complete UX assessment and create a detailed design roadmap. Then, we create key interfaces, innovations & design patterns.
                </p>
              </div>
            </div>
            <div class="box">
              <div class="head-box">
                <div class="img-box">
                  <img src="images/wireframe.png" alt="" />
                </div>
                <h6>
                  Wireframes
                </h6>
              </div>
              <div class="detail-box">
                <p>
                  Wireframes transform ideas into reality and help teams have productive discussions. Comparing and combining multiple approaches to solving a problem. 
              </div>
            </div>
            <div>
              <a href="" class="btn-2">
                Download
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end download section -->
  <!--start pricing section-->
  <section class="client_section layout_margin">
    <div class="container">
      <div class="heading_container d-flex justify-content-lg-start">
        <h2>
          Pricing
        </h2>
      </div>
      <div class ="row">
        <div class="pricing">
          <div class="snip1214">

            <?php while($price = mysqli_fetch_assoc($fire)) {?>

      <div class="plan">
        <h3 class="plan-title">
          <?= $price['title']?>
        </h3>
        <div class="plan-cost"><span class="plan-price">Rs <?= $price['price']?></span><span class="plan-type">/ Yearly</span></div>
          <ul class="plan-features">
            <li><i class="ion-checkmark"> </i><?= $price['des1']?></li>
            <li><i class="ion-checkmark"> </i><?= $price['des1']?></li>
            <li><i class="ion-checkmark"> </i><?= $price['des2']?></li>
            <li><i class="ion-checkmark"> </i><?= $price['des3']?></li>
            <li><i class="ion-checkmark"> </i><?= $price['des4']?></li>
            <li><i class="ion-checkmark"> </i><?= $price['des5']?></li>
            <li><i class="ion-checkmark"> </i><?= $price['des6']?></li>
            <li><i class="ion-checkmark"> </i><?= $price['des7']?></li>
          </ul>
        <div class="plan-select"><a href="selectplan.php?id= <?= $price['id']?>">Select Plan</a></div>
      </div>

      <?php } ?>

          </div>
          </div>
          

      </div>
    </div>
    </section>
  
 <!--start pricing section-->
  <!-- about section -->
  <section class="about_section layout_padding">
    <div class="container">
      <div class="heading_container d-flex justify-content-lg-start">
        <h2>
          About Us
        </h2>
      </div>
      <div class="layout_padding2-top">
        <div class="row">
          <div class="col-md-5">
            <div class="detail-box b-1">
              
              <p>
                
                As a UI UX design and development company in India, we provide UI UX design services that deploy a clear-cut UX process that begins by defining the product's scope and a number of steps succeed depending on the defined scope. <br> <br> <br>
                
              </p>
              <a href="about.php">
                Read More
              </a>
            </div>
          </div>
          <div class="col-md-5">
            <div class="detail-box b-2">
              <p>
                In this section you can know more about us.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->

  <!-- subscribe section -->
  <section class="subscribe_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          You can give your feedback here.
        </h2>
      </div>
      <form  action="<?php $_SERVER['PHP_SELF']; ?>" method="post" class="">
       <input class="bg-dark" type="text" placeholder="Enter your name" name="name" required />
       <input class="" type="text" placeholder="Enter your feedbak" name="feed" required />
        <button name="feedback">
          submit
        </button>
      </form>
      <?php
      
      require_once("admin/connection.php");

      if(isset($_POST['feedback'])){
        $name = $_POST['name'];
        $feedback = $_POST['feed'];

         $feedinsert = "INSERT into `feedback` (`name`,`feedback`) value ('$name','$feedback')";
         $feedresult = $connect->query($feedinsert);

          if($feedresult){
            echo '<script>alert ("thank you for your feedback")</script>';
          }else{
            echo '<script>alert ("try again")</script>';
          }
      }
      
      ?>
    </div>
  </section>

  <!-- end subscribe section -->

  <!-- client section -->
  <section class="client_section layout_margin">
    <div class="container">
      <div class="heading_container">
        <h2>
          Feedbacks
        </h2>
      </div>
      <div class="client_container layout_padding2-top">
        <div class="client-id">
          <div class="slideshow-container">

          <?php while($feedback = mysqli_fetch_assoc($fire3)){?>

            <div class="mySlides">
              
              <q><?= $feedback['feedback']?></q>
              <p class="author"><?= $feedback['name']?></p>
            </div>
            <?php } ?>
            
          

            <a class="prev" onclick="plusSlides(-1)">
            <img src="images/left-arrow.png"></a>
            <a class="next" onclick="plusSlides(1)">
            <img src="images/right-arrow.png"></a>
            
            </div>
            
            
            <div class="dot-container">
              <span class="dot" onclick="currentSlide(1)"></span> 
              <span class="dot" onclick="currentSlide(2)"></span> 
              <span class="dot" onclick="currentSlide(3)"></span> 
            </div>
            
            <script>
            var slideIndex = 1;
            showSlides(slideIndex);
            
            function plusSlides(n) {
              showSlides(slideIndex += n);
            }
            
            function currentSlide(n) {
              showSlides(slideIndex = n);
            }
            
            function showSlides(n) {
              var i;
              var slides = document.getElementsByClassName("mySlides");
              var dots = document.getElementsByClassName("dot");
              if (n > slides.length) {slideIndex = 1}    
              if (n < 1) {slideIndex = slides.length}
              for (i = 0; i < slides.length; i++) {
                  slides[i].style.display = "none";  
              }
              for (i = 0; i < dots.length; i++) {
                  dots[i].className = dots[i].className.replace(" active", "");
              }
              slides[slideIndex-1].style.display = "block";  
              dots[slideIndex-1].className += " active";
            }
            </script>
            
        
      </div>
    </div>
  </section>

  
  <!-- contact section -->
  <section class="contact_section layout_padding">
    <div class="container">
      <div class="d-flex ">
        <h2>
          Contact Us
        </h2>
      </div>
      <div class="row">
        <div class="col-md-6">

          <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
            <div class="contact_form-container">
              <div>
                <div>
                  <input type="text" placeholder="Name" name="name" required>
                </div>
                <div>
                  <input type="text" placeholder="Phone Number" name="phone" required>
                </div>
                <div>
                  <input type="email" placeholder="Email" name="email" required>
                </div>
                <div class="mt-5">
                  <input type="text" placeholder="Message" name="message" required>
                </div>
                <div class="mt-5">
                  <button type="submit" name="submit">
                    send
                  </button>
                </div>
              </div>

            </div>

          </form>
          <?php 

require_once ("admin/connection.php");

if(isset($_POST['submit'])){

   $name = $_POST['name'];
   $phone = $_POST['phone'];
   $email = $_POST['email'];
   $message = $_POST['message'];

  $contactquery= "INSERT into `contact` (`name`,`phone`,`email`,`message`) value ('$name','$phone','$email','$message')";
  $fire = $connect->query($contactquery);

    if($fire){
      echo '<script>alert("Thank you for contacting us")</script>';
    }else{
       echo '<script>alert("try again")</script>';
    }
}

?>
        </div>
        <div class="col-md-6">
          <div class="contact_img-box">
            <img src="images/contact.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- footer section  -->

  <?php include("footer.php"); ?>

  <!-- end footer section  -->



  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>

  <script>
    function openNav() {
      document.getElementById("myNav").classList.toggle("menu_width");
      document
        .querySelector(".custom_menu-btn")
        .classList.toggle("menu_btn-style");
    }
  </script>
</body>

</html>