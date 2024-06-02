<!DOCTYPE html>
<html>
	<head>
		<!-- Basic Page Info -->
		<meta charset="utf-8" />
		<title>TDIA-Service</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

		<!-- Site favicon -->
		<link rel="icon" type="image/x-icon" href="{{ asset('vendors/images/Untitled design.png') }}"/>
		<link rel="stylesheet" href="{{ asset('vendors/bootstrap-5.3.3-dist/css/style.css') }}">

		<!-- Mobile Specific Metas -->
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1, maximum-scale=1"
		/>

		<!-- Google Font -->
		<link
			href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
			rel="stylesheet"
		/>
		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="{{ asset('vendors/bootstrap-5.3.3-dist/css/styles/core.css') }}" />
		<link
			rel="stylesheet"
			type="text/css"
			href="{{ asset('vendors/bootstrap-5.3.3-dist/css/styles/icon-font.min.css') }}"
		/>
		<link rel="stylesheet" type="text/css" href="{{ asset('vendors/bootstrap-5.3.3-dist/css/styles/style.css') }}"/>

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script
			async
			src="https://www.googletagmanager.com/gtag/js?id=G-GBZ3SGGX85"
		></script>
		<script
			async
			src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2973766580778258"
			crossorigin="anonymous"
		></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag() {
				dataLayer.push(arguments);
			}
			gtag("js", new Date());

			gtag("config", "G-GBZ3SGGX85");
		</script>
		<!-- Google Tag Manager -->
		<script>
			(function (w, d, s, l, i) {
				w[l] = w[l] || [];
				w[l].push({ "gtm.start": new Date().getTime(), event: "gtm.js" });
				var f = d.getElementsByTagName(s)[0],
					j = d.createElement(s),
					dl = l != "dataLayer" ? "&l=" + l : "";
				j.async = true;
				j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
				f.parentNode.insertBefore(j, f);
			})(window, document, "script", "dataLayer", "GTM-NXZMQSS");
		</script>
		<!-- End Google Tag Manager -->
	</head>
	<body>
		<div class="pre-loader">
			<div class="pre-loader-box">
				<div class="loader-logo">
					<img src="{{ asset('vendors/images/TDIA-logo.png') }}" alt="" />
				</div>
				<div class="loader-progress" id="progress_div">
					<div class="bar" id="bar1"></div>
				</div>
				<div class="percent" id="percent1">0%</div>
				<div class="loading-text">Loading...</div>
			</div>
		</div>

		<x-navbar-component />

		<x-right-side-bar-component />

		<x-left-side-bar-student />

		<div class="mobile-menu-overlay"></div>

		<div class="mobile-menu-overlay"></div>

		<div class="main-container">
			<div class="pd-ltr-20 xs-pd-20-10">
				<div class="min-height-200px">
					<div class="container pd-0">
						<div class="page-header">
							<div class="row">
								<div class="col-md-12 col-sm-12">
									<div class="title">
										<h4>Contact Directory</h4>
									</div>
									<nav aria-label="breadcrumb" role="navigation">
										<ol class="breadcrumb">
											<li class="breadcrumb-item">
												<a href={{ route('index') }}>Home</a>
											</li>
											<li class="breadcrumb-item active" aria-current="page">
												Contact Directory
											</li>
										</ol>
									</nav>
								</div>
							</div>
						</div>
						<div class="contact-directory-list">
							<ul class="row">
								<li class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
									<div class="contact-directory-box">
										<div class="contact-dire-info text-center">
											<div class="contact-avatar">
												<span>
													<img src="vendors/images/photo2.jpg" alt="" />
												</span>
											</div>
											<div class="contact-name">
												<h4>Wade Wilson</h4>
												<p>UI/UX designer</p>
												<div class="work text-success">
													<i class="ion-android-person"></i> Freelancer
												</div>
											</div>
											<div class="contact-skill">
												<span class="badge badge-pill">UI</span>
												<span class="badge badge-pill">UX</span>
												<span class="badge badge-pill">Photoshop</span>
												<span class="badge badge-pill badge-primary">+ 8</span>
											</div>
											<div class="profile-sort-desc">
												Lorem ipsum dolor sit amet, consectetur adipisicing
												magna aliqua.
											</div>
										</div>
										<div class="view-contact">
											<a href="#">View Profile</a>
										</div>
									</div>
								</li>
								<li class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
									<div class="contact-directory-box">
										<div class="contact-dire-info text-center">
											<div class="contact-avatar">
												<span>
													<img src="vendors/images/photo2.jpg" alt="" />
												</span>
											</div>
											<div class="contact-name">
												<h4>Wade Wilson</h4>
												<p>UI/UX designer</p>
												<div class="work text-success">
													<i class="ion-android-person"></i> Freelancer
												</div>
											</div>
											<div class="contact-skill">
												<span class="badge badge-pill">UI</span>
												<span class="badge badge-pill">UX</span>
												<span class="badge badge-pill">Photoshop</span>
												<span class="badge badge-pill badge-primary">+ 8</span>
											</div>
											<div class="profile-sort-desc">
												Lorem ipsum dolor sit amet, consectetur adipisicing
												magna aliqua.
											</div>
										</div>
										<div class="view-contact">
											<a href="#">View Profile</a>
										</div>
									</div>
								</li>
								<li class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
									<div class="contact-directory-box">
										<div class="contact-dire-info text-center">
											<div class="contact-avatar">
												<span>
													<img src="vendors/images/photo2.jpg" alt="" />
												</span>
											</div>
											<div class="contact-name">
												<h4>Wade Wilson</h4>
												<p>UI/UX designer</p>
												<div class="work text-success">
													<i class="ion-android-person"></i> Freelancer
												</div>
											</div>
											<div class="contact-skill">
												<span class="badge badge-pill">UI</span>
												<span class="badge badge-pill">UX</span>
												<span class="badge badge-pill">Photoshop</span>
												<span class="badge badge-pill badge-primary">+ 8</span>
											</div>
											<div class="profile-sort-desc">
												Lorem ipsum dolor sit amet, consectetur adipisicing
												magna aliqua.
											</div>
										</div>
										<div class="view-contact">
											<a href="#">View Profile</a>
										</div>
									</div>
								</li>
								<li class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
									<div class="contact-directory-box">
										<div class="contact-dire-info text-center">
											<div class="contact-avatar">
												<span>
													<img src="vendors/images/photo2.jpg" alt="" />
												</span>
											</div>
											<div class="contact-name">
												<h4>Wade Wilson</h4>
												<p>UI/UX designer</p>
												<div class="work text-success">
													<i class="ion-android-person"></i> Freelancer
												</div>
											</div>
											<div class="contact-skill">
												<span class="badge badge-pill">UI</span>
												<span class="badge badge-pill">UX</span>
												<span class="badge badge-pill">Photoshop</span>
												<span class="badge badge-pill badge-primary">+ 8</span>
											</div>
											<div class="profile-sort-desc">
												Lorem ipsum dolor sit amet, consectetur adipisicing
												magna aliqua.
											</div>
										</div>
										<div class="view-contact">
											<a href="#">View Profile</a>
										</div>
									</div>
								</li>
								<li class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
									<div class="contact-directory-box">
										<div class="contact-dire-info text-center">
											<div class="contact-avatar">
												<span>
													<img src="vendors/images/photo2.jpg" alt="" />
												</span>
											</div>
											<div class="contact-name">
												<h4>Wade Wilson</h4>
												<p>UI/UX designer</p>
												<div class="work text-success">
													<i class="ion-android-person"></i> Freelancer
												</div>
											</div>
											<div class="contact-skill">
												<span class="badge badge-pill">UI</span>
												<span class="badge badge-pill">UX</span>
												<span class="badge badge-pill">Photoshop</span>
												<span class="badge badge-pill badge-primary">+ 8</span>
											</div>
											<div class="profile-sort-desc">
												Lorem ipsum dolor sit amet, consectetur adipisicing
												magna aliqua.
											</div>
										</div>
										<div class="view-contact">
											<a href="#">View Profile</a>
										</div>
									</div>
								</li>
								<li class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
									<div class="contact-directory-box">
										<div class="contact-dire-info text-center">
											<div class="contact-avatar">
												<span>
													<img src="vendors/images/photo2.jpg" alt="" />
												</span>
											</div>
											<div class="contact-name">
												<h4>Wade Wilson</h4>
												<p>UI/UX designer</p>
												<div class="work text-success">
													<i class="ion-android-person"></i> Freelancer
												</div>
											</div>
											<div class="contact-skill">
												<span class="badge badge-pill">UI</span>
												<span class="badge badge-pill">UX</span>
												<span class="badge badge-pill">Photoshop</span>
												<span class="badge badge-pill badge-primary">+ 8</span>
											</div>
											<div class="profile-sort-desc">
												Lorem ipsum dolor sit amet, consectetur adipisicing
												magna aliqua.
											</div>
										</div>
										<div class="view-contact">
											<a href="#">View Profile</a>
										</div>
									</div>
								</li>
								<li class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
									<div class="contact-directory-box">
										<div class="contact-dire-info text-center">
											<div class="contact-avatar">
												<span>
													<img src="vendors/images/photo2.jpg" alt="" />
												</span>
											</div>
											<div class="contact-name">
												<h4>Wade Wilson</h4>
												<p>UI/UX designer</p>
												<div class="work text-success">
													<i class="ion-android-person"></i> Freelancer
												</div>
											</div>
											<div class="contact-skill">
												<span class="badge badge-pill">UI</span>
												<span class="badge badge-pill">UX</span>
												<span class="badge badge-pill">Photoshop</span>
												<span class="badge badge-pill badge-primary">+ 8</span>
											</div>
											<div class="profile-sort-desc">
												Lorem ipsum dolor sit amet, consectetur adipisicing
												magna aliqua.
											</div>
										</div>
										<div class="view-contact">
											<a href="#">View Profile</a>
										</div>
									</div>
								</li>
								<li class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
									<div class="contact-directory-box">
										<div class="contact-dire-info text-center">
											<div class="contact-avatar">
												<span>
													<img src="vendors/images/photo2.jpg" alt="" />
												</span>
											</div>
											<div class="contact-name">
												<h4>Wade Wilson</h4>
												<p>UI/UX designer</p>
												<div class="work text-success">
													<i class="ion-android-person"></i> Freelancer
												</div>
											</div>
											<div class="contact-skill">
												<span class="badge badge-pill">UI</span>
												<span class="badge badge-pill">UX</span>
												<span class="badge badge-pill">Photoshop</span>
												<span class="badge badge-pill badge-primary">+ 8</span>
											</div>
											<div class="profile-sort-desc">
												Lorem ipsum dolor sit amet, consectetur adipisicing
												magna aliqua.
											</div>
										</div>
										<div class="view-contact">
											<a href="#">View Profile</a>
										</div>
									</div>
								</li>
								<li class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
									<div class="contact-directory-box">
										<div class="contact-dire-info text-center">
											<div class="contact-avatar">
												<span>
													<img src="vendors/images/photo2.jpg" alt="" />
												</span>
											</div>
											<div class="contact-name">
												<h4>Wade Wilson</h4>
												<p>UI/UX designer</p>
												<div class="work text-success">
													<i class="ion-android-person"></i> Freelancer
												</div>
											</div>
											<div class="contact-skill">
												<span class="badge badge-pill">UI</span>
												<span class="badge badge-pill">UX</span>
												<span class="badge badge-pill">Photoshop</span>
												<span class="badge badge-pill badge-primary">+ 8</span>
											</div>
											<div class="profile-sort-desc">
												Lorem ipsum dolor sit amet, consectetur adipisicing
												magna aliqua.
											</div>
										</div>
										<div class="view-contact">
											<a href="#">View Profile</a>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="footer-wrap pd-20 mb-20 mt-20" style="font-style: italic;">
				TDIA-Service - Ensah website created by
				<a href="" target="_blank"><span class="Owners"></span></a>
			</div>
			</div>
		</div>
		
		<!-- welcome modal end -->
		<!-- js -->
		<script src="{{ asset('vendors/bootstrap-5.3.3-dist/js/scripts/core.js') }}"></script>
		<script src="{{ asset('vendors/bootstrap-5.3.3-dist/js/scripts/script.min.js') }}"></script>
		<script src="{{ asset('vendors/bootstrap-5.3.3-dist/js/scripts/process.js') }}"></script>
		<script src="{{ asset('vendors/bootstrap-5.3.3-dist/js/scripts/layout-settings.js') }}"></script>
		<script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
		<script>
			var typed = new Typed(".Owners",{
				strings:["Aissam","Massin","Malak"],
				typeSpeed: 150,
				backSpeed: 150,
				loop: true
			})
		</script>
		<!-- Google Tag Manager (noscript) -->
		<noscript
			><iframe
				src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS"
				height="0"
				width="0"
				style="display: none; visibility: hidden"
			></iframe
		></noscript>
		<!-- End Google Tag Manager (noscript) -->
	</body>
</html>
