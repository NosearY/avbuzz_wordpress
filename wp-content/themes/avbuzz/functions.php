<?php
//adding thumbnail support
add_theme_support( 'post-thumbnails' ); 
set_post_thumbnail_size( 150, 150 );
/**
 *This functions outputs a navigation bar
 */
function wp_pagenavi() {
	global $wp_query;
	$max = $wp_query -> max_num_pages;
	if(!$current = get_query_var('paged')){
		$current = 1;
	}
	$args['base'] = str_replace(999999999,'%#%',get_pagenum_link(999999999));
    $args['total'] = $max;
    $args['current'] = $current;
    $args['prev_text'] = '<';
    $args['next_text'] = '>';
    if($max > 1){
        $pages = '<div class="wp-pagenavi">';
        echo $pages . paginate_links($args) . '</div>';
    }else{
        $pages = '<div class="wp-pagenavi">';
        echo $pages . $max . paginate_links($args) . '</div>';
    }
}

function avbuzz_article_footer(){

}

/*
* 
*/
function avbuzz_enqueue_assets(){
	//equeue scripts
	wp_enqueue_script('jquery' , get_template_directory_uri() . '/js/jquery-1.11.3.min.js');
	wp_enqueue_script('bootstrapminjs' , get_template_directory_uri() . '/js/bootstrap.js');
	//wp_enqueue_script('npmjs' , get_template_directory_uri() . '/js/npm.js');
	wp_enqueue_script('script' , get_template_directory_uri() . '/js/script.js');
	//enqueue style sheets
	wp_enqueue_style('bsmincss' , get_template_directory_uri() . '/css/bootstrap.min.css');
	wp_enqueue_style('bsthememincss' , get_template_directory_uri() . '/css/bootstrap-theme.css');
	wp_enqueue_style('style' , get_template_directory_uri() . '/style.css');
}

function avbuzz_enqueue_assets_forarticle(){
	//equeue scripts
	wp_enqueue_script('jquery' , get_template_directory_uri() . '/js/jquery-1.11.3.min.js');
	wp_enqueue_script('bootstrapminjs' , get_template_directory_uri() . '/js/bootstrap.js');
	//wp_enqueue_script('npmjs' , get_template_directory_uri() . '/js/npm.js');
	wp_enqueue_script('script' , get_template_directory_uri() . '/js/script.js');
	//enqueue style sheets
	wp_enqueue_style('bsmincss' , get_template_directory_uri() . '/css/bootstrap.min.css');
	wp_enqueue_style('bsthememincss' , get_template_directory_uri() . '/css/bootstrap-theme.css');
/*	wp_enqueue_style('style' , get_template_directory_uri() . '/style.css');*/
}

function avbuzz_ajax_pagination(){

}
