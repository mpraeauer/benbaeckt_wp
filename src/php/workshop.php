<?php
/*
Template Name: Workshop Template
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ben bäckt!</title>
    <?php wp_head(); ?>
</head>
<?php
  $post = get_page_by_path('team', OBJECT, 'post');
  $thumbnail_id = get_post_thumbnail_id($post->ID);
  $thumbnail_url = wp_get_attachment_url($thumbnail_id);
?>
<body id="workshopBackground" style="background-image:url(<?php echo $thumbnail_url ?>)">
<?php wp_body_open(); ?>
    <header>
            <a href="./index.html">
                <h1><span class="uppercase">Ben</span>bäckt!</h1>
            </a>
            <nav id="mainnav">
                <button id="hamburger" class="closed">
                    <span class="line-1"></span>
                    <span class="line-3"></span>
                </button>
                <?php
                  wp_nav_menu(array(
                    'theme_location' => 'Navigation',
                    'container' => false
                  )); 
                ?>
            </nav>
    </header>
    <main>
       <section id="workshopPage">
        <div class="grid" >
          <div class="grid1"><span class="headerline"></span></div>
          <div class="grid2">
            <div class="gridhelp">
              <?php
                $workshops = new WP_Query(array('name' => 'workshoppage'));
                if ($workshops->have_posts()) :
                while ($workshops->have_posts()) : $workshops->the_post(); 
              ?>
              <p class="super-headline"><?php echo get_post_custom_values('superheadline')[0]; ?></p>
              <h2><?php echo get_post_custom_values('header_workshoppage')[0]; ?></h2> 
                </div>
                </div>
          <div class="grid3"><span class="headerline"></span></div>
        </div>
        <p class="text"><?php echo get_post_custom_values('text_workshoppage')[0]; ?></p>
        <?php endwhile; ?>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
        
              <div class="mastergrid">
              <?php
                $post = get_page_by_path('brotbacken', OBJECT, 'post');
                $thumbnail_id = get_post_thumbnail_id($post->ID);
                $thumbnail_url = wp_get_attachment_url($thumbnail_id);
              ?>
              <div class="image1" style="background-image:url(<?php echo $thumbnail_url ?>)"></div>
              <?php
                $workshops = new WP_Query(array('name' => 'workshoppage'));
                if ($workshops->have_posts()) :
                while ($workshops->have_posts()) : $workshops->the_post(); 
              ?>
                <div class="container1">
                  <h3><?php echo get_post_custom_values('header_workshop')[0]; ?></h3>
                  <p><?php echo get_post_custom_values('text_workshop')[0]; ?></p>
                  <p><?php echo get_post_custom_values('date_workshop')[0]; ?></p>
                  <p>
                    <?php echo get_post_custom_values('contact_workshop')[0]; ?>
                    <u><?php echo get_post_custom_values('email_workshop')[0]; ?></u>
                  </p>
                </div>
                <div class="container2">
                <h3><?php echo get_post_custom_values('header_workshop')[1]; ?></h3>
                  <p><?php echo get_post_custom_values('text_workshop')[1]; ?></p>
                  <p><?php echo get_post_custom_values('date_workshop')[1]; ?></p>
                  <p>
                    <?php echo get_post_custom_values('contact_workshop')[1]; ?>
                    <u><?php echo get_post_custom_values('email_workshop')[1]; ?></u>
                    <?php endwhile; ?>
                    <?php endif; ?>
                    <?php wp_reset_postdata(); ?>
                  </p>
                </div>
                <?php
                  $post = get_page_by_path('keinezeit', OBJECT, 'post');
                  $thumbnail_id = get_post_thumbnail_id($post->ID);
                  $thumbnail_url = wp_get_attachment_url($thumbnail_id);
                ?>
                <div class="image2" style="background-image:url(<?php echo $thumbnail_url ?>)"></div>
                <?php
                  $post = get_page_by_path('weckerl', OBJECT, 'post');
                  $thumbnail_id = get_post_thumbnail_id($post->ID);
                  $thumbnail_url = wp_get_attachment_url($thumbnail_id);
                ?>
                <div class="image3" style="background-image:url(<?php echo $thumbnail_url ?>)"></div>
                <div class="container3">
                <?php
                  $workshops = new WP_Query(array('name' => 'workshoppage'));
                  if ($workshops->have_posts()) :
                  while ($workshops->have_posts()) : $workshops->the_post(); 
                ?>
                <h3><?php echo get_post_custom_values('header_workshop')[2]; ?></h3>
                  <p><?php echo get_post_custom_values('text_workshop')[2]; ?></p>
                  <p><?php echo get_post_custom_values('date_workshop')[2]; ?></p>
                  <p>
                    <?php echo get_post_custom_values('contact_workshop')[2]; ?>
                    <u><?php echo get_post_custom_values('email_workshop')[2]; ?></u>
                  </p>
                </div>
              </div>
              <?php endwhile; ?>
              <?php endif; ?>
              <?php wp_reset_postdata(); ?>
            </section>
    </main>
    <?php get_footer(); ?>