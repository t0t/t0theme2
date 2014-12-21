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

			<svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" class="brand__logo" viewBox="0 0 50 50" preserveAspectRatio="xMinYMin meet">

    		<title>Logo t0theme</title>
    		<desc>Logotipo de tema Wordpress y Styleguide de Sergio Forés</desc>
    
    		<path class="efecto--stroke-dashoffset" d="M33.8175546,9.19339982 C33.8175546,9.19339982 46.2905546,0.973399822 69.8175546,2.10739982 C93.3455546,3.24139982 133.880555,7.49339982 144.652555,31.5873998 C155.423555,55.6823998 142.152555,90.3353998 115.738555,107.2724 C89.3255546,124.2104 54.5105546,125.4144 31.2665546,117.4774 C8.02255465,109.5404 -2.46544535,85.8133998 3.77055465,62.1013998 C10.0065546,38.3903998 12.5575546,22.8003998 33.8175546,9.19339982 L33.8175546,9.19339982 Z M91.0105546,55.4653998 L104.750555,55.4653998 L104.750555,39.1743998 L91.0105546,39.1743998 L91.0105546,55.4653998 Z M68.9675546,84.0283998 C68.9675546,84.0283998 69.5345546,89.1313998 73.7865546,92.8163998 C78.0385546,96.5013998 75.3175546,102.7374 71.2915546,101.8864 C67.2665546,101.0364 65.5655546,97.8743998 66.4155546,93.2193998 C67.2665546,88.5643998 68.9675546,84.0283998 68.9675546,84.0283998 L68.9675546,84.0283998 Z M32.9675546,86.5793998 C32.9675546,86.5793998 29.2825546,72.4063998 37.7865546,65.8863998 C46.2905546,59.3673998 55.3605546,60.2173998 60.7465546,54.2643998 C66.1325546,48.3123998 68.6835546,39.5243998 68.6835546,39.5243998 M27.5155546,81.1273998 C27.5155546,81.1273998 23.8305546,66.9543998 32.3345546,60.4343998 C33.9377315,59.2054358 35.561024,58.2383654 37.1759571,57.4382363 C44.1273844,53.9941064 50.9239252,53.6431383 55.2945546,48.8123998 C60.6805546,42.8593998 63.2315546,34.0723998 63.2315546,34.0723998"></path>
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