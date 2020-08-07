<?php 
$colour = get_field('background_colour'); 
$vertical_positioning = get_field('vertical_positioning'); 
$horizontal_positioning = get_field('horizontal_positioning'); 
$padding = get_field('padding'); 
$margin = get_field('margin'); 

$background_image = get_field('background_image');
$link = get_field('link');
$content = get_field('content');
$title = get_field('title');
$title = get_field('title');
$video_background = get_field('video_background');
$logo = get_field('logo');
?>
<div class="media-text-block content-block content-width-full container-height-<?php echo $height; ?> style-full text-left vertical-<?php echo $vertical_positioning ; ?> horizontal-start background-colour-<?php echo $colour; ?>">
    <div class="container">
        <div class="row is-flex">
            <div class="col-md-6 image-container second ">
                <div class="image" style="background-image:url('<?php echo $background_image['url']; ?>')"></div>
            </div>
            <div class="col-md-6 content-container first ">
                <div class="content">
                    <header class="content-header content-header-underline">
                        <h3>Get in touch</h3>
                    </header>
                    <div class="user-content">
                        <?php echo do_shortcode('[ninja_form id=1]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="testimonial-block content-block" style="display:none;">
    <div class="container">
        <div class="row">
            <header class="content-header content-header-underline ">
                <h3>Other ways to contact us</h3>
            </header>
        </div>
        <div class="row is-flex">
            <div class="col-md-4 ">
                <div class="testimonial-item">
                    <div class="icon">
                        <i class="fa fa-envelope"></i>
                    </div>
                    <header class="content-header content-header-underline">
                        <h5>Email</h5>
                        <h6>  <a style="color:inherit" href="tel:sales@9makeup.com">
                            sales@9makeup.com
                        </a>
                    </h6>
                </header>
            </div>
        </div>
        <div class="col-md-4 ">
            <div class="testimonial-item">
                <div class="icon">
                    <i class="fa fa-phone"></i>
                </div>
                <header class="content-header content-header-underline">
                    <h5>Phone</h5>
                    <h6> 
                     <a style="color:inherit" href="tel:0000000000"> 0000000000</a>
                 </h6>
             </header>
         </div>
     </div>
     <div class="col-md-4 ">
        <div class="testimonial-item">
            <div class="icon">
                <i class="fa fa-map-marker"></i>
            </div>
            <header class="content-header content-header-underline">
                <h5>Address</h5>
                <h6>
                    <?php the_field('address','option') ?>
                </h6>
            </header>
        </div>
    </div>
</div>
</div>
</div>