<div class="instagram-block content-block">
	<div class="container">

		<div class="row">
			<div class="col-md-12">
				<header>
					<h3>Instagram Feed</h3>
					<ul class="social-media">
						<li><a href="https://www.instagram.com/9makeup/" target="_blank" class="fa fa-instagram"></a></li>
						<li><a href="https://www.facebook.com/9makeup/" target="_blank" class="fa fa-facebook"></a></li>
						<li><a href="https://twitter.com/9makeup" target="_blank" class="fa fa-twitter"></a></li>
					</ul>
				</header>
			</div>
		</div>
		<div class="row" id="instagram-feed">
		</div>
	</div>
</div>
<div id="footer">
	<div class="logo container">
		<div class="row">
			<div class="col-md-12">
				<img src="<?php bloginfo('template_url');?>/assets/img/logo.png" alt="" />
			</div>
		</div>
	</div>
	<div class="footer-links container">
		<div class="row">
			<div class="col-md-12">
				<nav>
					<?php 
					wp_nav_menu(
						array(
							'container' => false,
							'menu' => 'Main', 
						) 
					); 
					?>
				</nav>
			</div>
		</div>			
	</div>
	<div class="bottom-footer container">
		<div class="row">
			<div class="col-md-12">
				<div id="site-credit">
					&copy; <?php echo date('Y'); ?> 9Makeup 
				</div>
			</div>
		</div>
	</div>
</div>
<?php wp_footer(); ?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jQuery.mmenu/8.5.13/mmenu.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery.mmenu/8.5.13/mmenu.min.js"></script>



<script>

jQuery(document).ready(function($) {
	

});

	document.addEventListener(
		"DOMContentLoaded", () => {

			new Mmenu( "#navmenu", {
			}, {
				offCanvas: {
					clone: true
				}
			});

	
		}
		);

	jQuery(document).ready(function () { 
		jQuery.ajax({
			url: 'https://www.instagram.com/9makeup/?__a=1', 
			dataType: 'json',
			type: 'GET',
			success: function(data){ 
				var count = 0;
				for( x in data.graphql.user.edge_owner_to_timeline_media.edges ){
					if (count < 4) {
						jQuery('#instagram-feed').append('<div class="col-md-3 col-xs-6"><div class="insta-block"><a href="https://www.instagram.com/p/' + data.graphql.user.edge_owner_to_timeline_media.edges[x].node.shortcode +'"><img src="'+data.graphql.user.edge_owner_to_timeline_media.edges[x].node.thumbnail_src +'"></a></div></div>');
						count++;
					}
				}
			},
			error: function(data){
			}
		});


	});

</script>

</body>
</html>

