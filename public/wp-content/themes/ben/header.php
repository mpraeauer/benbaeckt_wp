<!--
    TODO: – Add title
    – Add keywords & description
    - Run https://realfavicongenerator.net/ for favicons, tile & touchicons
    – Run https://realfavicongenerator.net/social for og image & info
    - Edit privacy info
    - Create E-mail-address datenschutz@
    – Host fonts locally with https://google-webfonts-helper.herokuapp.com/fonts
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ben bäckt!</title>
    <?php wp_head(); ?>
</head>
<body>
<?php wp_body_open(); ?>
    <header>
      <?php
        $post = get_page_by_path('heroimage', OBJECT, 'post');
        $thumbnail_id = get_post_thumbnail_id($post->ID);
        $thumbnail_url = wp_get_attachment_url($thumbnail_id);
        ?>
  <div id="hero" style="background-image:url(<?php echo $thumbnail_url ?>)">
   <div id="background">
            <?php $startseite = get_page_by_path('startseite');
                $link = get_permalink($startseite) ?>
                <a href="<?php echo $link ?>">
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
            <div class="box">
              <div id="maintitle">
                <?php
                    $header = new WP_Query(array('name' => 'header'));
                    if ($header->have_posts()) :
                    while ($header->have_posts()) : $header->the_post(); 
                ?>
                <h2>
                    <span class="uppercase">
                        <?php echo get_post_custom_values('mainheader_big')[0]; ?>
                    </span><br>
                    <?php echo get_post_custom_values('mainheader_small')[0]; ?>
                </h2>
                  <p><?php echo get_post_custom_values('slogan')[0]; ?></p>
                <?php endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
              </div>
          </div>
        </div>
      </div>
    </header>