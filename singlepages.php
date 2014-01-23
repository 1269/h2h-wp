<?php
/*
Template Name: Single Page Template
*/
?>
<?php get_header('reg'); ?>
	<div id="content">
		<div id="title">
		<h1><?php the_title(); ?></h1>
		<h2>Hand to Hand empowers and positively transforms individuals and communities to create a peaceful and just society through martial arts and self defense.</h2>
		</div><!-- title -->
		<?php if(have_posts()) : while ( have_posts() ) : the_post(); ?>
		<div class="pageContent">
		<?php the_content(); ?>
	<?php endwhile ?>
<?php endif ?>
		</div>
		<aside>
		<div class="section1">
			<h1>COME VISIT!</h1>
			<a href="#"><img src="../wp-content/themes/h2h-wp/images/map_thumb.jpg" alt=""></a>
		</div>
		<div class="section2">
			<h1>FIND US ONLINE!</h1>
			<a href="#"><img src="../wp-content/themes/h2h-wp/images/facebook.png" alt=""></a>
			<a href="#"><img src="../wp-content/themes/h2h-wp/images/twitter.png" alt=""></a>			
			<a href="#"><img src="../wp-content/themes/h2h-wp/images/youtube.png" alt=""></a>			
			<a href="#"><img src="../wp-content/themes/h2h-wp/images/donate.gif" alt=""></a>
			<h3><a href="#">STAY IN TOUCH! <img src="../wp-content/themes/h2h-wp/images/letter.gif" alt=""></a></h3>
		</div>
		</aside>
	</div><!-- content --> 
<?php get_footer('reg'); ?>