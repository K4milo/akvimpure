<div class="contact-home no-gutter">
	<?php 
		$args= array(
				'pagename' => 'contacto'
			);

		$query = new WP_Query($args);
		while($query->have_posts()):$query->the_post();
	?>
	<div class="col-md-6 directions">
		<div class="txt-section">
			<h2><?php the_title(); ?></h2>
			<?php the_content(); ?>
		</div>
	</div><!--directions-->
	<div class="col-md-6 map-container">
		<?php echo types_render_field('mapa-iframe');?>	
	</div><!--Map-->
	<?php
		endwhile;
	wp_reset_postdata();
	?>
</div>