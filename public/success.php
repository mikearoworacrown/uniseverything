<?php
    require_once('../private/initialize.php');
    $page_title = " Account successfully created..";
?>

<?php 
    include(SHARED_PATH . '/public_header.php');
?>

<div style="text-align: center">
    <h2 style="color: green">Your Account was successfully created.</h2>
    <h3>Thank you <?php echo $_SESSION['fullname'] ?> for choosing Uniseverything.</h3>
    <h4>Click on the link sent to your email address (<?php echo $_SESSION['email']?>) to activate your account.</h4>
</div>

<script src="<?php echo url_for('/js/jquery.slim.min.js')?>"></script>
<script src="<?php echo url_for('/js/popper.min.js')?>"></script>
<script src="<?php echo url_for('/js/bootstrap.min.js')?>"></script>
<script src="<?php echo url_for('/js/isotope.pkgd.min.js')?>"></script>
<script src="<?php echo url_for('/js/OwlCarousel2-2.2.1/owl.carousel.js')?>"></script>
<script src="<?php echo url_for('/js/custom.js?version=1')?>"></script>