<?php

//FUNCTION STYLESHEET
function owllibrary() {
    wp_enqueue_style( 'owl-carousel','https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css' );
    wp_enqueue_style( 'owl-theme-dft','https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css' );
}
add_action( 'wp_enqueue_scripts', 'owllibrary' );
//END FUNCTION



//FUNCTION HTML CODE CAROUSEL 
function hrm_carousel_partners(){
    echo '<div class="container">';
    echo '<div  id="owlid" class="owl-carousel">';
    echo '<div style="display:table; margin-left: 20px;"><a class="lkexit" href="#"><div class="itmsowl">
    <img class="imglg" src="/wp-content/uploads/gurtam-lg-partner.png">
    </div></a></div>';
    echo '<div style="display:table; margin-left: 20px;"><a class="lkexit" href="#"><div class="itmsowl">
    <img class="imglg" src="/wp-content/uploads/eseye-lg-partner.png">
    </div></a></div>';
    echo '<div style="display:table; margin-left: 20px;"><a class="lkexit" href="#"><div class="itmsowl" style="background-color:#acacac">
    <img class="imglg" src="/wp-content/uploads/streamax-lg-partner.png">
    </div></a></div>';
    echo '</div>';
    echo '</div>';
}
add_shortcode('crspartners','hrm_carousel_partners');
//END FUNCTION

//FUNCTION - PARTNERS CAROUSEL JSQuery
function hrm_carousel_script(){

    ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js" integrity="sha512-gY25nC63ddE0LcLPhxUJGFxa2GoIyA5FLym4UJqHDEMHjp8RET6Zn/SHo1sltt3WuVtqfyxECP38/daUc/WVEA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-3.4.0.min.js"></script>
    <script>
    var $owl = jQuery('.owl-carousel');

    $owl.children().each( function( index ) {
        jQuery(this).attr( 'data-position', index ); // NB: .attr() instead of .data()
    });

        $owl.owlCarousel({
            center: true,
            loop: true,
            items: 3,
            autoplay:true,
            autoplayTimeout:3000,
            autoplayHoverPause:true,
                responsive : {
                    0 : {
                        items: 1,
                        mouseDrag: true
                    },
                            576 : {
                                items: 3,
                                mouseDrag: true
                            },
                                    767 : {
                                        items: 3,
                                        mouseDrag: true
                                    },
                                            992 : {
                                                items: 3,
                                                mouseDrag: true
                                            }
                }
        });

    jQuery(document).on('click', '.owl-item>div', function() {
        // see https://owlcarousel2.github.io/OwlCarousel2/docs/api-events.html#to-owl-carousel
        var $speed = 300;  // in ms
        $owl.trigger('to.owl.carousel', [jQuery(this).data( 'position' ), $speed] );
    });
    </script>
    <?php

}
add_action('wp_footer','hrm_carousel_script');
?>