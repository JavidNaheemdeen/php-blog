<?php include("includes/header.php") ?>
<?php include("includes/navbar.php") ?>

<div class="py-5">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-md-5">
            <div class="card">
               <div class="card-header">
                  <h3 class="text-center">Login</h3>
               </div>
               <div class="card-body">
                  <div class="form-group mb-3">
                     <label>Email ID</label>
                     <input type="email" placeholder="email address" class="form-control">
                  </div>
                  <div class="form-group mb-3">
                     <label>Password</label>
                     <input type="password" placeholder="password" class="form-control">
                  </div>
                  <div class="form-group mb-3">
                     <button type="submit" class="btn btn-primary">Login Now</button>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<?php include("includes/footer.php") ?>