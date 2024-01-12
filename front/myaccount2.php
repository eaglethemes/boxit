
<?php include 'header.php';?>

<?php include 'customer_menu.php';?>


<section class=" bg-light p-5 ">
  <div class="container-fluid ">
    <div class="row justify-content-center py-3">
        <div class="col-12 col-md-8">
          <div class="card shadow-sm">
            <div class="card-body">
              <div class="row">
                <div class="col custom_shipment_listing">
                  <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          <i class="fa fa-cube" aria-hidden="true"></i> Received Packages
                          <span>0</span>
                        </button>
                      </h2>
                      <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          <table class="table ">
                              <tbody>
                                <tr>
                                  <td>
                                    <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    </div>
                                  </td>
                                  <td>
                                    <h4><a href="">P3456786567</a></h4>
                                    <strong>Tracking #:</strong>12345678765
                                  </td>
                                  <td>
                                    <h4>None</h4>
                                    <strong>Received Date:</strong>12-12-2024
                                  </td>
                                  <td>
                                    <h5>Amazon</h5>
                                    <a href="">(see image)</a>
                                  </td>
                                  <td>
                                    <a href="#" class="btn btn-sm btn-primary"  data-bs-toggle="offcanvas" data-bs-target="#package_detail">Edit</a>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          <i class="fa fa-cube" aria-hidden="true"></i> Saved Packages
                          <span>0</span>
                        </button>
                      </h2>
                      <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                          <i class="fa fa-cube" aria-hidden="true"></i> Processing Packages
                          <span>0</span>
                        </button>
                      </h2>
                      <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                          <i class="fa fa-cube" aria-hidden="true"></i> Ready to Ship Packages
                          <span>0</span>
                        </button>
                      </h2>
                      <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                          <i class="fa fa-cube" aria-hidden="true"></i> Shipped Packages
                          <span>0</span>
                        </button>
                      </h2>
                      <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>
</section>



<!-- Offcanvas Sidebar -->
<section class="shipment_info_offcanvas ">
  <div class="offcanvas offcanvas-end" id="package_detail">
    <div class="offcanvas-header">
      <h1 class="offcanvas-title">Package Details</h1>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body ">
      <div class="row">
          <div class="col-12 col-md-12 ">
            <div class="card border-0 mb-3">
              <div class="card-body">
                  <div class="d-flex ">
                      <div class="border-end pe-3">
                        <i class="fa fa-cube" aria-hidden="true"></i>
                      </div>
                      <div class="ps-3 ">
                          <h6>General Information</h6>
                      </div>
                  </div>
                  <hr>
                  <div class="row">
                      <div class="col-12 col-md-6 mb-2">
                          <small class="text-muted">Package Code</small>
                          <p>P67898768</p>
                      </div>
                      <div class="col-12 col-md-6 mb-2">
                          <small class="text-muted">Time of Arrival</small>
                          <p>11 Jul 2023 03:41 PM</p>
                      </div>
                      <div class="col-12 col-md-6 mb-2">
                          <small class="text-muted">Origin</small>
                          <p>Amazon.com</p>
                      </div>
                      <div class="col-12 col-md-6 mb-2">
                          <small class="text-muted">Warehouse</small>
                          <p>JPR - India</p>
                      </div>
                      <div class="col-12 col-md-6 mb-2">
                          <small class="text-muted">Tracking Code</small>
                          <p>4567876567</p>
                      </div>
                      <div class="col-12 col-md-6 mb-2">
                          <small class="text-muted">Size</small>
                          <p>3x3x4</p>
                      </div>
                      <div class="col-12 col-md-6 mb-2">
                          <small class="text-muted">Weight</small>
                          <p>1KG</p>
                      </div>
                      <div class="col-12 col-md-6 mb-2">
                          <small class="text-muted">Invoice</small>
                          <p><small><a href="">View Invoice</a></small></p>
                      </div>
                      <div class="col-12 col-md-6 mb-2">
                          <small class="text-muted">Image</small>
                          <p><a href="" target="_blank"><img src="https://picsum.photos/600" class="img-fluid" /></a></p>
                      </div>
                  </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-12">
          <div class="card border-0 mb-3">
              <div class="card-body">
                  <div class="d-flex ">
                      <div class="border-end pe-3">
                        <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                      </div>
                      <div class="ps-3 ">
                          <h6>Custom Information</h6>
                      </div>
                  </div>
                  <hr>
                  <div class="alert alert-info">
                    <small>Information below is used for custom puposes and must match retailer invoice.</small>
                  </div>
                  <div class="row">
                      <div class="col-12 col-md-12 mb-2">
                          <small class="text-muted">Item Description</small>
                          <input type="text" class="form-control form-control-sm" id="text" placeholder="Enter Description">
                      </div>
                      <div class="col-12 col-md-6 mb-2">
                          <small class="text-muted">Quantity</small>
                          <input type="text" class="form-control form-control-sm" id="text" placeholder="Enter Quantity">
                      </div>
                      <div class="col-12 col-md-6 mb-2">
                          <small class="text-muted">Price Per Item</small>
                          <input type="text" class="form-control form-control-sm" id="text" placeholder="Enter Price Per Item">
                      </div>
                      <div class="col-12 col-md-12 mb-2 text-end">
                          <small class="text-muted">Total Custom Values</small>
                          <h5>$456.90</h5>
                      </div>
                  </div>
              </div>
            </div>
          </div>
      </div>
      <div class="d-grid">
        <a href="" class="btn btn-primary btn-block">Update</a>
      </div>
    </div>
  </div>
</section>
<!-- Offcanvas Sidebar -->


<?php include 'footer.php';?>
