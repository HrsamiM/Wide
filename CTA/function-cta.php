<?php
//
  //FUNCTION CTA THEME OPTIONS
  function cta_theme_options(){

    $args = array(
      'post_type' => 'theme_options',
      'posts_per_page' => 1,
      'order' => 'ASC',
      'category_name' => 'cta'
  );

  $the_query = new WP_Query( $args ); ?>
  <?php if ( $the_query->have_posts() ) : ?>
      <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

        <?php if ( have_rows( 'call_to_action' ) ) : ?>
	        <?php while ( have_rows( 'call_to_action' ) ) : the_row(); ?>
          <section class="cta-container px-3 py-5" style=" background-image: url('<?php the_sub_field( 'cta_bg_image' ); ?>'); ">
            <div class="row sections mx-auto">

                <div class="col-lg-8 col-md-8 col-cta-mdx-8 col-tbmb-8">
                    <h2 class="display-4 hrm-titles pb-3 hrm-text-centers-reverse"><?php the_sub_field( 'cta_title' ); ?></h2>
                    <p class="subdes hrm-text-centers-reverse"><?php the_sub_field( 'cta_description' ); ?></p>
                </div>
                
                <div class="col-lg-4 col-md-4 col-cta-mdx-4 text-center">
                    <div class="icon-push twae-icon mx-auto rounded-circle">
                    <i class="<?php the_sub_field( 'cta_icon_reference' ); ?> cta-icon"></i>
                    </div>
                        <p class="subdes mt-2"><span class="mny"><?php the_sub_field( 'cta_price' ); ?></span><?php the_sub_field( 'cta_reference_price' ); ?></p>
                        <?php $cta_btn_pglink = get_sub_field( 'cta_btn_link_page_one' ); ?>
                        <?php if ( $cta_btn_pglink ) : ?>
                        <a href="<?php echo esc_url( $cta_btn_pglink); ?>"><button type="button" class="hrm_btn_gnrl plnbnt btn btn-info">View Plan</button></a>
                        <?php endif; ?>
                    </div>
                  </div>
          </section>
        	<?php endwhile; ?>
        <?php endif; ?>

      <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
  <?php endif;

  }
  add_shortcode('hrm_shrt_cta','cta_theme_options');    
  //END FUNCTION CTA
  //
  ?>