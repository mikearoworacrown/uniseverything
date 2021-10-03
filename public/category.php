<?php require_once('../private/initialize.php'); ?>

<?php
	$cat_slug = $_GET['category'];

    $conn = $pdo->open();

    try{
        $stmt = $conn->prepare("SELECT * FROM category WHERE cat_slug = :cat_slug");
        $stmt->execute(['cat_slug' => $cat_slug]);
        $row_cat = $stmt->fetch();
        $catname = $row_cat['name'];
    }catch(PDOException $e){
        echo "There is some problem in connection: " . $e->getMessage();
    }

    $pdo->close();

?>

<?php include(SHARED_PATH . '/public_header.php'); ?>


<div class="category">
  <div class="container-fluid">
    <div class="row">
      <div class="col text-center">
        <div class="section_title section_title_margin">
          <h2><?php echo $catname; ?></h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div class="product-grid" data-isotope='{"itemSelector": ".product-item", "layoutMode": "fitRows"}'>
          <?php product_category($cat_slug); ?>
        </div>
      </div>
    </div>
  </div>
</div>




<?php include(SHARED_PATH . '/public_footer.php'); ?>