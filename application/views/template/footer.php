<footer class="page-footer white">
        <div class="footer-copyright blue-grey lighten-1">
            <div class="nav-wrapper container center">
              <p>Follow Us! 
            
                | Instagram: <a rel="nofollow" href="https://templatemo.com">@hematwarrior</a></p>
            </div>
        </div>
    </footer>

   <!-- Scripts -->
   <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
   <script src="<?php echo base_url('assets/materialize/js/materialize.js'); ?>"></script>
   <script src="<?php echo base_url('assets/js/kcdev.js'); ?>"></script>
   <script>
    function(){t('[data-parallax="scroll"]').parallax()})}(jQuery,window,document);
   </script>
   <script>
    (function ($) {
      $(function () {

          //initialize all modals           
          $('.modal').modal();

          //or by click on trigger
          $('.trigger-modal').modal();

      }); // end of document ready
    })(jQuery); // end of jQuery name space
   </script>
   <!-- <script src="<?php echo base_url('js/jquery.min.js'); ?>"></script>
   <script src="<?php echo base_url('js/parallax.min.js'); ?>"></script>
   <script>
		$(document).ready(function(){
			// Handle click on paging links
			$('.tm-paging-link').click(function(e){
				e.preventDefault();
				
				var page = $(this).text().toLowerCase();
				$('.tm-gallery-page').addClass('hidden');
				$('#tm-gallery-page-' + page).removeClass('hidden');
				$('.tm-paging-link').removeClass('active');
				$(this).addClass("active");
			});
		});
	</script> -->
  </body>
</html>