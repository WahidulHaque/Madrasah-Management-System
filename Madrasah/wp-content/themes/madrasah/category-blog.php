<?php get_header('secondary'); ?>
<div class="c-layout-page">

	<div class="c-layout-breadcrumbs-1 c-fonts-uppercase c-fonts-bold c-bordered c-bordered-both" style="">
		<div class="container">
			<div class="c-page-title c-pull-left">
				<h3 class="c-font-uppercase c-font-sbold"><?php the_title(); ?></h3>
			</div>
			<ul class="c-page-breadcrumbs c-theme-nav c-pull-right c-fonts-regular">
				<li><!--BRING: Category-->
					<?php $categories = get_the_category(); foreach((array)$categories as $cat):?>
						<a href="<?php echo get_category_link($cat->term_id);?>"> <?php echo $cat->name; ?></a>
					<?php endforeach;?>
				</li><!--END: Category-->
				<li>/</li>
				<li class="c-state_active"><?php the_title(); ?></li>						
			</ul>
		</div>
	</div><!-- END: LAYOUT/BREADCRUMBS/BREADCRUMBS-1 -->



	<section class="page-wrap">
		<div class="container">
		
			<h1><?php echo single_cat_title(); ?></h1>
		
			<?php get_template_part('includes/section','archive'); ?>
			<!--?php previous_posts_link(); ?-->
			<!--?php next_posts_link(); ?-->
			<?php
				global $wp_query;
				$big = 999999999; //need an unlikely integer
				echo paginate_links( array(
					'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
					'format' => '?paged=%#%',
					'current' => max(1, get_query_var('paged')),
					'total' => $wp_query->max_num_pages
				));
			?>
			
		</div>
	</section>

</div>




<?php get_footer(); ?>