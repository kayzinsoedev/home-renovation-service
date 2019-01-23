<script src="js/jquery/jquery-3.2.1.min.js"></script>
<script src="js/popper/popper.min.js"></script>
<script src="js/bootstrap/bootstrap.min.js"></script>

<!-- Plugin JavaScript -->
<script src="js/jquery-easing/jquery.easing.js"></script>
<script src="js/scrollreveal/scrollreveal.min.js"></script>
<script src="js/flexslider/jquery.flexslider.js"></script>
<script src="js/magnific-popup/jquery.magnific-popup.min.js"></script>

<!-- Custom scripts for this template -->
<script src="js/creative.min.js"></script>
<script type="text/javascript">

	// image slider
	$(window).load(function() {
		$('.flexslider').flexslider();
	});
	

	$(document).ready(function(){
		var image =  ["header.png"];
		$(function () {
			$(".masthead").css("background-image", "url(images/" + image + ") ");
		});

		$('.btn').css('color','yellowgreen');
	    $(".btn").mouseover(function(){
	    	$(this).css('color','lime');
	    });
	    $(".btn").mouseout(function(){
	    	$(this).css('color','yellowgreen');
	    });
	});
</script>