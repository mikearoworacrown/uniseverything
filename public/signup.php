<?php require_once('../private/initialize.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="<?php echo url_for('/stylesheets/css/public.css'); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo url_for('/stylesheets/css/public_responsive.css'); ?>" />
	<title>Uniseverything - Create an Account</title>
	<link rel="icon" href="<?php echo url_for('/images/logo/unis_icon.jpg'); ?>" type = "image/x-icon">
</head>
<body style="background-color: #1f2226;">
<div class="login-container">
		<div class="sign-up-container">
			<div class="login-signup">
				Already a member? <a href="<?php echo url_for('/login.php')?>" style="color: #cf2d42; cursor: pointer;">Login</a>
			</div>
			<div class="signup-align" style="clear: right;">
			<?php
				if(isset($_SESSION['error'])){
					echo "
					<div class='callout callout-danger text-center'>
						<p>".$_SESSION['error']."</p> 
					</div>
					";
					unset($_SESSION['error']);
				}

				if(isset($_SESSION['success'])){
					echo "
					<div class='callout callout-success text-center'>
						<p>".$_SESSION['success']."</p> 
					</div>
					";
					unset($_SESSION['success']);
				}
				?>
				<form name="sign-up" action="../private/register.php" method="POST">

					<div class="signup-heading" style="color: #cf2d42;">Uniseverything</div>
					<div style="text-align: center; margin-top: 15px; font-weight: bold; font-size: 1.25em;">Create An Account</div>
					
					<div class="error-msg" id="error-msg"></div>
					<div class="row">
						<div class="inline-block">
							<div class="form-label">
								Full Name<span class="required error" id="username-info"></span>
							</div>
							<input class="input-box-330" type="text" name="fullname"
								id="fullname">
						</div>
					</div>
					<div class="row">
						<div class="inline-block">
							<div class="form-label">
								Email<span class="required error" id="email-info"></span>
							</div>
							<input class="input-box-330" type="email" name="email" id="email">
						</div>
					</div>
					<div class="row">
						<div class="inline-block">
							<div class="form-label">
								Phone Number<span class="required error" id="phone-info"></span>
							</div>
							<input class="input-box-330" type="tel" name="phone" id="phone">
						</div>
					</div>
					<div class="row">
						<div class="inline-block">
							<div class="form-label">
								Password<span class="required error" id="signup-password-info"></span>
							</div>
							<input class="input-box-330" type="password"
								name="password" id="password">
						</div>
					</div>
					<div class="row">
						<div class="inline-block">
							<div class="form-label">
								Confirm Password<span class="required error"
									id="confirm-password-info"></span>
							</div>
							<input class="input-box-330" type="password"
								name="repassword" id="repassword">
						</div>
					</div>
					<div class="row">
						<input class="btn" type="submit" name="signup-btn"
							id="signup-btn" value="Sign up">
					</div>
				</form>
			</div>
		</div>
	</div>

	<script src="<?php url_for('/js/jquery.slim.min.js')?>"></script>
	<script src="<?php url_for('/js/custom.js')?>"></script>

</body>
</html>