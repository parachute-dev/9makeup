
<div class="banner-block content-block ">
    <div class="<?php echo $container_inner_type; ?>">
        <div class="row">
            <div class="banner-carousel full ">
                    <div class="banner">
                        <div class="container <?php echo $class_str; ?>">
                            <div class="image" style="background-image:url('<?php echo $image_src; ?>')">
                            </div> 
                            <div class="content">
                                <h2 class="h1"><?php echo $title; ?></h2>
                                <?php echo $content; ?>
                                <?php if ($cta_link) { ?>
                                <a href="<?php echo $cta_link; ?>" class="button"><?php echo $cta_link_text; ?></a>             
                            <?php }?>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>