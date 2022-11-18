<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="./css/login02.css">
        <link href="{{('../css/login02.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('.') }}">

    </head>
    <body>

        <br>
        <br>
<div class="container" id="container">

	<div class="form-container sign-up-container">
        <form action="/rider_log" method="post">
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
		<form action="#">
			<h1>Create Account</h1>
            <br>
			<span>Enter your details to register with Merry Meals</span>
            <br>
			<input type="text" placeholder="Name" />
			<input type="email" placeholder="Email" />
			<input type="text" placeholder="Address" />
            <input type="text" placeholder="Contact Number" />
			<input type="text" placeholder="Contact Number" />
			<input type="text" placeholder="Contact Number" />
			<input type="text" placeholder="Contact Number" />
            <input type="password" placeholder="Password" />
			<button>Sign Up</button>
		</form>

	</div>
	<div class="form-container sign-in-container">
		<form action="#">
			<h1>Sign in</h1>
            <br>
			<span>or use your account</span>
            <br>
			<input type="email" placeholder="Email" />
			<input type="password" placeholder="Password" />
			<a href="#">Forgot your password?</a>
			<button>Sign In</button>
			<a href="">Back to Homepage</a>
		</form>

	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Already Registered ?</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Don't have a Account ?</h1>
				<p>Enter your personal details and start journey with us</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>


<script src="js/login02.js"></script>
    </body>
</html>



