<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>El Hornero</title>

	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<link rel="stylesheet" href="assets/css/owl.carousel.css"/>
	<link rel="stylesheet" href="assets/css/jquery.tosrus.all.css"/>
	<link rel="stylesheet" href="css/mansory.css"/>
    <link rel="stylesheet" href="css/main.css">
    
    
</head>
<body cz-shortcut-listen="true">
	
	<?php include('header.php'); ?>
	
	<!-- <div class="container">
		
		<span class="font-GeoSlab703bold"> font-GeoSlab703bold</span><br>
		<span class="font-GeoSlab703Medium"> font-GeoSlab703Medium</span><br>
		<span class="font-Montserrat-Bold"> font-Montserrat-Bold</span><br>
		<span class="font-Montserrat-Hairline"> font-Montserrat-Hairline</span><br>
		<span class="font-Montserrat-Light"> font-Montserrat-Light</span><br>
		<span class="font-Montserrat-Regular"> font-Montserrat-Regular</span>
	</div>
	-->
	
	<section class="backtitle asiaback">
		<div class="title">
			ASIA
			<div class="lineback"></div>
		</div>
		
	</section>

   
    <section id="asia_section" class="contenedor">
    	<div class="title-all" style="padding-top:0;">
			"BRINDAMOS ATENCIÓN <br> TODO EL AÑO
			<br><br>
			<a id="flechaabajo" href="#local-content"><div class="flechaabajo"></div></a>
		</div>
		<br><br>

		<div id="local-content" class="row">
			<button id="btn-gallery" class="border-button active" style="width: 130px;">
				FOTOS
			</button>

			<button id="btn-map" class="border-button" style="width: 130px;">
				MAPA	
			</button>
		</div>
		<br>
		<div class="row">
        	<div class="col-md-6  padding-right-0 padding-left-0">
        		<div class="cont-fachada heightimg-desktop" > 
        			<!-- <div class="fachada-historyhornero"></div> -->
        			<div id="locals-wrapper" class="example gallery" style="height:100%;">
						<div class="fullback fachada-asiabar">
							<span class="namelocal">EL BAR</span>
						</div>
						<div class="fullback fachada-asiasalon2">
							<span class="namelocal">EL SALON</span>
						</div>
						<div class="fullback fachada-asiaterraza">
							<span class="namelocal">LA TERRAZA</span>
						</div>
					</div>

					<div id="locals-map" class="example gallery" style="height:100%;display: block;">
						<div id="map" style="height: 100%;"></div>
					</div>
        		</div>
        	</div>
        	<div class="col-md-6 padding-right-0 padding-left-0">
        		<div class="width-100per heightimg-desktop"  style="position: relative;">
        			<div class="line" style="position: absolute;top: -6px;width:40%;"></div>
        			<div class="line" style="position: absolute;bottom: 0;width:40%;"></div>
        			<div class="linea-right" style="    position: absolute;
													    right: 0px;
													    height: 40%;
													    top: 6em;
													    border-left: 2px solid #8E4239;"></div>
        			<div class="texto-events width-100per  verticalAuto">
        				
        				<div id="infoevent-0" class="infoevent text-center">
        					
        					<a href="tef:01 530 7305">
	        					<div class="button-local">
				        			
										<img style="margin-top: -7px;padding-right: 4px;" src="img/adorno/tel_reservas.png" alt="">	01 530 7305
									
	        					</div>
        					</a>				
							<br>
	        				<div class="locals-middletext">
		        				<ul class="list-locals">
		        					<li class="vineta-tel-locals"><p>Panamericana Sur Km. 97.50, Boulevard de Asia</p></li>
		        					<li class="vineta-ubi-locals redtext" style="margin-bottom: 10px;">HORARIO DE ATENCIÓN:</li>
		        					<li class="list-style-none redtext">Temporada Alta (Dic. - Mar.)</li>
		        					<li class="list-style-none ">L - S de 12:00 p.m. a 02:00 a.m.</li>
		        					<li class="list-style-none ">D de 12:00 p.m. a 00:00 a.m.</li>
		        					<li class="list-style-none redtext">Fuera de Temporada (Abr. - Nov.)</li>
		        					<li class="list-style-none ">L - S de 12:00 p.m. a 10:00 p.m.</li>
		        					<li class="list-style-none ">D de 12:00 p.m. a 06:00 p.m.</li>
		        				</ul>
		        			</div>
        				</div>
					</div>
        		</div>
        		
        	</div>
		</div>
    </section>
	
	
	<div class="text-center">
        	<img style="margin-top:1em;margin-bottom:3em;" src="img/adorno/adorno_ornamental.png" alt="adornooramental">	
    </div>
    
	<?php include('footer.php'); ?>

	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/owl.carousel.min.js"></script>
	<script src="assets/js/masonry.pkgd.min.js"></script>
	<script src="assets/js/imagesloaded.pkgd.min.js"></script>
	<script src="assets/js/jquery.tosrus.all.min.js"></script>
	<script src="js/main.js"></script>
	<script src="js/locals.js"></script>
	<script src="js/initmansory.js"></script>
	<script type="text/javascript">
		$('#pageasia').addClass('active');
		$('.headerlocal').html('ASIA');

		var positionMap = { 
			lat: -12.7605546,
			lng: -76.6028273
		};
	</script>
	
	<script src="js/initmap.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDXYDFBbB2nDDXaaEozBzETYILuz7jeESo&callback=initMap"
	async defer>
	</script>
</body>
</html>