
<?php include 'header.php';?>




<section class=" bg-light p-5 ">
  <div class="container ">
    <div class="row">
    <div class="col-12 col-md-2">
        &nbsp;
      </div> 
      <div class="col-12 col-md-8 bg-white p-5">
        <h3 class="text-uppercase">Join</h3>
        <div class="row">
          <div class="col">
            <div class=" mb-3 mt-3">
              <label for="email">Full Name</label>
              <input type="email" class="form-control" id="email" placeholder="Enter full name" name="email" required autocomplete="off" >
            </div>
            <div class="mb-3 mt-3">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required autocomplete="off" >
            </div>
            <div class="mb-3 mt-3">
              <label for="email">Phone</label>
              <input type="email" class="form-control" id="email" placeholder="Enter phone number" name="email" required autocomplete="off" >
            </div>
            <div class="mb-3 mt-3">
              <label for="email">Choose Country</label>
              <select class="form-select">
                <option>Please select country</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
              </select>
            </div>
            <div class="mb-3 mt-3">
              <label for="email">Password</label>
              <input type="password" class="form-control" id="email" placeholder="Enter password" name="email" required  autocomplete="new-password">
            </div>
            <div class="mb-3 mt-3">
              <label for="email">Confirm Password</label>
              <input type="password" class="form-control" id="email" placeholder="Confirm password" name="email" required  autocomplete="new-password">
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="check1" name="option1" value="something" checked>
              <label class="form-check-label"><small class="text-muted">I confirm all terms and conditions</small></label>
            </div>
            <div class="col mt-5"><a href="myaccount.php" class="btn btn-primary"  >Join Now</a></div>

            <div class="col mt-5"><a href="login.php"  >Already an account? Please Login</a></div>




            

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
