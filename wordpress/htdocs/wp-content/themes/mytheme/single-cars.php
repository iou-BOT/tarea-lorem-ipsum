<?php get_header();?>

<section class="page-wrap">
    <div class="container">
    <div class="card-body d-flex">
            <?php if(has_post_thumbnail()):?>
                <img src="<?php the_post_thumbnail_url();?>" alt="<?php the_title();?>">    
            <?php endif;?>
    </div>
        <div class="row">
            <div class="col-lg-6">
                <h1><?php the_title();?></h1>

                <?php get_template_part('includes/section','cars');?>

                <?php wp_link_pages();?>
            </div>
            <div class="col-lg-6">
                <ul>
                    <li>
                        Color: <?php the_field('color');?>
                    </li>

                    <li>
                        Price: <?php the_field('price');?>
                    </li>

                    <li>
                        Year: <?php the_field('year');?>
                    </li>
                </ul>

                <h3>Features</h3>
                <ul>
                    <?php if(have_rows('features')):?>
                    <?php while(have_rows('features')): the_row();
                        $feature = get_sub_field('feature');
                    ?>

                    <li>
                        <?php echo $feature;?>
                    </li>

                    <?php endwhile;?>
                    <?php endif;?>
                </u>
                
                <?php
                    $gallery = get_field('gallery');
                    if($gallery):?>

                        <?php foreach($gallery as $image):?>
                            <img src="<?php echo $image['sizes']['blog-small'];?>" class="img-fluid">
                        <?php endforeach;?>

                    <?php endif;?>


            </div>
        </div>

    </div>
</section>

<?php get_footer();?>