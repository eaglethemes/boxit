
<?php include 'header.php';?>


<section class="sub_heading p-5 text-black bg-light">
  <div class="container ">
    <h3>Ship Now</h3>
    <div class="stepper">
      <div class="step completed">
        <div class="step-label"></div>
        <div class="step-description">1. Package Details</div>
      </div>
      <div class="step completed">
        <div class="step-label"></div>
        <div class="step-description">2. Select Address</div>
      </div>
      <div class="step completed">
        <div class="step-label"></div>
        <div class="step-description">3. Select Service</div>
      </div>
      <div class="step active">
        <div class="step-label"></div>
        <div class="step-description">4. Make Payment</div>
      </div>
    </div>


    
    <section class="sel_payment">
      <div class="row justify-content-center">
        <div class="col-12 col-md-6 payment_gateay_box">
            <div class="card active">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 col-md-1">
                            <input class="form-check-input radio-button" type="radio" name="paymentOption" id="inlineRadio1" value="option1" checked="">
                        </div>
                        <div class="col-12 col-md">
                            <h5>PayPal</h5>
                        </div>
                        <div class="col-12 col-md-2">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b5/PayPal.svg/800px-PayPal.svg.png" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 col-md-1">
                            <input class="form-check-input radio-button" type="radio" name="paymentOption" id="inlineRadio2" value="option2">
                        </div>
                        <div class="col-12 col-md">
                            <h5>Stripe</h5>
                        </div>
                        <div class="col-12 col-md-2">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/ba/Stripe_Logo%2C_revised_2016.svg/512px-Stripe_Logo%2C_revised_2016.svg.png" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
          </div>
          <div class="col-12 col-md-4">
            <div class="card border-0 shadow-sm mb-3">
              <div class="card-body">
                <h6>Review Invoice</h6>
                <div class="row">
                  <div class="col-12 col-md-6 mb-2">
                    <p>Fedex Intl Economy</p>
                  </div>
                  <div class="col-12 col-md-6 mb-2">
                    <h5>$283</h5>
                  </div>
                  <div class="col-12 col-md-6 mb-2">
                    <p>Insurance</p>
                  </div>
                  <div class="col-12 col-md-6 mb-2">
                    <h5>$283</h5>
                  </div>
                  <div class="col-12 col-md-6 mb-2">
                    <p>Total</p>
                  </div>
                  <div class="col-12 col-md-6 mb-2">
                    <h3>$2928</h3>
                  </div>
                </div>
              </div>
            </div>
            <div class="d-grid">
              <a href="pay_status.php" class="btn btn-primary btn-block btn-lg">Make Payment</a>
            </div>
          </div>
      </div>
      
    </section>
  </div>
</section>





<?php include 'footer.php';?>
