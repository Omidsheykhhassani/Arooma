<?php get_header(); ?>
<main>
  <!-- Hero Header -->
  <header class="flex flex-wrap justify-center items-end h-screen w-full">
    <section class="header-part">
      <img src="<?php echo get_template_directory_uri() ?>/assets/images/hero-image.png" alt="hero image" class="hero-content">
    </section>
    <section class="header-part">
      <div class="hero-content flex flex-col gap-12">
        <h1>آروما</h1>
        <h2>با شمع های ما رایحه آرامش بخش رو به خونه هاتون بیارید</h2>
        <p>شمع های عطری با رایحه های مختلف رو از وبسایت ما خریداری کنید تا محیط زندگی خودتون رو سرشار از عطر خوش و آرامش بخش کنید.</p>
        <?php link_button("#", "مشاهده محصولات") ?>
      </div>
    </section>
    <section class="w-full h-[10vh] py-12 px-2 flex justify-center items-center">
      <a href="#" id="scroll-btn" class="w-full max-w-8 flex flex-col">
        <img src="<?php echo get_template_directory_uri() ?>/assets/images/arrow-down.png" alt="down arrow" class="down-arrow">
        <img src="<?php echo get_template_directory_uri() ?>/assets/images/arrow-down.png" alt="down arrow" class="down-arrow -mt-3">
      </a>
    </section>
  </header>
  <section class="section-container">
    <div class="section flex lg:gap-8 gap-4 md:flex-row flex-col">
      <?php

      $candles_category_image = get_template_directory_uri() . "/assets/images/candles-category-image.jpg";
      $gift_category_image = get_template_directory_uri() . "/assets/images/gift-category-image.webp";
      $material_category_image = get_template_directory_uri() . "/assets/images/material-category-image.jpg";

      category_card("#", $candles_category_image, "candles category image", "شمع ها", "مشاهده همه شمع ها با رایحه های مختلف و اشکال مختلف.");
      category_card("#", $gift_category_image, "gift category image", "بسته های هدیه", "مشاهده همه بسته های هدیه. هر بسته شامل شمع های عطری، گل های رزینی، و غیره میشود.");
      category_card("#", $material_category_image, "material category image", "وسایل ساخت", "مشاهده تمام وسایل ساخت شمع عطری؛ که شامل پارافین، روغن های عطری، قالب ها، و غیره میشود.");

      ?>
    </div>
  </section>
  <section class="section-container">
    <div class="section rounded-lg bg-whites-700 flex gap-4">
      <?php
      if (function_exists('wc_get_products')) {
        $products = wc_get_products(array(
          'limit'    => 4,
          'status'   => 'publish',
          'featured' => true,
        ));

      if (!empty($products)) :
        echo '<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">';

        foreach ($products as $product) :
          featured_product_card(
            link: $product->get_permalink(),
            image_src: wp_get_attachment_image_url($product->get_image_id(), 'medium_large'),
            image_alt: $product->get_title(),
            title: $product->get_name(),
            excerpt: wp_trim_words($product->get_short_description(), 15),
            price: (float) $product->get_price()
          );
        endforeach;

        echo '</div>';
      endif;
      ?>
    </div>
  </section>
</main>
<?php get_footer(); ?>