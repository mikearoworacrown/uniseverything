<?php require_once('../private/initialize.php'); ?>
<?php
    include(SHARED_PATH . '/public_header.php');
?>

<!----------------------------------------- Slider ---------------------------------->
<div class="main-slider">
  <div class="container-fluid">
    <div class="carousel slide carousel-fade" id="featured" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#featured" data-slide-to="0 active"></li>
        <li data-target="#featured" data-slide-to="1"></li>
        <li data-target="#featured" data-slide-to="2"></li>
        <li data-target="#featured" data-slide-to="3"></li>
        <li data-target="#featured" data-slide-to="4"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="images/slides/bags_slide.png" alt="">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="images/slides/sneakers_slide1.png" alt="">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="images/slides/shirt_slide.png" alt="">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="images/slides/watch_slide.png" alt="">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="images/slides/2piece_slide.png" alt="">
        </div>
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
          <ul
            class="
              arrivals_grid_sorting
              clearfix
              button-group
              filters-button
            "
          >
            <li
              class="
                grid_sorting_button
                button
                d-flex
                flex-column
                justify-content-center
                align-items-center
                active
                is-checked
              "
              data-filter="*"
            >
              all
            </li>
            <li
              class="
                grid_sorting_button
                button
                d-flex
                flex-column
                justify-content-center
                align-items-center
              "
              data-filter=".women"
            >
              Women's
            </li>
            <li
              class="
                grid_sorting_button
                button
                d-flex
                flex-column
                justify-content-center
                align-items-center
              "
              data-filter=".men"
            >
              men's
            </li>
            <li
              class="
                grid_sorting_button
                button
                d-flex
                flex-column
                justify-content-center
                align-items-center
              "
              data-filter=".accessories"
            >
              accessories
            </li>
            <li
              class="
                grid_sorting_button
                button
                d-flex
                flex-column
                justify-content-center
                align-items-center
              "
              data-filter=".beauty_cosmetics"
            >
              Beauty & Cosmetics
            </li>
            <li
              class="
                grid_sorting_button
                button
                d-flex
                flex-column
                justify-content-center
                align-items-center
              "
              data-filter=".home_utensils"
            >
              Home Utensils
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div
          class="product-grid"
          data-isotope='{"itemSelector": ".product-item", "layoutMode": "fitRows"}'
        >
          <!--Product 1-->
          <div class="product-item men">
            <div class="product discount product_filter">
              <div class="product_image">
                <img src="images/men/men12.png" alt="" />
              </div>
              <div class="favorite favorite_left"></div>
              <div
                class="
                  product_bubble product_bubble_right product_bubble_red
                  d_flex
                  flex-column
                  align-items-center
                "
              >
                <span>-20%</span>
              </div>
              <div class="product_info">
                <h6 class="product_name">
                  <a href="#">Men's Solid Slim Fit Casual Shirt</a>
                </h6>
                <div class="product_price">#4000 <span>#5000</span></div>
              </div>
              
            </div>
          </div>
          <!--Product 2-->
          <div class="product-item women">
            <div class="product product_filter">
              <div class="product_image">
                <img src="images/women/women9.png" alt="" />
              </div>
              <div class="favorite"></div>
              <div
                class="
                  product_bubble product_bubble_left product_bubble_green
                  d_flex
                  flex-column
                  align-items-center
                "
              >
                <span>New</span>
              </div>
              <div class="product_info">
                <h6 class="product_name">
                  <a href="#">Men's Solid Slim Fit Casual Shirt</a>
                </h6>
                <div class="product_price">#6100</div>
              </div>
            </div>
          </div>

          <!--Product 3-->
          <div class="product-item women">
            <div class="product product_filter">
              <div class="product_image">
                <img src="images/women/women4.png" alt="" />
              </div>
              <div class="favorite"></div>
              <div class="product_info">
                <h6 class="product_name">
                  <a href="#">Men's Solid Slim Fit Casual Shirt</a>
                </h6>
                <div class="product_price">#6000</div>
              </div>
            </div>
          </div>

          <!--Product 4-->
          <div class="product-item accessories">
            <div class="product discount product_filter">
              <div class="product_image">
                <img src="images/accessories/accessories1.png" alt="" />
              </div>
              <div class="favorite favorite_left"></div>
              <div
                class="
                  product_bubble product_bubble_right product_bubble_red
                  d_flex
                  flex-column
                  align-items-center
                "
              >
                <span>Sale</span>
              </div>
              <div class="product_info">
                <h6 class="product_name">
                  <a href="#">Men's Solid Slim Fit Casual Shirt</a>
                </h6>
                <div class="product_price">#4200</div>
              </div>
            </div>
          </div>

          <!--Product 5-->
          <div class="product-item men">
            <div class="product product_filter">
              <div class="product_image">
                <img src="images/men/men14.png" alt="" />
              </div>
              <div class="favorite"></div>
              <div class="product_info">
                <h6 class="product_name">
                  <a href="#">Men's Solid Slim Fit Casual Shirt</a>
                </h6>
                <div class="product_price">#8000</div>
              </div>
            </div>
          </div>

          <!--Product 6-->
          <div class="product-item accessories">
            <div class="product discount product_filter">
              <div class="product_image">
                <img src="images/accessories/accessories6.png" alt="" />
              </div>
              <div class="favorite favorite_left"></div>
              <div
                class="
                  product_bubble product_bubble_right product_bubble_red
                  d_flex
                  flex-column
                  align-items-center
                "
              >
                <span>-20%</span>
              </div>
              <div class="product_info">
                <h6 class="product_name">
                  <a href="#">Men's Solid Slim Fit Casual Shirt</a>
                </h6>
                <div class="product_price">#4000 <span>#5000</span></div>
              </div>
            </div>
          </div>

          <!--Product 7-->
          <div class="product-item women">
            <div class="product product_filter">
              <div class="product_image">
                <img src="images/women/women4.png" alt="" />
              </div>
              <div class="favorite"></div>
              <div class="product_info">
                <h6 class="product_name">
                  <a href="#">Men's Solid Slim Fit Casual Shirt</a>
                </h6>
                <div class="product_price">#6100</div>
              </div>
            </div>
          </div>

          <!--Product 8-->
          <div class="product-item beauty_cosmetics">
            <div class="product product_filter">
              <div class="product_image">
                <img src="images/beauty_cosmetics/beauty2.png" alt="" />
              </div>
              <div class="favorite favorite_left"></div>
              <div
                class="
                  product_bubble product_bubble_right product_bubble_red
                  d_flex
                  flex-column
                  align-items-center
                "
              >
                <span>-20%</span>
              </div>
              <div class="product_info">
                <h6 class="product_name">
                  <a href="#">Men's Solid Slim Fit Casual Shirt</a>
                </h6>
                <div class="product_price">
                  #4000 <span>#5000</span></div>
              </div>
            </div>
          </div>

          <!--Product 9-->
          <div class="product-item men">
            <div class="product product_filter">
              <div class="product_image">
                <img src="images/men/men9.png" alt="" />
              </div>
              <div class="favorite favorite_left"></div>
              <div
                class="
                  product_bubble product_bubble_right product_bubble_red
                  d_flex
                  flex-column
                  align-items-center
                "
              >
                <span>Sale</span>
              </div>
              <div class="product_info">
                <h6 class="product_name">
                  <a href="#">Men's Solid Slim Fit Casual Shirt</a>
                </h6>
                <div class="product_price">#4100</div>
              </div>
            </div>
          </div>

          <!--Product 10-->
          <div class="product-item women">
            <div class="product product_filter">
              <div class="product_image">
                <img src="images/women/women10.png" alt="" />
              </div>
              <div class="favorite"></div>
              <div class="product_info">
                <h6 class="product_name">
                  <a href="#">Men's Solid Slim Fit Casual Shirt</a>
                </h6>
                <div class="product_price">#5400</div>
              </div>
            </div>
          </div>

          <!--Product 11-->
          <div class="product-item home_utensils">
            <div class="product product_filter">
              <div class="product_image">
                <img src="images/home_utensils/home8.png" alt="" />
              </div>
              <div class="favorite"></div>
              <div class="product_info">
                <h6 class="product_name">
                  <a href="#">Men's Solid Slim Fit Casual Shirt</a>
                </h6>
                <div class="product_price">#9000</div>
              </div>
            </div>
          </div>

          <!--Product 12-->
          <div class="product-item home_utensils">
            <div class="product product_filter">
              <div class="product_image">
                <img src="images/home_utensils/home10.png" alt="" />
              </div>
              <div class="favorite"></div>
              <div class="product_info">
                <h6 class="product_name">
                  <a href="#">Men's Solid Slim Fit Casual Shirt</a>
                </h6>
                <div class="product_price">#5200</div>
              </div>
            </div>
          </div>

          <!--Product 13-->
          <div class="product-item men">
            <div class="product product_filter">
              <div class="product_image">
                <img src="images/men/men3.png" alt="" />
              </div>
              <div class="favorite"></div>
              <div class="product_info">
                <h6 class="product_name">
                  <a href="#">Men's Solid Slim Fit Casual Shirt</a>
                </h6>
                <div class="product_price">#7000</div>
              </div>
            </div>
          </div>

          <!--Product 14-->
          <div class="product-item women">
            <div class="product product_filter">
              <div class="product_image">
                <img src="images/women/women15.png" alt="" />
              </div>
              <div class="favorite"></div>
              <div class="product_info">
                <h6 class="product_name">
                  <a href="#">Men's Solid Slim Fit Casual Shirt</a>
                </h6>
                <div class="product_price">#8000</div>
              </div>
            </div>
          </div>

          <!--Product 15-->
          <div class="product-item accessories">
            <div class="product product_filter">
              <div class="product_image">
                <img src="images/accessories/accessories14.png" alt="" />
              </div>
              <div class="favorite"></div>
              <div class="product_info">
                <h6 class="product_name">
                  <a href="#">Men's Solid Slim Fit Casual Shirt</a>
                </h6>
                <div class="product_price">$520</div>
              </div>
            </div>
          </div>

          <!--Product 16-->
          <div class="product-item men">
            <div class="product product_filter">
              <div class="product_image">
                <img src="images/men/men6.png" alt="" />
              </div>
              <div class="favorite"></div>
              <div class="product_info">
                <h6 class="product_name">
                  <a href="#">Men's Solid Slim Fit Casual Shirt</a>
                </h6>
                <div class="product_price">#9000</div>
              </div>
            </div>
          </div>

          <!--Product 17-->
          <div class="product-item beauty_cosmetics">
            <div class="product product_filter">
              <div class="product_image">
                <img src="images/beauty_cosmetics/beauty10.png" alt="" />
              </div>
              <div class="favorite"></div>
              <div class="product_info">
                <h6 class="product_name">
                  <a href="#">Men's Solid Slim Fit Casual Shirt</a>
                </h6>
                <div class="product_price">#5200</div>
              </div>
            </div>
          </div>

          <!--Product 18-->
          <div class="product-item home_utensils">
            <div class="product product_filter">
              <div class="product_image">
                <img src="images/home_utensils/home4.png" alt="" />
              </div>
              <div class="favorite"></div>
              <div class="product_info">
                <h6 class="product_name">
                  <a href="#">Men's Solid Slim Fit Casual Shirt</a>
                </h6>
                <div class="product_price">#2500</div>
              </div>
            </div>
          </div>

          <!--Product 19-->
          <div class="product-item men">
            <div class="product product_filter">
              <div class="product_image">
                <img src="images/men/men15.png" alt="" />
              </div>
              <div class="favorite"></div>
              <div class="product_info">
                <h6 class="product_name">
                  <a href="#">Men's Solid Slim Fit Casual Shirt</a>
                </h6>
                <div class="product_price">#8000</div>
              </div>
            </div>
          </div>

          <!--Product 20-->
          <div class="product-item accessories">
            <div class="product product_filter">
              <div class="product_image">
                <img src="images/accessories/accessories4.png" alt="" />
              </div>
              <div class="favorite"></div>
              <div class="product_info">
                <h6 class="product_name">
                  <a href="#">Men's Solid Slim Fit Casual Shirt</a>
                </h6>
                <div class="product_price">#30000</div>
              </div>
            </div>
          </div>


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
            <!--Slide 1-->
            <div class="owl-item product_slider_item">
              <div class="product-item-bestseller men">
                <div class="product discount product_filter">
                  <div class="product_image">
                    <img src="images/women/women1.png" alt="" />
                  </div>
                  <div class="favorite favorite_left"></div>
                  <div
                    class="
                      product_bubble
                      product_bubble_right
                      product_bubble_red
                      d_flex
                      flex-column
                      align-items-center
                    "
                  >
                    <span>-20%</span>
                  </div>
                  <div class="product_info">
                    <h6 class="product_name">
                      <a href="#">Men's Solid Slim Fit Casual Shirt</a>
                    </h6>
                    <div class="product_price">
                      #4000 <span>#5000</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--Slide 2-->
            <div class="owl-item product_slider_item">
              <div class="product-item-bestseller women">
                <div class="product product_filter">
                  <div class="product_image">
                    <img src="images/women/women2.png" alt="" />
                  </div>
                  <div class="favorite"></div>
                  <div
                    class="
                      product_bubble
                      product_bubble_left
                      product_bubble_green
                      d_flex
                      flex-column
                      align-items-center
                    "
                  >
                    <span>New</span>
                  </div>
                  <div class="product_info">
                    <h6 class="product_name">
                      <a href="#">Men's Solid Slim Fit Casual Shirt</a>
                    </h6>
                    <div class="product_price">#6100</div>
                  </div>
                </div>
              </div>
            </div>
            <!--Slide 3-->
            <div class="owl-item product_slider_item">
              <div class="product-item-bestseller women">
                <div class="product product_filter">
                  <div class="product_image">
                    <img src="images/women/women3.png" alt="" />
                  </div>
                  <div class="favorite"></div>
                  <div class="product_info">
                    <h6 class="product_name">
                      <a href="#">Men's Solid Slim Fit Casual Shirt</a>
                    </h6>
                    <div class="product_price">#5000</div>
                  </div>
                </div>
              </div>
            </div>
            <!--Slide 4-->
            <div class="owl-item product_slider_item">
              <div class="product-item-bestseller accessories">
                <div class="product discount product_filter">
                  <div class="product_image">
                    <img src="images/women/women4.png" alt="" />
                  </div>
                  <div class="favorite favorite_left"></div>
                  <div
                    class="
                      product_bubble
                      product_bubble_right
                      product_bubble_red
                      d_flex
                      flex-column
                      align-items-center
                    "
                  >
                    <span>Sale</span>
                  </div>
                  <div class="product_info">
                    <h6 class="product_name">
                      <a href="#">Men's Solid Slim Fit Casual Shirt</a>
                    </h6>
                    <div class="product_price">#4200</div>
                  </div>
                </div>
              </div>
            </div>
            <!--Slide 5-->
            <div class="owl-item product_slider_item">
              <div class="product-item-bestseller men">
                <div class="product product_filter">
                  <div class="product_image">
                    <img src="images/women/women5.png" alt="" />
                  </div>
                  <div class="favorite"></div>
                  <div class="product_info">
                    <h6 class="product_name">
                      <a href="#">Men's Solid Slim Fit Casual Shirt</a>
                    </h6>
                    <div class="product_price">#8000</div>
                  </div>
                </div>
              </div>
            </div>
            <!--Slide 6-->
            <div class="owl-item product_slider_item">
              <div class="product-item-bestseller accessories">
                <div class="product discount product_filter">
                  <div class="product_image">
                    <img src="images/women/women6.png" alt="" />
                  </div>
                  <div class="favorite favorite_left"></div>
                  <div
                    class="
                      product_bubble
                      product_bubble_right
                      product_bubble_red
                      d_flex
                      flex-column
                      align-items-center
                    "
                  >
                    <span>-%20</span>
                  </div>
                  <div class="product_info">
                    <h6 class="product_name">
                      <a href="#">Men's Solid Slim Fit Casual Shirt</a>
                    </h6>
                    <div class="product_price">
                      #4000 <span>#5000</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--Slide 7-->
            <div class="owl-item product_slider_item">
              <div class="product-item-bestseller women">
                <div class="product product_filter">
                  <div class="product_image">
                    <img src="images/women/women7.png" alt="" />
                  </div>
                  <div class="favorite"></div>
                  <div class="product_info">
                    <h6 class="product_name">
                      <a href="#">Men's Solid Slim Fit Casual Shirt</a>
                    </h6>
                    <div class="product_price">#6100</div>
                  </div>
                </div>
              </div>
            </div>
            <!--Slide 8-->
            <div class="owl-item product_slider_item">
              <div class="product-item-bestseller accessories">
                <div class="product product_filter">
                  <div class="product_image">
                    <img src="images/women/women8.png" alt="" />
                  </div>
                  <div class="favorite favorite_left"></div>
                  <div
                    class="
                      product_bubble
                      product_bubble_right
                      product_bubble_red
                      d_flex
                      flex-column
                      align-items-center
                    "
                  >
                    <span>-%20</span>
                  </div>
                  <div class="product_info">
                    <h6 class="product_name">
                      <a href="#">Men's Solid Slim Fit Casual Shirt</a>
                    </h6>
                    <div class="product_price">
                      #4000 <span>#5000</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--Slide 9-->
            <div class="owl-item product_slider_item">
              <div class="product-item-bestseller men">
                <div class="product product_filter">
                  <div class="product_image">
                    <img src="images/women/women9.png" alt="" />
                  </div>
                  <div class="favorite favorite_left"></div>
                  <div
                    class="
                      product_bubble
                      product_bubble_right
                      product_bubble_red
                      d_flex
                      flex-column
                      align-items-center
                    "
                  >
                    <span>Sale</span>
                  </div>
                  <div class="product_info">
                    <h6 class="product_name">
                      <a href="#">Men's Solid Slim Fit Casual Shirt</a>
                    </h6>
                    <div class="product_price">#4100</div>
                  </div>
                </div>
              </div>
            </div>
            <!--Slide 10-->
            <div class="owl-item product_slider_item">
              <div class="product-item-bestseller women">
                <div class="product product_filter">
                  <div class="product_image">
                    <img src="images/women/women10.png" alt="" />
                  </div>
                  <div class="favorite"></div>
                  <div class="product_info">
                    <h6 class="product_name">
                      <a href="#">Men's Solid Slim Fit Casual Shirt</a>
                    </h6>
                    <div class="product_price">#5200</div>
                  </div>
                </div>
              </div>
            </div>
             <!--Slide 11-->
             <div class="owl-item product_slider_item">
              <div class="product-item-bestseller men">
                <div class="product discount product_filter">
                  <div class="product_image">
                    <img src="images/women/women11.png" alt="" />
                  </div>
                  <div class="favorite favorite_left"></div>
                  <div
                    class="
                      product_bubble
                      product_bubble_right
                      product_bubble_red
                      d_flex
                      flex-column
                      align-items-center
                    "
                  >
                    <span>-20%</span>
                  </div>
                  <div class="product_info">
                    <h6 class="product_name">
                      <a href="#">Men's Solid Slim Fit Casual Shirt</a>
                    </h6>
                    <div class="product_price">
                      #4000 <span>#5000</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--Slide 12-->
            <div class="owl-item product_slider_item">
              <div class="product-item-bestseller women">
                <div class="product product_filter">
                  <div class="product_image">
                    <img src="images/women/women12.png" alt="" />
                  </div>
                  <div class="favorite"></div>
                  <div
                    class="
                      product_bubble
                      product_bubble_left
                      product_bubble_green
                      d_flex
                      flex-column
                      align-items-center
                    "
                  >
                    <span>New</span>
                  </div>
                  <div class="product_info">
                    <h6 class="product_name">
                      <a href="#">Men's Solid Slim Fit Casual Shirt</a>
                    </h6>
                    <div class="product_price">#6100</div>
                  </div>
                </div>
              </div>
            </div>
            <!--Slide 13-->
            <div class="owl-item product_slider_item">
              <div class="product-item-bestseller women">
                <div class="product product_filter">
                  <div class="product_image">
                    <img src="images/women/women13.png" alt="" />
                  </div>
                  <div class="favorite"></div>
                  <div class="product_info">
                    <h6 class="product_name">
                      <a href="#">Men's Solid Slim Fit Casual Shirt</a>
                    </h6>
                    <div class="product_price">#5000</div>
                  </div>
                </div>
              </div>
            </div>
            <!--Slide 14-->
            <div class="owl-item product_slider_item">
              <div class="product-item-bestseller accessories">
                <div class="product discount product_filter">
                  <div class="product_image">
                    <img src="images/women/women14.png" alt="" />
                  </div>
                  <div class="favorite favorite_left"></div>
                  <div
                    class="
                      product_bubble
                      product_bubble_right
                      product_bubble_red
                      d_flex
                      flex-column
                      align-items-center
                    "
                  >
                    <span>Sale</span>
                  </div>
                  <div class="product_info">
                    <h6 class="product_name">
                      <a href="#">Men's Solid Slim Fit Casual Shirt</a>
                    </h6>
                    <div class="product_price">#4200</div>
                  </div>
                </div>
              </div>
            </div>
            <!--Slide 15-->
            <div class="owl-item product_slider_item">
              <div class="product-item-bestseller men">
                <div class="product product_filter">
                  <div class="product_image">
                    <img src="images/women/women15.png" alt="" />
                  </div>
                  <div class="favorite"></div>
                  <div class="product_info">
                    <h6 class="product_name">
                      <a href="#">Men's Solid Slim Fit Casual Shirt</a>
                    </h6>
                    <div class="product_price">#8000</div>
                  </div>
                </div>
              </div>
            </div>
            <!--Slide 16-->
            <div class="owl-item product_slider_item">
              <div class="product-item-bestseller accessories">
                <div class="product discount product_filter">
                  <div class="product_image">
                    <img src="images/women/women16.png" alt="" />
                  </div>
                  <div class="favorite favorite_left"></div>
                  <div
                    class="
                      product_bubble
                      product_bubble_right
                      product_bubble_red
                      d_flex
                      flex-column
                      align-items-center
                    "
                  >
                    <span>-%20</span>
                  </div>
                  <div class="product_info">
                    <h6 class="product_name">
                      <a href="#">Men's Solid Slim Fit Casual Shirt</a>
                    </h6>
                    <div class="product_price">
                      #4000 <span>#5000</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--Slide 17-->
            <div class="owl-item product_slider_item">
              <div class="product-item-bestseller women">
                <div class="product product_filter">
                  <div class="product_image">
                    <img src="images/women/women17.png" alt="" />
                  </div>
                  <div class="favorite"></div>
                  <div class="product_info">
                    <h6 class="product_name">
                      <a href="#">Men's Solid Slim Fit Casual Shirt</a>
                    </h6>
                    <div class="product_price">#6100</div>
                  </div>
                </div>
              </div>
            </div>
            <!--Slide 18-->
            <div class="owl-item product_slider_item">
              <div class="product-item-bestseller accessories">
                <div class="product product_filter">
                  <div class="product_image">
                    <img src="images/women/women18.png" alt="" />
                  </div>
                  <div class="favorite favorite_left"></div>
                  <div
                    class="
                      product_bubble
                      product_bubble_right
                      product_bubble_red
                      d_flex
                      flex-column
                      align-items-center
                    "
                  >
                    <span>-%20</span>
                  </div>
                  <div class="product_info">
                    <h6 class="product_name">
                      <a href="#">Men's Solid Slim Fit Casual Shirt</a>
                    </h6>
                    <div class="product_price">
                      #4000 <span>#5000</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--Slide 19-->
            <div class="owl-item product_slider_item">
              <div class="product-item-bestseller men">
                <div class="product product_filter">
                  <div class="product_image">
                    <img src="images/women/women19.png" alt="" />
                  </div>
                  <div class="favorite favorite_left"></div>
                  <div
                    class="
                      product_bubble
                      product_bubble_right
                      product_bubble_red
                      d_flex
                      flex-column
                      align-items-center
                    "
                  >
                    <span>Sale</span>
                  </div>
                  <div class="product_info">
                    <h6 class="product_name">
                      <a href="#">Men's Solid Slim Fit Casual Shirt</a>
                    </h6>
                    <div class="product_price">#4100</div>
                  </div>
                </div>
              </div>
            </div>
            <!--Slide 20-->
            <div class="owl-item product_slider_item">
              <div class="product-item-bestseller women">
                <div class="product product_filter">
                  <div class="product_image">
                    <img src="images/women/women20.png" alt="" />
                  </div>
                  <div class="favorite"></div>
                  <div class="product_info">
                    <h6 class="product_name">
                      <a href="#">Men's Solid Slim Fit Casual Shirt</a>
                    </h6>
                    <div class="product_price">#5200</div>
                  </div>
                </div>
              </div>
            </div>
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
            <!--Slide 1-->
            <div class="owl-item product_slider_item">
              <div class="product-item-bestseller men">
                <div class="product discount product_filter">
                  <div class="product_image">
                    <img src="images/men/men18.png" alt="" />
                  </div>
                  <div class="favorite favorite_left"></div>
                  <div
                    class="
                      product_bubble
                      product_bubble_right
                      product_bubble_red
                      d_flex
                      flex-column
                      align-items-center
                    "
                  >
                    <span>-20%</span>
                  </div>
                  <div class="product_info">
                    <h6 class="product_name">
                      <a href="#">Men's Solid Slim Fit Casual Shirt</a>
                    </h6>
                    <div class="product_price">
                      #4000 <span>#5000</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--Slide 2-->
            <div class="owl-item product_slider_item">
              <div class="product-item-bestseller women">
                <div class="product product_filter">
                  <div class="product_image">
                    <img src="images/men/men17.png" alt="" />
                  </div>
                  <div class="favorite"></div>
                  <div
                    class="
                      product_bubble
                      product_bubble_left
                      product_bubble_green
                      d_flex
                      flex-column
                      align-items-center
                    "
                  >
                    <span>New</span>
                  </div>
                  <div class="product_info">
                    <h6 class="product_name">
                      <a href="#">Men's Solid Slim Fit Casual Shirt</a>
                    </h6>
                    <div class="product_price">#6100</div>
                  </div>
                </div>
              </div>
            </div>
            <!--Slide 3-->
            <div class="owl-item product_slider_item">
              <div class="product-item-bestseller women">
                <div class="product product_filter">
                  <div class="product_image">
                    <img src="images/men/men15.png" alt="" />
                  </div>
                  <div class="favorite"></div>
                  <div class="product_info">
                    <h6 class="product_name">
                      <a href="#">Men's Solid Slim Fit Casual Shirt</a>
                    </h6>
                    <div class="product_price">#5000</div>
                  </div>
                </div>
              </div>
            </div>
            <!--Slide 4-->
            <div class="owl-item product_slider_item">
              <div class="product-item-bestseller accessories">
                <div class="product discount product_filter">
                  <div class="product_image">
                    <img src="images/men/men1.png" alt="" />
                  </div>
                  <div class="favorite favorite_left"></div>
                  <div
                    class="
                      product_bubble
                      product_bubble_right
                      product_bubble_red
                      d_flex
                      flex-column
                      align-items-center
                    "
                  >
                    <span>Sale</span>
                  </div>
                  <div class="product_info">
                    <h6 class="product_name">
                      <a href="#">Men's Solid Slim Fit Casual Shirt</a>
                    </h6>
                    <div class="product_price">#4200</div>
                  </div>
                </div>
              </div>
            </div>
            <!--Slide 5-->
            <div class="owl-item product_slider_item">
              <div class="product-item-bestseller men">
                <div class="product product_filter">
                  <div class="product_image">
                    <img src="images/men/men2.png" alt="" />
                  </div>
                  <div class="favorite"></div>
                  <div class="product_info">
                    <h6 class="product_name">
                      <a href="#">Men's Solid Slim Fit Casual Shirt</a>
                    </h6>
                    <div class="product_price">#8000</div>
                  </div>
                </div>
              </div>
            </div>
            <!--Slide 6-->
            <div class="owl-item product_slider_item">
              <div class="product-item-bestseller accessories">
                <div class="product discount product_filter">
                  <div class="product_image">
                    <img src="images/men/men3.png" alt="" />
                  </div>
                  <div class="favorite favorite_left"></div>
                  <div
                    class="
                      product_bubble
                      product_bubble_right
                      product_bubble_red
                      d_flex
                      flex-column
                      align-items-center
                    "
                  >
                    <span>-%20</span>
                  </div>
                  <div class="product_info">
                    <h6 class="product_name">
                      <a href="#">Men's Solid Slim Fit Casual Shirt</a>
                    </h6>
                    <div class="product_price">
                      #4000 <span>#5000</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--Slide 7-->
            <div class="owl-item product_slider_item">
              <div class="product-item-bestseller women">
                <div class="product product_filter">
                  <div class="product_image">
                    <img src="images/men/men4.png" alt="" />
                  </div>
                  <div class="favorite"></div>
                  <div class="product_info">
                    <h6 class="product_name">
                      <a href="#">Men's Solid Slim Fit Casual Shirt</a>
                    </h6>
                    <div class="product_price">#6100</div>
                  </div>
                </div>
              </div>
            </div>
            <!--Slide 8-->
            <div class="owl-item product_slider_item">
              <div class="product-item-bestseller accessories">
                <div class="product product_filter">
                  <div class="product_image">
                    <img src="images/men/men5.png" alt="" />
                  </div>
                  <div class="favorite favorite_left"></div>
                  <div
                    class="
                      product_bubble
                      product_bubble_right
                      product_bubble_red
                      d_flex
                      flex-column
                      align-items-center
                    "
                  >
                    <span>-%20</span>
                  </div>
                  <div class="product_info">
                    <h6 class="product_name">
                      <a href="#">Men's Solid Slim Fit Casual Shirt</a>
                    </h6>
                    <div class="product_price">
                      #4000 <span>#5000</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--Slide 9-->
            <div class="owl-item product_slider_item">
              <div class="product-item-bestseller men">
                <div class="product product_filter">
                  <div class="product_image">
                    <img src="images/men/men15.png" alt="" />
                  </div>
                  <div class="favorite favorite_left"></div>
                  <div
                    class="
                      product_bubble
                      product_bubble_right
                      product_bubble_red
                      d_flex
                      flex-column
                      align-items-center
                    "
                  >
                    <span>Sale</span>
                  </div>
                  <div class="product_info">
                    <h6 class="product_name">
                      <a href="#">Men's Solid Slim Fit Casual Shirt</a>
                    </h6>
                    <div class="product_price">#4100</div>
                  </div>
                </div>
              </div>
            </div>
            <!--Slide 10-->
            <div class="owl-item product_slider_item">
              <div class="product-item-bestseller women">
                <div class="product product_filter">
                  <div class="product_image">
                    <img src="images/men/men14.png" alt="" />
                  </div>
                  <div class="favorite"></div>
                  <div class="product_info">
                    <h6 class="product_name">
                      <a href="#">Men's Solid Slim Fit Casual Shirt</a>
                    </h6>
                    <div class="product_price">#5200</div>
                  </div>
                </div>
              </div>
            </div>
             <!--Slide 11-->
             <div class="owl-item product_slider_item">
              <div class="product-item-bestseller men">
                <div class="product discount product_filter">
                  <div class="product_image">
                    <img src="images/men/men6.png" alt="" />
                  </div>
                  <div class="favorite favorite_left"></div>
                  <div
                    class="
                      product_bubble
                      product_bubble_right
                      product_bubble_red
                      d_flex
                      flex-column
                      align-items-center
                    "
                  >
                    <span>-20%</span>
                  </div>
                  <div class="product_info">
                    <h6 class="product_name">
                      <a href="#">Men's Solid Slim Fit Casual Shirt</a>
                    </h6>
                    <div class="product_price">
                      #4000 <span>#5000</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--Slide 12-->
            <div class="owl-item product_slider_item">
              <div class="product-item-bestseller women">
                <div class="product product_filter">
                  <div class="product_image">
                    <img src="images/men/men7.png" alt="" />
                  </div>
                  <div class="favorite"></div>
                  <div
                    class="
                      product_bubble
                      product_bubble_left
                      product_bubble_green
                      d_flex
                      flex-column
                      align-items-center
                    "
                  >
                    <span>New</span>
                  </div>
                  <div class="product_info">
                    <h6 class="product_name">
                      <a href="#">Men's Solid Slim Fit Casual Shirt</a>
                    </h6>
                    <div class="product_price">#6100</div>
                  </div>
                </div>
              </div>
            </div>
            <!--Slide 13-->
            <div class="owl-item product_slider_item">
              <div class="product-item-bestseller women">
                <div class="product product_filter">
                  <div class="product_image">
                    <img src="images/men/men8.png" alt="" />
                  </div>
                  <div class="favorite"></div>
                  <div class="product_info">
                    <h6 class="product_name">
                      <a href="#">Men's Solid Slim Fit Casual Shirt</a>
                    </h6>
                    <div class="product_price">#5000</div>
                  </div>
                </div>
              </div>
            </div>
            <!--Slide 14-->
            <div class="owl-item product_slider_item">
              <div class="product-item-bestseller accessories">
                <div class="product discount product_filter">
                  <div class="product_image">
                    <img src="images/men/men9.png" alt="" />
                  </div>
                  <div class="favorite favorite_left"></div>
                  <div
                    class="
                      product_bubble
                      product_bubble_right
                      product_bubble_red
                      d_flex
                      flex-column
                      align-items-center
                    "
                  >
                    <span>Sale</span>
                  </div>
                  <div class="product_info">
                    <h6 class="product_name">
                      <a href="#">Men's Solid Slim Fit Casual Shirt</a>
                    </h6>
                    <div class="product_price">#4200</div>
                  </div>
                </div>
              </div>
            </div>
            <!--Slide 15-->
            <div class="owl-item product_slider_item">
              <div class="product-item-bestseller men">
                <div class="product product_filter">
                  <div class="product_image">
                    <img src="images/men/men10.png" alt="" />
                  </div>
                  <div class="favorite"></div>
                  <div class="product_info">
                    <h6 class="product_name">
                      <a href="#">Men's Solid Slim Fit Casual Shirt</a>
                    </h6>
                    <div class="product_price">#8000</div>
                  </div>
                </div>
              </div>
            </div>
            <!--Slide 16-->
            <div class="owl-item product_slider_item">
              <div class="product-item-bestseller accessories">
                <div class="product discount product_filter">
                  <div class="product_image">
                    <img src="images/men/men13.png" alt="" />
                  </div>
                  <div class="favorite favorite_left"></div>
                  <div
                    class="
                      product_bubble
                      product_bubble_right
                      product_bubble_red
                      d_flex
                      flex-column
                      align-items-center
                    "
                  >
                    <span>-%20</span>
                  </div>
                  <div class="product_info">
                    <h6 class="product_name">
                      <a href="#">Men's Solid Slim Fit Casual Shirt</a>
                    </h6>
                    <div class="product_price">
                      #4000 <span>#5000</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--Slide 17-->
            <div class="owl-item product_slider_item">
              <div class="product-item-bestseller women">
                <div class="product product_filter">
                  <div class="product_image">
                    <img src="images/men/men12.png" alt="" />
                  </div>
                  <div class="favorite"></div>
                  <div class="product_info">
                    <h6 class="product_name">
                      <a href="#">Men's Solid Slim Fit Casual Shirt</a>
                    </h6>
                    <div class="product_price">#6100</div>
                  </div>
                </div>
              </div>
            </div>
            <!--Slide 18-->
            <div class="owl-item product_slider_item">
              <div class="product-item-bestseller accessories">
                <div class="product product_filter">
                  <div class="product_image">
                    <img src="images/men/men11.png" alt="" />
                  </div>
                  <div class="favorite favorite_left"></div>
                  <div
                    class="
                      product_bubble
                      product_bubble_right
                      product_bubble_red
                      d_flex
                      flex-column
                      align-items-center
                    "
                  >
                    <span>-%20</span>
                  </div>
                  <div class="product_info">
                    <h6 class="product_name">
                      <a href="#">Men's Solid Slim Fit Casual Shirt</a>
                    </h6>
                    <div class="product_price">
                      #4000 <span>#5000</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

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
            <!--Slide 1-->
            <div class="owl-item product_slider_item">
              <div class="product-item-bestseller men">
                <div class="product discount product_filter">
                  <div class="product_image">
                    <img src="images/accessories/accessories1.png" alt="" />
                  </div>
                  <div class="favorite favorite_left"></div>
                  <div
                    class="
                      product_bubble
                      product_bubble_right
                      product_bubble_red
                      d_flex
                      flex-column
                      align-items-center
                    "
                  >
                    <span>-20%</span>
                  </div>
                  <div class="product_info">
                    <h6 class="product_name">
                      <a href="#">Men's Solid Slim Fit Casual Shirt</a>
                    </h6>
                    <div class="product_price">
                      #4000 <span>#5000</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--Slide 2-->
            <div class="owl-item product_slider_item">
              <div class="product-item-bestseller women">
                <div class="product product_filter">
                  <div class="product_image">
                    <img src="images/accessories/accessories2.png" alt="" />
                  </div>
                  <div class="favorite"></div>
                  <div
                    class="
                      product_bubble
                      product_bubble_left
                      product_bubble_green
                      d_flex
                      flex-column
                      align-items-center
                    "
                  >
                    <span>New</span>
                  </div>
                  <div class="product_info">
                    <h6 class="product_name">
                      <a href="#">Men's Solid Slim Fit Casual Shirt</a>
                    </h6>
                    <div class="product_price">#6100</div>
                  </div>
                </div>
              </div>
            </div>
            <!--Slide 3-->
            <div class="owl-item product_slider_item">
              <div class="product-item-bestseller women">
                <div class="product product_filter">
                  <div class="product_image">
                    <img src="images/accessories/accessories3.png" alt="" />
                  </div>
                  <div class="favorite"></div>
                  <div class="product_info">
                    <h6 class="product_name">
                      <a href="#">Men's Solid Slim Fit Casual Shirt</a>
                    </h6>
                    <div class="product_price">#5000</div>
                  </div>
                </div>
              </div>
            </div>
            <!--Slide 4-->
            <div class="owl-item product_slider_item">
              <div class="product-item-bestseller accessories">
                <div class="product discount product_filter">
                  <div class="product_image">
                    <img src="images/accessories/accessories4.png" alt="" />
                  </div>
                  <div class="favorite favorite_left"></div>
                  <div
                    class="
                      product_bubble
                      product_bubble_right
                      product_bubble_red
                      d_flex
                      flex-column
                      align-items-center
                    "
                  >
                    <span>Sale</span>
                  </div>
                  <div class="product_info">
                    <h6 class="product_name">
                      <a href="#">Men's Solid Slim Fit Casual Shirt</a>
                    </h6>
                    <div class="product_price">#4200</div>
                  </div>
                </div>
              </div>
            </div>
            <!--Slide 5-->
            <div class="owl-item product_slider_item">
              <div class="product-item-bestseller men">
                <div class="product product_filter">
                  <div class="product_image">
                    <img src="images/accessories/accessories5.png" alt="" />
                  </div>
                  <div class="favorite"></div>
                  <div class="product_info">
                    <h6 class="product_name">
                      <a href="#">Men's Solid Slim Fit Casual Shirt</a>
                    </h6>
                    <div class="product_price">#8000</div>
                  </div>
                </div>
              </div>
            </div>
            <!--Slide 6-->
            <div class="owl-item product_slider_item">
              <div class="product-item-bestseller accessories">
                <div class="product discount product_filter">
                  <div class="product_image">
                    <img src="images/accessories/accessories6.png" alt="" />
                  </div>
                  <div class="favorite favorite_left"></div>
                  <div
                    class="
                      product_bubble
                      product_bubble_right
                      product_bubble_red
                      d_flex
                      flex-column
                      align-items-center
                    "
                  >
                    <span>-%20</span>
                  </div>
                  <div class="product_info">
                    <h6 class="product_name">
                      <a href="#">Men's Solid Slim Fit Casual Shirt</a>
                    </h6>
                    <div class="product_price">
                      #4000 <span>#5000</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--Slide 7-->
            <div class="owl-item product_slider_item">
              <div class="product-item-bestseller women">
                <div class="product product_filter">
                  <div class="product_image">
                    <img src="images/accessories/accessories7.png" alt="" />
                  </div>
                  <div class="favorite"></div>
                  <div class="product_info">
                    <h6 class="product_name">
                      <a href="#">Men's Solid Slim Fit Casual Shirt</a>
                    </h6>
                    <div class="product_price">#6100</div>
                  </div>
                </div>
              </div>
            </div>
            <!--Slide 8-->
            <div class="owl-item product_slider_item">
              <div class="product-item-bestseller accessories">
                <div class="product product_filter">
                  <div class="product_image">
                    <img src="images/accessories/accessories8.png" alt="" />
                  </div>
                  <div class="favorite favorite_left"></div>
                  <div
                    class="
                      product_bubble
                      product_bubble_right
                      product_bubble_red
                      d_flex
                      flex-column
                      align-items-center
                    "
                  >
                    <span>-%20</span>
                  </div>
                  <div class="product_info">
                    <h6 class="product_name">
                      <a href="#">Men's Solid Slim Fit Casual Shirt</a>
                    </h6>
                    <div class="product_price">
                      #4000 <span>#5000</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--Slide 9-->
            <div class="owl-item product_slider_item">
              <div class="product-item-bestseller men">
                <div class="product product_filter">
                  <div class="product_image">
                    <img src="images/accessories/accessories9.png" alt="" />
                  </div>
                  <div class="favorite favorite_left"></div>
                  <div
                    class="
                      product_bubble
                      product_bubble_right
                      product_bubble_red
                      d_flex
                      flex-column
                      align-items-center
                    "
                  >
                    <span>Sale</span>
                  </div>
                  <div class="product_info">
                    <h6 class="product_name">
                      <a href="#">Men's Solid Slim Fit Casual Shirt</a>
                    </h6>
                    <div class="product_price">#4100</div>
                  </div>
                </div>
              </div>
            </div>
            <!--Slide 10-->
            <div class="owl-item product_slider_item">
              <div class="product-item-bestseller women">
                <div class="product product_filter">
                  <div class="product_image">
                    <img src="images/accessories/accessories10.png" alt="" />
                  </div>
                  <div class="favorite"></div>
                  <div class="product_info">
                    <h6 class="product_name">
                      <a href="#">Men's Solid Slim Fit Casual Shirt</a>
                    </h6>
                    <div class="product_price">#5200</div>
                  </div>
                </div>
              </div>
            </div>
             <!--Slide 11-->
             <div class="owl-item product_slider_item">
              <div class="product-item-bestseller men">
                <div class="product discount product_filter">
                  <div class="product_image">
                    <img src="images/accessories/accessories11.png" alt="" />
                  </div>
                  <div class="favorite favorite_left"></div>
                  <div
                    class="
                      product_bubble
                      product_bubble_right
                      product_bubble_red
                      d_flex
                      flex-column
                      align-items-center
                    "
                  >
                    <span>-20%</span>
                  </div>
                  <div class="product_info">
                    <h6 class="product_name">
                      <a href="#">Men's Solid Slim Fit Casual Shirt</a>
                    </h6>
                    <div class="product_price">
                      #4000 <span>#5000</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--Slide 12-->
            <div class="owl-item product_slider_item">
              <div class="product-item-bestseller women">
                <div class="product product_filter">
                  <div class="product_image">
                    <img src="images/accessories/accessories12.png" alt="" />
                  </div>
                  <div class="favorite"></div>
                  <div
                    class="
                      product_bubble
                      product_bubble_left
                      product_bubble_green
                      d_flex
                      flex-column
                      align-items-center
                    "
                  >
                    <span>New</span>
                  </div>
                  <div class="product_info">
                    <h6 class="product_name">
                      <a href="#">Men's Solid Slim Fit Casual Shirt</a>
                    </h6>
                    <div class="product_price">#6100</div>
                  </div>
                </div>
              </div>
            </div>
            <!--Slide 13-->
            <div class="owl-item product_slider_item">
              <div class="product-item-bestseller women">
                <div class="product product_filter">
                  <div class="product_image">
                    <img src="images/accessories/accessories13.png" alt="" />
                  </div>
                  <div class="favorite"></div>
                  <div class="product_info">
                    <h6 class="product_name">
                      <a href="#">Men's Solid Slim Fit Casual Shirt</a>
                    </h6>
                    <div class="product_price">#5000</div>
                  </div>
                </div>
              </div>
            </div>
            <!--Slide 14-->
            <div class="owl-item product_slider_item">
              <div class="product-item-bestseller accessories">
                <div class="product discount product_filter">
                  <div class="product_image">
                    <img src="images/accessories/accessories14.png" alt="" />
                  </div>
                  <div class="favorite favorite_left"></div>
                  <div
                    class="
                      product_bubble
                      product_bubble_right
                      product_bubble_red
                      d_flex
                      flex-column
                      align-items-center
                    "
                  >
                    <span>Sale</span>
                  </div>
                  <div class="product_info">
                    <h6 class="product_name">
                      <a href="#">Men's Solid Slim Fit Casual Shirt</a>
                    </h6>
                    <div class="product_price">#4200</div>
                  </div>
                </div>
              </div>
            </div>

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
            <!--Slide 1-->
            <div class="owl-item product_slider_item">
              <div class="product-item-bestseller men">
                <div class="product discount product_filter">
                  <div class="product_image">
                    <img src="images/beauty_cosmetics/beauty1.png" alt="" />
                  </div>
                  <div class="favorite favorite_left"></div>
                  <div
                    class="
                      product_bubble
                      product_bubble_right
                      product_bubble_red
                      d_flex
                      flex-column
                      align-items-center
                    "
                  >
                    <span>-20%</span>
                  </div>
                  <div class="product_info">
                    <h6 class="product_name">
                      <a href="#">Men's Solid Slim Fit Casual Shirt</a>
                    </h6>
                    <div class="product_price">
                      #4000 <span>#5000</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--Slide 2-->
            <div class="owl-item product_slider_item">
              <div class="product-item-bestseller women">
                <div class="product product_filter">
                  <div class="product_image">
                    <img src="images/beauty_cosmetics/beauty2.png" alt="" />
                  </div>
                  <div class="favorite"></div>
                  <div
                    class="
                      product_bubble
                      product_bubble_left
                      product_bubble_green
                      d_flex
                      flex-column
                      align-items-center
                    "
                  >
                    <span>New</span>
                  </div>
                  <div class="product_info">
                    <h6 class="product_name">
                      <a href="#">Men's Solid Slim Fit Casual Shirt</a>
                    </h6>
                    <div class="product_price">#6100</div>
                  </div>
                </div>
              </div>
            </div>
            <!--Slide 3-->
            <div class="owl-item product_slider_item">
              <div class="product-item-bestseller women">
                <div class="product product_filter">
                  <div class="product_image">
                    <img src="images/beauty_cosmetics/beauty3.png" alt="" />
                  </div>
                  <div class="favorite"></div>
                  <div class="product_info">
                    <h6 class="product_name">
                      <a href="#">Men's Solid Slim Fit Casual Shirt</a>
                    </h6>
                    <div class="product_price">#5000</div>
                  </div>
                </div>
              </div>
            </div>
            <!--Slide 4-->
            <div class="owl-item product_slider_item">
              <div class="product-item-bestseller accessories">
                <div class="product discount product_filter">
                  <div class="product_image">
                    <img src="images/beauty_cosmetics/beauty4.png" alt="" />
                  </div>
                  <div class="favorite favorite_left"></div>
                  <div
                    class="
                      product_bubble
                      product_bubble_right
                      product_bubble_red
                      d_flex
                      flex-column
                      align-items-center
                    "
                  >
                    <span>Sale</span>
                  </div>
                  <div class="product_info">
                    <h6 class="product_name">
                      <a href="#">Men's Solid Slim Fit Casual Shirt</a>
                    </h6>
                    <div class="product_price">#4200</div>
                  </div>
                </div>
              </div>
            </div>
            <!--Slide 5-->
            <div class="owl-item product_slider_item">
              <div class="product-item-bestseller men">
                <div class="product product_filter">
                  <div class="product_image">
                    <img src="images/beauty_cosmetics/beauty5.png" alt="" />
                  </div>
                  <div class="favorite"></div>
                  <div class="product_info">
                    <h6 class="product_name">
                      <a href="#">Men's Solid Slim Fit Casual Shirt</a>
                    </h6>
                    <div class="product_price">#8000</div>
                  </div>
                </div>
              </div>
            </div>
            <!--Slide 6-->
            <div class="owl-item product_slider_item">
              <div class="product-item-bestseller accessories">
                <div class="product discount product_filter">
                  <div class="product_image">
                    <img src="images/beauty_cosmetics/beauty6.png" alt="" />
                  </div>
                  <div class="favorite favorite_left"></div>
                  <div
                    class="
                      product_bubble
                      product_bubble_right
                      product_bubble_red
                      d_flex
                      flex-column
                      align-items-center
                    "
                  >
                    <span>-%20</span>
                  </div>
                  <div class="product_info">
                    <h6 class="product_name">
                      <a href="#">Men's Solid Slim Fit Casual Shirt</a>
                    </h6>
                    <div class="product_price">
                      #4000 <span>#5000</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--Slide 7-->
            <div class="owl-item product_slider_item">
              <div class="product-item-bestseller women">
                <div class="product product_filter">
                  <div class="product_image">
                    <img src="images/beauty_cosmetics/beauty7.png" alt="" />
                  </div>
                  <div class="favorite"></div>
                  <div class="product_info">
                    <h6 class="product_name">
                      <a href="#">Men's Solid Slim Fit Casual Shirt</a>
                    </h6>
                    <div class="product_price">#6100</div>
                  </div>
                </div>
              </div>
            </div>
            <!--Slide 8-->
            <div class="owl-item product_slider_item">
              <div class="product-item-bestseller accessories">
                <div class="product product_filter">
                  <div class="product_image">
                    <img src="images/beauty_cosmetics/beauty8.png" alt="" />
                  </div>
                  <div class="favorite favorite_left"></div>
                  <div
                    class="
                      product_bubble
                      product_bubble_right
                      product_bubble_red
                      d_flex
                      flex-column
                      align-items-center
                    "
                  >
                    <span>-%20</span>
                  </div>
                  <div class="product_info">
                    <h6 class="product_name">
                      <a href="#">Men's Solid Slim Fit Casual Shirt</a>
                    </h6>
                    <div class="product_price">
                      #4000 <span>#5000</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--Slide 9-->
            <div class="owl-item product_slider_item">
              <div class="product-item-bestseller men">
                <div class="product product_filter">
                  <div class="product_image">
                    <img src="images/beauty_cosmetics/beauty9.png" alt="" />
                  </div>
                  <div class="favorite favorite_left"></div>
                  <div
                    class="
                      product_bubble
                      product_bubble_right
                      product_bubble_red
                      d_flex
                      flex-column
                      align-items-center
                    "
                  >
                    <span>Sale</span>
                  </div>
                  <div class="product_info">
                    <h6 class="product_name">
                      <a href="#">Men's Solid Slim Fit Casual Shirt</a>
                    </h6>
                    <div class="product_price">#4100</div>
                  </div>
                </div>
              </div>
            </div>
            <!--Slide 10-->
            <div class="owl-item product_slider_item">
              <div class="product-item-bestseller women">
                <div class="product product_filter">
                  <div class="product_image">
                    <img src="images/beauty_cosmetics/beauty10.png" alt="" />
                  </div>
                  <div class="favorite"></div>
                  <div class="product_info">
                    <h6 class="product_name">
                      <a href="#">Men's Solid Slim Fit Casual Shirt</a>
                    </h6>
                    <div class="product_price">#5200</div>
                  </div>
                </div>
              </div>
            </div>
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
            <!--Slide 1-->
            <div class="owl-item product_slider_item">
              <div class="product-item-bestseller men">
                <div class="product discount product_filter">
                  <div class="product_image">
                    <img src="images/home_utensils/home1.png" alt="" />
                  </div>
                  <div class="favorite favorite_left"></div>
                  <div
                    class="
                      product_bubble
                      product_bubble_right
                      product_bubble_red
                      d_flex
                      flex-column
                      align-items-center
                    "
                  >
                    <span>-20%</span>
                  </div>
                  <div class="product_info">
                    <h6 class="product_name">
                      <a href="#">Men's Solid Slim Fit Casual Shirt</a>
                    </h6>
                    <div class="product_price">
                      #4000 <span>#5000</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--Slide 2-->
            <div class="owl-item product_slider_item">
              <div class="product-item-bestseller women">
                <div class="product product_filter">
                  <div class="product_image">
                    <img src="images/home_utensils/home2.png" alt="" />
                  </div>
                  <div class="favorite"></div>
                  <div
                    class="
                      product_bubble
                      product_bubble_left
                      product_bubble_green
                      d_flex
                      flex-column
                      align-items-center
                    "
                  >
                    <span>New</span>
                  </div>
                  <div class="product_info">
                    <h6 class="product_name">
                      <a href="#">Men's Solid Slim Fit Casual Shirt</a>
                    </h6>
                    <div class="product_price">#6100</div>
                  </div>
                </div>
              </div>
            </div>
            <!--Slide 3-->
            <div class="owl-item product_slider_item">
              <div class="product-item-bestseller women">
                <div class="product product_filter">
                  <div class="product_image">
                    <img src="images/home_utensils/home3.png" alt="" />
                  </div>
                  <div class="favorite"></div>
                  <div class="product_info">
                    <h6 class="product_name">
                      <a href="#">Men's Solid Slim Fit Casual Shirt</a>
                    </h6>
                    <div class="product_price">#5000</div>
                  </div>
                </div>
              </div>
            </div>
            <!--Slide 4-->
            <div class="owl-item product_slider_item">
              <div class="product-item-bestseller accessories">
                <div class="product discount product_filter">
                  <div class="product_image">
                    <img src="images/home_utensils/home4.png" alt="" />
                  </div>
                  <div class="favorite favorite_left"></div>
                  <div
                    class="
                      product_bubble
                      product_bubble_right
                      product_bubble_red
                      d_flex
                      flex-column
                      align-items-center
                    "
                  >
                    <span>Sale</span>
                  </div>
                  <div class="product_info">
                    <h6 class="product_name">
                      <a href="#">Men's Solid Slim Fit Casual Shirt</a>
                    </h6>
                    <div class="product_price">#4200</div>
                  </div>
                </div>
              </div>
            </div>
            <!--Slide 5-->
            <div class="owl-item product_slider_item">
              <div class="product-item-bestseller men">
                <div class="product product_filter">
                  <div class="product_image">
                    <img src="images/home_utensils/home5.png" alt="" />
                  </div>
                  <div class="favorite"></div>
                  <div class="product_info">
                    <h6 class="product_name">
                      <a href="#">Men's Solid Slim Fit Casual Shirt</a>
                    </h6>
                    <div class="product_price">#8000</div>
                  </div>
                </div>
              </div>
            </div>
            <!--Slide 6-->
            <div class="owl-item product_slider_item">
              <div class="product-item-bestseller accessories">
                <div class="product discount product_filter">
                  <div class="product_image">
                    <img src="images/home_utensils/home6.png" alt="" />
                  </div>
                  <div class="favorite favorite_left"></div>
                  <div
                    class="
                      product_bubble
                      product_bubble_right
                      product_bubble_red
                      d_flex
                      flex-column
                      align-items-center
                    "
                  >
                    <span>-%20</span>
                  </div>
                  <div class="product_info">
                    <h6 class="product_name">
                      <a href="#">Men's Solid Slim Fit Casual Shirt</a>
                    </h6>
                    <div class="product_price">
                      #4000 <span>#5000</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--Slide 7-->
            <div class="owl-item product_slider_item">
              <div class="product-item-bestseller women">
                <div class="product product_filter">
                  <div class="product_image">
                    <img src="images/home_utensils/home7.png" alt="" />
                  </div>
                  <div class="favorite"></div>
                  <div class="product_info">
                    <h6 class="product_name">
                      <a href="#">Men's Solid Slim Fit Casual Shirt</a>
                    </h6>
                    <div class="product_price">#6100</div>
                  </div>
                </div>
              </div>
            </div>
            <!--Slide 8-->
            <div class="owl-item product_slider_item">
              <div class="product-item-bestseller accessories">
                <div class="product product_filter">
                  <div class="product_image">
                    <img src="images/home_utensils/home8.png" alt="" />
                  </div>
                  <div class="favorite favorite_left"></div>
                  <div
                    class="
                      product_bubble
                      product_bubble_right
                      product_bubble_red
                      d_flex
                      flex-column
                      align-items-center
                    "
                  >
                    <span>-%20</span>
                  </div>
                  <div class="product_info">
                    <h6 class="product_name">
                      <a href="#">Men's Solid Slim Fit Casual Shirt</a>
                    </h6>
                    <div class="product_price">
                      #4000 <span>#5000</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--Slide 9-->
            <div class="owl-item product_slider_item">
              <div class="product-item-bestseller men">
                <div class="product product_filter">
                  <div class="product_image">
                    <img src="images/home_utensils/home9.png" alt="" />
                  </div>
                  <div class="favorite favorite_left"></div>
                  <div
                    class="
                      product_bubble
                      product_bubble_right
                      product_bubble_red
                      d_flex
                      flex-column
                      align-items-center
                    "
                  >
                    <span>Sale</span>
                  </div>
                  <div class="product_info">
                    <h6 class="product_name">
                      <a href="#">Men's Solid Slim Fit Casual Shirt</a>
                    </h6>
                    <div class="product_price">#4100</div>
                  </div>
                </div>
              </div>
            </div>
            <!--Slide 10-->
            <div class="owl-item product_slider_item">
              <div class="product-item-bestseller women">
                <div class="product product_filter">
                  <div class="product_image">
                    <img src="images/home_utensils/home10.png" alt="" />
                  </div>
                  <div class="favorite"></div>
                  <div class="product_info">
                    <h6 class="product_name">
                      <a href="#">Men's Solid Slim Fit Casual Shirt</a>
                    </h6>
                    <div class="product_price">#5200</div>
                  </div>
                </div>
              </div>
            </div>
             <!--Slide 11-->
             <div class="owl-item product_slider_item">
              <div class="product-item-bestseller men">
                <div class="product discount product_filter">
                  <div class="product_image">
                    <img src="images/home_utensils/home11.png" alt="" />
                  </div>
                  <div class="favorite favorite_left"></div>
                  <div
                    class="
                      product_bubble
                      product_bubble_right
                      product_bubble_red
                      d_flex
                      flex-column
                      align-items-center
                    "
                  >
                    <span>-20%</span>
                  </div>
                  <div class="product_info">
                    <h6 class="product_name">
                      <a href="#">Men's Solid Slim Fit Casual Shirt</a>
                    </h6>
                    <div class="product_price">
                      #4000 <span>#5000</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--Slide 12-->
            <div class="owl-item product_slider_item">
              <div class="product-item-bestseller women">
                <div class="product product_filter">
                  <div class="product_image">
                    <img src="images/home_utensils/home12.png" alt="" />
                  </div>
                  <div class="favorite"></div>
                  <div
                    class="
                      product_bubble
                      product_bubble_left
                      product_bubble_green
                      d_flex
                      flex-column
                      align-items-center
                    "
                  >
                    <span>New</span>
                  </div>
                  <div class="product_info">
                    <h6 class="product_name">
                      <a href="#">Men's Solid Slim Fit Casual Shirt</a>
                    </h6>
                    <div class="product_price">#6100</div>
                  </div>
                </div>
              </div>
            </div>
            <!--Slide 13-->
            <div class="owl-item product_slider_item">
              <div class="product-item-bestseller women">
                <div class="product product_filter">
                  <div class="product_image">
                    <img src="images/home_utensils/home13.png" alt="" />
                  </div>
                  <div class="favorite"></div>
                  <div class="product_info">
                    <h6 class="product_name">
                      <a href="#">Men's Solid Slim Fit Casual Shirt</a>
                    </h6>
                    <div class="product_price">#5000</div>
                  </div>
                </div>
              </div>
            </div>
            <!--Slide 14-->
            <div class="owl-item product_slider_item">
              <div class="product-item-bestseller accessories">
                <div class="product discount product_filter">
                  <div class="product_image">
                    <img src="images/home_utensils/home14.png" alt="" />
                  </div>
                  <div class="favorite favorite_left"></div>
                  <div
                    class="
                      product_bubble
                      product_bubble_right
                      product_bubble_red
                      d_flex
                      flex-column
                      align-items-center
                    "
                  >
                    <span>Sale</span>
                  </div>
                  <div class="product_info">
                    <h6 class="product_name">
                      <a href="#">Men's Solid Slim Fit Casual Shirt</a>
                    </h6>
                    <div class="product_price">#4200</div>
                  </div>
                </div>
              </div>
            </div>
            <!--Slide 15-->
            <div class="owl-item product_slider_item">
              <div class="product-item-bestseller men">
                <div class="product product_filter">
                  <div class="product_image">
                    <img src="images/home_utensils/home15.png" alt="" />
                  </div>
                  <div class="favorite"></div>
                  <div class="product_info">
                    <h6 class="product_name">
                      <a href="#">Men's Solid Slim Fit Casual Shirt</a>
                    </h6>
                    <div class="product_price">#8000</div>
                  </div>
                </div>
              </div>
            </div>
            <!--Slide 16-->
            <div class="owl-item product_slider_item">
              <div class="product-item-bestseller accessories">
                <div class="product discount product_filter">
                  <div class="product_image">
                    <img src="images/home_utensils/home16.png" alt="" />
                  </div>
                  <div class="favorite favorite_left"></div>
                  <div
                    class="
                      product_bubble
                      product_bubble_right
                      product_bubble_red
                      d_flex
                      flex-column
                      align-items-center
                    "
                  >
                    <span>-%20</span>
                  </div>
                  <div class="product_info">
                    <h6 class="product_name">
                      <a href="#">Men's Solid Slim Fit Casual Shirt</a>
                    </h6>
                    <div class="product_price">
                      #4000 <span>#5000</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--Slide 17-->
            <div class="owl-item product_slider_item">
              <div class="product-item-bestseller women">
                <div class="product product_filter">
                  <div class="product_image">
                    <img src="images/home_utensils/home17.png" alt="" />
                  </div>
                  <div class="favorite"></div>
                  <div class="product_info">
                    <h6 class="product_name">
                      <a href="#">Men's Solid Slim Fit Casual Shirt</a>
                    </h6>
                    <div class="product_price">#6100</div>
                  </div>
                </div>
              </div>
            </div>
            <!--Slide 18-->
            <div class="owl-item product_slider_item">
              <div class="product-item-bestseller accessories">
                <div class="product product_filter">
                  <div class="product_image">
                    <img src="images/home_utensils/home18.png" alt="" />
                  </div>
                  <div class="favorite favorite_left"></div>
                  <div
                    class="
                      product_bubble
                      product_bubble_right
                      product_bubble_red
                      d_flex
                      flex-column
                      align-items-center
                    "
                  >
                    <span>-%20</span>
                  </div>
                  <div class="product_info">
                    <h6 class="product_name">
                      <a href="#">Men's Solid Slim Fit Casual Shirt</a>
                    </h6>
                    <div class="product_price">
                      #4000 <span>#5000</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

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
