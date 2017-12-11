<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

	</div><!-- .site-content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<!-- Footer -->	
	<div class="space"></div>
<div class="container footer">
	<div class="row">
		<div class="col-md-6 col-xs-12">
			<div class="col-md-6 col-xs-6"><h4>SERVICIOS</h4>
				<ul>
					<li> <a href="#">Comprobantes Fiscales</a> </li> 
					<li> <a href="#">Solicitud de Cambios</a> </li> 
					<li> <a href="#">Directorio de Sucursales</a> </li>
					<li> <a href="#">UNE</a> </li>
					<li> <a href="#">Cancelación de Póliza</a> </li>
				</ul>
			</div>
			<div class="col-md-6 col-xs-6"><h4>CENTRO DE AYUDA</h4>
				<ul>
					<li> <a href="#">Glosario de Términos</a> </li>
					<li> <a href="#">Tips</a> </li>
					<li> <a href="#">En caso de Sinistros</a> </li>
					<li> <a href="#">FAQS</a> </li>
				</ul>
			</div>
		</div>
		<div class="col-md-6 col-xs-12">
			<div class="col-md-6 col-xs-6"><h4>CONTACTO</h4>
				<ul>
					<li> <a href="#">Atención Telefónica</a> </li>
					<li> <a href="#">Chat</a> </li>
					<li> <a href="#">Correo Electrónico</a> </li>
				</ul>
			</div>
			<div class="col-md-6 col-xs-6"><h4>REDES SOCIALES</h4>
				<ul>
					<li> <a href="#"><img src='http://localhost/wp-content/uploads/2017/12/fb.png' alt="">Facebook</a> </li>
					<li> <a href="#"><img src='http://localhost/wp-content/uploads/2017/12/twt.png' alt="">Twitter</a> </li>
					<li> <a href="#"><img src='http://localhost/wp-content/uploads/2017/12/ttb.png' alt="">YouTube</a> </li>
					<li> <a href="#"><img src='http://localhost/wp-content/uploads/2017/12/gp.png' alt="">Google+</a> </li>
					<div class="space"></div>
				</ul>
			</div>	
		</div>

	</div>
</div>

<div class="menuFooter">
	<div class="container">
		<div class="row">
			<ul>
				<li><a href="#">Legal</a></li>
				<li><a href="#">Aviso de Privacidad</a></li>
				<li><a href="#">Derechos ARCO</a></li>
				<li><a href="#">Seguridad</a></li>
				<li><a href="#">Mapa del Sitio</a></li>
				<li><a href="#">Buró EF <img src="http://localhost/wp-content/uploads/2017/12/buro.jpg" alt="" height="15px", whidth="15px"></a></li>
				<li><a href="#">Basicos Estandarizados</a></li>
				<li><a href="#">Términos y Condiciones</a></li>
				<li><a href="#">Disposiciones legales vigentes</a></li>
			</ul>
		</div>
	</div>
</div>
<!-- Footer -->
		
	</footer><!-- .site-footer -->

</div><!-- .site -->

<?php wp_footer(); ?>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
<script src="<?php echo bloginfo('template_url'); ?>/js/bootstrap.min.js" type="text/javascript"></script>
<!-- <script src="<?php echo bloginfo('template_url'); ?>/js/script.js" type="text/javascript"></script> -->
</html>
