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
    <link rel="stylesheet" href="css/main.css">
    
    <style>
    	.tos-pagination {
    		padding-right: 0;
    		text-align: center;
    	}

		.tos-pagination a{
    		float: none;
		}

		.tos-pagination{
			background-color: transparent;
		}
    </style>
    
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

	<!--
	<section id="index_section" class="fullscreen parallax"
             data-img-width="1400" data-img-height="767"
             data-diff="100" style="display:block;">
        <div class="content-a">
            <div class="content-b">
                <div class="container">
                    <h1>sdas</h1>
                </div>
            </div>
        </div>
    </section> -->
	
	<section id="index_section" class="parallax" style="height:100%;"
             data-img-width="1400" data-img-height="767"
             data-diff="100" style="display:block;">
        <div id="events-wrapper" class="example gallery" style="height:100%;">
			<div class="fullback indexback">
				<div class="fullback hidden-xs hidden-sm" style="position: relative;">
					<div class="verticalAuto" 
						style="left: 6%;">
						<div class="title-baner">CORTES <br>	FINOS</div>
						<div class="subtitle-banner">CARNES & PARRILLAS</div>
					</div>
				</div>
			</div>
			<div class="fullback index2back">
				<div class="fullback hidden-xs hidden-sm" style="position: relative;">
					<div class="verticalAuto" 
						style="left: 6%;">
						<div class="title-baner" style="color: white">SIMETRIA Y <br>	ELEGANCIA</div>
						<div class="subtitle-banner" style="color: #B99B82">LOS AMBIENTES</div>
					</div>
				</div>
			</div>
			<div class="fullback index3back">
				<div class="fullback hidden-xs hidden-sm" style="position: relative;">
					<div class="verticalAuto" 
						style="left: 6%;">
						<div class="title-baner" style="color: white">VINOS <br>	DEL MES</div>
						<div class="subtitle-banner" style="color: #D0B165">SANDEMAN</div>
					</div>
				</div>
			</div>
		</div>
    </section>

    <section id="history_section" class="contenedor">
        <div class="row text-center">
        	<div class="col-md-6  padding-right-0 padding-left-0">
        		<div class="cont-fachada heightimg-desktop" style=""> <!-- Hmiddle-screen -->
        			<div class="fachada-all fachada-historyhornero"></div>
        		</div>
        	</div>
        	<div class="col-md-6 padding-right-0 padding-left-0">
        		<div class="width-100per" style="min-height:400px;">
        			<div class="line" style="position: absolute;top: -6px;width:40%;"></div>
        			<div class="line" style="position: absolute;bottom: 0;width:40%;"></div>
        			<div class="linea-right" style="    position: absolute;
													    right: 0px;
													    height: 40%;
													    top: 6em;
													    border-left: 2px solid #8E4239;"></div>
        			<div class="texto-historyhornero text-center verticalAuto">
        				<span class="title-all">El PRIMER HORNERO</span>
        				<div class="line" style="display: block;"></div>
						<div class="fachadaall-middletext">
	        				<p>	
	        					Hace más de 15 años, Armando Tafur 
								siguió un sueño de éxito, tener el
								Restaurante con las mejores Carnes y
								Parrillas de Lima. Abriendo así su primer
								restaurante “El HORNERO” en el
								emblemático distrito de Chorrillos.
							</p>
						</div>		
						<a href="ourhistory.php">
							<button class="border-button">
								Descubre más <br> de nuestra historia	
							</button>
						</a>
        			</div>
        		</div>
        		
        	</div>
			
			<img style="margin-top:4em;" src="img/adorno/adorno_ornamental.png" alt="adornooramental">
        </div>


    </section>

	<?php include('footer.php'); ?>

	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/owl.carousel.min.js"></script>
	<script src="assets/js/jquery.tosrus.all.min.js"></script>
	<script src="assets/js/hammer.min.js"></script>
	<script src="js/main.js"></script>
	<script>
		$('#onlyfirst').show();

		$("#events-wrapper").tosrus({
		       autoplay   : {
		          play       : false
		       },
		       slides     : {
		          scale      : "fit"
		       },
		       effect : "slide",
		       buttons    : false,
		       pagination : {
		          add     :   true
		          
		       }
		    });
	</script>
</body>
</html>