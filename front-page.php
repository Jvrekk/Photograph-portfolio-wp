<?php get_header(); ?>
	<div id="preloader">
		<div id="loader"></div>
	</div>
	<div class="grid">
		<a class="box option1" href="<?php echo get_permalink( get_page_by_title( 'Montaż' ) ) ?>">
			Montaż
		</a>
		<a class="box option2" href="<?php echo get_permalink( get_page_by_title( 'Fotografia' ) ) ?>">
			Fotografia
		</a>
		<a class="box option3" href="<?php echo get_permalink( get_page_by_title( 'Kontakt' ) ) ?>">
			Kontakt
		</a>
	</div>
<?php wp_footer(); ?>