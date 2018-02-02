<?php
	$query = new WP_Query( array( 'pagename' => 'la-empresa' ) );

	while ($query->have_posts()):$query->the_post();
?>
<div class="home-about no-gutter">
	<div class="col-md-6">
	 	<?php the_post_thumbnail('full');?>
	</div><!--img about-->

	<div class="col-md-6">
		<div class="txt-section">
			<h2>Nuestro Equipo</h2>
			<?php the_excerpt();?>
			<a href="<?php the_permalink();?>#the_team" class="btn blue">Ver más</a>
		</div>

	</div><!--txt about-->
</div>
<?php
	endwhile;
	wp_reset_postdata();
?>