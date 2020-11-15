<html>
  <script src="{{_var.base}}/js/jquery-v3.4.1.js"></script>
  <script src="{{_var.base}}/js/greensock.js"></script>
  <script src="{{_var.base}}/js/layerslider.transitions.js"></script>
  <script src="{{_var.base}}/js/layerslider.kreaturamedia.jquery.js"></script>
  <script src="{{_var.base}}/js/popper.min.js"></script>
  <script src="{{_var.base}}/js/bootstrap.min.js"></script>
  <script src="{{_var.base}}/js/owl.carousel.min.js"></script>
  <script src="{{_var.base}}/js/tmpl.js"></script>
  <script src="{{_var.base}}/js/jquery.dependClass-0.1.js"></script>
  <script src="{{_var.base}}/js/draggable-0.1.js"></script>  
  <script src="{{_var.base}}/js/jquery.slider.js"></script>
  <script src="{{_var.base}}/js/wow.js"></script>
  <script src="{{_var.base}}/js/custom.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDlVVUxeZqpBLv-jrgsQO1XQ7wvBS9mlRo"></script>
  <script src="{{_var.base}}/js/map/markerwithlabel_packed.js"></script>
  <script src="{{_var.base}}/js/map/infobox.js"></script> 
  <script src="{{_var.base}}/js/map/markerclusterer_packed.js"></script> 
  <script src="{{_var.base}}/js/validate.js"></script>
  <script src="{{_var.base}}/js/map/custom-map.js"></script> 
 	<script>
		(function($){
		// Map View Latitude & Longitude
  		//------------------------------------
			var _latitude = 36.596165;
			var _longitude = -97.062988;
			createHomepageGoogleMap(_latitude,_longitude);
		// Layer Slider
  		//------------------------------------
			$('#slider').layerSlider({
				sliderVersion: '6.0.0',
				type: 'fullwidth',
				responsiveUnder: 940,
				maxRatio: 1,
				hideOver: 100000,
				skin: 'noskin',
				navPrevNext: false,
				thumbnailNavigation: 'disabled',
				allowRestartOnResize: true,
				width: 940,
				skinsPath: '{{_var.base}}/images/slider/skins/'
			});

		})(jQuery);
	</script>
	<script>
		document.onkeydown = function(e) {
			if(e.keyCode == 123) {
			 return false;
			}
			if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)){
			 return false;
			}
			if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)){
			 return false;
			}
			if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)){
			 return false;
			}

			if(e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0)){
			 return false;
			}      
		}
  </script></html>