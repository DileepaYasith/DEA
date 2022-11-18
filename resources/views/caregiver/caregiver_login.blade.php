<!DOCTYPE html>
<html lang="en" class="h-100">

<head>

</head>

<body>
	<div id="sign-in" class="auth-form tab-pane fade show active form-validation">

        <form action="/caregiver_log" method="post">
            @csrf <!-- {{ csrf_field() }} -->
            <h2>LOGIN</h2>

            <?php if (isset($_GET['error'])) { ?>

                <p class="error"><?php echo $_GET['error']; ?></p>

            <?php } ?>

            <label>Email</label>

            <input type="email" name="email" placeholder="Email"><br>

            <label>Password</label>

            <input type="password" name="password" placeholder="Password"><br>

            <button type="submit">Login</button>

         </form>

        <div class="new-account mt-3">
            <p>Don't have an account? <a class="text-primary"  href="#sign-up" data-toggle="tab">Login</a></p>
        </div>
    </div>
</body>
</html>




