<?php get_header(); ?>

<div id="pagepiling">
	<div class="section home">
		<nav id="main-Menu" class="menu">
			<?php wp_nav_menu( array(
						'theme_location' => 'main',
						'menu_id'        => 'primary-menu',
						'container'		 => false,
						'menu_class'     => 'list-unstyled',
			));?>
		
		</nav>
	</div>
	<div class="section party"></div>
	<div class="section">
		<div class="wedding"></div>
		<div class="content">
			WESELA
		</div>
	</div>
	<div class="section party18"></div>
	<div class="section sessions"></div>
	<div class="section contact"></div>
</div>
<!-- <div id="page">
	<div class="main-posts">
		<div class="container">
		<?php if(have_posts()):
			while(have_posts()): the_post(); 
				get_template_part('post',get_post_format());

			 endwhile;
		endif; ?>
		</div> 
</div> -->

<?php get_footer(); ?>