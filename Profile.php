<?php include'Header.php' ?>
<main>
     <div class="container-fluid px-4">
      <h1 class="mt-4">Profile</h1>
      <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="Dashboard.php">Dashboard</a></li>
          <li class="breadcrumb-item active">Profile</li>
      </ol>
      <div class="container-xl px-4 mt-4">
         <hr class="mt-0 mb-4">
         <div class="row">
             <div class="col-xl-4">
                 <!-- Profile picture card-->
                 <div class="card mb-4 mb-xl-0">
                     <div class="card-header">Profile Picture</div>
                     <div class="card-body text-center">
                         <!-- Profile picture image-->
                         <img class="img-account-profile rounded-circle mb-2" src="http://bootdey.com/img/Content/avatar/avatar1.png" alt="">
                         <!-- Profile picture help block-->
                         <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
                         <!-- Profile picture upload button-->
                         <button class="btn btn-primary" type="button">Upload new image</button>
                     </div>
                 </div>
             </div>
             <div class="col-xl-8">
                 <!-- Account details card-->
                 <div class="card mb-4">
                     <div class="card-header">Account Details</div>
                     <div class="card-body">
                         <form>

                             <!-- Form Row-->
                             <div class="row gx-3 mb-3">
                                 <!-- Form Group (first name)-->
                                 <div class="col-md-6">
                                     <label class="small mb-1" for="inputFirstName">First name</label>
                                     <input class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" value="Valerie">
                                 </div>
                                 <!-- Form Group (last name)-->
                                 <div class="col-md-6">
                                     <label class="small mb-1" for="inputLastName">Last name</label>
                                     <input class="form-control" id="inputLastName" type="text" placeholder="Enter your last name" value="Luna">
                                 </div>
                             </div>
                             <!-- Form Row        -->
                             <div class="row gx-3 mb-3">
                                 <!-- Form Group (organization name)-->
                                 <div class="col-md-6">
                                     <label class="small mb-1" for="mail">Email</label>
                                     <input class="form-control" id="emails" type="email" placeholder="Enter your mail" value="@gmail.com">
                                 </div>
                                 <!-- Form Group (location)-->
                                 <div class="col-md-6">
                                     <label class="small mb-1" for="inputLocation">Address</label>
                                     <input class="form-control" id="inputLocation" type="text" placeholder="Enter your Address" value="Golra mor">
                                 </div>
                             </div>

                             <!-- Form Row-->
                             <div class="row gx-3 mb-3">
                                 <!-- Form Group (phone number)-->
                                 <div class="col-md-6">
                                     <label class="small mb-1" for="inputPhone">Phone number</label>
                                     <input class="form-control" id="inputPhone" type="tel" placeholder="Enter your phone number" value="03xxxxxxxxx">
                                 </div>
                                 <!-- Form Group (birthday)-->
                                 <div class="col-md-6">
                                     <label class="small mb-1" for="inputBirthday">CNIC</label>
                                     <input class="form-control" id="CNIC" type="text" name="CNIC" placeholder="Enter your CNIC" value="0-610198-8">
                                 </div>
                             </div>
                             <div class="row gx-3 mb-3">
                                 <!-- Form Group (new Password)-->
                                 <div class="col-md-6">
                                     <label class="small mb-1" for="inputPhone">New Password</label>
                                     <input class="form-control" id="New-password" type="password" placeholder="Enter New Passowrd" value="">
                                 </div>
                                 <!-- Form Group (old Password)-->
                                 <div class="col-md-6">
                                     <label class="small mb-1" for="inputBirthday">Enter Old Password</label>
                                     <input class="form-control" id="password" type="password" name="Passowrd" placeholder="Enter Old Password" value="">
                                 </div>
                             </div>
                             <!-- Save changes button-->
                             <button class="btn btn-primary" type="button">Save changes</button>
                         </form>
                     </div>
                 </div>
             </div>
         </div>
      </div>
        </div>
</main>
<?php include'footer.php' ?>
