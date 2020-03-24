<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>

<head>
	<!-- Google Tag Manager -->
	<script>
		(function(w, d, s, l, i) {
			w[l] = w[l] || [];
			w[l].push({
				'gtm.start': new Date().getTime(),
				event: 'gtm.js'
			});
			var f = d.getElementsByTagName(s)[0],
				j = d.createElement(s),
				dl = l != 'dataLayer' ? '&l=' + l : '';
			j.async = true;
			j.src =
				'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
			f.parentNode.insertBefore(j, f);
		})(window, document, 'script', 'dataLayer', 'GTM-NN56WRX');
	</script>
	<!-- End Google Tag Manager -->
	<meta
		charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php
        if (is_home()) {
            bloginfo('name');
            echo ": ";
            bloginfo('description');
        } else {
            wp_title();
        }
        ?>
	</title>

	<script type="text/javascript">
		var pathInfo = {
			base: '<?php echo get_template_directory_uri(); ?>/',
			css: 'css/',
			js: 'js/',
			swf: 'swf/',
		}
	</script>
	<?php wp_head(); ?>


	<link rel="preload" as="font" crossorigin="crossorigin" type="font/woff"
		href="<?php echo get_template_directory_uri(); ?>/fonts/MaisonNeue-Book.ttf">
	<link rel="preload" as="font" crossorigin="crossorigin" type="font/woff"
		href="<?php echo get_template_directory_uri(); ?>/fonts/MaisonNeue-Demi.ttf">
	<link rel="preload" as="font" crossorigin="crossorigin" type="font/woff"
		href="<?php echo get_template_directory_uri(); ?>/fonts/MaisonNeue-DemiItalic.ttf">
	<link rel="preload" as="font" crossorigin="crossorigin" type="font/woff"
		href="<?php echo get_template_directory_uri(); ?>/fonts/MaisonNeue-Light.ttf">
	<link rel="preload" as="font" crossorigin="crossorigin" type="font/woff"
		href="<?php echo get_template_directory_uri(); ?>/fonts/MaisonNeue-LightItalic.ttf">
	<link rel="preload" as="font" crossorigin="crossorigin" type="font/woff"
		href="<?php echo get_template_directory_uri(); ?>/fonts/MaisonNeue-Medium.ttf">
	<link rel="preload" as="font" crossorigin="crossorigin" type="font/woff"
		href="<?php echo get_template_directory_uri(); ?>/fonts/MaisonNeue-MediumItalic.ttf">

</head>

<body>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NN56WRX" height="0" width="0"
			style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

	<?php get_template_part('mobile-menu'); ?>

	<div class="floating-header show-on-mobile">
		<?php get_template_part('mobile-menu'); ?>
		<?php get_template_part('nav-row'); ?>
	</div>

	<header class="main-header">
		<?php get_template_part('nav-row'); ?>

		<?php
            if (function_exists('icl_get_languages')):
                $languages = icl_get_languages('skip_missing=0&orderby=code');
                $prefix_field = '';
                if (!empty($languages)) {
                    foreach ($languages as $l) {
                        if ($l['active']) {
                            $prefix_field = $l['language_code'];
                            break;
                        }
                    }
                    $title_blog = get_field('option_title_blog_' . $prefix_field, 'option');
                    $description_blog = get_field('option_description_blog_' . $prefix_field, 'option');
                    if ($title_blog or $description_blog):
        ?>
		<div class="header-content content-container">
			<div class="header-content-text">
				<?php if ($title_blog) {
            echo '<h1>' . $title_blog . '</h1>';
        }
                    if ($description_blog) {
                        echo '<h3 class="subtitle">' . $description_blog . '</h3>';
                    } ?>

			</div>

			<img class="image-header-image"
				src="<?php bloginfo('template_url'); ?>/images/header-image.svg"
				alt="header image">


		</div>

		<?php endif;
                }
                    endif;?>

	</header>
	<main role="main">