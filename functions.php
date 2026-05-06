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

function link_button(string $href, string $text): void
{
?>

  <a href="<?php echo $href ?>" class="py-2 px-4 rounded-lg bg-accent-500 text-whites-500 w-fit hover:bg-accent-700 transition-colors ease-out"><?php echo $text ?></a>

<?php
}

function category_card(string $href, string $src, string $alt, string $header, string $description) : void
{
?>

  <a href="<?php echo $href ?>" class="group relative overflow-hidden rounded-lg h-100 flex-1">
    <img src="<?php echo $src; ?>" alt="<?php echo $alt ?>" class="absolute w-full h-full object-cover -z-1">
    <div class="w-full h-full bg-whites-500/70 p-4">
      <div class="translate-y-75 transition-transform duration-500 ease-out group-hover:translate-y-0">
        <h3><?php echo $header ?></h3>
        <p class="mt-4"><?php echo $description ?></p>
      </div>
    </div>
  </a>

<?php
}

function featured_product_card(string $link, string $image_src, string $image_alt, string $title, string $excerpt, string $price): void
{
  if (empty($link) || empty($image_src)) return;
?>
  <a href="<?php echo esc_url($link); ?>" class="rounded-lg overflow-hidden group flex flex-col flex-1 max-w-125 h-125 bg-primary-100">
    <div class="overflow-hidden">
      <img src="<?php echo esc_url($image_src); ?>" alt="<?php echo esc_attr($image_alt); ?>" class="w-full h-auto group-hover:scale-125 transition-transform duration-300">
    </div>
    <div class="py-4 px-2 flex flex-col justify-between flex-1">
      <div>
        <h3><?php echo esc_html($title); ?></h3>
        <p><?php echo esc_html($excerpt); ?></p>
      </div>
      <span class="font-bold text-2xl mt-2"><?php echo esc_html($price); ?> تومان</span>
    </div>
  </a>
<?php
}

