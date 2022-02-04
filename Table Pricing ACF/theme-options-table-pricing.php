<?php
//
//FUNCTION THEME OPTIONS TABLE PRICING
function themeop_table_pricing( $atts ){
  ob_start();
  extract( shortcode_atts( array (
    'category' => ''
), $atts ) );

  $args = array(
     'post_type' => 'theme_options',
     'posts_per_page' => 3,
     'order' => 'ASC',
     'category_name' => $category
 );
 
 $the_query = new WP_Query( $args ); ?>
     <?php if ( $the_query->have_posts() ) : ?>
         <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

            <?php if ( have_rows( 'pricing_plans' ) ) : ?>
              <?php while ( have_rows( 'pricing_plans' ) ) : the_row(); ?>

              <div class="col-lg-4 col-md-6 mb-5 table-width-sc mb-lg-0">
              <div class="bg-white hrm-zfold p-5 mx-4 hrm-px-mv-2 rounded-lg shadow pdd-content-tables">
                <h1 class="h6 text-uppercase font-weight-bold mb-4"><?php the_sub_field( 'plan_title' ); ?></h1>
                <h2 class="h1 font-weight-bold"><?php the_sub_field( 'pricing_plan' ); ?><span class="text-small font-weight-normal ml-2"><?php the_sub_field( 'type_plan' ); ?></span></h2>
                <div class="custom-separator my-4 mx-auto hrm_dividers"></div>
                <ul class="list-unstyled table-list my-5 text-small text-left">
                <li class="mb-3"><?php the_sub_field( 'option_1' ); ?></li>
                <li class="mb-3"><?php the_sub_field( 'option_2' ); ?></li>
                <li class="mb-3"><?php the_sub_field( 'option_3' ); ?></li>
                <li class="mb-3"><?php the_sub_field( 'option_4' ); ?></li>
                <li class="mb-3"><?php the_sub_field( 'option_5' ); ?></li>
                </ul>
                <?php $btntbpricing = get_sub_field( 'button_page' ); ?>
                <?php if ($btntbpricing) : ?>
                <a href="<?php echo esc_url($btntbpricing); ?>" class="pt-3"><button type="button" class="hrm_btn_gnrl btn btn-block p-1 rounded-pill w-100">Subscribe</button></a>
                <?php endif; ?>
              </div>
            </div>
         
              <?php endwhile; ?>
            <?php endif; ?> 
    
          <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
     <?php endif;
 }
 add_shortcode('hrm_shrt_tb_pricing','themeop_table_pricing');
  //END FUNCTION TABLE PRICING
  //
  ?>