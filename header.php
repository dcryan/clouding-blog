<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
  <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NN56WRX');</script>
<!-- End Google Tag Manager -->
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php/* modificacion Clouding wp_title('', true, 'right');*/ ?><?php
        if (is_home()) {
                bloginfo('name');
            echo ": ";
            bloginfo('description');
                } else {
            wp_title();
        }
        ?></title>

	<script type="text/javascript">
		var pathInfo = {
			base: '<?php echo get_template_directory_uri(); ?>/',
			css: 'css/',
			js: 'js/',
			swf: 'swf/',
		}
	</script>
	<?php wp_head(); ?>
  

<link rel="stylesheet" type="text/css" href="/fonts/proxima-nova/fonts.min.css">
<link rel="icon" type="image/png" href="/favicon.png">

</head>
<body>
  <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NN56WRX"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
	<div id="wrapper">
		<header id="header">
			<?php
			if( function_exists('icl_get_languages')):
				$languages = icl_get_languages('skip_missing=0&orderby=code');
				$prefix_field = '';
				if(!empty($languages)){
					foreach($languages as $l){
						if($l['active']){
							$prefix_field = $l['language_code'];
							break;
						}
					}
					$privacy_policy = get_field('option_privacy_policy_' . $prefix_field, 'option');
					if($privacy_policy){ ?>
					
					<?php }
				}
			endif; ?>
			<div class="center">
				<div class="logo">
					<?php
					$logo_link = get_field('logo_link_' . $prefix_field, 'option');
					$logo_link = $logo_link ? esc_url($logo_link) : home_url(); ?>
					<a href="<?php echo $logo_link; ?>">
						<img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="Cloud VPS" width="231" height="42">
					</a>
				</div>
				<div id="nav">
					<a href="#" class="nav-opener"><span></span></a>
					<div class="drop">
						<div class="drop-holder">
							<?php if( has_nav_menu( 'primary' ) )
								wp_nav_menu( array(
									'container' => false,
									'theme_location'	=> 'primary',
									'items_wrap'		=> '<ul>%3$s</ul>',
									'walker'			=> new Custom_Walker_Nav_Menu,
									)
								);
							if( function_exists('languages_select') )
								languages_select(); ?>
						</div>
					</div>
				</div>
			</div>
		</header>
		<main role="main">
			<?php if( function_exists('icl_get_languages')):
				$languages = icl_get_languages('skip_missing=0&orderby=code');
				$prefix_field = '';
				if(!empty($languages)){
					foreach($languages as $l){
						if($l['active']){
							$prefix_field = $l['language_code'];
							break;
						}
					}
					$title_blog = get_field('option_title_blog_' . $prefix_field, 'option');
					$description_blog = get_field('option_description_blog_' . $prefix_field, 'option');
					$rss_link_blog = get_bloginfo('rss2_url');
					if( $title_blog or $description_blog or $rss_link_blog ): ?>
						<section class="intro">
							<div class="center">
								<?php if($title_blog){
									echo '<h1>' . $title_blog . '</h1>';
								}
								$rss_string = $rss_link_blog ? ' <a href="' . esc_url($rss_link_blog) . '" class="rss">rss</a>' : '';
								if( $description_blog or $rss_link_blog ){
									echo '<span class="subtitle">' . $description_blog . $rss_string . '</span>';
								} ?>
							</div>
						</section>
					<?php endif;
				}
			endif; ?>
