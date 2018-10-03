<!DOCTYPE html>
<html>
	<head>

        <meta charset="<?php bloginfo('charset'); ?>">
        <title>
            <?php if( is_front_page() ):
                 echo '<', bloginfo('name'), '>'; 
            else:
               echo '<', wp_title(''), ' >';
            endif;
        ?>
        </title>
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<?php wp_head() ?>
		
	</head>
	
<?php if(is_front_page()):
	$body_theme_classes = array('frontPage');
	echo '<div id="preloader">';
		echo '<div id="loader"></div>';
	echo '</div>';
else:
	$body_theme_classes = array('otherPage');
endif; ?>
	
	<body <?php body_class($body_theme_classes); ?> >
		

		
			
<?php if( get_header_image()): ?>
			<header>
				<div class="row">
					<img class="header-image" src="<?php header_image(); ?>" width="100%" />
				</div>
			</header>
<?php endif; ?>
		

					
			
	
		
		
	

