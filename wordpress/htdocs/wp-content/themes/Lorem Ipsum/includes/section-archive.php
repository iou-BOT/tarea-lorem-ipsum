<?php if(have_posts() ): while(have_posts() ): the_post();?>

 <div class="card mb-3 mt-3">
    <div class="d-flex justify-content-center align-items-center">
        <div class=" card-body d-flex">
            <?php if(has_post_thumbnail()):?>
                <img src="<?php the_post_thumbnail_url();?>" alt="<?php the_title();?>">    
        <?php endif;?>
        </div>
        <div class="card-body">
            <h3><?php the_title();?></h3>
            <?php the_excerpt();?>

            <a href="<?php the_permalink();?>" class= "btn btn-success">Leer Más</a>
        </div>
    </div>
 </div>

<?php endwhile; else: endif;?>