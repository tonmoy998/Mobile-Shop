<?php
require_once "php/functions.inc.php";
require 'header.php';
$mobile_shuffle = $mobile->getData();
//m stnads for mobile
$mbrands = array_map(function ($pro) {
  return $pro['brand'];
}, $mobile_shuffle);
// unique mobile brands
$uniqueMbrand = array_unique($mbrands);
// print_r($uniqueMbrand)
//Add to Cart 

?>
<!-- ########################################################################### -->
<!-- ########################### INTRO ######################################### -->
<!-- ########################################################################### -->
<div id="result"></div>
<section class="intro">
  <div class="owl-carousel" id="owlCarousel">
    <img src="assets/Pixel_7__8_Pro.jpg" alt="" class="img" />
    <img src="assets/New_Galaxy_S23_Series.jpg" alt="" class="img" />
    <img src="assets/Xiaomi_14_Pro.jpg" alt="" class="img" />
    <img src="assets/iPhone_15_Series.jpg" alt="" class="img" />
  </div>
</section>
<!-- ########################################################################### -->
<!-- ########################### SALE   ######################################### -->
<!-- ########################################################################### -->


<section class="sales">
  <button class="btn-filter">
    <i class="fa-solid fa-bars-staggered"></i>
  </button>
  <h1 class="h1 text-center f-roboto">Best Selling Gadgets</h1>
  <div class="d-flex justify-content-between controls">
    <!-- For filtering controls add -->
    <button class="btn btn-primary" data-filter="all">All</button>
    <?php foreach ($uniqueMbrand as $mbrand) { ?>
      <button class="btn btn-primary" data-filter="<?php echo $mbrand ?>"><?php echo $mbrand ?></button>
    <?php } ?>
    <button class="btn btn-primary" data-shuffle>Shuffle items</button>
    <!-- For sorting controls add -->
    <div class="p-search">
      <input type="text" name="search" placeholder="Search..." data-search class="border border-primary" />
      <i class="fa fa-search text-primary"></i>
    </div>
  </div>

  <div class="container filter-container">
    <div class="row">
      <?php foreach ($mobile_shuffle as $item) {
        $id = $item['id'];
        $email = $_SESSION['user'];

        // Check if the product is already in the cart
        $checkProduct = "SELECT * FROM cart WHERE id=? AND email=?";
        $stmt = $db->con->prepare($checkProduct);
        $stmt->bind_param('ss', $id, $email);
        $stmt->execute();
        $result = $stmt->get_result();
        $isInCart = $result->num_rows > 0;
        $stmt->close();
      ?>
        <div class="col-md-4 filtr-item" data-category="<?php echo $item['brand'] ?>">
          <div class="col-md-12 bg-tertiary rounded-2">
            <p class="save bg-primary">save 5%</p>
            <a class="link" href="<?php printf('%s?id=%s', 'product.php', $item['id']) ?>">
              <img src="<?php echo $item['path'] ?>" alt="" class="img-fluid" />
            </a>
            <div class="d-flex justify-content-between mx-1 p-details">
              <h1 class="h4 name"><?php echo $item['name'] ?></h1>
              <h1 class="h4 d-inline-flex">
                <p class="dollar">$</p>
                <?php echo $item['price'] ?>
              </h1>
            </div>
            <div class="ratings d-flex">
              <i class="fa fa-star text-primary"></i>
              <i class="fa fa-star text-primary"></i>
              <i class="fa fa-star text-primary"></i>
              <i class="fa fa-star text-primary"></i>
              <i class="fa fa-star"></i>
              <p class="total-reviews">(121)</p>
            </div>
            <?php if ($isInCart) : ?>
              <button type="button" class="btn btn-added rounded-pill btn-cart">Already in Cart</button>
            <?php else : ?>
              <form>
                <input class="user" type="hidden" name="user" value="<?php echo $email; ?>">
                <input class="productId" type="hidden" name="productId" value="<?php echo $id; ?>">
                <button type="button" onclick="addToCart(this)" class="btn btn-dark rounded-pill btn-cart">Add to Cart</button>
              </form>
            <?php endif; ?> <a href="" class="whistlist">
              <i class="fa-regular fa-heart text-primary"></i>
            </a>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
</section>
<!-- ########################################################################### -->
<!-- ########################### WATCH ######################################### -->
<!-- ########################################################################### -->
<section class="watch">
  <div class="container">
    <h1 class="h1 p-3">Budget Selling Watches</h1>
    <div class="owl-carousel bg-tertiary" id="watch">
      <div class="video-box">
        <p class="save bg-primary p-2 rounded-pill f-open">SAVE 2%</p>
        <img class="img" src="./assets/watches/Haylou_RT2_card.jpg" alt="">
        <div class="d-flex details">
          <h1 class="h5">Watch Name</h1>
          <div class="d-flex">
            <p class="dollar">$</p>
            <p class="price">49</p>
          </div>

        </div>
        <a href="" class="btn btn-dark rounded-pill btn-cart">Add to Cart</a>
        <a href="" class="whistlist">
          <i class="fa-regular fa-heart text-primary"></i>
        </a>
      </div>
      <div class="video-box">
        <p class="save bg-primary p-2 rounded-pill f-open">SAVE 2%</p>
        <img class="img" src="./assets/watches/IMILAB_W01_..jpg" alt="">
        <div class="d-flex details">
          <h1 class="h5">Watch Name</h1>
          <div class="d-flex">
            <p class="dollar">$</p>
            <p class="price">49</p>
          </div>

        </div>
        <a href="" class="btn btn-dark rounded-pill btn-cart">Add to Cart</a>
        <a href="" class="whistlist">
          <i class="fa-regular fa-heart text-primary"></i>
        </a>
      </div>
      <div class="video-box">
        <p class="save bg-primary p-2 rounded-pill f-open">SAVE 2%</p>
        <img class="img" src="./assets/watches/MIBRO_WATCH_A2_Card.jpg" alt="">
        <div class="d-flex details">
          <h1 class="h5">Watch Name</h1>
          <div class="d-flex">
            <p class="dollar">$</p>
            <p class="price">49</p>
          </div>

        </div>
        <a href="" class="btn btn-dark rounded-pill btn-cart">Add to Cart</a>
        <a href="" class="whistlist">
          <i class="fa-regular fa-heart text-primary"></i>
        </a>
      </div>
      <div class="video-box">
        <p class="save bg-primary p-2 rounded-pill f-open">SAVE 2%</p>
        <img class="img" src="./assets/watches/MI_SMART_BAND_7_Card.jpg" alt="">
        <div class="d-flex details">
          <h1 class="h5">Watch Name</h1>
          <div class="d-flex">
            <p class="dollar">$</p>
            <p class="price">49</p>
          </div>

        </div>
        <a href="" class="btn btn-dark rounded-pill btn-cart">Add to Cart</a>
        <a href="" class="whistlist">
          <i class="fa-regular fa-heart text-primary"></i>
        </a>
      </div>
      <div class="video-box">
        <p class="save bg-primary p-2 rounded-pill f-open">SAVE 2%</p>
        <img class="img" src="./assets/watches/REDMI_WATCH_3_ACTIVE_Card.jpg" alt="">
        <div class="d-flex details">
          <h1 class="h5">Watch Name</h1>
          <div class="d-flex">
            <p class="dollar">$</p>
            <p class="price">49</p>
          </div>

        </div>
        <a href="" class="btn btn-dark rounded-pill btn-cart">Add to Cart</a>
        <a href="" class="whistlist">
          <i class="fa-regular fa-heart text-primary"></i>
        </a>
      </div>
      <div class="video-box">
        <p class="save bg-primary p-2 rounded-pill f-open">SAVE 2%</p>
        <img class="img" src="./assets/watches/Wave_Stride_Voice_Front.jpg" alt="">
        <div class="d-flex details">
          <h1 class="h5">Watch Name</h1>
          <div class="d-flex">
            <p class="dollar">$</p>
            <p class="price">49</p>
          </div>

        </div>
        <a href="" class="btn btn-dark rounded-pill btn-cart">Add to Cart</a>
        <a href="" class="whistlist">
          <i class="fa-regular fa-heart text-primary"></i>
        </a>
      </div>
    </div>
  </div>
</section>
<!-- ########################################################################### -->
<!-- ###########################  BRANDS ######################################## -->
<!-- ########################################################################### -->
<section class="brands">
  <div class="container">
    <h1 class="h1 text-center">Leading highlighter Brands: Unleash Innovation with our Diverse brand Selection!</h1>
    <div class="row">
      <div class="col-md-3"><img class="img-fluid" src="assets/brands/Edifier_Brand.jpg" alt=""></div>
      <div class="col-md-3"><img class="img-fluid" src="assets/brands/Hp.jpg" alt=""></div>
      <div class="col-md-3"><img class="img-fluid" src="assets/brands/Mibro.jpg" alt=""></div>
      <div class="col-md-3"><img class="img-fluid" src="assets/brands/Nokia_Brand.jpg" alt=""></div>
      <div class="col-md-3"><img class="img-fluid" src="assets/brands/Oppo_Brand.jpg" alt=""></div>
      <div class="col-md-3"><img class="img-fluid" src="assets/brands/Realme_Brand.jpg" alt=""></div>
      <div class="col-md-3"><img class="img-fluid" src="assets/brands/Xiaomi_Brand.jpg" alt=""></div>
      <div class="col-md-3"><img class="img-fluid" src="assets/brands/Zeblaze.jpg" alt=""></div>
    </div>
    <a class="btn btn-primary text-white p-center px-4 py-3" href="">Discover All Brands</a>
    <div class="supports">
      <div class="col-md-3">
        <div class="col-md-12">
          <i class="fa-solid fa-heart-circle-plus"></i>
          <p class="text">
            Online Support
          </p>
        </div>
      </div>
      <div class="col-md-3">
        <div class="col-md-12">
          <i class="fa-solid fa-gift"></i>
          <p class="text">
            Official Product
          </p>
        </div>
      </div>
      <div class="col-md-3">
        <div class="col-md-12">
          <i class="fa-solid fa-truck-fast"></i>
          <p class="text">
            Fastest Delivery </p>
        </div>
      </div>
      <div class="col-md-3">
        <div class="col-md-12">
          <i class="fa-solid fa-shield-halved"></i>
          <p class="text">
            Secure Payment
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
require "footer.php";
?>
