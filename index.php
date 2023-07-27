<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>
<!DOCTYPE HTML>
<html>

<head>
	<title>Touristhan</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
	<link href="css/font-awesome.css" rel="stylesheet">
	<script src="js/jquery-1.12.0.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
	<link href="css/card.css" rel="stylesheet" type="text/css" media="all">
	<link href="css/styleabt.css" rel="stylesheet" type="text/css" media="all">
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">

	<link rel="stylesheet" href="css/destination.css">
	<link rel="stylesheet" id="travelwp-flaticon-css" href="css/css-flaticon.css" type="text/css" media="all">
	<link rel="stylesheet" id="travelwp-style-css" href="css/travelwp-style.css" type="text/css" media="all">


	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Play&display=swap" rel="stylesheet">

	<!-- Google Web Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">

	<!-- Icon Font Stylesheet -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

	<script src="js/wow.min.js"></script>
	<script>
		new WOW().init();
	</script>
</head>

<body>
	<section class="footAdj">
		<div class="banner">
			<?php include('includes/header.php'); ?>
			<div class="container">
				<h1 class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;"> Touristhan</h1>
			</div>
		</div>

		<!-- About Start -->
		<div class="abthome">

			<div class="container-xxl py-5">
				<div class="container">
					<div class="row g-5 align-items-center">
						<div class="col-lg-6">
							<div class="row g-3">
								<div class="col-6 text-start t1">
									<img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s" src="images/a1.png">
								</div>
								<div class="col-6 text-start t2">
									<img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s" src="images/a1.png" style="margin-top: 25%;">
								</div>
								<div class="col-6 text-end t3">
									<img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.5s" src="images/a1.png">
								</div>
								<div class="col-6 text-end t4">
									<img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s" src="images/a1.png">
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<h5 class="section-title ff-secondary text-start text-primary fw-normal">About Us</h5>
							<h1 class="mb-4">Welcome to Touristhan</h1>
							<?php
							$pagetype = 'aboutus';
							$sql = "SELECT type,detail from tblpages where type=:pagetype";
							$query = $dbh->prepare($sql);
							$query->bindParam(':pagetype', $pagetype, PDO::PARAM_STR);
							$query->execute();
							$results = $query->fetchAll(PDO::FETCH_OBJ);
							$cnt = 1;
							if ($query->rowCount() > 0) {
								foreach ($results as $result) {
									$str = substr($result->detail, 240, 238);
							?>

									<p>
										<?php
										# code...
										echo $str;

										?>


									</p>

							<?php }
							} ?>

							<p class="mb-4"></p>
							<div class="row g-4 mb-4">
								<div class="col-sm-6">
									<div class="d-flex align-items-center border-start border-5 border-primary px-3">
										<h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">10</h1>
										<div class="ps-4">
											<p class="mb-0">Years of</p>
											<h6 class="text-uppercase mb-0">Experience</h6>
										</div>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="d-flex align-items-center border-start border-5 border-primary px-3">
										<h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">10+</h1>
										<div class="ps-4">
											<p class="mb-0">Popular</p>
											<h6 class="text-uppercase mb-0">Adventures</h6>
										</div>
									</div>
								</div>
							</div>
							<a class=" adjbtn btn btn-primary py-3 px-5 mt-2" href="page.php?type=aboutus">Read More</a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!---holiday---->
		<div class="container-fluid">
			<div class="holiday">





				<h3>Packages</h3>

				<div class="pkgpos">



					<?php $sql = "SELECT * from tbltourpackages order by rand() limit 6";
					$query = $dbh->prepare($sql);
					$query->execute();
					$results = $query->fetchAll(PDO::FETCH_OBJ);
					$cnt = 1;
					if ($query->rowCount() > 0) {
						foreach ($results as $result) {	?>

							<article class="card">
								<img class="card__background" src="admin/pacakgeimages/<?php echo htmlentities($result->PackageImage); ?>" alt="" width="1920" height="2193" />
								<div class="card__content | flow">
									<div class="card__content--container | flow">
										<h4 class="card__title"><?php echo htmlentities($result->PackageName); ?></h4>
										<div class="card__description">
											<h6>Type : <?php echo htmlentities($result->PackageType); ?></h6>
											<p><b>Location :</b> <?php echo htmlentities($result->PackageLocation); ?></p>
											<!-- <p><b>Features</b> <//?php $n = strlen(htmlentities($result->PackageFetures)) < 120 ?  htmlentities($result->PackageFetures) : substr(htmlentities($result->PackageFetures), 117) . "...";
															echo $n; ?></p> -->

										</div>
										<div class="col-md-3 room-right wow fadeInRight animated" data-wow-delay=".5s">
											<h5>RS <?php echo htmlentities($result->PackagePrice); ?></h5>
											<a href="package-details.php?pkgid=<?php echo htmlentities($result->PackageId); ?>" class="view">Details</a>
										</div>
										<div class="clearfix"></div>


									</div>
							</article>

					<?php }
					} ?>

				</div>

				<div style="text-align: center;"><a href="package-list.php" class="view">View More Packages</a></div>
			</div>
			<div class="clearfix"></div>
		</div>

		<div class="container-lg destination">
			<div class="carousel">
				<div class="destHead" id="dt">
					<h2>Destinations</h2>
					<p>We offer</p>
				</div>
				<div class="carousel-item">
					<div class="carousel-box">
						<div class="title">India</div>
						<div class="num">01</div>
						<img src="https://images.unsplash.com/photo-1548013146-72479768bada?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1176&q=80" />
					</div>
				</div>

				<div class="carousel-item">
					<div class="carousel-box">
						<div class="title">Paris</div>
						<div class="num">02</div>
						<img src="https://media.istockphoto.com/id/1150545984/it/foto/palazzo-moderno-di-lusso-con-piscina.jpg?s=612x612&w=0&k=20&c=Pbrai_VGc9tUviMCF1UaBErdS1YGyIVWsD29jzMZwTY=" />
					</div>
				</div>

				<div class="carousel-item">
					<div class="carousel-box">
						<div class="title">Italy</div>
						<div class="num">03</div>
						<img src="https://media.istockphoto.com/id/1214351345/it/foto/guardando-direttamente-lo-skyline-del-quartiere-finanziario-nel-centro-di-londra-immagine-di.jpg?s=612x612&w=0&k=20&c=oNNbPzPvcQ-4RA6AeatNIxHQIafBiXmDRtUUY0Ska-I=" />
					</div>
				</div>

				<div class="carousel-item">
					<div class="carousel-box">
						<div class="title">Sydney</div>
						<div class="num">04</div>
						<img src="https://media.istockphoto.com/id/904390980/it/foto/foto-di-architettura-contemporanea-astratta.jpg?s=612x612&w=0&k=20&c=_P4Wmx5nq5MeDuimpNklKCBlrLovmCyd9lfiMKeJZDs=" />
					</div>
				</div>

				<div class="carousel-item">
					<div class="carousel-box">
						<div class="title">Istanbul</div>
						<div class="num">05</div>
						<img src="https://media.istockphoto.com/id/130408311/it/foto/piscina-allesterno-della-casa-moderna-al-crepuscolo.jpg?s=612x612&w=0&k=20&c=ZoVjx7uDjoHKmpM1ayW6UR1SQOoYh_xx-QMG_qeOYs0=" />
					</div>
				</div>

				<div class="carousel-item">
					<div class="carousel-box">
						<div class="title">Dubai</div>
						<div class="num">06</div>
						<img src="https://media.istockphoto.com/id/1299954175/it/foto/villa-cubica-moderna.jpg?s=612x612&w=0&k=20&c=DhGhb3c1E3DW_fbrWJ_R_Zh0Lbwu6syFeRLsKlZ9no8=" />
					</div>
				</div>

				<div class="carousel-item">
					<div class="carousel-box">
						<div class="title">Canada</div>
						<div class="num">07</div>
						<img src="https://media.istockphoto.com/id/926689776/it/foto/vista-ad-angolo-basso-dei-grattacieli-di-new-york.jpg?s=612x612&w=0&k=20&c=DmEB0Ty7ZwDnBoU5SuA8FNevOp4G1UcECw5aS4vA9A8=" />
					</div>
				</div>

				<div class="carousel-item">
					<div class="carousel-box">
						<div class="title">Maldives</div>
						<div class="num">08</div>
						<img src="https://media.istockphoto.com/id/1191376167/it/foto/villa-dellisola.jpg?s=612x612&w=0&k=20&c=PKslWo4FdbjinohKQlK_oWL34jqAsnzMTdy2bxEAf-I=" />
					</div>
				</div>

				<div class="carousel-item">
					<div class="carousel-box">
						<div class="title">Switzerland</div>
						<div class="num">09</div>
						<img src="https://media.istockphoto.com/id/184316397/it/foto/londra-edifici-aziendali.jpg?s=612x612&w=0&k=20&c=XqrRxEPzFnwRFk7PQrCiu9-FPfCTPyMe5BKKaxYXCs8=" />
					</div>
				</div>
				<div class="carousel-item">
					<div class="carousel-box">
						<div class="title">London</div>
						<div class="num">10 </div>
						<img src="https://media.istockphoto.com/id/184619832/it/foto/distretto-finanziario-al-crepuscolo-londra.jpg?s=612x612&w=0&k=20&c=RAThrJOBY6vhlT6-kQpu9-9jLEzWToYfdw46S8B0Mu0=" />
					</div>
				</div>
			</div>

			<svg style="display: none">
				<symbol id="ico-instagram" viewBox="0 0 35 35">
					<circle opacity=".2" cx="17.5" cy="17.5" r="17" stroke="var(--fill)" fill="none"></circle>
					<path fill-rule="evenodd" clip-rule="evenodd" d="M24.944 20.476c.028-.457.042-1.282.042-2.476s-.014-2.019-.042-2.476c-.056-1.09-.378-1.93-.965-2.517s-1.422-.91-2.503-.965C21.018 12.014 20.194 12 19 12s-2.019.014-2.476.042c-1.081.047-1.92.368-2.517.965s-.918 1.436-.965 2.518C13.014 15.98 13 16.805 13 18c0 1.194.014 2.019.042 2.476.047 1.09.368 1.93.965 2.517s1.436.91 2.518.965c.466.028 1.29.042 2.475.042 1.184 0 2.01-.014 2.476-.042 1.072-.047 1.906-.368 2.503-.965.597-.597.918-1.436.965-2.517ZM19 13.075h-1.427c-.186 0-.438.01-.755.029a11.61 11.61 0 0 0-.797.07c-.215.028-.401.08-.56.154-.26.102-.489.251-.685.447-.196.196-.35.425-.461.685-.056.15-.103.336-.14.56a7.843 7.843 0 0 0-.084.811 7.113 7.113 0 0 0-.014.741c.01.178.01.453 0 .826-.01.373-.01.573 0 .601.01.028.01.228 0 .601s-.01.648 0 .826c.01.177.014.424.014.74 0 .318.028.588.084.812l.14.56c.112.26.265.489.461.685.196.196.425.345.685.447.15.056.336.108.56.154.224.047.49.07.797.07.308 0 .56.01.755.028.196.019.471.019.826 0 .354-.019.554-.019.601 0 .047.019.242.019.587 0s.62-.019.826 0c.205.019.456.01.755-.028.298-.037.569-.06.811-.07.242-.01.424-.06.546-.154.26-.102.494-.251.699-.447a1.75 1.75 0 0 0 .447-.686c.056-.149.103-.335.14-.559.038-.224.066-.494.084-.811.019-.317.023-.564.014-.741a11.82 11.82 0 0 1 0-.826c.01-.373.01-.573 0-.601-.01-.028-.01-.228 0-.601s.01-.648 0-.826c-.01-.177-.014-.424-.014-.74 0-.318-.028-.588-.084-.812l-.14-.56a1.956 1.956 0 0 0-1.147-1.133 3.979 3.979 0 0 0-.545-.153 3.915 3.915 0 0 0-.811-.07c-.326 0-.578-.01-.755-.028a5.916 5.916 0 0 0-.826 0c-.372.019-.568.019-.587 0Zm3.706 2.225c.14-.14.21-.308.21-.504a.57.57 0 0 0-.21-.503.767.767 0 0 0-.517-.21.718.718 0 0 0-.504.21.622.622 0 0 0-.21.503c.01.196.08.364.21.504s.299.21.504.21c.205 0 .377-.07.517-.21ZM22.063 18c0 .849-.298 1.576-.895 2.182a2.882 2.882 0 0 1-2.168.895 3.075 3.075 0 0 1-2.182-.895c-.606-.588-.904-1.315-.895-2.182.01-.867.308-1.594.895-2.182.588-.587 1.315-.886 2.182-.895.867-.01 1.59.29 2.168.895.578.606.876 1.333.895 2.182Zm-1.077 0a1.95 1.95 0 0 0-.573-1.413A1.897 1.897 0 0 0 19 16c-.56 0-1.03.196-1.413.587A2.001 2.001 0 0 0 17 18c-.01.55.186 1.021.587 1.413.401.391.872.587 1.413.587.54 0 1.012-.196 1.413-.587.4-.392.592-.863.573-1.413Z" transform="translate(-1.5 -0.5)" fill="var(--fill)"></path>
				</symbol>

				<symbol id="ico-linkedin" viewBox="0 0 35 35">
					<circle opacity=".2" cx="17.5" cy="17.5" r="17" stroke="var(--fill)" fill="none"></circle>
					<path fill-rule="evenodd" clip-rule="evenodd" d="M15.3025 14.0835C15.3025 14.3845 15.1934 14.6403 14.9752 14.851C14.757 15.0617 14.4786 15.167 14.14 15.167C13.8014 15.167 13.5267 15.0617 13.316 14.851C13.1053 14.6403 13 14.3807 13 14.0722C13 13.7637 13.1053 13.5079 13.316 13.3047C13.5267 13.1016 13.8051 13 14.1512 13C14.4974 13 14.772 13.1016 14.9752 13.3047C15.1783 13.5079 15.2874 13.7675 15.3025 14.0835ZM13.0677 23V16.0248H15.2348V23H13.0677ZM16.4763 16.0248C16.5064 16.8676 16.5214 17.6125 16.5214 18.2596V23H18.7111V18.9819C18.7111 18.7111 18.7336 18.5305 18.7788 18.4402C18.9895 17.8984 19.3582 17.6275 19.8849 17.6275C20.6223 17.6275 20.991 18.1317 20.991 19.14V23H23.158V18.8691C23.158 17.8758 22.9285 17.1272 22.4695 16.623C22.0105 16.1189 21.4048 15.8668 20.6524 15.8668C19.6742 15.8668 18.9594 16.243 18.5079 16.9955H18.4628L18.3499 16.0248H16.4763Z" transform="translate(0 -1)" fill="var(--fill)"></path>
				</symbol>
			</svg>

			<div class="cursor"></div>
			<div class="cursor cursor2"></div>

		</div>

		<!--- routes ---->
		<div id="stats">

			<div class="routes">
				<div class="container" style="display: flex;">
					<div class="col-md-4 routes-left wow fadeInRight animated" data-wow-delay=".5s">
						<div class="rou-left">
							<a href="#"><i class="fa fa-list"></i></a>
						</div>
						<div class="rou-rgt wow fadeInDown animated" data-wow-delay=".5s">
							<h3>30000</h3>
							<p>Enquiries</p>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-4 routes-left">
						<div class="rou-left">
							<a href="#"><i class="fa fa-user"></i></a>
						</div>
						<div class="rou-rgt">
							<h3>1100</h3>
							<p>Regestered users</p>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-4 routes-left wow fadeInRight animated" data-wow-delay=".5s">
						<div class="rou-left">
							<a href="#"><i class="fa fa-ticket"></i></a>
						</div>
						<div class="rou-rgt">
							<h3>2000 +</h3>
							<p>Booking</p>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>

	</section>

	<?php include('includes/footer.php'); ?>
	<!-- signup -->
	<?php include('includes/signup.php'); ?>
	<!-- //signu -->
	<!-- signin -->
	<?php include('includes/signin.php'); ?>
	<!-- //signin -->
	<!-- write us -->
	<?php include('includes/write-us.php'); ?>
	<!-- //write us -->


	<script src="js/destn.js"></script>
</body>

</html>