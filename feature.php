<?php 
require_once ("admin/connection.php");

 $sql = "SELECT * from `feature`";
 $fire = $connect->query($sql);


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
</head>

<body class="sub_page">
  <div class="hero_area">
    <!-- header section strats -->
    <?php include ("header.php"); ?>
    <!-- end header section -->
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

    <?php while($row = mysqli_fetch_assoc($fire)){ ?>
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
              <?= $row['title']?>
            </h6>
          </div>
          <div class="detail-box">
            <p>
              <?= $row['content']?>
              </p>
          </div>
        </div>
         </div>
      <?php } ?>

      

    </div>
  </div>
</section>

<!-- end feature section -->

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