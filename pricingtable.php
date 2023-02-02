<?php 

require_once ("admin/connection.php");

 $sql = "SELECT * from `price`";
 $fire = $connect->query($sql);
?>
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

    <link rel="stylesheet" href="mypricing.css">
</head>
<body>
  <div class="hero_area">
    <!-- header section strats -->
   <?php include ("header.php"); ?>
    <!-- end header section -->

    <!-- PRICING TABLE -->
    <div class="pricing">
     
    <div class="snip1214">

     <?php while($row = mysqli_fetch_assoc($fire)) {?>

      <div class="plan">
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
        <div class="plan-select"><a href="selectplan.php?id= <?= $row['id']?>">Select Plan</a></div>
      </div>

      <?php } ?>

    </div>
    

  </div>


<!-- PRICING TABLE ENDS -->
<br> <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

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