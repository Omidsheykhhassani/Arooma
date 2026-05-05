<?php get_header(); ?>
<main class="flex justify-center items-center h-screen">
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
</main>
<?php get_footer(); ?>