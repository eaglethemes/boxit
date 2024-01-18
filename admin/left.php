<!-- Sidebar starts -->
<div class="">
        <nav class="sidebar locked">
            <div class="logo_items flex">
                <span class="nav_image">
                <img src="images/logo.png" alt="logo_img" />
                </span>
                <span class="logo_name">SkyShip</span>
                <i class="bx bx-lock-alt" id="lock-icon" title="Unlock Sidebar"></i>
                <i class="bx bx-x" id="sidebar-close"></i>
            </div>
            
            <div class="menu_container">
                <div class="side_nav_top">
                    <div class="row">
                        <div class="col-12 col-md-2">
                        <i data-lucide="user"></i>
                        </div>
                        <div class="col-12 col-md customer_kyc">
                            <h6>John Doe <span class="badge_verified">Verified</span></h6>
                            <span class="text-primary" data-bs-toggle="tooltip" title="Wallet Balance">₹0.00</span>

                        </div>
                        <div class="col-12 col-md-2">
                            <div class="custom-dropdown ">
                                <i class="material-icons-outlined">more_vert</i>

                                <ul class="dropdown-menu shadow-sm ">
                                    <li><a class="dropdown-item" href="#">My Profile</a></li>
                                    <li><a class="dropdown-item" href="#">Customer KYC 
                                    </a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="login.php">Logout</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="menu_items">
                <ul class="menu_item">
                    <div class="menu_title flex">
                        <span class="title">Dashboard</span>
                        <span class="line"></span>
                    </div>
                    <li class="item">
                        <a href="#" class="link flex">
                        <i data-lucide="home"></i>
                        <span>Dashboard</span>
                        </a>
                    </li>
                </ul>
                <ul class="menu_item">
                    <div class="menu_title flex">
                        <span class="title">Shipments</span>
                        <span class="line"></span>
                    </div>
                    <li class="item">
                        <a href="#" class="link flex" onclick="toggleSubMenu(event)">
                        <i data-lucide="shopping-bag"></i>
                        <span>Orders</span>
                        <i class="bx bx-chevron-down list_dropdown" id="overview-caret"></i>
                        </a>
                        <!-- Sub-menu for Overview -->
                        <ul class="submenu">
                            <li class="item-level-1">
                                <a href="orders.php" class="link flex">
                                <span>All Orders</span>
                                </a>
                            </li>
                            <li class="item-level-1">
                                <a href="create_order_nv.php" class="link flex">
                                <span>Create new order</span>
                                </a>
                            </li>

                            <li class="item-level-1">
                                <a href="#" class="link flex">
                                <span>Import bulk orders</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="item">
                        <a href="#" class="link flex" onclick="toggleSubMenu(event)">
                        <i data-lucide="boxes"></i>
                        <span>Shipments</span>
                        <i class="bx bx-chevron-down list_dropdown" id="overview-caret"></i>
                        </a>
                        <ul class="submenu">
                            <li class="item-level-1">
                                <a href="shipments.php" class="link flex">
                                <span>All Shipments</span>
                                </a>
                            </li>

                            <li class="item-level-1">
                                <a href="shipments.php?status=booked" class="link flex">
                                <span>Booked Shipments</span>
                                </a>
                            </li>
                            <li class="item-level-1">
                                <a href="shipments.php?status=deliverd" class="link flex">
                                <span>Delivered Shipments</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="item">
                        <a href="#" class="link flex">
                        <i data-lucide="package-x"></i>
                            <span>NDR Shipments</span>
                        </a>
                    </li>
                    <li class="item">
                        <a href="#" class="link flex">
                        <i data-lucide="rotate-ccw"></i>
                            <span>RTO Shipments</span>
                        </a>
                    </li>
                </ul>

                <ul class="menu_item">
                    <div class="menu_title flex">
                        <span class="title">Operations</span>
                        <span class="line"></span>
                    </div>
                    <li class="item">
                        <a href="warehouse.php" class="link flex">
                            <i data-lucide="truck"></i>
                            <span>Scheduled Shipments</span>
                        </a>
                    </li>
                    <li class="item">
                        <a href="warehouse.php" class="link flex">
                            <i data-lucide="weight"></i>
                            <span>Weight Discrepancy</span>
                        </a>
                    </li>
                    <li class="item">
                    <a href="warehouse.php" class="link flex">
                        <i data-lucide="warehouse"></i>
                        <span>Warehouse</span>
                    </a>
                    </li>
                </ul>
                
                <ul class="menu_item">
                    <div class="menu_title flex">
                    <span class="title">Billing</span>
                    <span class="line"></span>
                    </div>
                    <li class="item">
                    <a href="#" class="link flex">
                    <i data-lucide="receipt"></i>
                        <span>Billing</span>
                    </a>
                    </li>
                </ul>


                <ul class="menu_item">
                    <div class="menu_title flex">
                    <span class="title">Tools</span>
                    <span class="line"></span>
                    </div>
                    <li class="item">
                    <a href="rate_calculator.php" class="link flex">
                    <i data-lucide="calculator"></i>
                        <span>Rate Calculator</span>
                    </a>
                    </li>
                    <li class="item">
                    <a href="#" class="link flex">
                    <i data-lucide="cpu"></i>
                        <span>Order Allocation Engine</span>
                    </a>
                    </li>
                    <li class="item">
                    <a href="aftership.php" class="link flex">
                    <i data-lucide="locate-fixed"></i>
                        <span>AfterShip</span>
                    </a>
                    </li>
                    <li class="item">
                    <a href="reports.php" class="link flex">
                    <i data-lucide="file-text"></i>
                        <span>Reports</span>
                    </a>
                    </li>
                </ul>
        
                <ul class="menu_item">
                    <div class="menu_title flex">
                    <span class="title">Setting</span>
                    <span class="line"></span>
                    </div>
                    <li class="item">
                    <a href="channel_list.php" class="link flex">
                    <i data-lucide="store"></i>
                        <span>Channel Integration</span>
                    </a>
                    </li>
                    <li class="item">
                    <a href="master_label_settings.php.php" class="link flex">
                    <i data-lucide="barcode"></i>
                        <span>Lable Settings</span>
                    </a>
                    </li>
                    <li class="item">
                    <a href="developer_apis.php" class="link flex">
                    <i data-lucide="code"></i>
                        <span>Developer APIs</span>
                    </a>
                    </li>
                </ul>
                </div>
            </div>
        </nav>
      </div>
      <!-- Sidebar End -->