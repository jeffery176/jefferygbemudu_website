<?php 
require_once 'header.php';
?>

<!-- 

  <div class="main-banner" style=" background-blend-mode:overlay;
            background-color: rgba(165, 42, 42, 0.829);"> -->

  <div class="main-banner" >
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center">
          <div class="caption header-text">
             <!-- Heading and introductory text for the gaming store -->
            <h6>Welcome to Jeffrey's Gaming Store</h6>
            <h2>BEST GAMING SITE EVER!</h2>
            <p>Jeffrey's Gaming Store is the premier free website for all your computer game needs. As your ultimate destination for everything gaming, we strive to provide an unparalleled experience for gamers of all levels. Whether you are a seasoned veteran with a wealth of gaming experience or a curious newcomer eager to explore the vast world of computer games, Jeffrey's Gaming Store has everything you need to elevate your gameplay.
            
            Our extensive collection of free computer games ensures there's something for everyone. Dive into the latest releases, explore timeless classics, or discover hidden gems you might have missed. But we don't just stop at providing games; we also offer a wealth of resources to help you get the most out of your gaming experience.
          </p>
           <!-- Search form for users to find games or content on the site -->
            <div class="search-input">
              <form id="search" action="#">
                <input type="text" placeholder="Type Something" id='searchText' name="searchKeyword" onkeypress="handle" />
                <button role="button">Search Now</button>
              </form>
            </div>
          </div>
        </div>
        <div class="col-lg-4 offset-lg-2">
           
        <!-- Right image section with a price and offer badge -->
           <div class="right-image">
            <img src="assets/Images2/jeff1.jpg" style="height: 25rem;" alt="">
            <span class="price">$10</span>
            <span class="offer">-30%</span>
          </div>
        </div>
      </div>
    </div>
  </div>
<!-- Features section showcasing different features of the store -->
  <div class="features">
    <div class="container">
      <div class="row">
        <!-- Each feature is in its own column and links to a detailed page -->
        <div class="col-lg-3 col-md-6">
          <a href="#">
            <div class="item">
              <div class="image">
                <img src="assets/images/featured-01.png" alt="" style="max-width: 44px;">
              </div>
              <h4>Free Storage</h4>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-md-6">
          <a href="#">
            <div class="item">
              <div class="image">
                <img src="assets/images/featured-02.png" alt="" style="max-width: 44px;">
              </div>
              <h4>User More</h4>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-md-6">
          <a href="#">
            <div class="item">
              <div class="image">
                <img src="assets/images/featured-03.png" alt="" style="max-width: 44px;">
              </div>
              <h4>Reply Ready</h4>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-md-6">
          <a href="#">
            <div class="item">
              <div class="image">
                <img src="assets/images/featured-04.png" alt="" style="max-width: 44px;">
              </div>
              <h4>Easy Layout</h4>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
<!-- Trending games section -->
  <div class="section trending">
    <div class="container">
      <div class="row">
         <!-- Heading and view all button for trending games -->
        <div class="col-lg-6">
          <div class="section-heading">
            <h6>Trending</h6>
            <h2>Trending Games</h2>
          </div>
        </div>
         <!-- Individual trending game items -->
        <div class="col-lg-6">
          <div class="main-button">
            <a href="shop.php">View All</a>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="item">
            <div class="thumb">
              <a href="shop.php"><img src="assets/Images/jeff2.jpg" style="height: 14rem;" alt=""></a>
              <span class="price"><em>$50</em>$40</span>
            </div>
            <div class="down-content">
              <span class="category">Action</span>
              <h4>Cyber Punk</h4>
              <a href="shop.php"><i class="fa fa-shopping-bag"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="item">
            <div class="thumb">
              <a href="shop.php"><img src="assets/Images/jeff5.jpg" style="height: 14rem;" alt=""></a>
              <span class="price">$50</span>
            </div>
            <div class="down-content">
              <span class="category"> Fighting</span>
              <h4>God of War</h4>
              <a href="shop.php"><i class="fa fa-shopping-bag"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="item">
            <div class="thumb">
              <a href="shop.php"><img src="assets/Images/jeff3.jpg" style="height: 14rem;" alt=""></a>
              <span class="price"><em>$60</em>$45</span>
            </div>
            <div class="down-content">
              <span class="category">Sport</span>
              <h4>Football Manager</h4>
              <a href="shop.php"><i class="fa fa-shopping-bag"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="item">
            <div class="thumb">
              <a href="shop.php"><img src="assets/Images/jeff4.jpeg" style="height: 14rem;" alt=""></a>
              <span class="price">$32</span>
            </div>
            <div class="down-content">
              <span class="category">Arcade</span>
              <h4>Mission Impossible</h4>
              <a href="shop.php"><i class="fa fa-shopping-bag"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<!-- Most played games section -->
  <div class="section most-played">
    <div class="container">
      <div class="row">
        <!-- Heading and view all button for most played games -->
        <div class="col-lg-6">
          <div class="section-heading">
            <h6>TOP GAMES</h6>
            <h2>Most Played</h2>  
          </div>
        </div>
        <div class="col-lg-6">
          <div class="main-button">
            <a href="shop.php">View All</a>
          </div>
        </div>
        <!-- Individual most played game items -->
        <div class="col-lg-2 col-md-6 col-sm-6">
          <div class="item">
            <div class="thumb">
              <a href="shop.php"><img src="assets/Images/jeff7.jpg" alt=""></a>
            </div>
            <div class="down-content">
                <span class="category">Adventure</span>
                <h4>Mortal Kombat</h4>
                <a href="shop.php">Explore</a>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-6 col-sm-6">
          <div class="item">
            <div class="thumb">
              <a href="shop.php"><img src="assets/Images/jeff8.jpg" alt=""></a>
            </div>
            <div class="down-content">
                <span class="category">War</span>
                <h4>God of War</h4>
                <a href="shop.php">Explore</a>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-6 col-sm-6">
          <div class="item">
            <div class="thumb">
              <a href="shop.php"><img src="assets/Images/jeff9.jpg"alt=""></a>
            </div>
            <div class="down-content">
                <span class="category">Mission</span>
                <h4>Night Death</h4>
                <a href="shop.php">Explore</a>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-6 col-sm-6">
          <div class="item">
            <div class="thumb">
              <a href="shop.php"><img src="assets/Images/jeff10.jpg" alt=""></a>
            </div>
            <div class="down-content">
                <span class="category">Puzzle</span>
                <h4>Tetris</h4>
                <a href="shop.php">Explore</a>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-6 col-sm-6">
          <div class="item">
            <div class="thumb">
              <a href="shop.php"><img src="assets/Images/jeff11.jpg" alt=""></a>
            </div>
            <div class="down-content">
                <span class="category">Mission</span>
                <h4>Danger Dash</h4>
                <a href="shop.php">Explore</a>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-6 col-sm-6">
          <div class="item">
            <div class="thumb">
              <a href="shop.php"><img src="assets/Images/jeff12.jpg" alt=""></a>
            </div>
            <div class="down-content">
                <span class="category">Arcade</span>
                <h4>Ninja Up</h4>
                <a href="shop.php">Explore</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<!-- Categories section for different types of games -->
  <div class="section categories">
    <div class="container">
      <div class="row">
        <!-- Heading for categories section -->
        <div class="col-lg-12 text-center">
          <div class="section-heading">
            <h6>Categories</h6>
            <h2>Top Categories</h2>
          </div>
        </div>
         <!-- Individual category items -->
        <div class="col-lg col-sm-6 col-xs-12">
          <div class="item">
            <h4>Action</h4>
            <div class="thumb">
              <a href="shop.php"><img src="assets/Images/jeff13.jpg" alt=""></a>
            </div>
          </div>
        </div>
        <div class="col-lg col-sm-6 col-xs-12">
          <div class="item">
            <h4>Adventure</h4>
            <div class="thumb">
              <a href="shop.php"><img src="assets/Images/jeff14.jpg" alt=""></a>
            </div>
          </div>
        </div>
        <div class="col-lg col-sm-6 col-xs-12">
          <div class="item">
            <h4>Sport</h4>
            <div class="thumb">
              <a href="shop.php"><img src="assets/Images/jeff15.jpg" alt=""></a>
            </div>
          </div>
        </div>
        <div class="col-lg col-sm-6 col-xs-12">
          <div class="item">
            <h4>Puzzle<h4>
            <div class="thumb">
              <a href="shop.php"><img src="assets/Images/jeff18.jpg" alt=""></a>
            </div>
          </div>
        </div>
        <div class="col-lg col-sm-6 col-xs-12">
          <div class="item">
            <h4>Wrestling</h4>
            <div class="thumb">
              <a href="shop.php"><img src="assets/Images/jeff17.jpg" alt=""></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Individual category items --> 
  <div class="section cta">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <div class="shop">
            <div class="row">
               <!-- Shop pre-order section -->
              <div class="col-lg-12">
                <div class="section-heading">
                  <h6>Our Shop</h6>
                  <h2>Go Pre-Order Buy & Get Best <em>Prices</em> For You!</h2>
                </div>
                <p>Secure your copy now with a pre-order! 
                  <br> Purchase today and experience the best gaming has to offer.
                </p>
                <div class="main-button">
                  <a href="shop.php?page=1">Shop Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
         <!-- Newsletter subscription section -->
        <div class="col-lg-5 offset-lg-2 align-self-end">
          <div class="subscribe">
            <div class="row">
              <div class="col-lg-12">
                <div class="section-heading">
                  <h6>NEWSLETTER</h6>
                  <h2>Get Up To $100 Off Just Buy <em>Subscribe</em> Newsletter!</h2>
                </div>
                <div class="search-input">
                  <form id="subscribe" action="#">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Your email...">
                    <button type="submit">Subscribe Now</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>







  <!-- <footer>
    <div class="container">
      <div class="col-lg-12">
        <p>Copyright © 2024 Jeffrey's Gaming Company. All rights reserved. &nbsp;&nbsp; <a rel="nofollow" href="https://templatemo.com" target="_blank">Design: Jeffrey-Tech Hub</a></p>
      </div>
    </div>
  </footer>


  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/counter.js"></script>
  <script src="assets/js/custom.js"></script>

  </body>
</html> -->