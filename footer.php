  <!-- info section -->
  <section class="info_section layout_padding-top">
    <div class="info_logo-box">
      <h2>
        DES!GN-IT
      </h2>
    </div>
    <div class="container layout_padding2">
      <div class="row">
        <div class="col-md-3">
          <h5>
            About Us
          </h5>
          <p>
            
            We're a digital product and UX agency in Banglore.

            Strategy, design, and development across all platforms.

          </p>
        </div>
        <div class="col-md-3">
          <h5>
            Useful Link
          </h5>
          <ul>
            
            <li>
              <a href="privacy.php">
                Privacy Policy
              </a>
            </li>
            <li>
              <a href="">
                Terms Of Service
              </a>
            </li>
          </ul>
        </div>
        
        <div class="col-md-3">
          <h5>
            Contact Us
          </h5>
          <p>
            Contact us - designit@info.com <br>
            Mobile - 8770134687
          </p>
        </div>
        <div class="col-md-3">

        <div class="subscribe_container">
            <h5>
              Newsletter
            </h5>
            <div class="form_container">
              <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                <input type="email" placeholder="Enter your email" name="newsletter" required>
                <button type="submit" name="send">
                  Subscribe
                </button>
              </form>



<?php 

require_once ("admin/connection.php");

 if(isset($_POST['send'])){
  $newsletter = $_POST['newsletter'];

     $newsquery = "INSERT into `newsletter` (`email`) value ('$newsletter')";
     $result = $connect->query($newsquery);
     
      if($result){
        echo '<script>alert("thankyou for subscribing")</script>';
      }else{
        echo '<script>alert("try again")</script>';
      }
 }
?>




            </div>
          </div>

        </div>
      </div>
    </div>
    <div class="container">
      <div class="social_container">

        <div class="social-box">
          <a href="">
            <img src="images/fb.png" alt="">
          </a>

          <a href="">
            <img src="images/twitter.png" alt="">
          </a>
          <a href="">
            <img src="images/linkedin.png" alt="">
          </a>
          <a href="">
            <img src="images/instagram.png" alt="">
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- end info section -->
  
  <!-- footer section -->
  <section class="container-fluid footer_section">
    <p>
      &copy; 2022 All Rights Reserved. Design by
      <a href="https://php.design/"> DESIGN-IT </a>
    </p>
  </section>
  <!-- footer section -->