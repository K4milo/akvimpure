<div class="employees">
	<h2>Equipo de trabajo</h2>
	<div class="owl-employees">
		<?php
			query_posts('post_type=empleado&posts_per_page=-1');
			while(have_posts()):the_post();
			$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
			$url = $thumb['0'];
		?>
		<div class="employee-item">
			<a href="<?php the_permalink(); ?>">
				<figure>
					<?php the_post_thumbnail('thumbnail'); ?>
				</figure>
			</a>
			<div class="chargue">
				<h3><?php the_title();?></h3>
				<?php the_content();?>
			</div>
		</div>

		<?php
			endwhile;
			wp_reset_query();
		?>
	</div>
</div>