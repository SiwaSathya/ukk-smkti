<!-- Main navbar -->
<div class="navbar navbar-inverse">
		<div class="navbar-header">
			<a class="navbar-brand" href="index.html"><img src="assets/images/logo_light.png" alt=""></a>

			<ul class="nav navbar-nav visible-xs-block">
				<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
				<li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
			</ul>
		</div>

		<div class="navbar-collapse collapse" id="navbar-mobile">
			<ul class="nav navbar-nav">
				<li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a></li>

			</ul>

			

			<ul class="nav navbar-nav navbar-right">
				
				 <li class="dropdown dropdown-user">
						<a class="dropdown-toggle" data-toggle="dropdown">
							<img src="assets/images/placeholder.jpg" alt="">
							<span> {{ Auth::user()->name }}</span>
							<i class="caret"></i>
						</a>

						<ul class="dropdown-menu dropdown-menu-right">
							<li><a href="profile"><i class="icon-user-plus"></i> My profile</a></li>
							<li class="divider"></li>
							<li><a href=""><i class="icon-cog5"></i> Account settings</a></li>
							<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                              @csrf
							 <li><button type="hidden" class="submit"><i class="icon-switch2"></i> Logout</a></button></li>
							</form>
						</ul>
					</li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
	<!-- /main navbar -->