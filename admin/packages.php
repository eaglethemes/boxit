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
                            <li class="breadcrumb-item active" aria-current="page">Packages</li>
                        </ol>
                    </nav>
                </div>
                <h2>Packages</h2>

                <div class="row mt-4">
                    <div class="col-12 col-md-8">
                        <div class="dash_nav">
                            <nav class="navbar navbar-expand-sm bg-light navbar-light">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#">All</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Ready to Ship</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Awaiting</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Consolidation Progress</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Shipped</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">On Hold</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Trashed</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Returned</a>
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
                                    <th>Date</th>
                                    <th>Package ID</th>
                                    <th>Customer</th>
                                    <th>Warehouse</th>
                                    <th>Store</th>
                                    <th>Value</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            11/09/24
                                        </td>
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
                                            <h6>Amazon.com</h6>
                                        </td>
                                        <td>
                                            <span class="value">$1000</span>
                                        </td>
                                        <td>
                                            <span class="status ready_ship"><i data-lucide="check-check"></i> Ready to Ship</span>
                                        </td>
                                        <td>
                                            <a href=""><i data-lucide="more-vertical"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            11/09/24
                                        </td>
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
                                            <h6>Amazon.com</h6>
                                        </td>
                                        <td>
                                            <span class="value">$1000</span>
                                        </td>
                                        <td>
                                            <span class="status consolidation_prog"><i data-lucide="package-open"></i> Consolidation Awaiting</span>
                                        </td>
                                        <td>
                                            <a href=""><i data-lucide="more-vertical"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            11/09/24
                                        </td>
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
                                            <h6>Amazon.com</h6>
                                        </td>
                                        <td>
                                            <span class="value">$1000</span>
                                        </td>
                                        <td>
                                            <span class="status consolidation_prog"><i data-lucide="package-open"></i> Consolidation Awaiting</span>
                                        </td>
                                        <td>
                                            <a href=""><i data-lucide="more-vertical"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            11/09/24
                                        </td>
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
                                            <h6>Amazon.com</h6>
                                        </td>
                                        <td>
                                            <span class="value">$1000</span>
                                        </td>
                                        <td>
                                            <span class="status consolidated"><i data-lucide="package-check"></i> Consolidated</span>
                                        </td>
                                        <td>
                                            <a href=""><i data-lucide="more-vertical"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            11/09/24
                                        </td>
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
                                            <h6>Amazon.com</h6>
                                        </td>
                                        <td>
                                            <span class="value">$1000</span>
                                        </td>
                                        <td>
                                            <span class="status shipped"><i data-lucide="truck"></i> Shipped</span>
                                        </td>
                                        <td>
                                            <a href=""><i data-lucide="more-vertical"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            11/09/24
                                        </td>
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
                                            <h6>Amazon.com</h6>
                                        </td>
                                        <td>
                                            <span class="value">$1000</span>
                                        </td>
                                        <td>
                                            <span class="status return"><i data-lucide="rotate-ccw"></i> Return</span>
                                        </td>
                                        <td>
                                            <a href=""><i data-lucide="more-vertical"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            11/09/24
                                        </td>
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
                                            <h6>Amazon.com</h6>
                                        </td>
                                        <td>
                                            <span class="value">$1000</span>
                                        </td>
                                        <td>
                                            <span class="status trashed"><i data-lucide="trash"></i> Trashed</span>
                                        </td>
                                        <td>
                                            <a href=""><i data-lucide="more-vertical"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            11/09/24
                                        </td>
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
                                            <h6>Amazon.com</h6>
                                        </td>
                                        <td>
                                            <span class="value">$1000</span>
                                        </td>
                                        <td>
                                            <span class="status hold"><i data-lucide="timer-reset"></i> On Hold</span>
                                        </td>
                                        <td>
                                            <a href=""><i data-lucide="more-vertical"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            11/09/24
                                        </td>
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
                                            <h6>Amazon.com</h6>
                                        </td>
                                        <td>
                                            <span class="value">$1000</span>
                                        </td>
                                        <td>
                                            <span class="status consolidation_prog"><i data-lucide="package-open"></i> Consolidation Awaiting</span>
                                        </td>
                                        <td>
                                            <a href=""><i data-lucide="more-vertical"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            11/09/24
                                        </td>
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
                                            <h6>Amazon.com</h6>
                                        </td>
                                        <td>
                                            <span class="value">$1000</span>
                                        </td>
                                        <td>
                                            <span class="status consolidation_prog"><i data-lucide="package-open"></i> Consolidation Awaiting</span>
                                        </td>
                                        <td>
                                            <a href=""><i data-lucide="more-vertical"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            11/09/24
                                        </td>
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
                                            <h6>Amazon.com</h6>
                                        </td>
                                        <td>
                                            <span class="value">$1000</span>
                                        </td>
                                        <td>
                                            <span class="status consolidation_prog"><i data-lucide="package-open"></i> Consolidation Awaiting</span>
                                        </td>
                                        <td>
                                            <a href=""><i data-lucide="more-vertical"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            11/09/24
                                        </td>
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
                                            <h6>Amazon.com</h6>
                                        </td>
                                        <td>
                                            <span class="value">$1000</span>
                                        </td>
                                        <td>
                                            <span class="status consolidation_prog"><i data-lucide="package-open"></i> Consolidation Awaiting</span>
                                        </td>
                                        <td>
                                            <a href=""><i data-lucide="more-vertical"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            11/09/24
                                        </td>
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
                                            <h6>Amazon.com</h6>
                                        </td>
                                        <td>
                                            <span class="value">$1000</span>
                                        </td>
                                        <td>
                                            <span class="status consolidation_prog"><i data-lucide="package-open"></i> Consolidation Awaiting</span>
                                        </td>
                                        <td>
                                            <a href=""><i data-lucide="more-vertical"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            11/09/24
                                        </td>
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
                                            <h6>Amazon.com</h6>
                                        </td>
                                        <td>
                                            <span class="value">$1000</span>
                                        </td>
                                        <td>
                                            <span class="status consolidation_prog"><i data-lucide="package-open"></i> Consolidation Awaiting</span>
                                        </td>
                                        <td>
                                            <a href=""><i data-lucide="more-vertical"></i></a>
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
