<?php include 'head_meta.php';?>
    <div class="wrapper">
        <?php // include 'left.php';?>
        <!-- Main content area Starts -->
        <div class="main-content">
            <?php include 'header.php';?>
            
            <div class="container-fluid wrapper-inner">
                <div class="row">
                    <div class="col-12 col-md-4">
                        <div>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Warehouses</li>
                                </ol>
                            </nav>
                        </div>
                        <h2>Warehouses</h2>
                    </div>
                    <div class="col-12 col-md"></div>
                    <div class="col-12 col-md-3">
                        <div class="d-grid mt-3">
                          <a href="" class="btn btn-primary btn-sm btn-block"><i data-lucide="plus"></i> Add Warehouse</a>
                        </div>
                    </div>
                </div>
                

                

                <section class="data-table">
                    <div class="card">
                      <div class="card-body">
                        <div class="table-responsive ">
                            <table class="table  table-hover ">
                                <thead>
                                  <tr>
                                    <th>Warehouse Name</th>
                                    <th>Sort Name</th>
                                    <th>Address</th>
                                    <th>Zip Code</th>
                                    <th>City</th>
                                    <th>State</th>
                                    <th>Country</th>
                                    <th>Email</th>
                                    <th>Mobile</th>
                                    <th>Phone</th>
                                    <th>Action</th>
                                    <th></th>
                                  </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <h5><a href="">London HUB</a></h5>
                                        </td>
                                        <td>
                                            <h5>LON0093</h5>
                                        </td>
                                        <td>
                                            <h6>130 Merton Rd</h6>
                                        </td>
                                        <td>
                                            <h6>SW19 1EJ</h6>
                                        </td>
                                        <td>
                                            <h6>London</h6>
                                        </td>
                                        <td>
                                            <h6>London</h6>
                                        </td>
                                        <td>
                                            <h6>United Kingdom</h6>
                                        </td>
                                        <td style=" ">
                                            <h6>london@gmail.com</h6>
                                        </td>
                                        <td style=" ">
                                            <h6>+4492827373838</h6>
                                        </td>
                                        <td style=" ">
                                            <h6>+4492827373838</h6>
                                        </td>
                                        <td style=" ">
                                            <div class="form-check form-switch  mb-2">
                                               <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="#" class="btn btn-primary btn-sm"><i data-lucide="eye"></i></a>
                                        </td>
                                    </tr>
                                    
                                </tbody>
                              </table>
                        </div>
                      </div>
                    </div>
                </section>
            </div>

        </div>
        <!-- Main content area END -->
    </div>
<?php include 'footer.php';?>
