<?php
include('Header.php')
 ?>
 <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">

                            <li class="breadcrumb-item"><a href="Dashboard.php">Dashboard</a></li>
                              <li class="breadcrumb-item active">Roles</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-1 col-md-3">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body"> Users
                                      <br>
                                          <h1 class="mt-4">  10 </h1>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="Users.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-1 col-md-3">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Employees
                                      <br>
                                          <h1 class="mt-4">10</h1>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="Employee.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
        </div>
</main>
<?php
include('footer.php')
 ?>
