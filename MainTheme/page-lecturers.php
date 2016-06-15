<?php get_header(); ?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/style-lecturers.css">

<div class="mainGrid">
    
<div class="row">
    <div class="soildLine">
    </div>
</div>
    
<div class="row">
    <div class="mainPic">     
        <img class="centerHeaderPhoto" src="<?php bloginfo('stylesheet_directory'); ?>/img/images/lecturers/LECTURERS_1.png">
    </div>
</div>
    <script>
    function myFunction(elmnt,clr) {
        var all = document.getElementsByClassName("lecturerText");
        for (var i=0, max=all.length; i < max; i++) {
          all[i].style.color = '#474747';
        }
        
        elmnt.style.color = clr;
    }
    </script>
<div class="row">    
    <div class="pageContent">
        
        <div class="mainContent">
            <div class="contentHeader">
                <p class="ContentHeaderText">
                    מרצים ומנחים
                </p>
            </div>   
            <div class="content">
                <p class="lectureCategory" style="border-style: none; padding-top:0px">
                    מרצי סדרות עיוניות
                </p>
                <div class="allLecturers">
                
                
               <?php
                /*
                 * Loop through Categories and Display Posts within
                 */
                $post_type = 'post';

                // Get all the taxonomies for this post type
                $taxonomies = get_object_taxonomies( array( 'post_type' => $post_type ) );

                foreach( $taxonomies as $taxonomy ) :

                    // Gets every "category" (term) in this taxonomy to get the respective posts
                    $terms = get_terms( $taxonomy );

                    foreach( $terms as $term ) :
                        
                        if ($term->name == 'theoreticalSeries')
                        {
                            $args = array(
                                    'post_type' => $post_type,
                                    'posts_per_page' => -1,  //show all posts
                                    'tax_query' => array(
                                        array(
                                            'taxonomy' => $taxonomy,
                                            'field' => 'slug',
                                            'terms' => $term->slug,
                                        )
                                    )

                                );

                            $posts = new WP_Query($args);

                            if( $posts->have_posts() ): while( $posts->have_posts() ) : $posts->the_post(); 

                            if (get_the_title() =='lecturer-name')
                            {
                                ?> <div onclick="myFunction(this, '#BB492F')"  class="lecturerText" id="name-<?php echo get_the_category()[0]->term_id; ?>" >
                                            <?php the_content(); ?>
                                    </div> <?php
                            }
                            


                            endwhile; endif;
                        }
                    endforeach;

                endforeach; ?> 
                </div>
                <p class="lectureCategory">
                    מרצי סדרות עיצוב ואמנויות
                </p>
                <div class="allLecturers">
                <?php
                /*
                 * Loop through Categories and Display Posts within
                 */
                $post_type = 'post';

                // Get all the taxonomies for this post type
                $taxonomies = get_object_taxonomies( array( 'post_type' => $post_type ) );

                foreach( $taxonomies as $taxonomy ) :

                    // Gets every "category" (term) in this taxonomy to get the respective posts
                    $terms = get_terms( $taxonomy );

                    foreach( $terms as $term ) :
                        
                        if ($term->name == 'artAndDesignSeries')
                        {
                            $args = array(
                                    'post_type' => $post_type,
                                    'posts_per_page' => -1,  //show all posts
                                    'tax_query' => array(
                                        array(
                                            'taxonomy' => $taxonomy,
                                            'field' => 'slug',
                                            'terms' => $term->slug,
                                        )
                                    )

                                );

                            $posts = new WP_Query($args);

                            if( $posts->have_posts() ): while( $posts->have_posts() ) : $posts->the_post(); 

                            if (get_the_title() =='lecturer-name')
                            {
                                ?> <div onclick="myFunction(this, '#BB492F')"  class="lecturerText"  id="name-<?php echo get_the_category()[0]->term_id; ?>" >
                                    
                                            <?php the_content(); ?>
                                    </div> <?php
                            }
                            


                            endwhile; endif;
                        }
                    endforeach;

                endforeach; ?> 
                </div>
                <p class="lectureCategory">
                    מנחי תרבות הגוף
                </p>
                <div class="allLecturers">
                <?php
                /*
                 * Loop through Categories and Display Posts within
                 */
                $post_type = 'post';

                // Get all the taxonomies for this post type
                $taxonomies = get_object_taxonomies( array( 'post_type' => $post_type ) );

                foreach( $taxonomies as $taxonomy ) :

                    // Gets every "category" (term) in this taxonomy to get the respective posts
                    $terms = get_terms( $taxonomy );

                    foreach( $terms as $term ) :
                        
                        if ($term->name == 'bodyArt')
                        {
                            $args = array(
                                    'post_type' => $post_type,
                                    'posts_per_page' => -1,  //show all posts
                                    'tax_query' => array(
                                        array(
                                            'taxonomy' => $taxonomy,
                                            'field' => 'slug',
                                            'terms' => $term->slug,
                                        )
                                    )

                                );

                            $posts = new WP_Query($args);

                            if( $posts->have_posts() ): while( $posts->have_posts() ) : $posts->the_post(); 

                            if (get_the_title() =='lecturer-name')
                            {
                                ?> <div onclick="myFunction(this, '#BB492F')"  class="lecturerText"  id="name-<?php echo get_the_category()[0]->term_id; ?>" >
                                    
                                            <?php the_content(); ?>
                                    </div> <?php
                            }
                            


                            endwhile; endif;
                        }
                    endforeach;

                endforeach; ?> 
                </div>
            </div>
        </div>
        <div class="secondaryContent">
        <div style="margin-right: 10px;">
            
            <div class="lecturerHeader">
                <div class="lecturerTitleText">
                    <?php
                    /*
                     * Loop through Categories and Display Posts within
                     */
                    $post_type = 'post';

                    // Get all the taxonomies for this post type
                    $taxonomies = get_object_taxonomies( array( 'post_type' => $post_type ) );

                    foreach( $taxonomies as $taxonomy ) :

                        // Gets every "category" (term) in this taxonomy to get the respective posts
                        $terms = get_terms( $taxonomy );

                        foreach( $terms as $term ) :

                            if ($term->name == 'lecturers')
                            {
                                $args = array(
                                        'post_type' => $post_type,
                                        'posts_per_page' => -1,  //show all posts
                                        'tax_query' => array(
                                            array(
                                                'taxonomy' => $taxonomy,
                                                'field' => 'slug',
                                                'terms' => $term->slug,
                                            )
                                        )

                                    );

                                $posts = new WP_Query($args);

                                if( $posts->have_posts() ): while( $posts->have_posts() ) : $posts->the_post(); 

                                if (get_the_title() =='lecturer-title')
                                {
                                    ?> <div id="title-<?php echo  get_the_category()[0]->term_id; ?>" >
                                            <?php the_content(); ?>
                                        </div> <?php
                                }



                                endwhile; endif;
                            }
                        endforeach;

                    endforeach; ?>
                
                </div>        
            </div>
            
            <div class="lecturerContent">
                <div class="lecturerContentText">
                    <?php
                    /*
                     * Loop through Categories and Display Posts within
                     */
                    $post_type = 'post';

                    // Get all the taxonomies for this post type
                    $taxonomies = get_object_taxonomies( array( 'post_type' => $post_type ) );

                    foreach( $taxonomies as $taxonomy ) :
                
                        // Gets every "category" (term) in this taxonomy to get the respective posts
                        $terms = get_terms( $taxonomy );

                        foreach( $terms as $term ) :

                            if ($term->name == 'lecturers')
                            {
                                echo $term->ID;
                                $args = array(
                                        'post_type' => $post_type,
                                        'posts_per_page' => -1,  //show all posts
                                        'tax_query' => array(
                                            array(
                                                'taxonomy' => $taxonomy,
                                                'field' => 'slug',
                                                'terms' => $term->slug,
                                            )
                                        )

                                    );

                                $posts = new WP_Query($args);

                                if( $posts->have_posts() ): 
                                    while( $posts->have_posts() ) : $posts->the_post(); 

                                        if (get_the_title() =='lecturer-content')
                                        {
                                            ?> <div id="content-<?php echo get_the_category()[0]->term_id; ?>" >
                                                    <?php the_content(); ?>
                                                </div> <?php
                                        }

                                endwhile; endif;
                            }
                        endforeach;

                    endforeach; ?>
                
                </div>
            </div>
            
            <div onclick="location.href='signin'" class="signIn">
                <img style="width:100%; height: 100%; position: absolute;" src="<?php bloginfo('stylesheet_directory'); ?>/img/STAINS/STAIN_7.png"/>
                <p class="signInText">
                    להרשמה
                </p>
            </div>
            
            <div class="interestInTheKated">
                    <div class="soildLine2">
                    </div>
                    <p class="interestInTheKatedText">
                    תחומי עניין בתקדרה
                    </p>
                </div>
                <div class="interestsList">
                    <ul>
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

        </div>
            
        </div>
        
    </div>
</div> 
    
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/scripts/slick/slick.min.js"></script>    


<script>

    
  onload = function() {
    $("div[id^=content-]").each(function(){
        $(this).hide();
    });
      
    $("div[id^=title-]").each(function(){
        $(this).hide();
    });
      
    $( "div[id^=name-]" ).click(function(event) {
        
        $("div[id^=content-]").each(function(){
            $(this).hide();
        });

        $("div[id^=title-]").each(function(){
            $(this).hide();
        });
        
        str = 'title-' + event.target.id.replace("name-", "");
        $('#' + str).show();
        str = 'content-' + event.target.id.replace("name-", "");
        $('#' + str).show();
    });
      
  }
  
</script>

<script type="text/javascript">
(function() {
       // your page initialization code here
       // the DOM will be available here
        var selected = document.getElementById("lecturers");
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