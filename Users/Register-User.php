<?php
include('../include/Header.php')
 ?>
 <?php include('../include/SideNav.php') ?>
 <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="../Dashboard.php">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="UserDashboard.php">Users</a></li>
                              <li class="breadcrumb-item active">Register User</li>
                        </ol>
                        <div class="container">
                          <div class="content">
                              <div class="container">
                                  <div class="page-title">
                                      <h3>Register User</h3>
                                  </div>
                                  <div class="box box-primary">
                                      <div class="box-body">
                                          <ul class="nav nav-tabs" id="myTab" role="tablist">
                                              <li class="nav-item">
                                                  <a class="nav-link active" id="information-tab" data-bs-toggle="tab" href="#userinfo" role="tab" aria-controls="general" aria-selected="true">User information</a>
                                              </li>
                                              <li class="nav-item">
                                                  <a class="nav-link" id="role-tab" data-bs-toggle="tab" href="#role" role="tab" aria-controls="system" aria-selected="false">User Role</a>
                                              </li>
                                              <li class="nav-item">
                                                  <a class="nav-link" id="authentication-tab" data-bs-toggle="tab" href="#authentication" role="tab" aria-controls="authentication" aria-selected="false">User Authentication</a>
                                              </li>
                                              <li class="nav-item">
                                                  <a class="nav-link" id="appearance-tab" data-bs-toggle="tab" href="#appearance" role="tab" aria-controls="appearance" aria-selected="false">User Permissions</a>
                                              </li>
                                          </ul>
                                          <div class="tab-content" id="myTabContent">
                                              <div class="tab-pane fade active show" id="userinfo" role="tabpanel" aria-labelledby="general-tab">
                                                  <div class="col-md-9">
                                                      <p class="text-muted">User information such as, User Name,Profile Picture, Address and so on.</p>
                                                      <div class="row">
                                                        <div class="col">
                                                          <label for="username" class="form-label">User Name</label>
                                                          <input type="text" name="Username" class="form-control">
                                                        </div>
                                                        <div class="col">
                                                          <label for="Address" class="form-label">Address</label>
                                                          <input type="text" class="form-control" name="Address">
                                                        </div>
                                                      </div>
                                                      <div class="row">
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
                                                      <div class="row">
                                                        <div class="col">
                                                          <label for="email" class="form-label">Email</label>
                                                          <input type="email" name="email" class="form-control">
                                                        </div>
                                                      </div>
                                                      <div class="row">
                                                          <div class="col">
                                                            <label class="form-label">Profile Picture</label>
                                                              <input class="form-control" name="profile-picture" type="file" id="formFile1">
                                                            <small class="text-muted">The image must have a maximum size of 1MB</small>
                                                          </div>
                                                          <div class="col">
                                                              <label class="form-label">CNIC Picture</label>
                                                                <input class="form-control" name="cnic-pic" type="file" id="formFile2">
                                                              <small class="text-muted">The image must have a maximum size of 1MB</small>
                                                          </div>
                                                      </div>
                                                      <div class="mb-3 text-end">
                                                          <button class="btn btn-success" type="submit"><i class="fas fa-check"></i> Save</button>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="tab-pane fade" id="role" role="tabpanel" aria-labelledby="system-tab">
                                                  <div class="col-md-6">
                                                      <p class="text-muted">Assing Role tu User.</p>

                                                      <div class="mb-3">
                                                          <label for="-User-Roles" class="form-label">Roles</label>
                                                          <select class="form-select" name="user-role">
                                                              <option value="Admin">Admin</option>
                                                              <option value="Cashier">Cashier</option>
                                                              <option value="labour">Labour</option>
                                                              <option value="Finanace-Manager">Finanace Manager</option>
                                                              <option value="Product-Manager">Product Manager</option>
                                                          </select>
                                                      </div>
                                                      <div class="mb-3">
                                                          <label for="" class="form-label">Status</label>
                                                          <select name="" class="form-select">
                                                              <option value="">Enabled</option>
                                                              <option value="">Disabled</option>
                                                          </select>
                                                      </div>
                                                      <div class="mb-3 text-end">
                                                          <button class="btn btn-success" type="submit"><i class="fas fa-check"></i> Save</button>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="tab-pane fade" id="authentication" role="tabpanel" aria-labelledby="authentication-tab">
                                                  <div class="col-md-6">
                                                      <p class="text-muted">Create User Password</p>
                                                      <div class="mb-3">
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
                                                      </div>
                                                      <div class="mb-3 text-end">
                                                          <button class="btn btn-success" type="submit"><i class="fas fa-check"></i> Save</button>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="tab-pane fade" id="appearance" role="tabpanel" aria-labelledby="appearance-tab">
                                                  <div class="col-md-9">
                                                      <p class="text-muted">Add User Permission Acording To Role.</p>
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
                                     </div>
                                     <div class="row">
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
                                      <div class="mb-3 text-end">
                                          <button class="btn btn-success" type="submit"><i class="fas fa-check"></i> Save</button>
                                </div>
                              </div>
                          </div>
                                       </div>

  </div>
</div>
</main>
<?php include('../include/footer.php') ?>
