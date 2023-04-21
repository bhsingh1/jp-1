


 /* ==============================================
Home Super Slider (images)
=============================================== */
 $('#slides').superslides({
      animation: 'fade'
    });
	
/* ==============================================
Flex Slider Home Main
=============================================== */	
	
 $(window).load(function(){
	 
	
	 
	/*  last_modified=document.lastModified;
	 alert(last_modified); */
	 
	 $('form').attr('autocomplete', 'off');
 
	  'use strict';
		
      $('.flexslider').flexslider({
        animation: "slide",
		selector: ".home-slides > li",
		controlNav: true,
		directionNav: false ,
		direction: "vertical",
        start: function(slider){
          $('body').removeClass('loading'); 
        }
      });
 });
	

/* ==============================================
Flex Slider Blog
=============================================== */	
	
 $(window).load(function(){
 
	  'use strict';
		
      $('.post-slide').flexslider({
        animation: "fade",
		selector: ".post-slides > .item",
		controlNav: false,
		directionNav: true ,
		direction: "vertical",
        start: function(slider){
          $('body').removeClass('loading'); 
        }
      });
 });


/* ==============================================
Drop Down Menu Fade Effect
=============================================== */	

$('.nav-toggle').hover(function() {
    $(this).find('.dropdown-menu').first().stop(true, true).fadeIn(400);
    }, function() {
    $(this).find('.dropdown-menu').first().stop(true, true).fadeOut(400)
    });

/* ==============================================
Drop Down Menu For Mobile
=============================================== */	

$('.mobile-toggle').hover(function() {
    $(this).find('.dr-mobile').first().stop(true, true).slideToggle(400);
    }, function() {
    $(this).find('.dr-mobile').first().stop(true, true).slideToggle(400)
    });

 /* ==============================================
Flex Slider Testimonials
=============================================== */	
	
 $(window).load(function(){
 
	  'use strict';
		
      $('.testimonial').flexslider({
        animation: "fade",
		selector: ".testimonials .monial",
		controlNav: false,
		directionNav: true ,
		slideshowSpeed: 7000,  
		direction: "horizontal",
        start: function(slider){
          $('body').removeClass('loading'); 
        }
      });
 });
	
/* ==============================================
Pretty Photo
=============================================== */	
	
	jQuery(document).ready(function(){
		
		
		$('.footer-links').click(function(e) {
		e.preventDefault();
	});
    jQuery("a[data-rel^='prettyPhoto']").prettyPhoto({
        theme: "light_square",
    });
  });

$('#jeevan_mail').attr('href','mailto:jeevanpramaan@gov.in');
$('#footer_jeevan_mail').attr('href','mailto:jeevanpramaan@gov.in');
$('#footer_jeevan_mail').text('jeevanpramaan@gov.in');
/* ==============================================
Scroll Navigation
=============================================== */	

$(function() {
		$('.scroll').bind('click', function(event) {
			var $anchor = $(this);
			var headerH = $('#navigation').outerHeight();
			$('html, body').stop().animate({
				scrollTop : $($anchor.attr('href')).offset().top - headerH + "px"
			}, 1200, 'easeInOutExpo');

			event.preventDefault();
		});
	});

/* ==============================================
Our Works / isotope Scripts
===============================================	*/

    $(function(){
      
      var $container = $('.items');

      $container.isotope({
        itemSelector : '.work'
      });
      
      
      var $optionSets = $('#options .option-set'),
          $optionLinks = $optionSets.find('a');

      $optionLinks.click(function(){
        var $this = $(this);
        // don't proceed if already selected
        if ( $this.hasClass('selected') ) {
          return false;
        }
        var $optionSet = $this.parents('.option-set');
        $optionSet.find('.selected').removeClass('selected');
        $this.addClass('selected');
  
        // make option object dynamically, i.e. { filter: '.my-filter-class' }
        var options = {},
            key = $optionSet.attr('data-option-key'),
            value = $this.attr('data-option-value');
        // parse 'false' as false boolean
        value = value === 'false' ? false : value;
        options[ key ] = value;
        if ( key === 'layoutMode' && typeof changeLayoutMode === 'function' ) {
          // changes in layout modes need extra logic
          changeLayoutMode( $this, options )
        } else {
          // otherwise, apply new options
          $container.isotope( options );
        }
        
        return false;
      });

      
    });
  
 /* ==============================================
Page Loader
=============================================== */

'use strict';

$(window).load(function() {
	$(".loader-item").delay(700).fadeOut();
	$("#pageloader").delay(1200).fadeOut("slow");
});

/* ==============================================
Parallax Calling
=============================================== */


( function ( $ ) {
'use strict';
$(document).ready(function(){
$(window).bind('load', function () {
		parallaxInit();						  
	});
	function parallaxInit() {
		testMobile = isMobile.any();
		if (testMobile == null)
		{
			$('.image1').parallax("50%", 0.5);
			$('.image2').parallax("50%", 0.5);
			$('.image3').parallax("50%", 0.5);
			$('.image4').parallax("50%", 0.5);
			$('.parallax').parallax("50%", 0.5);
			$('.parallax1').parallax("50%", 0.5);
			$('.parallax2').parallax("50%", 0.5);
			$('.parallax3').parallax("50%", 0.5);
			$('.parallax4').parallax("50%", 0.5);
		}
	}	
	parallaxInit();	 
});	
//Mobile Detect
var testMobile;
var isMobile = {
    Android: function() {
        return navigator.userAgent.match(/Android/i);
    },
    BlackBerry: function() {
        return navigator.userAgent.match(/BlackBerry/i);
    },
    iOS: function() {
        return navigator.userAgent.match(/iPhone|iPad|iPod/i);
    },
    Opera: function() {
        return navigator.userAgent.match(/Opera Mini/i);
    },
    Windows: function() {
        return navigator.userAgent.match(/IEMobile/i);
    },
    any: function() {
        return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
    }
};
}( jQuery ));
	
	
/* ==============================================
Carousel Slider
=============================================== */		

    $(document).ready(function($) {
		'use strict';
		$(".slide-boxes").owlCarousel();
    });


/* ==============================================
Navigation Menu, Sticky
=============================================== */

	$(window).load(function(){
		'use strict';
		$("#navigation").sticky({ topSpacing: 0 });
    });
	
/* ==============================================
Load Project
=============================================== */
	$('.carousel').on('slide.bs.carousel', function () {
		'use strict';
		$('.carousel').carousel({
		  interval: 3000
		})
	})

/* ==============================================
Video Script
=============================================== */

jQuery(function(){
            jQuery(".player").mb_YTPlayer();
		});	
		
		
 /* ==============================================
Google Map Styles
=============================================== */		
window.onload = function () {

			'use strict';

			var latlng = new google.maps.LatLng(43.04446,-76.130791);

			var styles = [ 

						 {
							"featureType": "road",
							"stylers": [
							  { "color": "#000000" }
							]
						  },{
							"featureType": "landscape",
							"stylers": [
							  { "color": "#141414" }
							]
						  },{
							"elementType": "labels.text.fill",
							"stylers": [
							  { "color": "#808080" }
							]
						  },{
							"featureType": "poi",
							"stylers": [
							  { "color": "#161616" }
							]
						  },{
							"elementType": "labels.text",
							"stylers": [
							  { "saturation": 1 },
							  { "weight": 0.1 },
							  { "color": "#7f8080" }
							]
						  },{
						  }
						  
						  ];


			var myOptions = {
				zoom: 16,
				center: latlng,
				mapTypeId: google.maps.MapTypeId.ROADMAP,
				disableDefaultUI: true,
				scrollwheel: false,
				styles: styles
			};
			
			 var contentString = '<div id="content">'+
			  '<div id="siteNotice">'+
			  '</div>'+
			  '<h4>We Are Here</h4>'+
			  '<p>Description' +
			  '</p>'+
			  '</div>';

		  var infowindow = new google.maps.InfoWindow({
			  content: contentString
		  });
			
			var map = new google.maps.Map(document.getElementById('map'), myOptions);
			
			var myLatlng = new google.maps.LatLng(43.04476,-76.124331);
			
			var image = 'images/marker.png';
			var marker = new google.maps.Marker({
				  position: myLatlng,
				  map: map,
				  title: 'Hello World!',
				  icon: image
			  });
			  
			 google.maps.event.addListener(marker, 'click', function() {
				infowindow.open(map,marker);
			  });
		
		}
	
	
	
 /* ==============================================
Contact Form
=============================================== */	

$(document).ready(function() {

	/* 	'use strict';
		
		$('form#contact-us').submit(function() {
			$('form#contact-us .error').remove();
			var hasError = false;
			$('.requiredField').each(function() {
				if($.trim($(this).val()) == '') {
					var labelText = $(this).prev('label').text();
					$(this).parent().append('<span class="error">Your forgot to enter your '+labelText+'.</span>');
					$(this).addClass('inputError');
					hasError = true;
				} else if($(this).hasClass('email')) {
					var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
					if(!emailReg.test($.trim($(this).val()))) {
						var labelText = $(this).prev('label').text();
						$(this).parent().append('<span class="error">Sorry! You\'ve entered an invalid '+labelText+'.</span>');
						$(this).addClass('inputError');
						hasError = true;
					}
				}
			});
			if(!hasError) {
				var formInput = $(this).serialize();
				$.post($(this).attr('action'),formInput, function(data){
					$('form#contact-us').fadeOut("slow", function() {				   
						$(this).before('<div class="mail-message"><p class="mail-head">Thank You!</p><p>Your email has been delivered.</p></div>');
					});
				});
			}
			
			return false;	
		}); */
		
		$('#contact_submit').click(function(e) {
			
			
			var name	= $('#name').val();
			// alert(name); return false;
			var phone	= $('.contact-form #phone').val();
			var email	= $('.contact-form #email').val();
			var message	= $('.contact-form #message').val();
			if(name="" || !name)
			{
				alert('Please enter your name');
				return false;
			}
			else
			{
				var name	= $('#name').val();
			// alert(name); return false;
			}
			
			if(email="" || !email)
			{
				alert('Please enter your email');
				return false;
			}
			else
			{
				var email	= $('#email').val();
				var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
				if (!filter.test(email)) {
				alert('Please provide a valid email address');
				//email.focus;
				return false;
				}
				else
				{
					var email	= $('#email').val();
				}
			}
			
			if(phone="" || !phone)
			{
				alert('Please enter your contact number');
				return false;
			}
			else
			{
				var n = phone.length;
				if(n<10 || n>12)
				{
					alert('Contact number must be between 10 to 12 digits');
					return false;
				}
				else
				{
					var phone	= $('#phone').val();	
				}
			}
			
			if(message="" || !message)
			{
				alert('Please enter your message');
				return false;
			}
			else
			{
				var message	= $('#message').val();
			}
			
			
			 $.ajax({
					url: "../app/contact_mail",
					type: "GET",
					data: {
						name: name,
						phone: phone,
						email: email,
						message: message
					},
					cache: false,
					success: function() {
						// Success message
						$('#success_contact').html("<div class='alert alert-success'>");
						$('#success_contact > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
							.append("</button>");
						$('#success_contact > .alert-success')
							.append("<strong>Your message has been sent. </strong>");
						$('#success_contact > .alert-success')
							.append('</div>');

						//clear all fields
						$('#contactForm').trigger("reset");
						
						setTimeout(function(){ 
							$(".alert-success").fadeOut("slow"); 
						  }, 2000 ); 
					},
					error: function() {
						// Fail message
						/* $('#success').html("<div class='alert alert-danger'>");
						$('#success > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
							.append("</button>");
						$('#success > .alert-danger').append("<strong>Sorry " + firstName + ", it seems that my mail server is not responding. Please try again later!");
						$('#success > .alert-danger').append('</div>');
						//clear all fields
						$('#contactForm').trigger("reset"); */
					},
				});
				
				return false;
		});
		
	});
	

 /* ==============================================
Newsletter Form
=============================================== */	

$(document).ready(function() {

		'use strict';
		
		$('form#subscribe-mail').submit(function() {
			$('form#subscribe-mail .error').remove();
			var hasError = false;
			$('.requiredField').each(function() {
				if($.trim($(this).val()) == '') {
					var labelText = $(this).prev('label').text();
					$(this).parent().append('<span class="error">Your forgot to enter your '+labelText+'.</span>');
					$(this).addClass('inputError');
					hasError = true;
				} else if($(this).hasClass('email')) {
					var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
					if(!emailReg.test($.trim($(this).val()))) {
						var labelText = $(this).prev('label').text();
						$(this).parent().append('<span class="error">Sorry! You\'ve entered an invalid '+labelText+'.</span>');
						$(this).addClass('inputError');
						hasError = true;
					}
				}
			});
			if(!hasError) {
				var formInput = $(this).serialize();
				$.post($(this).attr('action'),formInput, function(data){
					$('form#subscribe-mail').fadeOut("slow", function() {				   
						$(this).before('<div class="newsletter-message"><p class="mail-head">Success!</p><p>You have been added to our email list.</p></div>');
					});
				});
			}
			
			return false;	
		});
	});
	
	
 /* ==============================================
Animated Items
=============================================== */	
	jQuery(document).ready(function($) {
	
	'use strict';

    	$('.animated').appear(function() {
	        var elem = $(this);
	        var animation = elem.data('animation');
	        if ( !elem.hasClass('visible') ) {
	        	var animationDelay = elem.data('animation-delay');
	            if ( animationDelay ) {

	                setTimeout(function(){
	                    elem.addClass( animation + " visible" );
	                }, animationDelay);

	            } else {
	                elem.addClass( animation + " visible" );
	            }
	        }
	    });
});

 /* ==============================================
Revolution Slider
=============================================== */

var revapi;

		jQuery(document).ready(function() {

			   revapi = jQuery('.tp-banner').revolution(
				{
					delay:6000,
					startwidth:1170,
					startheight:550,
					hideThumbs:10,
					fullWidth:"on",
					forceFullWidth:"on"
				});

		});	//ready	
		


 /* ==============================================
Revolution Slider Ful Screen
=============================================== */

var revapi;

		jQuery(document).ready(function() {

			   revapi = jQuery('.tp-banner-fs').revolution(
				{
					delay:15000,
					startwidth:1170,
					startheight:500,
					hideThumbs:10,
					fullWidth:"off",
					fullScreen:"on",
					fullScreenOffsetContainer: ""
				});

		});	//ready	
 /* ==============================================
Fit Videos
=============================================== */
$(window).load(function(){
        $(".fit-vids").fitVids();
    });

 /* ==============================================
Back To Top Button
=============================================== */	
	
$(document).ready(function(){

	// hide #back-top first
	$("#back-top").hide();
	
	// fade in #back-top
	$(function () {
		$(window).scroll(function () {
			if ($(this).scrollTop() > 100) {
				$('#back-top').fadeIn();
			} else {
				$('#back-top').fadeOut();
			}
		});

		// scroll body to 0px on click
		$('#back-top a').click(function () {
			$('body,html').animate({
				scrollTop: 0
			}, 800);
			return false;
		});
	});

});



 /* ==============================================
Count Factors
 =============================================== */	
  

		jQuery(function() {
				$(".facts").appear(function(){
				$('.facts').each(function(){
	        	dataperc = $(this).attr('data-perc'),
				$(this).find('.factor').delay(6000).countTo({
	            from: 50,
	            to: dataperc,
	            speed: 3000,
	            refreshInterval: 50,
	            
        	});  
		});
					});
});
 
(function($) {
    $.fn.countTo = function(options) {
        // merge the default plugin settings with the custom options
        options = $.extend({}, $.fn.countTo.defaults, options || {});

        // how many times to update the value, and how much to increment the value on each update
        var loops = Math.ceil(options.speed / options.refreshInterval),
            increment = (options.to - options.from) / loops;

        return $(this).each(function() {
            var _this = this,
                loopCount = 0,
                value = options.from,
                interval = setInterval(updateTimer, options.refreshInterval);

            function updateTimer() {
                value += increment;
                loopCount++;
                $(_this).html(value.toFixed(options.decimals));

                if (typeof(options.onUpdate) == 'function') {
                    options.onUpdate.call(_this, value);
                }

                if (loopCount >= loops) {
                    clearInterval(interval);
                    value = options.to;

                    if (typeof(options.onComplete) == 'function') {
                        options.onComplete.call(_this, value);
                    }
                }
            }
        });
    };

    $.fn.countTo.defaults = {
        from: 0,  // the number the element should start at
        to: 100,  // the number the element should end at
        speed: 1000,  // how long it should take to count between the target numbers
        refreshInterval: 100,  // how often the element should be updated
        decimals: 0,  // the number of decimal places to show
        onUpdate: null,  // callback method for every time the element is updated,
        onComplete: null,  // callback method for when the element finishes updating
    };
})(jQuery);


function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}		