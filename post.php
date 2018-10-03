<article id="post-<?php the_ID(); ?>" class="<?php post_class(); ?>" >
	<div class="thumbnail-image" style="background-image:url('<?php the_post_thumbnail_url('full'); ?>')">
		<header class="post-header">
			<h1><?php the_title(sprintf('<h1 class="post-title"><a href="">', esc_url(get_permalink()) ),'</a></h1>'); ?></h1>
		</header>
	</div>

	<div class="container">
		<p><?php the_content(); ?></p>
	</div>
	
</article>