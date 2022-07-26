<?php
include "$_SERVER[DOCUMENT_ROOT]/Admin/include/Header.php";
include "$_SERVER[DOCUMENT_ROOT]/Admin/include/SideNav.php";
 ?>
<main>
  <div class="container-fluid px-4">
      <h1 class="mt-4">Dashboard</h1>
      <ol class="breadcrumb mb-4">
          <li class="breadcrumb-item"><a href="../Dashboard.php">Dashboard</a></li>
            <li class="breadcrumb-item active">Payments</li>
      </ol>
      <div class="row">
          <div class="col-xl-3 col-md-3">
              <div class="card bg-success text-white mb-4">
                  <div class="card-body"> Sales Payments
                    <br>
                        <h1 class="mt-4">  90,000 pkr </h1>
                  </div>
                  <div class="card-footer d-flex align-items-center justify-content-between">
                      <a class="small text-white stretched-link" href="Payments.php">View Details</a>
                      <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                  </div>
              </div>
          </div>
          <div class="col-xl-3 col-md-3">
              <div class="card bg-success text-white mb-4">
                  <div class="card-body">Order Payments
                    <br>
                        <h1 class="mt-4">10,000 pkr</h1>
                  </div>
                  <div class="card-footer d-flex align-items-center justify-content-between">
                      <a class="small text-white stretched-link" href="OrdersPayment.php">View Details</a>
                      <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                  </div>
              </div>

          </div>
          <div class="card mb-4">
              <div class="card-header">
                  <i class="fas fa-chart-area me-1"></i>
                  Area Chart Example
              </div>
              <div class="card-body"><canvas id="myAreaChart" width="100%" height="30"></canvas></div>
              <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>
</div>
</main>
<?php include "$_SERVER[DOCUMENT_ROOT]/Admin/include/footer.php";  ?>
