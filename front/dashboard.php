
<?php include 'header.php';?>

<?php include 'customer_menu.php';?>

<section class=" bg-light p-5 ">
  <div class="container ">
    <h2>Dashboard</h2>
    <div class="row dash_warehouse">
      <div class="row">
          <div class="col-12 col-md-8">
            <section>
              <div class="row">
                <div class="col-12 col-md-6 ">
                  <div class="wallet_card shadow-sm">
                      <div class="wallet_card_box">
                          <div class="row">
                              <div class="col-12 col-md">
                                  <h5>Wallet Balance</h5>
                                  <h1>$74.49</h1>
                                  <h6>$95.37 spent in last 30 days</h6>
                              </div>
                              <div class="col-12 col-md-4 text-end">
                                  <a href="wallet.php">Wallet Transitions</a>
                              </div>
                          </div>
                      </div>
                  </div>
                </div>
                <div class="col-12 col-md-6 ">
                  <div class="shipment_card shadow-sm">
                      <div class="shipment_card_box">
                          <div class="row">
                              <div class="col-12 col-md">
                                  <h5>Ready to Ship Packages</h5>
                                  <h1>2</h1>
                                  <h6>28 shippped in last 30 days</h6>
                              </div>
                              <div class="col-12 col-md-4 text-end">
                                  <a href="my_package_readytoship.php">Package List</a>
                              </div>
                          </div>
                      </div>
                  </div>
                </div>
              </div>
            </section>
            <section class="pt-5 top_state">
              <div class="row">
                <div class="col-12 col-md-4 mb-4">
                    <div class="card border-0 shadow p-1">
                        <div class="card-body">
                            <div class="row d-block d-xl-flex align-items-center">
                                <div class="col-6 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                                    <div class="icon-shape icon-shape-primary rounded me-4 me-sm-0">
                                        <i class="fa fa-cube fa-2x" aria-hidden="true"></i>
                                    </div>
                                </div>
                                <div class="col-6 col-xl-7 px-xl-0">
                                    <div class="d-none d-sm-block">
                                        <h3 class="fw-extrabold mb-2">
                                            <a href="my_package_readytoship.php">My Packages</a>
                                        </h3>
                                    </div>
                                    <h5 class="text-muted">0</h5> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card border-0 shadow p-1">
                        <div class="card-body">
                            <div class="row d-block d-xl-flex align-items-center">
                                <div class="col-6 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                                    <div class="icon-shape icon-shape-primary rounded me-4 me-sm-0">
                                        <i class="fa fa-cubes fa-2x" aria-hidden="true"></i>
                                    </div>
                                </div>
                                <div class="col-6 col-xl-7 px-xl-0">
                                    <div class="d-none d-sm-block">
                                        <h3 class="fw-extrabold mb-2">
                                            <a href="my_shipment.php">My Shipments</a>
                                        </h3>
                                    </div>
                                    <h5 class="text-muted">0</h5> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-12 col-md-4 mb-4">
                  <div class="card border-0 shadow p-1">
                      <div class="card-body">
                          <div class="row d-block d-xl-flex align-items-center">
                              <div class="col-6 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                                  <div class="icon-shape icon-shape-primary rounded me-4 me-sm-0">
                                      <i class="fa fa-map-pin fa-2x" aria-hidden="true"></i>
                                  </div>
                              </div>
                              <div class="col-6 col-xl-7 px-xl-0">
                                  <div class="d-none d-sm-block">
                                      <h3 class="fw-extrabold mb-2">
                                          <a href="">My Address Book</a>
                                      </h3>
                                  </div>
                                  <h5 class="text-muted">0</h5> 
                              </div>
                          </div>
                      </div>
                  </div>
                </div>  
                  
              </div>
          </section>
          <section class="">
            <div class="container buy4me_o">
              <div class="row p-4">
                  <div class="col-12 col-md">
                    <h6>Found something you love at a store?</h6>  
                    <h2>Let us buy it for you :)</h2>   
                  </div>
                  <div class="col-12 col-md-4">
                    <div class="d-grid">
                      <a href="" class="btn btn-light btn-block">Buy4me</a>
                    </div>
                  </div>
              </div>
            </div>
          </section>
          <section>
            <div class="row justify-content-center py-3">
              <div class="col-12 col-md">
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
                                          <a href="#" class="btn btn-sm btn-primary" data-bs-toggle="offcanvas" data-bs-target="#package_detail">Edit</a>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
                              </div>
                            </div>
                          </div>
                          <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <i class="fa fa-hourglass-half" aria-hidden="true"></i> Processing Packages
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
                                <i class="fa fa-check-circle" aria-hidden="true"></i> Ready to Ship Packages
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
                                <i class="fa fa-plane" aria-hidden="true"></i> Shipped Packages
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
                            <h2 class="accordion-header" id="headingTwo">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <i class="fa fa-hand-paper-o" aria-hidden="true"></i> Hold Packages
                                <span>0</span>
                              </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
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
          <section class="pro_options">
            <div class="list-group ">
              <a href="#" class="list-group-item list-group-item-action">
                <i class="fa fa-user-circle" aria-hidden="true"></i> Update Profile
                  <span class="float-end"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
              </a>
              <a href="#" class="list-group-item list-group-item-action">
                <i class="fa fa-lock" aria-hidden="true"></i> Change Password
                  <span class="float-end"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
              </a>
              <a href="#" class="list-group-item list-group-item-action">
                <i class="fa fa-sign-out" aria-hidden="true"></i> Logout
                  <span class="float-end"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
              </a>
          </div>
          </section>
          </div>
          <div class="col-12 col-md-4">
            <div class="accordion" id="accordionExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <img src="img/flags/united-states.svg" class="img-fluid" />  Your United States Free Address
                  </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <section>
                      <div class="row">
                        <div class="col-12 col-md">
                          <small class="text-muted">Account Code</small>
                          <p>56768799</p>
                        </div>
                        <div class="col-12 col-md-2 text-end">
                          <a href="#" class="btn btn-primary">
                            <i class="fa fa-clone" aria-hidden="true"></i>
                          </a>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-12 col-md">
                          <small class="text-muted">Name</small>
                          <p>Gibiwi Jimal</p>
                        </div>
                        <div class="col-12 col-md-2 text-end">
                          <a href="#" class="btn btn-primary">
                            <i class="fa fa-clone" aria-hidden="true"></i>
                          </a>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-12 col-md">
                          <small class="text-muted">Address Line 1</small>
                          <p>472 Amherst St.</p>
                        </div>
                        <div class="col-12 col-md-2 text-end">
                          <a href="#" class="btn btn-primary">
                            <i class="fa fa-clone" aria-hidden="true"></i>
                          </a>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-12 col-md">
                          <small class="text-muted">Address Line 2</small>
                          <p>Unit 7831755</p>
                        </div>
                        <div class="col-12 col-md-2 text-end">
                          <a href="#" class="btn btn-primary">
                            <i class="fa fa-clone" aria-hidden="true"></i>
                          </a>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-12 col-md">
                          <small class="text-muted">City</small>
                          <p>Nashua</p>
                        </div>
                        <div class="col-12 col-md-2 text-end">
                          <a href="#" class="btn btn-primary">
                            <i class="fa fa-clone" aria-hidden="true"></i>
                          </a>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-12 col-md">
                          <small class="text-muted">State</small>
                          <p>NH</p>
                        </div>
                        <div class="col-12 col-md-2 text-end">
                          <a href="#" class="btn btn-primary">
                            <i class="fa fa-clone" aria-hidden="true"></i>
                          </a>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-12 col-md">
                          <small class="text-muted">Zip Code</small>
                          <p>03063</p>
                        </div>
                        <div class="col-12 col-md-2 text-end">
                          <a href="#" class="btn btn-primary">
                            <i class="fa fa-clone" aria-hidden="true"></i>
                          </a>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-12 col-md">
                          <small class="text-muted">Phone</small>
                          <p>781-491-0874</p>
                        </div>
                        <div class="col-12 col-md-2 text-end">
                          <a href="#" class="btn btn-primary">
                            <i class="fa fa-clone" aria-hidden="true"></i>
                          </a>
                        </div>
                      </div>
                    </section>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    <img src="img/flags/united-kingdom.svg" class="img-fluid" />  Your United Kingdom Free Address
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
                    <img src="img/flags/germany.svg" class="img-fluid" />  Your United States Free Address
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
</section>


<?php include 'footer.php';?>
