<?php
include('Header.php')
 ?>
 <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="Dashboard.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Products</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-1 col-md-3">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Special Kulfi <br>
                                        <h1 class="mt-4">320 Cartons</h1>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="Product-01.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        <div class="col-xl-1 col-md-3">
                            <div class="card bg-primary text-white mb-4">
                                <div class="card-body">Badam Pista <br>
                                    <h1 class="mt-4">320 Cartons</h1>
                                </div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="Product-02.php">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                    <div class="col-xl-1 col-md-3">
                        <div class="card bg-primary text-white mb-4">
                            <div class="card-body">Kulfa Badam <br>
                                <h1 class="mt-4">320 Cartons</h1>
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
<?php
include('footer.php')
 ?>
