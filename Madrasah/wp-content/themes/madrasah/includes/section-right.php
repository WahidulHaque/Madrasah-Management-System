<?php
$post_id = 28;
$queried_post = get_post($post_id);
$title1 = $queried_post->post_title;
$content1 = $queried_post->post_content;
?>
<?php
$post_id = 30;
$queried_post = get_post($post_id);
$title2 = $queried_post->post_title;
$content2 = $queried_post->post_content;
?>
<div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
	<div style="padding: 10px;background: #71c1d9;width: 100%;">
		<h5 style="font-size: 14px;font-weight: 700;color:#FFF;margin: 5px;line-height: 0.6;"> Administration </h5>
	</div>
	<div class="col-md-12 d-flex position-static" style="padding: 0!important;border-bottom:1px solid #CCC; margin:10px 0;">
		<div class="col-md-6" style="float:left;padding: 0 0 0 5px;"><img src="<?php echo get_the_post_thumbnail_url(28); ?>" style="width:100%;"/></div>
		<div class="col-md-6" style="float:left;padding: 0 5px;">
			<h6 style="font-size: 12px;font-weight:700;margin-top:10px;"><?php echo $title1; ?></h6>
			<p style="font-size: 10px;text-align:justify;"> <?php echo get_the_excerpt(28) ?></p>
			<p style="font-size: 10px;"><a href="<?php the_permalink(28); ?>">বিস্তারিত.... </a></p>
		</div>
	</div>
	<div class="col-md-12 d-flex position-static" style="padding: 0!important; margin:10px 0;">
		<div class="col-md-6" style="float:left;padding: 0 0 0 5px;"><img src="<?php echo get_the_post_thumbnail_url(30); ?>" style="width:100%;"/></div>
		<div class="col-md-6" style="float:left;padding: 0 5px;">
			<h6 style="font-size: 12px;font-weight:700;margin-top:10px;"><?php echo $title2; ?></h6>
			<p style="font-size: 10px;text-align:justify;"><?php echo get_the_excerpt(30) ?></p>
			<p style="font-size: 10px;"><a href="<?php the_permalink(30); ?>">বিস্তারিত.... </a></p>
		</div>
	</div>
</div>

<?php
$args = array(
    'post_type'      => 'post',
    'post_status'    => 'publish',
    'category_name'  => 'online-admission',
    'posts_per_page' => 10,
	'orderby'        => 'id',
    'order'          =>'AES',
);
$arr_posts_n = new WP_Query( $args );
?>
<div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
	<div style="padding: 10px;background: #71c1d9;width: 100%;">
		<h5 style="font-size: 14px;font-weight: 700;color:#FFF;margin: 5px;line-height: 0.6;">ONLINE ADMISSION</h5>
	</div>
	<div class="col p-4 d-flex flex-column position-static" style="padding: 0!important;">
		<?php if ( $arr_posts_n->have_posts() ) :
		while ( $arr_posts_n->have_posts() ) :
		$arr_posts_n->the_post();
		?>
		<span style="background-color: #5cb85c;border-bottom-width: 3px;border-radius: 3px;border-color: #4cae4c;display: inline-block;padding: 6px 12px;margin: 2%;width: 96%;font-size: 16px;"><a href="<?php the_permalink(); ?>" style="color:#FFF;"><?php the_title(); ?></a></span>
		<?php
		endwhile;
		endif;
		?>
	</div>
</div>

<div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
	<div style="padding: 10px;background: #71c1d9;width: 100%;">
		<h5 style="font-size: 10px;font-weight: 700;color:#FFF;margin: 5px;line-height: 0.6;">করোনা ভাইরাস প্রতিরোধে যোগাযোগ</h5>
	</div>
	<div class="col p-4 d-flex flex-column position-static" style="padding: 0!important;">
		<div class="col-md-12" style="padding: 0;">
			<img src="<?php echo get_template_directory_uri(); ?>/img/corona_new.jpg" style="width:100%;padding: 5px;"/>
		</div>
		<div class="col-md-12" style="padding: 0;">
			<iframe frameborder="0" src="https://www.youtube.com/embed/fPbYaTKKtmA" style="width:100%;padding: 5px;"></iframe>
		</div>
	</div>
</div>

<?php
$post_id = 32;
$queried_post = get_post($post_id);
$title3 = $queried_post->post_title;
$content3 = $queried_post->post_content;
?>
<div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
	<div style="padding: 10px;background: #71c1d9;width: 100%;">
		<h5 style="font-size: 14px;font-weight: 700;color:#FFF;margin: 5px;line-height: 0.6;"><?php echo $title3; ?></h5>
	</div>
	<div class="col p-4 d-flex flex-column position-static" style="padding: 0!important;">
		<?php echo get_the_excerpt(32) ?>
	</div>
</div>