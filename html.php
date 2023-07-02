<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="style.css">
  <title>Login Page</title>
</head>
<body>

<nav class="navbar">
      <div class="logo">Login System</div>
      <div class="navbar-list">
        <div class="navbar-item">Home </div>
        <div class="navbar-item">About</div>
        <div class="navbar-item">Profile</div>
        <div class="btn-container">

        <button class="btn">
          <Link to="/" class="request-link signin-link">
            Sign In 
          </Link>
        </button>
        <button class="btn">
          <Link to="/" class="request-link login-link">
            Login
          </Link>
        </button>

        </div>
        
      </div>
      <div class="hamburger">
        <span class="navbar__bar"></span>
        <span class="navbar__bar"></span>
        <span class="navbar__bar"></span>
      </div>
    </nav>

<div class="form-wrap">
		<div class="tabs">
			<h3 class="signup-tab"><a class="active" href="#signup-tab-content">Sign Up</a></h3>
			<h3 class="login-tab"><a href="#login-tab-content">Login</a></h3>
		</div>

		<div class="tabs-content">
			<div id="signup-tab-content" class="active">
				<form class="signup-form" action="includes/signup.inc.php" method="post">
					<input type="email" class="input" name="email" placeholder="Email">
					<input type="text" class="input" name="uid"  placeholder="Username">
					<input type="password" class="input" name="pwd" placeholder="Password">
					<input type="submit" class="button" name="submit" value="Sign Up">
				</form>
				<div class="help-text">
					<p>By signing up, you agree to our</p>
					<p><a href="#">Terms of service</a></p>
				</div>
			</div>

			<div id="login-tab-content">
				<form class="login-form" action="includes/login.inc.php" method="post">
					<input type="text" class="input"  name="uid"  placeholder="Email or Username">
					<input type="password" class="input" name="pwd"  placeholder="Password">
					<input type="checkbox" class="checkbox" id="remember_me">
					<label for="remember_me">Remember me</label>

					<input type="submit" class="button" value="Login">
				</form>
				<div class="help-text">
					<p><a href="#">Forget your password?</a></p>
				</div>
			</div>
		</div>
	</div>
  
</body>
</html>