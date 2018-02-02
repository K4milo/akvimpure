<div class="portfolio-home">
	<h2>Últimos Proyectos</h2>
	<div class="owl-folio">
		<?php
			query_posts('post_type=proyecto');
			while(have_posts()):the_post();
			$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
			$url = $thumb['0']; 
		?>
		<div class="portfolio-item" style="background-image:url(<?php echo $url; ?>);">
			<a href="<?php the_permalink();?>">
				<div class="overlay">
					<h3><?php the_title();?></h3>
					<i class="fa fa-link" aria-hidden="true"></i>
				</div>
			</a>
		</div>

		<?php
			endwhile;
			wp_reset_query();
		?>
	</div>
</div>