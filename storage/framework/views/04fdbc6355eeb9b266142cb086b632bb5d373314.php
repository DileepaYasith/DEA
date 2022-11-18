<!DOCTYPE html>
<html lang="en" class="h-100">

<head>

</head>

<body>
	<div id="sign-in" class="auth-form tab-pane fade show active form-validation">
        <form action="volunteer_log" class="form-validate">
            <h3 class="text-center mb-4 text-black">Login your account</h3>
            <div class="form-group">
                <label class="mb-1"  for="email"><strong>Email</strong></label>
                <div>
                    <input type="email" class="form-control"  id="email" name="email" required>
                </div>
            </div>
            <div class="form-group">
                <label class="mb-1"><strong>Password</strong></label>
                <input type="password" class="form-control" value="password" required>
            </div>
            <div class="form-row d-flex justify-content-between mt-4 mb-2">
                <div class="form-group">
                   <div class="custom-control custom-checkbox ml-1">
                        <input type="checkbox" class="custom-control-input" id="basic_checkbox_1" required>
                        <label class="custom-control-label" for="basic_checkbox_1">Remember my preference</label>
                    </div>
                </div>
                <div class="form-group">
                    <a href="#forgot-password" data-toggle="tab">Forgot Password?</a>
                </div>
            </div>
            <div class="text-center form-group">
                <button type="button" class="btn btn-primary btn-block" >Login</button>
            </div>
        </form>
        <div class="new-account mt-3">
            <p>Don't have an account? <a class="text-primary"  href="#sign-up" data-toggle="tab">Register</a></p>
        </div>
    </div>
</body>
</html>




<?php /**PATH C:\xampp\php\www\MerryMeal-project\resources\views/volunteer/login.blade.php ENDPATH**/ ?>