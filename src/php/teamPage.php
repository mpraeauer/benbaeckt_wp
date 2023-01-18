<?php
/*
Template Name: Team Template
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
<body id="teamBackground" style="background-image:url(<?php echo $thumbnail_url ?>)"></div>
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
       <section id="teamPage">
        <div class="grid" >
          <span class="grid1"><span class="headerline"></span></span>
          <span class="grid2">
            <span class="gridhelp">
              <?php
                $team = new WP_Query(array('name' => 'teambeschreibung'));
                if ($team->have_posts()) :
                while ($team->have_posts()) : $team->the_post(); 
              ?>
              <p class="super-headline"><?php echo get_post_custom_values('superheadline')[0]; ?></p>
              <h2><?php echo get_post_custom_values('header_teampage')[0]; ?></h2> 
            </span>
          </span>
          <span class="grid3"><span class="headerline"></span></span>
        </div>
        <p class="text"><?php echo get_post_custom_values('text_teampage')[0]; ?></p>
        <h4><?php echo get_post_custom_values('form_headline')[0]; ?></h4>
                <?php endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
        <form>
          <?php
              $form = wpcf7_contact_form(80);
              if ($form){
                $form=wpcf7_contact_form(80); // local form
                echo $form->form;
              }
              else {
                $form = wpcf7_contact_form(); // online form 
                echo $form->form;
              }
          ?>
        </form>
      </section>
    </main>
    <?php get_footer(); ?>