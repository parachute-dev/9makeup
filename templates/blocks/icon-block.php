<?php 

$colour = get_field('background_colour'); 
$vertical_positioning = get_field('vertical_positioning'); 
$horizontal_positioning = get_field('horizontal_positioning'); 
$padding = get_field('padding'); 
$margin = get_field('margin'); 

?>
<div class="icon-block content-block content-block-padding">
    <div class="container">
        <?php if (get_field('title')) { ?>
            <div class="row">
                <div class="col-md-12">
                    <header class="content-header">
                        <h3><?php the_field('title'); ?></h3>
                    </header>
                </div>
            </div>
        <?php }?>
        <div class="row">
            <div class="callout-carousel">
                <?php 
                while(has_sub_field('icons')) {
                   $image = get_sub_field('image');
                   $link = get_sub_field('link');
                   $content = get_sub_field('content');
                   $sub_title = get_sub_field('sub_title');
                   $title = get_sub_field('title');
                   $link_url = "";
                   if ($link){
                    $link_url = $link['url'];
                }
                ?>
                <div class="col-md-4">
                    <div class="icon">
                        <a href="<?php echo $link_url; ?>">
                            <img src="<?php echo $image['url']; ?>" alt="">
                            <div class="content">
                                <h4><?php echo $title; ?></h4>  
                                <h5><?php echo $sub_title; ?></h5>
                            </div>
                        </a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
</div>
