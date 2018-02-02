<?php
  /*
    Template Name: Contact
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


<div class="container contact-page">

	<div class="col-md-4 info-cont">
		<div class="info">
		<?php
			while(have_posts()):the_post();
				the_content();
		?>
		</div>
	</div>

	<div class="col-md-8 map-cont">
		<div class="map">
			<div class="map-container">
				<?php echo types_render_field('mapa-iframe');?>
			</div><!--Map-->
		</div>
	</div>

	<hr/>

	<h2>Contáctanos</h2>
	<p>
		Escríbenos en el siguiente formulario y nos comunicaremos a la mayor brevedad posible.
	</p>
	<div class="form-container">
		<div class="col-md-12">
			<?php
				echo do_shortcode('[contact-form-7 id="4" title="Formulario de contacto 1"]');
			?>
		</div>
	</div>

	<?php
		endwhile;
		wp_reset_postdata();
	?>

</div>


<?php get_template_part('includes/footer'); ?>