<?php include "includes/head1.php" ?>
  <title>Jimshandyman</title>
<?php include "includes/head2.php" ?>





  <div class="video-container">
    <div class="video">
      <video src="video/lawn-mowing.mp4" autoplay muted loop></video>
      <div class="video-cover">
          <div class="video-text text-center">
            <div>IS YOUR TO-DO LIST TAKING OVER YOUR LIFE?</div>
            <div>GET JIM'S HANDYMAN TO GIVE YOU BACK YOUR TIME</div>
      		<div class="homepage-input flex align-items justify-content">
      		<form method="" action="" class="flex iform">
      			<div style="font-size:32px;padding:5px;color:white; background:#019fe9" class="flex">BOOK A FREE QUOTE</div>
      			<div class="flex ">
      			<input type="text" name="" placeholder="Enter Your Suburb" class="homepage-i-t">
      			<input type="submit" name="submit" value="GO" class="homepage-i-s">
      			</div>
      		</form>
      		</div>
    		</div>
      </div>
    </div>
  </div>



  <nav style="position:absolute">
    <div class="mainContainer">
      <div class="header flex flex-direction-column">
        <div class="menu1 flex flex-direction-row justify-content-space-between">
          <div class="logoDiv">
            <img src="images\logo.jpg" alt="Jimshandyman">
          </div>
          <div class="nav1 flex-direction-row flex align-items">
            <a href="tel:6656566">
              <div class="nav-phone align-items flex">
                <span><img class="right-space" src="images\phone.jpg" alt=""></span>
                <div class="flex flex-direction-column">
                  <div class="slogan">CALL JIM'S HANDYMAN ON</div>
                  <div class="action">1300 975 430</div>
                </div>
              </div>
            </a>
            <a href="">
              <div class="nav-booking align-items flex">
                <span><img class="right-space" src="images\calendar.jpg" alt=""></span>
                <div class="flex flex-direction-column">
                  <div class="slogan">BOOK A FREE QUOTE</div>
                  <div class="action">BOOK ONLINE</div>
                </div>
              </div>
            </a>
            <div class="hamburger-menu flex-direction-column" onclick="openMenu();">
              <div class="hamburger"></div>
              <div class="hamburger"></div>
              <div class="hamburger"></div>
            </div>
          </div>
        </div>
        <div class="menu2" id="menu">
          <div class="nav2 flex text-center">
            <div style="min-width:auto" class="menuItem">
              <ul>
                <a href="http://www.000it.com.au/test/index.php"><li>HOME</li></a>
              </ul>
            </div>
            <div class="menuItem">
              <ul>
                <a href="http://www.000it.com.au/test/aboutus.php"><li>ABOUT US</li></a>
                  <ul>
                    <li>Meet the team
                      <ul>
                        <li><a href="http://www.000it.com.au/test/meet-the-team/australian/index.php">Australian</a></li>
                        <li>South Africa</li>
                        <li>Tasmania</li>
                      </ul>
                    </li>
                    <li>Testimonials</li>
                    <li>Privacy Policy</li>
                  </ul>
              </ul>
            </div>
            <div class="menuItem">
              <ul>
                <a href="http://www.000it.com.au/test/services.php"><li>OUR SERVICES</li></a>
                  <ul>
                    <li>Lawn Moving</li>
                    <li>Gardening services</li>
                    <li>Garden landscaping</li>
                  </ul>
              </ul>
            </div>
            <div class="menuItem">
              <ul>
                <a href="http://www.000it.com.au/test/articles.php"><li>ARTICLES</li></a>
                  <ul>
                    <li>Gardening</li>
                    <li>Lawn Care</li>
                    <!-- <li>Handing and Pruning</li> -->
                    <li>Gutter Cleaning</li>
                    <li>Rubbish removal</li>
                  </ul>
              </ul>
            </div>
            <div class="menuItem">
              <ul>
                <a href="http://www.000it.com.au/test/franchises.php"><li>FRANCHIES FOR SALE</li></a>
                  <ul>
                    <li>Franchies Enquiries</li>
                    <li>Franchies Testemonials</li>
                    <li>FAQs</li>
                    <li>Franchies for sale listings
                      <ul>
                        <li>ACT</li>
                        <li>NSW</li>
                        <li>NT</li>
                        <li>QLD</li>
                        <li>SA</li>
                        <li>TAS</li>
                        <li>VIC</li>
                        <li>WA</li>
                      </ul>
                    </li>
                  </ul>
              </ul>
            </div>
            <div class="menuItem">
              <ul>
                <a href="http://www.000it.com.au/test/contactus.php"><li>CONTACT US</li></a>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </nav>

  <?php include "includes/footer.php" ?>
