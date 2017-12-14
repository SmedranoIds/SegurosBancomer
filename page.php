<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<!-- Etiqueta Seguros -->
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2 class="seguros">Seguros Bancomer</h2>
			</div>
		</div>
	</div>
			<!-- Etiqueta Seguros -->
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

		?>	
	<div class="conten blockGris">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-xs-12">
					<div class="col-md-12">
						<a href="https://www.segurosbancomer.com.mx/seguros/tleu/segurosban/index.jsp">Seguros </a>
						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						<a href=""><?php the_title(); ?></a>
						<h1 class="titulo"><?php the_title(); ?></h1>
					</div>
					<div class="col-md-6 col-xs-12">
						<p class="descripcion"><?php the_field('descripcion'); ?></p>
						<br>
						<?php if( get_field('ligaboton') ):	?>
						<a href="<?php the_field('ligaboton') ?>"><button class="btn-primary boton-azul2">Cotiza ahora</button></a>
						<?php endif;	?>
					</div>
					<div class="col-md-5 col-xs-12 text-center">
						<img src="<?php the_post_thumbnail_url(); ?>", class="imgResp" alt="">
					</div>
				</div>
				<div class="col-md-4 col-xs-12">
					<div class="panel panel-default text-center">
					  <div class="panel-body bordeCuadros">
					  	<a class="chat posIcon", href="", onclick="openChat(href);">
					  		<i class="icon chat"></i>
					  		Chat
					  	</a>
					  	
					  </div>
					</div>

					<?php 
					if( have_rows('cuadrosegurosblancos') ):
					  while ( have_rows('cuadrosegurosblancos') ) : the_row(); 
					?>
						<div class="panel panel-default <?php the_sub_field('nombreclase') ?>">
						  <div class="panel-body bordeCuadros">
						  	<h2><?php the_sub_field('titulocuadro') ?></h2>
						  	<div class="row">
						  		<div class="col-md-7 col-sm-7">
								  	<p class="descripcion"><?php the_sub_field('descripcioncuadro') ?></p>
								  	
						  		</div>
						  		<div class="col-md-5 col-sm-5 text-center">
						  			<img class="imgCuadros", src="<?php the_sub_field('imagencuadro') ?>" alt="">
						  		</div>
						  	</div>
						  	<a class="cuadro", href="<?php the_sub_field('ligaproducto') ?>">
						  		<?php the_sub_field('leyendaurl') ?>
						  		<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
							</a>
						  </div>
						</div>
					<?php
					  endwhile;
					endif;
					?>

				</div>
				<div class="col-md-12 inBlockG onBlockG">
						<ul class="nav nav-tabs">
						  	<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab"><?php the_field("subtitulo") ?></a></li>
						  	<?php if( get_field('subtitulo2') ):	?>
    						<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab"><?php the_field("subtitulo2") ?></a></li>
    						<?php endif; ?>
						</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="container separador">
		<div class="tab-content">
		    <div role="tabpanel" class="tab-pane active" id="home">
				<div class="row">
					<div class="col-md-8">
						<?php 
						if( have_rows('cuadrosegurosgris') ):
						  while ( have_rows('cuadrosegurosgris') ) : the_row(); 
						?>
						<div class="col-md-6">
							<div class="panel panel-default">
								  <div class="panel-body cuadrosIndex">
								  	<h3>
								  		<a href="<?php the_sub_field('ligaproducto') ?>"><?php the_sub_field('tituloproducto') ?></a>
								  	</h3>
								  	<div class="row">
								  		<div class="col-md-12 col-sm-7">
								  			<span>
										  		<a href="<?php the_sub_field('ligaproducto') ?>", class="descripcionCuadroI"><?php the_sub_field('resumenproducto') ?></a>
										  	</span>
								  		</div>
								  	</div>
								  </div>
							</div>
						</div>
						<?php
						  endwhile;
						endif;
						?>
					</div>
				</div>
				<div class="container">
					<div class="row">
						<div class="col-md-8 lista">
							<div class="col-md-12">
								<h2 class="tituloLista">Otros Seguros de <?php the_field("subtitulo") ?></h2>
							</div>
							<?php 
							if( have_rows('listaproducto') ):
							  while ( have_rows('listaproducto') ) : the_row(); 
							?>
								<div class="col-md-12">
									<a href="<?php the_sub_field('ligaproducto') ?>">
										<h3><?php the_sub_field('tituloproducto') ?></h3>
									</a>
									<a href="<?php the_sub_field('ligaproducto') ?>">
										<p><?php the_sub_field('resumenproducto') ?></p>
									</a>
									<hr>
								</div>
							<?php
							  endwhile;
							endif;
							?>
						</div>
					</div>
				</div>
			</div>
			<?php if( get_field('subtitulo2') ):	?>
			<div role="tabpanel" class="tab-pane" id="profile">
				<div class="row">
					<div class="col-md-8">
						<?php 
						if( have_rows('cuadrosegurosgris2') ):
						  while ( have_rows('cuadrosegurosgris2') ) : the_row(); 
						?>
						<div class="col-md-6">
							<div class="panel panel-default">
								  <div class="panel-body cuadrosIndex">
								  	<h3>
								  		<a href="<?php the_sub_field('ligaproducto') ?>"><?php the_sub_field('tituloproducto') ?></a>
								  	</h3>
								  	<div class="row">
								  		<div class="col-md-12 col-sm-7">
								  			<span>
										  		<a href="<?php the_sub_field('ligaproducto') ?>", class="descripcionCuadroI"><?php the_sub_field('resumenproducto') ?></a>
										  	</span>
								  		</div>
								  	</div>
								  </div>
							</div>
						</div>
						<?php
						  endwhile;
						endif;
						?>
					</div>
				</div>
				<?php if( have_rows('listaproducto2') ):	?>
				<div class="container">
					<div class="row">
						<div class="col-md-8 lista">
							<div class="col-md-12">
								<h2 class="tituloLista">Otros Seguros de <?php the_field("subtitulo2") ?></h2>
							</div>
							<?php 
							if( have_rows('listaproducto2') ):
							  while ( have_rows('listaproducto2') ) : the_row(); 
							?>
								<div class="col-md-12">
									<a href="<?php the_sub_field('ligaproducto') ?>">
										<h3><?php the_sub_field('tituloproducto') ?></h3>
									</a>
									<a href="<?php the_sub_field('ligaproducto') ?>">
										<p><?php the_sub_field('resumenproducto') ?></p>
									</a>
									<hr>
								</div>
							<?php
							  endwhile;
							endif;
							?>
						</div>
					</div>
				</div>
				<?php
				endif;
				?>
			</div>
			<?php endif; ?>
		</div>
		<div class="container separador">
		<div class="row">
			<div class="col-md-8 lista">
				<div class="panel panel-default">
					  <div class="panel-body">
					  	<h2>AutoAlerta Bancomer</h2>
					  	<div class="row">
					  		<div class="col-md-8 col-sm-8">
							  	<p>Conoce AutoAlerta Bancomer, tu seguro de Auto con un solo clic.</p>
					  		</div>
					  		<div class="col-md-4 col-sm-4 text-center">
					  			<a class="cuadro", href="">
							  		Detalle del producto
							  		<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
								</a>
					  		</div>
					  	</div>
					  </div>
				</div>
			</div>
		</div>
		</div>	
	</div>
		<?php
		// End the loop.
		endwhile;
		?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
