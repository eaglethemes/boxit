
<?php include 'header.php';?>

<?php include 'customer_menu.php';?>


<section class=" bg-light p-5 ">
  <div class="container-fluid ">
        <div class="row">
          <div class="col col-md-10">
            <h2 class="pb-2">My Incoming Shipments</h2>
          </div>
          <div class="col text-end">
            <a href="add_shipment.php" class="btn btn-outline-primary">Add Shipment</a>
          </div>
        </div>
    <div class="card shadow-sm">
      <div class="card-body">
        <ul class="nav nav-pills">
          <li class="nav-item">
            <a class="nav-link active" href="#">All</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Ready to ship</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">In Progress</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="#">On Hold</a>
          </li>
        </ul>
        
        <hr>
        <section class="shipment_list">
          <div class="row ">
            <div class="col col-md-1 pt-3">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="check1" name="option1" value="something" >
                <label class="form-check-label"><a href="shipment_details.php">29834340</a></label>
              </div>
            </div>
            <div class="col col-md-1 text-center">
              <img src="img/cat_icon/freight_desktop2x.png" class="img-fluid" />
              <div class="shipment_img_count"><span class="badge rounded-pill bg-primary">1</span></div>
            </div>
            <div class="col">
              <small>Arrived at:</small> <br>
              12 March 2022
            </div>
            <div class="col">
              <small>Sender:</small> <br>
              Amazon.com
            </div>
            <div class="col">
              <small>Content:</small> <br>
              Samsung i PRO
              <br>
              iPhone 13 PRO
              <br>
              +1 more</div>
            <div class="col">
              <small>Total Value:</small> <br>
              $699</div>
            <div class="col">
              <small>Weight:</small> <br>
              <span class="badge rounded-pill bg-secondary">1.5lbs</span><br>
              <small class="text-muted">12x12x12 Inches</small>
            </div>
            <div class="col pt-3">
              <span class="badge rounded-pill bg-success">Ready to ship</span>
            </div>
            <div class="col pt-3">
              <a class="btn btn-sm btn-outline-primary" data-bs-toggle="tooltip" title="View deatils"><i class="fa fa-eye" aria-hidden="true"></i></a>
              <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-primary dropdown-toggle" data-bs-toggle="dropdown" ><i class="fa fa-list" aria-hidden="true"></i></button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">Inspect Package(s)</a>
                  <a class="dropdown-item" href="#">More photos</a>
                </div>
              </div>
            </div>
          </div>
          <hr>
          <div class="row ">
            <div class="col col-md-1 pt-3">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="check1" name="option1" value="something" >
                <label class="form-check-label"><a href="">29834340</a></label>
              </div>
            </div>
            <div class="col col-md-1 text-center">
              <img src="img/cat_icon/freight_desktop2x.png" class="img-fluid" />
              <div class="shipment_img_count"><span class="badge rounded-pill bg-primary">1</span></div>
            </div>
            <div class="col">
              <small>Arrived at:</small> <br>
              12 March 2022
            </div>
            <div class="col">
              <small>Sender:</small> <br>
              Amazon.com
            </div>
            <div class="col">
              <small>Content:</small> <br>
              iPhone 13 PRO</div>
            <div class="col">
              <small>Value:</small> <br>
              $699</div>
            <div class="col">
              <small>Weight:</small> <br>
              <span class="badge rounded-pill bg-secondary">1.5lbs</span><br>
              <small class="text-muted">12x12x12 Inches</small>
            </div>
            <div class="col pt-3">
              <span class="badge rounded-pill bg-danger">Incoming Pending</span>
            </div>
            <div class="col pt-3">
              <a class="btn btn-sm btn-outline-primary" data-bs-toggle="tooltip" title="View deatils"><i class="fa fa-eye" aria-hidden="true"></i></a>
              <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-primary dropdown-toggle" data-bs-toggle="dropdown" ><i class="fa fa-list" aria-hidden="true"></i></button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">Inspect Package(s)</a>
                  <a class="dropdown-item" href="#">More photos</a>
                </div>
              </div>
            </div>
          </div>
          <hr>
          <div class="w-25">
            <select class="form-select">
              <option>Choose Action</option>
              <option>Inspect Package(s)</option>
              <option>Request Additional Photos</option>
              <option>Repack, Consolidate or Merge Package(s)</option>
              <option>Trash or Dispose Package(s)</option>
              <option>Return Package to Sender</option>
            </select>
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
