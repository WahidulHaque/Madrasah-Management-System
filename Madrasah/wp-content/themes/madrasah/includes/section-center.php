<!--Slider Start-->
<?php

$post_id = 64;
$queried_post = get_post($post_id);
$title1 = $queried_post->post_title;
$content1 = $queried_post->post_content;

$args = array(
    'post_type'      => 'post',
    'post_status'    => 'publish',
    'category_name'  => 'slider',
    'posts_per_page' => 10,
	'orderby'        => 'id',
    'order'          =>'AES',
);
$arr_posts = new WP_Query( $args );
?>
<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
	<div class="carousel-item active">
	  <img class="d-block w-100" src="<?php echo get_the_post_thumbnail_url(64); ?>" alt="First slide">
	</div>
	<?php if ( $arr_posts->have_posts() ) :
		while ( $arr_posts->have_posts() ) :
		$arr_posts->the_post();
		?>
		<div class="carousel-item <?php the_content(); ?>">
		<?php if(has_post_thumbnail()): ?>
		  <img class="d-block w-100" src="<?php the_post_thumbnail_url(''); ?>" alt="<?php the_title(); ?>">
		 <?php endif; ?>
		</div>
		<?php
		endwhile;
		endif;
		?>
  </div>
</div>

<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
	<div class="carousel-inner">
		
	</div>
</div>
<!--Slider End-->

<?php
$args = array(
    'post_type'      => 'post',
    'post_status'    => 'publish',
    'category_name'  => 'notice',
    'posts_per_page' => 10,
	'orderby'        => 'id',
    'order'          =>'DES',
);
$arr_posts_n = new WP_Query( $args );
?>
<div class="row no-gutters border rounded overflow-hidden flex-md-row mb-9 shadow-sm h-md-250 position-relative" style="margin-top:30px;">
	<div style="padding: 10px;background: #e2e2e2;width: 100%;">
		<h5 style="font-size: 14px;font-weight: 700;color:#000;margin: 5px;line-height: 0.6;">
		<marquee scrollamount="5" style="line-height:2;">
		<?php if ( $arr_posts_n->have_posts() ) :
		while ( $arr_posts_n->have_posts() ) :
		$arr_posts_n->the_post();
		?>
		<a href="<?php the_permalink(); ?>"><?php the_title(); ?>|</a>
		<?php
		endwhile;
		endif;
		?>
		</marquee>
	</div>
</div>
<div class="row no-gutters border rounded overflow-hidden flex-md-row mb-9 shadow-sm h-md-250 position-relative" style="margin-top:30px;background: #e6fbd9;">
	<div style="padding: 10px;background: #71c1d9;width: 100%;">
		<h5 style="font-size: 14px;font-weight: 700;color:#FFF;margin: 5px;line-height: 0.6;">Notice Board</h5>
	</div>
	<div class="col-md-12 d-flex flex-column position-static">
		<div style="margin:5px; padding:10px;">
			<ul style="list-style: none;margin-left: -40px;">
				<?php if ( $arr_posts_n->have_posts() ) :
				while ( $arr_posts_n->have_posts() ) :
				$arr_posts_n->the_post();
				?>
				<li style="background: rgba(0, 0, 0, 0) url(<?php echo get_template_directory_uri(); ?>/img/bg_block_list.png) no-repeat scroll center left 0px !important; border-bottom: 1px dotted #717070;">
				<a href="<?php the_permalink(); ?>" style="font-size:12px;color:#151314;margin-left: 30px;"><?php the_title(); ?></a>
				</li>
				<?php
				endwhile;
				endif;
				?>
				<?php $categories = get_the_category(); foreach((array)$categories as $cat):?>
				<a href="<?php echo get_category_link($cat->term_id);?>">
				<span style="float: right;background: #ca0000;padding: 0px 7px;color: #FFF;margin-top:2.5px;font-size:12px;">All</span>
				<a>
				<?php endforeach;?>
			</ul>
		</div>
	</div>
</div>
<div class="row no-gutters border rounded overflow-hidden flex-md-row mb-9 shadow-sm h-md-250 position-relative" style="margin-top:30px;">
	<div style="padding: 10px;background: #71c1d9;width: 100%;">
		<h5 style="font-size: 14px;font-weight: 700;color:#FFF;margin: 5px;line-height: 0.6;">Message of the Principal</h5>
	</div>
	<div class="col-md-12 d-flex flex-column position-static">
		<div style="margin:5px; padding:10px;border: 1px solid #dee2e6!important;border-radius: 5px;">
		  <div class="mb-1 text-muted" style="font-size: 14px;">I am fortunate  to have a very strong team of high skilled 
		  professionals who support me to carry forward the mission of  BCC. We have gone through a serious transformation 
		  recently to run our business treating everyone coming to us a customer. This means we try to ensure “customer service” 
		  in whatever we do and are always keen to see a happy smile in all our customer’s face. So BCC now being a government 
		  organization is working more or less like a private company where customer satisfaction is at the core of whatever we do.</div>
		</div>
	</div>
</div>
<div class="row no-gutters border rounded overflow-hidden flex-md-row mb-9 shadow-sm h-md-250 position-relative" style="margin-top:30px;">
	<div style="background: #e2e2e2;width: 100%;">
		<a href="https://www.youtube.com/watch?v=v1R-CB3e-pw" target="_blank">
			<img src="<?php echo get_template_directory_uri(); ?>/img/pm_pic_banner.jpg" style="width: 100%;"/>
		</a>
	</div>
</div>