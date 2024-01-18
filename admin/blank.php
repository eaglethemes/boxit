<?php include 'head_meta.php';?>
    <div class="wrapper">
        <?php include 'left.php';?>
        <!-- Main content area Starts -->
            <div class="main-content">
              <?php include 'header.php';?>
            

              <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="#">Home</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Orders</li>
                  </ol>
              </nav>
              <div class="row mb-2">
                  <div class="col-12 col-md mt-3">
                      <div class="d-flex">
                      <div class="">
                          <h2>Orders</h2>
                      </div>
                      <div class="ps-2 ">
                          <select class="form-select form-select-sm">
                              <option>All</option>
                              <option>Domestic</option>
                              <option>International</option>
                          </select>   
                      </div>
                      </div>
                  </div>
                  <div class="col-12 col-md-5 text-end">
                      <a href="#" class="btn btn-secondary">Upload Orders</a>
                      <a href="create_order_1.php" class="btn btn-primary">Create New Order</a>
                  </div>
              </div>
            </div>
        <!-- Main content area END -->
    </div>
<?php include 'footer.php';?>
