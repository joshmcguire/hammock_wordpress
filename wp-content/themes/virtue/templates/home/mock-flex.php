<div class="sliderclass">
  <div id="imageslider" class="container">
    <div class="flexslider loading" >
        <ul class="slides">
                      <li> 
                        <a href="/buy-hammocks/">
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slide_01.jpg" width="1170px" height="450px" alt="How to Sleep in a Hammock" />
                        </a>
                      </li>
                      <li> 
                        <a href="/buy-hammocks/">
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slide_02.png" width="1170px" height="450px" alt="Purchase Hammocks Online"/>
                        </a>
                      </li>
        </ul>
      </div> <!--Flex Slides-->
  </div><!--Container-->
</div><!--sliderclass-->

      <script type="text/javascript">
            jQuery(window).load(function () {
                jQuery('.flexslider').flexslider({
                    animation: "slide",
                    animationSpeed: 300,
                    slideshow: true,
                    slideshowSpeed: 7000,

                    before: function(slider) {
                      slider.removeClass('loading');
                    }  
                  });
                });
      </script>