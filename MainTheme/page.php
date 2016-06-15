<?php get_header(); ?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/page.css">

<div class="mainGrid">
    <div class="row">
        <div class="soildLine">
        </div>
    </div>
    
    <div class="row">
        <div class="courseName">
            <div class="interestsHeader">
                <p class="interestHeaderText">
                    תחומי עניין
                </p>
            </div>
            <div class="courseType">
                <p class="courseTypeText">
                תרבות ואמנות
                </p>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="content">
            <div class="mainContent">
                <div class="margined">
                    <div class="courseHeader">
                        <img class="courseHeaderImg" src="<?php bloginfo('stylesheet_directory'); ?>/img/STAINS/ART_2.png"/>
            <?php
                        $args = array('category' => get_cat_ID( 'page-'.get_query_var('pagename') ) );

                        $posts_array = get_posts( $args );

                        foreach ($posts_array as $p) 
                        {   
                            if ($p->post_title == 'page-header')
                            {
                                ?> 
                                    <div class="courseMainHeader">
                                        <?php echo $p->post_content; ?>
                                    </div>

                                <?php
                            }
                        }
                        
                        foreach ($posts_array as $p) 
                        {   
                            if ($p->post_title == 'page-lecturer')
                            {
                                ?> 
                                    <div class="courseLecturer">
                                        <?php echo $p->post_content; ?>
                                    </div>
                                <?php
                            }
                        }

                        foreach ($posts_array as $p) 
                        {
                            if ($p->post_title == 'page-lecturer-instituion')
                            {
                                ?> 
                                    <div class="lecturerinstitution">
                                        <?php echo $p->post_content; ?>
                                    </div>
                                </div>
                                <div class="courseContent">
                                <?php
                            }
                        }

                        foreach ($posts_array as $p) 
                        {   
                            if ($p->post_title == 'page-course-content')
                            {
                                ?> 
                                    <div class="classicParagraph">
                                        <?php echo $p->post_content; ?>
                                    </div>

                                <?php
                            }
                        }
                        
                        ?>
                           <div class="mainIssues">
                                :נושאים מרכזיים
                            </div>         
                        <?php
                                    
                        foreach ($posts_array as $p) 
                        {   
                            if ($p->post_title == 'page-main-issues')
                            {
                                ?> 
                                    <div class="classicParagraph">
                                        <?php echo $p->post_content; ?>
                                    </div>
                                </div>
                
                    
                                <?php
                            }
                        }
                                    
                $args = array('category' => get_cat_ID( 'course-details-'.get_query_var('pagename') ) );

                $posts_array = get_posts( $args );
            ?>   
                    <div class="courseInfo">
                        <div class="courseDownload">
                            <p class="downlaodText">
                                לחץ כאן
                                <br>
                                להורדת תכני
                                <br>
                                הקורס
                            </p>
                        </div>
                        <div class="courseDates">
                            <p class="firstcourseDates">
                        
                                <?php
                                foreach ($posts_array as $p) 
                                {   
                                    if ($p->post_title == 'firstcourseDates')
                                    {
                                        echo $p->post_content; 
                                    }
                                }
                                
                                ?>
                        
                            </p>
                            <p class="secondcourseDates">
                                  <?php
                                    foreach ($posts_array as $p) 
                                    {   
                                        if ($p->post_title == 'secondcourseDates')
                                        {
                                            echo $p->post_content; 
                                        }
                                    }
                                
                                ?>
                            </p>
                        </div>
                        <div class="horizontalLine">
                        </div>
                        <div class="courseDetails">
                            <div class="numOfappointments">
                                <p class="numOfappointmentsText1">
                                    :מספר מפגשים
                                </p>
                                <p class="numOfappointmentsText2">
                                    <?php
                                    foreach ($posts_array as $p) 
                                    {   
                                        if ($p->post_title == 'numOfappointments')
                                        {
                                            echo $p->post_content; 
                                        }
                                    }
                                
                                    ?>
                                </p>
                            </div>
                            <div class="verticalLine">
                            </div>
                            <div class="numOfappointments">
                                <p class="numOfappointmentsText1">
                                    :מחיר
                                <p class="numOfappointmentsText2">
                                     <?php
                                    foreach ($posts_array as $p) 
                                    {   
                                        if ($p->post_title == 'courseCost')
                                        {
                                            echo $p->post_content; 
                                        }
                                    }
                                
                                    ?>
                                </p>
                            </div>
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
                        <li><a href="<?php echo site_url('science') ; ?>"> מדע </a></li>
                        <li><a href="<?php echo site_url('art-and-culture-courses') ; ?>"> תרבות ואמנות</a></li>
                        <li><a href="<?php echo site_url('music') ; ?>">מפגשים מוסיקליים</a></li>
                        <li><a href="<?php echo site_url('friday') ; ?>">שישי בקתדרה</a></li>
                        <li><a href="<?php echo site_url('creative-write') ; ?>">כתיבה יצירתית</a></li>
                        <li><a href="<?php echo site_url('art-and-design') ; ?>">עיצוב ואמנויות</a></li>
                        <li><a href="<?php echo site_url('self-awareness') ; ?>">מודעות אישית וריפוי טבעי</a></li>
                        <li><a href="<?php echo site_url('body-culture') ; ?>">תנועה ותרבות הגוף</a></li>
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
</div>

<?php get_footer(); ?>