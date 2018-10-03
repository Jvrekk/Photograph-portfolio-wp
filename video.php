<?php 
/*
	Template Name: video
*/

get_header(); ?>
	<div id="preloader">
		<div id="loader"></div>
	</div>
<div id="pagepiling">
	<div class="section homeFirst">
		<nav id="main-Menu" class="menu">
			<?php wp_nav_menu( array(
						'theme_location' => 'main',
						'menu_id'        => 'primary-menu',
						'container'		 => false,
						'menu_class'     => 'list-unstyled',
			));?>
		
		</nav>
	</div>
	<div class="section party">
		<div class="content">
			<a href="<?php echo get_permalink( get_page_by_title( 'Imprezy-okolicznosciowe' ) ) ?>">Imprezy okolicznosciowe</a>
		</div>
	</div>
	<div class="section">
		<div class="wedding"></div>
		<div class="content">
		<a href="<?php echo get_permalink( get_page_by_title( 'wesela' ) ) ?>">WESELA</a>
		</div>
	</div>
	<div class="section party18">
		<div class="content">
			<a href="<?php echo get_permalink( get_page_by_title( '18' ) ) ?>">Osiemnastki</a>
		</div>
	</div>
	<div class="section sessions">
		<div class="content">
			<a href="<?php echo get_permalink( get_page_by_title( 'sesje' ) ) ?>">Sesje</a>
		</div>
	</div>
	<div class="section contact">
		<div class="content">
			<a href="<?php echo get_permalink( get_page_by_title( 'kontakt' ) ) ?>">Kontakt</a>
		</div>
	</div>
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
<?php wp_footer(); ?>