/****************************************************************************
 * Gambo v2.1
 * Gambo - Online Grocery Supermarket HTML Template by Gambolthemes
 * Copyright 2022 | Gambolthemes | https://gambolthemes.net
 * @package Gambolthemes
 ****************************************************************************/
 
/*----------------------------------------------
Index Of Script
------------------------------------------------

:: Tooltip
:: QTY JS
:: Wishlist Script
:: Toggle JS
:: Payment Method Accordion
:: Countdown
:: Owl Carousel 2
:: Multi Dropdown JS

------------------------------------------------
Index Of Script
----------------------------------------------*/

/*--- Tooltip JS ---*/

var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
})

/*--- QTY JS ---*/
function wcqib_refresh_quantity_increments() {
    jQuery("div.quantity:not(.buttons_added), td.quantity:not(.buttons_added)").each(function(a, b) {
        var c = jQuery(b);
        c.addClass("buttons_added"), c.children().first().before('<input type="button" value="-" class="minus" />'), c.children().last().after('<input type="button" value="+" class="plus" />')
    })
}
String.prototype.getDecimals || (String.prototype.getDecimals = function() {
    var a = this,
        b = ("" + a).match(/(?:\.(\d+))?(?:[eE]([+-]?\d+))?$/);
    return b ? Math.max(0, (b[1] ? b[1].length : 0) - (b[2] ? +b[2] : 0)) : 0
}), jQuery(document).ready(function() {
    wcqib_refresh_quantity_increments()
}), jQuery(document).on("updated_wc_div", function() {
    wcqib_refresh_quantity_increments()
}), jQuery(document).on("click", ".plus, .minus", function() {
    var a = jQuery(this).closest(".quantity").find(".qty"),
        b = parseFloat(a.val()),
        c = parseFloat(a.attr("max")),
        d = parseFloat(a.attr("min")),
        e = a.attr("step");
    b && "" !== b && "NaN" !== b || (b = 0), "" !== c && "NaN" !== c || (c = ""), "" !== d && "NaN" !== d || (d = 0), "any" !== e && "" !== e && void 0 !== e && "NaN" !== parseFloat(e) || (e = 1), jQuery(this).is(".plus") ? c && b >= c ? a.val(c) : a.val((b + parseFloat(e)).toFixed(e.getDecimals())) : d && b <= d ? a.val(d) : b > 0 && a.val((b - parseFloat(e)).toFixed(e.getDecimals())), a.trigger("change")
});

/*--- wishlist script ---*/
$(document).ready(function() {
	$('.like-icon, .like-button').on('click', function(e) {
		e.preventDefault();
		$(this).toggleClass('liked');
		$(this).children('.like-icon').toggleClass('liked');
	});
});

/*--- Toggle JS ---*/
$('.enable.button')
  .on('click', function() {
    $(this)
      .nextAll('.checkbox')
        .checkbox('enable')
    ;
  })
 ;


/*--- Payment Method Accordion ---*/
$('input[name="paymentmethod"]').on('click', function () {
	var $value = $(this).attr('value');
	$('.return-departure-dts').slideUp();
	$('[data-method="' + $value + '"]').slideDown();
});



/*--- Countdown ---*/
$(".product_countdown-timer").each(function(){
	var $this = $(this);
	$this.countdown($this.data('countdown'), function(event) {
	  $(this).html(
		  "<span class='special_day'>" + event.strftime('%D Days') + "</span>"
		+
		"<span class='special_cs'>-</span>"
		+
		"<span class='special_hour'>" + event.strftime('%H') + "</span>"
		+
		"<span class='special_cs'>:</span>"
		+
		"<span class='special_minute'>" + event.strftime('%M') + "</span>"
		+
		"<span class='special_cs'>:</span>"
		+
		"<span class='special_second'>" + event.strftime('%S') + "</span>"
	
	  );
	});
});


/*--- OWL Carousel ---*/
// Banner Home 
$('.offers-banner').owlCarousel({
	stagePadding: 50,
	loop:true,
    margin:15,
	nav:false,
	dots:false,
    autoplay:true,
    autoplayTimeout: 3000,
    autoplayHoverPause:true,
	responsive:{
		0:{
			items:1
		},
		600:{
			items:2
		},
		1000:{
			items:2
		},
		1200:{
			items:3
		},
		1400:{
			items:3
		}
	}
})

// Category Slider
$('.cate-slider').owlCarousel({
	loop:true,
	margin:15,
	nav:true,
	dots:false,
	navText: ["<i class='uil uil-angle-left'></i>", "<i class='uil uil-angle-right'></i>"],
	responsive:{
		0:{
			items:3
		},
		600:{
			items:3
		},
		1000:{
			items:4
		},
		1200:{
			items:7
		},
		1400:{
			items:6
		}
	}
})

// Featured Slider
$('.featured-slider').owlCarousel({
	items: 8,
	loop:false,
	margin:15,
	nav:true,
	dots:false,
	navText: ["<i class='uil uil-angle-left'></i>", "<i class='uil uil-angle-right'></i>"],
	responsive:{
		0:{
			items:2
		},
		600:{
			items:2
		},
		1000:{
			items:3
		},
		1200:{
			items:5
		},
		1400:{
			items:5
		}
	}
})
// Product Rating
$('.pro-rating').owlCarousel({
	items: 2,
	loop:false,
	margin:15,
	nav:true,
	dots:false,
	navText: ["<i class='uil uil-angle-left'></i>", "<i class='uil uil-angle-right'></i>"],
	responsive:{
		0:{
			items:2
		},
		600:{
			items:2
		},
		1000:{
			items:2
		},
		1200:{
			items:2
		},
		1400:{
			items:2
		}
	}
})

// Date Slider
$('.date-slider').owlCarousel({
	loop:false,
    margin:10,
	nav:false,
	dots:false,
	responsive:{
		0:{
			items:3
		},
		600:{
			items:4
		},
		1000:{
			items:5
		},
		1200:{
			items:6
		},
		1400:{
			items:7
		}
	}
})

// Banner Home
$('.life-slider').owlCarousel({
	loop:true,
    margin:30,
	nav:true,
	dots:false,
    autoplay:true,
    autoplayTimeout: 3000,
    autoplayHoverPause:true,
	navText: ["<i class='uil uil-angle-left'></i>", "<i class='uil uil-angle-right'></i>"],
	responsive:{
		0:{
			items:1
		},
		600:{
			items:2
		},
		1000:{
			items:2
		},
		1200:{
			items:3
		},
		1400:{
			items:3
		}
	}
})

// Testimonials Slider
$('.testimonial-slider').owlCarousel({
	loop:true,
    margin:30,
	nav:true,
	dots:false,
	autoplay:true,
    autoplayTimeout: 3000,
    autoplayHoverPause:true,
	navText: ["<i class='uil uil-angle-left'></i>", "<i class='uil uil-angle-right'></i>"],
	responsive:{
		0:{
			items:1
		},
		600:{
			items:2
		},
		1000:{
			items:2
		},
		1200:{
			items:3
		},
		1400:{
			items:3
		}
	}
})

// Category Slider
$('.team-slider').owlCarousel({
	loop:true,
	margin:20,
	nav:false,
	dots:false,
	responsive:{
		0:{
			items:1
		},
		600:{
			items:2
		},
		1000:{
			items:3
		},
		1200:{
			items:4
		},
		1400:{
			items:4
		}
	}
})



function setCookie(cname, cvalue, exdays) {
	const d = new Date();
	d.setTime(d.getTime() + (exdays*24*60*60*1000));
	let expires = "expires="+ d.toUTCString();
	document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
	// return document.cookie;
}
function getCookie(cname) {
	let name = cname + "=";
	let decodedCookie = decodeURIComponent(document.cookie);
	let ca = decodedCookie.split(';');
	for(let i = 0; i <ca.length; i++) {
	  let c = ca[i];
	  while (c.charAt(0) == ' ') {
		c = c.substring(1);
	  }
	  if (c.indexOf(name) == 0) {
		return c.substring(name.length, c.length);
	  }
	}
	return "";
  }

  function locationModal() {
	let user = getCookie("locatoinSelected");
	if (user != "selected") {
		setCookie("locatoinSelected", 'selected', 30);
		$("#chooseDeliveryLocationModal").modal('show');
	} else {
	   
	}
  }

(function ($) {
	$.fn.progress = function () {
		var percent = this.data("percent");
		this.css("width", percent + "%");
	};
}(jQuery));


/*--- Multi Dropdown JS ---*/ 

$(document).ready(function(){
	$('.dropdown-submenu a.submenu-item').on("click", function(e){
	  $(this).next('ul').toggle();
	  e.stopPropagation();
	  e.preventDefault();
	});

	$(".bar-one .bar").progress();
});