<?php
include "header.php";
?>
<section class="login bg-tertiary">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="col-md-12">
          <div class="video-box">
            <img class="img-fluid" src="assets/fast-working-monochromatic (1).svg" alt="">
          </div>
        </div>
      </div>
      <div class="col-md-6 login-right">
        <div class="col-md-12">
          <h1 class="h2 text-center pt-2">Welcome Back</h1>
          <hr>
          <form action="php/login.inc.php" method="POST">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input name="email" placeholder="Type your email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input name="password" placeholder="Type your password" type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <a class="forgot btn text-primary" href="">Forgot Password?</a>
            <button type="submit" class="btn btn-primary ">Login</button>
            <a class="btn login-register" href="signup.php">
              Don't have an account?
              <span class="text-danger">
                Register Now!

              </span> </a>
        </div>
      </div>
    </div>
  </div>
</section>


<?php
include "footer.php";
?>
