<!DOCTYPE HTML>
<html>
<head>
<title>Touristhan</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/morris.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<script src="js/jquery-2.1.4.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/table-style.css" />
<link rel="stylesheet" type="text/css" href="css/basictable.css" />
<script type="text/javascript" src="js/jquery.basictable.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
      $('#table').basictable();

      $('#table-breakpoint').basictable({
        breakpoint: 768
      });

      $('#table-swap-axis').basictable({
        swapAxis: true
      });

      $('#table-force-off').basictable({
        forceResponsive: false
      });

      $('#table-no-resize').basictable({
        noResize: true
      });

      $('#table-two-axis').basictable();

      $('#table-max-height').basictable({
        tableWrapper: true
      });
    });
</script>
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
  <style>
		.errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
		</style>
</head>
<body>
<div class="page-container">
   <!--/content-inner-->
<div class="left-content">
	   <div class="mother-grid-inner">
            <!--header start here-->
				<?php include('includes/header.php');?>
				     <div class="clearfix"> </div>	
				</div>
<!--heder end here-->
<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="dashboard.php">Home</a><i class="fa fa-angle-right"></i>Update Gallery</li>
            </ol>
<div class="agile-grids">	

<?php
// Include the database configuration file
include ('includes/config.php');
$statusMsg = '';

// File upload path
// $targetDir = "gallery/";
// $targetFilePath = $targetDir . $fileName;
// $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);


if(isset($_POST["submit"])){
foreach ($_FILES["galleryimg"]["name"] as $key => $value) {
    # code...
    
    $imgName =$_FILES["galleryimg"]["name"][$key];
    $dataname=$_POST['category'];
    move_uploaded_file($_FILES["galleryimg"]["tmp_name"][$key],"gallery/".$_FILES["galleryimg"]["name"][$key]);
    // // Allow certain file formats
    // $allowTypes = array('jpg','png','jpeg','gif','pdf');
    // if(in_array($fileType, $allowTypes)){
        //     // Upload file to server
        // if(move_uploaded_file($_FILES["galleryimg"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            $insert ="INSERT into tblgallery (galleryImg, imgcategory) VALUES (:imgName,:dataname)";
            $query = $dbh->prepare($insert);
            $query->bindParam(':imgName',$imgName,PDO::PARAM_STR);
            $query->bindParam(':dataname',$dataname,PDO::PARAM_STR);
            $query->execute();
            //             if($insert){
                //                 $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
                //             }else{
                    //                 $statusMsg = "File upload failed, please try again.";
                    //             } 
                    //         }else{
                        //             $statusMsg = "Sorry, there was an error uploading your file.";
                        //         }
                        //     }else{
                            //         $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
                            //     }
                            // }else{
                                //     $statusMsg = 'Please select a file to upload.';
                            }
                            }
                            
                            // Display status message
                            echo $statusMsg;
                            ?>


<div>
    
    <form method="post" enctype="multipart/form-data">
    
        <h2>Select Image File to Upload:</h2>
        <input type="file" name="galleryimg[]" id="galleryimg" multiple>
        <input type="text" name="category">
        <input class="btn btn-dark" type="submit" name="submit" value="Upload">
    </form>
</div>

</div>
                        </div>

  <!--//content-inner-->
		<!--/sidebar-menu-->
        <?php include('includes/sidebarmenu.php');?>
							  <div class="clearfix"></div>		
							</div>
							<script>
							var toggle = true;
										
							$(".sidebar-icon").click(function() {                
							  if (toggle)
							  {
								$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
								$("#menu span").css({"position":"absolute"});
							  }
							  else
							  {
								$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
								setTimeout(function() {
								  $("#menu span").css({"position":"relative"});
								}, 400);
							  }
											
											toggle = !toggle;
										});
							</script>
<!--js -->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
   <!-- /Bootstrap Core JavaScript -->	   


</body>
</html>