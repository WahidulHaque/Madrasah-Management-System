<div class="col-md-12 d-flex flex-column position-static">
	<div style="margin:5px; padding:10px;">
		<ul style="list-style: none;margin-left: -40px;">
			
<?php  if(have_posts()): while(have_posts()): the_post(); ?>
	<?php
		$fname = get_the_author_meta('first_name');
		$lname = get_the_author_meta('last_name');
	?>
			<li style="background: rgba(0, 0, 0, 0) url(<?php echo get_template_directory_uri(); ?>/img/bg_block_list.png) no-repeat scroll center left 0px !important; border-bottom: 1px dotted #717070;">
				<a href="<?php the_permalink(); ?>" style="font-size:12px;color:#151314;margin-left: 30px;"><?php the_title(); ?></a>
			</li>
<?php endwhile; else: endif; ?>

		</ul>
	</div>
</div>