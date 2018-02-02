<?php

  /*

    Template Name: Services

  */

get_template_part('includes/header');

	//Query fon content
?>

<div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
  <div class="container">
  <h2><?php the_title(); ?></h2>
    <div class="list-links">
      <?php if(function_exists('bcn_display'))
      {
          bcn_display();
      }?>
    </div>
  </div>
</div>


<div class="container-fluid services-page no-gutter">

	<h3>Soluciones de expertos</h3>

	<?php

		$cont = 0;

		query_posts('post_type=servicio');

		while(have_posts()):the_post();
		$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
		$url = $thumb['0'];

	?>
		<div class="col-md-6 service-cont col-<?php echo $cont; ?>" style="background-image: url(<?php echo $url; ?>)">
			<div class="overlay"></div>
			<a href="<?php the_permalink(); ?>">
				<article class="service-item">
					<figure>
						<?php echo types_render_field('icono-servicio');?>
					</figure>
					</a>
					<h4><?php the_title(); ?></h4>
					<?php the_excerpt(); ?>
				</article>
			</a>
		</div>

	<?php
		$cont++;
		endwhile;

		wp_reset_query();

	?>

</div>

<!--contact-->
<?php get_template_part('includes/home-contact');?>

<?php get_template_part('includes/footer'); ?>