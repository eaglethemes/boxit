
<?php include 'header.php';?>


<?php include 'customer_menu.php';?>

<section class=" bg-light p-5 ">
  <div class="container ">
    <div class="row justify-content-center">
        <div class="col-12 col-md-6">
          <h2>My Wallet</h2>
          <div class="row">
            <div class="col-12 ">
              <div class="wallet_card shadow-sm">
                  <div class="wallet_card_box">
                      <div class="row">
                          <div class="col-12 col-md">
                              <h5>Wallet Balance</h5>
                              <h1>$74.49</h1>
                              <h6>$95.37 spent in last 30 days</h6>
                          </div>
                          <div class="col-12 col-md-4 text-end">
                              <a href="#" class="btn btn-light text-dark" data-bs-toggle="modal" data-bs-target="#add_money">Rechareg Wallet</a>
                          </div>
                      </div>
                  </div>
              </div>
            </div>
            <div class="col-12 wallet_trans">
              <div class="list-group mt-3">
                <a href="#" class="list-group-item d-flex justify-content-between">
                    <div class="d-flex">
                        <div class="debit"><i class="fa fa-arrow-left" aria-hidden="true"></i></div>
                        <div class="ps-2 ">
                          <h6>Booked Shipment #1200025</h6>
                          <small class="text-muted">Today, 13:45</small>
                        </div>
                    </div>
                  <div><h5>-$198.25</h5></div>
                </a>
                <a href="#" class="list-group-item d-flex justify-content-between">
                  <div class="d-flex">
                      <div class="credit"><i class="fa fa-arrow-right" aria-hidden="true"></i></div>
                      <div class="ps-2 ">
                        <h6>Wallet Recharged - PayPal TID: #5873837487</h6>
                        <small class="text-muted">Today, 13:45</small>
                      </div>
                  </div>
                <div><h5>+$198.25</h5></div>
                </a>
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>
</section>


<?php include 'footer.php';?>




<!-- The Modal -->
<div class="modal" id="add_money">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Recharge Wallet</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <input type="number" class="form-control" id="text" placeholder="Enter the amount" required>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <a href="wallet_recharge.php" class="btn btn-primary">Add Money</a>
      </div>

    </div>
  </div>
</div>