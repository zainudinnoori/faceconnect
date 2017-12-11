<!DOCTYPE html>
<html>

<!-- Mirrored from themesanytime.com/startui/demo/profile-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 26 Mar 2016 06:51:10 GMT -->
<head lang="ru">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Template</title>
	{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> --}}

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	
	<script src="js/plugins.js"></script>
	<script src="js/lib/ion-range-slider/ion.rangeSlider.js"></script>
	<script src="https://use.fontawesome.com/fcf4bb6c21.js"></script>

	<link rel="stylesheet" href="css/lib/ion-range-slider/ion.rangeSlider.css">
	<link rel="stylesheet" href="css/lib/ion-range-slider/ion.rangeSlider.skinHTML5.css">
	<script src="js/app.js"></script>
	
    <link rel="stylesheet" href="css/main.css">

</head>
<body>

	<header class="site-header">
	    <div class="container-fluid">
	        <a href="#" class="site-logo">
	            <img class="hidden-md-down" src="images/logo-2.png" alt="">
	            <img class="hidden-lg-up" src="images/logo-2-mob.png" alt="">
	        </a>
	        <button class="hamburger hamburger--htla">
	            <span>toggle menu</span>
	        </button>
	        <div class="site-header-content">
	            <div class="site-header-content-in">

	            </div><!--site-header-content-in-->
	        </div><!--.site-header-content-->
	    </div><!--.container-fluid-->
	</header><!--.site-header-->

	<div class="page-content">
		<div class="profile-header-photo">
			<div class="profile-header-photo-in">
				<div class="tbl-cell">
					<div class="info-block">
						<div class="container-fluid">
							<div class="row">
								<div class="col-xl-9 col-xl-offset-3 col-lg-8 col-lg-offset-4 col-md-offset-0">
									<div class="tbl info-tbl">
										<div class="tbl-row">
											<div class="tbl-cell">
												<p class="title">Dan Counsell</p>
												<p>Company Founder</p>
											</div>
											<div class="tbl-cell tbl-cell-stat">
												<div class="inline-block">
													<p class="title">23К</p>
													<p>Followers</p>
												</div>
											</div>
											<div class="tbl-cell tbl-cell-stat">
												<div class="inline-block">
													<p class="title">938</p>
													<p>Photos</p>
												</div>
											</div>
											<div class="tbl-cell tbl-cell-stat">
												<div class="inline-block">
													<p class="title">18</p>
													<p>Videos</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<button type="button" class="change-cover">
				<i class="icon-picture"></i>
				Change cover
				<input type="file"/>
			</button>
		</div><!--.profile-header-photo-->

		<div class="container-fluid">
			<div class="row">
				<div class="col-xl-3 col-lg-4">
					<aside class="profile-side">
						<section class="box-typical profile-side-user">
							<button type="button" class="avatar-preview avatar-preview-128">
								<img src="images/avatar-1-256.png" alt=""/>
								<span class="update">
									<i class="icon-picture"></i>
									Update photo
								</span>
								<input type="file"/>
							</button>
							<button type="button" class="btn btn-rounded">Send a Message</button>
							<div class="btn-group">
								<button type="button"
								        class="btn btn-rounded btn-primary-outline dropdown-toggle"
								        data-toggle="dropdown"
								        aria-haspopup="true"
								        aria-expanded="false">
									Follow
								</button>
								<div class="dropdown-menu">
									<a class="dropdown-item" href="#"><span class="font-icon font-icon-home"></span>Quant and Verbal</a>
									<a class="dropdown-item" href="#"><span class="font-icon font-icon-cart"></span>Real Gmat Test</a>
									<a class="dropdown-item" href="#"><span class="font-icon font-icon-speed"></span>Prep Official App</a>
									<a class="dropdown-item" href="#"><span class="font-icon font-icon-users"></span>CATprer Test</a>
									<a class="dropdown-item" href="#"><span class="font-icon font-icon-comments"></span>Third Party Test</a>
								</div>
							</div>
							<div class="bottom-txt">Standing: 154</div>
						</section>
					
						<section class="box-typical profile-side-stat">
							<div class="tbl">
								<div class="tbl-row">
									<div class="tbl-cell">
										<span class="number">9854</span>
										followers
									</div>
									<div class="tbl-cell">
										<span class="number">112</span>
										following
									</div>
								</div>
							</div>
						</section>

						<section class="box-typical">
							<header class="box-typical-header-sm bordered">About</header>
							<div class="box-typical-inner">
								<p>Maecenas sed diam eget risus varius blandit sit amet non magna. Vestibulum id ligula porta felis euismod semper.</p>
							</div>
						</section>

						<section class="box-typical">
							<header class="box-typical-header-sm bordered">Recommendation</header>
							<div class="box-typical-inner">
								<p>All stream</p>
								<p>Connected Apps</p>
								<p>Photos</p>
								<p>Most recent</p>
							</div>
						</section>

						<section class="box-typical">
							<header class="box-typical-header-sm bordered">Info</header>
							<div class="box-typical-inner">
								<p class="line-with-icon">
									<i class="icon-pushpin"></i>
									New York
								</p>
								<p class="line-with-icon">
									<i class="font-icon font-icon-users-two"></i>
									Group1, Group2
								</p>
								<p class="line-with-icon">
									<i class="font-icon font-icon-case-3"></i>
									Symfony, PHP, JavaScript, Java, Android, SQL, OOP, OOD
								</p>
								<p class="line-with-icon">
									<i class="font-icon font-icon-learn"></i>
									VSU, Compiter Science, Master
								</p>
								<p class="line-with-icon">
									<i class="font-icon font-icon-github"></i>
									<a href="#">Nickname</a>
								</p>
								<p class="line-with-icon">
									<i class="fa fa-globe"></i>
									<a href="#">example.com</a>
								</p>
								<p class="line-with-icon">
									<i class="font-icon font-icon-calend"></i>
									Registered 8 month ago
								</p>
							</div>
						</section>

					</aside><!--.profile-side-->
				</div>

				<div class="col-xl-9 col-lg-8">
					<section class="tabs-section">
						<div class="tabs-section-nav tabs-section-nav-left">
							<ul class="nav" role="tablist">
								<li class="nav-item">
									<a class="nav-link active" href="#tabs-2-tab-1" role="tab" data-toggle="tab">
										<span class="nav-link-in">About me</span>
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#tabs-2-tab-2" role="tab" data-toggle="tab">
										<span class="nav-link-in">Activity</span>
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#tabs-2-tab-3" role="tab" data-toggle="tab">
										<span class="nav-link-in">Projects</span>
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#tabs-2-tab-4" role="tab" data-toggle="tab">
										<span class="nav-link-in">Settings</span>
									</a>
								</li>
							</ul>
						</div><!--.tabs-section-nav-->

						<div class="tab-content no-styled profile-tabs">
							<div role="tabpanel" class="tab-pane active" id="tabs-2-tab-1">
								<form class="box-typical">
									<input type="text" class="write-something" placeholder="What`s on your mind"/>
									<div class="box-typical-footer">
										<div class="tbl">
											<div class="tbl-row">
												<div class="tbl-cell">
													<button type="button" class="btn-icon">
														<i class="fa fa-globe"></i>
													</button>
													<button type="button" class="btn-icon">
														<i class="font-icon fa fa-picture-o"></i>
													</button>
													<button type="button" class="btn-icon">
														<i class="fa fa-calendar"></i>
													</button>
												</div>
												<div class="tbl-cell tbl-cell-action">
													<button type="submit" class="btn btn-rounded">Send</button>
												</div>
											</div>
										</div>
									</div>
								</form><!--.box-typical-->

								<article class="box-typical profile-post">
									<div class="profile-post-header">
										<div class="user-card-row">
											<div class="tbl-row">
												<div class="tbl-cell tbl-cell-photo">
													<a href="#">
														<img src="images/photo-64-2.jpg" alt="">
													</a>
												</div>
												<div class="tbl-cell">
													<div class="user-card-row-name"><a href="#">Tim Collins</a></div>
													<div class="color-blue-grey-lighter">3 days ago - 23 min read</div>
												</div>
											</div>
										</div>
										<a href="#" class="shared">
											<i class="fa fa-share-alt"></i>
										</a>
									</div>
									<div class="profile-post-content">
										<p class="profile-post-content-note">Subminted a new post</p>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									</div>
									<div class="box-typical-footer profile-post-meta">
										<a href="#" class="meta-item">
											<i class="fa fa-heart"></i>
											45 Like
										</a>
										<a href="#" class="meta-item">
											<i class="fa fa-comment"></i>
											18 Comment
										</a>
									</div>
									<div class="comment-rows-container hover-action scrollable-block">
										<div class="comment-row-item">
											<div class="avatar-preview avatar-preview-32">
												<a href="#">
													<img src="images/photo-64-2.jpg" alt="">
												</a>
											</div>
											<div class="tbl comment-row-item-header">
												<div class="tbl-row">
													<div class="tbl-cell tbl-cell-name">Eric Fox</div>
													<div class="tbl-cell tbl-cell-date">04.07.15, 20:02 PM</div>
												</div>
											</div>
											<div class="comment-row-item-content">
												<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
												<button type="button" class="comment-row-item-action edit">
													<i class="fa fa-pencil"></i>
												</button>
												<button type="button" class="comment-row-item-action del">
													<i class="fa fa-trash-o"></i>
												</button>
											</div>
										</div><!--.comment-row-item-->

										<div class="comment-row-item">
											<div class="avatar-preview avatar-preview-32">
												<a href="#">
													<img src="images/avatar-2-64.png" alt="">
												</a>
											</div>
											<div class="tbl comment-row-item-header">
												<div class="tbl-row">
													<div class="tbl-cell tbl-cell-name">Vasilisa</div>
													<div class="tbl-cell tbl-cell-date">04.07.15, 20:02 PM</div>
												</div>
											</div>
											<div class="comment-row-item-content">
												<p>Yes!</p>
												<button type="button" class="comment-row-item-action edit">
													<i class="fa fa-pencil"></i>
												</button>
												<button type="button" class="comment-row-item-action del">
													<i class="fa fa-trash-o"></i>
												</button>
											</div>
										</div><!--.comment-row-item-->

										<div class="comment-row-item">
											<div class="avatar-preview avatar-preview-32">
												<a href="#">
													<img src="images/avatar-2-64.png" alt="">
												</a>
											</div>
											<div class="tbl comment-row-item-header">
												<div class="tbl-row">
													<div class="tbl-cell tbl-cell-name">Vasilisa</div>
													<div class="tbl-cell tbl-cell-date">04.07.15, 20:02 PM</div>
												</div>
											</div>
											<div class="comment-row-item-content">
												<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy...</p>
												<button type="button" class="comment-row-item-action edit">
													<i class="fa fa-pencil"></i>
												</button>
												<button type="button" class="comment-row-item-action del">
													<i class="fa fa-trash-o"></i>
												</button>
												<div class="comment-row-item quote">
													<div class="avatar-preview avatar-preview-32">
														<a href="#">
															<img src="images/photo-64-2.jpg" alt="">
														</a>
													</div>
													<div class="tbl comment-row-item-header">
														<div class="tbl-row">
															<div class="tbl-cell tbl-cell-name">Adam Oliver</div>
															<div class="tbl-cell tbl-cell-date">04.07.15, 20:02 PM</div>
														</div>
													</div>
													<div class="comment-row-item-content">
														<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet...</p>
													</div>
												</div><!--.comment-row-item-->
											</div>
										</div><!--.comment-row-item-->
									</div><!--.comment-rows-container-->
									<input type="text" class="write-something" placeholder="Leave a comment"/>
									<div class="box-typical-footer">
										<div class="tbl">
											<div class="tbl-row">
												<div class="tbl-cell">
													<button type="button" class="btn-icon">
														<i class="font-icon font-icon-earth"></i>
													</button>
													<button type="button" class="btn-icon">
														<i class="font-icon font-icon-picture"></i>
													</button>
													<button type="button" class="btn-icon">
														<i class="font-icon font-icon-calend"></i>
													</button>
													<button type="button" class="btn-icon">
														<i class="font-icon font-icon-video-fill"></i>
													</button>
												</div>
												<div class="tbl-cell tbl-cell-action">
													<button type="submit" class="btn btn-rounded">Send</button>
												</div>
											</div>
										</div>
									</div>
								</article>

								<article class="box-typical profile-post">
									<div class="profile-post-header">
										<div class="user-card-row">
											<div class="tbl-row">
												<div class="tbl-cell tbl-cell-photo">
													<a href="#">
														<img src="images/photo-64-2.jpg" alt="">
													</a>
												</div>
												<div class="tbl-cell">
													<div class="user-card-row-name"><a href="#">Tim Collins</a></div>
													<div class="color-blue-grey-lighter">3 days ago - 23 min read</div>
												</div>
											</div>
										</div>
										<a href="#" class="shared">
											<i class="font-icon font-icon-share"></i>
										</a>
									</div>
									<div class="profile-post-content">
										<p class="profile-post-content-note">Added 4 new pictures</p>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
										<div class="profile-post-gall-fluid profile-post-gall-grid" data-columns>
											<div class="col">
												<a class="fancybox" rel="gall-1" href="images/gall-img-1.jpg">
													<img src="img/gall-img-1.jpg" alt="">
												</a>
											</div>
											<div class="col">
												<a class="fancybox" rel="gall-1" href="images/gall-img-2.jpg">
													<img src="img/gall-img-2.jpg" alt="">
												</a>
											</div>
											<div class="col">
												<a class="fancybox" rel="gall-1" href="images/gall-img-3.jpg">
													<img src="img/gall-img-3.jpg" alt="">
												</a>
											</div>
											<div class="col">
												<a class="fancybox" rel="gall-1" href="images/gall-img-4.jpg">
													<img src="img/gall-img-4.jpg" alt="">
												</a>
											</div>
											<div class="col">
												<a class="fancybox" rel="gall-1" href="images/gall-img-5.jpg">
													<img src="img/gall-img-5.jpg" alt="">
												</a>
											</div>
											<div class="col">
												<a class="fancybox" rel="gall-1" href="images/gall-img-6.jpg">
													<img src="images/gall-img-6.jpg" alt="">
												</a>
											</div>
										</div>
									</div>
									<div class="box-typical-footer profile-post-meta">
										<a href="#" class="meta-item">
											<i class="font-icon font-icon-heart"></i>
											45 Like
										</a>
										<a href="#" class="meta-item">
											<i class="font-icon font-icon-comment"></i>
											18 Comment
										</a>
									</div>
								</article>	
										<div class="form-group row">
											<div class="col-xl-2">
												<label class="form-label">
													<a href="#">Add new skill</a>
												</label>
											</div>
											<div class="col-xl-4">
												<div class="input-group">
													<input type="text" class="form-control" value="Logo design">
													<span class="input-group-btn">
														<button class="btn btn-grey" type="button">Add</button>
													</span>
												</div>
											</div>
										</div>
										<script>
											$(document).ready(function(){
												$("#range-slider-1").ionRangeSlider({
													min: 0,
													max: 100,
													from: 30,
													hide_min_max: true,
													hide_from_to: true
												});

												$("#range-slider-2").ionRangeSlider({
													min: 0,
													max: 100,
													from: 30,
													hide_min_max: true,
													hide_from_to: true
												});

												$("#range-slider-3").ionRangeSlider({
													min: 0,
													max: 100,
													from: 30,
													hide_min_max: true,
													hide_from_to: true
												});

												$("#range-slider-4").ionRangeSlider({
													min: 0,
													max: 100,
													from: 30,
													hide_min_max: true,
													hide_from_to: true
												});

											});
										</script>
									</section>
									<section class="box-typical-section profile-settings-btns">
										<button type="submit" class="btn btn-rounded">Save Changes</button>
										<button type="button" class="btn btn-rounded btn-grey">Cancel</button>
									</section>
								</section>
							</div><!--.tab-pane-->
						</div><!--.tab-content-->
					</section><!--.tabs-section-->
				</div>
			</div><!--.row-->
		</div><!--.container-fluid-->
	</div><!--.page-content-->

	<!--Progress bar-->
	<!--<div class="circle-progress-bar pieProgress" role="progressbar" data-goal="100" data-barcolor="#ac6bec" data-barsize="10" aria-valuemin="0" aria-valuemax="100">-->
	    <!--<span class="pie_progress__number">0%</span>-->
	<!--</div>-->

	<script src="js/lib/salvattore/salvattore.min.js"></script>

</body>

<!-- Mirrored from themesanytime.com/startui/demo/profile-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 26 Mar 2016 06:51:31 GMT -->
</html>