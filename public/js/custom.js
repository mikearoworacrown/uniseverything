/*******************************Init Isotope FIltering**************************/
jQuery(document).ready(function($){
    "user strict";
    
    initFavorite();
    initIsotopeFiltering();
    initSlider();
    initSlider2();
    initSlider3();
    initSlider4();
    initSlider5();
    initQuantity();
    initFavs();



    function initIsotopeFiltering(){
        if($(".grid_sorting_button").length){
            $(".grid_sorting_button").click(function(){
                $(".grid_sorting_button.active").removeClass('active');
                $(this).addClass('active');

                var selector = $(this).attr('data-filter');
                $('.product-grid').isotope({
                    filter: selector,
                    animationOptions: {
                        duration: 750,
                        easing: 'linear',
                        queue: false
                    }
                });
                return false;
            });

        }
    }

    /***********************Init Favorite****************************/
    function initFavorite(){
        if($(".favorite").length){
            var favs = $(".favorite");

            favs.each(function(){
                var fav = $(this);
                var active = false;
                if(fav.hasClass('active')){
                    active = true;
                }
                fav.on('click', function(){
                    if(active){
                        fav.removeClass('active');
                        active = false;
                    }else{
                        fav.addClass('active');
                        active = true;
                    }
                })
            });
        }
    }


    function initFavs()
	{
		// Handle Favorites
		var fav = $('.product_fav');
		fav.on('click', function()
		{
			fav.toggleClass('active');
		});
	}



/****************************Init Slider(0wlcarousel)***********************************/
function initSlider(){
    if($('.product_slider').length){
        var slider1 = $('.product_slider');

        slider1.owlCarousel({
            loop:false,
            dots:false,
            nav:false,
            responsive:
            {
                0:{items: 2},
                480:{items: 3},
                768:{items: 4},
                991:{items: 5},
                1200:{items: 6},
                1400:{items: 6},
            }
        });
        if($('.product_slider_nav_left').length){
            $('.product_slider_nav_left').on('click', function(){
                slider1.trigger('prev.owl.carousel');
            });
        }
        if($('.product_slider_nav_right').length){
            $('.product_slider_nav_right').on('click', function(){
                slider1.trigger('next.owl.carousel');
            });
        }
    }
}

function initSlider2(){
    if($('.product_slider2').length){
        var slider2 = $('.product_slider2');

        slider2.owlCarousel({
            loop:false,
            dots:false,
            nav:false,
            responsive:
            {
                0:{items: 2},
                480:{items: 3},
                768:{items: 4},
                991:{items: 5},
                1200:{items: 6},
                1400:{items: 6},
            }
        });
        if($('.product_slider_nav_left2').length){
            $('.product_slider_nav_left2').on('click', function(){
                slider2.trigger('prev.owl.carousel');
            });
        }
        if($('.product_slider_nav_right2').length){
            $('.product_slider_nav_right2').on('click', function(){
                slider2.trigger('next.owl.carousel');
            });
        }
    }
}

function initSlider3(){
    if($('.product_slider3').length){
        var slider3 = $('.product_slider3');

        slider3.owlCarousel({
            loop:false,
            dots:false,
            nav:false,
            responsive:
            {
                0:{items: 2},
                480:{items: 3},
                768:{items: 4},
                991:{items: 5},
                1200:{items: 6},
                1400:{items: 6},
            }
        });
        if($('.product_slider_nav_left3').length){
            $('.product_slider_nav_left3').on('click', function(){
                slider3.trigger('prev.owl.carousel');
            });
        }
        if($('.product_slider_nav_right3').length){
            $('.product_slider_nav_right3').on('click', function(){
                slider3.trigger('next.owl.carousel');
            });
        }
    }
}

function initSlider4(){
    if($('.product_slider4').length){
        var slider4 = $('.product_slider4');

        slider4.owlCarousel({
            loop:false,
            dots:false,
            nav:false,
            responsive:
            {
                0:{items: 2},
                480:{items: 3},
                768:{items: 4},
                991:{items: 5},
                1200:{items: 6},
                1400:{items: 6},
            }
        });
        if($('.product_slider_nav_left4').length){
            $('.product_slider_nav_left4').on('click', function(){
                slider4.trigger('prev.owl.carousel');
            });
        }
        if($('.product_slider_nav_right4').length){
            $('.product_slider_nav_right4').on('click', function(){
                slider4.trigger('next.owl.carousel');
            });
        }
    }
}
function initSlider5(){
    if($('.product_slider5').length){
        var slider5 = $('.product_slider5');

        slider5.owlCarousel({
            loop:false,
            dots:false,
            nav:false,
            responsive:
            {
                0:{items: 2},
                480:{items: 3},
                768:{items: 4},
                991:{items: 5},
                1200:{items: 6},
                1400:{items: 6},
            }
        });
        if($('.product_slider_nav_left5').length){
            $('.product_slider_nav_left5').on('click', function(){
                slider5.trigger('prev.owl.carousel');
            });
        }
        if($('.product_slider_nav_right5').length){
            $('.product_slider_nav_right5').on('click', function(){
                slider5.trigger('next.owl.carousel');
            });
        }
    }
}

/* 

	Init Quantity

	*/

	function initQuantity()
	{
		// Handle product quantity input
		if($('.product_quantity').length)
		{
			var input = $('#quantity_input');
			var incButton = $('#quantity_inc_button');
			var decButton = $('#quantity_dec_button');

			var originalVal;
			var endVal;

			incButton.on('click', function()
			{
				originalVal = input.val();
				endVal = parseFloat(originalVal) + 1;
				input.val(endVal);
			});

			decButton.on('click', function()
			{
				originalVal = input.val();
				if(originalVal > 1)
				{
					endVal = parseFloat(originalVal) - 1;
					input.val(endVal);
				}
			});
		}
	}
});

$(function(){
    getCart();

    $('#productForm').submit(function(e){
        e.preventDefault();
        var product = $(this).serialize();
        console.log('clicked');
        $.ajax({
            type: 'POST',
            url: 'cart_add.php',
            data: product,
            dataType: 'json',
            success: function(response){
                $('#callout').show();
                $('.message').html(response.message);
                if(response.error){
                    $('#callout').removeClass('callout-success').addClass('callout-danger');
                }
                else{
                  $('#callout').removeClass('callout-danger').addClass('callout-success');
                  getCart();
                }
            }
        });
    });
    $(document).on('click', '.close', function(){
        $('#callout').hide();
    });

});

function getCart(){
	$.ajax({
		type: 'POST',
		url: 'cart_fetch.php',
		dataType: 'json',
		success: function(response){
			$('.cart_count').html(response.count);
		}
	});
}