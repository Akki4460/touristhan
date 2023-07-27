<?php

session_start();

error_reporting(0);
include('includes/config.php');
if(isset($_POST['submit1']))
{
$fname=$_POST['fname'];
$email=$_POST['email'];	
$mobile=$_POST['mobileno'];
$subject=$_POST['subject'];	
$description=$_POST['description'];
$sql="INSERT INTO  tblenquiry(FullName,EmailId,MobileNumber,Subject,Description) VALUES(:fname,:email,:mobile,:subject,:description)";
$query = $dbh->prepare($sql);
$query->bindParam(':fname',$fname,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->bindParam(':mobile',$mobile,PDO::PARAM_STR);
$query->bindParam(':subject',$subject,PDO::PARAM_STR);
$query->bindParam(':description',$description,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
$msg="Enquiry  Successfully submited";
}
else 
{
$error="Something went wrong. Please try again";
}

}

?>
<!DOCTYPE HTML>
<html>
<head>
<title>Touristhan | Enquiry</title>
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
<link href="css/enqForm.css" rel="stylesheet">

<!-- Custom Theme files -->
<script src="js/jquery-1.12.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
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
<!-- top-header -->
<div class="top-header">
	<div class="banner-1 ">
	<?php include('includes/header.php');?>
	<div class="container">
		<h1 class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;">Touristhan</h1>
	</div>
</div>
<!--- /banner-1 ---->
<!--- privacy ---->
<div class="privacy">
	<div class="container">
		<!-- <h3 class="wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">Enquiry Form Password</h3>
--><form name="enquiry" method="post">
		 <?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
				else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
	<!-- <p style="width: 350px;"> -->
	<!--	
			<b>Full name</b>  <input type="text" name="fname" class="form-control" id="fname" placeholder="Full Name" required="">
	</p> 
<p style="width: 350px;">
<b>Email</b>  <input type="email" name="email" class="form-control" id="email" placeholder="Valid Email id" required="">
	</p> 

	<p style="width: 350px;">
<b>Mobile No</b>  <input type="text" name="mobileno" class="form-control" id="mobileno" maxlength="10" placeholder="10 Digit mobile No" required="">
	</p> 

	<p style="width: 350px;">
<b>Subject</b>  <input type="text" name="subject" class="form-control" id="subject"  placeholder="Subject" required="">
	</p> 
	<p style="width: 350px;">
<b>Description</b>  <textarea name="description" class="form-control" rows="6" cols="50" id="description"  placeholder="Description" required=""></textarea> 
	</p> 

			<p style="width: 350px;">
<button type="submit" name="submit1" class="btn-primary btn">Submit</button>
			</p>
			</form>

		
	</div> -->
  <div class="screen">
      <div class="screen-header">
        <div class="screen-header-left">
          <div class="screen-header-button close"></div>
          <div class="screen-header-button maximize"></div>
          <div class="screen-header-button minimize"></div>
        </div>
        <div class="screen-header-right">
          <div class="screen-header-ellipsis"></div>
          <div class="screen-header-ellipsis"></div>
          <div class="screen-header-ellipsis"></div>
        </div>
      </div>
      <div class="screen-body">
        <div class="screen-body-item left">
          <div class="app-title">
            <!-- <span>CONTACT</span> -->
            <span>ENQUIRY</span>
          </div>
          <div class="app-contact">CONTACT INFO : +91 88 477 272 12</div>
        </div>
        <div class="screen-body-item">
          <div class="app-form">
            <div class="app-form-group">
            <input type="text" name="fname" class="form-control" id="fname" placeholder="Full Name" required=""></div>
            <div class="app-form-group">
            <input type="email" name="email" class="form-control" id="email" placeholder="Valid Email id" required=""></div>
            <div class="app-form-group">
            <input type="text" name="mobileno" class="form-control" id="mobileno" maxlength="10" placeholder="10 Digit mobile No" required="">
            </div>
            <div class="app-form-group">
            <input type="text" name="subject" class="form-control" id="subject"  placeholder="Subject" required="">
            </div>
            <div class="app-form-group message">
            <textarea name="description" class="form-control" rows="6" cols="50" id="description"  placeholder="Description" required=""></textarea> 
              <!-- <input class="app-form-control" placeholder="MESSAGE"> -->
            </div>
            <div class="app-form-group buttons">
              <button class="app-form-button">CANCEL</button>
              <button class="app-form-button" type="submit" name="submit1">SEND</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    </form>



	<!-- <div class="bg-info contact4 overflow-hiddedn position-relative">
   Row  
  <div class="row no-gutters">
    <div class="container newadjj">
      <div class="col-lg-6 contact-box mb-4 mb-md-0">
        <div class="">
          <h1 class="title font-weight-light text-white mt-2">Contact Us</h1>
          <form class="mt-3">
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group mt-2">
                  <input class="form-control text-white" type="text" placeholder="name">
                </div>
              </div>
              <div class="col-lg-12">
                <div class="form-group mt-2">
                  <input class="form-control text-white" type="email" placeholder="email address">
                </div>
              </div>
              <div class="col-lg-12">
                <div class="form-group mt-2">
                  <textarea class="form-control text-white" rows="3" placeholder="message"></textarea>
                </div>
              </div>
              <div class="col-lg-12 d-flex align-items-center mt-2">
                <button type="submit" class="btn bg-white text-inverse px-3 py-2"><span> Submit</span></button>
                <span class="ml-auto text-white align-self-center"><i class="icon-phone mr-2"></i>251 546 9442</span>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="col-lg-6 right-image p-r-0">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1619902.0054433027!2d-122.68851282163044!3d37.534535608111824!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80859a6d00690021%3A0x4a501367f076adff!2sSan+Francisco%2C+CA%2C+USA!5e0!3m2!1sen!2sin!4v1507725785789"
        width="100%" height="538" frameborder="0" style="border:0" allowfullscreen data-aos="fade-left" data-aos-duration="3000"></iframe>
    </div> -->
  </div>
</div>

</div>
<!--- /privacy ---->
<!--- footer-top ---->
<!--- /footer-top ---->
<?php include('includes/footer.php');?>
<!-- signup -->
<?php include('includes/signup.php');?>			
<!-- //signu -->
<!-- signin -->
<?php include('includes/signin.php');?>			
<!-- //signin -->
<!-- write us -->
<?php include('includes/write-us.php');?>
</body>
</html>