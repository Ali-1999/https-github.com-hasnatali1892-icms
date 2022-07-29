<?php include('..\include\Header.php') ?>
<?php include('..\include\SideNav.php') ?>
 <main>
                    <div class="container-fluid px-4">
                        <h4 class="mt-1">Dashboard</h4>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="../Dashboard.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Products</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-3">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">320 Cartons <br>
                                        <h4 class="mt-1">Special Kulfi</h4>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="Product-01.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        <div class="col-xl-3 col-md-3">
                            <div class="card bg-primary text-white mb-4">
                                <div class="card-body">203 Cartons <br>
                                    <h4 class="mt-1">Badam Pista</h4>
                                </div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="Product-02.php">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                    <div class="col-xl-3 col-md-3">
                        <div class="card bg-primary text-white mb-4">
                            <div class="card-body">320 Cartons <br>
                                <h4 class="mt-1">Kulfa Badam </h4>
                            </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="Product-03.php">View Details</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                      </div>
              </div>
              <div class="col-lg-6">
                  <div class="card mb-4">
                      <div class="card-header">
                          <i class="fas fa-chart-bar me-1"></i>
                          Bar Chart Example
                      </div>
                      <div class="card-body"><canvas id="myBarChart" width="100%" height="50"></canvas></div>
                      <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                  </div>
              </div>

        </div>
</main>
<?php include('..\include\footer.php') ?>
