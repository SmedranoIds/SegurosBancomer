<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2 class="seguros">Seguros Bancomer</h2>
					</div>
				</div>
			</div>

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
								<a href="<?php the_field('parenturl'); ?>"> <?php the_field('parent'); ?></a>
								<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
								<a href=""><?php the_title(); ?></a>
								<h1 class="titulo"><?php the_title(); ?></h1>
							</div>
							<div class="col-md-5 col-xs-12">
								<p class="descripcion"><?php the_field('descripcion'); ?></p>
								<br>
								<?php if(get_field('urlboton')): ?>
									<a href="<?php the_field('urlboton') ?>"><button class="btn-primary boton-azul2">Cotiza ahora</button></a>
								<?php endif; ?>
							</div>
							<div class="col-md-6 col-xs-12 text-center">
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
							if( have_rows('cuadroblanco') ):
							  while ( have_rows('cuadroblanco') ) : the_row(); 
							?>
							<div class="panel panel-default <?php the_sub_field('clase') ?>">
							  <div class="panel-body bordeCuadros">
							  	<h2><?php the_sub_field('titulocuadro') ?></h2>
							  	<div class="row">
							  		<div class="col-md-7 col-sm-7">
									  	<p class="descripcion"><?php the_sub_field('descripcioncuadro') ?></p>
									  	
							  		</div>
							  		<div class="col-md-5 col-sm-5 text-center">
							  			<img class="imgCuadros", src="<?php the_sub_field('img') ?>" alt="">
							  		</div>
							  	</div>
							  	<?php if( get_sub_field('ligaproducto') ): ?>
								  	<a class="cuadro", href="<?php the_sub_field('ligaproducto') ?>">
								  		<?php the_sub_field('leyendaurl') ?>
								  		<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
								  		
									</a>
								<?php endif; ?>
							  </div>
							</div>
							<?php
							  endwhile;
							endif;
							?>
						</div>
					</div>
				</div>
			</div>

	<div class="container separador">
		<div class="row">
			<div class="col-md-8 datosSeguro">
				<?php 
				$a = 0;
				if( have_rows('informacion') ):
				  while ( have_rows('informacion') ) : the_row(); 
				?>
				  <div class="panel panel-default">
				    <div class="panel-heading" role="tab" id="heading<?php echo $a ?>">
				      <h4 class="panel-title">
				        <a class="<?php if($a != 0){?> collapsed <?php } ?>" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $a ?>" aria-expanded="true" aria-controls="collapse<?php echo $a ?>">
				          <?php the_sub_field('titulo') ?>
				        </a>
				      </h4>
				    </div>
				    <div id="collapse<?php echo $a ?>" class="panel-collapse collapse <?php if($a === 0){?> in <?php } ?>" role="tabpanel" aria-labelledby="heading<?php echo $a ?>">
				      <div class="panel-body">
				        <?php the_sub_field('contenido') ?>
				      </div>
				    </div>
				  </div>
				  <?php
				  	$a++;
					endwhile;
					endif;
					?>
				<?php if( have_rows('archivos') ): ?>
					<div class="panel panel-default">
					    <div class="panel-heading" role="tab" id="headingFive">
					      <h4 class="panel-title">
					        <a  class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
					          Condiciones Generales
					        </a>
					      </h4>
					    </div>
					    <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
					      <div class="panel-body">
					        <ul>
					        	<?php 
								if( have_rows('archivos') ):
								  while ( have_rows('archivos') ) : the_row();
								?>
								<p class="whitSpace"><strong><?php the_sub_field('tituloapartados') ?></strong></p>
					        	<p class="whitSpace"><?php the_sub_field('apartados') ?></p>
					        		<?php 
									if( have_rows('pdf') ):
									  while ( have_rows('pdf') ) : the_row();
									?>
					        			<li class="icon-pdf"><a href="<?php the_sub_field('urlarchivo') ?>"><?php the_sub_field('titulo') ?></a></li>
					        		<?php
									endwhile;
									endif;
									?>
									<br>
					        	<?php
								endwhile;
								endif;
								?>
					        </ul>
					      </div>
					    </div>
					</div>
				<?php  endif;	
				 if( have_rows('preguntas') ): ?>
					<div class="panel panel-default">
					    <div class="panel-heading" role="tab" id="headingSix">
					      <h4 class="panel-title">
					        <a  class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="true" aria-controls="collapseSix" class="trigger collapsed">
					          Preguntas Frecuentes
					        	
					        </a>
					      </h4>
					    </div>
					    <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
					      <div class="panel-body">
					      	<?php 
								if( have_rows('preguntas') ):
								  while ( have_rows('preguntas') ) : the_row();
								?>
					      	<h3><?php the_sub_field('pregunta') ?></h3>
					      	<p><?php the_sub_field('respuesta') ?></p>

					      	<?php
							endwhile;
							endif;
							?>
					      </div>
					    </div>
					</div>
				<?php  endif; ?>
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

			<?php
			// End the loop.
			endwhile;
			?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
