
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>REGISTER DULU MAZZEHH</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href={{ asset("asset/assets/css/icons/icomoon/styles.css" ) }} rel="stylesheet" type="text/css">
	<link href={{ asset("asset/assets/css/bootstrap.css" ) }} rel="stylesheet" type="text/css">
	<link href={{ asset("asset/assets/css/core.css" ) }} rel="stylesheet" type="text/css">
	<link href={{ asset("asset/assets/css/components.css" ) }} rel="stylesheet" type="text/css">
	<link href={{ asset("asset/assets/css/colors.css" ) }} rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script type="text/javascript" src={{ asset("asset/assets/js/plugins/loaders/pace.min.js" ) }}></script>
	<script type="text/javascript" src={{ asset("asset/assets/js/core/libraries/jquery.min.js" ) }}></script>
	<script type="text/javascript" src={{ asset("asset/assets/js/core/libraries/bootstrap.min.js" ) }}></script>
	<script type="text/javascript" src={{ asset("asset/assets/js/plugins/loaders/blockui.min.js" ) }}></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script type="text/javascript" src={{ asset("asset/assets/js/plugins/forms/styling/uniform.min.js" ) }}></script>

	<script type="text/javascript" src={{ asset("asset/assets/js/core/app.js" ) }}></script>
	<script type="text/javascript" src={{ asset("asset/assets/js/pages/login.js" ) }}></script>
	<!-- /theme JS files -->

</head>

<body class="login-container">

	<!-- Main navbar -->
	<div class="navbar navbar-inverse">
		<div class="navbar-header">
			<a class="navbar-brand" href="dashboard"><img src={{ asset("assets/images/logo_light.png" ) }} alt=""></a>

			<ul class="nav navbar-nav pull-right visible-xs-block">
				<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
			</ul>
		</div>

		<div class="navbar-collapse collapse" id="navbar-mobile">
			<ul class="nav navbar-nav navbar-right">
				<li>
					<a href="#">
						<i class="icon-display4"></i> <span class="visible-xs-inline-block position-right"> Go to website</span>
					</a>
				</li>

				<li>
					<a href="#">
						<i class="icon-user-tie"></i> <span class="visible-xs-inline-block position-right"> Contact admin</span>
					</a>
				</li>

				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-cog3"></i>
						<span class="visible-xs-inline-block position-right"> Options</span>
					</a>
				</li>
			</ul>
		</div>
	</div>
	<!-- /main navbar -->


	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Content area -->
				<div class="content">

					<!-- Advanced login -->

					@if(count($errors) > 0)
				<div class="alert alert-danger">
					@foreach ($errors->all() as $error)
					{{ $error }} <br/>
					@endforeach
				</div>
				@endif
                  
                    <form method="POST" action="profile/update">
                        @csrf
						<div class="panel panel-body login-form">
							<div class="text-center">
								<div class="icon-object border-slate-300 text-slate-300"><i class="icon-reading"></i></div>
								<h5 class="content-group">SILAHKAN MASUKAN PROFILE<small class="display-block">Your credentials</small></h5>
							</div>

							<div class="form-group has-feedback has-feedback-left">
								<input type="text" name="nama" value="{{$profile->nama}}" class="form-control" placeholder="Masukan Nama">
								<div class="form-control-feedback"> 
									<i class="icon-user text-muted"></i>
								</div>
                                
							</div>

							<div class="form-group has-feedback has-feedback-left">
								<input type="text" name="tempat_lahir" value="{{$profile->tempat_lahir}}"  class="form-control" placeholder="Masukan Tempat Lahir">
								<div class="form-control-feedback">
									<i class="icon-lock2 text-muted"></i>
								</div>
                                
							</div>

                            <div class="form-group has-feedback has-feedback-left">
								<input type="date" name="tanggal_lahir" value="{{$profile->tanggal_lahir}}" class="form-control" placeholder="Masukan Tanggal Lahir">
								<div class="form-control-feedback">
									<i class="icon-lock2 text-muted"></i>
								</div>
                               
							</div>

                            <div class="form-group has-feedback has-feedback-left">
								<input type="text" name="no_hp" value="{{$profile->no_hp}}" class="form-control" placeholder="Masukan Nomor Hp">
								<div class="form-control-feedback">
									<i class="icon-lock2 text-muted"></i>
								</div>
                                
							</div>

                            <div class="form-group has-feedback has-feedback-left">
								<input type="alamat" name="alamat" value="{{$profile->alamat}}" class="form-control" placeholder="Masukan Alamat">
								<div class="form-control-feedback">
									<i class="icon-lock2 text-muted"></i>
								</div>
                                
							</div>

                            <div class="form-group has-feedback has-feedback-left">
								<input type="instansi" name="instansi" value="{{$profile->instansi}}" class="form-control" placeholder="Masukan Instansi">
								<div class="form-control-feedback">
									<i class="icon-lock2 text-muted"></i>
								</div>
                                
							</div>

							<div class="form-group">
                           
								<button type="submit"  value="UPDATE" class="btn bg-blue btn-block">UPDATE <i class="icon-arrow-right14 position-right"></i></button>
							</div>
						</div>
					</form>
					<!-- /advanced login -->


					<!-- Footer -->
			
					<!-- /footer -->

				</div>
				<!-- /content area -->

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->

</body>
</html>
