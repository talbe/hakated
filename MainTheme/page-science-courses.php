<?php get_header(); ?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/style-art-and-culture-courses.css">

<div class="mainGrid">
    
<div class="row">
    <div class="soildLine">
    </div>
</div>
    
<div class="row">
    <div class="pageHeader">     
        <img class="centerHeaderPhoto" src="<?php bloginfo('stylesheet_directory'); ?>/img/STAINS/STAIN_8.png">
        <p class="headerText">
        קורסי מדע
        </p>
    </div>
</div>

<div class="row">

<div class="pageContent">
        
        <div class="mainContent">
            <div class="courseDivs">
            
            <?php
                
                $categories=get_categories(array( 'parent' => get_cat_ID( 'scienceCourses' ) ));
            
                foreach ($categories as $c) {
                    ?>
                    
                    <div class="courseDetails" style="cursor: pointer;"
            
            
                    <?php
                    $args = array('category' => get_cat_ID( $c->cat_name ) );

                    $posts_array = get_posts( $args );
                    
                    foreach ($posts_array as $p) 
                    {
                        
                        if ($p->post_title == 'course-url')
                        {
                            ?>
                                onclick="location.href='<?php echo $p->post_content; ?>'">
                            <?php
                        }
                    }
                    
                    foreach ($posts_array as $p) 
                    {
                        
                        if ($p->post_title == 'course-name')
                        {
                            ?><div class=courseNameText> 
                        
                            <?php echo $p->post_content; ?>
                            
                             </div> <?php
                        }
                    }
                    
                    foreach ($posts_array as $p) 
                    {
                        if ($p->post_title == 'course-lecturer')
                        {
                            ?> <div class=courselecturerText> 
                        
                            <?php echo $p->post_content; ?>
                            
                             </div> <?php
                        }
                    }
                    
                    foreach ($posts_array as $p) 
                    {
                        if ($p->post_title == 'course-content')
                        {
                            ?> <div class=coursecontentText> 
                        
                            <?php echo $p->post_content; ?>
                            
                             </div> <?php
                        }
                    }
                    
                    
                    ?>
                    </div> <?php
                }
            
            ?> 
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
                <div onclick="location.href='signin'"  class="signIn">
                    <img style="width:100%; height: 100%; position: absolute;" src="<?php bloginfo('stylesheet_directory'); ?>/img/STAINS/STAIN_7.png"/>
                    <p class="signInText">
                        להרשמה
                    </p>
                </div>
            </div>   
        
    </div>
    
</div>
    
</div>

<script type="text/javascript">
(function() {
       // your page initialization code here
       // the DOM will be available here
        var selected = document.getElementById("interest");
        selected.style.backgroundColor = "#9fae83";
        selected.style.color = "white";
    })();
</script>

<?php get_footer() ?> 