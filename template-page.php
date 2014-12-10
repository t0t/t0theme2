<main>

    <div class="img--bg-big well well--panoramica">

		<h3>Hola</h3>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est totam voluptate quisquam deserunt explicabo officiis, expedita deleniti asperiores aperiam cumque non quo alias voluptatum dolorem magnam dignissimos ad pariatur. Perspiciatis!</p>
		<button class="btn btn--image"><a href="">Call to action</a></button>

	</div>

	
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
    

    <h2>Modulo Lists</h2>

	<section class="modulo-list">

		<ol class="modulo-list__ordered">
		    <li class="modulo-list__item">Bread</li>
		    <li class="modulo-list__item">Milk</li>
		    <li class="modulo-list__item">Eggs</li>
		    <li class="modulo-list__item">Butter</li>
		</ol>

		<ul class="modulo-list__unordered">
			<li class="modulo-list__item">Elemento lista</li>
			<li class="modulo-list__item">Elemento lista</li>
			<li class="modulo-list__item">Elemento lista xx</li>
			<li class="modulo-list__item">Elemento lista</li>
			<li class="modulo-list__item">Elemento</li>
		</ul>

		<dl class="modulo-list__definition">
			<dt>Titulo</dt>
			<dd>item lista de definición</dd>
			<dd>item lista</dd>
			<dt>Titulo</dt>
			<dd>item</dd>
			<dd>item</dd>
		</dl>	

	</section>


</main>