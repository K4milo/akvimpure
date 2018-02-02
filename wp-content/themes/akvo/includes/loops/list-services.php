<div class="services-list">
	<div class="container">
		<?php
			query_posts('post_type=servicio');
			while(have_posts()):the_post();
		?>
			<div class="col-md-4">
				<div class="service-item">
					<a href="<?php the_permalink(); ?>">
						<figure>
							<?php echo types_render_field('icono-servicio');?>
						</figure>
						<h3><?php the_title(); ?></h3>
					</a>
				</div>
			</div>
		<?php
			endwhile;
			wp_reset_query();	
		?>
	</div>
</div>