<?php include 'head_meta.php';?>
    

    <section class="mb-3 ">
      <div class="login_box_v2">
        <div class="row g-0">
          <div class="col-12 col-md-6 left">
            <img src="./images/logo.png" class="img-fluid" />
            <h4>OTP Verification</h4>
            <p>We have sent an OTP to your email. Please check your Email Inbox or Spam folder and confirm it.</p>
            <div class="row py-3">
                <div class="col-12 mb-3">
                    <label for="email" class="form-label">Confirm OTP:</label>
                    <input type="text" class="form-control" id="email" placeholder="Enter six digit OTP" name="email">
                </div>
                <div class="col-12 mb-3">
                    <div class="d-grid">
                      <a href="create_password.php" class="btn btn-primary btn-block">Confirm OTP</a>
                    </div>
                </div>
            </div>

            <hr>
            <p><a href="">Return to login</a> </p>
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