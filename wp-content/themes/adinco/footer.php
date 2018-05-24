
<footer>
	<div class="footer text-center">
		<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/adinco_logo_full.png" />
		<br/>
		Enjoy Responsibly
	</div>
	
	<div class="copyright text-center">
		© Copyright 2018. All Rights Reserved &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp; Created By Soidemer
	</div>
</footer>

<div style='display:none'>
	<div id='inline_content' class="text-center" style='padding:30px; background:url(<?php echo esc_url( get_template_directory_uri() ); ?>/images/adl.png) no-repeat center center  #FAF0DC;'>
		<?php echo do_shortcode('[ninja_form id=2]'); ?>
	</div>
</div>
	
	

<script>
	$(function() {
		var selectedClass = "";
		$(".fil-cat").click(function(){ 
		selectedClass = $(this).attr("data-rel"); 
     $("#portfolio").fadeTo(100, 0.1);
		$("#portfolio div").not("."+selectedClass).fadeOut().removeClass('scale-anm');
    setTimeout(function() {
      $("."+selectedClass).fadeIn().addClass('scale-anm');
      $("#portfolio").fadeTo(300, 1);
    }, 300); 
		
	});
}	);
</script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>	
<script src="https://unpkg.com/popper.js"></script>	
<script>  //$("#myCarousel").carousel({interval: 2000,pause:null});

/* Demo Scripts for Bootstrap Carousel and Animate.css article
* on SitePoint by Maria Antonietta Perna
*/
(function($) {
  //Function to animate slider captions
  function doAnimations(elems) {
    //Cache the animationend event in a variable
    var animEndEv = "webkitAnimationEnd animationend";

    elems.each(function() {
      var $this = $(this),
        $animationType = $this.data("animation");
      $this.addClass($animationType).one(animEndEv, function() {
        $this.removeClass($animationType);
      });
    });
  }

  //Variables on page load
  var $myCarousel = $("#carouselExampleIndicators"),
    $firstAnimatingElems = $myCarousel
      .find(".carousel-item:first")
      .find("[data-animation ^= 'animated']");

  //Initialize carousel
  $myCarousel.carousel();

  //Animate captions in first slide on page load
  doAnimations($firstAnimatingElems);

  //Other slides to be animated on carousel slide event
  $myCarousel.on("slide.bs.carousel", function(e) {
    var $animatingElems = $(e.relatedTarget).find(
      "[data-animation ^= 'animated']"
    );
    doAnimations($animatingElems);
  });
})(jQuery);


</script>


<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/menu.js"></script>
<script>$('[data-menu]').menu();</script>
  
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.bxslider.js"></script>
<script>
	if ( $(window).width() > 767) {
	$(document).ready(function(){
		$('.bxslider').bxSlider({
			mode: 'horizontal',
			moveSlides: 1,
			slideMargin: 0,
			infiniteLoop: true,
			 preloadImages: 'all',
			slideWidth: 245,
			minSlides: 1,
			maxSlides: 6,
			speed: 300,
			responsive:true,
			pager:false,
			shrinkItems:true,
			useCSS: false,
		});
	});
	}
	else
	{
		$(document).ready(function(){
		$('.bxslider').bxSlider({
			mode: 'fade',
			moveSlides: 1,
			slideMargin: 0,
			infiniteLoop: true,
			 preloadImages: 'all',
			
			minSlides: 1,
			maxSlides: 1,
			speed: 5,
			responsive:true,
			pager:false,
			shrinkItems:true,
			useCSS: false,
		});
	});
	}
	$(function(){
	  $('.bxslider1').bxSlider({
		speed: 100,
		captions: false,
		pager:false,
		mode: 'fade',
		controls:false,
		infiniteLoop: true,
		auto: true,
		stopAutoOnClick: true,
	  });
	});
	
	$(function(){
	  $('.bxslider2').bxSlider({
		speed: 300,
		captions: false,
		mode: 'fade',
		pager:false,
		infiniteLoop: true,
		controls:false,
		auto: true,
		stopAutoOnClick: true,
	  });
	});
	
	$(function(){
	  $('.bxslider3').bxSlider({
		speed: 500,
		captions: false,
		mode: 'fade',
		pager:false,
		infiniteLoop: true,
		controls:false,
		auto: true,
		stopAutoOnClick: true,
	  });
	});
	
	$(function(){
	  $('.bxslider4').bxSlider({
		speed: 700,
		captions: false,
		mode: 'fade',
		pager:false,
		infiniteLoop: true,
		controls:false,
		auto: true,
		stopAutoOnClick: true,
	  });
	});
	
	if ( $(window).width() > 767) {
	$(function(){
	  $('.bxslider5').bxSlider({
		speed: 300,
		captions: false,
		pager:false,
		controls:true,
		auto: false,
		stopAutoOnClick: true,
		maxSlides: 1,
	  });
	});
	}
	
	$(function(){
	  $('.bxslider6').bxSlider({
		speed: 300,
		captions: false,
		pager:false,
		controls:true,
		auto: true,
		stopAutoOnClick: true,
		moveSlides: 3,
		minSlides: 1,
		maxSlides: 4,
		slideWidth: 470,
		slideMargin: 10,
		infiniteLoop: true,
		shrinkItems:true,
	  });
	});
	
	$(function(){
	  $('.bxslider7').bxSlider({
		speed: 300,
		captions: false,
		pager:false,
		controls:true,
		auto: true,
		stopAutoOnClick: true,
		moveSlides: 1,
		minSlides: 1,
		maxSlides: 6,
		slideMargin: 10,
		infiniteLoop: true,
		shrinkItems:true,
	  });
	});
	
</script>

<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/aos.js"></script>
    <script>
      AOS.init({
        easing: 'ease-in-out-sine'
      });
    </script>


<!--<script src="//npmcdn.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
<script src="https://raw.githubusercontent.com/metafizzy/isotope-packery/master/packery-mode.pkgd.js"></script> 


<script>
$('.grid').isotope({
  layoutMode: 'masonryHorizontal',
masonryHorizontal: {
  rowHeight: 50
}
  itemSelector: '.grid-item',
  percentPosition: false,
  packery: {
    columnWidth: '.grid-sizer'
  }
});


</script>
-->	
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.colorbox.js"></script> <!-- Resource jQuery -->	
<script>

			$(document).ready(function(){
				//Examples of how to assign the Colorbox event to elements
				
				$(".group2").colorbox({rel:'group2', transition:"fade"});
				
				$(".group4").colorbox({rel:'group4', slideshow:true});
				$(".ajax").colorbox();
				$(".youtube").colorbox({iframe:true, innerWidth:640, innerHeight:390, width:"80%", height:"70%",scrolling:false});
				
				$(".inline").colorbox({inline:true, width:"50%"});
				$('.non-retina').colorbox({rel:'group5', transition:'none'})
				$('.retina').colorbox({rel:'group5', transition:'none', retinaImage:true, retinaUrl:true});
				
				//Example of preserving a JavaScript event for inline calls.
				$("#click").click(function(){ 
					$('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
					return false;
				});
			});

</script>



<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/litetooltip.js"></script>
<script>
	//HOTSPOT

	$(".photspot").css({
	"background":"#e39a31",
	"width": "16px",
	"height": "16px",
	"border-radius": "14px",
	"border": "3px solid #fff "
    
	});
	 
	$('#photspot1').LiteTooltip({
	location: 'top',
	trigger: 'hoverable',
	textalign: 'center',
	padding: 20,
	templatename: "CoffeeConfetti",
	title:'<div class="tooltip-menu ">Distributor Name<br/>Kuala Lumpur, Malaysia</div>'
	});
	$('#photspot2').LiteTooltip({
	location: 'top',
	trigger: 'hoverable',
	textalign: 'center',
	padding: 20,
	templatename: "CoffeeConfetti",
	title:'<div class="tooltip-menu ">Adinco Distilleries<br/>Goa, India</div>'
	})
	
	
</script>

<!--
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBIk_A75smks6o-WqOV0VkRWrNdrRP79Xw"></script>
<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.googlemap.js"></script>


<script type="text/javascript">
  $(function() {
    $("#map").googleMap({
      zoom: 3, // Initial zoom level (optional)
      type: "ROADMAP" // Map type (optional)
    });
    
    // Marker 1
    
	$("#map").addMarker({
      coords: [3.139003, 101.686855], // GPS coords
	  zoom: 5,
      text:  '<b>Marker1</b>' // HTML content
    });
    
    
  })
</script>
-->
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/countdown.js"></script> <!-- Resource jQuery -->
<?php wp_footer(); ?> 
</body>
</html>