<?php get_header(); ?>

<!-- section-who-we-are.php -->
<section class="who-we-are">
  <div class="container">
    <h2><?php the_field('who_we_are_title'); ?></h2>
    <div class="who-we-are__content">
      <div class="who-we-are__text">
        <p><?php the_field('who_we_are_text'); ?></p>
      </div>
      <div class="who-we-are__video">
        <img src="<?php the_field('who_we_are_image'); ?>" alt="Our Team">
        <!-- Вставка видео, если есть -->
        <?php if (get_field('who_we_are_video')) : ?>
          <a href="<?php the_field('who_we_are_video'); ?>" class="video-play" target="_blank">▶</a>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>

<section class="global-service">
  <div class="container">
    <h2><?php the_field('global_service_title'); ?></h2>
    <div class="global-service__content">
      <div class="global-service__text">
        <p><?php the_field('global_service_text'); ?></p>
      </div>
      <div class="global-service__map">
        <img src="<?php the_field('global_service_map'); ?>" alt="Global Map">
      </div>
    </div>
    <div class="global-service__logos">
      <?php if (have_rows('client_logos')) : ?>
        <?php while (have_rows('client_logos')) : the_row(); ?>
          <img src="<?php the_sub_field('logo'); ?>" alt="Client Logo">
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>
</section>

<section class="our-customers">
  <div class="container">
    <h2><?php the_field('our_customers_title'); ?></h2>
    <div class="customer-types">
      <?php if (have_rows('customer_types')) : ?>
        <?php while (have_rows('customer_types')) : the_row(); ?>
          <div class="customer-type">
            <img src="<?php the_sub_field('icon'); ?>" alt="Type Icon">
            <p><?php the_sub_field('label'); ?></p>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>
</section>


<?php get_footer(); ?>
