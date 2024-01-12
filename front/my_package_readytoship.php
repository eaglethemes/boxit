
<?php include 'header.php';?>

<?php include 'customer_menu.php';?>


<section class=" bg-light p-5 ">
  <div class="container-fluid ">
        <div class="row">
          <div class="col col-md-10">
            <h2 class="pb-2">My Packages</h2>
          </div>
          <div class="col text-end">
            <a href="add_shipment.php" class="btn btn-outline-primary">Add Incoming Package</a>
          </div>
        </div>
    <div class="card shadow-sm">
      <div class="card-body">
        <ul class="nav nav-pills">
          <li class="nav-item">
            <a class="nav-link " href="#">Awaiting</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#">Ready to ship</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Consolidation Progress</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="#">Shipped</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="#">On Hold</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="#">Trashed</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="#">Returned</a>
          </li>
        </ul>
        
        <hr>
        <section class="shipment_list">
          <div class="row" id="row1">
            <div class="col-1 col-md-1 pt-3">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="check1" name="option1" value="something">
                <label class="form-check-label"><a href="shipment_details.php">29834340</a></label>
              </div>
            </div>
            <div class="col-1 col-md-1 text-center">
              <img src="img/cat_icon/freight_desktop2x.png" class="img-fluid" />
              <div class="shipment_img_count"><span class="badge rounded-pill bg-primary">1</span></div>
            </div>
            <div class="col-1">
              <small>Arrived at:</small> <br>
              12 March 2022
            </div>
            <div class="col-1">
              <small>Sender:</small> <br>
              Amazon.com
            </div>
            <div class="col-2">
              <small>Content:</small> <br>
              Samsung i PRO
              <br>
              iPhone 13 PRO
              <br>
              +1 more
            </div>
            <div class="col-1">
              <small>Total Value:</small> <br>
              $699
            </div>
            <div class="col-1">
              <small>Weight:</small> <br>
              <span class="badge rounded-pill bg-secondary">1.5lbs</span><br>
              <small class="text-muted">12x12x12 Inches</small>
            </div>
            <div class="col-2 pt-3">
              <span class="badge rounded-pill bg-secondary" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-content="Package Inspection was requested on 12-12-24 12:39">Inspection Requested</span>
            </div>
            <div class="col-2 pt-3">
              <div class="d-grid">
                <a href="shipnow_step-1.php" class="btn btn-primary btn-block btn-lg">Ship Now</a>
              </div>
            </div>

              <div class="actions-container">
                <div class="row">
                    <div class="col-12 col-md rightpbo">
                            <ul class="nav">
                              <li class="nav-item">
                                <a class="nav-link" href="inspection_package.php"><i class="fa fa-eye" aria-hidden="true"></i> Inspect Package(s)</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fa fa-picture-o" aria-hidden="true"></i> Request Additional Photos</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fa fa-trash" aria-hidden="true"></i> Trash or Dispose Package(s)</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fa fa-repeat" aria-hidden="true"></i> Return Package to Sender</a>
                              </li>
                            </ul>
                    </div>
                    <!-- <div class="col-12 col-md-3 leftpbo text-end">
                      <span>
                      <a href="#" class="btn btn-primary btn-lg">Ship Now</a>
                      </span>
                    </div> -->
                </div>
              </div>
          </div>
          <hr>
          <div class="row" id="row1">
            <div class="col-1 col-md-1 pt-3">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="check1" name="option1" value="something">
                <label class="form-check-label"><a href="shipment_details.php">29834340</a></label>
              </div>
            </div>
            <div class="col-1 col-md-1 text-center">
              <img src="img/cat_icon/freight_desktop2x.png" class="img-fluid" />
              <div class="shipment_img_count"><span class="badge rounded-pill bg-primary">1</span></div>
            </div>
            <div class="col-1">
              <small>Arrived at:</small> <br>
              12 March 2022
            </div>
            <div class="col-1">
              <small>Sender:</small> <br>
              Amazon.com
            </div>
            <div class="col-2">
              <small>Content:</small> <br>
              Samsung i PRO
              <br>
              iPhone 13 PRO
              <br>
              +1 more
            </div>
            <div class="col-1">
              <small>Total Value:</small> <br>
              $699
            </div>
            <div class="col-1">
              <small>Weight:</small> <br>
              <span class="badge rounded-pill bg-secondary">1.5lbs</span><br>
              <small class="text-muted">12x12x12 Inches</small>
            </div>
            <div class="col-2 pt-3">
              <span class="badge rounded-pill bg-success" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-content="Package Inspection was requested on 12-12-24 12:39 and completed on 12-12-24 29:30">Inspection Completed</span>
            </div>
            <div class="col-2 pt-3">
              <div class="d-grid">
                <a href="" class="btn btn-primary btn-block btn-lg">Ship Now</a>
              </div>
            </div>

              <div class="actions-container">
                <div class="row">
                    <div class="col-12 col-md rightpbo">
                            <ul class="nav">
                              <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fa fa-eye" aria-hidden="true"></i> Inspect Package(s)</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fa fa-picture-o" aria-hidden="true"></i> Request Additional Photos</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fa fa-trash" aria-hidden="true"></i> Trash or Dispose Package(s)</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fa fa-repeat" aria-hidden="true"></i> Return Package to Sender</a>
                              </li>
                            </ul>
                    </div>
                    <!-- <div class="col-12 col-md-3 leftpbo text-end">
                      <span>
                      <a href="#" class="btn btn-primary btn-lg">Ship Now</a>
                      </span>
                    </div> -->
                </div>
              </div>
          </div>
          <hr>
          <div class="row" id="row1">
            <div class="col-1 col-md-1 pt-3">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="check1" name="option1" value="something">
                <label class="form-check-label"><a href="shipment_details.php">29834340</a></label>
              </div>
            </div>
            <div class="col-1 col-md-1 text-center">
              <img src="img/cat_icon/freight_desktop2x.png" class="img-fluid" />
              <div class="shipment_img_count"><span class="badge rounded-pill bg-primary">1</span></div>
            </div>
            <div class="col-1">
              <small>Arrived at:</small> <br>
              12 March 2022
            </div>
            <div class="col-1">
              <small>Sender:</small> <br>
              Amazon.com
            </div>
            <div class="col-2">
              <small>Content:</small> <br>
              Samsung i PRO
              <br>
              iPhone 13 PRO
              <br>
              +1 more
            </div>
            <div class="col-1">
              <small>Total Value:</small> <br>
              $699
            </div>
            <div class="col-1">
              <small>Weight:</small> <br>
              <span class="badge rounded-pill bg-secondary">1.5lbs</span><br>
              <small class="text-muted">12x12x12 Inches</small>
            </div>
            <div class="col-2 pt-3">
              <span class="badge rounded-pill bg-secondary" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-content="Additional Photos was requested on 12-12-24 12:39">Additional Photos Requested</span>
            </div>
            <div class="col-2 pt-3">
              <div class="d-grid">
                <a href="" class="btn btn-primary btn-block btn-lg">Ship Now</a>
              </div>
            </div>

              <div class="actions-container">
                <div class="row">
                    <div class="col-12 col-md rightpbo">
                            <ul class="nav">
                              <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fa fa-eye" aria-hidden="true"></i> Inspect Package(s)</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fa fa-picture-o" aria-hidden="true"></i> Request Additional Photos</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fa fa-trash" aria-hidden="true"></i> Trash or Dispose Package(s)</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fa fa-repeat" aria-hidden="true"></i> Return Package to Sender</a>
                              </li>
                            </ul>
                    </div>
                    <!-- <div class="col-12 col-md-3 leftpbo text-end">
                      <span>
                      <a href="#" class="btn btn-primary btn-lg">Ship Now</a>
                      </span>
                    </div> -->
                </div>
              </div>
          </div>
          <hr>
          <div class="row" id="row1">
            <div class="col-1 col-md-1 pt-3">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="check1" name="option1" value="something">
                <label class="form-check-label"><a href="shipment_details.php">29834340</a></label>
              </div>
            </div>
            <div class="col-1 col-md-1 text-center">
              <img src="img/cat_icon/freight_desktop2x.png" class="img-fluid" />
              <div class="shipment_img_count"><span class="badge rounded-pill bg-primary">1</span></div>
            </div>
            <div class="col-1">
              <small>Arrived at:</small> <br>
              12 March 2022
            </div>
            <div class="col-1">
              <small>Sender:</small> <br>
              Amazon.com
            </div>
            <div class="col-2">
              <small>Content:</small> <br>
              Samsung i PRO
              <br>
              iPhone 13 PRO
              <br>
              +1 more
            </div>
            <div class="col-1">
              <small>Total Value:</small> <br>
              $699
            </div>
            <div class="col-1">
              <small>Weight:</small> <br>
              <span class="badge rounded-pill bg-secondary">1.5lbs</span><br>
              <small class="text-muted">12x12x12 Inches</small>
            </div>
            <div class="col-2 pt-3">
              <span class="badge rounded-pill bg-success" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-content="Additional Photos was requested on 12-12-24 12:39 and Completed on 12-12-24 19:29">Photos Requested Completed</span>
            </div>
            <div class="col-2 pt-3">
              <div class="d-grid">
                <a href="" class="btn btn-primary btn-block btn-lg">Ship Now</a>
              </div>
            </div>

              <div class="actions-container">
                <div class="row">
                    <div class="col-12 col-md rightpbo">
                            <ul class="nav">
                              <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fa fa-eye" aria-hidden="true"></i> Inspect Package(s)</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fa fa-picture-o" aria-hidden="true"></i> Request Additional Photos</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fa fa-trash" aria-hidden="true"></i> Trash or Dispose Package(s)</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fa fa-repeat" aria-hidden="true"></i> Return Package to Sender</a>
                              </li>
                            </ul>
                    </div>
                    <!-- <div class="col-12 col-md-3 leftpbo text-end">
                      <span>
                      <a href="#" class="btn btn-primary btn-lg">Ship Now</a>
                      </span>
                    </div> -->
                </div>
              </div>
          </div>
          <hr>
          <div class="row" id="row1">
            <div class="col-1 col-md-1 pt-3">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="check1" name="option1" value="something">
                <label class="form-check-label"><a href="shipment_details.php">29834340</a></label>
              </div>
            </div>
            <div class="col-1 col-md-1 text-center">
              <img src="img/cat_icon/freight_desktop2x.png" class="img-fluid" />
              <div class="shipment_img_count"><span class="badge rounded-pill bg-primary">1</span></div>
            </div>
            <div class="col-1">
              <small>Arrived at:</small> <br>
              12 March 2022
            </div>
            <div class="col-1">
              <small>Sender:</small> <br>
              Amazon.com
            </div>
            <div class="col-2">
              <small>Content:</small> <br>
              Samsung i PRO
              <br>
              iPhone 13 PRO
              <br>
              +1 more
            </div>
            <div class="col-1">
              <small>Total Value:</small> <br>
              $699
            </div>
            <div class="col-1">
              <small>Weight:</small> <br>
              <span class="badge rounded-pill bg-secondary">1.5lbs</span><br>
              <small class="text-muted">12x12x12 Inches</small>
            </div>
            <div class="col-2 pt-3">
              <span class="badge rounded-pill bg-success" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-content="Package Inspection was requested on 12-12-24 12:39">Inspection Requested</span>
            </div>
            <div class="col-2 pt-3">
              <div class="d-grid">
                <a href="shipnow_step-1.php" class="btn btn-primary btn-block btn-lg">Ship Now</a>
              </div>
            </div>

              <div class="actions-container">
                <div class="row">
                    <div class="col-12 col-md rightpbo">
                            <ul class="nav">
                              <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fa fa-eye" aria-hidden="true"></i> Inspect Package(s)</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fa fa-picture-o" aria-hidden="true"></i> Request Additional Photos</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fa fa-trash" aria-hidden="true"></i> Trash or Dispose Package(s)</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fa fa-repeat" aria-hidden="true"></i> Return Package to Sender</a>
                              </li>
                            </ul>
                    </div>
                    <!-- <div class="col-12 col-md-3 leftpbo text-end">
                      <span>
                      <a href="#" class="btn btn-primary btn-lg">Ship Now</a>
                      </span>
                    </div> -->
                </div>
              </div>
          </div>
          <hr>
          <div class="row" id="row1">
            <div class="col-1 col-md-1 pt-3">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="check1" name="option1" value="something">
                <label class="form-check-label"><a href="shipment_details.php">29834340</a></label>
              </div>
            </div>
            <div class="col-1 col-md-1 text-center">
              <img src="img/cat_icon/freight_desktop2x.png" class="img-fluid" />
              <div class="shipment_img_count"><span class="badge rounded-pill bg-primary">1</span></div>
            </div>
            <div class="col-1">
              <small>Arrived at:</small> <br>
              12 March 2022
            </div>
            <div class="col-1">
              <small>Sender:</small> <br>
              Amazon.com
            </div>
            <div class="col-2">
              <small>Content:</small> <br>
              Samsung i PRO
              <br>
              iPhone 13 PRO
              <br>
              +1 more
            </div>
            <div class="col-1">
              <small>Total Value:</small> <br>
              $699
            </div>
            <div class="col-1">
              <small>Weight:</small> <br>
              <span class="badge rounded-pill bg-secondary">1.5lbs</span><br>
              <small class="text-muted">12x12x12 Inches</small>
            </div>
            <div class="col-2 pt-3">
              <span class="badge rounded-pill bg-success" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-content="Package Inspection was requested on 12-12-24 12:39">Inspection Requested</span>
            </div>
            <div class="col-2 pt-3">
              <div class="d-grid">
                <a href="" class="btn btn-primary btn-block btn-lg">Ship Now</a>
              </div>
            </div>

              <div class="actions-container">
                <div class="row">
                    <div class="col-12 col-md rightpbo">
                            <ul class="nav">
                              <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fa fa-eye" aria-hidden="true"></i> Inspect Package(s)</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fa fa-picture-o" aria-hidden="true"></i> Request Additional Photos</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fa fa-trash" aria-hidden="true"></i> Trash or Dispose Package(s)</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fa fa-repeat" aria-hidden="true"></i> Return Package to Sender</a>
                              </li>
                            </ul>
                    </div>
                    <!-- <div class="col-12 col-md-3 leftpbo text-end">
                      <span>
                      <a href="#" class="btn btn-primary btn-lg">Ship Now</a>
                      </span>
                    </div> -->
                </div>
              </div>
          </div>
          <hr>
          <div class="row" id="row1">
            <div class="col-1 col-md-1 pt-3">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="check1" name="option1" value="something">
                <label class="form-check-label"><a href="shipment_details.php">29834340</a></label>
              </div>
            </div>
            <div class="col-1 col-md-1 text-center">
              <img src="img/cat_icon/freight_desktop2x.png" class="img-fluid" />
              <div class="shipment_img_count"><span class="badge rounded-pill bg-primary">1</span></div>
            </div>
            <div class="col-1">
              <small>Arrived at:</small> <br>
              12 March 2022
            </div>
            <div class="col-1">
              <small>Sender:</small> <br>
              Amazon.com
            </div>
            <div class="col-2">
              <small>Content:</small> <br>
              Samsung i PRO
              <br>
              iPhone 13 PRO
              <br>
              +1 more
            </div>
            <div class="col-1">
              <small>Total Value:</small> <br>
              $699
            </div>
            <div class="col-1">
              <small>Weight:</small> <br>
              <span class="badge rounded-pill bg-secondary">1.5lbs</span><br>
              <small class="text-muted">12x12x12 Inches</small>
            </div>
            <div class="col-2 pt-3">
              <span class="badge rounded-pill bg-success" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-content="Package Inspection was requested on 12-12-24 12:39">Inspection Requested</span>
            </div>
            <div class="col-2 pt-3">
              <div class="d-grid">
                <a href="" class="btn btn-primary btn-block btn-lg">Ship Now</a>
              </div>
            </div>

              <div class="actions-container">
                <div class="row">
                    <div class="col-12 col-md rightpbo">
                            <ul class="nav">
                              <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fa fa-eye" aria-hidden="true"></i> Inspect Package(s)</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fa fa-picture-o" aria-hidden="true"></i> Request Additional Photos</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fa fa-trash" aria-hidden="true"></i> Trash or Dispose Package(s)</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fa fa-repeat" aria-hidden="true"></i> Return Package to Sender</a>
                              </li>
                            </ul>
                    </div>
                    <!-- <div class="col-12 col-md-3 leftpbo text-end">
                      <span>
                      <a href="#" class="btn btn-primary btn-lg">Ship Now</a>
                      </span>
                    </div> -->
                </div>
              </div>
          </div>
          <hr>
          <div class="w-25">
            <form action="consolidate_step-1.php" method="post">
              <select class="form-select" name="action" onchange="this.form.submit()">
                  <option value="" disabled selected>Choose Action</option>
                  <option value="inspect">Inspect Package(s)</option>
                  <option value="request-photos">Request Additional Photos</option>
                  <option value="repack">Repack, Consolidate or Merge Package(s)</option>
                  <option value="dispose">Trash or Dispose Package(s)</option>
                  <option value="return">Return Package to Sender</option>
              </select>
          </form>
          
          </div>
        </section>
      </div>
    </div>
  </div>

  <section class="pt-3">
    <div class="container-fluid">
      <div class="card shadow-sm">
        <div class="card-body">
          <h5 class="text-center p-3">Any Special Request</h5>
          <div class="row">
            <div class="col text-end">
              <button type="button" class="btn btn-primary">Inspect Package(s)</button>
            </div>
            <div class="col">Verfiy shipment label, contents, quantities or condtion
              <div class="text-primary">$2.5 per shipment</div>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col text-end">
              <button type="button" class="btn btn-warning">Request Additional Photos</button>
            </div>
            <div class="col">Order more photos to confirm color, condtion and details
              <div class="text-primary">$2.5 per shipment</div>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col text-end">
              <button type="button" class="btn btn-success">Consolidate</button>
            </div>
            <div class="col">Boxes will be shipped in original box but together
              <div class="text-primary">$1 per shipment</div>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col text-end">
              <button type="button" class="btn btn-success">Repack, Consolidate or Merge Package(s)</button>
            </div>
            <div class="col">Boxes will be unpacked and put together into one singe box
              <div class="text-primary">$2.5 per shipment</div>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col text-end">
              <button type="button" class="btn btn-danger">Trash or Dispose Package(s)</button>
            </div>
            <div class="col">Dispose of the shipment and its content
              <div class="text-primary">$0 per shipment</div>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col text-end">
              <button type="button" class="btn btn-dark">Return Package to Sender</button>
            </div>
            <div class="col">Return Package to origin Sender
              <div class="text-primary">$1.5 per shipment</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
</section>



<?php include 'footer.php';?>
