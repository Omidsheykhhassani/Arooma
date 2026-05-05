<?php

function fitolife_enqueue_styles()
{
  wp_enqueue_style(
    'tailwindcss',
    get_template_directory_uri() . '/assets/css/dist/output.css',
    array(),
  );
}

function mytheme_excerpt_length($length)
{
  return 120;
}

add_action('wp_enqueue_scripts', 'fitolife_enqueue_styles');

add_filter('show_admin_bar', '__return_false');
add_filter('excerpt_length', 'mytheme_excerpt_length');

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