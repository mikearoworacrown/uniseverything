<?php require_once('../private/initialize.php'); ?>

<?php
    include(SHARED_PATH . '/public_header.php');
?>

<style>
div.error-div {
    display: flex;
    height: 600px;
    justify-content: center;
    align-items: center;
}
</style>

<div class="error-div">
    <?php 
        if(isset($_SESSION['error'])){
            echo $_SESSION['error'];
        }    
     ?>  
</div>

<?php
    include(SHARED_PATH . '/public_footer.php');
?>