<?php 
/*
	Template Name: Page
*/

get_header(); ?>
	
<!--<?php if ( is_active_sidebar( 'slider-widget' ) ) : ?>    
            <?php dynamic_sidebar( 'slider-widget' ); ?>
<?php endif; ?>-->

<div class="main-posts-wrapper">
	<div class="main-posts">

	<?php if(have_posts()):
		while(have_posts()): the_post(); 
			get_template_part('post');
			
		endwhile;
	endif; ?>
	</div> <!-- .container -->
</div>
<?php get_footer(); ?>