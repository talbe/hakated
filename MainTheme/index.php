<?php get_header(); ?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/main.css">


<div class="mainGrid" >
    
	<div class="row">			
        
        <div class="mainSlider">  
            <div class="margined">
                <div class="innerMainSlider" >
                  <div><img class="mainSliderPic" src="<?php bloginfo('stylesheet_directory'); ?>/img/images/homepage/homepage_big_slider_1.png"></div>
                  <div><img class="mainSliderPic" src="<?php bloginfo('stylesheet_directory'); ?>/img/images/homepage/homepage_big_slider_2.png"></div>
                <div><img class="mainSliderPic" src="<?php bloginfo('stylesheet_directory'); ?>/img/images/homepage/homepage_big_slider_3.png"></div>
                </div>
            </div> 
        </div>
        
        <div class="firstRowQubicals">
			<div class="row">
                <div class="tarbutBenhaviraQube" style="height: 220px">
					<div class="tarbutBenhaviraDiv">
						<img class="tarbutBenhaviraImg" src="<?php bloginfo('stylesheet_directory'); ?>/img/STAINS/STAIN_2.png" alt="tarbutBehaviraHaheret"/>
						<p class="tarbutHeader">
							תרבות <br> באווירה <br> אחרת
						</p>
					</div>
				</div>
                
				<div class="col-8" style="background-color: #9fae83; height: 220px; float: left;">
					<div class="coverdImag">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/img/STAINS/STAIN_13.png" alt="harshamaLekursinLogo" style="height: 100%; width: 50%;"/>
						<p onclick="location.href='<?php echo site_url('signin') ; ?>'" class="harshamaHeader">
							הרשמה <br> לקורסים
						</p>
					</div>
				</div>
				
			</div>
			<div class="row">
                
                <div class="yedionQube">
                    <div class="yedionGridDiv">
                        <div class="borderd">
                            <div class="coverdImag">
                                <img style="width: 100%; height: 100%;" src="<?php bloginfo('stylesheet_directory'); ?>/img/STAINS/yedion.png">
                                <p class="yedionHeader">
                                    ידיעון הקתדרה
                                </p>
                            </div>
                        </div>
                    </div> 
                </div>
					
				
				<div class="col-8" style="height: 220px; float: left;">
					<div class="innerSecSlider" style="height: 220px;">
                        <div><img style="height: 220px; width: 100%;"  src="<?php bloginfo('stylesheet_directory'); ?>/img/images/homepage/homepage_small_slider_1.png"></div>
                        <div><img style="height: 220px;  width: 100%;" src="<?php bloginfo('stylesheet_directory'); ?>/img/images/homepage/homepage_small_slider_2.png"></div>
                        <div><img style="height: 220px;  width: 100%;" src="<?php bloginfo('stylesheet_directory'); ?>/img/images/homepage/homepage_small_slider_3.png"></div>
                    </div>
				</div>
				
			</div>
		</div>
        
	</div>
	
	<div class="row">
        <div class="thumiInyanQube">
            
            <div class="thumiInyanDiv">
                <img style="width: 50%; height: 100%;" src="<?php bloginfo('stylesheet_directory'); ?>/img/STAINS/STAIN_5.png">
                <p class="thumiInyanHeader">
                   תחומי עניין בקתדרה
                </p>
                
                <div class="interestsOptions">
                    <p onclick="location.href='<?php echo site_url('science-courses') ; ?>'" class="thumiInyanText">
                     ,מדע
                    </p>
                    <p style="margin-right:7px" onclick="location.href='<?php echo site_url('art-and-culture-courses') ; ?>'" class="thumiInyanText">
                        ,תרבות ואמנות
                    </p>
                    <p style="margin-right:7px" class="thumiInyanText">
                        ,מפגשים מוסיקליים
                    </p>
                    <p  class="thumiInyanText">
                        ,שישי בקתדרה
                    </p>
                    <p style="margin-right:7px" class="thumiInyanText">
                        ,כתיבה יצירתית
                    </p>
                    <p style="margin-right:7px" class="thumiInyanText">
                        ,עיצוב ואמנויות
                    </p>
                    <p class="thumiInyanText">
                        ,מודעות אישית וריפוי טבעי
                    </p>
                    <p style="margin-right:7px" class="thumiInyanText">
                      תנועה ותרבות הגוף
                    </p>
                </div>
                

            </div>
			
		</div>
        <div class="odotQube">
            <div style="margin-left: 10px">
                <div class="coverdImag">
				<img style="height: 220px;width: 100%;" src="<?php bloginfo('stylesheet_directory'); ?>/img/STAINS/STAIN_6.png">
				<p onclick="location.href='<?php echo site_url('about') ; ?>'" class="odotHeader" >
				אודות
				<br>
				הקתדרה
				</p>
			</div>
            </div>
		</div>
        <div class="emptyQube spaceCol" style="height: 220px; margin-top: 10px; ">
            <div class="emptyQubeDiv">
                <img style="width: 100%; height: 100%;" src="<?php bloginfo('stylesheet_directory'); ?>/img/images/homepage/homepage_small_pictures.png">
            </div>
			
		</div>
        
		<div class="col-2" style="height: 220px; background-color: #dbe0d0; margin-top: 10px; float: right;">
			<div class="borderd" >
				<div class="coverdImag">
					<img style="width: 100%;height: 100%" src="<?php bloginfo('stylesheet_directory'); ?>/img/STAINS/STAIN_4.png">
					<p onclick="location.href='<?php echo site_url('this-month') ; ?>'" class="hahodeshHeader" align="right">
						החודש
						<br>
						בקתדרה
					</p>
				</div>
			</div>
		</div>		
	</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/scripts/slick/slick.min.js"></script>    

<script type="text/javascript">
        
   $(document).ready(function() {
        $(".yedionQube").click(function(e) {
            
            alert("here");
            var data = { 'action': 'my_ajax' };
            alert("here2");
            // We can also pass the url value separately from ajaxurl for front end AJAX implementations
            jQuery.post("<?php echo site_url() ?>/wp-admin/admin-ajax.php", data, function(response) {
                alert('Got this from the server: ' + response);
            });
        }); 
     });
    
    $('.innerMainSlider').slick({
  slidesToShow: 1,
  arrows: false,
  autoplay: true,
  autoplaySpeed: 2000,
});
      
    $('.innerSecSlider').slick({
  slidesToShow: 1,
  arrows: false,
  autoplay: true,
  autoplaySpeed: 2000,
});

  </script>

<?php get_footer(); ?>