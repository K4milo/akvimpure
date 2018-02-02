<?php get_template_part('includes/header'); ?>

<div class="container-fluid">
  <div class="row">
      <?php
        while(have_posts()):the_post();
        $id = $post->ID;
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

      <div class="post-data container single-empleado">
        <div class="post-content">
          <div class="main col-md-8">
            <figure>
              <?php the_post_thumbnail('full'); ?>
            </figure>
            <?php the_content(); ?>
          </div>
          <div class="col-md-4 related-post">
            <h3>Otros Empleados</h3>
            <?php
               $args = array(
                    'post__not_in' => array($post->ID),
                    'posts_per_page'=>-1,
                    'post_type' => 'empleado'
                );

                $query_reated = new WP_Query($args);

                while($query_reated->have_posts()):$query_reated->the_post();
            ?>

            <article>
              <figure>
                <?php the_post_thumbnail('thumbnail'); ?>
              </figure>
              <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
            </article>

            <?php endwhile;
              wp_reset_postdata();
            ?>
          </div>
        </div>
      </div>

    <?php endwhile;
      wp_reset_postdata();
    ?>
  </div><!-- /.row -->
</div><!-- /.container -->

<!--contact-->
<?php get_template_part('includes/home-contact');?>

<?php get_template_part('includes/footer'); ?>