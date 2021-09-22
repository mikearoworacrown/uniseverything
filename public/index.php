<?php require_once('../private/initialize.php'); ?>
<?php
    include(SHARED_PATH . '/public_header.php');
?>

<!----------------------------------------- Slider ---------------------------------->
<div class="main-slider">
  <div class="container-fluid">
    <div class="carousel slide carousel-fade" id="featured" data-ride="carousel">
      <ol class="carousel-indicators">
        <?php echo slides_indicators();?>
      </ol>
      <div class="carousel-inner">
        <?php echo slides(); ?>
      </div>
      <a class="carousel-control-prev" href="#featured"
        role="button" data-slide="prev">
        <span class="carousel-control-prev-icon"
          aria-hidden="true">
          <span class="sr-only">Previous</span>
        </span>
      </a>
      <a class="carousel-control-next" href="#featured"
        role="button" data-slide="next">
        <span class="carousel-control-next-icon"
          aria-hidden="true">
          <span class="sr-only">Next</span>
        </span>
      </a>
    </div>
  </div>
</div>


<!----------------------------------------- Banner ---------------------------------->
<div class="banner">
  <div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
          <div class="banner_item align-center" style="background-image: url(images/banners/women.jpg);">
            <div class="banner_category">
              <a href="#">Women's</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="banner_item align-center" style="background-image: url(images/banners/accessories.jpg);">
            <div class="banner_category">
              <a href="#">Accessories</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="banner_item align-center" style="background-image: url(images/banners/men.jpeg);">
            <div class="banner_category">
              <a href="#">Men's</a>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>


<!------------------------------------- New Arrivals --------------------------------------->
<div class="new_arrivals">
  <div class="container-fluid">
    <div class="row">
      <div class="col text-center">
        <div class="section_title section_title_margin">
          <h2>New Arrivals</h2>
        </div>
      </div>
    </div>
    <div class="row align-items-center">
      <div class="col text-center">
        <div class="new_arrivals_sorting">
          <ul class="arrivals_grid_sorting clearfix button-group filters-button">
            <?php isotope_list(); ?>
          </ul>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div class="product-grid" data-isotope='{"itemSelector": ".product-item", "layoutMode": "fitRows"}'>
          <?php isotope_product(); ?>
        </div>
      </div>
    </div>
  </div>
</div>

<!-----------------------DEAL OF THE WEEK-------------------------->
<div class="deal_ofthe_week">
  <div class="container-fluid">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <div class="deal_ofthe_week_img">
          <img src="images/dealoftheweek/deal_ofthe_week.png" alt="" />
        </div>
      </div>
      <div class="col-lg-6 text-right deal_ofthe_week_col">
        <div
          class="
            deal_ofthe_week_content
            d-flex
            flex-column
            align-items-center
            float-right
          "
        >
          <div class="section_title">
            <h2>Deal Of The Week</h2>
          </div>
          <ul class="timer">
            <li
              class="
                d-inline-flex
                flex-column
                justify-content-center
                align-items-center
              "
            >
              <div id="day" class="timer_num">03</div>
              <div class="timer_unit">Day</div>
            </li>
            <li
              class="
                d-inline-flex
                flex-column
                justify-content-center
                align-items-center
              "
            >
              <div id="hour" class="timer_num">15</div>
              <div class="timer_unit">hours</div>
            </li>
            <li
              class="
                d-inline-flex
                flex-column
                justify-content-center
                align-items-center
              "
            >
              <div id="minute" class="timer_num">45</div>
              <div class="timer_unit">Mins</div>
            </li>
            <li
              class="
                d-inline-flex
                flex-column
                justify-content-center
                align-items-center
              "
            >
              <div id="second" class="timer_num">23</div>
              <div class="timer_unit">Secs</div>
            </li>
          </ul>
          <div class="red_button deal_ofthe_week_button">
            <a href="#">Shop Now</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!--------------------------Best sellers in Women---------------------------->
<div class="best_sellers">
  <div class="container-fluid">
    <div class="row">
      <div class="col text-center">
        <div class="section_title section_title_margin">
          <h2><span style="color: #fe4c50;">Uniseverything</span> Women</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div class="product_slider_container">
          <div class="owl-carousel owl-theme product_slider">
            <!--Slides-->
            <?php 
              $cat_slug = 'uniseverything_women';
              product_category_slide($cat_slug) ?>
          </div>
          <!--Slider Navigation-->
          <div
            class="
              product_slider_nav_left product_slider_nav
              d-flex
              align-items-center
              justify-content-center
              flex-column
            "
          >
            <i class="fa fa-chevron-left" aria-hidden="true"></i>
          </div>
          <div
            class="
              product_slider_nav_right product_slider_nav
              d-flex
              align-items-center
              justify-content-center
              flex-column
            "
          >
            <i class="fa fa-chevron-right" aria-hidden="true"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<!--------------------------Best sellers in Men---------------------------->
<div class="best_sellers">
  <div class="container-fluid">
    <div class="row">
      <div class="col text-center">
        <div class="section_title section_title_margin">
          <h2><span style="color: #fe4c50;">Uniseverything</span> Men</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div class="product_slider_container">
          <div class="owl-carousel owl-theme product_slider2">
            <!--Slides-->
            <?php 
                $cat_slug = 'uniseverything_men';
                product_category_slide($cat_slug) ?>
          </div>
          <!--Slider Navigation-->
          <div
            class="
              product_slider_nav_left2 product_slider_nav
              d-flex
              align-items-center
              justify-content-center
              flex-column
            "
          >
            <i class="fa fa-chevron-left" aria-hidden="true"></i>
          </div>
          <div
            class="
              product_slider_nav_right2 product_slider_nav
              d-flex
              align-items-center
              justify-content-center
              flex-column
            "
          >
            <i class="fa fa-chevron-right" aria-hidden="true"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!--------------------------Best sellers in Accessories---------------------------->
<div class="best_sellers">
  <div class="container-fluid">
    <div class="row">
      <div class="col text-center">
        <div class="section_title section_title_margin">
          <h2><span style="color: #fe4c50;">Uniseverything</span> Accessories</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div class="product_slider_container">
          <div class="owl-carousel owl-theme product_slider3">
              <!--Slides-->
              <?php 
                  $cat_slug = 'uniseverything_accessories';
                  product_category_slide($cat_slug) ?>
          </div>
          <!--Slider Navigation-->
          <div
            class="
              product_slider_nav_left3 product_slider_nav
              d-flex
              align-items-center
              justify-content-center
              flex-column
            "
          >
            <i class="fa fa-chevron-left" aria-hidden="true"></i>
          </div>
          <div
            class="
              product_slider_nav_right3 product_slider_nav
              d-flex
              align-items-center
              justify-content-center
              flex-column
            "
          >
            <i class="fa fa-chevron-right" aria-hidden="true"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!--------------------------Best sellers in Beauty & Cosmetics---------------------------->
<div class="best_sellers">
  <div class="container-fluid">
    <div class="row">
      <div class="col text-center">
        <div class="section_title section_title_margin">
          <h2><span style="color: #fe4c50;">Uniseverything</span> Beauty & Cosmetics</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div class="product_slider_container">
          <div class="owl-carousel owl-theme product_slider4">
            <!--Slides-->
            <?php 
                $cat_slug = 'uniseverything_beauty';
                product_category_slide($cat_slug) ?>
          </div>
          <!--Slider Navigation-->
          <div
            class="
              product_slider_nav_left4 product_slider_nav
              d-flex
              align-items-center
              justify-content-center
              flex-column
            "
          >
            <i class="fa fa-chevron-left" aria-hidden="true"></i>
          </div>
          <div
            class="
              product_slider_nav_right4 product_slider_nav
              d-flex
              align-items-center
              justify-content-center
              flex-column
            "
          >
            <i class="fa fa-chevron-right" aria-hidden="true"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!--------------------------Best sellers in Home Utensils---------------------------->
<div class="best_sellers">
  <div class="container-fluid">
    <div class="row">
      <div class="col text-center">
        <div class="section_title section_title_margin">
          <h2><span style="color: #fe4c50;">Uniseverything</span> Home Utensils</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div class="product_slider_container">
          <div class="owl-carousel owl-theme product_slider5">
            <!--Slides-->
            <?php 
                $cat_slug = 'uniseverything_home';
                product_category_slide($cat_slug) ?>
          </div>
          <!--Slider Navigation-->
          <div
            class="
              product_slider_nav_left5 product_slider_nav
              d-flex
              align-items-center
              justify-content-center
              flex-column
            "
          >
            <i class="fa fa-chevron-left" aria-hidden="true"></i>
          </div>
          <div
            class="
              product_slider_nav_right5 product_slider_nav
              d-flex
              align-items-center
              justify-content-center
              flex-column
            "
          >
            <i class="fa fa-chevron-right" aria-hidden="true"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



<!-------------------------------Benefit------------------------------>
<div class="benefit">
  <div class="container-fluid">
    <div class="row benefit_row">
      <div class="col-lg-3 benefit_col">
        <div class="benefit_item d-flex flex-row align_items-center">
          <div class="benefit_icon">
            <i class="fa fa-truck" aria-hidden="true"></i>
          </div>
          <div class="benefit_content">
            <h6>Free Shipping</h6>
            <p>Suffered Alteration in some form</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 benefit_col">
        <div class="benefit_item d-flex flex-row align_items-center">
          <div class="benefit_icon">
            <i class="fa fa-undo" aria-hidden="true"></i>
          </div>
          <div class="benefit_content">
            <h6>45 days return</h6>
            <p>Making it Readable</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 benefit_col">
        <div class="benefit_item d-flex flex-row align_items-center">
          <div class="benefit_icon">
            <i class="fa fa-money-bill-alt" aria-hidden="true"></i>
          </div>
          <div class="benefit_content">
            <h6>Cash on Delivery</h6>
            <p>The internet tend to Repeat</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 benefit_col">
        <div class="benefit_item d-flex flex-row align_items-center">
          <div class="benefit_icon">
            <i class="fa fa-clock" aria-hidden="true"></i>
          </div>
          <div class="benefit_content">
            <h6>Opening all week</h6>
            <p>8Am - 9Pm</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
    include(SHARED_PATH . '/public_footer.php');
?>
