<?php
//
  //FUNCTION HERO-SECTION HEADER BG GENERAL
    function grnl_hero_section(){
      
      $headingTitle = get_the_title();

      if ( has_post_thumbnail() ) {
        $imageBnnr = get_the_post_thumbnail_url();
      }
      else {
        $imageBnnr = get_stylesheet_directory_uri().'/assets/media/banner-all-section.jpg';
        
      }
      echo'<header class="hero-section eclip-shape" style="background-image: url('.esc_url($imageBnnr).');">';
      echo '<div class="container content-box">';
      echo '<div class="row">';
      echo '<div class="col-12">';
      echo '<h1 class="titleslider display-4">'.esc_html($headingTitle).'</h1>';
      do_shortcode('[breadcrumbs]');
      echo '</div>';
      echo '</div>';
      echo '</div>';
      echo '</header>';
    }
    add_shortcode('shrt_hero_section','grnl_hero_section');
  //  
  //END FUNCTION HERO SECTION
?>
