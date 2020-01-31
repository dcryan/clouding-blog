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


	<link rel="icon" type="image/png" href="/favicon.png">

</head>

<body>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NN56WRX" height="0" width="0"
			style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

	<div class="mobile-menu">
		<div class="mobile-menu__item">
			<div class="mobile-menu__header-container">
				<div class="mobile-menu__header-arrow"><img
						src="<?php bloginfo('template_url'); ?>/images/chevron-down.svg"
						alt="arrow"></div>

				<div class="mobile-menu__header px-global-nav es">Caracteristicas</div>
				<div class="mobile-menu__header px-global-nav en">Features</div>
				<div class="mobile-menu__header px-global-nav ca">Característiques</div>

			</div>
			<div class="mobile-menu__list">
				<a class="px-global-nav-dropdown es first" href="caracteristicas.html#ventajas">Ventajas</a>
				<a class="px-global-nav-dropdown en first" href="caracteristicas.html#ventajas">Advantages</a>
				<a class="px-global-nav-dropdown ca first" href="caracteristicas.html#ventajas">Avantatges</a>

				<a class="px-global-nav-dropdown es" href="caracteristicas.html#funcionalidades">Funcionalidades</a>
				<a class="px-global-nav-dropdown en" href="caracteristicas.html#funcionalidades">Functionalities</a>
				<a class="px-global-nav-dropdown ca" href="caracteristicas.html#funcionalidades">Funcionalitats</a>

				<a class="px-global-nav-dropdown es" href="caracteristicas.html#infraestructura">Infraestructura</a>
				<a class="px-global-nav-dropdown en" href="caracteristicas.html#infraestructura">Infrastructure</a>
				<a class="px-global-nav-dropdown ca" href="caracteristicas.html#infraestructura">Infraestructura</a>

				<a class="px-global-nav-dropdown" href="caracteristicas.html#api">API</a>

				<a class="px-global-nav-dropdown es" href="caracteristicas.html#imagenes">Imágenes</a>
				<a class="px-global-nav-dropdown en" href="caracteristicas.html#imagenes">Images</a>
				<a class="px-global-nav-dropdown ca" href="caracteristicas.html#imagenes">Imatges</a>
			</div>
		</div>

		<div class="mobile-menu__line"></div>

		<div class="mobile-menu__item">
			<div class="mobile-menu__header-container">
				<div class="mobile-menu__header-arrow"><img
						src="<?php bloginfo('template_url'); ?>/images/chevron-down.svg"
						alt="arrow"></div>
				<div class="mobile-menu__header px-global-nav es">Nosotros</div>
				<div class="mobile-menu__header px-global-nav en">With&nbsp;us</div>
				<div class="mobile-menu__header px-global-nav ca">Nosaltres</div>
			</div>
			<div class="mobile-menu__list">
				<a class="px-global-nav-dropdown es first" href="nosotros.html#">Más sobre Clouding</a>
				<a class="px-global-nav-dropdown en first" href="nosotros.html#">More about Clouding</a>
				<a class="px-global-nav-dropdown ca first" href="nosotros.html#">Més sobre Clouding</a>

				<a class="px-global-nav-dropdown es" href="nosotros.html#contacto">Contacto</a>
				<a class="px-global-nav-dropdown en" href="nosotros.html#contacto">Contact</a>
				<a class="px-global-nav-dropdown ca" href="nosotros.html#contacto">Contacte</a>

				<a class="px-global-nav-dropdown" href="nosotros.html#blog">Blog</a>
			</div>
		</div>

		<div class="mobile-menu__line"></div>

		<div class="mobile-menu__item">
			<div class="mobile-menu__header-container">
				<div class="mobile-menu__header-arrow"><img
						src="<?php bloginfo('template_url'); ?>/images/chevron-down.svg"
						alt="arrow"></div>
				<div class="mobile-menu__header px-global-nav es">Soporte</div>
				<div class="mobile-menu__header px-global-nav en">Support</div>
				<div class="mobile-menu__header px-global-nav ca">Suport</div>
			</div>
			<div class="mobile-menu__list">
				<a class="px-global-nav-dropdown es first" href="soporte.html#">Soporte Clouding.io</a>
				<a class="px-global-nav-dropdown en first" href="soporte.html#">Clouding.io Support</a>
				<a class="px-global-nav-dropdown ca first" href="soporte.html#">Suport Clouding.io</a>

				<a class="px-global-nav-dropdown" href="soporte.html#cloud-pros">Cloud&nbsp;Pros</a>

				<a class="px-global-nav-dropdown es" href="soporte.html#">Base de conocimiento</a>
				<a class="px-global-nav-dropdown en" href="soporte.html#">Knowledge Base</a>
				<a class="px-global-nav-dropdown ca" href="soporte.html#">Base de coneixement</a>

			</div>
		</div>

		<div class="mobile-menu__line"></div>

		<div class="mobile-menu__links">
			<a class="px-global-nav-dropdown es" href="soporte.html#contacto">Contacto</a>
			<a class="px-global-nav-dropdown en" href="soporte.html#contacto">Contact</a>
			<a class="px-global-nav-dropdown ca" href="soporte.html#contacto">Contacte</a>

			<a class="px-global-nav-dropdown" href="/kb/es/categories/360002140740">FAQ</a>

			<a class="px-global-nav-dropdown es" href="#">Iniciar Sesión</a>
			<a class="px-global-nav-dropdown en" href="#">Login</a>
			<a class="px-global-nav-dropdown ca" href="#">Iniciar Sessió</a>

		</div>

		<button class="mobile-menu__start-button button button--orange es">Inicia tu Servidor Cloud</button>
		<button class="mobile-menu__start-button button button--orange en">Start your Cloud Server</button>
		<button class="mobile-menu__start-button button button--orange ca">Inicia el teu Servidor Cloud</button>

		<div class="mobile-menu__language-container">
			<a class="catalan" href="/blog/ca">
				<img class="image-language-dropdown"
					src="<?php bloginfo('template_url'); ?>/images/dropdown-menu/language-ca.svg"
					alt="language icon">
				Catalán
			</a>
			<a class="spanish" href="/blog/">
				<img class="image-language-dropdown"
					src="<?php bloginfo('template_url'); ?>/images/dropdown-menu/language-es.svg"
					alt="language icon">
				Español
			</a>
			<a class="english" href="/blog/en/">
				<img class="image-language-dropdown"
					src="<?php bloginfo('template_url'); ?>/images/dropdown-menu/language-en.svg"
					alt="language icon">
				Inglés
			</a>
		</div>

	</div>

	<header class="main-header">
		<nav class="nav-row content-container">
			<div class="nav-row__logo-container">
				<a href="https://clouding.io/" class="nav-row__logo">
					<img class="image-clouding-logo-header"
						src="<?php bloginfo('template_url'); ?>/images/Clouding-logo-white.svg"
						alt="header logo">
				</a>
			</div>
			<div class="nav-row__links-container show-on-desktop">
				<div class="nav-row__links-left">
					<span class="nav-row__nav-item js-nav-row__nav-item-caracteristicas px-global-nav">
						<a href="https://clouding.io/caracteristicas#" class="px-global-nav es">Caracteristicas</a>
						<a href="https://clouding.io/en/caracteristicas#" class="px-global-nav en">Features</a>
						<a href="https://clouding.io/ca/caracteristicas#" class="px-global-nav ca">Característiques</a>

						<span class="nav-row__nav-item-arrow-container">
							<img class="nav-row__nav-item-arrow"
								src="<?php bloginfo('template_url'); ?>/images/down-chevron-white.svg"
								alt="dropdown arrow">
						</span>
						<div class="clouding-dropdown-menu">
							<img class="clouding-dropdown-menu__triangle clouding-dropdown-menu__triangle-caracteristicas"
								src="<?php bloginfo('template_url'); ?>/images/dropdown-menu/triangle.svg"
								alt="triangle">

							<div class="clouding-dropdown-menu__contents">

								<a href="https://clouding.io/caracteristicas#ventajas"
									class="clouding-dropdown-menu__item es first">
									<div class="clouding-dropdown-menu__image">
										<img class="image-ventajas-dropdown"
											src="<?php bloginfo('template_url'); ?>/images/dropdown-menu/1-Ventajas.svg"
											alt="ventajas">
									</div>
									<div class="clouding-dropdown-menu__text">
										<div class="clouding-dropdown-menu__title">Ventajas</div>
										<div class="clouding-dropdown-menu__detail">Qué nos diferencia</div>
									</div>
								</a>
								<a href="https://clouding.io/en/caracteristicas#ventajas"
									class="clouding-dropdown-menu__item en first">
									<div class="clouding-dropdown-menu__image">
										<img class="image-ventajas-dropdown"
											src="<?php bloginfo('template_url'); ?>/images/dropdown-menu/1-Ventajas.svg"
											alt="ventajas">
									</div>
									<div class="clouding-dropdown-menu__text">
										<div class="clouding-dropdown-menu__title">Advantages</div>
										<div class="clouding-dropdown-menu__detail">What makes us different</div>
									</div>
								</a>
								<a href="https://clouding.io/ca/caracteristicas#ventajas"
									class="clouding-dropdown-menu__item ca first">
									<div class="clouding-dropdown-menu__image">
										<img class="image-ventajas-dropdown"
											src="<?php bloginfo('template_url'); ?>/images/dropdown-menu/1-Ventajas.svg"
											alt="ventajas">
									</div>
									<div class="clouding-dropdown-menu__text">
										<div class="clouding-dropdown-menu__title">Avantatges</div>
										<div class="clouding-dropdown-menu__detail">Què ens diferencia</div>
									</div>
								</a>

								<div class="clouding-dropdown-menu__line"></div>

								<a href="https://clouding.io/caracteristicas#funcionalidades"
									class="clouding-dropdown-menu__item es">
									<div class="clouding-dropdown-menu__image">
										<img class="image-funcionalidad-dropdown"
											src="<?php bloginfo('template_url'); ?>/images/dropdown-menu/2-Funcionalidad.svg"
											alt="funcionalidades">
									</div>
									<div class="clouding-dropdown-menu__text">
										<div class="clouding-dropdown-menu__title">Funcionalidades</div>
										<div class="clouding-dropdown-menu__detail">A tu medida</div>
									</div>
								</a>

								<a href="https://clouding.io/en/caracteristicas#funcionalidades"
									class="clouding-dropdown-menu__item en">
									<div class="clouding-dropdown-menu__image">
										<img class="image-funcionalidad-dropdown"
											src="<?php bloginfo('template_url'); ?>/images/dropdown-menu/2-Funcionalidad.svg"
											alt="funcionalidades">
									</div>
									<div class="clouding-dropdown-menu__text">
										<div class="clouding-dropdown-menu__title">Functionalities</div>
										<div class="clouding-dropdown-menu__detail">Customized</div>
									</div>
								</a>

								<a href="https://clouding.io/ca/caracteristicas#funcionalidades"
									class="clouding-dropdown-menu__item ca">
									<div class="clouding-dropdown-menu__image">
										<img class="image-funcionalidad-dropdown"
											src="<?php bloginfo('template_url'); ?>/images/dropdown-menu/2-Funcionalidad.svg"
											alt="funcionalidades">
									</div>
									<div class="clouding-dropdown-menu__text">
										<div class="clouding-dropdown-menu__title">Funcionalitats</div>
										<div class="clouding-dropdown-menu__detail">A la teva mida</div>
									</div>
								</a>

								<div class="clouding-dropdown-menu__line"></div>

								<a href="https://clouding.io/caracteristicas#infraestructura"
									class="clouding-dropdown-menu__item es">
									<div class="clouding-dropdown-menu__image">
										<img class="image-infraestructura-dropdown"
											src="<?php bloginfo('template_url'); ?>/images/dropdown-menu/3-Infraestructura.svg"
											alt="infraestructura">
									</div>
									<div class="clouding-dropdown-menu__text">
										<div class="clouding-dropdown-menu__title">Infraestructura</div>
										<div class="clouding-dropdown-menu__detail">La mejor plataforma</div>
									</div>
								</a>
								<a href="https://clouding.io/en/caracteristicas#infraestructura"
									class="clouding-dropdown-menu__item en">
									<div class="clouding-dropdown-menu__image">
										<img class="image-infraestructura-dropdown"
											src="<?php bloginfo('template_url'); ?>/images/dropdown-menu/3-Infraestructura.svg"
											alt="infraestructura">
									</div>
									<div class="clouding-dropdown-menu__text">
										<div class="clouding-dropdown-menu__title">Infrastructure</div>
										<div class="clouding-dropdown-menu__detail">The best platform</div>
									</div>
								</a>
								<a href="https://clouding.io/ca/caracteristicas#infraestructura"
									class="clouding-dropdown-menu__item ca">
									<div class="clouding-dropdown-menu__image">
										<img class="image-infraestructura-dropdown"
											src="<?php bloginfo('template_url'); ?>/images/dropdown-menu/3-Infraestructura.svg"
											alt="infraestructura">
									</div>
									<div class="clouding-dropdown-menu__text">
										<div class="clouding-dropdown-menu__title">Infraestructura</div>
										<div class="clouding-dropdown-menu__detail">La millor plataforma</div>
									</div>
								</a>

								<div class="clouding-dropdown-menu__line"></div>

								<a href="https://clouding.io/caracteristicas#api"
									class="clouding-dropdown-menu__item es">
									<div class="clouding-dropdown-menu__image">
										<img class="image-api-dropdown"
											src="<?php bloginfo('template_url'); ?>/images/dropdown-menu/4-API.svg"
											alt="api">
									</div>
									<div class="clouding-dropdown-menu__text">
										<div class="clouding-dropdown-menu__title">API</div>
										<div class="clouding-dropdown-menu__detail">¡Conéctate!</div>
									</div>
								</a>
								<a href="https://clouding.io/en/caracteristicas#api"
									class="clouding-dropdown-menu__item en">
									<div class="clouding-dropdown-menu__image">
										<img class="image-api-dropdown"
											src="<?php bloginfo('template_url'); ?>/images/dropdown-menu/4-API.svg"
											alt="api">
									</div>
									<div class="clouding-dropdown-menu__text">
										<div class="clouding-dropdown-menu__title">API</div>
										<div class="clouding-dropdown-menu__detail">Connect!</div>
									</div>
								</a>
								<a href="https://clouding.io/ca/caracteristicas#api"
									class="clouding-dropdown-menu__item ca">
									<div class="clouding-dropdown-menu__image">
										<img class="image-api-dropdown"
											src="<?php bloginfo('template_url'); ?>/images/dropdown-menu/4-API.svg"
											alt="api">
									</div>
									<div class="clouding-dropdown-menu__text">
										<div class="clouding-dropdown-menu__title">API</div>
										<div class="clouding-dropdown-menu__detail">Connecta't!</div>
									</div>
								</a>

								<div class="clouding-dropdown-menu__line"></div>

								<a href="https://clouding.io/caracteristicas#imagenes"
									class="clouding-dropdown-menu__item es last">
									<div class="clouding-dropdown-menu__image">
										<img class="image-imagenes-dropdown"
											src="<?php bloginfo('template_url'); ?>/images/dropdown-menu/5-Imagenes.svg"
											alt="imagenes">
									</div>
									<div class="clouding-dropdown-menu__text">
										<div class="clouding-dropdown-menu__title">Imágenes</div>
										<div class="clouding-dropdown-menu__detail">¡Escoge la tuya!</div>
									</div>
								</a>
								<a href="https://clouding.io/en/caracteristicas#imagenes"
									class="clouding-dropdown-menu__item en last">
									<div class="clouding-dropdown-menu__image">
										<img class="image-imagenes-dropdown"
											src="<?php bloginfo('template_url'); ?>/images/dropdown-menu/5-Imagenes.svg"
											alt="imagenes">
									</div>
									<div class="clouding-dropdown-menu__text">
										<div class="clouding-dropdown-menu__title">Images</div>
										<div class="clouding-dropdown-menu__detail">Choose yours!</div>
									</div>
								</a>
								<a href="https://clouding.io/ca/caracteristicas#imagenes"
									class="clouding-dropdown-menu__item ca last">
									<div class="clouding-dropdown-menu__image">
										<img class="image-imagenes-dropdown"
											src="<?php bloginfo('template_url'); ?>/images/dropdown-menu/5-Imagenes.svg"
											alt="imagenes">
									</div>
									<div class="clouding-dropdown-menu__text">
										<div class="clouding-dropdown-menu__title">Imatges</div>
										<div class="clouding-dropdown-menu__detail">Tria la teva!</div>
									</div>
								</a>

							</div>

						</div>
					</span>
					<span class="nav-row__nav-item js-nav-row__nav-item-nosotros px-global-nav">
						<a href="https://clouding.io/nosotros#" class="px-global-nav es">Nosotros</a>
						<a href="https://clouding.io/en/nosotros#" class="px-global-nav en">With&nbsp;us</a>
						<a href="https://clouding.io/ca/nosotros#" class="px-global-nav ca">Nosaltres</a>

						<span class="nav-row__nav-item-arrow-container">
							<img class="nav-row__nav-item-arrow"
								src="<?php bloginfo('template_url'); ?>/images/down-chevron-white.svg"
								alt="dropdown arrow">
						</span>
						<div class="clouding-dropdown-menu"><img
								class="clouding-dropdown-menu__triangle clouding-dropdown-menu__triangle-nosotros"
								src="<?php bloginfo('template_url'); ?>/images/dropdown-menu/triangle.svg"
								alt="triangle">
							<div class="clouding-dropdown-menu__contents">

								<a href="https://clouding.io/nosotros#" class="clouding-dropdown-menu__item es first">
									<div class="clouding-dropdown-menu__image">
										<img class="image-nosotros-dropdown"
											src="<?php bloginfo('template_url'); ?>/images/dropdown-menu/6-Nosotros.svg"
											alt="contact">
									</div>
									<div class="clouding-dropdown-menu__text">
										<div class="clouding-dropdown-menu__title">Más sobre Clouding</div>
										<div class="clouding-dropdown-menu__detail">¡Conócenos!</div>
									</div>
								</a>
								<a href="https://clouding.io/en/nosotros#"
									class="clouding-dropdown-menu__item en first">
									<div class="clouding-dropdown-menu__image">
										<img class="image-nosotros-dropdown"
											src="<?php bloginfo('template_url'); ?>/images/dropdown-menu/6-Nosotros.svg"
											alt="contact">
									</div>
									<div class="clouding-dropdown-menu__text">
										<div class="clouding-dropdown-menu__title">More about Clouding</div>
										<div class="clouding-dropdown-menu__detail">Get to know us!</div>
									</div>
								</a>
								<a href="https://clouding.io/ca/nosotros#"
									class="clouding-dropdown-menu__item ca first">
									<div class="clouding-dropdown-menu__image">
										<img class="image-nosotros-dropdown"
											src="<?php bloginfo('template_url'); ?>/images/dropdown-menu/6-Nosotros.svg"
											alt="contact">
									</div>
									<div class="clouding-dropdown-menu__text">
										<div class="clouding-dropdown-menu__title">Més sobre Clouding</div>
										<div class="clouding-dropdown-menu__detail">Coneix-nos!</div>
									</div>
								</a>

								<div class="clouding-dropdown-menu__line"></div>

								<a href="https://clouding.io/nosotros#contacto" class="clouding-dropdown-menu__item es">
									<div class="clouding-dropdown-menu__image">
										<img class="image-contacto-dropdown"
											src="<?php bloginfo('template_url'); ?>/images/dropdown-menu/6-Contact.svg"
											alt="contact">
									</div>
									<div class="clouding-dropdown-menu__text">
										<div class="clouding-dropdown-menu__title">Contacto</div>
										<div class="clouding-dropdown-menu__detail">¿Hablamos?</div>
									</div>
								</a>
								<a href="https://clouding.io/en/nosotros#contacto"
									class="clouding-dropdown-menu__item en">
									<div class="clouding-dropdown-menu__image">
										<img class="image-contacto-dropdown"
											src="<?php bloginfo('template_url'); ?>/images/dropdown-menu/6-Contact.svg"
											alt="contact">
									</div>
									<div class="clouding-dropdown-menu__text">
										<div class="clouding-dropdown-menu__title">Contact</div>
										<div class="clouding-dropdown-menu__detail">Let’s talk!</div>
									</div>
								</a>
								<a href="https://clouding.io/ca/nosotros#contacto"
									class="clouding-dropdown-menu__item ca">
									<div class="clouding-dropdown-menu__image">
										<img class="image-contacto-dropdown"
											src="<?php bloginfo('template_url'); ?>/images/dropdown-menu/6-Contact.svg"
											alt="contact">
									</div>
									<div class="clouding-dropdown-menu__text">
										<div class="clouding-dropdown-menu__title">Contacte</div>
										<div class="clouding-dropdown-menu__detail">Parlem?</div>
									</div>
								</a>

								<div class="clouding-dropdown-menu__line"></div>

								<a href="https://clouding.io/nosotros#blog"
									class="clouding-dropdown-menu__item es last">
									<div class="clouding-dropdown-menu__image">
										<img class="image-blog-dropdown"
											src="<?php bloginfo('template_url'); ?>/images/dropdown-menu/7-Blog.svg"
											alt="blog">
									</div>
									<div class="clouding-dropdown-menu__text">
										<div class="clouding-dropdown-menu__title">Blog</div>
										<div class="clouding-dropdown-menu__detail">Lee las novedades</div>
									</div>
								</a>
								<a href="https://clouding.io/en/nosotros#blog"
									class="clouding-dropdown-menu__item en last">
									<div class="clouding-dropdown-menu__image">
										<img class="image-blog-dropdown"
											src="<?php bloginfo('template_url'); ?>/images/dropdown-menu/7-Blog.svg"
											alt="blog">
									</div>
									<div class="clouding-dropdown-menu__text">
										<div class="clouding-dropdown-menu__title">Blog</div>
										<div class="clouding-dropdown-menu__detail">Read the news</div>
									</div>
								</a>
								<a href="https://clouding.io/ca/nosotros#blog"
									class="clouding-dropdown-menu__item ca last">
									<div class="clouding-dropdown-menu__image">
										<img class="image-blog-dropdown"
											src="<?php bloginfo('template_url'); ?>/images/dropdown-menu/7-Blog.svg"
											alt="blog">
									</div>
									<div class="clouding-dropdown-menu__text">
										<div class="clouding-dropdown-menu__title">Blog</div>
										<div class="clouding-dropdown-menu__detail">Llegeix les novetats</div>
									</div>
								</a>

							</div>
						</div>
					</span>
					<span class="nav-row__nav-item js-nav-row__nav-item-soporte px-global-nav">

						<a href="https://clouding.io/soporte#" class="px-global-nav es">Soporte</a>
						<a href="https://clouding.io/soporte#" class="px-global-nav en">Support</a>
						<a href="https://clouding.io/soporte#" class="px-global-nav ca">Suport</a>

						<span class="nav-row__nav-item-arrow-container">
							<img class="nav-row__nav-item-arrow"
								src="<?php bloginfo('template_url'); ?>/images/down-chevron-white.svg"
								alt="dropdown arrow">
						</span>
						<div class="clouding-dropdown-menu">
							<img class="clouding-dropdown-menu__triangle clouding-dropdown-menu__triangle-soporte"
								src="<?php bloginfo('template_url'); ?>/images/dropdown-menu/triangle.svg"
								alt="triangle">

							<div class="clouding-dropdown-menu__contents">

								<a href="https://clouding.io/soporte#" class="clouding-dropdown-menu__item es first">
									<div class="clouding-dropdown-menu__image">
										<img class="image-soporte-clouding-dropdown"
											src="<?php bloginfo('template_url'); ?>/images/dropdown-menu/8-Soporte.svg"
											alt="soporte">
									</div>
									<div class="clouding-dropdown-menu__text">
										<div class="clouding-dropdown-menu__title">Soporte Clouding</div>
										<div class="clouding-dropdown-menu__detail">A tu lado</div>
									</div>
								</a>
								<a href="https://clouding.io/en/soporte#" class="clouding-dropdown-menu__item en first">
									<div class="clouding-dropdown-menu__image">
										<img class="image-soporte-clouding-dropdown"
											src="<?php bloginfo('template_url'); ?>/images/dropdown-menu/8-Soporte.svg"
											alt="soporte">
									</div>
									<div class="clouding-dropdown-menu__text">
										<div class="clouding-dropdown-menu__title">Clouding Support</div>
										<div class="clouding-dropdown-menu__detail">Right here</div>
									</div>
								</a>
								<a href="https://clouding.io/ca/soporte#" class="clouding-dropdown-menu__item ca first">
									<div class="clouding-dropdown-menu__image">
										<img class="image-soporte-clouding-dropdown"
											src="<?php bloginfo('template_url'); ?>/images/dropdown-menu/8-Soporte.svg"
											alt="soporte">
									</div>
									<div class="clouding-dropdown-menu__text">
										<div class="clouding-dropdown-menu__title">Suport Clouding</div>
										<div class="clouding-dropdown-menu__detail">Al teu costat</div>
									</div>
								</a>

								<div class="clouding-dropdown-menu__line"></div>

								<a href="https://clouding.io/soporte#cloud-pros"
									class="clouding-dropdown-menu__item es">
									<div class="clouding-dropdown-menu__image">
										<img class="image-cloud-pro-dropdown"
											src="<?php bloginfo('template_url'); ?>/images/dropdown-menu/9-Cloud-Pro.svg"
											alt="cloud pro">
									</div>
									<div class="clouding-dropdown-menu__text">
										<div class="clouding-dropdown-menu__title">Cloud Pros</div>
										<div class="clouding-dropdown-menu__detail">A tu disposición</div>
									</div>
								</a>
								<a href="https://clouding.io/en/soporte#cloud-pros"
									class="clouding-dropdown-menu__item en">
									<div class="clouding-dropdown-menu__image">
										<img class="image-cloud-pro-dropdown"
											src="<?php bloginfo('template_url'); ?>/images/dropdown-menu/9-Cloud-Pro.svg"
											alt="cloud pro">
									</div>
									<div class="clouding-dropdown-menu__text">
										<div class="clouding-dropdown-menu__title">Cloud Pros</div>
										<div class="clouding-dropdown-menu__detail">Available for you</div>
									</div>
								</a>
								<a href="https://clouding.io/ca/soporte#cloud-pros"
									class="clouding-dropdown-menu__item ca">
									<div class="clouding-dropdown-menu__image">
										<img class="image-cloud-pro-dropdown"
											src="<?php bloginfo('template_url'); ?>/images/dropdown-menu/9-Cloud-Pro.svg"
											alt="cloud pro">
									</div>
									<div class="clouding-dropdown-menu__text">
										<div class="clouding-dropdown-menu__title">Cloud Pros</div>
										<div class="clouding-dropdown-menu__detail">A la teva disposició</div>
									</div>
								</a>

								<div class="clouding-dropdown-menu__line"></div>

								<a href="https://clouding.io/kb/es/" class="clouding-dropdown-menu__item es last">
									<div class="clouding-dropdown-menu__image">
										<img class="image-base-conocimiento-dropdown"
											src="<?php bloginfo('template_url'); ?>/images/dropdown-menu/10-Base-Conicimiento.svg"
											alt="infraestructura">
									</div>
									<div class="clouding-dropdown-menu__text">
										<div class="clouding-dropdown-menu__title">Base de conocimiento</div>
										<div class="clouding-dropdown-menu__detail">¡Consulta los artículos!</div>
									</div>
								</a>
								<a href="https://clouding.io/kb/en-us/" class="clouding-dropdown-menu__item en last">
									<div class="clouding-dropdown-menu__image">
										<img class="image-base-conocimiento-dropdown"
											src="<?php bloginfo('template_url'); ?>/images/dropdown-menu/10-Base-Conicimiento.svg"
											alt="infraestructura">
									</div>
									<div class="clouding-dropdown-menu__text">
										<div class="clouding-dropdown-menu__title">Knowledge Base</div>
										<div class="clouding-dropdown-menu__detail">Check out the articles!</div>
									</div>
								</a>
								<a href="https://clouding.io/kb/ca/" class="clouding-dropdown-menu__item ca last">
									<div class="clouding-dropdown-menu__image">
										<img class="image-base-conocimiento-dropdown"
											src="<?php bloginfo('template_url'); ?>/images/dropdown-menu/10-Base-Conicimiento.svg"
											alt="infraestructura">
									</div>
									<div class="clouding-dropdown-menu__text">
										<div class="clouding-dropdown-menu__title">Base de Coneixement</div>
										<div class="clouding-dropdown-menu__detail">Consulta els articles!</div>
									</div>
								</a>

							</div>

						</div>
					</span>
				</div>
				<div class="nav-row__links-right">
					<span class="nav-row__nav-item">
						<a class="px-global-nav es" href="https://portal.clouding.io/?lang=es">
							Accede
						</a>
						<a class="px-global-nav en" href="https://portal.clouding.io/?lang=en">
							Access
						</a>
						<a class="px-global-nav ca" href="https://portal.clouding.io/?lang=ca">
							Accedeix
						</a>
					</span>
					<a class="es" href="https://portal.clouding.io/register?lang=es">
						<button class="nav-row__links-button button button--light-blue button--small">
							Regístrate
						</button>
					</a>
					<a class="en" href="https://portal.clouding.io/register?lang=en">
						<button class="nav-row__links-button button button--light-blue button--small">
							Sign up
						</button>
					</a>
					<a class="ca" href="https://portal.clouding.io/register?lang=ca">
						<button class="nav-row__links-button button button--light-blue button--small">
							Registra't
						</button>
					</a>
					<span class="nav-row__nav-item js-nav-row__nav-item-language px-global-nav">
						<img class="nav-row__language-button es"
							src="<?php bloginfo('template_url'); ?>/images/dropdown-menu/language-es.svg"
							alt="language icon">
						<img class="nav-row__language-button en"
							src="<?php bloginfo('template_url'); ?>/images/dropdown-menu/language-en.svg"
							alt="language icon">
						<img class="nav-row__language-button ca"
							src="<?php bloginfo('template_url'); ?>/images/dropdown-menu/language-ca.svg"
							alt="language icon">

						<span class="nav-row__nav-item-language es">
							es
						</span>
						<span class="nav-row__nav-item-language en">
							en
						</span>
						<span class="nav-row__nav-item-language ca">
							ca
						</span>

						<span class="nav-row__nav-item-arrow-container">
							<img class="nav-row__nav-item-arrow"
								src="<?php bloginfo('template_url'); ?>/images/down-chevron-white.svg"
								alt="dropdown arrow">
						</span>

						<div class="clouding-dropdown-menu clouding-dropdown-menu--language">
							<img class="clouding-dropdown-menu__triangle clouding-dropdown-menu__triangle-language"
								src="<?php bloginfo('template_url'); ?>/images/dropdown-menu/triangle.svg"
								alt="triangle">
							<div class="clouding-dropdown-menu__contents">

								<a href="/blog/ca" class="clouding-dropdown-menu__item first">
									<div class="clouding-dropdown-menu__image">
										<img class="image-language-dropdown"
											src="<?php bloginfo('template_url'); ?>/images/dropdown-menu/language-ca.svg"
											alt="catalan">
									</div>
									<div class="clouding-dropdown-menu__text">
										<div class="clouding-dropdown-menu__title">
											Catalán
										</div>
									</div>
								</a>

								<div class="clouding-dropdown-menu__line"></div>

								<a href="/blog/" class="clouding-dropdown-menu__item">
									<div class="clouding-dropdown-menu__image">
										<img class="image-language-dropdown"
											src="<?php bloginfo('template_url'); ?>/images/dropdown-menu/language-es.svg"
											alt="blog">
									</div>
									<div class="clouding-dropdown-menu__text">
										<div class="clouding-dropdown-menu__title">
											Español
										</div>
									</div>
								</a>

								<div class="clouding-dropdown-menu__line"></div>

								<a href="/blog/en" class="clouding-dropdown-menu__item last">
									<div class="clouding-dropdown-menu__image">
										<img class="image-language-dropdown"
											src="<?php bloginfo('template_url'); ?>/images/dropdown-menu/language-en.svg"
											alt="blog">
									</div>
									<div class="clouding-dropdown-menu__text">
										<div class="clouding-dropdown-menu__title">
											Inglés
										</div>
									</div>
								</a>

							</div>
						</div>
					</span>
				</div>
			</div>

			<div class="hamburger show-on-mobile">
				<div class="hamburger__line top"></div>
				<div class="hamburger__line middle"></div>
				<div class="hamburger__line bottom"></div>
			</div>
		</nav>

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
                    $rss_link_blog = get_bloginfo('rss2_url');
                    if ($title_blog or $description_blog or $rss_link_blog):
        ?>
		<div class="header-content content-container">
			<div class="header-content-text">
				<?php if ($title_blog) {
            echo '<h1>' . $title_blog . '</h1>';
        }
                    // $rss_string = $rss_link_blog ? ' <a href="' . esc_url($rss_link_blog) . '" class="rss">rss</a>' : '';
                    if ($description_blog or $rss_link_blog) {
                        echo '<h3 class="subtitle">' . $description_blog . $rss_string . '</h3>';
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