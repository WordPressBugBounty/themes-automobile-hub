<?php
/**
 * Template part for displaying slider section
 *
 * @package Automobile Hub
 * @subpackage automobile_hub
 */

?>
<?php $automobile_hub_static_image = get_stylesheet_directory_uri() . '/assets/images/sliderimage.png'; ?>
<?php if( get_theme_mod( 'automobile_hub_slider_arrows',true) != '') { ?>

<section id="slider">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <?php $automobile_hub_slide_pages = array();
      for ( $automobile_hub_count = 1; $automobile_hub_count <= 4; $automobile_hub_count++ ) {
        $automobile_hub_mod = intval( get_theme_mod( 'automobile_hub_slider_page' . $automobile_hub_count ));
        if ( 'page-none-selected' != $automobile_hub_mod ) {
          $automobile_hub_slide_pages[] = $automobile_hub_mod;
        }
      }
      if( !empty($automobile_hub_slide_pages) ) :
        $automobile_hub_args = array(
          'post_type' => 'page',
          'post__in' => $automobile_hub_slide_pages,
          'orderby' => 'post__in'
        );
        $automobile_hub_query = new WP_Query( $automobile_hub_args );
        if ( $automobile_hub_query->have_posts() ) :
          $i = 1;
    ?>
    <div class="carousel-inner" role="listbox">
      <?php  while ( $automobile_hub_query->have_posts() ) : $automobile_hub_query->the_post(); ?>
        <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
          <?php if(has_post_thumbnail()){ ?>
             <img src="<?php the_post_thumbnail_url('full'); ?>"/>
             <?php }else {echo ('<img src="'.$automobile_hub_static_image.'">'); } ?>
          <div class="carousel-caption">
            <div class="inner_carousel">
               <p class="slidertop-title mb-1"><?php echo esc_html( get_theme_mod('automobile_hub_slider_text','') ); ?></p>
              <?php if (get_theme_mod('automobile_hub_show_slider_title', true)) : ?>
                <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
              <?php endif; ?>
              <?php if (get_theme_mod('automobile_hub_show_slider_content', true)) : ?>
                <p><?php echo wp_trim_words( get_the_content(),15 );?></p>
              <?php endif; ?>
              <div class="more-btn">
                <i class="<?php echo esc_attr(get_theme_mod('automobile_hub_slider_icon','fas fa-hand-point-right')); ?>"></i><a href="<?php the_permalink(); ?>"><?php esc_html_e('BOOK NOW','automobile-hub'); ?></a>
              </div>
            </div>
          </div>
        </div>
      <?php $i++; endwhile;
      wp_reset_postdata();?>
    </div>
    <?php else : ?>
        <div class="no-postfound"></div>
      <?php endif;
    endif;?>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-angle-left"></i></span>
      <span class="screen-reader-text"><?php esc_html_e('Previous','automobile-hub'); ?></span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-angle-right"></i></span>
      <span class="screen-reader-text"><?php esc_html_e('Next','automobile-hub'); ?></span>
    </a>
  </div>
  <div class="clearfix"></div>
</section>

<?php } ?>
