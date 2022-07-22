<?php
include('Header.php')
 ?>

 <main>
                    <div class="container-fluid px-4">
                      <h1 class="mt-4">Dashboard</h1>
                      <ol class="breadcrumb mb-4">
                          <li class="breadcrumb-item"><a href="Dashboard.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Ingrediant</li>
                      </ol>
                      <div class="row">
                          <div class="col-xl-1 col-md-3">
                              <div class="card bg-primary text-white mb-4">
                                  <div class="card-body">Milk <br>
                                      <h1 class="mt-4">320 Liter</h1>
                                  </div>
                                  <div class="card-footer d-flex align-items-center justify-content-between">
                                      <a class="small text-white stretched-link" href="Milk.php">View Details</a>
                                      <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-xl-1 col-md-3">
                              <div class="card bg-primary text-white mb-4">
                                  <div class="card-body">Choclate <br>
                                      <h1 class="mt-4">10 Cartons</h1>
                                  </div>
                                  <div class="card-footer d-flex align-items-center justify-content-between">
                                      <a class="small text-white stretched-link" href="Choclate.php">View Details</a>
                                      <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-xl-1 col-md-3">
                              <div class="card bg-primary text-white mb-4">
                                  <div class="card-body">Sugar <br>
                                      <h1 class="mt-4">50 Kg</h1>
                                  </div>
                                  <div class="card-footer d-flex align-items-center justify-content-between">
                                      <a class="small text-white stretched-link" href="Sugar.php">View Details</a>
                                      <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-xl-1 col-md-3">
                              <div class="card bg-primary text-white mb-4">
                                  <div class="card-body">Flavours<br>
                                      <h1 class="mt-4">89 liter</h1>
                                  </div>
                                  <div class="card-footer d-flex align-items-center justify-content-between">
                                      <a class="small text-white stretched-link" href="Sugar.php">View Details</a>
                                      <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-xl-6">
                              <div class="card mb-4">
                                  <div class="card-header">
                                      <i class="fas fa-chart-area me-1"></i>
                                      Monthly Used Ingrediants
                                  </div>
                                  <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                              </div>
                          </div>
                          <div class="col-xl-6">
                              <div class="card mb-4">
                                  <div class="card-header">
                                      <i class="fas fa-chart-bar me-1"></i>
                                      Yearly used Ingrediants 
                                  </div>
                                  <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                              </div>
                          </div>
                      </div>
                  </div>
      </main>
<?php
include('footer.php')
 ?>
