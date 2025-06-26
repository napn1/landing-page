<?php get_header(); ?>

<!-- section-who-we-are. -->
<section class="who-we-are">
  <div class="container">
    <h2><?php the_field('top_title'); ?></h2>
    <div class="who-we-are__content">
      <div class="who-we-are__text">
        <p><?php the_field('top_left_text'); ?></p>
      </div>
      <div class="who-we-are__video">
        <img src="<?php the_field('top_preview_image'); ?>" alt="Our Team">
        <!-- Вставка видео, если есть -->
        <?php if (get_field('top_video_URL')) : ?>
          <a href="<?php the_field('top_video_URL'); ?>" class="video-play" target="_blank">▶</a>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>

<section class="global-service">
  <div class="container global-wrap">
    <h2><?php the_field('second_title'); ?></h2>
         <div class="global-service__text">
        <p><?php the_field('second_right_text'); ?></p>
      </div>
    <div class="global-service__content">
      <div class="global-service__map">
       <?php 
$image_id = get_field('second_image');
if ($image_id) {
    $image_url = wp_get_attachment_image_url($image_id, 'full'); // или нужный размер
    echo '<img src="' . esc_url($image_url) . '" alt="Global Map">';
}
?>

      </div>
<div class="global-service__logos">
    <?php 
    $images = get_field('client_logos');
    if ($images) : 
        foreach ($images as $image) : ?>
            <img src="<?php echo esc_url($image['url']); ?>" 
                 alt="<?php echo esc_attr($image['alt']); ?>"
                 width="<?php echo esc_attr($image['width']); ?>"
                 height="<?php echo esc_attr($image['height']); ?>">
        <?php endforeach; 
    endif; 
    ?>
</div>  
    </div>
  
  </div>
</section>

<section class="our-customers">
  <div class="container">
    <h2><?php the_field('3rd_title'); ?></h2>
    <div class="customers-text"><p><?php the_field('3rd_text'); ?></p></div>
      <div class="customer-grid">
      <?php if (have_rows('customer_types')): ?>
        <?php while (have_rows('customer_types')): the_row(); 
          $label = get_sub_field('label');
          $icon = get_sub_field('icon');
          $highlighted = get_sub_field('highlighted');
        ?>
          <div class="customer-card <?php echo $highlighted ? 'highlighted' : ''; ?>">
            <?php if ($icon): ?>
              <img src="<?php echo esc_url($icon); ?>" alt="<?php echo esc_attr($label); ?>" class="card-icon" />
            <?php endif; ?>
            <span class="card-label"><?php echo esc_html($label); ?></span>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>
</section>

<section class="leadership">
  <div class="container leadership-bg">
    <h2 class="section-title">Leadership</h2>
    <div class="leaders-grid_container">
    <div class="leaders-grid">
      <?php if (have_rows('leadership_team')): ?>
        <?php while (have_rows('leadership_team')): the_row(); 
          $photo = get_sub_field('photo');
          $name = get_sub_field('name');
          $position = get_sub_field('position');
          $linkedin = get_sub_field('linkedin');
        ?>
        <div class="leader-block">
          <div class="leader-card">
            <div class="leader-frame"> <div class="circle-frame">
            <div class="leader-photo">
              <img src="<?php echo esc_url($photo); ?>" alt="<?php echo esc_attr($name); ?>">
            </div>
            </div>
      </div>
            <div class="leader-info">
              <strong><?php echo esc_html($name); ?></strong><br>
              <span><?php echo esc_html($position); ?></span>
            </div>
          </div>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
      </div>
  </div>
</section>
      <!---->

<section class="travel-tech-section">
<div class="container travel-wrap">
  <div class="heading-wrap">
    <h2><?php the_field('4th_title'); ?></h2>
    <p><?php the_field('4th_text'); ?></p>
  </div>
    <div class="turnkey-products">
        <a href="#" class="turnkey-button"><?php the_field('news_heading'); ?></a>
        <div class="news-blocks">
            <?php
            $args = array('post_type' => 'post', 'posts_per_page' => 3);
            $query = new WP_Query($args);
            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post();
            ?>
                <div class="news-block">
                    <div class="block-image"><?php the_post_thumbnail('medium'); ?></div>
                    <div class="block-content">
                        <h3><?php the_title(); ?></h3>
                        <p><?php the_excerpt(); ?></p>
                        <a href="<?php the_permalink(); ?>" class="learn-more">Learn More</a>
                    </div>
                </div>
            <?php endwhile; wp_reset_postdata(); endif; ?>
        </div>
    </div>
            </div>
</section>

<section class="testimonials-section">
    <h2><?php the_field('slider_title'); ?></h2>
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <?php
            // Получаем данные из ACF
            if (have_rows('client_testimonial')):
                while (have_rows('client_testimonial')) : the_row();
                    $image = wp_get_attachment_image_url(get_sub_field('testimonial_image'), 'medium');
                    $name = get_sub_field('testimonial_name');
                    $title = get_sub_field('testimonial_title');
                    $company = wp_get_attachment_image_url(get_sub_field('testimonial_company'), 'medium');
                    $text = get_sub_field('testimonial_text');
            ?>
            <div class="swiper-slide">
    <div class="testimonial-card">
        <div class="testimonial-content">
       
            <img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr($name); ?>" class="testimonial-image">
               <div class="testimonial-person">
             <h4><?php echo esc_html($name); ?></h4>
              <p class="title"><?php echo esc_html($title); ?></p>
             <?php $company_logo = wp_get_attachment_image_url(get_sub_field('testimonial_company'), 'full'); ?>
            </div>
            <div class="testimonial-logo">
             <img src="<?php echo esc_url($company_logo); ?>" alt="Company Logo">
            </div>
            <div class="testimonial-info">
                <p class="text"><?php echo esc_html($text); ?></p>
            </div>
        </div>
    </div>
</div>
            <?php endwhile; endif; ?>
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
</section>

<?php get_footer(); ?>
