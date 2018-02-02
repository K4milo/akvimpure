<?php 
/*

  Template Name: Blog

*/

get_template_part('includes/header'); ?>

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

<div class="container blog-page">
  <div class="container">
    <?php
      query_posts('post_type=post&posts_per_page=100');
      while(have_posts()):the_post();
    ?>
      <article>
        <figure class="thumb">
          <a href="<?php the_permalink();?>">
            <?php the_post_thumbnail('thumbnail'); ?>
          </a>
        </figure>
        <h3><?php the_title(); ?></h3>
        <?php the_excerpt(); ?>
        <a href="<?php the_permalink();?>">Ver Más</a>
      </article>  
      
    <?php endwhile; 
          wp_reset_postdata();
    ?>
  </div>
</div>

<?php get_template_part('includes/footer'); ?>