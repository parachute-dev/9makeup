<?php 

$colour = get_field('background_colour'); 
$vertical_positioning = get_field('vertical_positioning'); 
$horizontal_positioning = get_field('horizontal_positioning'); 
$padding = get_field('padding'); 
$margin = get_field('margin'); 

?>

<div class="testimonial-block content-block">
    <div class="container">
        <div class="row">
            <header class="content-header content-header-underline ">
                <h3>Testimonials</h3>
            </header>
        </div>
        <div class="row">


            <?php 

            $posts = get_field('testimonials');

            if( $posts ): ?>

                <?php foreach( $posts as $post): ?>
                    <?php setup_postdata($post); ?>


                    <div class="col-md-4 ">
                        <div class="testimonial-item">
                            <header class="content-header content-header-underline">
                                <h5><?php echo get_the_title($post->ID); ?></h5>
                                <h6><?php the_field('testimonial_company', $post->ID); ?></h6>
                            </header>
                            <div class="content">
                                <?php the_content(); ?>
                            </div>
                        </div>
                    </div>

                    <?php wp_reset_postdata(); ?>

            <?php endforeach; ?>
                <?php endif; ?>
        </div>
    </div>
</div>