<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width">
	<title> <?php bloginfo('name'); ?> </title>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/style.css" media="all">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/scripts/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/scripts/slick/slick-theme.css"/>
	<?php wp_head(); ?>
</head>
    <title> כותרת </title>
   
<p class="onconstruct">
    האתר ברזולוציית מובייל בבנייה
</p>
<body <?php  body_class()?> >
<div class="bla">
<nav>
	<ul>
        <div class="row">
			<li class="leftPhotos" > 
				<div class="negishutMenuDiv"  > 
					<img class="negishutImg" src="<?php bloginfo('stylesheet_directory'); ?>/img/EYE.png" alt="yedionImg"/>
					<p class="negishutText"> כלי <br> נגישות </p>
				</div>
                <div class="yedionMenuDiv"> 
					<img class="yedionImg" src="<?php bloginfo('stylesheet_directory'); ?>/img/YEDION.png" alt="yedionImg" />
					<p class="yedionDownloadText" > ידיעון <br> להורדה </p>
                </div>
			</li>
			<li class="navOption"><a id="signin" href="signin">הרשמה</a></li>
			<li class="navOption"><a id="contact" href="contact">צור קשר</a></li>
			<li class="navOption"><a id="this" href="<?php echo site_url('this-month') ; ?>">החודש</a></li>
			<li class="navOption"><a id="lecturers" href="<?php echo site_url('lecturers') ; ?>">מרצים</a></li>
			<li class="navOption">
				<div class="dropdown">
				  <button id="interest" class="dropbtn">תחומי עניין</button>
				  <div class="dropdown-content">
					<a href="<?php echo site_url('science-courses') ; ?>"><p style="margin-right:10px">מדע</p></a>
					<a href="<?php echo site_url('art-and-culture-courses') ; ?>"><p style="margin-right:10px">תרבות ואמנות</p></a>
					<a href="<?php echo site_url('musical-meetings-courses') ; ?>"><p style="margin-right:10px">מפגשים מוסיקליים</p></a>
					<a href="<?php echo site_url('katedra-friday-courses') ; ?>"><p style="margin-right:10px">שישי בקתדרה</p></a>
					<a href="<?php echo site_url('creative-writing-courses') ; ?>"><p style="margin-right:10px">כתיבה יצירתית</p></a>
					<a href="<?php echo site_url('design-and-art-courses') ; ?>"><p style="margin-right:10px">עיצוב ואמנויות</p></a>
					<a href="<?php echo site_url('natural-treatment-courses') ; ?>"><p style="margin-right:10px">מודעות אישית וריפוי טבעי</p></a>
					<a href="<?php echo site_url('body-art-courses') ; ?>"><p style="margin-right:10px">תנועה ותרבות הגוף</p></a>
				  </div>
				</div>
			</li>
			<li class="navOption"><a id="about" href="<?php echo site_url('about') ; ?>">אודות</a></li>
			<li style="cursor: pointer;" onclick="location.href='http://ec2-52-11-214-0.us-west-2.compute.amazonaws.com/'" class="hakatedraLogoOption">
                <img class="hakatedraLogoImg" src="<?php bloginfo('stylesheet_directory'); ?>/img/logo_katedera.png" alt="hakatedraLogo" />
            </li> 
            <li class="MobileMenu">
                <div class="hamburger">
                    <hr style:"border-style: solid;">
                    <hr style:"border-style: solid; margin-top:10px; color:black;">
                    <hr> 
                </div>
                <div class="mobileMenuText">
                    <p>
                        תפריט ראשי
                    </p>
                </div>
            </li>
			<div class="mainSearch">
                <div class="row" >
                    <img class="migvanimLogo" src="<?php bloginfo('stylesheet_directory'); ?>/img/LOGO_MIGVANIM.png" />
                    <input class="textbox"type="text"> 
                    <img style="position: relative; top: 10px; left:3px;" src="<?php bloginfo('stylesheet_directory'); ?>/img/SEARCH_ICON.png" />
                </div>
            </div>
		</div>
	</ul>
	
	
</nav>