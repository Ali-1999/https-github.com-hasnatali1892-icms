<?php include('..\include\Header.php') ?>
<?php include('..\include\SideNav.php') ?>
<main>
  <div class="container-fluid px-4">
    <h1 class="mt-4">Dashboard</h1>
    <ol class="breadcrumb mb-4">

        <li class="breadcrumb-item"><a href="..\Dashboard.php">Dashboard</a></li>
          <li class="breadcrumb-item active">Roles</li>
    </ol>
    <div class="row">
        <div class="col-xl-3 col-md-3">
            <div class="card bg-success text-white mb-4">
                <div class="card-body">
                  Add Role if does not exist..
                  <br>
                  <h4 class="mt-1">New Role</h4>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add">
                    Add New Role
                 </button>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-3">
            <div class="card bg-success text-white mb-4">
                <div class="card-body">
                  Total 4 Users
                  <br>
                      <h4 class="mt-1">Finanace Manager</h4>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit">
                    Edit Role
                 </button>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-3">
            <div class="card bg-success text-white mb-4">
                <div class="card-body">
                  Total 2 Users
                  <br>
                      <h4 class="mt-1">Admin</h4>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit">
                    Edit Role
                 </button>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-3">
            <div class="card bg-success text-white mb-4">
                <div class="card-body">
                  Total 4 Users
                  <br>
                      <h4 class="mt-1">Cashier</h4>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit">
                    Edit Role
                 </button>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-3">
            <div class="card bg-success text-white mb-4">
                <div class="card-body">
                  Total 2 Users
                  <br>
                      <h4 class="mt-1">Product Manager</h4>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit">
                    Edit Role
                 </button>
                </div>
            </div>
        </div>
</div>

<div id="add" class="modal fade">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <form accept-charset="utf-8">
        <div class="modal-header">
          <h4 class="modal-title">Add Role</h4>
          <button type="button" class="close" data-bs-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
                                  <div class="modal-body">
                                    <div class="row">
                                      <div class="col">
                                        <div class="mb-3">
                                          <label for="Role Name"></label>
                                          <input class="form-control" type="text" name="Role-name" value="Admin">
                                        </div>
                                      </div>
                                      <div class="col">
                                        <div class="mb-3">
                                          <label for="Role Salary"></label>
                                          <input class="form-control" type="Number" name="Role-salary" value="30000">
                                        </div>
                                      </div>
                                    </div>
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
<div id="edit" class="modal fade">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <form accept-charset="utf-8">
        <div class="modal-header">
          <h4 class="modal-title">Edit Role</h4>
          <button type="button" class="close" data-bs-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body">
                                    <div class="row">
                                      <div class="col">
                                        <div class="mb-3">
                                          <label for="Role Name"></label>
                                          <input class="form-control" type="text" name="Role-name" value="Admin">
                                        </div>
                                      </div>
                                      <div class="col">
                                        <div class="mb-3">
                                          <label for="Role Salary"></label>
                                          <input class="form-control" type="Number" name="Role-salary" value="30000">
                                        </div>
                                      </div>
                                    </div>
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
