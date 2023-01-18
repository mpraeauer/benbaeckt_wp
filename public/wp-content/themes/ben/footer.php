<footer>
      <div class="container">
        <div class="info">
          <?php
            $post = get_page_by_path('shop1', OBJECT, 'post');
            $thumbnail_id = get_post_thumbnail_id($post->ID);
            $thumbnail_url = wp_get_attachment_url($thumbnail_id);
            $alt_text = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
          ?>
          <img src="<?php echo $thumbnail_url ?>" alt=" <?php echo $alt_text ?>">
          <p>
          <?php
            $footer = new WP_Query(array('name' => 'footer'));
            if ($footer->have_posts()) :
            while ($footer->have_posts()) : $footer->the_post(); 
          ?>
            <?php echo get_post_custom_values('name')[0]; ?> <br>
            <?php echo get_post_custom_values('street')[0]; ?> <br>
            <?php echo get_post_custom_values('city')[0]; ?> <br>
            <?php echo get_post_custom_values('number')[0]; ?> <br>
            <?php echo get_post_custom_values('email')[0]; ?>
            
          <?php endwhile; ?>
          <?php endif; ?>
          <?php wp_reset_postdata(); ?>
          </p>
        </div>
        <div class="info">
          <?php
            $post = get_page_by_path('shop2', OBJECT, 'post');
            $thumbnail_id = get_post_thumbnail_id($post->ID);
            $thumbnail_url = wp_get_attachment_url($thumbnail_id);
            $alt_text = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
          ?>
          <img src="<?php echo $thumbnail_url ?>" alt=" <?php echo $alt_text ?>">
          <p>
          <?php
            $footer = new WP_Query(array('name' => 'footer'));
            if ($footer->have_posts()) :
            while ($footer->have_posts()) : $footer->the_post(); 
          ?>
            <?php echo get_post_custom_values('name')[1]; ?> <br>
            <?php echo get_post_custom_values('street')[1]; ?> <br>
            <?php echo get_post_custom_values('city')[1]; ?> <br>
            <?php echo get_post_custom_values('number')[1]; ?> <br>
            <?php echo get_post_custom_values('email')[1]; ?>

          <?php endwhile; ?>
          <?php endif; ?>
          <?php wp_reset_postdata(); ?>
          </p>
        </div>
        <div class="info">
          <?php
            $post = get_page_by_path('shop3', OBJECT, 'post');
            $thumbnail_id = get_post_thumbnail_id($post->ID);
            $thumbnail_url = wp_get_attachment_url($thumbnail_id);
            $alt_text = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
          ?>
          <img src="<?php echo $thumbnail_url ?>" alt=" <?php echo $alt_text ?>">
          <p>
          <?php
            $footer = new WP_Query(array('name' => 'footer'));
            if ($footer->have_posts()) :
            while ($footer->have_posts()) : $footer->the_post(); 
          ?>
            <?php echo get_post_custom_values('name')[2]; ?> <br>
            <?php echo get_post_custom_values('street')[2]; ?> <br>
            <?php echo get_post_custom_values('city')[2]; ?> <br>
            <?php echo get_post_custom_values('number')[2]; ?> <br>
            <?php echo get_post_custom_values('email')[2]; ?>
            
          <?php endwhile; ?>
          <?php endif; ?>
          <?php wp_reset_postdata(); ?>
          </p>
        </div>
      </div>
      <div id="copyright">
        Copyright Marlene Präauer - Images: Unsplash & Vecteezy
      </div>
        
    </footer>
    <?php wp_footer(); ?>
    <script src='main.js'></script>
</body>

</html>