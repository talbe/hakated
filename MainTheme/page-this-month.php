<?php get_header(); ?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/style-this-month.css">

<div class="mainGrid">

    <div class="solidLine"></div>
    
    <div class="pageHeader">
        <div class="headerTextDiv">
            <img style="height: 80%" src="<?php bloginfo('stylesheet_directory'); ?>/img/STAINS/STAIN_9.png">
            <p class="headerText">החודש בקתדרה</p>
        </div>
        <img class="centerHeaderPhoto" src="<?php bloginfo('stylesheet_directory'); ?>/img/images/this_month/month_static_pic.png">
        <div class="mainSlider">     
            <div class="innerMainSlider" >
              <div><img class="mainSliderPic" src="<?php bloginfo('stylesheet_directory'); ?>/img/images/this_month/month_slider_1_pic.png"></div>
              <div><img class="mainSliderPic" src="<?php bloginfo('stylesheet_directory'); ?>/img/images/this_month/month_slider_2_pic.png"></div>
            <div><img class="mainSliderPic" src="<?php bloginfo('stylesheet_directory'); ?>/img/images/this_month/month_slider_3_pic.png"></div>
            </div>
        </div>
    </div>
    
    <div class="pageContent">
        
        <div class="mainContent">
            <div class="margined">  
            <div class="contentHeader">
                <p class="ContentHeaderText">
                    <?php
                        $content_post = get_posts( array( 'name' => 'this-month-header' ) );
                        if( count($content_post) )
                        {
                            $content = $content_post[0]->post_content;
                            // do whatever you want
                            echo $content;
                        }
                    ?>
                </p>
            </div>   
            <div class="content">
                
                <div class="mainPosts">
                <?php

                    $categories=get_categories(array( 'parent' => get_cat_ID( 'MainThisMonth' ) ));

                    foreach ($categories as $c) {
                        ?>

                        <?php
                        $args = array('category' => get_cat_ID( $c->cat_name ) );
                        $posts_array = get_posts( $args );

                        foreach ($posts_array as $p) 
                        {
                            if ($p->post_title == 'post-url')
                            {
                                ?> 
                                    <div class="postDetails" onclick="location.href='<?php echo $p->post_content;?>'">
                                        
                                <?php
                            }
                        }

                        foreach ($posts_array as $p) 
                        {
                            if ($p->post_title == 'post-title')
                            {
                                ?> 
                                    <div class="mainPostTitleText">
                                <?php
                                echo $p->post_content; 
                                ?>
                                    </div>
                                <?php
                            }
                        }

                        foreach ($posts_array as $p) 
                        {
                            if ($p->post_title == 'post-content')
                            {
                                ?> 
                                    <div class="mainPostContentText">
                                <?php
                                echo $p->post_content; 
                                ?>
                                    </div>
                                <?php
                            }
                        }


                        ?>
                        </div> <?php
                    }

                ?> 
                </div>
                
                <div class="secondaryPosts">
                    
                    <p class="secondaryPostsTitleText"  style="margin-top: 60px;">
                        מפגשי חודש פברואר
                    </p>
                <?php

                    $categories=get_categories(array( 'parent' => get_cat_ID( 'SecondaryThisMonth' ) ));

                    foreach ($categories as $c) {
                        ?>

                        <?php
                        $args = array('category' => get_cat_ID( $c->cat_name ) );
                        $posts_array = get_posts( $args );

                        foreach ($posts_array as $p) 
                        {
                            if ($p->post_title == 'post-url')
                            {
                                ?> 
                                    <div class="postDetails" onclick="location.href='<?php echo $p->post_content;?>'">
                                        
                                <?php
                            }
                        }

                        foreach ($posts_array as $p) 
                        {
                            if ($p->post_title == 'post-title')
                            {
                                ?> 
                                    <div style="margin-top:30px;" class="mainPostTitleText">
                                <?php
                                echo $p->post_content; 
                                ?>
                                    </div>
                                <?php
                            }
                        }

                        foreach ($posts_array as $p) 
                        {
                            if ($p->post_title == 'post-content')
                            {
                                ?> 
                                    <div class="mainPostContentText" style="border-bottom-style: solid; border-bottom-color: #bc4519; border-bottom-width: 1px; padding-bottom: 10px;">
                                <?php
                                echo $p->post_content; 
                                ?>
                                    </div>
                                <?php
                            }
                        }


                        ?>
                        </div> <?php
                    }

                ?> 
                </div>
                
            </div>
            </div>
        </div>
        <div class="secondaryContent">
                <div class="interestInTheKated">
                    <div class="soildLine2">
                    </div>
                    <p class="interestInTheKatedText">
                    תחומי עניין בתקדרה
                    </p>
                </div>
                <div class="interestsList">
                    <ul style="interestsList">
                        <li><a href="<?php echo site_url('science-courses') ; ?>"> מדע </a></li>
                        <li><a href="<?php echo site_url('art-and-culture-courses') ; ?>"> תרבות ואמנות</a></li>
                        <li><a href="<?php echo site_url('musical-meetings-courses') ; ?>">מפגשים מוסיקליים</a></li>
                        <li><a href="<?php echo site_url('katedra-friday-courses') ; ?>">שישי בקתדרה</a></li>
                        <li><a href="<?php echo site_url('creative-writing-courses') ; ?>">כתיבה יצירתית</a></li>
                        <li><a href="<?php echo site_url('design-and-art-courses') ; ?>">עיצוב ואמנויות</a></li>
                        <li><a href="<?php echo site_url('natural-treatment-courses') ; ?>">מודעות אישית וריפוי טבעי</a></li>
                        <li><a href="<?php echo site_url('body-art-courses') ; ?>">תנועה ותרבות הגוף</a></li>
                    </ul>
                </div>
                <div onclick="location.href='signin'" class="signIn">
                    <img style="width:100%; height: 100%; position: absolute;" src="<?php bloginfo('stylesheet_directory'); ?>/img/STAINS/STAIN_7.png"/>
                    <p class="signInText">
                        להרשמה
                    </p>
                </div>
            </div> 
        
    </div>
    
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/scripts/slick/slick.min.js"></script>    

<script type="text/javascript">
(function() {
       // your page initialization code here
       // the DOM will be available here
        var selected = document.getElementById("this");
        selected.style.backgroundColor = "#9fae83";
        selected.style.color = "white";
    })();
</script>   

<script type="text/javascript">
    $('.innerMainSlider').slick({
  slidesToShow: 1,
  arrows: false,
  autoplay: true,
  autoplaySpeed: 2000,
});
  </script>

<?php get_footer(); ?>