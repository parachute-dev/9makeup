

<div class="faq-container">
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
                <?php $icons = get_field('faqs'); ?>
                <?php foreach ($icons as $icon) { ?>
                <div class="faq-item">
                    <div class="faq-header"><?php echo $icon['title']; ?> <i class="fa fa-chevron-down"></i></div>
                    <div class="faq-content">
                        <?php echo $icon['content']; ?>
                    </div>
                </div>
            <?php }?>
            </div>
        </div>
    </div>
</div>


<script>

    jQuery(document).ready(function($) {
        jQuery(".faq-item .faq-header").click(function(event){
            jQuery(this).next(".faq-content").slideToggle();
            jQuery(this).parent().toggleClass("active");
        });
    });

</script>