<?php include 'header.php';?>

<section class="sub_heading p-3 bg-white">
  <div class="container">
    <div class="row">
      <div class="col">
        <h3 class="fw-light">New Shipment</h3>
        
      </div>
      <div class="col-3">
        <nav aria-label="breadcrumb justify-content-end">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="myaccount.php">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a href="my_shipments_incoming.php">Incoming Shipment List</a></li>
          </ol>
        </nav>
        
      </div>
    </div>
  </div>
</section>


<section class="bg-light p-5">
  <div class="container">
    <div class="row">
      <div class="col">
        &nbsp;
      </div>
      <div class="col-12 col-md-9 add_shipment">
        <div class="card shadow-sm p-3">
          <div class="card-body">
            <section>
              <h6 class="fs-5 text-uppercase mb-3">Choose Warehouse</h6>
              <div class="row ">
                <div class="col-4 choo_warehou_box">
                  <div class="d-flex p-3 border choo_warehou_box_1">
                    <div class="p-2 ">
                      <input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1" >
                    </div>
                    <div class="p-2 ">
                      <img src="img/flags/united-kingdom.svg" class="img-fluid"> <span class="fw-bold">United Kingdom</span>
                      <p class="pt-3"><span class="text-primary">Account #293983834</span> <br>
                        49 London Wall, London EC2M 5TE, United Kingdom</p>
                    </div>
                  </div>
                </div>
                <div class="col-4 choo_warehou_box">
                  <div class="d-flex p-3 border choo_warehou_box_1">
                    <div class="p-2 ">
                      <input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1" >
                    </div>
                    <div class="p-2 ">
                      <img src="img/flags/united-states.svg" class="img-fluid"> <span class="fw-bold">United States</span>
                      <p class="pt-3"><span class="text-primary">Account #293983834</span> <br>
                        32 NY, New York EC2M 5TE, USA</p>
                    </div>
                  </div>
                </div>
                <div class="col-4 choo_warehou_box ">
                  <div class="d-flex p-3 border choo_warehou_box_1">
                    <div class="p-2 ">
                      <input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1" checked>
                    </div>
                    <div class="p-2 ">
                      <img src="img/flags/canada.svg" class="img-fluid"> <span class="fw-bold">Canada</span>
                      <p class="pt-3"><span class="text-primary">Account #293983834</span> <br>
                        MK Tree, CMA EC2M 5TE, Canada</p>
                    </div>
                  </div>
                </div>
               </div>
            </section>
            <hr>
            <section>
              <h6 class="fs-5 text-uppercase mb-3">Store Info</h6>
              <div class="row">
                <div class="col-4">
                  <label for="email" class="form-label">Choose Store <small class="text-danger">*</small></label>
                  <select class="form-select ">
                    <option>Select</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                  </select>
                </div>
                <div class="col-4">
                    <label for="email" class="form-label">Tracking No</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter Tracking AWB#" name="email">
                </div>
                <div class="col-4">
                    <label for="email" class="form-label">Order Invoice</label>
                    <input type="file" class="form-control" id="email" placeholder="Enter Tracking AWB#" name="email">
                </div>
                <div class="col-12 mt-3">
                  <label for="email" class="form-label">SPECIAL INSTRUCTIONS</label>
                  <input type="email" class="form-control" id="email" placeholder="SPECIAL INSTRUCTIONS" name="email">
                </div>
              </div>
            </section>
            <hr>
            <section class="mb-3">
              <div class="row">

                <h6 class="fs-5 text-uppercase mb-3">Shipment Information</h6>
                <div class="col">
                  <div class="col-lg-3 col-12">
                    <label for="email" class="form-label">No. of Product(s)</label>
                    <select class="form-select ">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                    </select>
                  </div>
                </div>
              </div>
            </section>
            

            <section class="p-3  bg-light  border-start border-primary border-5">
              <h6 class="pt-4 text-primary">Product #1 Details</h6> 
                <div class="row">
                  <div class="col-9">
                    <div class="mb-3">
                      <label for="email" class="form-label">Enter Product Name <small class="text-danger">*</small></label>
                      <input
                        type="text"
                        class="form-control"
                        id=""
                        placeholder="Enter Product Name"
                        name=""
                        required=""
                      />
                    </div>
                  </div>
                  <div class="col">
                    <div class="mb-3">
                      <label for="email" class="form-label">Est. Value (USD) <small class="text-danger">*</small></label>
                      <input
                        type="text"
                        class="form-control"
                        id=""
                        placeholder="Value"
                        name=""
                        required=""
                      />
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <div class="mb-3">
                      <label for="email" class="form-label">Product Web URL</label>
                      <input
                        type="text"
                        class="form-control"
                        id=""
                        placeholder="Ener product website url"
                        name=""
                        required=""
                      />
                    </div>
                  </div>
                 </div>
                <div class="row">
                  <h6 class="pt-3">Dimension <small class="text-muted">(Optional)</small></h6>
                  <div class="col">
                    <div class="mb-3">
                      <label for="email" class="form-label">Est. Height</label>
                      <input
                        type="text"
                        class="form-control"
                        id=""
                        placeholder="Height in inches"
                        name=""
                        required=""
                      />
                    </div>
                  </div>
                  <div class="col">
                    <div class="mb-3 ">
                      <label for="email" class="form-label">Est. Width</label>
                      <input
                        type="text"
                        class="form-control"
                        id=""
                        placeholder="Width in inches"
                        name=""
                        required=""
                      />
                    </div>
                  </div>
                  <div class="col">
                    <div class="mb-3 ">
                      <label for="email" class="form-label">Est. Length</label>
                      <input
                        type="text"
                        class="form-control"
                        id=""
                        placeholder="Length in inches"
                        name=""
                        required=""
                      />
                    </div>
                  </div>
                  <div class="col">
                    <div class="mb-3 ">
                      <label for="email" class="form-label">Est. Weight</label>
                      <input
                        type="text"
                        class="form-control"
                        id=""
                        placeholder="Weight in lbs"
                        name=""
                        required=""
                      />
                    </div>
                  </div>
                </div>
            </section>

            
            
            <section class=" pt-4">
              <a href="" class="btn btn-primary btn-lg"
                >Add Shipment</a
              >
            </section>
          </div>
        </div>
      </div>

      <div class="col">
        &nbsp;
      </div>
    </div>
  </div>
</section>

<?php include 'footer.php';?>
