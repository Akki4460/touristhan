<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

  <script src="js/jquery-1.12.0.min.js"></script>
  <script src="js/bootstrap.min.js"></script>


<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Tourism Management System In PHP" />
<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link href="css/font-awesome.css" rel="stylesheet">
<!-- Custom Theme files -->
<script src="js/jquery-1.12.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>


</head>

<body style="margin:0px;">
<div class="top-header">
	<div class="banner-1 ">
	<?php include('includes/header.php');?>
	<div class="container">
		<h1 class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;">Touristhan</h1>
	</div>
</div>
  <!-- <div class="container"> -->
  <!-- <div id="gallery">
        <img src="https://images.unsplash.com/photo-1681674990650-679d3baa2d78?auto=format&fit=crop&w=1242&q=80"/>
        <img src="https://images.unsplash.com/photo-1680696981324-bac5babc9fdf?auto=format&fit=crop&w=862&q=80"/>
        <img src="https://images.unsplash.com/photo-1675849049391-db3d8344b748?auto=format&fit=crop&w=1025&q=80"/>
        <img src="https://images.unsplash.com/photo-1636065105989-ed709d8f5306?auto=format&fit=crop&w=687&q=80"/>
        <img src="https://images.unsplash.com/photo-1519681393784-d120267933ba?auto=format&fit=crop&w=1170&q=80"/>
        <img src="https://images.unsplash.com/photo-1636065105989-ed709d8f5306?auto=format&fit=crop&w=687&q=80"/>
        <img src="https://images.unsplash.com/photo-1681472258897-b0b6267cd5ef?auto=format&fit=crop&w=735&q=80"/>
        <img src="https://images.unsplash.com/photo-1680696981324-bac5babc9fdf?auto=format&fit=crop&w=862&q=80"/>
        <img src="https://images.unsplash.com/photo-1422493757035-1e5e03968f95?auto=format&fit=crop&w=1408&q=80"/>
        <img src="https://images.unsplash.com/photo-1681674990650-679d3baa2d78?auto=format&fit=crop&w=1242&q=80"/>
        <img src="https://images.unsplash.com/photo-1675849049391-db3d8344b748?auto=format&fit=crop&w=1025&q=80"/>
        <img src="https://images.unsplash.com/photo-1461301214746-1e109215d6d3?auto=format&fit=crop&w=1170&q=80"/>
    </div> -->
  <div class="wrapper">
    <div class="wrpBox">
    <!-- filter Items -->
    <?php $sql = "SELECT * from tblgallery";
    $query = $dbh->prepare($sql);
    $query->execute();
    $results = $query->fetchAll(PDO::FETCH_OBJ);
    $cnt = 1;
    ?>

    <nav>
      <div class="items">
        <span class="item active" data-name="all">All</span>
        <?php if ($query->rowCount() > 0) {
          $items=array();
          $nresult ;
          foreach($results as $result){
            $items[] = $result->imgcategory;
          }
          $items=array_unique($items);
          // print_r($items);
          // print_r($nresult);
          foreach ($items as $result) {
            ?>
            <span class="item" data-name="<?php echo htmlentities($result); ?>"><?php echo htmlentities($result); ?></span>
        <?php }}
        
        ?>
        <!-- <span class="item" data-name="shoe">Shoe</span>
        <span class="item" data-name="watch">Watch</span>
        <span class="item" data-name="camera">Camera</span>
        <span class="item" data-name="headphone">Headphone</span> -->
      </div>
    </nav>
    <!-- filter Images -->
    <div class="gallery">
      <?php $sql = "SELECT * from tblgallery";
      $query = $dbh->prepare($sql);
      $query->execute();
      $results = $query->fetchAll(PDO::FETCH_OBJ);
      $cnt = 1;
      if ($query->rowCount() > 0) {
        foreach ($results as $result) {  ?>
          <div class="image" data-name="<?php echo htmlentities($result->imgcategory); ?>"><span><img src="admin/gallery/<?php echo htmlentities($result->galleryimg); ?>" alt=""></span></div>

      <?php }
      } ?>
      <!-- <div class="image" data-name="headphone"><span><img src="https://images.pexels.com/photos/2335126/pexels-photo-2335126.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt=""></span></div>
      <div class="image" data-name="camera"><span><img src="https://images.pexels.com/photos/210186/pexels-photo-210186.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt=""></span></div>
      <div class="image" data-name="shoe"><span><img src="https://images.pexels.com/photos/33041/antelope-canyon-lower-canyon-arizona.jpg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt=""></span></div>
      <div class="image" data-name="headphone"><span><img src="images/headphone-2.jpg" alt=""></span></div>
      <div class="image" data-name="watch"><span><img src="https://images.pexels.com/photos/6992/forest-trees-northwestisbest-exploress.jpg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt=""></span></div>
      <div class="image" data-name="watch"><span><img src="https://images.pexels.com/photos/6992/forest-trees-northwestisbest-exploress.jpg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt=""></span></div>
      <div class="image" data-name="watch"><span><img src="https://images.pexels.com/photos/6992/forest-trees-northwestisbest-exploress.jpg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt=""></span></div>
      <div class="image" data-name="watch"><span><img src="https://images.pexels.com/photos/6992/forest-trees-northwestisbest-exploress.jpg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt=""></span></div>
      <div class="image" data-name="watch"><span><img src="https://images.pexels.com/photos/6992/forest-trees-northwestisbest-exploress.jpg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt=""></span></div>
      <div class="image" data-name="shoe"><span><img src="images/shoe-2.jpg" alt=""></span></div>
      <div class="image" data-name="camera"><span><img src="images/camera-2.jpg" alt=""></span></div> -->
    </div>
    </div>
  </div>
  <!-- fullscreen img preview box -->
  <div class="preview-box">
    <div class="details">
      <span class="title">Image Category: <p></p></span>
      <span class="icon fas fa-times"></span>
    </div>
    <div class="image-box"><img src="" alt=""></div>
  </div>
  <div class="shadow"></div>

  <!-- </div> -->
  <script src="js/gallery.js"></script>

  <?php include('includes/footer.php');?>
  <?php include('includes/signup.php'); ?>
	<!-- //signu -->
	<!-- signin -->
	<?php include('includes/signin.php'); ?>
	<!-- //signin -->
	<!-- write us -->
	<?php include('includes/write-us.php'); ?>
</body>

</html>