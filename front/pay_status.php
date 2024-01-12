
<?php include 'header.php';?>




<section class=" bg-light p-5 ">
  <div class="container ">
    <div class="row justify-content-center py-5">
      <div class="col-12 col-md-4 ">
          <div class="card text-center">
            <div class="card-body">
              <div class="tick-container-body">
                  <div class="tick-container">
                      <div class="tick"><i class="fa fa-check" aria-hidden="true"></i></div>
                  </div>
              </div>
              <div class="message py-5">Payment Successful!</div>
              <h5>Your Shipment has been booked successfully.</h5>
              <small>Visit My Shipment section for more information</small>
              <div class="d-grid py-4">
                <a href="my_package_readytoship.php" class="btn btn-primary btn-block">View Details</a>
              </div>
            </div>
          </div>
      </div>
    </div>

    <div class="row justify-content-center py-5">
      <div class="col-12 col-md-4 ">
          <div class="card text-center">
            <div class="card-body">
              <div class="tick-container-body">
                  <div class="cross-container">
                      <div class="cross"><i class="fa fa-times" aria-hidden="true"></i></div>
                  </div>
              </div>
              <div class="message py-5">Payment Failed!</div>
              <h5>Your Shipment haven't been placed!.</h5>
              <small>Visit My Package section for more information</small>
              <div class="d-grid py-4">
                <a href="my_package_readytoship.php" class="btn btn-primary btn-block">View Details</a>
              </div>
            </div>
          </div>
      </div>
    </div>


  </div>
</section>


<?php include 'footer.php';?>
