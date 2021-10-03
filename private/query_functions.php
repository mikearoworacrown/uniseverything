<?php
    /***************************** Slider ********************************/

    function slides_indicators(){
        global $pdo;
        $output = '';
        $count = 0;

        $conn = $pdo->open();
        try{
            $stmt = $conn->prepare("SELECT * FROM slides ORDER BY id ASC");
            $stmt->execute();
            foreach($stmt as $row){
                if($count == 0){
                    $output .= '<li data-target="#featured" data-slide-to="'.$count.'" class="active"></li>';
                }else{
                    $output .= '<li data-target="#featured" data-slide-to="'.$count.'"></li>';
                }
                $count = $count + 1;
            }
            return $output;
        }catch(PDOException $e){
            echo $e->getMessage();
        }

        $pdo->close();
    }

    function slides(){
        global $pdo;
        $output = '';
        $count = 0;

        $conn = $pdo->open();
        try{
            $stmt = $conn->prepare("SELECT * FROM slides ORDER BY id ASC");
            $stmt->execute();
            foreach($stmt as $row){
                if($count == 0){
                    $output .= '<div class="carousel-item active">';
                }else{
                    $output .= '<div class="carousel-item">';
                }
                $image = url_for('/images/slides/') . $row['photo'];
               
                $output .= '<img class="d-block w-100" src="'. $image .'" alt="">
                            </div>';
                $count = $count + 1;
            }
            return $output;
        }catch(PDOException $e){
            echo $e->getMessage();
        }
        $pdo->close();

    }



    /*******************************************New Arrival Sieving******************************************************/
    function isotope_list(){
        global $pdo;
        $output = '';

        $conn = $pdo->open();
        try{
            $stmt = $conn->prepare("SELECT * FROM category");
            $stmt->execute();
            $result = $stmt->fetchAll();
            echo '<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter="*">
                            all
                        </li>';
            foreach($result as $row){
                $cat_slug = $row['cat_slug'];
                $isotope = substr($cat_slug, strpos($cat_slug, "_") + 1);                
                echo '<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter=".'.$isotope.'">
                            '. $isotope .'
                        </li>
                ';
            }
        }catch(PDOException $e){
            echo "There is some problem in connection: " . $e->getMessage();
        }

        $pdo->close();
    }



    /**************Product listing********************/
    function isotope_product(){
        global $pdo;
        $count = 0;

        $conn = $pdo->open();
        try{
            $stmt = $conn->prepare("SELECT * FROM products");
            $stmt->execute();
            $result = $stmt->fetchAll();

            foreach($result as $row){
                if($row['new_arrival'] && $count < 30){
                    $stmt = $conn->prepare("SELECT * FROM category");
                    $stmt->execute();
                    $result_cat = $stmt->fetchAll();
                    
                    foreach($result_cat as $row_cat){
                        if($row_cat['id'] == $row['category_id']){
                            $folder = $row_cat['cat_slug'];
                            $image = (!empty($row['photo'])) ? url_for('/images') . '/' . $folder . '/' .$row['photo'] : url_for('/images/noimage.jpg');
                            $cat_slug = $row_cat['cat_slug'];
                            $isotope = substr($cat_slug, strpos($cat_slug, "_") + 1); 
                            echo '<div class="product-item '. $isotope .'"><a href="product.php?product='.$row['product_slug'].'&i='.$row['id'].'">
                                    <div class="product discount product_filter">';
                                    echo'
                                        <div class="product_image">
                                            <img src="' . $image . '" alt="" />
                                        </div>
                                        <div class="product_bubble product_bubble_right product_bubble_red d_flex flex-column align-items-center">
                                        <span>-20%</span>
                                        </div>
                                        <div class="product_info">
                                            <h6 class="product_name">
                                                <a href="product.php?product='.$row['product_slug'].'&i='.$row['id'].'">'. $row['name'] .'</a>
                                            </h6>
                                            <div class="product_price">
                                                #'. $row['price'] . ' ';
    
                                                if($row['discount'] != 0){ echo '<span>' . $row['discount'] . '</span>'; }
                                            
                                    echo'   </div>
                                        </div>
                                    ';
                                echo'</div> 
                                </a></div>
                                ';
                        }
                    }

                    ++$count;
                }
            }
        }catch(PDOException $e){
            echo "There is some problem in connection: " . $e->getMessage();
        }

    }
    /*****************************************************Product Category Slide**********************************************************************/

    function product_category_slide($cat_slug){
        global $pdo;
        $output = '';  
        $isotope = substr($cat_slug, strpos($cat_slug, "_") + 1);    


        $conn = $pdo->open();
        try{
            $stmt = $conn->prepare("SELECT * FROM category WHERE cat_slug = :cat_slug");
            $stmt->execute(['cat_slug' => $cat_slug]);
            $row = $stmt->fetch();
            $catid = $row['id'];
            $folder = $row['cat_slug'];

            try{	
                $stmt = $conn->prepare("SELECT * FROM products WHERE category_id = :catid");
                $stmt->execute(['catid' => $catid]);
                foreach ($stmt as $row) {
                    $image = (!empty($row['photo'])) ? url_for('/images') . '/' . $folder . '/' .$row['photo'] : url_for('/images/noimage.jpg');
                    echo '<div class="owl-item product_slider_item">
                            <div class="product-item-bestseller "'. $isotope . '"><a href="product.php?product='.$row['product_slug'].'&i='.$row['id'].'">
                                <div class="product discount product_filter">';
                                echo '<div class="product_image">
                                        <img src="' . $image . '" alt="" />
                                      </div>
                                      <div class="product_bubble product_bubble_right product_bubble_red d_flex flex-column align-items-center">
                                        <span>-20%</span>
                                      </div>
                                      <div class="product_info">
                                        <h6 class="product_name">
                                        <a href="product.php?product='.$row['product_slug'].'&i='.$row['id'].'">'. $row['name'] .'</a>
                                        </h6>
                                        <div class="product_price">
                                        #'. $row['price'] . ' ';

                                        if($row['discount'] != 0){ echo '<span>' . $row['discount'] . '</span>'; }
                                        
                                echo'   </div>
                                    </div>
                                ';

                    echo        '</div> </a>
                            </div>
                        </div>';
                }
            }catch(PDOException $e){
            echo "There is some problem in connection: " . $e->getMessage();
            }
        }catch(PDOException $e){
            echo "There is some problem in connection: " . $e->getMessage();
        }

        $pdo->close();
    }

    /************************PRODUCT CATEGORY(category.php)*******************************/
    function product_category($cat_slug){
        global $pdo;

        $conn = $pdo->open();
        try{
            $stmt = $conn->prepare("SELECT * FROM category WHERE cat_slug = :cat_slug");
            $stmt->execute(['cat_slug' => $cat_slug]);
            $row_cat = $stmt->fetch();
            $catid = $row_cat['id'];

            try{
                $stmt = $conn->prepare("SELECT * FROM products WHERE category_id = :catid");
                $stmt->execute(['catid' => $catid]);
                $result = $stmt->fetchAll();

                foreach($result as $row){
                    $folder = $cat_slug;
                    $image = (!empty($row['photo'])) ? url_for('/images') . '/' . $folder . '/' .$row['photo'] : url_for('/images/noimage.jpg');
                    echo '<div class="product-item"><a href="product.php?product='.$row['product_slug'].'&i='.$row['id'].'">
                            <div class="product discount product_filter">';
                            echo'
                                <div class="product_image">
                                    <img src="' . $image . '" alt="" />
                                </div>
                                <div class="product_bubble product_bubble_right product_bubble_red d_flex flex-column align-items-center">
                                <span>-20%</span>
                                </div>
                                <div class="product_info">
                                    <h6 class="product_name">
                                        <a href="product.php?product='.$row['product_slug'].'&i='.$row['id'].'">'. $row['name'] .'</a>
                                    </h6>
                                    <div class="product_price">
                                        #'. $row['price'] . ' ';

                                        if($row['discount'] != 0){ echo '<span>' . $row['discount'] . '</span>'; }
                                    
                            echo'   </div>
                                </div>
                            ';
                        echo'</div> 
                        </a></div>';
                }
            }catch(PDOException $e){
                echo "There is some problem in connection: " . $e->getMessage();
            }
        }
        catch(PDOException $e){
            echo "There is some problem in connection: " . $e->getMessage();
        }
        $pdo->close();
    }

    

    /*********************product.php***********************/
    function single_product($product_slug_id){
        global $pdo;

        $conn = $pdo->open();

        try{ 		
            $stmt = $conn->prepare("SELECT *, products.name AS prodname, category.name AS catname, category.cat_slug AS catslug, products.id AS prodid FROM products LEFT JOIN category ON category.id=products.category_id WHERE products.id = :product_slug_id");
            $stmt->execute(['product_slug_id' => $product_slug_id]);
            $row = $stmt->fetch();

            $folder = $row['catslug'];
            $image = (!empty($row['photo'])) ? url_for('/images') . '/' . $folder . '/' .$row['photo'] : url_for('/images/noimage.jpg');

        
            echo    '<div class="col-lg-5 order-lg-2 order-1">
                        <div class="image_selected"><img src="'. $image .'" alt=""></div>
                    </div>';

            echo '	<div class="col-lg-5 order-3">
                        <div class="product_description">
                            <div class="product_category">'. $row['catname'] .'</div>
                            <div class="product_name">'.$row['prodname'] .'</div>
                            <div class="product_text"><p>'. $row['description'].'</p></div>
                            
                            <div class="order_info d-flex flex-row">
                                <form id="productForm">
                                    <div class="clearfix" style="z-index: 1000;">

                                        <!-- Product Quantity -->
                                        <div class="product_quantity clearfix">
                                            <span>Quantity: </span>
                                            <input id="quantity_input" name="quantity" type="text" pattern="[0-9]*" value="1">
                                            <div class="quantity_buttons">
                                                <div id="quantity_inc_button" class="quantity_inc quantity_control"><i class="fas fa-chevron-up"></i></div>
                                                <div id="quantity_dec_button" class="quantity_dec quantity_control"><i class="fas fa-chevron-down"></i></div>
                                            </div>
                                            <input type="hidden" value="' . $row['prodid'] . '" name="id">
                                        </div>

                                    </div>
              
                                    <div class="single_product_price">$2000</div>
                                    <div class="button_container">
                                        <button type="submit" class="button cart_button">Add to Cart</button>
                                        <div class="product_fav"><i class="fas fa-heart"></i></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>';
            
        }
        catch(PDOException $e){
            echo "There is some problem in connection: " . $e->getMessage();
        }


    }

?>

                    
                 
                  

						
						
		

							