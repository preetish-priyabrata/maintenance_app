
<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?=base_url()?>file_assert/images/favicon.ico">

    <title>Admin Login </title>
  
	<!-- Bootstrap 4.0-->
	<link rel="stylesheet" href="<?=base_url()?>file_assert/assets/vendor_components/bootstrap/dist/css/bootstrap.min.css">
	
	<!-- Bootstrap extend-->
	<link rel="stylesheet" href="<?=base_url()?>file_assert/main/css/bootstrap-extend.css">
	
	<!-- Theme style -->
	<link rel="stylesheet" href="<?=base_url()?>file_assert/main/css/master_style.css">

	
	<link rel="stylesheet" href="<?=base_url()?>file_assert/main/css/skins/_all-skins.css">	
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.5/angular.min.js"></script>
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<?php 
	$date=date('H');
		
	if( ((date('H') >= 18) && (date('H') < 24)) or ((date('H') >= 0) && (date('H') < 5)) ){		
		$back_gr=base_url()."file_assert/img/back_ground.png";
	}else if( (date('H') >= 5) && (date('H') < 9) ){		
		$back_gr=base_url()."file_assert/img/background1.png";
	}else if( (date('H') >= 9) && (date('H') < 16) ){		
		$back_gr=base_url()."file_assert/img/background2.png";
	}else  if( (date('H') >= 16) && (date('H') < 18) ){		
		$back_gr=base_url()."file_assert/img/background3.png";
	}else{
		$back_gr=base_url()."file_assert/img/back_ground.png";
	}
?>
<body class="hold-transition dash-transparent bg-img" style="background-image: url(<?=$back_gr?>)" data-overlay="7">
	
	<div class="container h-p100">
		<div class="row align-items-center justify-content-center h-p100">	
			
			<div class="col-12">
				<div class="row no-gutters align-items-center justify-content-center">
					<div class="col-lg-4 col-md-5 col-12">
						<div class="content-top-agile p-10">
							<h2>Get started with Us</h2>
							<p class="text-white">Sign in to start your session</p>							
						</div>
						<div class="p-30 content-bottom rounded box-shadowed">
							<form action="http://hyper-admin-templates.multipurposethemes.com/main/index.html" method="post">
								<div class="form-group">
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text bg-transparent bt-0 bl-0 br-0 no-radius text-white"><i class="ti-user"></i></span>
										</div>
										<input type="text" class="form-control pl-15 bg-transparent bt-0 bl-0 br-0 text-white" placeholder="Username">
									</div>
								</div>
								<div class="form-group">
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text  bg-transparent bt-0 bl-0 br-0 text-white"><i class="ti-lock"></i></span>
										</div>
										<input type="password" class="form-control pl-15 bg-transparent bt-0 bl-0 br-0 text-white" placeholder="Password">
									</div>
								</div>
								  <div class="row">
									<!-- <div class="col-6">
									  <div class="checkbox text-white">
										<input type="checkbox" id="basic_checkbox_1" >
										<label for="basic_checkbox_1">Remember Me</label>
									  </div>
									</div> -->
									<!-- /.col -->
									<!-- <div class="col-6">
									 <div class="fog-pwd text-right">
										<a href="javascript:void(0)" class="text-white hover-info"><i class="ion ion-locked"></i> Forgot pwd?</a><br>
									  </div>
									</div> -->
									<!-- /.col -->
									<div class="col-12 text-center">
									  <button type="submit" class="btn btn-info btn-block margin-top-10">SIGN IN</button>
									</div>
									<!-- /.col -->
								  </div>
							</form>														

							<!-- <div class="text-center text-white">
							  <p class="mt-20">- Sign With -</p>
							  <p class="gap-items-2 mb-20">
								  <a class="btn btn-social-icon btn-outline btn-facebook" href="#"><i class="fa fa-facebook"></i></a>
								  <a class="btn btn-social-icon btn-outline btn-twitter" href="#"><i class="fa fa-twitter"></i></a>
								  <a class="btn btn-social-icon btn-outline btn-google" href="#"><i class="fa fa-google-plus"></i></a>
								  <a class="btn btn-social-icon btn-outline btn-instagram" href="#"><i class="fa fa-instagram"></i></a>
								</p>	
							</div>
							
							<div class="text-center">
								<p class="mt-15 mb-0 text-white">Don't have an account? <a href="auth_register.html" class="text-info ml-5">Sign Up</a></p>
							</div> -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- jQuery 3 -->
	<script src="<?=base_url()?>file_assert/assets/vendor_components/jquery-3.3.1/jquery-3.3.1.js"></script>
	
	<!-- popper -->
	<script src="<?=base_url()?>file_assert/assets/vendor_components/popper/dist/popper.min.js"></script>
	
	<!-- Bootstrap 4.0-->
	<script src="<?=base_url()?>file_assert/assets/vendor_components/bootstrap/dist/js/bootstrap.min.js"></script>

</body>


</html>
