

<div class="text-container">
    <div class="container">
        <?php if (get_field('title')) { ?>
            <div class="row">
                <div class="col-md-12">
                    <header>
                        <h2><?php echo get_field('title'); ?></h2>
                    </header>
                </div>
            </div>
        <?php }?>
        <div class="row">
            <div class="col-md-12">
                <div class="user-content" style="padding:3em 0">
                <?php the_field('content');?>
                </div>
            </div>
        </div>
    </div>
</div>

 