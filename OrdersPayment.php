<?php
include('Header.php')

 ?>

 <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="Dashboard.php">Dashboard</a></li>
                              <li class="breadcrumb-item"><a href="PaymentDashboard.php">Payment Dashboard</a></li>
                            <li class="breadcrumb-item active">Orders Payments</li>
                        </ol>
                        <div class="container">
       <div class="table-wrapper">
           <div class="table-title">
               <div class="row">
                   <div class="col-sm-6">
           <h2>Manage <b>Payments</b></h2><br>
          <input class="form-control" id="myInput" type="text" placeholder="Search..">
         </div>
         <div class="col-sm-6">
           <br><br>
           <a href="#addstock" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add Payments</span></a>
           <a href="#deletestock" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Delete Payments</span></a>
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
                       <th>Payment Id</th>
                       <th>Total  Amount</th>
                       <th>Order Id</th>
                       <th>Collected <br> Amount</th>
                       <th>Saller Name</th>
                       <th>Van Id</th>
                       <th>Date</th>
                       <th>Actions</th>
                   </tr>
               </thead>
               <tbody id="myDIV">
                   <tr>
           <td>
             <span class="custom-checkbox">
               <input type="checkbox" id="checkbox1" name="options[]" value="1">
               <label for="checkbox1"></label>
             </span>
           </td>
                       <td>Payid-101</td>
                       <td>34,000 Pkr</td>
                       <td>Od-201</td>
                       <td>34,000 Pkr</td>
                       <td>Kaleem khan</td>
                       <td>Lan 9810-B </td>
                       <td>10-09-2022</td>
                       <td>
                           <a href="#editstock" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                           <a href="#deletestock" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                       </td>
                   </tr>
                   <tr>
           <td>
             <span class="custom-checkbox">
               <input type="checkbox" id="checkbox2" name="options[]" value="1">
               <label for="checkbox2"></label>
             </span>
           </td>
           <td>Payid-101</td>
           <td>34,000 Pkr</td>
           <td>Od-201</td>
           <td>34,000 Pkr</td>
           <td>Kaleem khan</td>
           <td>Lan 9810-B </td>
           <td>10-09-2022</td>
                       <td>
                           <a href="#editstock" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                           <a href="#deletestock" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                       </td>
                   </tr>
         <tr>
           <td>
             <span class="custom-checkbox">
               <input type="checkbox" id="checkbox3" name="options[]" value="1">
               <label for="checkbox3"></label>
             </span>
           </td>
           <td>Payid-101</td>
           <td>34,000 Pkr</td>
           <td>Od-201</td>
           <td>34,000 Pkr</td>
           <td>Kaleem khan</td>
           <td>Lan 9810-B </td>
           <td>10-09-2022</td>
                           <td>
                           <a href="#editstock" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                           <a href="#deletestock" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                       </td>
                   </tr>
                   <tr>
           <td>
             <span class="custom-checkbox">
               <input type="checkbox" id="checkbox4" name="options[]" value="1">
               <label for="checkbox4"></label>
             </span>
           </td>
           <td>Payid-101</td>
           <td>34,000 Pkr</td>
           <td>Od-201</td>
           <td>34,000 Pkr</td>
           <td>Kaleem khan</td>
           <td>Lan 9810-B </td>
           <td>10-09-2022</td>
                           <td>
                           <a href="#editstock" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                           <a href="#deletestock" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                       </td>
                   </tr>
         <tr>
           <td>
             <span class="custom-checkbox">
               <input type="checkbox" id="checkbox5" name="options[]" value="1">
               <label for="checkbox5"></label>
             </span>
                           </td>
                           <td>Payid-101</td>
                           <td>34,000 Pkr</td>
                           <td>Od-201</td>
                           <td>34,000 Pkr</td>
                           <td>Kaleem khan</td>
                           <td>Lan 9810-B </td>
                           <td>10-09-2022</td>
                           <td>
                           <a href="#editstock" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                           <a href="#deletestock" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                       </td>
                   </tr>
               </tbody>
           </table>
     <div class="clearfix">
               <div class="hint-text">Showing <b>5</b> out of <b>10</b> entries</div>
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
 <div id="addstock" class="modal fade">
   <div class="modal-dialog">
     <div class="modal-content">
       <form>
         <div class="modal-header">
           <h4 class="modal-title">Add Payment</h4>
           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
         </div>
         <div class="modal-body">
           <div class="form-group">
             <label>Payment Id</label>
             <input type="text" class="form-control" required>
           </div>
           <div class="form-group">
             <label>Total Sale Amount</label>
             <input type="number" class="form-control" required>
           </div>
           <div class="form-group">
             <label>Fuesl Cost</label>
             <input type="number" class="form-control" required>
           </div>
           <div class="form-group">
             <label>Remaining Sale Amount</label>
             <input type="number" class="form-control" required>
           </div>
           <div class="form-group">
             <label>Collected Amount</label>
             <input type="number" class="form-control" required>
           </div>
           <div class="form-group">
             <label>Saller Name</label>
             <input type="text" class="form-control" required>
           </div>
           <div class="form-group">
             <label>Van Id</label>
             <input type="text" class="form-control" required>
           </div>
           <div class="form-group">
             <label>Date</label>
             <input type="date" class="form-control" required>
           </div>
         </div>
         <div class="modal-footer">
           <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
           <input type="submit" class="btn btn-success" value="Add Product">
         </div>
       </form>
     </div>
   </div>
 </div>
 <!-- Edit Modal HTML -->
 <div id="editstock" class="modal fade">
   <div class="modal-dialog">
     <div class="modal-content">
       <form>
         <div class="modal-header">
           <h4 class="modal-title">Edit Product</h4>
           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
         </div>
         <div class="modal-body">
           <div class="form-group">
             <label>Payment Id</label>
             <input type="text" class="form-control" required>
           </div>
           <div class="form-group">
             <label>Total Sale Amount</label>
             <input type="number" class="form-control" required>
           </div>
           <div class="form-group">
             <label>Fuesl Cost</label>
             <input type="number" class="form-control" required>
           </div>
           <div class="form-group">
             <label>Remaining Sale Amount</label>
             <input type="number" class="form-control" required>
           </div>
           <div class="form-group">
             <label>Collected Amount</label>
             <input type="number" class="form-control" required>
           </div>
           <div class="form-group">
             <label>Saller Name</label>
             <input type="text" class="form-control" required>
           </div>
           <div class="form-group">
             <label>Van Id</label>
             <input type="text" class="form-control" required>
           </div>
           <div class="form-group">
             <label>Date</label>
             <input type="date" class="form-control" required>
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
 <div id="deletestock" class="modal fade">
   <div class="modal-dialog">
     <div class="modal-content">
       <form>
         <div class="modal-header">
           <h4 class="modal-title">Delete Product</h4>
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
