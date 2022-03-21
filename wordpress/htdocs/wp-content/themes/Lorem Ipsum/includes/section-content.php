<?php if(have_posts() ): while(have_posts() ): the_post();?>
    <div class="card mt-4">
        <?php the_content();?>
    </div>

<?php endwhile; else: endif;?>