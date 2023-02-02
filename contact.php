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

  <title>DESIGN-IT</title>

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
</head>

<body class="sub_page">
  <div class="hero_area">
    <!-- header section strats -->
  <?php include ("header.php"); ?>
    <!-- end header section -->
  </div>


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

        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
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
                  <button type="submit" name="submit" >
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

  <!-- end contact section -->
  <!-- info section -->

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