<?php
    require_once('../private/initialize.php');
    $page_title = " Account successfully created..";
?>

<?php 
    include(SHARED_PATH . '/public_header.php');
?>

<style>
div.success-div {
    height: 600px;
    text-align: center;
    padding-top: 150px;
}
</style>

<div class="success-div">
    <h2 style="color: green">Your Account was successfully created.</h2>
    <h3>Thank you <?php echo $_SESSION['fullname'] ?> for choosing Uniseverything.</h3>
    <h4>Click on the link sent to your email address (<?php echo $_SESSION['email']?>) to activate your account.</h4>
</div>

<?php 
    include(SHARED_PATH . '/public_footer.php');
?>
