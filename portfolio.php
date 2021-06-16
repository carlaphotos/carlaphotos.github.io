
<?php

//ligar à BD
include "ligar_bd.php" ;

//consulta à tabela cupcake
$sql="SELECT * FROM fotografia";
//executar a consulta
$result = mysqli_query($conn, $sql);
//nr linhas da consulta
$num_of_rows= mysqli_num_rows($result);


?>

<!DOCTYPE html>
<html lang="pt-PT">
<head>
	<title>Carla Photo's</title>
	<meta charset="UTF-8">
	<meta name="description" content="Photographer html template">
	<meta name="keywords" content="photographer, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i&display=swap" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/magnific-popup.css"/>
	<link rel="stylesheet" href="css/slicknav.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="css/style.css"/>


	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section  -->
	<header class="header-section hs-bd">
		<a href="index.php" class="site-logo"><img src="img/logo.jpg" alt="logo"></a>
		<div class="header-controls">
			<button class="nav-switch-btn"><i class="fa fa-bars"></i></button>
		</div>
		<ul class="main-menu">
			<li><a href="index.php">Início</a></li>
			<li><a href="about.php">Sobre o artista </a></li>
			<li>
				<a href="portfolio.php">Portfólio</a>

			</li>
			<li><a href="blog.php">Blog</a></li>
			<li><a href="contact.php">Contacto</a></li>
		</ul>
	</header>
	<div class="clearfix"></div>
	<!-- Header section end  -->

	<!-- Portfolio section  -->
	<div class="portfolio-section">
		<ul class="portfolio-filter controls text-center">
			<li class="control" data-filter="all">All</li>
			<li class="control" data-filter=".retrato">Retrato</li>
			<li class="control" data-filter=".paisagem">Paisagem</li>
			<li class="control" data-filter=".culinaria">Culinária</li>
		</ul>                                                           
		<div class="row portfolio-gallery m-0">

			<?php
			//mostrar categorias
			  while ($row = $result -> fetch_assoc())
				{ 
					$id_categoria=$row['id_categoria'];
			?>

			<?php if($id_categoria==2) { ?>
						<div class="mix col-xl-2 col-md-3 col-sm-4 col-6 p-0 retrato">
							<a href="<?php echo 'imagens/'.$row['nome_foto'];?>" class="portfolio-item img-popup set-bg" data-setbg="<?php echo 'imagens/'.$row['nome_foto'];?>"></a>
						</div>
		    <?php } ?>
			
		    <?php if($id_categoria==1) { ?>
						<div class="mix col-xl-2 col-md-3 col-sm-4 col-6 p-0 paisagem">
							<a href="<?php echo 'imagens/'.$row['nome_foto'];?>" class="portfolio-item img-popup set-bg" data-setbg="<?php echo 'imagens/'.$row['nome_foto'];?>"></a>
						</div>
		    <?php } ?>

		    <?php if($id_categoria==3) { ?>
						<div class="mix col-xl-2 col-md-3 col-sm-4 col-6 p-0 culinaria">
							<a href="<?php echo 'imagens/'.$row['nome_foto'];?>" class="portfolio-item img-popup set-bg" data-setbg="<?php echo 'imagens/'.$row['nome_foto'];?>"></a>
						</div>
		    <?php } ?>

			<?php
				}
			?>
		</div>
	</div>
	<!-- Portfolio section end  -->



	<!-- Footer section   -->
	<footer class="footer-section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6 order-1 order-md-2">
					<div class="footer-social-links">
						<a href="https://www.pinterest.pt/carlaphotos2021/_saved/"><i class="fa fa-pinterest"></i></a>
						<a href="https://www.facebook.com/CarlaPhotos00/?ref=page_internal"><i class="fa fa-facebook"></i></a>
						<a href="https://www.instagram.com/__carla_photos__/"><i class="fa fa-instagram"></i></a>

					</div>
				</div>
				<div class="col-md-6 order-2 order-md-1">	
				</div>
			</div>
		</div>
	</footer>
	<!-- Footer section end  -->

	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.slicknav.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/circle-progress.min.js"></script>
	<script src="js/mixitup.min.js"></script>
	<script src="js/instafeed.min.js"></script>
	<script src="js/masonry.pkgd.min.js"></script>
	<script src="js/main.js"></script>

<script>

	<?php
			msqli_close($conn);
	?>                   

	$('div .portfolio-item').click(function(e) {
    var d = $(this).data('designacao');
    var d1 = $(this).data('descricao');
    $('#portfolioModal img').attr('src', $(this).attr('data-img-url'));
    $(".modal-body #desig").val(d);
    $(".modal-body #desc").val(d1);
        });
  </script>
	</body>
</html>

