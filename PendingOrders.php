<?php
include('Header.php')

 ?>
 <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Oreders List</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="Dashboard.php">Dashboard</a></li>
                              <li class="breadcrumb-item"><a href="Orders.php">Orders</a></li>
                            <li class="breadcrumb-item active">Pending Orders</li>
                        </ol>
                        <div class="container">
       <div class="table-wrapper">
           <div class="table-title">
               <div class="row">
                   <div class="col-sm-6">
           <h2>Manage <b>Orders</b></h2><br>
          <input class="form-control" id="myInput" type="text" placeholder="Search..">
         </div>
         <div class="col-sm-6">
           <br><br>
           <a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Delete Orders</span></a>
         </div>
               </div>
           </div>
           <table class="table table-bordered table-striped">
               <thead>
                   <tr>
           <th>
             <span class="custom-checkbox">
               <input type="checkbox" id="selectAll">
               <label for="selectAll"></label>
             </span>
           </th>
                       <th>Oredr Id</th>
                       <th>Ship Address</th>
                       <th>Shiped By</th>
                       <th>Date</th>
                       <th>Status</th>
                       <th>Products</th>
                       <th>Total Bill</th>
                       <th>Actions</th>
                   </tr>
               </thead id="myDIV">
               <tbody>
                   <tr>
           <td>
             <span class="custom-checkbox">
               <input type="checkbox" id="checkbox1" name="options[]" value="1">
               <label for="checkbox1"></label>
             </span>
           </td>
                       <td>Od-201</td>
                       <td>Al-kreem shop G-9 Masood Arcade</td>
                       <td></td>
                       <td>11-01-2022</td>
                       <td>Pending</td>
                       <td>3 Carton Badami pista <br>
                          4 Carton Punjabi Special
                       </td>
                       <td>9000</td>
                       <td>
                           <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                           <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                       </td>
                   </tr>
                   <tr>
           <td>
             <span class="custom-checkbox">
               <input type="checkbox" id="checkbox2" name="options[]" value="1">
               <label for="checkbox2"></label>
             </span>
           </td>
           <td>Od-201</td>
           <td>Al-kreem shop G-9 Masood Arcade</td>
           <td></td>
           <td>11-01-2022</td>
           <td>Pending</td>
           <td>3 Carton Badami pista <br>
              4 Carton Punjabi Special
           </td>
           <td>9000</td>
                       <td>
                           <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                           <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                       </td>
                   </tr>
         <tr>
           <td>
             <span class="custom-checkbox">
               <input type="checkbox" id="checkbox3" name="options[]" value="1">
               <label for="checkbox3"></label>
             </span>
           </td>
           <td>Od-201</td>
           <td>Al-kreem shop G-9 Masood Arcade</td>
           <td></td>
           <td>11-01-2022</td>
           <td>Pending</td>
           <td>3 Carton Badami pista <br>
              4 Carton Punjabi Special
           </td>
           <td>9000</td>
                       <td>
                           <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                           <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                       </td>
                   </tr>
                   <tr>
           <td>
             <span class="custom-checkbox">
               <input type="checkbox" id="checkbox4" name="options[]" value="1">
               <label for="checkbox4"></label>
             </span>
           </td>
           <td>Od-201</td>
           <td>Al-kreem shop G-9 Masood Arcade</td>
           <td></td>
           <td>11-01-2022</td>
           <td>Pending</td>
           <td>3 Carton Badami pista <br>
              4 Carton Punjabi Special
           </td>
           <td>9000</td>
                       <td>
                           <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                           <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                       </td>
                   </tr>
         <tr>
           <td>
             <span class="custom-checkbox">
               <input type="checkbox" id="checkbox5" name="options[]" value="1">
               <label for="checkbox5"></label>
             </span>
           </td>
           <td>Od-201</td>
           <td>Al-kreem shop G-9 Masood Arcade</td>
           <td></td>
           <td>11-01-2022</td>
           <td>Pending</td>
           <td>3 Carton Badami pista <br>
              4 Carton Punjabi Special
           </td>
           <td>9000</td>
                       <td>
                           <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                           <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                       </td>
                   </tr>
               </tbody>
           </table>
     <div class="clearfix">
               <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
               <ul class="pagination">
                   <li class="page-item disabled"><a href="#">Previous</a></li>
                   <li class="page-item"><a href="#" class="page-link">1</a></li>
                   <li class="page-item"><a href="#" class="page-link">2</a></li>
                   <li class="page-item active"><a href="#" class="page-link">3</a></li>
                   <li class="page-item"><a href="#" class="page-link">4</a></li>
                   <li class="page-item"><a href="#" class="page-link">5</a></li>
                   <li class="page-item"><a href="#" class="page-link">Next</a></li>
               </ul>
           </div>
       </div>
   </div>
  <!-- Edit Modal HTML -->
 <div id="editEmployeeModal" class="modal fade">
   <div class="modal-dialog">
     <div class="modal-content">
       <form >
         <div class="modal-header">
           <h4 class="modal-title">Edit Order</h4>
           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
         </div>
         <div class="modal-body">
         <div class="row">
           <div class="col">
             <div class="row">
               <div class="col">
                 <div class="form-group">
                   <label>Shipped By</label>
                   <input class="form-control" type="text" name="name" placeholder="Rashid" value="Rashid Ali">
                 </div>
               </div>
               <div class="col">
                 <div class="form-group">
                   <label>Quantity</label><br>
                   <div class="btn-group open">
                   <a class="btn btn-primary" href="#"> Status</a>
                   <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#">
                   </a>
                   <ul class="dropdown-menu">
                   <li><a href="#">On hold</a></li>
                   <li class="divider"></li>
                   <li><a href="#">Completed</a></li>
                   </ul>
                   </div>
                 </div>
               </div>
             </div>
             <div class="row">
               <div class="col">
                 <div class="form-group">
                   <label>Van Id</label>
                   <input class="form-control" type="text" placeholder="LB-0191">
                 </div>
               </div>
               <div class="col">
                 <div class="form-group">
                   <label>Shipped Date</label>
                   <input class="form-control" type="date" name="date" >
                 </div>
               </div>
             </div>
           </div>
         </div>
         </div>
         <div class="modal-footer">
            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
            <input type="submit" class="btn btn-info" value="Save">
        </div>
      </form>
     </div>
   </div>
 </div>
 <!-- Delete Modal HTML -->
 <div id="deleteEmployeeModal" class="modal fade">
   <div class="modal-dialog">
     <div class="modal-content">
       <form>
         <div class="modal-header">
           <h4 class="modal-title">Delete Order</h4>
           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
         </div>
         <div class="modal-body">
           <p>Are you sure you want to delete these Records?</p>
           <p class="text-warning"><small>This action cannot be undone.</small></p>
         </div>
         <div class="modal-footer">
           <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
           <input type="submit" class="btn btn-danger" value="Delete">
         </div>
       </form>
     </div>
   </div>
 </div>
</div>
      </main>
<?php
include('footer.php')
 ?>
