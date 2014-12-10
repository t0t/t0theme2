<main>

    <section class="img--bg-big well well--panoramica">

		<h3>Hola</h3>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est totam voluptate quisquam deserunt explicabo officiis, expedita deleniti asperiores aperiam cumque non quo alias voluptatum dolorem magnam dignissimos ad pariatur. Perspiciatis!</p>
		<button class="btn btn--image"><a href="">Call to action</a></button>

	</section>

	
    <h2>Shapes</h2>
    
	<section class="shapes">

		<div class="color-base shape-square"></div>
		<div class="color-base-dark shape-circle"></div>
		<div class="color-base-light shape-rounded"></div>
		<div class="color-base-invert shape-mask"></div>
		<div class="black shape-custom"></div>
		<div class="white"></div>

	</section>


    <section role="main">
            
	<?php get_template_part( 'templates/main', 'content' ); ?>

    </section>
    

    <h2>Lists</h2>

	<section class="lista">

		<ol class="lista__ordered">
		    <li class="lista__item">Bread</li>
		    <li class="lista__item">Milk</li>
		    <li class="lista__item">Eggs</li>
		    <li class="lista__item">Butter</li>
		</ol>

		<ul class="lista__unordered">
			<li class="lista__item">Elemento lista</li>
			<li class="lista__item">Elemento lista</li>
			<li class="lista__item">Elemento lista xx</li>
			<li class="lista__item">Elemento lista</li>
			<li class="lista__item">Elemento</li>
		</ul>

		<dl class="lista__definition">
			<dt>Titulo</dt>
			<dd>item lista de definición</dd>
			<dd>item lista</dd>
			<dt>Titulo</dt>
			<dd>item</dd>
			<dd>item</dd>
		</dl>	

	</section>


</main>