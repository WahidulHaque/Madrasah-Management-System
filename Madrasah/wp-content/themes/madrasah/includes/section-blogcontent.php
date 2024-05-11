<?php  if(have_posts()): while(have_posts()): the_post(); ?>
	<?php
		$fname = get_the_author_meta('first_name');
		$lname = get_the_author_meta('last_name');
	?>
	<div class="c-panel c-margin-b-30">
		<!--div class="c-author"><a href="#">By <span class="c-font-uppercase"><!--?php echo $fname; ?> <!--?php echo $lname; ?></span></a></div>-->
		<div class="c-date"><span class="c-font-uppercase"><?php echo get_the_date('l jS F, Y h:i:s'); ?></span></div>
		
	</div>
	<div class="c-desc"><p><?php the_content(); ?></p></div>
	<div class="c-comments"><!--?php comments_template(); ?--></div>
	
<?php endwhile; else: endif; ?>