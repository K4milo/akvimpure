<?php
  /*
    Template Name: Home page
  */
get_template_part('includes/header');
	//Query fon content
?>

<!--hero banner-->
<?php get_template_part('includes/hero-banner');?>

<!--about-->
<?php get_template_part('includes/home-about');?>

<!--services-->
<?php get_template_part('includes/home-services');?>

<!--portfolio-->
<?php get_template_part('includes/home-portfolio');?>

<!--contact-->
<?php get_template_part('includes/home-contact');?>

<?php get_template_part('includes/footer'); ?>