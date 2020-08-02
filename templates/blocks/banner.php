<?php 

$colour = get_field('background_colour'); 
$vertical_positioning = get_field('vertical_positioning'); 
$horizontal_positioning = get_field('horizontal_positioning'); 
$padding = get_field('padding'); 
$margin = get_field('margin'); 
$height = get_field('height'); 

?>


<div class="banner-block content-block ">
    <div class="container-fluid">
        <div class="row">
            <div class="banner-carousel full ">
                <?php while(has_sub_field('banner')) {; ?>
                    <?php 
                    
                    $background_image = get_sub_field('background_image');
                    $link = get_sub_field('link');
                    $content = get_sub_field('content');
                    $sub_title = get_sub_field('sub_title');
                    $title = get_sub_field('title');
                    $video_background = get_sub_field('video_background');
                    $logo = get_sub_field('logo');


                    $colour = get_sub_field('background_colour'); 
$vertical_positioning = get_sub_field('vertical_positioning'); 
$horizontal_positioning = get_sub_field('horizontal_positioning'); 
$padding = get_sub_field('padding'); 
$margin = get_sub_field('margin'); 
$height = get_sub_field('height'); 



                    ?>
                    <div class="banner">
                        <div class="container background-colour-<?php echo $colour; ?> text-align-center container-height-<?php echo get_sub_field('height');?> vertical-<?php echo get_sub_field('vertical_positioning');?> horizontal-<?php echo get_sub_field('horizontal_positioning');?>">
                            <div class="image" style="background-image:url('<?php echo $background_image['url']; ?>')">
                            </div> 
                            <?php if (get_sub_field('video_background')) { ?>
                                <div class="background-video">
                                  <video inline autoplay muted>
                                    <source src="<?php echo $video_background['url']; ?>" type="<?php echo $video_background['mime_type']; ?>" />
                                        <source src="movie.ogg" type="video/ogg" />                                         
                                    </video>
                                </div>
                            <?php } ?>
                            <div class="content">
                                <div class="col-xs-12">
                                 <?php if ($sub_title) { ?>
                                    <h5><?php echo $sub_title; ?></h5>
                                <?php }?>
                                <?php if ($title) { ?>
                                    <h1><?php echo $title; ?></h1>
                                <?php }?>
                                <?php echo $content; ?>
                                <?php if ($link) { ?>
                                    <a href="<?php echo $link['url']; ?>" class="button"><?php echo $link['title']; ?></a>  
                                <?php }?>
                            </div>           
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
</div>
