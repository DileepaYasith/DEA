<!DOCTYPE html>
<html lang="en" class="h-100">

<head>

    <title>Register</title>

</head>

<body>
    <form action = "/rider_insert" method = "post">
        <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
        <h3 class="text-center mb-4 text-black">Register Here</h3>
        <p><strong>Personal Details</strong></p>
        <div class="form-group">
            <label class="mb-1 text-black" for="val-Username"><strong>Full Name</strong></label>
            <div><input type="text" class="form-control" id="Name" name="Name" placeholder="Enter full Name" required></div>
        </div>
        <div class="form-group">
            <label class="mb-1 text-black" for="Email"><strong>Email</strong></label>
        <div>
            <input type="email" class="form-control" id="Email" name="Email" placeholder="Enter Email" required>
        </div>
    </div>
    <div class="form-group">
        <label class="mb-1 text-black" for="Address"><strong>Address</strong></label>
    <div>
        <input type="text" class="form-control" id="Address" name="Address" placeholder="Enter Address" required>
    </div>
    </div>
    <div class="form-group">
        <label class="mb-1 text-black" for="Contact"><strong>Phone Number</strong></label><div>
        <input type="text" class="form-control" id="Contact" name="Contact" placeholder="Enter Phone Number" required>
    </div>
    </div>
    <div class="form-group">
        <label class="mb-1 text-black"   for="Driverable_vehicles"><strong>Driverable Vehicles</strong></label>
        <div>
            <input type="text" class="form-control" id="Driverable_vehicles" name="Driverable_vehicles" placeholder="Enter Vehicles..">
        </div>
    </div>
    <div class="form-group">
        <label class="mb-1 text-black"   for="License"><strong>Driver's License</strong></label>
        <div>
            <input type="file" class="form-control" id="License" name="License" placeholder="Enter a license..">
        </div>
    </div>
    <div class="form-group">
         <label class="mb-1 text-black"  for="Password"><strong>Password</strong></label>
        <div>
          <input type="password" class="form-control"  id="Password" name="Password" placeholder="Enter Password"  required>
         </div>
    </div>


        <div class="form-group text-center mt-4">
            <button type="submit" class="btn btn-primary btn-block" id="dz-signup-submit" href="#sign-up">Register</button>
        </div>
     </form>
</body>
</html>




<?php /**PATH C:\xampp\php\www\MerryMeal-project\resources\views/rider/rider_register.blade.php ENDPATH**/ ?>