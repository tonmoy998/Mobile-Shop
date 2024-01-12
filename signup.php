<?php
require "php/functions.inc.php";
require "header.php";
?>

<section class="signup bg-tertiary">
  <div class="container p-4">
    <div class="d-flex title">
      <h1 class="h1 mt-3 pb-2">Create your Mote Account</h1>
      <div class="d-flex login-part">
        <p class="h6 mx-2 mt-1">Already member ?</p>
        <a class="btn btn-primary text-white px-3 py-2" href="login.php">Login</a>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="col-md-12">
          <form method="POST" action="php/signup.inc.php">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" name="password">
              <div id="emailHelp" class="form-text">Password must contain min 8 letters</div>
            </div>
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" name="checkbox" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Send me offers and updates</label>
            </div>
            <button type="submit" class="btn btn-success text-white px-3 py-2">Sign Up</button>
          </form>

          <p class="mt-4 f-poppins">Or, signin with</p>
          <div class="d-flex social">
            <a class="facebook  d-inline btn btn-primary text-white h5 py-2" href="">
              <i class="fa-brands fa-square-facebook mx-1"></i>
              Facebook
            </a>
            <a class="google mx-2 d-inline btn btn-primary text-white h5 py-2" href="">
              <i class="fa-brands fa-google mx-1"></i>
              Google
            </a>
          </div>

        </div>

      </div>
      <div class="col-md-6">
        <div class="col-md-12">
          <img class="img-fluid" src="assets/web/love.svg" alt="">
        </div>
      </div>
    </div>
</section>
<?php
require "footer.php";
?>
