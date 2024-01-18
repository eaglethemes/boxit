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
                                    <li class="breadcrumb-item active" aria-current="page">Add a Package</li>
                                </ol>
                            </nav>
                        </div>
                        <h2>Add Package</h2>
                    </div>
                    <div class="col-12 col-md"></div>
                    <div class="col-12 col-md-3">
                        
                    </div>
                </div>
                
                <div class="row justify-content-center py-3 add_package ">
                    <div class="col-12 col-md-6">
                        <div class="search-box">
                            <div class="search-icon">
                                <i class="fa fa-search"></i> 
                            </div>
                            <input type="text" class="search-input" placeholder="Enter store tracking id, customer account no or customer name">
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <small class="text-muted">Search from existing Awaiting Packages</small>
                            </div>
                            <div class="col-12 col-md-6 text-end">
                                <small><a href="">Create a new package</a></small>
                            </div>
                        </div>

                        <h4 class="mt-4">Awaiting Packages found on this account</h4>
                        <section class="data-table">
                            <div class="card">
                              <div class="card-body">
                                <div class="table-responsive ">
                                    <table class="table  table-hover ">
                                        <thead>
                                          <tr>
                                            <th>Package ID</th>
                                            <th>Customer</th>
                                            <th>Warehouse</th>
                                            <th>Action</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <h5><a href="">#345678928</a></h5>
                                                    <h6>Tracking <strong>#678876786</strong></h6>
                                                </td>
                                                <td>
                                                    <h5><a href="">Nenith Sikolo</a></h5>
                                                    <h6>Account <strong>#678947457</strong></h6>
                                                </td>
                                                <td>
                                                    <h5>Delhi India</h5>
                                                    <h6>Karol Bagh, New Delhi, India - 110001</h6>
                                                </td>
                                                <td>
                                                    <a href="#" class="btn btn-primary">Confirm Package</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                      </table>
                                </div>
                              </div>
                            </div>
                        </section>

                        <div class="alert alert-warning mt-2">
                            <div class="d-flex justify-content-between">
                                <div class="">
                                    <strong><i data-lucide="package-check"></i></strong> Didn't find the package you are looking for? Create a new.
                                </div>
                                <div class="ps-2 ">
                                    <a href="#" class="btn btn-warning btn-sm">
                                        Crate a new package
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="alert alert-warning mt-3">
                            <div class="d-flex justify-content-between">
                                <div class="">
                                    <strong><i data-lucide="package-x"></i></strong> Sorry! No existing package found, try to create a new one
                                </div>
                                <div class="ps-2 ">
                                    <a href="#" class="btn btn-warning btn-sm">
                                        Crate a new package
                                    </a>
                                </div>
                            </div>
                        </div>

                        <section class="add_pack_info">
                            <div class="card">
                                <div class="card-header">
                                    <h3>Customer Information</h3>
                                </div>
                                <div class="card-body">
                                    <p>
                                        Nenith Sikolo<br>
                                        <strong>Account #678947457</strong>
                                    </p>
                                </div>
                            </div>
    
                            <div class="card add_pack_warehouse">
                                <div class="card-header">
                                    <h3>Select Warehouse</h3>
                                </div>
                                <div class="card-body ">
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <div class="card active">
                                              <div class="card-body">
                                                <img src="../front/img/flags/united-kingdom.svg" class="img-fluid" /> <h5>United Kingdom</h5>
                                                <h4>London HUB</h4>
                                                <p>
                                                    130 Merton Rd, London, London - SW19 1EJ
                                                </p>
                                              </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="card">
                                              <div class="card-body">
                                                <img src="../front/img/flags/united-kingdom.svg" class="img-fluid" /> <h5>United Kingdom</h5>
                                                <h4>London HUB</h4>
                                                <p>
                                                    130 Merton Rd, London, London - SW19 1EJ
                                                </p>
                                              </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
    
                            

                            <div class="card">
                                <div class="card-header">
                                    <h3>Store Information</h3>
                                </div>
                                <div class="card-body">
                                    <label for="" class="form-label">Enter Store Name:</label>
                                    <input type="text" class="form-control" id="text" placeholder="Enter store name">
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header">
                                    <h3>Package Information</h3>
                                </div>
                                <div class="card-body">
                                    <div class="row mb-3">
                                        <div class="col-12 col-md-4">
                                            <label for="" class="form-label">No. of Product(s) <span class="text-danger">*</span>:</label>
                                            <select class="form-select">
                                                <option>Select</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                              </select>
                                        </div>
                                    </div>
                                    <div class="add_pack_pack_info">
                                        <h4>Product #1 Details</h4>
                                        <div class="row">
                                            <div class="col-12 col-md-12 mb-2">
                                                <label for="" class="form-label">Tracking No <span class="text-danger">*</span>:</label>
                                                <input type="text" class="form-control" id="text" placeholder="Enter details namet">
                                            </div>
                                            <div class="col-12 col-md-6 mb-2">
                                                <label for="" class="form-label">Enter Product Name:</label>
                                                <input type="text" class="form-control" id="text" placeholder="Enter details namet">
                                            </div>
                                            <div class="col-12 col-md-2 mb-2">
                                                <label for="" class="form-label">Qty:</label>
                                                <input type="text" class="form-control" id="text" placeholder="Qty">
                                            </div>
                                            <div class="col-12 col-md-4 mb-2">
                                                <label for="" class="form-label">Amount:</label>
                                                <div class="input-group">
                                                    <select class="form-select ">
                                                        <option>USD</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                    </select>
                                                    <input type="text" class="form-control" placeholder="Value">
                                                </div>
                                                
                                            </div>
                                            <div class="col-12 col-md-12 mb-2">
                                                <label for="" class="form-label">Product Web URL:</label>
                                                <input type="text" class="form-control" id="text" placeholder="Enter details namet">
                                            </div>
                                            <div class="col-12 col-md-4 mb-2">
                                                <label for="" class="form-label">Product Category <span class="text-danger">*</span>:</label>
                                                <select class="form-select">
                                                  <option>Select</option>
                                                  <option>2</option>
                                                  <option>3</option>
                                                  <option>4</option>
                                                </select>
                                            </div>
                                            <div class="col-12 col-md-4 mb-2">
                                                <label for="" class="form-label">Order Invoice:</label>
                                                <input type="file" class="form-control" id="text" placeholder="Enter details namet">
                                            </div>
                                            <div class="col-12 col-md-4 mb-2">
                                                <label for="" class="form-label">Product Photo:</label>
                                                <input type="file" class="form-control" id="text" placeholder="Enter details namet">
                                            </div>
                                        </div>
                                        <hr>

                                        <label for="" class="form-label">Package Dimension  <span class="text-danger">*</span>:</label>
                                        <div class="row g-1">
                                            <div class="col-12 col-md">
                                                <div class="input-group">
                                                    <span class="input-group-text">H</span>
                                                    <input type="text" class="form-control" placeholder="Height">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md">
                                                <div class="input-group">
                                                    <span class="input-group-text">W</span>
                                                    <input type="text" class="form-control" placeholder="Width">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md">
                                                <div class="input-group">
                                                    <span class="input-group-text">L</span>
                                                    <input type="text" class="form-control" placeholder="Length">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md">
                                                <div class="input-group">
                                                    <span class="input-group-text">W</span>
                                                    <input type="text" class="form-control" placeholder="Weight">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header">
                                    <h3>SPECIAL INSTRUCTIONS</h3>
                                </div>
                                <div class="card-body">
                                    <label for="" class="form-label">SPECIAL INSTRUCTIONS:</label>
                                    <input type="text" class="form-control" id="text" placeholder="Enter details namet">
                                </div>
                            </div>

                            <div class="d-grid">
                              <a href="" class="btn btn-primary btn-block">Add Package</a>
                            </div>
                        </section>
                    </div>
                </div>

                

                
            </div>

        </div>
        <!-- Main content area END -->
    </div>
<?php include 'footer.php';?>
