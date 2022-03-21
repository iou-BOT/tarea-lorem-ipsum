<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lorem ipsum dolor.!</title>
    <?php wp_head();?>
    
</head>
<body>
        <header>
                    <div class="container">
                        <p class="logo"><?php the_field('site-name'); ?></p>
                        <nav>
                            <a href="#somos-proya"><?php the_field('option-1'); ?></a>
                            <a href="#nuestros-programas"><?php the_field('option-2'); ?></a>
                            <a href="#caracteristicas"><?php the_field('option-3'); ?></a>
                        </nav>
                    </div>
        </header>

        <section id="hero" style="background-image: url(<?php the_field('first-section-image'); ?>);">
                        
            <h1 class="mb-5"><?php the_field('cover-title'); ?></h1>
            
            <button><?php the_field('button-text'); ?></button>
        </section>

        <section id="somos-proya">
            <div class="container">
                <div class="img-container"style="background-image: url(<?php the_field('second-section-image'); ?>);" >
                    
                </div>
                <div class="texto">

                    <?php the_field('team-description'); ?>
                </div>
            </div>
        </section>

        <section id="nuestros-programas">
            <div class="container">
                <h2><?php the_field('third-section-name'); ?></h2>
                <div class="programas">
                    <div class="carta" style="background-image: url(<?php the_field('description-image-1'); ?>);">
                        <?php the_field('description-1'); ?>
                        <button><?php the_field('button-text-1'); ?></button>
                    </div>
                    <div class="carta" style="background-image: url(<?php the_field('description-image-2'); ?>);">
                        <?php the_field('description-2'); ?>
                        <button><?php the_field('button-text-2'); ?></button>
                    </div>
                    <div class="carta" style="background-image: url(<?php the_field('description-image-3'); ?>);">
                        <?php the_field('description-3'); ?>
                        <button><?php the_field('button-text-3'); ?></button>
                    </div>  
                </div>
            </div>
        </section>

        <section id="caracteristicas" style="background-image: url(<?php the_field('chara-cover'); ?>)" >
            <div class="container">
                <ul>
                    <?php the_field('chara-description'); ?>
                </ul>
            </div>
        </section>

        <section id="final">
            <h2><?php the_field('final-section-name'); ?></h2>
            <button><?php the_field('final-button-text'); ?></button>
        </section>