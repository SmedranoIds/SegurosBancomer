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
								<a href=""> Vida y Familia</a>
								<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
								<a href=""><?php the_title(); ?></a>
								<h1 class="titulo"></h1>
							</div>
							<div class="col-md-5 col-xs-12">
								<p class="descripcion"><?php the_field('descripcion'); ?></p>
								<br>
								<a href="<?php the_field('urlboton') ?>"><button class="btn-primary boton-azul2">Cotiza ahora</button></a>
							</div>
							<div class="col-md-6 col-xs-12 text-center">
								<img src="http://localhost/wp-content/uploads/2017/12/7-Seguro-de-Vida-Bancomer-OKS_tcm1004-383368.png", class="imgResp" alt="">
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
							<div class="panel panel-default">
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
							  	<a class="cuadro", href="<?php the_sub_field('ligaproducto') ?>">
							  		Detalle del producto
							  		<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
								</a>
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
				if( have_rows('informacion') ):
				  while ( have_rows('informacion') ) : the_row(); 
				?>
				  <div class="panel panel-default">
				    <div class="panel-heading" role="tab" id="headingOne">
				      <h4 class="panel-title">
				        <a class="benef" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
				          <?php the_sub_field('titulo') ?>
				        </a>
				      </h4>
				    </div>
				    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
				      <div class="panel-body">
				        <?php the_sub_field('contenido') ?>
				      </div>
				    </div>
				  </div>
				  <?php
					endwhile;
					endif;
					?>
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
				      	<h3>¿Cuál es el objetivo de FamiliaSegura Bancomer?</h3>
				      	<p>Que tu familia cuente con los recursos necesarios para continuar con su nivel de vida si llegaras a faltar.</p>

				      	<h3>¿Cómo puedo saber cuánto necesito de renta asegurada?</h3>
				      	<p>Tú decides cuánto es lo que tu beneficiario va a necesitar en caso de que tú faltes. Una forma de encontrar esa cantidad es sumar todos tus gastos comunes relacionados con el mantenimiento y gasto de tu hogar.</p>

				      	<h3>¿Qué diferencia existe entre FamiliaSegura Bancomer y VidaSegura Bancomer?</h3>
				      	<p>La principal diferencia se encuentra en la indemnización. Mientras que en VidaSegura Bancomer se entrega la Suma Asegurada contratada en una sola exhibición, en FamiliaSegura Bancomer se entregan rentas mensuales de acuerdo al plazo contratado.</p>
				        
				        <h3>¿Qué descuentos ofrece?</h3>
						<p>Al adquirir FamiliaSegura Bancomer podrás obtener descuentos adicionales por compra múltiple y por forma de pago.</p>

						<h3>¿Qué debo hacer para realizar cambios en mi póliza?</h3>
						<p>Para cualquier cambio o información sobre tu Póliza debes llamar al Centro de Servicio al Cliente, asesoría personalizada de lunes a viernes de 8:30 a 19:00 hrs. D.F. y zona metropolitana: 1102 0000. Desde el interior de la república: (01 55) 1102 0000. Desde celular: (55) 1102 0000.</p>

						<h3>¿Qué deben de hacer mis beneficiarios para reclamar el seguro?</h3>
						<p>Comunicarse lo antes posible con Cabina de Siniestros de Seguros Bancomer al 01800 URGENTE (01800 874 36 83) donde te proporcionaremos la información necesaria para llevar a cabo tu reclamación.</p>

						<h3>¿Puedo tener más de una póliza?</h3>
						<p>Sí, siempre que no rebase en conjunto el límite permitido por Seguros Bancomer, que es de $30,000 pesos de renta asegurada mensual.</p>

						<h3>¿Cuánto me cuesta?</h3>
						<p>La prima mensual que tú pagas depende de diferentes factores a considerar: edad, peso, estatura y el padecimiento de ciertas enfermedades que se describen en tu solicitud, así como el tipo de renta asegurada que deseas.</p>

				      </div>
				    </div>
				</div>

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
