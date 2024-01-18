    <?php include 'head_meta.php';?>
    

    <section class="mb-3 ">
      <div class="login_box_v2">
        <div class="row g-0">
          <div class="col-12 col-md-6 left">
            <img src="./images/logo.png" class="img-fluid" />
            <h4>Sign-In</h4>
            <p>Access the customer panel using your email and password.</p>
            <div class="row py-3">
                <div class="col-12 mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="text" class="form-control" id="email" placeholder="Enter your email address" name="email">
                </div>
                <div class="col-12 mb-3">
                    <div class="d-flex justify-content-between">
                        <div class="">
                            <label for="email" class="form-label">Password:</label>
                        </div>
                        <div class="">
                            <small><a href="forgot.php">Forgot Password?</a></small>
                        </div>
                    </div>
                    <input type="text" class="form-control" id="email" placeholder="Enter your password" name="email">
                </div>
                <div class="col-12 mb-3">
                    <div class="d-grid">
                      <a href="index.php" class="btn btn-primary btn-block">Sign In</a>
                    </div>
                </div>
            </div>

            <hr>
            <p>New on our platform? <a href="register.php">Create an account</a> </p>
            <div class="">
                <?php include 'login_footer.php';?>
            </div>
            <div class="mt-3">
                <small>© 2023. All Rights Reserved.</small>
            </div>
          </div>
          <div class="col-12 col-md-6 right">
            <?php include 'login_right.php';?>
          </div>
        </div>      
      </div>
    </section>
    

    <?php include 'footer.php';?>