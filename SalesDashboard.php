<?php include('Header.php') ?>
<main>
                   <div class="container-fluid px-4">
                     <h1 class="mt-4">Dashboard</h1>
                     <ol class="breadcrumb mb-4">
                         <li class="breadcrumb-item"><a href="Dashboard.php">Dashboard</a></li>
                           <li class="breadcrumb-item active">Sales </li>
                     </ol>
                     <div class="row">
                         <div class="col-xl-1 col-md-3">
                             <div class="card bg-primary text-white mb-4">
                                 <div class="card-body">Van Id LE-9081<br>
                                     <h1 class="mt-4">34,888 pkr</h1>
                                 </div>
                                 <div class="card-footer d-flex align-items-center justify-content-between">
                                     <a class="small text-white stretched-link" href="saleV01.php">View Details</a>
                                     <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                 </div>
                             </div>
                         </div>
                         <div class="col-xl-1 col-md-3">
                             <div class="card bg-primary text-white mb-4">
                                 <div class="card-body">Van ID DB-0918 <br>
                                     <h1 class="mt-4">80,900 pkr</h1>
                                 </div>
                                 <div class="card-footer d-flex align-items-center justify-content-between">
                                     <a class="small text-white stretched-link" href="SaleV02.php">View Details</a>
                                     <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                 </div>
                             </div>
                         </div>
                         <div class="col-xl-1 col-md-3">
                             <div class="card bg-primary text-white mb-4">
                                 <div class="card-body">Van Id ISD-9987 <br>
                                     <h1 class="mt-4">1,02,000</h1>
                                 </div>
                                 <div class="card-footer d-flex align-items-center justify-content-between">
                                     <a class="small text-white stretched-link" href="SaleV03.php">View Details</a>
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
                                     Monthly Sales
                                 </div>
                                 <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                             </div>
                         </div>
                         <div class="col-xl-6">
                             <div class="card mb-4">
                                 <div class="card-header">
                                     <i class="fas fa-chart-bar me-1"></i>
                                     Yearly Sale
                                 </div>
                                 <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                             </div>
                         </div>
                     </div>
               </div>
     </main>
<?php include('footer.php') ?>
