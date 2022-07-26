<?php
include "$_SERVER[DOCUMENT_ROOT]/Admin/include/Header.php";
include "$_SERVER[DOCUMENT_ROOT]/Admin/include/SideNav.php";
 ?>
<div class="container-fluid px-4">
  <div class="container">
    <div class="content">
        <div class="container">
            <div class="page-title">
                <h3>User Permissions
                    <a href="roles.html" class="btn btn-sm btn-outline-info float-end"><i class="fas fa-angle-left"></i> <span class="btn-header">Return</span></a>
                </h3>
            </div>
            <div class="box box-primary">
                <div class="box-body">
                    <form accept-charset="utf-8">
                        <div class="mb-3">
                            <label for="email" class="form-label text-uppercase"><small>Dashboard</small></label>
                            <div class="form-check form-switch">
                              <input class="form-check-input" type="checkbox" id="switch1">
                              <label class="form-check-label" for="switch1">Open dashboard page</label>
                            </div>
                        </div>
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
                    </form>
                </div>
  </div>
  <?php echo file_get_contents("../include/footer.php")?>
</div>
