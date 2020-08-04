<?php 

$colour = get_field('background_colour'); 
$vertical_positioning = get_field('vertical_positioning'); 
$horizontal_positioning = get_field('horizontal_positioning'); 
$padding = get_field('padding'); 
$margin = get_field('margin'); 

?>



<div class="category-callout-block content-block content-block-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <header class="content-header">
                    <h3><?php the_field('title'); ?></h3>
                </header>
            </div>
        </div>
        <div class="row">
            <div class="callout-carousel">

                <?php 

                while(has_sub_field('callout_block')) {

                 $background_image = get_sub_field('background_image');
                 $link = get_sub_field('link');
                 $content = get_sub_field('content');
                 $sub_title = get_sub_field('sub_title');
                 $title = get_sub_field('title');
                 $video_background = get_sub_field('video_background');
                 $logo = get_sub_field('logo');
                 $link_url = "";

          

                 if ($link){
                    $link_url = $link['url'];
                 }

                 ?>


       <div class="col-md-4">
                    <div class="category-callout">
                        <a href="<?php echo $link_url; ?>">
                            <div class="image" style="background-image:url('<?php echo $background_image['url']; ?>')">
                            </div>
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
