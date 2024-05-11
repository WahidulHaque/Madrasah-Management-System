<style>
.c-page-breadcrumbs li{
	position: relative;margin-left: 5px;
}
</style>

<?php get_header('secondary'); ?>
<div class="c-layout-page" style="margin-top: 100px;">

	<div class="c-layout-breadcrumbs-1 c-fonts-uppercase c-fonts-bold c-bordered c-bordered-both" style="">
		<div class="container">
			<div class="c-page-title c-pull-left" style="width:70%;float:left;background: #dfdede;">
				<h3 class="c-font-uppercase c-font-sbold" style="font-size: 18px;margin: 9px;"><?php the_title(); ?></h3>
			</div>
			<div style="width:30%;float:right;background: #dfdede;">
			<ul class="c-page-breadcrumbs c-theme-nav c-pull-right c-fonts-regular" style="list-style:none;display: flex;margin: 8px;float:right;">
				<li><a href="<?php echo home_url(); ?>">Home</a></li>
				<li> / </li>
				<li><!--BRING: Category-->
					<?php $categories = get_the_category(); foreach((array)$categories as $cat):?>
						<a href="<?php echo get_category_link($cat->term_id);?>"> <?php echo $cat->name; ?></a>
					<?php endforeach;?>
				</li><!--END: Category-->
				<li class="c-state_active"><!--?php the_title(); ?--></li>						
			</ul>
			</div>
		</div>
	</div><!-- END: LAYOUT/BREADCRUMBS/BREADCRUMBS-1 -->

	<!-- BEGIN: BLOG LISTING -->
	<div class="c-content-box c-size-md">
		<div class="container">
			<div class="row" style="width: 100%;">
				<div class="col-md-12">
					<div class="c-content-blog-post-1-view">
						<div class="c-content-blog-post-1">
							<div style="margin:20px 0;">
								<div class="c-title c-font-bold c-font-uppercase">
									<a href="<?php wp_link_pages(); ?>"><?php the_title(); ?></a>
								</div>
								<?php get_template_part('includes/section','blogcontent'); ?>
							</div>
								<?php wp_link_pages(); ?>
								<!--?php previous_posts_link(); ?-->
								<!--?php next_posts_link(); ?-->
								<?php
									previous_post_link('Previous <span class="left">&laquo; %link</span> . ');
									next_post_link(' . <span class="right">%link &raquo;</span> Next');
								?>                           
								<div class="clearfix"></div>
						</div>
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>
</div>


<?php get_footer(); ?>