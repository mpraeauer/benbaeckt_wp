<?php
/*
Template Name: Startseite Template
*/
?>

    <?php get_header(); ?>
    <main>
        <section id="workshop">
          <div class="grid" >
            <span class="grid1"><span class="headerline"></span></span>
            <span class="grid2">
              <span class="gridhelp">
              <?php
                $startseite = new WP_Query(array('name' => 'startseite'));
                if ($startseite->have_posts()) :
                while ($startseite->have_posts()) : $startseite->the_post(); 
              ?>
              <p class="super-headline"><?php echo get_post_custom_values('superheadline')[0]; ?></p>
              <h2><?php echo get_post_custom_values('header')[0]; ?></h2>
              <?php endwhile; ?>
              <?php endif; ?>
              <?php wp_reset_postdata(); ?>
              </span>
            </span>
            <span class="grid3"><span class="headerline"></span></span>
          </div>
            <div class="mastergrid">
              <?php
                $post = get_page_by_path('brotbacken', OBJECT, 'post');
                $thumbnail_id = get_post_thumbnail_id($post->ID);
                $thumbnail_url = wp_get_attachment_url($thumbnail_id);
              ?>
              <div class="image1" style="background-image:url(<?php echo $thumbnail_url ?>)"></div>
              <div class="container1">
                <?php
                  $startseite = new WP_Query(array('name' => 'startseite'));
                  if ($startseite->have_posts()) :
                  while ($startseite->have_posts()) : $startseite->the_post(); 
                ?>
                <h3><?php echo get_post_custom_values('header_workshop')[0]; ?></h3>
                <p><?php echo get_post_custom_values('text_short_workshop')[0]; ?></p>
                <?php endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
                <?php $workshop = get_page_by_path('workshop');
                $link = get_permalink($workshop) ?>
                <a class="button" href="<?php echo $link ?>">zum Workshop</a>
              </div>
              <div class="container2">
              <?php
                  $startseite = new WP_Query(array('name' => 'startseite'));
                  if ($startseite->have_posts()) :
                  while ($startseite->have_posts()) : $startseite->the_post(); 
                ?>
                <h3><?php echo get_post_custom_values('header_workshop')[1]; ?></h3>
                <p><?php echo get_post_custom_values('text_short_workshop')[1]; ?></p>
                <?php endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
                <?php $workshop = get_page_by_path('workshop');
                $link = get_permalink($workshop) ?>
                <a class="button" href="<?php echo $link ?>">zum Workshop</a>
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
                  $startseite = new WP_Query(array('name' => 'startseite'));
                  if ($startseite->have_posts()) :
                  while ($startseite->have_posts()) : $startseite->the_post(); 
                ?>
                <h3><?php echo get_post_custom_values('header_workshop')[2]; ?></h3>
                <p><?php echo get_post_custom_values('text_short_workshop')[2]; ?></p>
                <?php endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
                <?php $workshop = get_page_by_path('workshop');
                $link = get_permalink($workshop) ?>
                <a class="button" href="<?php echo $link ?>">zum Workshop</a>
              </div>
            </div>
        </section>
        <section id="about">
          <div class="grid" >
            <span class="grid1"><span class="headerline"></span></span>
            <span class="grid2">
              <span class="gridhelp">
              <?php
                $startseite = new WP_Query(array('name' => 'startseite'));
                if ($startseite->have_posts()) :
                while ($startseite->have_posts()) : $startseite->the_post(); 
              ?>
              <p class="super-headline"><?php echo get_post_custom_values('superheadline')[1]; ?></p>
              <h2>
                <span class="uppercase"><?php echo get_post_custom_values('header_big_about')[0]; ?></span><br>
                <?php echo get_post_custom_values('header_small_about')[0]; ?>
              </h2>
              <?php endwhile; ?>
              <?php endif; ?>
              <?php wp_reset_postdata(); ?>
              </span>
            </span>
            <span class="grid3"><span class="headerline"></span></span>
          </div>
            <div class="container">
                <?php
                  $post = get_page_by_path('aboutmobil', OBJECT, 'post');
                  $thumbnail_id = get_post_thumbnail_id($post->ID);
                  $thumbnail_url = wp_get_attachment_url($thumbnail_id);
                  $alt_text = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
                ?>
                <img src="<?php echo $thumbnail_url ?>" alt=" <?php echo $alt_text ?>" class="visible_mobile">

                <?php
                  $post = get_page_by_path('aboutlinks', OBJECT, 'post');
                  $thumbnail_id = get_post_thumbnail_id($post->ID);
                  $thumbnail_url = wp_get_attachment_url($thumbnail_id);
                  $alt_text = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
                ?>
                <img src="<?php echo $thumbnail_url ?>" alt=" <?php echo $alt_text ?>" class="visible_desktop">
                <div class="text">
                <?php
                  $startseite = new WP_Query(array('name' => 'startseite'));
                  if ($startseite->have_posts()) :
                  while ($startseite->have_posts()) : $startseite->the_post(); 
                ?>
                <p><?php echo get_post_custom_values('text_about')[0]; ?></p>
                <?php endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
                <a href="" class="button">Hier weiterlesen</a>
                </div>
                <?php
                  $post = get_page_by_path('aboutrechts', OBJECT, 'post');
                  $thumbnail_id = get_post_thumbnail_id($post->ID);
                  $thumbnail_url = wp_get_attachment_url($thumbnail_id);
                  $alt_text = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
                ?>
                <img src="<?php echo $thumbnail_url ?>" alt=" <?php echo $alt_text ?>" class="visible_desktop">
            </div>
        </section>
        <section id="team">
          <div class="grid" >
            <span class="grid1"><span class="headerline"></span></span>
            <span class="grid2">
              <span class="gridhelp">
              <?php
                $startseite = new WP_Query(array('name' => 'startseite'));
                if ($startseite->have_posts()) :
                while ($startseite->have_posts()) : $startseite->the_post(); 
              ?>
              <p class="super-headline"><?php echo get_post_custom_values('superheadline')[2]; ?></p>
              <h2><?php echo get_post_custom_values('header')[1]; ?></h2>
              <?php endwhile; ?>
              <?php endif; ?>
              <?php wp_reset_postdata(); ?>
              </span>
            </span>
            <span class="grid3"><span class="headerline"></span></span>
          </div>
            <div class="container">
            <?php
                $post = get_page_by_path('teammeeting', OBJECT, 'post');
                $thumbnail_id = get_post_thumbnail_id($post->ID);
                $thumbnail_url = wp_get_attachment_url($thumbnail_id);
                $alt_text = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
              ?>
              <img src="<?php echo $thumbnail_url ?>" alt=" <?php echo $alt_text ?>">
              <div class="text">
              <?php
                  $startseite = new WP_Query(array('name' => 'startseite'));
                  if ($startseite->have_posts()) :
                  while ($startseite->have_posts()) : $startseite->the_post(); 
                ?>
                <p><?php echo get_post_custom_values('text_team')[0]; ?></p>
                <?php endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
                <?php $team = get_page_by_path('team');
                $link = get_permalink($team) ?>
                <a class="button" href="<?php echo $link ?>">Bewirb dich hier</a>
              </div>
              
            </div>
           
        </section>
    </main>

    <?php get_footer(); ?>
    