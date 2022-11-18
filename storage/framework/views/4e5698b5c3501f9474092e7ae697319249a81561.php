<!DOCTYPE html>
<html lang="en" class="h-100">

<head>

    <title>Register</title>

</head>

<body>
    <form action = "/caregiver_insert" method = "post">
        <?php echo csrf_field(); ?> <!-- <?php echo e(csrf_field()); ?> -->
        <h3 class="text-center mb-4 text-black">Register Here</h3>

        <div class="form-group">
            <label class="mb-1 text-black"   for="Name"><strong>Full Name</strong></label>
            <div>
                <input type="text" class="form-control" id="Name" name="Name" placeholder="Enter Full Name" required>
            </div>
        </div>

        <div class="form-group">
            <label class="mb-1 text-black"   for="Address"><strong>Address</strong></label>
            <div>
                <input type="text" class="form-control" id="Address" name="Address" placeholder="Enter Your Address" required>
            </div>
        </div>
        <div class="form-group">
            <label class="mb-1 text-black"   for="Contact"><strong>Contact</strong></label>
            <div>
                <input type="text" class="form-control" id="Contact" name="Contact" placeholder="Enter Your Contact No" required>
            </div>
        </div>

        <div class="form-group">
            <label class="mb-1 text-black"  for="Email"><strong>Email</strong></label>
            <div>
                <input type="email" class="form-control" id="Email" name="Email" placeholder="Enter Email" required>
            </div>
        </div>
        <div class="form-group">
            <label class="mb-1 text-black"  for="Member_Id"><strong> Member Id</strong></label>
            <div>
                <input type="text" class="form-control" id="Member_Id" name="Member_Id" placeholder="Enter Member Id" required>
            </div>
        </div>

        <div class="form-group">
            <label class="mb-1 text-black"  for="Password"><strong>Password</strong></label>
            <div>
                <input type="password" class="form-control"  id="Password" name="Password" placeholder="Enter Password" required>
            </div>
        </div>
        <div class="form-group text-center mt-4">
            <button type="submit" class="btn btn-primary btn-block" id="dz-signup-submit" href="#sign-up">Register</button>
        </div>
    </form>
</body>
</html>




<?php /**PATH C:\xampp\php\www\MerryMeal-project\resources\views/caregiver/caregiver_register.blade.php ENDPATH**/ ?>