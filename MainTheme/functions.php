<?php

add_action( 'wp_ajax_my_ajax', 'my_ajax' );

function my_ajax() {
    wp_mail("hakatedra1@gmail.com", "notification", $_POST['data']);
	die( $_POST['data'] );
}

function prefix_ajax_add_foobar() {
    die('123');
}

function my_myme_types($mime_types){

    $mime_types['svg'] = 'image/svg+xml'; //Adding svg extension
    $mime_types['eot'] = 'application/vnd.ms-fontobject'; //Adding svg extension
    $mime_types['ttf'] = 'application/x-font-ttf'; //Adding svg extension
    $mime_types['woff'] = 'application/x-font-woff'; //Adding svg extension
    return $mime_types;

}

add_filter('upload_mimes', 'my_myme_types', 1, 1);


function MainTheme_resources()
{
	wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', MainTheme_resources);
remove_filter ('the_content',  'wpautop');
?>