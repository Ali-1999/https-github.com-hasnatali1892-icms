<?php
include('..\include\Header.php')
 ?>
 <?php
include('..\include\SideNav.php')
  ?>
 <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="..\Dashboard.php">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="UserDashboard.php">User Dashboard</a></li>
                              <li class="breadcrumb-item active">shopkeepers</li>
                        </ol>
                        <div class="container">
       <div class="table-wrapper">
           <div class="table-title">
               <div class="row">
                   <div class="col-sm-6">
           <h2>Manage <b>shopkeepers</b></h2>
           <br>
          <input class="form-control" id="myInput" type="text" placeholder="Search..">
         </div>
         <div class="col-sm-6">
           <br>
           <br>

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
                       <th>Shopekeeper Id</th>
                       <th>Name</th>
                       <th>Email</th>
                       <th>Shope Name</th>
                       <th>Shope Adddress</th>
                       <th>Phone</th>
                       <th>CNIC</th>
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
                      <td>SK-ID-01</td>
                       <td>M Saleem</td>
                       <td>@mail.com</td>
                       <td>Hameed Bakers </td>
                       <td>Street 09 Waah Cannt Burhan</td>
                       <td>(171) 555-2222</td>
                       <td>35402-6854390-1</td>
                       <td>Active</td>
                       <td>
                           <div class="btn-group">
<button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#edit"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</button>
<button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#delete"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></button>
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
           <td>SK-ID-01</td>
            <td>M Saleem</td>
            <td>@mail.com</td>
            <td>Hameed Bakers </td>
            <td>Street 09 Waah Cannt Burhan</td>
            <td>(171) 555-2222</td>
            <td>35402-6854390-1</td>
            <td>Active</td>
                       <td>
                           <div class="btn-group">
<button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#edit"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</button>
<button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#delete"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></button>
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
           <td>SK-ID-01</td>
            <td>M Saleem</td>
            <td>@mail.com</td>
            <td>Hameed Bakers </td>
            <td>Street 09 Waah Cannt Burhan</td>
            <td>(171) 555-2222</td>
            <td>35402-6854390-1</td>
            <td>Active</td>
           <td>
                           <div class="btn-group">
<button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#edit"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</button>
<button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#delete"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></button>
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
           <td>SK-ID-01</td>
            <td>M Saleem</td>
            <td>@mail.com</td>
            <td>Hameed Bakers </td>
            <td>Street 09 Waah Cannt Burhan</td>
            <td>(171) 555-2222</td>
            <td>35402-6854390-1</td>
            <td>Active</td>
                       <td>
                           <div class="btn-group">
<button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#edit"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</button>
<button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#delete"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></button>
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
           <td>SK-ID-01</td>
            <td>M Saleem</td>
            <td>@mail.com</td>
            <td>Hameed Bakers </td>
            <td>Street 09 Waah Cannt Burhan</td>
            <td>(171) 555-2222</td>
            <td>35402-6854390-1</td>
            <td>Active</td>
                       <td>
                           <div class="btn-group">
<button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#edit"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</button>
<button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#delete"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></button>
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
 <!-- Edit Modal HTML -->
<div id="edit" class="modal fade">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <form >
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Shopkeeper </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <div class="row">
          <div class="col">
            <div class="row">
              <div class="col">
                <div class="form-group">
                  <label>Account Status</label>
                  <select class="form-control" id="Account_status">
                   <option>Active</option>
                   <option>Blocked</option>
                 </select>
                </div>
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
<!-- Delete Modal HTML -->
<div id="delete" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <form>
        <div class="modal-header">
          <h4 class="modal-title">Delete Shopkeeper</h4>
          <button type="button" class="close" data-bs-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body">
          <p>Are you sure you want to delete this shopkeepers?</p>
          <p class="text-warning"><small>This action cannot be undone.</small></p>
        </div>
        <div class="modal-footer">
          <input type="button" class="btn btn-default" data-bs-dismiss="modal" value="Cancel">
          <input type="submit" class="btn btn-danger" value="Delete">
        </div>
      </form>
    </div>
  </div>
</div>
</div>
</main>
<?php include('..\include\footer.php') ?>
