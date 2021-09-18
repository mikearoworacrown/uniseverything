<?php require_once('../private/initialize.php'); ?>
<?php
  if(isset($_SESSION['user'])){
    redirect_to(url_for('/'));
  }

  echo $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="<?php echo url_for('/stylesheets/css/public.css'); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo url_for('/stylesheets/css/public_responsive.css'); ?>" />
	<title>Uniseverything - Login</title>
	<link rel="icon" href="<?php echo url_for('/images/logo/unis_icon.jpg'); ?>" type = "image/x-icon">
	<style>

	</style>
</head>
<body style="background-color: #1f2226;">

?>
<div class="login-container">
		<div class="sign-up-container">
			<div class="login-signup">
				Not a member? <a href="<?php echo url_for('/signup.php')?>" style="color: #cf2d42;"> Sign up</a>
			</div>
			
			<div class="signup-align" style="clear: right;">
				<form name="login" action="../private/verify.php" method="post">
					
					<div class="signup-heading" style="color: #cf2d42;">Uniseverything</div>
					<div style="text-align: center; margin-top: 15px; font-weight: bold; font-size: 1.25em;">Login</div>
					<div class="error-msg" id="error-msg">
						<?php
							if(isset($_SESSION['error'])){
								echo "
								<div>
									<p style='color: #cf2d42;'>".$_SESSION['error']."</p> 
								</div>
								";
								unset($_SESSION['error']);
							}

							if(isset($_SESSION['success'])){
								echo "
								<div>
									<p>".$_SESSION['success']."</p> 
								</div>
								";
								unset($_SESSION['success']);
							}
						?>
					</div>
					<div class="row">
						<div class="inline-block">
							<div class="form-label">
								Email Address:<span class="required error" id="username-info"></span>
							</div>
							<input class="input-box-330" type="text" name="email"
								id="email">
						</div>
					</div>
					<div class="row">
						<div class="inline-block">
							<div class="form-label">
								Password:<span class="required error" id="login-password-info"></span>
							</div>
							<input class="input-box-330" type="password"
								name="password" id="password">
						</div>
					</div>
					<div class="row">
						<input class="btn" type="submit" name="login-btn"
							id="login-btn" value="Login">
					</div>
					<div class="row">
						<a href="<?php echo url_for('/signup.php')?>" style="color: #cf2d42;"> Forgot Password? </a>
					</div>
				</form>
			</div>
		</div>
	</div>
	<script src="<?php echo url_for('/js/jquery.slim.min.js')?>"></script>
	<script>

	</script>
</body>
</html>
