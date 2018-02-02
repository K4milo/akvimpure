<?php get_template_part('includes/header'); ?>

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
        <div class="post-content">
        <?php the_content(); ?>
        </div>
      </div>    

    <?php endwhile; 
      wp_reset_postdata();
?>
  </div><!-- /.row -->
</div><!-- /.container -->

<?php get_template_part('includes/footer'); ?>
