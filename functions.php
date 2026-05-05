<?php

function arooma_enqueue_styles()
{
  wp_enqueue_style(
    'arooma-styles',
    get_template_directory_uri() . '/assets/css/dist/output.css',
    array(),
    null
  );
}

function arooma_enqueue_scripts()
{
  wp_enqueue_script(
    'arooma-main-js',
    get_template_directory_uri() . '/assets/js/main.js',
    array(),
    null,
    true
  );
}

function arooma_excerpt_length($length)
{
  return 120;
}

add_action('wp_enqueue_scripts', 'arooma_enqueue_styles');
add_action('wp_enqueue_scripts', 'arooma_enqueue_scripts');

add_filter('show_admin_bar', '__return_false');
add_filter('excerpt_length', 'arooma_excerpt_length');

add_theme_support('post-thumbnails');

function get_post_jalali_date()
{
  $timestamp = get_the_time('U');
  return jdate('j F Y', $timestamp);
}

function get_comment_jalali_date()
{
  $timestamp = get_comment_time('U');
  return jdate('j F Y', $timestamp);
}

function link_button(string $href, string $text)
{
?>

  <a href="<?php echo $href ?>" class="py-2 px-4 rounded-lg bg-accent-500 text-whites-500 w-fit hover:bg-accent-700 transition-colors ease-out"><?php echo $text ?></a>

<?php
}
