<!doctype html>
<html>
<head>
<title>GetLaid</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="css/bootstrap.min.css" rel="stylesheet" >
</head>
<body>
<style type="text/css">
	.gotlaid-naslov{
		font-family: WorkSans;
		font-size: 44px;
		font-weight: 800;
		letter-spacing: -1px;
		text-align: center;
		color: #000000;
	}
	.wrapper-phone{
		text-align:center;
		padding-top:91px;
		padding-bottom: 128px;
	}
	.okvir{
		width: 319px;
		height: 670px;
		object-fit: contain;
		position: relative;
	}
	.homescreen{
		width: 278.1px;
		height: 494.9px;
		margin: 0 auto;
		border-radius: 1px;
 		border: solid 2px #000000;
	}
	.inner-row{
		position: absolute;
		top:303.5px;
		height: 503.9px;
		width: 100%
	}
	.blackbox{
		background-color: #000000;
	}
	.download-row{
		font-family: WorkSans;
		font-size: 44px;
		font-weight: 800;
		letter-spacing: -1px;
		text-align: center;
		color: #ffffff;
	}
	.icon-wrapper{
		padding-top: 242px;
		text-align: center;
	}
	.appstore{
		width: 172px;
		height: 60px;
		object-fit: contain;
	}
	.gplay{
		width: 172px;
		height: 60px;
		object-fit: contain;
		margin-top: 27px;
	}
	.inc{
		width: 100%;
		text-align: center;
		padding-top: 338px;
		padding-bottom: 63px;
		padding-left: 30px
	}
	.gotlaid-inc{
		font-family: WorkSans;
		font-size: 22px;
		font-weight: 800;
		letter-spacing: -0.5px;
		color: #ffffff;
	}
</style>
<div class="container-fluid" >
	<div class="row" style="text-align:center;padding-top:59px;">
	<span class="gotlaid-naslov">
		GOTLAID
	</span>
	</div><!--end of row-->
	<div class="row wrapper-phone" >
	<img src="phone.png" class="okvir">
	<div class="inner-row">




			<div class="carousel slide homescreen" id="screenshot-carousel">

  				<div class="carousel-inner" style="z-index:1;">
  					<div class="item active text-center">
  					<a href="#screenshot-carousel" data-slide-to="1">
  						<img src="flow-1.png" alt="Text of the image" >
  					</a>
  					</div>
  					<div class="item">
  					<a href="#screenshot-carousel" data-slide-to="2">
  						<img src="flow-2.png" alt="Text of the image">
  					</div>
  					<div class="item">
  					<a href="#screenshot-carousel" data-slide-to="0">
  						<img src="flow-3.png" alt="Text of the image">
  					</div>
   				</div><!-- End Carousel inner -->
  				
  				
  			
  			
			</div><!-- End Carousel -->


	</div>
	</div><!--end of row-->
</div><!--end of first fluid container-->
<div class="container-fluid blackbox">
	<div class="row" style="text-align:center;padding-top:133px;">
		<span class="download-row">
			DOWNLOAD IT
		</span>
	</div>
	<div class="icon-wrapper">
		<img src="appstore.png" class="appstore">
		<br />
		<img src="gplay.png" class="gplay">
	</div>
	<div class="row inc">
		<span class="gotlaid-inc">&copy;2016 gotlaid Inc.</span>
	</div>
</div><!--end of second fluid container-->
	<script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>