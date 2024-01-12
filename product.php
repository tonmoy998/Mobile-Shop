<?php
require "header.php";
require 'php/functions.inc.php';
$id = $_GET['id'];
foreach ($mobile->getData() as $item) :
  if ($item['id'] == $id) :
?>
    <section class="product">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="col-md-12">
              <div class="video-box">
                <img class="img-fluid" src="<?php echo $item['path'] ?>" alt="">
              </div>
              <div class="d-flex links">
                <a class="btn btn-dark" href="">Add to Cart</a>
                <a class="btn btn-warning" href="">Move to Whislist</a>
              </div>
            </div>
          </div>
          <div class="col-md-6 details">
            <div class="col-md-12">
              <h1 class="h1 mt-3"><?php echo $item['name'] ?></h1>
              <p class="text">by <span class="text-primary"><?php echo $item['brand'] ?></span></p>
              <div class="ratings">
                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
              </div>
              <p class="text mt-4">Regular price <del class="f-oopen"> $789</del></p>
              <p class="text">Price : $ <?php echo $item['price'] ?></p>
              <p class="text">You save $152</p>
              <div class="d-flex icons mt-4">
                <div class="box">
                  <i class="fa-solid fa-repeat"></i>
                  <p class="text"> 10 Days return
                  </p>
                </div>
                <div class="box">
                  <i class="fa-solid fa-truck-fast mx-3"></i>
                  <p class="text">Fast delivery</p>
                </div>
                <div class="box">
                  <i class="fa-solid fa-check-double mx-3"></i>
                  <p class="text">Secure Payment</p>
                </div>
              </div>
              <p class="text">Delivery by 14 Jan - 20 Jan</p>
              <p class="text">sold by <span class="text-primary">Mote SHop
                  <i class="fa-solid fa-circle-check"></i>
                </span></p>
              <label class="text" for="color">Color</label>
              <div class="d-flex colors">
                <div class="color-purple color"></div>
                <div class="color-dark color mx-2"></div>
                <div class="color-silver color mx-2"></div>
              </div>
              <label class="text mt-3" for="">Ram</label>
              <div class="d-flex">
                <div class="ram-box">
                  4GB RAM
                </div>
                <div class="ram-box mx-3">
                  6GB RAM
                </div>
                <div class="ram-box mx-3">
                  8GB RAM
                </div>
              </div>

            </div>
          </div>
        </div>

        <h1 class="h2">Product Descripton</h1>
        <hr>
        <p class="des">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
        <p class="des-2">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
      </div>

      <?php
      require 'footer.php';
      ?>
    </section>
<?php
  endif;
endforeach;
?>
