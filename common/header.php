	<!-- top-search-box -->
	<div id="searchcontainer" class="hidden">
		<div id="search" class="search_block">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<form id="cse-search-box" action="/keywordsearch" method="get">
							<div class="search_logo display-flex">
								<input type="hidden" name="cx" value="ea09f3fc43677ad37">
								<input type="hidden" name="cof" value="FORID:10">
								<input type="hidden" name="ie" value="UTF-8">
								<input name="search" class="search-bar" placeholder="এখানে খুঁজুন..." title="Search" type="search">
								<button onclick="performSearch()"><i id="searchButton" class="fa fa-search"></i></button>
								<a onclick="hideSearchBox()" class="close-search" id="closeButton" href="#"><i class="fa fa-times"></i></a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<header class="news-header">
		<!-- top-header -->
		<div class="container">
			<div class="row">
				<div class="col-md-4 m-auto">
					<p class="d-lg-flex ">
						<span>
							রোববার ০৩ সেপ্টেম্বর ২০২৩ || ভাদ্র ১৯ ১৪৩০
						</span>
					</p>
				</div>
				<div class="col-md-4 col-sm-12  ">
					<div class="topImg">
					<a class=" d-lg-flex d-none  justify-content-center align-items-center" title="AajOKal.com" href="#">
						<img class="img-fluid" src="media/common/logo.png" title="AajOKal.com" alt="AajOKal.com">
					</a>
					</div>
				</div>
				<div class="col-md-4 m-auto">
					<div class="d-lg-flex d-none justify-content-end social-media-icons">
						<a href="#" aria-label="Facebook" target="_blank">
							<div class="social-icon facebook"><i class="fa-brands fa-facebook-f"></i></div>
						</a>
						<a href="#" aria-label="Youtube" target="_blank">
							<div class="social-icon youtube"><i class="fa-brands fa-youtube"></i></div>
						</a>
						<a href="#" aria-label="Twitter" target="_blank">
							<div class="social-icon twitter"><i class="fa-brands fa-twitter"></i></div>
						</a>
						<a href="#" aria-label="Instagram" target="_blank">
							<div class="social-icon instagram"><i class="fa-brands fa-instagram"></i></div>
						</a>
						<a href="#" aria-label="Linkedin" target="_blank">
							<div class="social-icon linkedin"><i class="fa-brands fa-linkedin-in"></i></div>
						</a>
						<a href="#">
							<div class="social-icon" onclick="showSearchBox()" style="background: #F34A38"><i class="fas fa-search" style="cursor:pointer"></i>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
		<!-- main navbar -->
		<div class="DHeaderNav stickyNav " id="sticky-navbar">
			<div class="container">
				<div class="row ">
					<div class="col-md-12">
						<nav class="navbar navbar-default navbar-expand-lg navbar-inverse ">
							<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
								<ul class="nav navbar-nav">
									<li class="nav-item"><a class="menuImg d-lg-flex justify-content-center align-items-center" title="AajOKal.com" href="#">
											<img class="img-fluid "  src="media/common/logo.png" title="AajOKal.com" alt="AajOKal.com">
										</a></li>
									<li class="nav-item"><a class="nav-link" href="#">বাংলাদেশ</a></li>
									<li class="nav-item"><a class="nav-link" href="#">রাজনীতি</a></li>
									<li class="nav-item"><a class="nav-link" href="#">আন্তর্জাতিক</a></li>
									<li class="nav-item"><a class="nav-link" href="#">খেলা</a></li>
									<li class="nav-item"><a class="nav-link" href="#">বিনোদন</a></li>
									<li class="nav-item"><a class="nav-link" href="#">ধর্ম</a></li>
									<li class="nav-item"><a class="nav-link" href="#">স্বাস্থ্য</a></li>
									<li class="nav-item"><a class="nav-link" href="#">শিক্ষা</a></li>
									<li class="nav-item"><a class="nav-link" href="#">লাইফস্টাইল</a></li>
									<li class="nav-item"><a class="nav-link" href="#">প্রবাস</a></li>
									<li class="nav-item"><a class="nav-link" href="#">চাকুরি</a></li>
									<li class="nav-item"><a class="nav-link" href="#">বাণিজ্য</a></li>
								</ul>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</div>
	
	</header>
	<header class="news-header2 ">
		<div class="DHeaderNav  stickyNav" id="sticky-navbar">
			<div class="row">
				<div class="col-3">
					<nav class="navbar navbar-default navbar-expand-lg ">
						<div class="d-flex justify-content-between  navbar-dark" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
							<span class="navbar-icon"><i class="fas fa-bars"></i></span>

						</div>
						<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
							<div class="offcanvas-header">
								<button type="button" class="btn-close justify-content-end " data-bs-dismiss="offcanvas" aria-label="Close"></button>
							</div>
							<div class="m-auto">
								<a class="d-flex justify-content-start m-auto pb-2" href="#"> <span class="d-flex align-items-center Dnews-date">
										০৩ সেপ্টেম্বর ২০২৩ || রোববার
									</span></a>
								<div class="d-flex justify-content-start m-auto pb-4 social-media-icons">
									<a href="#" aria-label="Facebook" target="_blank">
										<div class="social-icon facebook"><i class="fa-brands fa-facebook-f"></i></div>
									</a>
									<a href="#" aria-label="Youtube" target="_blank">
										<div class="social-icon youtube"><i class="fa-brands fa-youtube"></i></div>
									</a>
									<a href="#" aria-label="Twitter" target="_blank">
										<div class="social-icon twitter"><i class="fa-brands fa-twitter"></i></div>
									</a>
									<a href="#" aria-label="Instagram" target="_blank">
										<div class="social-icon instagram"><i class="fa-brands fa-instagram"></i></div>
									</a>
									<a href="#" aria-label="Linkedin" target="_blank">
										<div class="social-icon linkedin"><i class="fa-brands fa-linkedin-in"></i></div>
									</a>
								</div>
							</div>
							<div class="offcanvas-body">
								<div id="navbarTogglerDemo01">
									<div class="row">
										<div class="col-12">
											<ul class="nav navbar-nav">
												<li class="nav-item"><a class="nav-link" href="#">বাংলাদেশ</a></li>
												<li class="nav-item"><a class="nav-link" href="#">রাজনীতি</a></li>
												<li class="nav-item"><a class="nav-link" href="#">আন্তর্জাতিক</a></li>
												<li class="nav-item"><a class="nav-link" href="#">খেলা</a></li>
												<li class="nav-item"><a class="nav-link" href="#">বিনোদন</a></li>
												<li class="nav-item"><a class="nav-link" href="#">ধর্ম</a></li>
												<li class="nav-item"><a class="nav-link" href="#">স্বাস্থ্য</a></li>
												<li class="nav-item"><a class="nav-link" href="#">শিক্ষা</a></li>
												<li class="nav-item"><a class="nav-link" href="#">লাইফস্টাইল</a></li>
												<li class="nav-item"><a class="nav-link" href="#">প্রবাস</a></li>
												<li class="nav-item"><a class="nav-link" href="#">চাকুরি</a></li>
												<li class="nav-item"><a class="nav-link" href="#">বাণিজ্য</a></li>
											</ul>
										</div>
									</div>

								</div>
							</div>
						</div>
					</nav>
				</div>
				<div class="col-6">
					<div class="mobile-logo">
						<a href="#" title="AajOKal.com">
							<img class="img-fluid" src="media/common/logo.png" alt="AajOKal.com">
						</a>
					</div>
				</div>
				<div class=" col-3">
					<a href="#" class="searchIcon ">
						<div onclick="showSearchBox()"><i href="#" class="fas fa-search"></i>
						</div>
					</a>
				</div>
			</div>
		</div>
	</header>