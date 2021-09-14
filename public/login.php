<?php require_once('../private/initialize.php'); ?>
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
<div class="login-container">
		<div class="sign-up-container">
			<div class="login-signup">
				Not a member? <a href="<?php echo url_for('/signup.php')?>" style="color: #cf2d42;"> Sign up</a>
			</div>
			<div class="signup-align" style="clear: right;">
				<form name="login" action="" method="post"
					onsubmit="return loginValidation()">
					
					<div class="signup-heading" style="color: #cf2d42;">Uniseverything</div>
					<div style="text-align: center; margin-top: 15px; font-weight: bold; font-size: 1.25em;">Login</div>
				<?php if(!empty($loginResult)){?>
				<div class="error-msg"><?php echo $loginResult;?></div>
				<?php }?>
				<div class="row">
						<div class="inline-block">
							<div class="form-label">
								Username<span class="required error" id="username-info"></span>
							</div>
							<input class="input-box-330" type="text" name="username"
								id="username">
						</div>
					</div>
					<div class="row">
						<div class="inline-block">
							<div class="form-label">
								Password<span class="required error" id="login-password-info"></span>
							</div>
							<input class="input-box-330" type="password"
								name="login-password" id="login-password">
						</div>
					</div>
					<div class="row">
						<input class="btn" type="submit" name="login-btn"
							id="login-btn" value="Login">
					</div>
				</form>
			</div>
		</div>
	</div>
	<script src="<?php echo url_for('/js/jquery.slim.min.js')?>"></script>
	<script>
		function loginValidation() {
			var valid = true;
			$("#username").removeClass("error-field");
			$("#password").removeClass("error-field");

			var UserName = $("#username").val();
			var Password = $('#login-password').val();

			$("#username-info").html("").hide();

			if (UserName.trim() == "") {
				$("#username-info").html("required.").css("color", "#ee0000").show();
				$("#username").addClass("error-field");
				valid = false;
			}
			if (Password.trim() == "") {
				$("#login-password-info").html("required.").css("color", "#ee0000").show();
				$("#login-password").addClass("error-field");
				valid = false;
			}
			if (valid == false) {
				$('.error-field').first().focus();
				valid = false;
			}
			return valid;
		}
	</script>
</body>
</html>
