<?php
/*
* Display Logo and contact details
*/
?>

<div class="headerbox">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-12 align-self-md-center">
        <?php $automobile_hub_logo_settings = get_theme_mod( 'automobile_hub_logo_settings','Different Line');
        if($automobile_hub_logo_settings == 'Different Line'){ ?>
          <div class="logo">
            <?php if( has_custom_logo() ) automobile_hub_the_custom_logo(); ?>
            <?php if(get_theme_mod('automobile_hub_site_title',true) == 1){ ?>
              <?php if (is_front_page() && is_home()) : ?>
                <h1 class="text-capitalize">
                    <a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
                </h1> 
              <?php else : ?>
                  <p class="text-capitalize site-title">
                      <a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
                  </p>
              <?php endif; ?>
            <?php }?>
            <?php $automobile_hub_description = get_bloginfo( 'description', 'display' );
            if ( $automobile_hub_description || is_customize_preview() ) : ?>
              <?php if(get_theme_mod('automobile_hub_site_tagline',false)){ ?>
                <p class="site-description"><?php echo esc_html($automobile_hub_description); ?></p>
              <?php }?>
            <?php endif; ?>
          </div>
        <?php }else if($automobile_hub_logo_settings == 'Same Line'){ ?>
          <div class="logo logo-same-line">
            <div class="row">
              <div class="col-lg-5 col-md-5 align-self-md-center">
                <?php if( has_custom_logo() ) automobile_hub_the_custom_logo(); ?>
              </div>
              <div class="col-lg-7 col-md-7 align-self-md-center">
                <?php if(get_theme_mod('automobile_hub_site_title',true) == 1){ ?>
                  <?php if (is_front_page() && is_home()) : ?>
                    <h1 class="text-capitalize">
                        <a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
                    </h1> 
                  <?php else : ?>
                      <p class="text-capitalize site-title">
                          <a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
                      </p>
                  <?php endif; ?>
                <?php }?>
                <?php $automobile_hub_description = get_bloginfo( 'description', 'display' );
                if ( $automobile_hub_description || is_customize_preview() ) : ?>
                  <?php if(get_theme_mod('automobile_hub_site_tagline',false)){ ?>
                    <p class="site-description"><?php echo esc_html($automobile_hub_description); ?></p>
                  <?php }?>
                <?php endif; ?>
              </div>
            </div>
          </div>
        <?php }?>
      </div>
      <div class="call col-lg-3 col-md-4 align-self-md-center">
        <?php if( get_theme_mod( 'automobile_hub_call_text' ) != '' || get_theme_mod( 'automobile_hub_call' ) != '') { ?>
          <div class="row">
            <div class="col-lg-3 col-md-3"><i class="<?php echo esc_attr(get_theme_mod('automobile_hub_call_icon','fas fa-phone')); ?>"></i></div>
            <div class="col-lg-9 col-md-9">
              <p class="infotext"><?php echo esc_html( get_theme_mod('automobile_hub_call_text','') ); ?></p>
              <p class="simplep"><a href="tel:<?php echo esc_html( get_theme_mod('automobile_hub_call','') ); ?>"><?php echo esc_html( get_theme_mod('automobile_hub_call','') ); ?></a></p>
            </div>
          </div>
        <?php } ?>
      </div>
      <div class="email col-lg-3 col-md-4 align-self-md-center">
        <?php if( get_theme_mod( 'automobile_hub_mail_text' ) != '' || get_theme_mod( 'automobile_hub_mail' ) != '') { ?>
          <div class="row">
            <div class="col-lg-3 col-md-3"><i class="<?php echo esc_attr(get_theme_mod('automobile_hub_mail_icon','fas fa-envelope-open')); ?>"></i></div>
            <div class="col-lg-9 col-md-9">
              <p class="infotext"><?php echo esc_html( get_theme_mod('automobile_hub_mail_text','')); ?></p>
              <p class="simplep"><a href="mailto:<?php echo esc_html( get_theme_mod('automobile_hub_mail','') ); ?>"><?php echo esc_html( get_theme_mod('automobile_hub_mail','') ); ?></a></p>
            </div>
          </div>
        <?php } ?>
      </div>
      <div class="basket col-lg-2 col-md-4 align-self-md-center">
        <?php if(get_theme_mod('automobile_hub_cart_option',true) != ''){ ?>
          <?php if(class_exists('woocommerce')){ ?>
            <a href="<?php if(function_exists('wc_get_cart_url')){ echo esc_url(wc_get_cart_url()); } ?>" title="<?php esc_attr_e( 'shopping cart','automobile-hub' ); ?>">
              <div class="row">
                <div class="col-lg-4 col-md-4"><i class="<?php echo esc_attr(get_theme_mod('automobile_hub_cart_icon','fas fa-shopping-basket')); ?>"></i></div>
                <div class="col-lg-8 col-md-8">
                  <p class="cart_no infotext">
                    <?php global $woocommerce; ?>
                    <?php esc_html_e('CART ITEM','automobile-hub'); ?>
                  </p>
                  <p class="cart-value simplep"> <?php echo esc_html(wp_kses_data( WC()->cart->get_cart_contents_count()));?> - <?php echo esc_sql( $woocommerce->cart->get_cart_total() ); ?></p>
                </div>
              </div>
            </a>
          <?php } ?>
        <?php } ?>
      </div>
      <div class="clear"></div>
    </div>
  </div>
</div>
