<?php include('..\include\Header.php') ?>
<?php include('..\include\SideNav.php') ?>
 <main>
                    <div class="container-fluid px-4">
                    <h1 class="mt-4">Dashboard</h1>
                  <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="../Dashboard.php">Dashboard</a></li>
                    <li class="breadcrumb-item active">Permission</li>
                  </ol>
  <div class="container">
       <div class="table-wrapper">
           <div class="table-title">
               <div class="row">
                   <div class="col-sm-6">
           <h2>Manage <b>Permission</b></h2>
           <br>
          <input class="form-control" id="myInput" type="text" placeholder="Search..">
         </div>
               </div>
           </div>
           <table class="table table-scroll table-striped">
               <thead>
                   <tr>
           <th>
             <span class="custom-checkbox">
               <input type="checkbox" id="selectAll">
               <label for="selectAll"></label>
             </span>
             </th>
                       <th>Permission Id</th>
                       <th>Role Id</th>
                       <th>Role </th>
                       <th>Status</th>
                       <th>Permissions</th>
                       <th>Edit Permission</th>
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
                      <td>PID-01</td>
                       <td>RID-01</td>
                       <td>Admin</td>
                       <td>Active</td>
                       <td><b>Dashboard ,
                         Ingrediants ,
                         Sales ,
                         Payments ,
                         Orders ,
                         Stock ,
                         Products ,
                         Permissions ,
                         Users ,
                         Expenses
                        </b>
                       </td>
                       <td>

<div class="btn-group">
    <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#edit"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</button>

</div>
                       </td>
                   </tr>
                   <tr>
           <td>
             <span class="custom-checkbox">
               <input type="checkbox" id="checkbox2" name="options[]" value="1">
               <label for="checkbox2"></label>
             </span>
           </td>
           <td>PID-02</td>
            <td>RID-02</td>
            <td>Finanace Manger</td>
            <td>Active</td>
            <td><b>Dashboard ,
              Ingrediants ,
              Sales ,
              Payments ,
              Orders ,
              Stock ,
              Products ,
              Permissions ,
              Users ,
              Expenses
             </b>
            </td>
                       <td>

<div class="btn-group">
    <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#edit"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</button>

</div>
                       </td>
                   </tr>
         <tr>
           <td>
             <span class="custom-checkbox">
               <input type="checkbox" id="checkbox3" name="options[]" value="1">
               <label for="checkbox3"></label>
             </span>
           </td>
           <td>PID-03</td>
            <td>RID-03</td>
            <td>Product Manager</td>
            <td>Active</td>
            <td><b>Dashboard ,
              Ingrediants ,
              Sales ,
              Payments ,
              Orders ,
              Stock ,
              Products ,
              Permissions ,
              Users ,
              Expenses
             </b>
            </td>
           <td>

<div class="btn-group">
    <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#edit"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</button>

</div>
                       </td>
                   </tr>
                   <tr>
           <td>
             <span class="custom-checkbox">
               <input type="checkbox" id="checkbox4" name="options[]" value="1">
               <label for="checkbox4"></label>
             </span>
           </td>
           <td>PID-04</td>
            <td>RID-04</td>
            <td>Cashier</td>
            <td>Active</td>
            <td><b>
              Dashboard ,
              Ingrediants ,
              Sales ,
              Payments ,
              Orders ,
              Stock ,
              Products ,
              Permissions ,
              Users ,
              Expenses
             </b>
            </td>
                       <td>

<div class="btn-group">
    <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#edit"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</button>

</div>
                       </td>
                   </tr>
         <tr>
           <td>
             <span class="custom-checkbox">
               <input type="checkbox" id="checkbox5" name="options[]" value="1">
               <label for="checkbox5"></label>
             </span>
           </td>
                 <td>PID-05</td>
                  <td>RID-05</td>
                  <td>Saller</td>
                  <td>Active</td>
                  <td><b>
                    Dashboard ,
                    Ingrediants ,
                    Sales ,
                    Payments ,
                    Orders ,
                    Stock ,
                    Products ,
                    Permissions ,
                    Users ,
                    Expenses
                   </b>
            </td>
                       <td>

<div class="btn-group">
    <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#edit"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</button>

</div>
                       </td>
                   </tr>
                   <tr>
                     <td>
                       <span class="custom-checkbox">
                         <input type="checkbox" id="checkbox5" name="options[]" value="1">
                         <label for="checkbox5"></label>
                       </span>
                     </td>
                     <td>PID-06</td>
                      <td>RID-06</td>
                      <td>Shope keepar</td>
                      <td>Active</td>
                      <td><b>
                        Dashboard ,
                        Ingrediants ,
                        Sales ,
                        Payments ,
                        Orders ,
                        Stock ,
                        Products ,
                        Permissions ,
                        Users ,
                        Expenses
                       </b>
                      </td>
                                 <td>

          <div class="btn-group">
    <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#edit"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</button>

</div>
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
 <div id="edit" class="modal fade">
   <div class="modal-dialog modal-lg">
     <div class="modal-content">
       <form accept-charset="utf-8">
         <div class="modal-header">
           <h4 class="modal-title">Edit Permission</h4>
           <button type="button" class="close" data-bs-dismiss="modal" aria-hidden="true">&times;</button>
         </div>
         <div class="modal-body">
                                     <div class="row">
                                       <div class="col">
                                         <div class="mb-3">
                                             <label for="email" class="form-label text-uppercase"><small>Dashboard</small></label>
                                             <div class="form-check form-switch">
                                               <input class="form-check-input" type="checkbox" id="switch1">
                                               <label class="form-check-label" for="switch1">Open dashboard page</label>
                                             </div>
                                         </div>
                                       </div>
                                       <div class="col">
                                         <div class="mb-3">
                                             <label for="email" class="text-uppercase"><small>Users</small></label>
                                             <div class="form-check form-switch">
                                               <input class="form-check-input" type="checkbox" id="switch2">
                                               <label class="form-check-label" for="switch2">Add User</label>
                                             </div>
                                             <div class="form-check form-switch">
                                               <input class="form-check-input" type="checkbox" id="switch3">
                                               <label class="form-check-label" for="switch3">Edit User</label>
                                             </div>
                                             <div class="form-check form-switch">
                                               <input class="form-check-input" type="checkbox" id="switch4">
                                               <label class="form-check-label" for="switch4">Delete User</label>
                                             </div>
                                         </div>
                                       </div>
                                       <div class="col">
                                         <div class="mb-3">
                                             <label for="email" class="text-uppercase"><small>Products</small></label>
                                             <div class="form-check form-switch">
                                               <input class="form-check-input" type="checkbox" id="switch5">
                                               <label class="form-check-label" for="switch2">Add Product</label>
                                             </div>
                                             <div class="form-check form-switch">
                                               <input class="form-check-input" type="checkbox" id="switch6">
                                               <label class="form-check-label" for="switch3">Edit Product</label>
                                             </div>
                                             <div class="form-check form-switch">
                                               <input class="form-check-input" type="checkbox" id="switch7">
                                               <label class="form-check-label" for="switch4">Delete Product</label>
                                             </div>
                                         </div>
                                       </div>
                                     </div>
                                     <div class="row">
                                       <div class="col">
                                         <div class="mb-3">
                                             <label for="email" class="text-uppercase"><small>Orders</small></label>
                                             <div class="form-check form-switch">
                                               <input class="form-check-input" type="checkbox" id="switch2">
                                               <label class="form-check-label" for="switch2">Add Order</label>
                                             </div>
                                             <div class="form-check form-switch">
                                               <input class="form-check-input" type="checkbox" id="switch3">
                                               <label class="form-check-label" for="switch3">Edit Order</label>
                                             </div>
                                             <div class="form-check form-switch">
                                               <input class="form-check-input" type="checkbox" id="switch4">
                                               <label class="form-check-label" for="switch4">Delet Order</label>
                                             </div>
                                       </div>
                                    </div>
                                       <div class="col">
                                         <div class="mb-3">
                                             <label for="email" class="text-uppercase"><small>Sales</small></label>
                                             <div class="form-check form-switch">
                                               <input class="form-check-input" type="checkbox" id="switch2">
                                               <label class="form-check-label" for="switch2">Add Sale</label>
                                             </div>
                                             <div class="form-check form-switch">
                                               <input class="form-check-input" type="checkbox" id="switch3">
                                               <label class="form-check-label" for="switch3">Edit Sale</label>
                                             </div>
                                             <div class="form-check form-switch">
                                               <input class="form-check-input" type="checkbox" id="switch4">
                                               <label class="form-check-label" for="switch4">Delete Sale</label>
                                             </div>
                                         </div>
                                       </div>
                                       <div class="col">
                                         <div class="mb-3">
                                             <label for="email" class="text-uppercase"><small>Expenses</small></label>
                                             <div class="form-check form-switch">
                                               <input class="form-check-input" type="checkbox" id="switch5">
                                               <label class="form-check-label" for="switch2">Add Expenses</label>
                                             </div>
                                             <div class="form-check form-switch">
                                               <input class="form-check-input" type="checkbox" id="switch6">
                                               <label class="form-check-label" for="switch3">Edit Expenses</label>
                                             </div>
                                             <div class="form-check form-switch">
                                               <input class="form-check-input" type="checkbox" id="switch7">
                                               <label class="form-check-label" for="switch4">Delete Expenses</label>
                                             </div>
                                         </div>
                                       </div>
                                     </div>
                                     <div class="row">
                                       <div class="col">
                                         <div class="mb-3">
                                             <label for="email" class="text-uppercase"><small>Stock</small></label>
                                             <div class="form-check form-switch">
                                               <input class="form-check-input" type="checkbox" id="switch8">
                                               <label class="form-check-label" for="switch2">Add Stock</label>
                                             </div>
                                             <div class="form-check form-switch">
                                               <input class="form-check-input" type="checkbox" id="switch9">
                                               <label class="form-check-label" for="switch3">Edit Stock</label>
                                             </div>
                                             <div class="form-check form-switch">
                                               <input class="form-check-input" type="checkbox" id="switch10">
                                               <label class="form-check-label" for="switch4">Delete Stock</label>
                                             </div>
                                         </div>
                                       </div>
                                       <div class="col">
                                         <div class="mb-3">
                                             <label for="email" class="text-uppercase"><small>Ingrediants</small></label>
                                             <div class="form-check form-switch">
                                               <input class="form-check-input" type="checkbox" id="switch11">
                                               <label class="form-check-label" for="switch2">Add Ingrediants</label>
                                             </div>
                                             <div class="form-check form-switch">
                                               <input class="form-check-input" type="checkbox" id="switch12">
                                               <label class="form-check-label" for="switch3">Edit Ingrediants</label>
                                             </div>
                                             <div class="form-check form-switch">
                                               <input class="form-check-input" type="checkbox" id="switch13">
                                               <label class="form-check-label" for="switch4">Delete Delete</label>
                                             </div>
                                         </div>
                                       </div>
                                       <div class="col">
                                         <div class="mb-3">
                                             <label for="email" class="text-uppercase"><small>Payments</small></label>
                                             <div class="form-check form-switch">
                                               <input class="form-check-input" type="checkbox" id="switch11">
                                               <label class="form-check-label" for="switch2">Add Payment</label>
                                             </div>
                                             <div class="form-check form-switch">
                                               <input class="form-check-input" type="checkbox" id="switch12">
                                               <label class="form-check-label" for="switch3">Edit Payment</label>
                                             </div>
                                             <div class="form-check form-switch">
                                               <input class="form-check-input" type="checkbox" id="switch13">
                                               <label class="form-check-label" for="switch4">Delete Payment</label>
                                             </div>
                                         </div>
                                       </div>
                                     </div>
                                     <div class="row">
                                       <div class="col">
                                         <div class="mb-3">
                                             <label for="email" class="text-uppercase"><small>Roles & Permissions</small></label>

                                             <div class="form-check form-switch">
                                               <input class="form-check-input" type="checkbox" id="switch5">
                                               <label class="form-check-label" for="switch5">Add Roles</label>
                                             </div>
                                             <div class="form-check form-switch">
                                               <input class="form-check-input" type="checkbox" id="switch6">
                                               <label class="form-check-label" for="switch6">Edit Roles</label>
                                             </div>
                                             <div class="form-check form-switch">
                                               <input class="form-check-input" type="checkbox" id="switch7">
                                               <label class="form-check-label" for="switch7">Delete Roles</label>
                                             </div>
                                             <div class="form-check form-switch">
                                               <input class="form-check-input" type="checkbox" id="switch8">
                                               <label class="form-check-label" for="switch8">Update Permissions</label>
                                             </div>
                                     </div>
                                 </div>
                            </div>
                       </div>
                       <div class="modal-footer">
                          <input type="button" class="btn btn-default" data-bs-dismiss="modal" value="Cancel">
                          <input type="submit" class="btn btn-info" value="Save">
                  </div>
            </form>
     </div>
   </div>
 </div>
</div>
</main>
<?php include('..\include\footer.php') ?>
