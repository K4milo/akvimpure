<?php
  /*
    Template Name: About
  */
get_template_part('includes/header');
	//Query fon content
?>

<div class="container-fluid">
  <div class="row">
      <?php
        while(have_posts()):the_post();
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

      <div class="post-data container">
        <div class="post-content no-gutter">
        	<div class="col-md-6 img-data">
        		<?php echo types_render_field('side-img'); ?>
        	</div>
        	<div class="col-md-6 txt-data">
        		<?php the_content(); ?>
        	</div>
        </div>
      </div>

      <div class="post-data container">
        <div class="post-content no-gutter">
        	<div class="col-md-6 mision">
        		<div class="text-box"><?php echo types_render_field('txt-mission'); ?></div>
        	</div>
        	<div class="col-md-6 vision">
        		<div class="text-box"><?php echo types_render_field('txt-vision'); ?></div>
        	</div>
        </div>
      </div>
      <div class="center buttons">
        <a href="http://www.akvo.co/wp/politica-seguridad-y-salud-en-el-trabajo/" class="btn">Política de seguridad</a>

        <a href="http://www.akvo.co/wp/politica-de-prevencion-consumo-alcohol-tabaquismo-y-drogas/" class="btn">Política de prevención de consumo</a>

      </div>

      

    <?php endwhile;
      wp_reset_postdata();
?>
  </div><!-- /.row -->
</div><!-- /.container -->
<!--contact-->
<div class="container employees_cont">
  <?php get_template_part('includes/employees');?>
</div>

<div class="partners">
        <div class="container">
          <h2>Partners</h2>
          <?php echo do_shortcode('[foogallery id="484"]'); ?>
        </div>
      </div>
<!--contact-->
<?php get_template_part('includes/home-contact');?>

<?php get_template_part('includes/footer'); ?>