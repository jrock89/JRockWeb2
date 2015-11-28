<?php

  if ( ! isset( $content_width ) ){
    $content_width = 660;
  }

  function jrockweb_wp_setup() {

    load_theme_textdomain('jrockweb', get_template_directory() . '/languages');

    add_theme_support('post-thumbnails');

    add_theme_support('automatic-feed-links');
    add_theme_support('title-tag');

    // register custom navigation walker
    require_once('wp_bootstrap_navwalker.php');

    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'jrockweb' ),
        'footer' => __( 'Footer Menu', 'jrockweb' ),
    ) );


  }

  add_action('after_setup_theme', 'jrockweb_wp_setup');


  function rock_scripts(){
    // add styles
    wp_enqueue_style('bootstrap-core', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style('custom', get_template_directory_uri() . '/style.css');

    // add scripts
      wp_enqueue_script('main-js', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), true);


    if( is_singular()) wp_enqueue_script('comment-reply');

  }

  add_action('wp_enqueue_scripts', 'rock_scripts');

  // read more
  function new_excerpt_more( $more ) {
  	return '...';
  }
  add_filter('excerpt_more', 'new_excerpt_more');




  /**
   * Register our sidebars and widgetized areas.
   *
   */
  function arphabet_widgets_init() {

  	register_sidebar( array(
  		'name'          => 'Sidebar',
  		'id'            => 'sidebar_blog',
  		'before_widget' => '<div class="sidebar-module">',
  		'after_widget'  => '</div>',
  		'before_title'  => '<h4>',
  		'after_title'   => '</h4>',
  	) );

  }
  add_action( 'widgets_init', 'arphabet_widgets_init' );



  function featureText(){

    if ( is_front_page() ){
      the_field('feature_text');
    } elseif ( is_home() || is_single() ) {
      _e('Rock Theme Official Blog');
    } elseif( is_archive() ){
      _e('Rock Theme Official Blog');
      _e('<br>');
      single_term_title('Browsing: ');
      if( is_month() ){
        $monthNum = get_query_var('monthnum');
        $month = date('F', mktime(0,0,0,$monthNum));
        $year = get_query_var('year');

        echo 'Posts from ' . $month . ' ' . $year;
      }
    } elseif(is_page_template('page-news.php') || is_page_template('page-about.php') || is_page_template('page-contact.php')){
      bloginfo('name');
      _e('<br>');
      the_title();
    } elseif( is_404() ){
      _e('Whoops, were a little lost.');
    } elseif ( is_search() ) {
      _e('Rock Theme Official Blog');
      _e('<br>');
      printf(('Search results for: %s'), get_search_query());
    }
  }


  function quoteText(){
      the_field('quote_text');
  }

  function quoteAuthor(){
      the_field('quote_author');
  }

  function aboutPicture(){
      the_field('about_picture');
  }
  function aboutParagraph(){
      the_field('about_paragraph');
  }




  $args = array(
  	// 'width'         => 980,
  	// 'height'        => 60,
  	'default-image' => get_template_directory_uri() . '/images/lakebg.jpg',
    'uploads' => true,
  );
  add_theme_support( 'custom-header', $args );

?>
