<!-- Main sidebar -->
<div class="sidebar sidebar-main" style="height: 1500px" >
				<div class="sidebar-content" >
					<!-- User menu -->
					<div class="sidebar-user">
						<div class="category-content">
							<div class="media">
								<a href="#" class="media-left"><img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt=""></a>
								<div class="media-body">
									<span class="media-heading text-semibold"> {{ Auth::user()->name }}</span>
									<div class="text-size-mini text-muted">
										<i class="icon-pin text-size-small"></i> &nbsp;Santa Ana, CA
									</div>
								</div>

								<div class="media-right media-middle">
									<ul class="icons-list">
										<li>
											<a href="#"><i class="icon-cog3"></i></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- /user menu -->


					<!-- Main navigation -->
					<div class="sidebar-category sidebar-category-visible">
						<div class="category-content no-padding">
							<ul class="navigation navigation-main navigation-accordion">

								<!-- Main -->
								<li class="navigation-header"><span>Main</span> <i class="icon-menu" title="Main pages"></i></li>
								<li class=""><a href="dashboard"><i class="icon-home4"></i> <span>DASHBOARD</span></a></li>
								<li>
									<a href="pengajuan"> <i class="icon-stack2"></i> <span>PENGAJUAN</span></a>
									
								</li>
								<li>
									<a href="laporan"> <i class="icon-copy"></i> <span>LAPORAN</span></a>

								</li>
								<li>
									<a href="#"><i class="icon-droplet2"></i> <span>Color system</span></a>
								</li>

								<!-- /page kits -->

							</ul>
						</div>
					</div>
					<!-- /main navigation -->

				</div>
			</div>
			<!-- /main sidebar -->