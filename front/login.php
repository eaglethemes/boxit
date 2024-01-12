
<?php include 'header.php';?>




<section class=" bg-light p-5 ">
  <div class="container ">
    <div class="row">
    <div class="col-12 col-md-2">
        &nbsp;
      </div> 
      <div class="col-12 col-md-8 bg-white p-5">
        <h3 class="text-uppercase">Login</h3>
        <div class="row">
          <div class="col">
            <div class="form-floating mb-3 mt-3">
              <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required autocomplete="off" >
              <label for="email">Email</label>
            </div>
            <div class="form-floating mb-3 mt-3">
              <input type="password" class="form-control" id="email" placeholder="Enter password" name="email" required  autocomplete="new-password">
              <label for="email">Password</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="check1" name="option1" value="something" checked>
              <label class="form-check-label"><small class="text-muted">Remember me</small></label>
            </div>
            <div class="col mt-5"><a href="myaccount.php" class="btn btn-primary"  >Login</a></div>

            <div class="col mt-5"><a href="" data-bs-toggle="collapse" data-bs-target="#forgot_pass" >Forgot password</a></div>


            <div id="forgot_pass" class="collapse">
            <div class="form-floating mb-3 mt-3">
              <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required autocomplete="off" >
              <label for="email">Please enter your registered email address</label>
            </div>
            <div class="col "><input class="btn btn-primary" type="submit" value="Submit"></div>
            </div>


            

          </div>
        </div>
      </div>
      <div class="col-12 col-md-2">
        &nbsp;
      </div> 
    </div>
  </div>
</section>


<?php include 'footer.php';?>
