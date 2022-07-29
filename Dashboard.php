<?php echo file_get_contents("include/Header.php")?>
<?php echo file_get_contents("include/SideNav.php")?>
<main>
                     <div class="container-fluid px-4">
                        <h3>Dashboard</h3>
                        <div class="overflow-scroll" style=" height:190px;">
                          <div class="row">
                              <div class="col-xl-3 col-md-3">
                                  <div class="card bg-warning text-white mb-4">
                                      <div class="card-body">Today Orders
                                        <br>
                                            <h4 class="mt-1">30</h4>
                                      </div>
                                      <div class="card-footer d-flex align-items-center justify-content-between">
                                          <a class="small text-white stretched-link" href="Orders/Orders.php">View Details</a>
                                          <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-xl-3 col-md-3">
                                  <div class="card bg-success text-white mb-4">
                                      <div class="card-body">Total Users
                                        <br>
                                            <h4 class="mt-1">10</h4>
                                      </div>
                                      <div class="card-footer d-flex align-items-center justify-content-between">
                                          <a class="small text-white stretched-link" href="Roles/Role.php">View Details</a>
                                          <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-xl-3 col-md-3">
                                  <div class="card bg-danger text-white mb-4">
                                      <div class="card-body">Ingrediants
                                        <br>
                                            <h4 class="mt-1">40,000 Pkr</h4>
                                      </div>
                                      <div class="card-footer d-flex align-items-center justify-content-between">
                                          <a class="small text-white stretched-link" href="ingrediants/Ingrediants.php">View Details</a>
                                          <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                      </div>
                                  </div>
                              </div>

                              <div class="col-xl-3 col-md-3">
                                  <div class="card bg-danger text-white mb-4">
                                      <div class="card-body">Stock
                                        <br>
                                            <h4 class="mt-1">320 Cartons</h4>
                                      </div>
                                      <div class="card-footer d-flex align-items-center justify-content-between">
                                          <a class="small text-white stretched-link" href="Stock/stock.php">View Details</a>
                                          <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-xl-3 col-md-3">
                                  <div class="card bg-danger text-white mb-4">
                                      <div class="card-body">Today Sales
                                        <br>
                                            <h4 class="mt-1">50,000 Pkr</h4>
                                      </div>
                                      <div class="card-footer d-flex align-items-center justify-content-between">
                                          <a class="small text-white stretched-link" href="Sales/Sales.php">View Details</a>
                                          <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-xl-3 col-md-3">
                                  <div class="card bg-danger text-white mb-4">
                                      <div class="card-body">Expenses
                                        <br>
                                            <h4 class="mt-1">34,000 pkr</h4>
                                      </div>
                                      <div class="card-footer d-flex align-items-center justify-content-between">
                                          <a class="small text-white stretched-link" href="Expenses/ExpensesDashboard.php">View Details</a>
                                          <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-xl-3 col-md-3">
                                  <div class="card bg-primary text-white mb-4">
                                      <div class="card-body">Today Products <br>
                                          <h4 class="mt-1">320 Cartons</h4>
                                      </div>
                                      <div class="card-footer d-flex align-items-center justify-content-between">
                                          <a class="small text-white stretched-link" href="Products/ProductMenu.php">View Details</a>
                                          <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-xl-3 col-md-3">
                                  <div class="card bg-danger text-white mb-4">
                                      <div class="card-body">Permissions
                                        <br>
                                            <h4 class="mt-1"><i class="fa fa-universal-access" aria-hidden="true"></i></h4>
                                      </div>
                                      <div class="card-footer d-flex align-items-center justify-content-between">
                                          <a class="small text-white stretched-link" href="permisiion/Permissions.php">View Details</a>
                                          <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                        </div>
                          <hr class="dropdown-divider">
                        <div class="row">
                            <div class="col-xl-5">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-area me-1"></i>
                                        Monthly Sale Chart
                                    </div>
                                    <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                            <div class="col-xl-5">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar me-1"></i>
                                        Yearly Order Chart
                                    </div>
                                    <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                        </div>
                    </div>
      </main>
<?php
include('include/footer.php')
 ?>
