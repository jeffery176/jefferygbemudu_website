<?php require_once 'header.php'
?>

<?php 
// Get the product ID from the URL
$pid = $_GET["id"];
// Fetch product details from the database using the product ID
$sql = "SELECT * FROM product WHERE product_id = '$pid'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

// Store the product details in variables
$title = $row["title"];
$picture = $row["filename"];
$price = $row["price"];
$description = $row["description"];
$category = $row["category"];
$tag = $row["tag"];
$product_id = $row["product_id"];



?>


<!-- Display the page heading with the product title and breadcrumb -->
  <div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h3><?php echo $title?>® II</h3>
          <span class="breadcrumb"><a href="#">Home</a>  >  <a href="#">Shop</a>  >  <?php echo $title?></span>
        </div>
      </div>
    </div>
  </div>
<!-- Display the product details -->
  <div class="single-product section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <!-- Left column with product image -->
          <div class="left-image">
            <img src="<?php echo $picture?>" alt="">
          </div>
        </div>
        <!-- Right column with product information -->
        <div class="col-lg-6 align-self-center">
          <h4><?php echo $title?>® </h4>
          <span class="price"><em>$<?php echo $price + 5 ?></em> $<?php echo $price?></span>
          <p><?php echo $description?></p>
          <form id="qty" action="cart.php" method="post">
            <input type="qty" class="form-control" id="1" aria-describedby="quantity" placeholder="1">
            <input type="hidden" name="pid" value="<?php echo $product_id?>">
            <button type="submit"><i class="fa fa-shopping-bag"></i> ADD TO CART</button>
          </form>
          <ul>
            <li><span>Game ID:</span> <?php echo $product_id?></li>
            <li><span>Category:</span> <a href="#"><?php echo $category?></a></li>
            <li><span>tags:</span> <a href="#"><?php echo $tag?></a></li>
          </ul>
        </div>
        <div class="col-lg-12">
          <div class="sep"></div>
        </div>
      </div>
    </div>
  </div>
<!-- Display more information about the product with tabs for Description and Reviews -->
  <div class="more-info">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="tabs-content">
            <div class="row">
              <div class="nav-wrapper ">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="description-tab" data-bs-toggle="tab" data-bs-target="#description" type="button" role="tab" aria-controls="description" aria-selected="true">Description</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="reviews-tab" data-bs-toggle="tab" data-bs-target="#reviews" type="button" role="tab" aria-controls="reviews" aria-selected="false">Reviews (3)</button>
                  </li>
                </ul>
              </div>              
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                  <p>The best free website for all things related to computer games is Jeffrey's Gaming Store. As the premier location for all things gaming, we work hard to give players of all skill levels an unmatched experience. Jeffrey's Gaming Store contains all the essentials to improve your gaming, whether you are an experienced player with a ton of experience or a curious newbie ready to dive into the wide world of video games.
                  
                  We guarantee that everyone will find something to like in our vast library of free computer games. Explore old works, dive into the newest releases, or find undiscovered gems you might have missed. To ensure you get the most out of your gaming experience, we offer a plethora of resources in addition to our selection of games.
                  </p>
                </div>
                <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                  <p>From comprehensive guides and walkthroughs to expert tips and strategies, our goal is to enhance your skills and knowledge. Stay up-to-date with the latest news and updates in the gaming world, and join our vibrant community of gamers who share your passion and enthusiasm. At Jeffrey's Gaming Store, we're dedicated to taking your gameplay to the next level, making sure you have the tools and support you need to succeed and enjoy every moment of your gaming journey. </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<!-- Display related games section -->
  <div class="section categories related-games">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="section-heading">
            <h6>Action</h6>
            <h2>Related Games</h2>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="main-button">
            <a href="shop.php?page=1">View All</a>
          </div>

          
      <!-- List of related games with links to their details pages -->
        </div>
        <div class="col-lg col-sm-6 col-xs-12">
          <div class="item">
            <h4>Adventure</h4>
            <div class="thumb">
              <a href="product-details.html"><img src="assets/Images2/jeff19.jpg" alt=""></a>
            </div>
          </div>
        </div>
        <div class="col-lg col-sm-6 col-xs-12">
          <div class="item">
            <h4>Wrestling</h4>
            <div class="thumb">
              <a href="product-details.html"><img src="assets/Images2/jeff18.jpg" alt=""></a>
            </div>
          </div>
        </div>
        <div class="col-lg col-sm-6 col-xs-12">
          <div class="item">
            <h4>Sport</h4>
            <div class="thumb">
              <a href="product-details.html"><img src="assets/Images2/jeff17.jpg" alt=""></a>
            </div>
          </div>
        </div>
        <div class="col-lg col-sm-6 col-xs-12">
          <div class="item">
            <h4>Arcade</h4>
            <div class="thumb">
              <a href="product-details.html"><img src="assets/Images2/jeff19.jpg" alt=""></a>
            </div>
          </div>
        </div>
        <div class="col-lg col-sm-6 col-xs-12">
          <div class="item">
            <h4>Puzzle</h4>
            <div class="thumb">
              <a href="product-details.html"><img src="assets/Images2/jeff15.jpg" alt=""></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php 
require_once 'footer.php';
?>
