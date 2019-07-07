<?php if(!class_exists('Rain\Tpl')){exit;}?><!-- Footer section -->
	<section class="footer-section">
		<div class="container">
			<div class="footer-logo text-center">
				<a href="index.html"><h2 class="text-white">LOGO</h2></a>
			</div>
			<div class="row">
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget about-widget">
						<h2>Sobre</h2>
						<p>Donec vitae purus nunc. Morbi faucibus erat sit amet congue mattis. Nullam frin-gilla faucibus urna, id dapibus erat iaculis ut. Integer ac sem.</p>
						<img src="../custom/site/img/cards.png" alt="">
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget about-widget">
						<h2>Navegação</h2>
						<ul>
							<li><a href="">Minha Conta</a></li>
							<li><a href="">Meus Pedidos</a></li>
							<li><a href="">Lista de desejos</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget about-widget">
						<h2>Categorias</h2>
						<ul>
							<?php require $this->checkTemplate("categories-menu");?>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget contact-widget">
						<h2>Redes Sociais</h2>
						<div class="social-links">
							<a href="" class="instagram"><i class="fa fa-instagram"></i></a>
							<a href="" class="facebook"><i class="fa fa-facebook"></i></a>
							<a href="contato.html" class="facebook"><i class="fa fa-envelope-open"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="social-links-warp">
			<div class="container">

				<p class="text-white text-center mt-2">Feito por <a href="http://www.marciaprates.com"> Márcia Prates</a> <i class="fa fa-heart-o" aria-hidden="true"></i> </p>

			</div>
		</div>
	</section>
	<!-- Footer section end -->



	<!--====== Javascripts & Jquery ======-->
	<script src="custom/site/js/jquery-3.2.1.min.js"></script>
	<script src="custom/site/js/bootstrap.min.js"></script>
	<script src="custom/site/js/jquery.slicknav.min.js"></script>
	<script src="custom/site/js/owl.carousel.min.js"></script>
	<script src="custom/site/js/jquery.nicescroll.min.js"></script>
	<script src="custom/site/js/jquery.zoom.min.js"></script>
	<script src="custom/site/js/jquery-ui.min.js"></script>
	<script src="custom/site/js/main.js"></script>

	</body>
</html>
