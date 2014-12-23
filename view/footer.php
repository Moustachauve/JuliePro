	<script src="js/template_js/bootstrap.min.js"></script>
    <script src="js/template_js/chart.min.js"></script>
    <script src="js/template_js/easypiechart.js"></script>
    <script src="js/template_js/easypiechart-data.js"></script>
    <script src="js/template_js/bootstrap-datepicker.js"></script>
    <script src="js/template_js/locales/bootstrap-datepicker.fr.js"></script>
    <script src="js/template_js/jquery.formatter.min.js"></script>

    <script src="js/profile_validate.js"></script>
	<script>

		!function ($) {
		    $(document).on("click","ul.nav li.parent > a > span.icon", function(){          
		        $(this).find('em:first').toggleClass("glyphicon-minus");      
		    }); 
		    $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>	
</body>

</html>