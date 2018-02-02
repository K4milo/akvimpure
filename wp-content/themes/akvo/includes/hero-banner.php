<?php
	while(have_posts()):the_post();
	$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
	$url = $thumb['0'];
?>
	<style>
		.hero-banner{
			background: url(<?php echo $url;?>);
		}
	</style>

	<?php
		//condition for popup
		if(types_render_field('pop-up')):
	?>
	<div class="modal">
		<div class="bgdrop"></div>
		<div class="modal-content">
			<span class="close"><i class="fa fa-times-circle" aria-hidden="true"></i></span>
			<?php
				echo types_render_field('pop-up');
			?>
		</div>
	</div>
	<?php
		endif;
		//content page banner
	?>
	<div class="hero-banner">
		<ul class="hero-slider">
			<?php
			$fields = CFS()->get( 'home_slider');
			if($fields){
				foreach ( $fields as $field ) { ?>
					<li class="slide-item" style="background-image:url('<?php echo $field['imagen_slider']; ?>')">
						<div class="txt-content"><?php echo $field['texto_slider'];?></div>
					</li>
			<?php
				}
			}
			?>
		</ul>
	</div><!--hero banner-->

<?php
	endwhile;
	wp_reset_query();
?>