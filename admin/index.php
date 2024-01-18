<?php include 'head_meta.php';?>
    <div class="wrapper">
        <?php // include 'left.php';?>
        <!-- Main content area Starts -->
        <div class="main-content">
            <?php include 'header.php';?>
            
            <div class="container-fluid wrapper-inner">
                <div>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                        </ol>
                    </nav>
                </div>
                <h2>Dashboard</h2>
                <section class="my-3 mt-4 stat_box_req_main">
                    <h4 class="text-muted">Pending Requests</h4>
                    <div class="row mt-3">
                        <div class="col-12 col-md-6">
                            <div class="dash_nav mb-3">
                                <nav class="navbar navbar-expand-sm bg-light navbar-light">
                                    <ul class="navbar-nav">
                                        <li class="nav-item">
                                            <a class="nav-link active" href="#">Pending Requests</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Packages</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Shipments</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-12 col-md">
                            <div class="d-grid">
                              <a href="add_package.php" class="btn btn-outline-primary btn-sm btn-block"><i data-lucide="plus"></i> Add New Package</a>
                            </div>
                        </div>
                        <div class="col-12 col-md-3">
                            <div class="d-grid">
                              <a href="" class="btn btn-primary  btn-sm btn-block"><i data-lucide="plus"></i> Add New Shipment</a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-8">
                            <section class=" stat_box_req">
                                <div class="row">
                                    <div class="col-12 col-md-4 mb-3">
                                        <div class="card">
                                          <div class="card-body">
                                            <div class="d-flex justify-content-between">
                                                <div class="">
                                                    <h5>Consolidation Merge</h5>
                                                </div>
                                                <div class="ps-2 ">
                                                    <a href=""><i data-lucide="chevron-right"></i></a>
                                                </div>
                                            </div>
                                            <div class="row py-2">
                                                <div class="col-12 col-md-3">
                                                    <div class="icon">
                                                        <i data-lucide="boxes"></i>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md">
                                                    <h4>31</h4>
                                                    <small class="text-muted">Pending requets</small>
                                                </div>
                                            </div>
                                          </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 mb-3">
                                        <div class="card">
                                          <div class="card-body">
                                            <div class="d-flex justify-content-between">
                                                <div class="">
                                                    <h5>Consolidation</h5>
                                                </div>
                                                <div class="ps-2 ">
                                                    <a href=""><i data-lucide="chevron-right"></i></a>
                                                </div>
                                            </div>
                                            <div class="row py-2">
                                                <div class="col-12 col-md-3">
                                                    <div class="icon">
                                                        <i data-lucide="combine"></i>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md">
                                                    <h4>23</h4>
                                                    <small class="text-muted">Pending requets</small>
                                                </div>
                                            </div>
                                          </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 mb-3">
                                        <div class="card">
                                          <div class="card-body">
                                            <div class="d-flex justify-content-between">
                                                <div class="">
                                                    <h5>Inspection</h5>
                                                </div>
                                                <div class="ps-2 ">
                                                    <a href=""><i data-lucide="chevron-right"></i></a>
                                                </div>
                                            </div>
                                            <div class="row py-2">
                                                <div class="col-12 col-md-3">
                                                    <div class="icon">
                                                        <i data-lucide="view"></i>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md">
                                                    <h4>73</h4>
                                                    <small class="text-muted">Pending requets</small>
                                                </div>
                                            </div>
                                          </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 mb-3">
                                        <div class="card">
                                          <div class="card-body">
                                            <div class="d-flex justify-content-between">
                                                <div class="">
                                                    <h5>Additional Photos</h5>
                                                </div>
                                                <div class="ps-2 ">
                                                    <a href=""><i data-lucide="chevron-right"></i></a>
                                                </div>
                                            </div>
                                            <div class="row py-2">
                                                <div class="col-12 col-md-3">
                                                    <div class="icon">
                                                        <i data-lucide="camera"></i>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md">
                                                    <h4>28</h4>
                                                    <small class="text-muted">Pending requets</small>
                                                </div>
                                            </div>
                                          </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 mb-3">
                                        <div class="card">
                                          <div class="card-body">
                                            <div class="d-flex justify-content-between">
                                                <div class="">
                                                    <h5>Trash Package</h5>
                                                </div>
                                                <div class="ps-2 ">
                                                    <a href=""><i data-lucide="chevron-right"></i></a>
                                                </div>
                                            </div>
                                            <div class="row py-2">
                                                <div class="col-12 col-md-3">
                                                    <div class="icon">
                                                        <i data-lucide="trash"></i>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md">
                                                    <h4>1</h4>
                                                    <small class="text-muted">Pending requets</small>
                                                </div>
                                            </div>
                                          </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 mb-3">
                                        <div class="card">
                                          <div class="card-body">
                                            <div class="d-flex justify-content-between">
                                                <div class="">
                                                    <h5>Retrun Package</h5>
                                                </div>
                                                <div class="ps-2 ">
                                                    <a href=""><i data-lucide="chevron-right"></i></a>
                                                </div>
                                            </div>
                                            <div class="row py-2">
                                                <div class="col-12 col-md-3">
                                                    <div class="icon">
                                                        <i data-lucide="rotate-ccw"></i>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md">
                                                    <h4>2</h4>
                                                    <small class="text-muted">Pending requets</small>
                                                </div>
                                            </div>
                                          </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="list-group">
                                <a href="#" class="list-group-item list-group-item-action ">
                                    <div class="row">
                                        <div class="col-12 col-md-1">
                                            <i data-lucide="boxes"></i>
                                        </div>
                                        <div class="col-12 col-md">
                                            <strong>31</strong> Consolidation Merge requests are pending
                                        </div>
                                        <div class="col-12 col-md-1 text-end">
                                            <i data-lucide="chevron-right"></i>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action ">
                                    <div class="row">
                                        <div class="col-12 col-md-1">
                                            <i data-lucide="combine"></i>
                                        </div>
                                        <div class="col-12 col-md">
                                            <strong>23</strong> Consolidation requests are pending
                                        </div>
                                        <div class="col-12 col-md-1 text-end">
                                            <i data-lucide="chevron-right"></i>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action ">
                                    <div class="row">
                                        <div class="col-12 col-md-1">
                                            <i data-lucide="view"></i>
                                        </div>
                                        <div class="col-12 col-md">
                                            <strong>73</strong> Inspection requests are pending
                                        </div>
                                        <div class="col-12 col-md-1 text-end">
                                            <i data-lucide="chevron-right"></i>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action ">
                                    <div class="row">
                                        <div class="col-12 col-md-1">
                                            <i data-lucide="camera"></i>
                                        </div>
                                        <div class="col-12 col-md">
                                            <strong>28</strong> Additional Photos requests are pending
                                        </div>
                                        <div class="col-12 col-md-1 text-end">
                                            <i data-lucide="chevron-right"></i>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action ">
                                    <div class="row">
                                        <div class="col-12 col-md-1">
                                            <i data-lucide="trash"></i>
                                        </div>
                                        <div class="col-12 col-md">
                                            <strong>1</strong> Trash Package requests are pending
                                        </div>
                                        <div class="col-12 col-md-1 text-end">
                                            <i data-lucide="chevron-right"></i>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action ">
                                    <div class="row">
                                        <div class="col-12 col-md-1">
                                            <i data-lucide="rotate-ccw"></i>
                                        </div>
                                        <div class="col-12 col-md">
                                            <strong>2</strong> Retrun Package requests are pending
                                        </div>
                                        <div class="col-12 col-md-1 text-end">
                                            <i data-lucide="chevron-right"></i>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                
                </section>
                

                <section class="dash_warehouse">
                    <div class="row mt-4">
                        <div class="col-12 col-md-6">
                            
                            <h4 class="text-muted">Warehouse Stats</h4>
                        </div>
                        <div class="col-12 col-md">
                            
                        </div>
                        <div class="col-12 col-md-2 text-end">
                            <small>This Month</small>
                        </div>
                    </div>

                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <img src="../front/img/flags/united-states.svg" class="img-fluid">   NY, United States 
                            </button>
                          </h2>
                          <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <section class=" stat_box">
                                    <div class="row">
                                        <div class="col-12 col-md-3 mb-3">
                                            <div class="card">
                                              <div class="card-body">
                                                <div class="d-flex justify-content-between">
                                                    <div class="">
                                                        <h5>Received Packages</h5>
                                                    </div>
                                                    <div class="ps-2 ">
                                                        <a href=""><i data-lucide="chevron-right"></i></a>
                                                    </div>
                                                </div>
                                                <div class="row py-2">
                                                    <div class="col-12 col-md-2">
                                                        <div class="icon">
                                                            <i data-lucide="package-plus"></i>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md">
                                                        <h4>80</h4>
                                                        <small class="text-muted">vs last month <strong class="text-dark">1190</strong></small>
                                                    </div>
                                                </div>
                                              </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-3 mb-3">
                                            <div class="card">
                                              <div class="card-body">
                                                <div class="d-flex justify-content-between">
                                                    <div class="">
                                                        <h5>Ready to Ship Packages</h5>
                                                    </div>
                                                    <div class="ps-2 ">
                                                        <a href=""><i data-lucide="chevron-right"></i></a>
                                                    </div>
                                                </div>
                                                <div class="row py-2">
                                                    <div class="col-12 col-md-2">
                                                        <div class="icon">
                                                            <i data-lucide="package-check"></i>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md">
                                                        <h4>29</h4>
                                                        <small class="text-muted">vs last month <strong class="text-dark">1227</strong></small>
                                                    </div>
                                                </div>
                                              </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-3 mb-3">
                                            <div class="card">
                                              <div class="card-body">
                                                <div class="d-flex justify-content-between">
                                                    <div class="">
                                                        <h5>Consolidated Packages</h5>
                                                    </div>
                                                    <div class="ps-2 ">
                                                        <a href=""><i data-lucide="chevron-right"></i></a>
                                                    </div>
                                                </div>
                                                <div class="row py-2">
                                                    <div class="col-12 col-md-2">
                                                        <div class="icon">
                                                            <i data-lucide="combine"></i>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md">
                                                        <h4>19</h4>
                                                        <small class="text-muted">vs last month <strong class="text-dark">1770</strong></small>
                                                    </div>
                                                </div>
                                              </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-3 mb-3">
                                            <div class="card">
                                              <div class="card-body">
                                                <div class="d-flex justify-content-between">
                                                    <div class="">
                                                        <h5>Shipped Packages</h5>
                                                    </div>
                                                    <div class="ps-2 ">
                                                        <a href=""><i data-lucide="chevron-right"></i></a>
                                                    </div>
                                                </div>
                                                <div class="row py-2">
                                                    <div class="col-12 col-md-2">
                                                        <div class="icon">
                                                            <i data-lucide="truck"></i>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md">
                                                        <h4>289</h4>
                                                        <small class="text-muted">vs last month <strong class="text-dark">2938</strong></small>
                                                    </div>
                                                </div>
                                              </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <img src="../front/img/flags/italy.svg" class="img-fluid">   Rome, Italy 
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
                                <img src="../front/img/flags/united-kingdom.svg" class="img-fluid">   London, United Kingdom 
                            </button>
                          </h2>
                          <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                              <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                          </div>
                        </div>
                      </div>
                </section>
                
                
                
                


                <section class="py-4">
                    <h4 class="text-muted">New Buy for Me Requests</h4>
                    <section class="data-table">
                        <div class="card">
                          <div class="card-body">
                            <div class="table-responsive ">
                                <table class="table  table-hover ">
                                    <thead>
                                      <tr>
                                        <th>Request Date</th>
                                        <th>Order ID</th>
                                        <th>Items</th>
                                        <th>Paid Amount</th>
                                        <th>Store</th>
                                        <th>Customer</th>
                                        <th>Warehouse</th>
                                        <th>Status</th>
                                        <th>Payment Status</th>
                                        <th>Action</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <h6>11/09/24</h6>
                                                <small>12:20 </small>
                                            </td>
                                            <td>
                                                <h5><a href="">#345678928</a></h5>
                                            </td>
                                            <td>
                                                <h5>Iphone 15 Pro Max</h5>
                                                <h6>Qty: 01 . <span class="value_sm">$1000</span></h6>
                                            </td>
                                            <td>
                                                <span class=""><strong>$1000</strong></span>
                                            </td>
                                            <td>
                                                <h6>Amazon.com</h6>
                                            </td>
                                            <td>
                                                <h5><a href="">Nenith Sikolo</a></h5>
                                                <h6>Account <strong>#678947457</strong></h6>
                                            </td>
                                            <td>
                                                <h5>Delhi India</h5>
                                                <h6>New Delhi, India - 110001</h6>
                                            </td>
                                            <td style="width: 200px;">
                                                <span class="status order_paid"><i data-lucide="check-check"></i> Order Created</span>
                                            </td>
                                            <td style="width: 170px;">
                                                <span class="status order_pay_paid"><i data-lucide="check-circle"></i> Paid</span>
                                            </td>
                                            <td>
                                                <a href="#" class="btn btn-primary btn-sm"  data-bs-toggle="modal" data-bs-target="#Buyforme_o"><i data-lucide="rotate-cw"></i></a>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <td>
                                                <h6>11/09/24</h6>
                                                <small>12:20 </small>
                                            </td>
                                            <td>
                                                <h5><a href="">#345678928</a></h5>
                                            </td>
                                            <td>
                                                <h5>Iphone 15 Pro Max</h5>
                                                <h6>Qty: 01 . <span class="value_sm">$1000</span></h6>
                                            </td>
                                            <td>
                                                <span class=""><strong>$1000</strong></span>
                                            </td>
                                            <td>
                                                <h6>Amazon.com</h6>
                                            </td>
                                            <td>
                                                <h5><a href="">Nenith Sikolo</a></h5>
                                                <h6>Account <strong>#678947457</strong></h6>
                                            </td>
                                            <td>
                                                <h5>Delhi India</h5>
                                                <h6>New Delhi, India - 110001</h6>
                                            </td>
                                            <td style="width: 200px;">
                                                <span class="status order_paid"><i data-lucide="check-check"></i> Order Created</span>
                                            </td>
                                            <td style="width: 170px;">
                                                <span class="status order_pay_paid"><i data-lucide="check-circle"></i> Paid</span>
                                            </td>
                                            <td>
                                                <a href="#" class="btn btn-primary btn-sm"  data-bs-toggle="modal" data-bs-target="#Buyforme_o"><i data-lucide="rotate-cw"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                  </table>
                            </div>
                          </div>
                        </div>
                    </section>
                </section>
            </div>

        </div>
        <!-- Main content area END -->
    </div>
<?php include 'footer.php';?>
