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

    signupValidation();


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
});


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


/*******************Signup Validation****************/
function signupValidation() {
	var valid = true;

	$("#username").removeClass("error-field");
	$("#email").removeClass("error-field");
	$("#password").removeClass("error-field");
	$("#confirm-password").removeClass("error-field");

	var UserName = $("#username").val();
	var email = $("#email").val();
	var Password = $('#signup-password').val();
    var ConfirmPassword = $('#confirm-password').val();
	var emailRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;

	$("#username-info").html("").hide();
	$("#email-info").html("").hide();

	if (UserName.trim() == "") {
		$("#username-info").html("required.").css("color", "#ee0000").show();
		$("#username").addClass("error-field");
		valid = false;
	}
	if (email == "") {
		$("#email-info").html("required").css("color", "#ee0000").show();
		$("#email").addClass("error-field");
		valid = false;
	} else if (email.trim() == "") {
		$("#email-info").html("Invalid email address.").css("color", "#ee0000").show();
		$("#email").addClass("error-field");
		valid = false;
	} else if (!emailRegex.test(email)) {
		$("#email-info").html("Invalid email address.").css("color", "#ee0000")
				.show();
		$("#email").addClass("error-field");
		valid = false;
	}
	if (Password.trim() == "") {
		$("#signup-password-info").html("required.").css("color", "#ee0000").show();
		$("#signup-password").addClass("error-field");
		valid = false;
	}
	if (ConfirmPassword.trim() == "") {
		$("#confirm-password-info").html("required.").css("color", "#ee0000").show();
		$("#confirm-password").addClass("error-field");
		valid = false;
	}
	if(Password != ConfirmPassword){
        $("#error-msg").html("Both passwords must be same.").show();
        valid=false;
    }
	if (valid == false) {
		$('.error-field').first().focus();
		valid = false;
	}
	return valid;
}