<div class="services-home">

	<div class="container-fluid no-gutter">

		<h2>Servicios</h2>

		<h3>Soluciones de expertos</h3>

		<?php

			query_posts('post_type=servicio&posts_per_page=5');
			$cont = 0;

			while(have_posts()):the_post();
			$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
			$url = $thumb['0'];

		?>
			<div class="col-md-4 service-cont col-<?php echo $cont; ?>" style="background-image: url(<?php echo $url; ?>)">
				<div class="overlay"></div>
				<a href="<?php the_permalink(); ?>">
					<article class="service-item">
						<figure>
							<?php echo types_render_field('icono-servicio');?>
						</figure>
						</a>
						<h4><?php the_title(); ?></h4>
					</article>
				</a>
			</div>

		<?php
			$cont++;
			endwhile;

			wp_reset_query();

		?>

	</div>

</div>