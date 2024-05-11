<?php
$post_id = 26;
$queried_post = get_post($post_id);
$title1 = $queried_post->post_title;
$content1 = $queried_post->post_content;
?>
<div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
	<div style="padding: 10px;background: #71c1d9;width: 100%;">
		<h5 style="font-size: 14px;font-weight: 700;color:#FFF;margin: 5px;line-height: 0.6;">Message of the Principal</h5>
	</div>
	
		<div class="col-md-12" style="float:left;padding: 0 0 0 5px;"><img src="<?php echo get_the_post_thumbnail_url(26); ?>" style="width:100%;"/></div>
		<div class="col-md-12" style="float:left;padding: 0 5px;text-align:center;">
			<h6 style="font-size: 12px;font-weight:700;margin-top:10px;"><?php echo $title1; ?></h6>
			<p style="font-size: 12px;"> <?php echo get_the_excerpt(26) ?></p>
			<p style="font-size: 10px;"><a href="<?php the_permalink(26); ?>">Continue Reading ...</a></p>
		</div>
	
</div>

<div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
	<div style="padding: 10px;background: #71c1d9;width: 100%;">
		<h5 style="font-size: 14px;font-weight: 700;color:#FFF;margin: 5px;line-height: 0.6;">মাদ্রাসা সম্পর্কিত তথ্য</h5>
	</div>
	<div class="col p-4 d-flex flex-column position-static" style="padding: 0!important;">
		<ul style="list-style: none;margin-left: -40px;">
			<li style="background: rgba(0, 0, 0, 0) url(<?php echo get_template_directory_uri(); ?>/img/bg_block_list.png) no-repeat scroll center left 10px !important;">
			 <a href="#" style="font-size:12px;color:#151314;margin-left: 30px;">পাসপোর্ট সংক্রান্ত </a>
			</li>
			<li style="background: rgba(0, 0, 0, 0) url(<?php echo get_template_directory_uri(); ?>/img/bg_block_list.png) no-repeat scroll center left 10px !important;">
			 <a href="#" style="font-size:12px;color:#151314;margin-left: 30px;">বহিঃ বাংলাদেশ ছুটি </a>
			</li>
		</ul>
	</div>
</div>
<div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
	<div style="padding: 10px;background: #71c1d9;width: 100%;">
		<h5 style="font-size: 12px;font-weight: 700;color:#FFF;margin: 5px;line-height: 0.6;">ডিজিটাল সেন্টার ১০ বছর পূর্তি</h5>
	</div>
	<div class="col p-4 d-flex position-static" style="padding: 0!important;">
		<div class="col-md-12" style="padding: 0;">
			<img src="<?php echo get_template_directory_uri(); ?>/img/digital-center-10-years.jpg" style="width:100%;padding: 5px;"/>
		</div>
	</div>
</div>
