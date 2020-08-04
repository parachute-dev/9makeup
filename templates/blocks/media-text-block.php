<?php 

$colour = get_field('background_colour'); 
$vertical_positioning = get_field('vertical_positioning'); 
$horizontal_positioning = get_field('horizontal_positioning'); 
$padding = get_field('padding'); 
$margin = get_field('margin'); 
$height = get_field('height'); 


$background_image = get_field('background_image');
$link = get_field('link');
$content = get_field('content');
$title = get_field('title');
$title = get_field('title');
$video_background = get_field('video_background');
$logo = get_field('logo');

?>


<div class="media-text-block content-block content-width-full container-height-<?php echo $height; ?> style-full text-left vertical-<?php echo $vertical_positioning ; ?> horizontal-<?php echo $horizontal_positioning; ?> background-colour-<?php echo $colour; ?>">
    <div class="container">
        <div class="row is-flex">
            <div class="col-md-6 image-container second ">
                <div class="image" style="background-image:url('<?php echo $background_image['url']; ?>')"></div>
            </div>
            <div class="col-md-6 content-container first ">
                <div class="content">
                    <header class="content-header content-header-underline">
                        <h2><?php echo $title; ?></h2>
                    </header>
                    <div class="user-content">
                        <?php the_field('content'); ?>
                        <?php if ($link) { ?>
                            <a href="<?php echo $link['url']; ?>" class="button"><?php echo $link['title']; ?></a>  
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
