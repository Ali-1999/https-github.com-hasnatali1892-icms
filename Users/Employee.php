<?php
include "$_SERVER[DOCUMENT_ROOT]/Admin/include/Header.php";
include "$_SERVER[DOCUMENT_ROOT]/Admin/include/SideNav.php";
 ?>
 <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="../Dashboard.php">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="UserDashboard.php">User</a></li>
                              <li class="breadcrumb-item active">Employees</li>
                        </ol>
                        <div class="container">
       <div class="table-wrapper">
           <div class="table-title">
               <div class="row">
                   <div class="col-sm-6">
           <h2>Manage <b>Employees</b></h2>
           <br>
          <input class="form-control" id="myInput" type="text" placeholder="Search..">
         </div>
         <div class="col-sm-6">
           <br>
           <br>
           <a href="#add" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Employee</span></a>
           <a href="#delete" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Delete</span></a>
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
                       <th>Use Id</th>
                       <th>Name</th>
                       <th>Email</th>
                       <th>Address</th>
                       <th>Phone</th>
                       <th>CNIC</th>
                       <th>Role</th>
                       <th>Status</th>
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
                      <td>U-01</td>
                       <td>M Saleem</td>
                       <td>@mail.com</td>
                       <td>Railway line, Burhan House 209 </td>
                       <td>(171) 555-2222</td>
                       <td>35402-6854390-1</td>
                       <td>Employee</td>
                       <td>Active</td>
                       <td>
                           <a href="#edit" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                           <a href="#delete" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                       </td>
                   </tr>
                   <tr>
           <td>
             <span class="custom-checkbox">
               <input type="checkbox" id="checkbox2" name="options[]" value="1">
               <label for="checkbox2"></label>
             </span>
           </td>
                   <td>U-01</td>
                   <td>M Saleem</td>
                   <td>@mail.com</td>
                   <td>Railway line, Burhan House 209 </td>
                   <td>(171) 555-2222</td>
                   <td>35402-6854390-1</td>
                   <td>Employee</td>
                   <td>Active</td>
                       <td>
                           <a href="#edit" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                           <a href="#delete" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                       </td>
                   </tr>
         <tr>
           <td>
             <span class="custom-checkbox">
               <input type="checkbox" id="checkbox3" name="options[]" value="1">
               <label for="checkbox3"></label>
             </span>
           </td>
                     <td>U-01</td>
                     <td>M Saleem</td>
                     <td>@mail.com</td>
                     <td>Railway line, Burhan House 209 </td>
                     <td>(171) 555-2222</td>
                     <td>35402-6854390-1</td>
                     <td>Employee</td>
                     <td>Active</td>
           <td>
                           <a href="#edit" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                           <a href="#delete" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                       </td>
                   </tr>
                   <tr>
           <td>
             <span class="custom-checkbox">
               <input type="checkbox" id="checkbox4" name="options[]" value="1">
               <label for="checkbox4"></label>
             </span>
           </td>
                                 <td>U-01</td>
                                 <td>M Saleem</td>
                                 <td>@mail.com</td>
                                 <td>Railway line, Burhan House 209 </td>
                                 <td>(171) 555-2222</td>
                                 <td>35402-6854390-1</td>
                                 <td>Employee</td>
                                 <td>Active</td>
                       <td>
                           <a href="#edit" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                           <a href="#delete" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                       </td>
                   </tr>
         <tr>
           <td>
             <span class="custom-checkbox">
               <input type="checkbox" id="checkbox5" name="options[]" value="1">
               <label for="checkbox5"></label>
             </span>
           </td>
           <td>U-01</td>
           <td>M Saleem</td>
           <td>@mail.com</td>
           <td>Railway line, Burhan House 209 </td>
           <td>(171) 555-2222</td>
           <td>35402-6854390-1</td>
           <td>Employee</td>
           <td>Active</td>
                       <td>
                           <a href="#edit" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                           <a href="#delete" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
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
 <div id="add" class="modal fade">
   <div class="modal-dialog">
     <div class="modal-content">
       <form >
         <div class="modal-header">
           <h4 class="modal-title">Add Employee</h4>
           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
         </div>
         <div class="modal-body">
         <div class="row">
           <div class="col">
             <div class="row">
               <div class="col">
                 <div class="form-group">
                   <label>Full Name</label>
                   <input class="form-control" type="text" name="name" placeholder="John Smith" value="John Smith" required>
                 </div>
               </div>
               <div class="col">
                 <div class="form-group">
                   <label>Username</label>
                   <input class="form-control" type="text" name="username" placeholder="johnny.s" value="johnny.s" required>
                 </div>
               </div>
             </div>
             <div class="row">
               <div class="col">
                 <div class="form-group">
                   <label>Email</label>
                   <input class="form-control" type="email" placeholder="user@example.com" required>
                 </div>
               </div>
               <div class="col">
                 <div class="form-group">
                   <label>CNIC</label>
                   <input class="form-control" type="text" name="CNIC" placeholder="34404-673290-3" value="34404-6753290-3"pattern="[0-9]{5}-[0-9]{7}-[0-9]{1}" >
                 </div>
               </div>
               <div class="col">
                 <div class="form-group">
                   <label>Phone </label>
                  <input class="form-control" type="tel" id="phone" name="phone" placeholder="123-45-678" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required>
                 </div>
               </div>
             </div>
           </div>
         </div>
         <div class="row">
             <div class="mb-2"><b>Create Password</b></div>
             <div class="row">
               <div class="col">
                 <div class="form-group">
                   <label>New Password</label>
                   <input class="form-control" type="password" placeholder="••••••" required>
                 </div>
               </div>
               <div class="col">
                 <div class="form-group">
                   <label>Confirm <span class="d-none d-xl-inline">Password</span></label>
                   <input class="form-control" type="password" placeholder="••••••" required></div>
               </div>
             </div>
             <div class="col-12 col-sm-5 offset-sm-1 mb-3">

               <div class="row">
                 <div class="col">
                   <label>Role</label>
                   <div class="custom-controls-stacked px-2">
                     <div class="custom-control custom-checkbox">
                       <input type="checkbox" class="custom-control-input" id="Admin" checked="">
                       <label class="custom-control-label" for="manage-Sales">Admin</label>
                     </div>
                     <div class="custom-control custom-checkbox">
                       <input type="checkbox" class="custom-control-input" id="Product-Manager" checked="">
                       <label class="custom-control-label" for="manage-Products">Product Manager</label>
                     </div>
                     <div class="custom-control custom-checkbox">
                       <input type="checkbox" class="custom-control-input" id="Finanace-Manger" checked="">
                       <label class="custom-control-label" for="notifications-offers">Finanace Manager</label>
                     </div>
                     <div class="custom-control custom-checkbox">
                       <input type="checkbox" class="custom-control-input" id="Cashier" checked="">
                       <label class="custom-control-label" for="notifications-offers">Cashier</label>
                     </div>
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
 <!-- Edit Modal HTML -->
 <div id="edit" class="modal fade">
   <div class="modal-dialog">
     <div class="modal-content">
       <form >
         <div class="modal-header">
           <h4 class="modal-title">Edit Employee</h4>
           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
         </div>
         <div class="modal-body">
         <div class="row">
           <div class="col">
             <div class="row">
               <div class="col">
                 <div class="form-group">
                   <label>Full Name</label>
                   <input class="form-control" type="text" name="name" placeholder="M Saleem" value="M Saleem">
                 </div>
               </div>
               <div class="col">
                 <div class="form-group">
                   <label>Username</label>
                   <input class="form-control" type="text" name="username" placeholder="Saleem" value="Saleem">
                 </div>
               </div>
             </div>
             <div class="row">
               <div class="col">
                 <div class="form-group">
                   <label>Email</label>
                   <input class="form-control" type="email" placeholder="user@example.com">
                 </div>
               </div>
               <div class="col">
                 <div class="form-group">
                   <label>CNIC</label>
                   <input class="form-control" type="text" name="CNIC" placeholder="34404-673290-3" value="34404-6753290-3"pattern="[0-9]{5}-[0-9]{7}-[0-9]{1}" >
                 </div>
               </div>
               <div class="col">
                 <div class="form-group">
                   <label>Phone </label>
                  <input class="form-control" type="tel" id="phone" name="phone" placeholder="123-45-678" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required>
                 </div>
               </div>
             </div>
           </div>
         </div>
         <div class="row">
             <div class="mb-2"><b>Create Password</b></div>
             <div class="row">
               <div class="col">
                 <div class="form-group">
                   <label>New Password</label>
                   <input class="form-control" type="password" placeholder="••••••">
                 </div>
               </div>
               <div class="col">
                 <div class="form-group">
                   <label>Confirm <span class="d-none d-xl-inline">Password</span></label>
                   <input class="form-control" type="password" placeholder="••••••"></div>
               </div>
             </div>
             <div class="col-12 col-sm-5 offset-sm-1 mb-3">
               <div class="mb-2"><b>Assing Role</b></div>
               <div class="row">
                 <div class="col">
                   <label>Role</label>
                   <div class="custom-controls-stacked px-2">
                     <div class="custom-control custom-checkbox">
                       <input type="checkbox" class="custom-control-input" id="Admin" checked="">
                       <label class="custom-control-label" for="manage-Sales">Admin</label>
                     </div>
                     <div class="custom-control custom-checkbox">
                       <input type="checkbox" class="custom-control-input" id="Product-Manager" checked="">
                       <label class="custom-control-label" for="manage-Products">Product Manager</label>
                     </div>
                     <div class="custom-control custom-checkbox">
                       <input type="checkbox" class="custom-control-input" id="Finanace-Manger" checked="">
                       <label class="custom-control-label" for="notifications-offers">Finanace Manager</label>
                     </div>
                     <div class="custom-control custom-checkbox">
                       <input type="checkbox" class="custom-control-input" id="Cashier" checked="">
                       <label class="custom-control-label" for="notifications-offers">Cashier</label>
                     </div>
                     <div class="custom-control custom-checkbox">
                       <input type="checkbox" class="custom-control-input" id="Cashier" checked="">
                       <label class="custom-control-label" for="notifications-offers">Cashier</label>
                     </div>
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
 <div id="delete" class="modal fade">
   <div class="modal-dialog">
     <div class="modal-content">
       <form>
         <div class="modal-header">
           <h4 class="modal-title">Delete Employee</h4>
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
include "$_SERVER[DOCUMENT_ROOT]/Admin/include/footer.php";
 ?>
