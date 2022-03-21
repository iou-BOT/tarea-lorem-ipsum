<?php get_header();?>


<section class="page-wrap">
<div class="container">
    <h1 style="text-align:center"><?php the_title();?></h1>
    <?php if(have_posts() ): while(have_posts() ): the_post();?>
        <div class="card-body mt-4 justify-content-center align-items-center">
            <?php the_content();?>
        </div>  

    <?php endwhile; else: endif;?>
</div>
</section>

<?php get_footer();?>