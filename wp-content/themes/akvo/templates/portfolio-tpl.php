<?php

  /*

    Template Name: Portfolio

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


<div class="container portfolio-page">

	<div class="col-md-6">
		<h3>Experiencia en obra</h3>

		<?php

			query_posts('post_type=proyecto');

			while(have_posts()):the_post();

		?>
			<div class="col-md-6">
				<article class="portfolio-item">
					<figure>
						<a href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail('medium'); ?>
						</a>
					</figure>

					</a>
					<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>

				</article>
			</div>

		<?php

			endwhile;

			wp_reset_query();

		?>
	</div>
	<div class="col-md-6">
		<h3>Experiencia en Diseño</h3>
		<?php
			while(have_posts()):the_post();

				the_content();

			endwhile;
			wp_reset_query();
		?>
	</div>

</div>

<!--contact-->
<?php get_template_part('includes/home-contact');?>

<?php get_template_part('includes/footer'); ?>