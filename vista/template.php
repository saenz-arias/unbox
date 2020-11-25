<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Compras en línea - Unbox</title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="<?=base_url?>css/bootstrap.min.css"/>

		<!-- Slick -->
		<link type="text/css" rel="stylesheet" href="<?=base_url?>css/slick.css"/>
		<link type="text/css" rel="stylesheet" href="<?=base_url?>css/slick-theme.css"/>

		<!-- nouislider -->
		<link type="text/css" rel="stylesheet" href="<?=base_url?>css/nouislider.min.css"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="<?=base_url?>css/font-awesome.min.css">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="<?=base_url?>css/style.css"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-167468745-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-167468745-2');
</script>


    </head>
	<body>
		<!-- HEADER -->
		<header>
			<!-- TOP HEADER -->
			<div id="top-header">
				<div class="container">


                   <!-- CONTACTO -->


					<ul class="header-links pull-left">
						<li><a href="#"><i class="fa fa-phone"></i> +593 962768625</a></li>
						<li><a href="#"><i class="fa fa-envelope-o"></i> info@unbox.com</a></li>
						<li><a href="#"><i class="fa fa-map-marker"></i> Malecon 2106 2do piso, Guayaquil - Ecuador</a></li>
					</ul>


					<!-- <ul class="header-links pull-right">
						<li><a href="#"><i class="fa fa-dollar"></i> USD</a></li>
						<li><a href="#"><i class="fa fa-user-o"></i> My Account</a></li>
					</ul> -->
				</div>
			</div>
			<!-- /TOP HEADER -->

			<!-- MAIN HEADER -->
			<div id="header">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<!-- LOGO -->
						<div class="col-md-3">
							<div class="header-logo">
								<a href="<?=base_url?>inicio/inicio" class="logo">
									<img src="<?=base_url?>img/logo.png" alt="">
								</a>
							</div>
						</div>
						<!-- /LOGO -->

						<!-- SEARCH BAR -->
						<div class="col-md-6">
							<div class="header-search">
								<form>
									<select class="input-select">
										<option value="0">All Categories</option>
										<option value="1">Category 01</option>
										<option value="1">Category 02</option>
									</select>
									<input class="input" placeholder="Search here">
									<button class="search-btn">Search</button>
								</form>
							</div>
						</div>
						<!-- /SEARCH BAR -->

						<!-- ACCOUNT -->
						<div class="col-md-3 clearfix">
							<div class="header-ctn">
								
                        <!-- CALCULA PRECIO -->
	 
			
			<div>
				<form class="calculador"  name="datos" method="post" id="formulario" onsubmit="return false;">
				    <h3>Ingrese precio y peso del pruducto</h3><br>
                      <label for="precio">Precio:</label><br>
                      <input type="string" class="precio" name="precio" id="precio" style="border-radius:5px" placeholder="   Precio:"/><br/><br/>
      
                      <label for="peso">Peso kg:</label><br>
				      <input type="string" class="peso" name="peso" id="peso" style="border-radius:5px" placeholder="   Peso Kg:"/><br/><br/><br/>
				      <!-- <input type="submit" value="Calcula" id="submit"  /> -->
					  <button type="submit" class="sumar" value="Sumar" id="btn-flotante" data-dismiss="modal" onsubmit="return false";>Sumar</button>
					  <input type="button" class="reset" id="limpiar" onclick="limpiarFormulario()" value="Limpiar">
					  <!-- <input class="icon" onclick="limpiarFormulario()">
					     <img src="<?=base_url?>img/refresh.svg">
					  </input> -->
					  <!-- <button class="btn-refresh" onclick="limpiarFormulario()"><img src="<?=base_url?>img/refresh.svg"></img></button> -->
					  <!-- <button class="reset" onclick="limpiarFormulario()"><i class="fa fa-redo-alt"></i></button> -->
					  

                    <!-- DEVUELVE DATOS -->
					  <div class="box dashed">
					  <h4>Su producto puesto en Ecuador</h4>
                <h3>Total a pagar</h3>
                        <!-- <hr/> -->
                        <h5 id="p_total">
                         <!-- Total: <span></span> -->
                            </h5>
							<p>*En caso de dos o mas productos consulte condiciones</p>
			          </div>

				</form>	 
				</div>
			<button type="submit" class="btn-flotante" value="Calcula" id="btn-flotante" data-dismiss="modal">Calcular envio</button>
				 <script type="text/javascript" src="../js/calculo.js"></script>
				 <!-- RESPUESTA -->
								 
								<!-- Menu Toogle -->
								<div class="menu-toggle">
									<a href="#">
										<i class="fa fa-bars"></i>
										<span>Menu</span>
									</a>
								</div>
								<!-- /Menu Toogle -->
							</div>
						</div>
						<!-- /ACCOUNT -->
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
		</header>
		<!-- /HEADER -->


         <!-- NAVIGATION -->

        <?php
        include "modulos/navegacion.php";
        ?>
			
		<!-- /NAVIGATION -->


<?php     #MODELO-VISTA-CONTROLADOR

 $mvc = new MvcController();
 $mvc -> enlacesPaginasController();

 ?>
	
<!-- NEWSLETTER -->
<div id="newsletter" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						 <div class="newsletter">
							
							<ul class="newsletter-follow">
								<li>
									<a href="https://www.facebook.com/unboxec/" target="blank"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-twitter"></i></a>
								</li>
								<li>
									<a href="https://www.instagram.com/unboxec/" target="blank"><i class="fa fa-instagram"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-pinterest"></i></a>
								</li>
							</ul>
						</div> 
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /NEWSLETTER -->

<!-- FOOTER -->
<footer id="footer">
			<!-- top footer -->
			<div class="section">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Unbox</h3>
								<p>Compra sin tarjeta de credito alrededor del mundo y recibe a domicilio en menos de 15 dias.<br> Te acompañamos desde el primer click!</p><br>
								<ul class="header-links pull-left">
									<li><a href="#"><i class="fa fa-phone"></i> +593 962768625</a></li>
									<li><a href="#"><i class="fa fa-envelope-o"></i> info@unbox.com</a></li>
									<li><a href="#"><i class="fa fa-map-marker"></i> Malecon 2106 2do piso, Guayaquil - Ecuador</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title"></h3>
								<!-- <ul class="footer-links">
									<li><a href="#">Lo mas vendido</a></li>
									<li><a href="laptops.html">Laptops</a></li>
									<li><a href="smartphones.html">Smartphones</a></li>
									<li><a href="videojuegos.html">Videojuegos</a></li>
								</ul> -->
							</div>
						</div>

						<div class="clearfix visible-xs"></div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Informacion</h3>
								<ul class="footer-links">
									<li><a href="#">Lo mas vendido</a></li>
									<li><a href="index.php?action=laptops">Laptops</a></li>
									<li><a href="index.php?action=smartphones">Smartphones</a></li>
									<li><a href="index.php?action=videojuegos">Videojuegos</a></li>
									<li><a href="index.php?action=gadgets">Gadgets</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Servicios</h3>
								<ul class="footer-links">
									<li><a href="#">Unbox</a></li>
									<li><a href="#">Contactenos</a></li>
									<li><a href="#">Pedidos and Devoluciones</a></li>
									<li><a href="#">Terminos & Condiciones</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /top footer -->

			<!-- bottom footer -->
			<div id="bottom-footer" class="section">
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-12 text-center">
							<ul class="footer-payments">
								<li><a href="#"><i class="fa fa-cc-visa"></i></a></li>
								<li><a href="#"><i class="fa fa-credit-card"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-paypal"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-mastercard"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-discover"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-amex"></i></a></li>
							</ul>
							<span class="copyright">
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Unbox 
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							</span>
						</div>
					</div>
						<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /bottom footer -->
		</footer>
        <!-- /FOOTER -->
        
        <!-- jQuery Plugins -->
		<script src="<?=base_url?>js/jquery.min.js"></script>
		<script src="<?=base_url?>js/bootstrap.min.js"></script>
		<script src="<?=base_url?>js/slick.min.js"></script>
		<script src="<?=base_url?>js/nouislider.min.js"></script>
		<script src="<?=base_url?>js/jquery.zoom.min.js"></script>
		<script src="<?=base_url?>js/main.js"></script>
      
       
</body>
</html>