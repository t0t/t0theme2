<!doctype html>

<!-- HTML5 Boilerplate -->
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html class="no-js lt-ie9 lt-ie8" lang="en"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html class="no-js lt-ie9" lang="en"><![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="es"><!--<![endif]-->

<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>
		<?php 
			wp_title( '|', true, 'right' );
			// Add the blog name.
		 	bloginfo( 'name' ); 
	 	?>
 	</title>

	<!--iOS -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<?php wp_head(); ?>
</head>

<!-- Aquí acaba el head de mi web -->
<body <?php body_class(["unaclase", "otraclase"]); ?>>

<header class="header">

	<div class="brand">

		<a href="/" title="<?php bloginfo('name'); ?>" alt="<?php bloginfo('description'); ?>">
			
			<!-- <img src="<?php //echo get_bloginfo('template_directory');?>/assets/img/logo.svg" alt="logo" class="brand__logo"> -->

			<svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" class="brand__logo" aria-labelledby="title desc">

    		<title>Logo t0theme</title>
    		<desc>Logotipo de tema Wordpress y Styleguide de Sergio Forés</desc>
    
    		<path class="efecto--stroke-dashoffset" d="M10.8663109,2.51341672 C10.8663109,2.51341672 15.1260819,-0.358700214 23.1610079,0.0375261371 C31.1962755,0.433752488 45.0397628,1.9194266 48.7186093,10.3380136 C52.3971143,18.7569501 47.8648109,30.8649146 38.8439185,36.7828032 C29.8233676,42.7010412 17.9333711,43.121726 9.99509504,40.3484909 C2.05681901,37.5752559 -1.52503604,29.2849008 0.604678691,20.9997869 C2.73439343,12.7150223 3.60560932,7.26778352 10.8663109,2.51341672 L10.8663109,2.51341672 Z M30.3988277,18.681129 L35.0913038,18.681129 L35.0913038,12.9889566 L30.3988277,12.9889566 L30.3988277,18.681129 Z M22.8707165,28.6612112 C22.8707165,28.6612112 23.0643579,30.4442298 24.5164983,31.7317907 C25.9686386,33.0193517 25.0393644,35.1982472 23.6644075,34.9009027 C22.289792,34.6039077 21.7088676,33.499086 21.9991591,31.8726013 C22.289792,30.2461166 22.8707165,28.6612112 22.8707165,28.6612112 L22.8707165,28.6612112 Z M10.5760195,29.5525458 C10.5760195,29.5525458 9.31752063,24.6004152 12.2218013,22.3222884 C15.1260819,20.044511 18.2236625,20.3415061 20.0630858,18.2614924 C21.9025091,16.1818282 22.773725,13.1112487 22.773725,13.1112487 M8.71405592,27.6475845 C8.71405592,27.6475845 7.45555707,22.695454 10.3598377,20.4173272 C10.9073537,19.9879198 11.4617395,19.6500196 12.0132704,19.3704498 C14.3873174,18.1670503 16.7084677,18.0444199 18.2011222,16.3565312 C20.0405455,14.2765175 20.9117614,11.2062874 20.9117614,11.2062874"></path>
			</svg>
	
		</a>

		<h1 class="h4 brand__name">
			<?php bloginfo('name'); ?>
			<span class="brand__description">
				<?php bloginfo('description'); ?>
			</span>
		</h1>
	
	</div>
	
</header>