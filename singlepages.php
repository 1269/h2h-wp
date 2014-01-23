<?php
/*
Template Name: Single Page Template
*/
?>
<?php get_header('reg'); ?>
	<div id="content">
		<div id="title">
		<h1>Hand to Hand Kajukenbo</h1>
		<h2>Hand to Hand empowers and positively transforms individuals and communities to create a peaceful and just society through martial arts and self defense.</h2>
		</div><!-- title -->
		<div id="featuredPosts">
		<?php query_posts('showposts=4'); ?>
			<?php if(have_posts()) : while ( have_posts() ) : the_post(); ?>
			<div class="featured">
			<?php// echo get_the_post_thumbnail( $post_id, $size, $attr ); ?>
			<img src="<?php 
				$thumb_id = get_post_thumbnail_id();
				$thumb_url = wp_get_attachment_image_src($thumb_id, thumbnail, true);
				echo $thumb_url[0];
			?>" alt="">
			<h1><?php the_title(); ?></h1>
			<p><?php the_excerpt(); ?></p>
			<a href=""></a>
			</div>
			<?php endwhile; ?>
			<?php endif; ?>
		</div><!-- featuredPosts -->
		<aside>
		<div class="section1">
			<h1>COME VISIT!</h1>
			<a href="#"><img src="wp-content/themes/h2h-wp/images/map_thumb.jpg" alt=""></a>
		</div>
		<div class="section2">
			<h1>FIND US ONLINE!</h1>
			<a href="#"><img src="wp-content/themes/h2h-wp/images/facebook.png" alt=""></a>
			<a href="#"><img src="wp-content/themes/h2h-wp/images/twitter.png" alt=""></a>			
			<a href="#"><img src="wp-content/themes/h2h-wp/images/youtube.png" alt=""></a>			
			<a href="#"><img src="wp-content/themes/h2h-wp/images/donate.gif" alt=""></a>
			<h3><a href="#">STAY IN TOUCH! <img src="wp-content/themes/h2h-wp/images/letter.gif" alt=""></a></h3>
		</div>
		</aside>
	</div><!-- content -->
<?php get_footer(); ?>