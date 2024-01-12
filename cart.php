<?php
include "header.php";
require 'php/functions.inc.php';

// print_r($cart->getData($table = "cart"));
session_start();

$user = $_SESSION['user'];
$query = "SELECT * FROM cart WHERE email='{$user}'";
$result = $db->con->query($query);

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $cartIds[] = $row['id'];
  }

  $idList = implode(',', $cartIds);
  $searchSql = "SELECT * FROM mobile WHERE id IN ({$idList}) ORDER BY date";
  $searchResult = $db->con->query($searchSql);

  if ($searchResult->num_rows > 0) {
    while ($row = $searchResult->fetch_assoc()) {
      $products[] = $row;
    }
  }
}

?>
<section class="cart bg-tertiary">
  <div class="container">
    <h1 class="h1 text-center pt-3 pb-3">
      <i class="fa-regular fa-rectangle-list"></i>
      My Cart
    </h1>
    <?php foreach ($products as $product) { ?>
      <div class="row current-product mt-3">
        <div class="col-md-6">
          <div class="col-md-12">
            <div class="d-flex flex-items left">
              <div class="d-flex flex-column">
                <div class="video-box"><img class="img-fluid" src="<?php echo $product['path'] ?>" alt=""></div>
                <p class="name text-center h6"><?php echo $product['name'] ?></p>
              </div>
              <div class="details">
                <div class="color d-inline">Color <div class="color-bg"></div>
                </div>
                <div class="ram">Ram 6GB</div>
              </div>

              <div class="quantity">
                <div class="form-outline">
                  <label class="form-label" for="typeNumber">Quantity</label>
                  <input type="number" class="form-control" value="1" />
                </div>
              </div>

              <div class="total">
                <p class="text">Total</p>
                <p class="price" id="price">$<?php echo $product['price'] ?></p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 details">
          <div class="col-md-12 d-flex right">
            <div class="d-flex form-group">
              <input class="form-control" id="" type="text" name="" placeholder="Enter Promo Code">
              <button class="btn btn-dark" type="submit">Sumit</button>
            </div>
            <div class="d-flex">
              <p class="shipping">
                Shipping cost
              </p>
              <p>
                $2.85
              </p>
            </div>
            <div class="d-flex">
              <p class="tax">Tax</p>
              <p>$0.87</p>
            </div>
            <div class="d-flex border-top">
              <p class="cost">Total cost</p>
              <p id="totalCost">$<?php echo $product['price'] ?></p>
            </div>
          </div>
          <a class="btn btn-success text-white p-center" href="">Pay Now</a>
        </div>
        <div class="d-flex flex-btns mt-2">
          <form action="">
            <button class="text-grey btn btn-edit" href="">Edit</button>
          </form>
          <form action="" class="remove-product mx-2">
            <input type="hidden" name="email" value="<?php echo $_SESSION['user'] ?>">
            <input type="hidden" name="productId" value="<?php echo $product['id'] ?>">
            <button type="button" class="text-grey btn btn-remove" onclick="removeProduct(this)">Remove</button>
          </form>
          <form action="">
            <button class="text-grey btn btn-whistlist" href="">Move to Whislist</button>
          </form>
        </div>
      </div>
    <?php } ?>
  </div>
</section>

<?php
include "footer.php";
?>
