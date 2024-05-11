<!DOCTYPE html>
<html lang="en" style="margin: 0 !important;">
	<head>
		<meta charset="UTF-8">
		<title><?php wp_title(''); bloginfo( 'name' ); ?></title>
		<?php wp_head(); ?>
        <!-- BEGIN: PAGE STYLES -->
        <link href="<?php echo get_template_directory_uri(); ?>/assets/dist/css/bootstrap.min.css" rel="stylesheet">
		<link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet">
		<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300italic,regular,italic,700,700italic&subset=latin-ext,greek-ext,cyrillic-ext,greek,vietnamese,latin,cyrillic" rel="stylesheet" type="text/css" />
        <!-- END THEME STYLES -->
		<script src="<?php echo get_template_directory_uri(); ?>/assets/dist/js/bootstrap.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/assets/dist/js/bootstrap.js"></script>
	</head>
<body style="padding:0px; margin:0px; background-color:#fff;font-family:arial,helvetica,sans-serif,verdana,'Open Sans'">
    
    
	<style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
	.concla ul ul{
		display: none;
		position: absolute;
		top: 2em;
		left: 0;
		z-index: 99999;
		width: 180px;
		background: #fff;
		box-shadow: 0px 3px 3px rgba(0,0,0,0.2);
		}
	.concla ul li:hover > ul{
		display: block;
		}

	.concla li {
		position: relative;
		}
    </style>
    <svg viewbox="0 0 0 0" width="0" height="0" style="display:block;position:relative;left:0px;top:0px;">
        <defs>
            <filter id="jssor_1_flt_1" x="-50%" y="-50%" width="200%" height="200%">
                <feGaussianBlur stddeviation="4"></feGaussianBlur>
            </filter>
            <radialGradient id="jssor_1_grd_2">
                <stop offset="0" stop-color="#fff"></stop>
                <stop offset="1" stop-color="#000"></stop>
            </radialGradient>
            <mask id="jssor_1_msk_3">
                <path fill="url(#jssor_1_grd_2)" d="M600,0L600,400L0,400L0,0Z" x="0" y="0" style="position:absolute;overflow:visible;"></path>
            </mask>
        </defs>
    </svg>
	<div class="container" style="border-left: 1px solid #dedbdb; border-right: 1px solid #dedbdb;">
		<!-- #Start Header -->
		<div class="row">
			<header class=""><!--col-md-12-->
				<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark" style="padding: 10px;background-color: #FFFFFFDE !important;border-bottom: 2px solid #dbdbdb;">
					<div class="" style="float:left; width:40%; margin-left: 85px;">
					<?php 
						   $custom_logo_id = get_theme_mod( 'custom_logo' );
						   $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
						?>
						<a href="<?php echo home_url(); ?>" class="navbar-brand">
							<span style="float: left;">
							<img src="<?php echo $image[0]; ?>" alt="<?php wp_title(''); bloginfo( 'name' ); ?>" class="c-desktop-logo" style="">
							</span>
							<p style="font-family: 'calibri';font-size:17px;font-weight:700;color:#1a0097;float: left;padding-top: 25px;"><!--?php echo get_bloginfo( 'name' ); ?--></p>
							<p style="font-family: 'calibri';font-size:12px;font-weight:300;color:#1a0097;padding-top: 9px;margin-left: 108px;line-height: 5px;font-style: italic;"><?php echo get_bloginfo( 'description' ); ?></p>
					</a>
					</div>
					<div class="" style="float:right; width:60%; margin-right: 85px;">
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
					  <span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarCollapse" style="float:right; width:100%;">
					  <?php 
							wp_nav_menu(
								array(
									'theme_location'    => 'primary-menu',
									'menu_class'        => 'navbar-nav mr-auto',
									'menu_id'           => 'menuid',
									'container_class'   => 'concla', 
									'container_id'      => 'conid',
									'ul_id'             => ' ',
									'li_id'             => ' ',
									'add_li_class'      => 'nav-item',
									//'li_class'        => 'c-onepage-link c-active active',
									'link_class'        => 'nav-link',
								)
							);
					  ?>
					</div>
					</div>
				</nav>
			</header>
		</div>
		<!-- #Header End -->


