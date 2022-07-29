<?php include('..\include\Header.php') ?>
<?php include('..\include\SideNav.php') ?>
 <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="../Dashboard.php">Dashboard</a></li>
                              <li class="breadcrumb-item"><a href="ExpensesDashboard.php">Expenses Dashboard</a></li>
                            <li class="breadcrumb-item active">Gass Bill</li>
                        </ol>
      <div class="container">
       <div class="table-wrapper">
           <div class="table-title">
               <div class="row">
          <div class="col-sm-6">
           <h2>Manage <b>Expenses</b></h2><br>
          <input class="form-control" id="myInput" type="text" placeholder="Search..">
         </div>
         <div class="col-sm-6">
           <br><br>
           <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add">
            <i class="material-icons">&#xE147;</i> Add Bill
          </button>
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete">
            <i class="material-icons">&#xE15C;</i> Delete Bill
          </button>
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
                       <th>Bill Id</th>
                       <th>Type</th>
                       <th>Description</th>
                       <th>Amount</th>
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
                       <td>Bid-101</td>
                       <td>Gass Bill</td>
                       <td>1000-1111011-111</td>
                       <td>20,000 Pkr</td>
                       <td>10-09-2022</td>
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
           <td>Bid-101</td>
           <td>Gass Bill</td>
           <td>1000-1111011-111</td>
           <td>20,000 Pkr</td>
           <td>10-09-2022</td>
                       <td>


                             <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#edit"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</button>
                                 <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#delete"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></button>



                       </td>
                   </tr>
         <tr>
           <td>
             <span class="custom-checkbox">
               <input type="checkbox" id="checkbox3" name="options[]" value="1">
               <label for="checkbox3"></label>
             </span>
           </td>
           <td>Bid-101</td>
           <td>Gass Bill</td>
           <td>1000-1111011-111</td>
           <td>20,000 Pkr</td>
           <td>10-09-2022</td>
                           <td>


                             <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#edit"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</button>
                                 <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#delete"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></button>



                       </td>
                   </tr>
                   <tr>
           <td>
             <span class="custom-checkbox">
               <input type="checkbox" id="checkbox4" name="options[]" value="1">
               <label for="checkbox4"></label>
             </span>
           </td>
           <td>Bid-101</td>
           <td>Gass Bill</td>
           <td>1000-1111011-111</td>
           <td>20,000 Pkr</td>
           <td>10-09-2022</td>
                           <td>


                             <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#edit"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</button>
                                 <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#delete"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></button>



                       </td>
                   </tr>
         <tr>
           <td>
             <span class="custom-checkbox">
               <input type="checkbox" id="checkbox5" name="options[]" value="1">
               <label for="checkbox5"></label>
             </span>
                           </td>
                           <td>Bid-101</td>
                           <td>Gass Bill</td>
                           <td>1000-1111011-111</td>
                           <td>20,000 Pkr</td>
                           <td>10-09-2022</td>
                           <td>


                             <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#edit"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</button>
                                 <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#delete"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></button>



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
 <div id="add" class="modal fade">
   <div class="modal-dialog modal-lg">
     <div class="modal-content">
       <form >
         <div class="modal-header">
           <h4 class="modal-title">Add Bill</h4>
           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
         </div>
         <div class="modal-body">
         <div class="row">
           <div class="col">
             <div class="row">
               <div class="col">
                 <div class="form-group">
                   <label>Bill Amount</label>
                   <input class="form-control" type="number" name="Amount" placeholder="Amount" value="20000">
                 </div>
               </div>
               <div class="col">
                 <div class="form-group">
                   <label>Bill Type</label>
                   <input class="form-control" type="text" name="Type" placeholder="Gass Bill" value="Gass Bill">
                 </div>
               </div>
             </div>
             <div class="row">
               <div class="col">
                 <div class="form-group">
                   <label>Description(ie, Ref Id)</label>
                   <input class="form-control" type="text" placeholder="8000-0999-11111" name="Description">
                 </div>
               </div>
               <div class="col">
                 <div class="form-group">
                   <label>Paid Date</label>
                   <input class="form-control" type="date" name="date" >
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
 <!-- Edit Modal HTML -->
 <div id="edit" class="modal fade">
   <div class="modal-dialog modal-lg">
     <div class="modal-content">
       <form >
         <div class="modal-header">
           <h4 class="modal-title">Edit Bill</h4>
           <button type="button" class="close" data-bs-dismiss="modal" aria-hidden="true">&times;</button>
         </div>
         <div class="modal-body">
         <div class="row">
           <div class="col">
             <div class="row">
               <div class="col">
                 <div class="form-group">
                   <label>Bill Amount</label>
                   <input class="form-control" type="number" name="Amount" placeholder="Amount" value="20000">
                 </div>
               </div>
               <div class="col">
                 <div class="form-group">
                   <label>Bill Type</label>
                   <input class="form-control" type="text" name="Type" placeholder="Gass Bill" value="Gass Bill">
                 </div>
               </div>
             </div>
             <div class="row">
               <div class="col">
                 <div class="form-group">
                   <label>Description(ie, Ref Id)</label>
                   <input class="form-control" type="text" placeholder="8000-0999-11111" name="Description">
                 </div>
               </div>
               <div class="col">
                 <div class="form-group">
                   <label>Paid Date</label>
                   <input class="form-control" type="date" name="date" >
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
   <div class="modal-dialog ">
     <div class="modal-content">
       <form>
         <div class="modal-header">
           <h4 class="modal-title">Delete</h4>
           <button type="button" class="close" data-bs-dismiss="modal" aria-hidden="true">&times;</button>
         </div>
         <div class="modal-body">
           <p>Are you sure you want to delete these Records?</p>
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
<?php include('..\include\Footer.php') ?>
