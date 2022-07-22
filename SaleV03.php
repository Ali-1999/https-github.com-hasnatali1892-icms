<?php
include('Header.php')
 ?>
 <main>
                    <div class="container-fluid px-4">
                        <h3 class="mt-4">Sales Dashboard</h3>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="Dashboard.php">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="SalesDashboard.php">Sales</a></li>
                            <li class="breadcrumb-item active">Van Id ISD-9987</li>
                        </ol>
                        <div class="container">
       <div class="table-wrapper">
           <div class="table-title">
               <div class="row">
                   <div class="col-sm-6">
           <h2>Manage <b>Sales</b></h2><br>
          <input class="form-control" id="myInput" type="text" placeholder="Search..">
         </div>
         <div class="col-sm-6">
           <br><br>

           <a href="#deletestock" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Delete Sales</span></a>
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
                       <th>Sales Id</th>
                       <th>Shope Adress</th>
                       <th>Sale Item Carton</th>
                       <th>Sale Amount</th>
                       <th>Sale Date</th>
                       <th>Sale By</th>
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
                       <td>sl-401</td>
                       <td>Al-hameed Karyana Store G-9 street 1</td>
                       <td>Pista Badami 22<br>
                        Punjabi Special 23</td>
                       <td>1320 Pkr</td>
                       <td>12-09-2011</td>
                       <td>Usama </td>
                       <td>

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
           <td>sl-401</td>
           <td>Al-hameed Karyana Store G-9 street 1</td>
           <td>Pista Badami 22<br>
           Punjabi Special 23</td>
           <td>1320 Pkr</td>
           <td>12-09-2011</td>
           <td>Usama </td>
                       <td>

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
           <td>sl-401</td>
           <td>Al-hameed Karyana Store G-9 street 1</td>
           <td>Pista Badami 22<br>
           Punjabi Special 23</td>
           <td>1320 Pkr</td>
           <td>12-09-2011</td>
           <td>Usama </td>
                           <td>

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
           <td>sl-401</td>
           <td>Al-hameed Karyana Store G-9 street 1</td>
           <td>Pista Badami 22<br>
           Punjabi Special 23</td>
           <td>1320 Pkr</td>
           <td>12-09-2011</td>
           <td>Usama </td>
                           <td>

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
                           <td>sl-401</td>
                           <td>Al-hameed Karyana Store G-9 street 1</td>
                           <td>Pista Badami 22<br>
                           Punjabi Special 23</td>
                           <td>1320 Pkr</td>
                           <td>12-09-2011</td>
                           <td>Usama </td>
                           <td>

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
 <
 <!-- Delete Modal HTML -->
 <div id="deletestock" class="modal fade">
   <div class="modal-dialog">
     <div class="modal-content">
       <form>
         <div class="modal-header">
           <h4 class="modal-title">Delete Ssale</h4>
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
