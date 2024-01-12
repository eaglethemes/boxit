
<?php include 'header.php';?>


<section class="sub_heading p-5 text-black bg-light">
  <div class="container ">
    <h3>Ship Now</h3>
    <div class="stepper">
      <div class="step completed">
        <div class="step-label"></div>
        <div class="step-description">1. Package Details</div>
      </div>
      <div class="step active">
        <div class="step-label"></div>
        <div class="step-description">2. Select Address</div>
      </div>
      <div class="step">
        <div class="step-label"></div>
        <div class="step-description">3. Select Service</div>
      </div>
      <div class="step">
        <div class="step-label"></div>
        <div class="step-description">4. Make Payment</div>
      </div>
    </div>


    
    <section class="sel_address">
      <div class="row">
          <div class="col-12 col-md-4">
            <div class="card border-0 shadow-sm mb-3 active">
              <div class="card-body">
                <h6>John Doe</h6>
                <p class="text-muted">Charter Way, Liskeard, Cornwall <br>United Kingdom - PL14 3XB</p>
                <p class="text-muted">Mob: +912345678901</p>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-4">
            <div class="card border-0 shadow-sm mb-3 ">
              <div class="card-body">
                <h6>John Doe</h6>
                <p class="text-muted">Charter Way, Liskeard, Cornwall <br>United Kingdom - PL14 3XB</p>
                <p class="text-muted">Mob: +912345678901</p>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-4">
            <div class="card border-0 shadow-sm mb-3 ">
              <div class="card-body mt-5">
                <a href="#" class="btn btn-primary">Add New</a>
              </div>
            </div>
          </div>
      </div>
    </section>
    <div class="row justify-content-end py-3">
        <div class="col-12 col-md-3">
          <div class="d-grid">
            <a href="shipnow_step-3.php" class="btn btn-primary btn-block btn-lg">Select Address</a>
          </div>
        </div>
    </div>
  </div>
</section>





<?php include 'footer.php';?>
