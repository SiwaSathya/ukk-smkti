<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PERJALANAN DINAS</title>
	<style>
		.data{
			padding: 20px 20px 20px 20px;
			width: 100px;
		}
	</style>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<link href={{ asset("asset/assets/css/icons/icomoon/styles.css") }} rel="stylesheet" type="text/css">
	<link href={{ asset("asset/assets/css/bootstrap.css") }} rel="stylesheet" type="text/css">
	<link href={{ asset("asset/assets/css/core.css") }} rel="stylesheet" type="text/css">
	<link href={{ asset("asset/assets/css/components.css") }} rel="stylesheet" type="text/css">
	<link href={{ asset("asset/assets/css/colors.css") }} rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script type="text/javascript" src={{ asset("assets/js/plugins/loaders/pace.min.js") }}></script>
	<script type="text/javascript" src={{ asset("assets/js/core/libraries/jquery.min.js") }}></script>
	<script type="text/javascript" src={{ asset("assets/js/core/libraries/bootstrap.min.js") }}></script>
	<script type="text/javascript" src={{ asset("assets/js/plugins/loaders/blockui.min.js") }}></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script type="text/javascript" src={{ asset("assets/js/plugins/visualization/d3/d3.min.js") }}></script>
	<script type="text/javascript" src={{ asset("assets/js/plugins/visualization/d3/d3_tooltip.js" ) }}></script>
	<script type="text/javascript" src={{ asset("assets/js/plugins/forms/styling/switchery.min.js" ) }}></script>
	<script type="text/javascript" src={{ asset("assets/js/plugins/forms/styling/uniform.min.js" ) }}></script>
	<script type="text/javascript" src={{ asset("assets/js/plugins/forms/selects/bootstrap_multiselect.js" ) }}></script>
	<script type="text/javascript" src={{ asset("assets/js/plugins/ui/moment/moment.min.js" ) }}></script>
	<script type="text/javascript" src={{ asset("assets/js/plugins/pickers/daterangepicker.js" ) }}></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

	<script type="text/javascript" src={{ asset('assets/js/core/app.js' ) }}"></script>
	<script type="text/javascript" src={{ asset('assets/js/pages/dashboard.js' ) }}"></script>
	<!-- /theme JS files -->

</head>

<body style="border: 2px black solid;" >

@include("partial.navbar")


	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			
		@include("partial.leftsidebar")

			<!-- Main content -->
			<div class="content-wrapper">
			@yield('judul_halaman')
			@yield('content')

			       

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->

</body>
</html>
