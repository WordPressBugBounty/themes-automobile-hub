<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Automobile Hub
 * @subpackage automobile_hub
 */

?>
<article class="col-lg-4 col-md-6">
	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="page-box">
	        <div class="box-image ">
	            <?php the_post_thumbnail();  ?>
	        </div>
		    <div class="box-content text-center">
		    	<h4><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php the_title_attribute(); ?>"><?php the_title();?></a></h4>
		        <div class="box-info">
			        <?php $automobile_hub_blog_archive_ordering = get_theme_mod('blog_meta_order', array('date', 'author', 'comment', 'category'));
			        foreach ($automobile_hub_blog_archive_ordering as $automobile_hub_blog_data_order) : 
			            if ('date' === $automobile_hub_blog_data_order) : ?>
				            	<i class="far fa-calendar-alt mb-1"></i><span class="entry-date"><?php echo get_the_date('j F, Y'); ?></span>
				            <?php elseif ('author' === $automobile_hub_blog_data_order) : ?>
			              		<i class="fas fa-user mb-1"></i><span class="entry-author"><?php the_author(); ?></span>
				            <?php elseif ('comment' === $automobile_hub_blog_data_order) : ?>
			              		<i class="fas fa-comments mb-1"></i><span class="entry-comments"><?php comments_number(__('0 Comments', 'automobile-hub'), __('0 Comments', 'automobile-hub'), __('% Comments', 'automobile-hub')); ?></span>
				            <?php elseif ('category' === $automobile_hub_blog_data_order) :?>
			              		<i class="fas fa-list mb-1"></i><span class="entry-category"><?php automobile_hub_display_post_category_count(); ?></span>
				            <?php endif;
			        endforeach; ?>
		        </div>
		        <p><?php echo esc_html(automobile_hub_excerpt_function());?></p>
	        	<?php if(get_theme_mod('automobile_hub_remove_read_button',true) != ''){ ?>
		            <div class="readmore-btn">
		                <a href="<?php echo esc_url( get_permalink() );?>" class="blogbutton-small" title="<?php esc_attr_e( 'Read More', 'automobile-hub' ); ?>"><?php echo esc_html(get_theme_mod('automobile_hub_read_more_text',__('Read More','automobile-hub')));?></a>
		            </div>
	        	<?php }?>
		    </div>
		    <div class="clearfix"></div>
		</div>
	</div>
</article>