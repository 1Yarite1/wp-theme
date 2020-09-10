<?php get_header(); ?>

<!-- ===========SLIDER=========== -->

<div class="container">
	<?php get_template_part('page'); ?>
</div>

<!-- ============================ -->

<div class="container">

	<div class="sidebar float-right">

        <ul class="text-muted">
            <li><?php dynamic_sidebar('sidebar-1') ?></li>
            <li><?php dynamic_sidebar('sidebar-2') ?></li>
        </ul>
		
    </div>	

	<div class="row">
		
		<div class="col-xs-auto">
			
    		<div class="main-content">
				
        		<div class="row row-col-2 row-col-xs-1">
	
            		<?php

            			$args = array(
                			'type' => 'post',
                			'posts_per_page' => 4,
            			);

            			$lastBlog = new WP_Query($args);

            			if($lastBlog->have_posts() ):

                		while ($lastBlog->have_posts() ): $lastBlog->the_post(); ?>
					
                        <?php get_template_part('content'); ?>
                		<?php endwhile;
           				endif;

            			wp_reset_postdata();

            			?>
					</div>
        		</div>
    		</div>
		</div>

	</div>

	
<?php get_footer(); ?>