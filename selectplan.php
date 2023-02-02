<?php 
require_once ("admin/connection.php");
  
  $id = $_GET['id'];
  $sql = "SELECT * from `price` where `id` = $id";
  $fire = $connect->query($sql);
  $row = mysqli_fetch_assoc($fire);
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

  <link rel="stylesheet" href="mypricing.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
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
      <div class="d-flex  ">
        <h2>
          Enter your details for further process!
        </h2>
      </div>
      <div class="row">
        <div class="col">

        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
            <div class="contact_form-container">
              <div>
                <div>
                  <input type="hidden" value="<?= $row['title']?>" id="plan" name="plan">
                </div>
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
                  <button type="submit" name= "apply">
                    apply
                  </button>
                </div>
              </div>

            </div>

          </form>
          

          <?php 
          
          if(isset($_POST['apply'])){
            $plan = $_POST['plan'];
            $name = $_POST['name'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];

              $sql2 = "INSERT into `plan_enquiry` (`plan`,`name`,`phone`,`email`) value ('$plan','$name','$phone','$email')";
              $fire2 = $connect->query($sql2);

               if ($fire2){
                echo '<script>alert("Plan Enquiry Submitted")</script>';
               }else{
                echo '<script>alert("try again")</script>';
               }
          }
          
          ?>
        </div>
        
        <div class="col " >
          
            <div class="pricing">
             <div class="snip1214">
               <div >
                    <h3 class="plan-title">
                    <?= $row['title']?>
                    </h3>
                     <div class="plan-cost"><span class="plan-price">Rs <?= $row['price']?></span><span class="plan-type">/ Yearly</span></div>
                  <ul class="plan-features">
                    <li><i class="ion-checkmark"> </i><?= $row['des1']?></li>
                    <li><i class="ion-checkmark"> </i><?= $row['des1']?></li>
                    <li><i class="ion-checkmark"> </i><?= $row['des2']?></li>
                    <li><i class="ion-checkmark"> </i><?= $row['des3']?></li>
                    <li><i class="ion-checkmark"> </i><?= $row['des4']?></li>
                    <li><i class="ion-checkmark"> </i><?= $row['des5']?></li>
                    <li><i class="ion-checkmark"> </i><?= $row['des6']?></li>
                    <li><i class="ion-checkmark"> </i><?= $row['des7']?></li>
                
                    </ul>
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