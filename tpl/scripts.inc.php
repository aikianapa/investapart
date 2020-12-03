<html>


<script src="/engine/js/jquery.min.js"></script>
<script src="/engine/js/wbapp.js"></script>

<script>
    $(document).on('wbapp-go', function() {
        wbapp.loadStyles([
			"{{_var.base}}/css/bootstrap.min.css"
			,"{{_var.base}}/css/style.css"
			,"{{_var.base}}/css/color.css"
			,"{{_var.base}}/css/custom.css"
			,"{{_var.base}}/css/font-awesome.min.css"
			,"{{_var.base}}/css/layerslider.css"
			,"{{_var.base}}/css/owl.carousel.min.css"
			,"{{_var.base}}/fonts/flaticon/flaticon.css"
			,"https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap"
			,"https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap"
			

		], 'styles-ready');
        wbapp.loadScripts([
			"{{_var.base}}/js/popper.min.js"
			,"{{_var.base}}/js/bootstrap.min.js"
			,"{{_var.base}}/js/greensock.js"
			,"{{_var.base}}/js/layerslider.transitions.js"
			,"{{_var.base}}/js/layerslider.kreaturamedia.jquery.js"
			,"{{_var.base}}/js/owl.carousel.min.js"
			,"{{_var.base}}/js/tmpl.js"
			,"{{_var.base}}/js/jquery.dependClass-0.1.js"
			,"{{_var.base}}/js/draggable-0.1.js"
			,"{{_var.base}}/js/jquery.slider.js"
			,"{{_var.base}}/js/wow.js"
			,"{{_var.base}}/js/custom.js"

		], 'scripts-ready', function() {
            custom_init();
		});
    });



/*
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
        */

</script>

</html>