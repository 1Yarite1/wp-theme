<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php bloginfo( 'name' ); ?></title>

    <?php wp_head(); ?>
</head>
<body>

	<div class="container head-info">
		<div class="row">	
					<div class="col">
						<h3 class="text-secondary float-left"><?php bloginfo( 'name' ); ?></h3>
					</div>
    				<div class="col">
						<p class="text-secondary float-right">
        					<a class="text-secondary" href="#">Libero</a> | 
							<a class="text-secondary" 	href="#">Maecenas</a> |
        					<a class="text-secondary" href="#">Mauris</a> | 
							<a class="text-secondary" href="#">Suspendisse</a>
    					</p>
					</div>
    				<div class="w-100"></div>
    				<div class="col">
						<p class="text-secondary float-left"><?php bloginfo( 'description' ); ?></p>
					</div>
    				<div class="col">
						<p class="text-secondary float-right">Tel:
        					<a class="text-secondary" href="#">xxxxx xxxxxxxxxx</a> |
        					Mail: <a class="text-secondary" href="#">info@domain.com</a>
    					</p>
					</div>
			</div>
		</div>	

    


<div class="container">
	<div class="row justify-content-between custom-header">
		<div class="col-xs-auto">
            	<?php
            	wp_nav_menu(
                    	array(
                        	'theme_location' => 'primary',
                        	'container' => false,
                        	'menu_class' => 'nav-custom',
                    	)
            	);?>

			</div>
		
			<div class="col-xs-auto">
				<?php get_search_form(); ?>

			</div>		
	</div>
</div>

    <img src="<?php header_image(); ?>" height="<?php get_custom_header()->height; ?>" width="<?php get_custom_header()->width; ?>">



