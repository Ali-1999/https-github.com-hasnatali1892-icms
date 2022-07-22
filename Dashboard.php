<?php
include('Header.php')
 ?>
 <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-1 col-md-3">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Today Products <br>
                                        <h1 class="mt-4">320 Cartons</h1>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="ProductMenu.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-1 col-md-3">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Today Orders
                                      <br>
                                          <h1 class="mt-4">30</h1>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="Orders.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-1 col-md-3">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Total Users
                                      <br>
                                          <h1 class="mt-4">10</h1>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="Role.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-1 col-md-3">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Ingrediants
                                      <br>
                                          <h1 class="mt-4">40,000 Pkr</h1>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="Ingrediants.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-1 col-md-3">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Stock
                                      <br>
                                          <h1 class="mt-4">320 Cartons</h1>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="stock.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-1 col-md-3">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Today Sales
                                      <br>
                                          <h1 class="mt-4">50,000 Pkr</h1>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="Sales.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-1 col-md-3">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Expenses
                                      <br>
                                          <h1 class="mt-4">34,000 pkr</h1>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="ExpensesDashboard.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-1 col-md-3">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Permissions
                                      <br>
                                          <h1 class="mt-4"><i class="fa fa-universal-access" aria-hidden="true"></i></h1>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="Permissions.php">View Details</a>
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
                                        Monthly Sale Chart
                                    </div>
                                    <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                            <div class="col-xl-6">
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
include('footer.php')
 ?>
