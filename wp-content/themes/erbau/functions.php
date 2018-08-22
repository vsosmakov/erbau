<?php
function lp_styles()
{
  wp_enqueue_style('reset', get_template_directory_uri() . '/assets/css/reset.css');
  wp_enqueue_style('owl.carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css');
  wp_enqueue_style('jquery.fancybox.min', get_template_directory_uri() . '/assets/css/jquery.fancybox.min.css');
  wp_enqueue_style('jquery-ui.min', get_template_directory_uri() . '/assets/css/jquery-ui.min.css');
  wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/main.css');
  wp_deregister_script('jquery');
  wp_register_script('jquery', get_template_directory_uri() . '/assets/js/jquery-2.2.4.min.js');
  wp_enqueue_script('jquery');
  wp_enqueue_script('owl.carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'));
  wp_enqueue_script('jquery-ui.min', get_template_directory_uri() . '/assets/js/jquery-ui.min.js', array('jquery'));
  wp_enqueue_script('jquery.validate', get_template_directory_uri() . '/assets/js/jquery.validate.js', array('jquery'));
  wp_enqueue_script('jquery.mask.min', get_template_directory_uri() . '/assets/js/jquery.mask.min.js', array('jquery'));
  wp_enqueue_script('jquery.lazyload.min', get_template_directory_uri() . '/assets/js/jquery.lazyload.min.js', array('jquery'));
  wp_enqueue_script('jquery.ui.touch-punch.min', get_template_directory_uri() . '/assets/js/jquery.ui.touch-punch.min.js', array('jquery'));
  wp_enqueue_script('jquery.fancybox.min', get_template_directory_uri() . '/assets/js/jquery.fancybox.min.js', array('jquery'));
  wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'lp_styles');
/**
 * Добавляет секции, параметры и элементы управления (контролы) на страницу настройки темы
 */


function lading_customize_register($customize)
{
  $customize->add_panel(
    'landing-setting-panel',
    array(
      'priority' => 10,
      'capability' => 'edit_theme_options',
      'title' => 'Настройка шаблона',
    )
  );
  /**
   *
   * Первый экран
   **/
  $customize->add_section(
    'landing-setting',
    array(
      'title' => 'Основные настройки',
      'priority' => 35,
      'panel' => 'landing-setting-panel',
    )
  );
  $customize->add_setting(
    'landing-setting-phone',
    array(
      'default' => '+7 999 999 99 99'
    )
  );
  $customize->add_control(
    'landing-setting-phone',
    array(
      'label' => 'Номер телефона',
      'section' => 'landing-setting',
      'type' => 'text'
    )
  );
  /* Option list of all post */

  $construction_landing_page_options_posts = array();

  $construction_landing_page_options_posts_obj = get_posts( 'posts_per_page=-1' );

  $construction_landing_page_options_posts[''] = __( 'Выберите пост', 'construction-landing-page' );

  foreach ( $construction_landing_page_options_posts_obj as $posts ) {

    $construction_landing_page_options_posts[$posts->ID] = $posts->post_title;

  }



  /* Option list of all post/page */

  $construction_landing_page_options_posts_pages     = array();

  $construction_landing_page_options_posts_pages_obj = get_posts( array( 'posts_per_page'=>'-1','post_type'=>array('page','post') ) );

  $construction_landing_page_options_posts_pages[''] = __( 'Выберите пост/страницу', 'construction-landing-page' );

  foreach ( $construction_landing_page_options_posts_pages_obj as $construction_landing_page_posts ) {

    $construction_landing_page_options_posts_pages[$construction_landing_page_posts->ID] = $construction_landing_page_posts->post_title;

  }



  /* Option list of all page */

  $construction_landing_page_options_pages     = array();

  $construction_landing_page_options_pages_obj = get_posts( 'post_type=page&posts_per_page=-1' );

  $construction_landing_page_options_pages[''] = __( 'Выберите страницу', 'construction-landing-page' );

  foreach ( $construction_landing_page_options_pages_obj as $construction_landing_page_pages ) {

    $construction_landing_page_options_pages[$construction_landing_page_pages->ID] = $construction_landing_page_pages->post_title;

  }
  function construction_landing_page_sanitize_select( $input, $setting ){
    // Ensure input is a slug.
    $input = sanitize_key( $input );

    // Get list of choices from the control associated with the setting.
    $choices = $setting->manager->get_control( $setting->id )->choices;

    // If the input is a valid key, return it; otherwise, return the default.
    return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
  }
}
function get_image($name, $w)
{
  $image_url = get_theme_mod($name);
  $image_id = attachment_url_to_postid($image_url);
  if ($image_id) {
    $image_url = wp_get_attachment_image($image_id, $w);
  }
  return $image_url;
}
function new_excerpt_length($length) {
  return 20;
}
add_filter('excerpt_length', 'new_excerpt_length');
add_filter('excerpt_more', function($more) {
  return '...';
});
add_action('customize_register', 'lading_customize_register');
add_theme_support('post-thumbnails');
add_image_size('header', 1920, 422, true);
add_image_size('case-img', 478, 357, true);
add_image_size('small-img', 65, 50, true);
add_image_size('cert-img', 181, 256, true);
add_image_size('factory-img', 808, 509, true);
add_filter('image_size_names_choose', 'true_new_image_sizes');
function true_new_image_sizes($sizes)
{
  $addsizes = array(
    "true-fullwd" => 'По ширине контента'
  );
  $newsizes = array_merge($sizes, $addsizes);
  return $newsizes;
};
?>
