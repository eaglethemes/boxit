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
                            <li class="breadcrumb-item active" aria-current="page">Buy For Me Requests</li>
                        </ol>
                    </nav>
                </div>
                <h2>Buy For Me Requests</h2>

                <div class="row mt-4">
                    <div class="col-12 col-md-8">
                        <div class="dash_nav">
                            <nav class="navbar navbar-expand-sm bg-light navbar-light">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="buyforme_request.php">Pending Requestes</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="buyforme_request_completed.php">Completed Requestes</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-12 col-md">
                        <select class="form-select form-select-sm">
                          <option>All Warehouse</option>
                          <option>India</option>
                          <option>USA</option>
                          <option>UK</option>
                        </select>
                    </div>
                    <div class="col-12 col-md-2">
                        <div class="input-group input-group-sm mb-3">
                            <input type="text" class="form-control " placeholder="Search by tracking no">
                            <button class="btn btn-secondary" type="submit"><i data-lucide="search"></i></button>
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
                                            <span class="status order_booked"><i data-lucide="mouse-pointer-click"></i> Order Booked</span>
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
                                            <span class="status order_delived"><i data-lucide="package-check"></i> Order Delivered</span>
                                        </td>
                                        <td style="width: 170px;">
                                            <span class="status order_pay_pending"><i data-lucide="shield-alert"></i> Pending</span>
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
                                            <span class="status order_canceled"><i data-lucide="ban"></i> Order Cancelled</span>
                                        </td>
                                        <td style="width: 170px;">
                                            <span class="status order_pay_failed"><i data-lucide="x-circle"></i> Failed</span>
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
            </div>

        </div>
        <!-- Main content area END -->
    </div>
<?php include 'footer.php';?>
