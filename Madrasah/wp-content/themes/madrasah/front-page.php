<?php get_header('secondary'); ?>
	<!-- BEGIN: PAGE CONTAINER -->
	<div class="row" style="padding: 5px;margin-top: 100px;">
		<div class="row mb-2">
			<div class="col-md-3" style="">
			<?php 
				 get_template_part('includes/section','left'); 
			?>
			</div>
			<div class="col-md-6" style="">
			<?php 
				 get_template_part('includes/section','center'); 
			?>
			</div>
			<div class="col-md-3" style="">
			<?php 
				 get_template_part('includes/section','right'); 
			?>
			</div>
		</div>
	</div>
	<!-- END: PAGE CONTAINER -->
<?php get_footer(); ?>

