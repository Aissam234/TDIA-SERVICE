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
					<div class="page-header" style="background-color: #031E23;margin-top:5%">
						<div class="row">
							<div class="col-md-12 col-sm-12">
                                    <h1 class="text-center"style="color: white;" >Notre Professeurs</h1>
                                </div>
								
							</div>
						</div>
					</div>
					




<style>
    .da-card-photo img {
        width: 100%;
        height: 350px; /* Définissez la hauteur souhaitée pour les images */
        object-fit: cover; /* Assurez-vous que l'image remplit l'intégralité de son conteneur tout en conservant son ratio d'aspect */
    }
</style>

<div class="row clearfix">
    <!-- Première ligne -->
    <div class="col-lg-4 col-md-6 col-sm-12 mb-30">
        <!-- Première carte -->
        <div class="da-card d-flex flex-column h-100">
            <div class="da-card-photo">
                <img src='{{ asset("vendors/images/anass.PNG") }}' class="img-fluid" alt="" />
                <div class="da-overlay">
                    <div class="da-social">
                        <ul class="clearfix">
                            <li>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-envelope-o"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="da-card-content flex-grow-1  ">
                <h5 class="h5 mb-10 text text-center">Anass El Haddadi</h5>
                <p class="mb-0">Professeur titulaire en Ingénierie des données et Formateur/Consultant international en Big Data</p>
				<h6 class="text text-center mt-3">Email : a.elhaddadi@uae.ac.ma </h6>
			</div>
        </div>
    </div>
    
    <div class="col-lg-4 col-md-6 col-sm-12 mb-30">
        <!-- Deuxième carte -->
        <div class="da-card d-flex flex-column h-100">
            <div class="da-card-photo">
                <img src='{{ asset("vendors/images/ragragui.PNG") }}' class="img-fluid" alt="" />
                <div class="da-overlay">
                    <div class="da-social">
                        <ul class="clearfix">
                            <li>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-envelope-o"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="da-card-content flex-grow-1  ">
                <h5 class="h5 mb-10 text text-center">Anouar Ragragui</h5>
                <p class="mb-0">Professeur de sciences informatiques Professeur (Assistant) à l'Université Abdelmalek Essaâdi</p>
				<h6 class="text text-center mt-3">Email : a.ragragui@uae.ac.ma </h6>
			</div>
        </div>
    </div>

    <div class="col-lg-4 col-md-6 col-sm-12 mb-30">
        <!-- Troisième carte -->
        <div class="da-card d-flex flex-column h-100">
            <div class="da-card-photo">
                <img src='{{ asset("vendors/images/Mohamed-Cherradi.PNG") }}' class="img-fluid" alt="" />
                <div class="da-overlay">
                    <div class="da-social">
                        <ul class="clearfix">
                            <li>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-envelope-o"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="da-card-content flex-grow-1  ">
                <h5 class="h5 mb-10 text text-center">Mohamed Cherradi</h5>
                <p class="mb-0">  Ingénieur d'État en informatique et Professeur d'Enseignement Supérieur Assistant  à l'Université Abdelmalek Essaâdi</p>
				<h6 class="text text-center mt-3">Email : m.cherradi@uae.ac.ma </h6>
			</div>
        </div>
    </div>
</div>

<div class="row clearfix">
    <!-- Deuxième ligne -->
    <div class="col-lg-4 col-md-6 col-sm-12 mb-30">
        <!-- Quatrième carte -->
        <div class="da-card d-flex flex-column h-100">
            <div class="da-card-photo">
                <img src='{{ asset("vendors/images/boudaa.jpg") }}' class="img-fluid" alt="" />
                <div class="da-overlay">
                    <div class="da-social">
                        <ul class="clearfix">
                            <li>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-envelope-o"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="da-card-content flex-grow-1  ">
                <h5 class="h5 mb-10 text text-center">Tarik Boudaa</h5>
                <p class="mb-0"> Professeur d'Enseignement Supérieur Assistant  à l'Université Abdelmalek Essaâdi et doctorant en machine learning</p>
				<h6 class="text text-center mt-3">Email : t.boudaa@uae.ac.ma </h6>
			</div>
        </div>
    </div>
    
    <div class="col-lg-4 col-md-6 col-sm-12 mb-30">
        <!-- Cinquième carte -->
        <div class="da-card d-flex flex-column h-100">
            <div class="da-card-photo">
                <img src='{{ asset("vendors/images/darif.PNG") }}' class="img-fluid" alt="" />
                <div class="da-overlay">
                    <div class="da-social">
                        <ul class="clearfix">
                            <li>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-envelope-o"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="da-card-content flex-grow-1  ">
                <h5 class="h5 mb-10 text text-center">Mohamed Darif</h5>
                <p class="mb-0"> Professeur Assistant à l'Université Abdelmalek Essaâdi est un expert en sciences informatiques, spécialisé dans l'entrepreneuriat et le management</p>
				<h6 class="text text-center mt-3">Email : m.darif@uae.ac.ma </h6>
			</div>
        </div>
    </div>
    
    <div class="col-lg-4 col-md-6 col-sm-12 mb-30">
        <!-- Sixième carte -->
        <div class="da-card d-flex flex-column h-100">
            <div class="da-card-photo">
                <img src='{{ asset("vendors/images/bouhafer.PNG") }}' class="img-fluid" alt="" />
                <div class="da-overlay">
                    <div class="da-social">
                        <ul class="clearfix">
                            <li>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-envelope-o"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="da-card-content flex-grow-1  ">
                <h5 class="h5 mb-10 text text-center">Fadwa Bouhafer</h5>
                <p class="mb-0">MCF et Consultante en business intelligence (Lecturer and Expert en BI) Université Abdelmalek Essaâdi</p>
				<h6 class="text text-center mt-3">Email : f.bouhafer@uae.ac.ma </h6>
			</div>
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
