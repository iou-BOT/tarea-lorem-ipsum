<?php
/*
Template Name: Quienes-Somos?
*/
?>

<?php get_header();?>

<section class="page-wrap">
<div class="container">

    <h1 style="text-align:center" class="mb-4"><?php the_title();?><h1>

    <div class="row align-items-center">

        <div class="col-lg-6 ">
        <img src="<?php echo get_template_directory_uri(); ?>/images/people.jpeg" alt="people" 
        style="heigth:750px;" >

        </div>

        <div class="col-lg-6">
            <?php get_template_part('includes/section','content');?>

        </div>
    </div> 

</div>
</section>

<?php get_footer();?>