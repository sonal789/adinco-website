
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
	
	
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<!-- Brands Page Filter -->
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
<script>  $("#myCarousel").carousel({interval: 50000});</script>


<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/menu.js"></script>
<script>$('[data-menu]').menu();</script>
  
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.bxslider.js"></script>
<script>

	$(document).ready(function(){
		$('.bxslider').bxSlider({
			mode: 'horizontal',
			moveSlides: 5,
			slideMargin: 0,
			infiniteLoop: false,
			slideWidth: 234,
			minSlides: 1,
			maxSlides: 6,
			speed: 300,
			responsive:false,
			pager:false
		});
	});
	
	$(function(){
	  $('.bxslider1').bxSlider({
		speed: 300,
		captions: false,
		pager:false,
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
		pager:false,
		infiniteLoop: true,
		controls:false,
		auto: true,
		stopAutoOnClick: true,
	  });
	});
	
	$(function(){
	  $('.bxslider3').bxSlider({
		speed: 300,
		captions: false,
		pager:false,
		infiniteLoop: true,
		controls:false,
		auto: true,
		stopAutoOnClick: true,
	  });
	});
	
	$(function(){
	  $('.bxslider4').bxSlider({
		speed: 300,
		captions: false,
		pager:false,
		infiniteLoop: true,
		controls:false,
		auto: true,
		stopAutoOnClick: true,
	  });
	});
	
	$(function(){
	  $('.bxslider5').bxSlider({
		speed: 300,
		captions: false,
		pager:false,
		controls:true,
		auto: true,
		stopAutoOnClick: true,
		
	  });
	});
	
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
		maxSlides: 6,
		slideWidth: 420,
		slideMargin: 10,
		infiniteLoop: false,
	  });
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
				

				$('.non-retina').colorbox({rel:'group5', transition:'none'})
				$('.retina').colorbox({rel:'group5', transition:'none', retinaImage:true, retinaUrl:true});
				
				//Example of preserving a JavaScript event for inline calls.
				$("#click").click(function(){ 
					$('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
					return false;
				});
			});

</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBIk_A75smks6o-WqOV0VkRWrNdrRP79Xw"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/main.js"></script> <!-- Resource jQuery -->

<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/countdown.js"></script> <!-- Resource jQuery -->
<?php wp_footer(); ?> 
</body>
</html>