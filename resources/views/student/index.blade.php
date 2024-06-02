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
		<link rel="stylesheet" href="{{ asset('vendors/bootstrap-5.3.3-dist/css/styles/icon-font.css') }}">
		<link rel="stylesheet" href="{{ asset('vendors/fonts/font-awesome/css/font-awesome.min.css') }}">
		
		

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
		<link
			rel="stylesheet"
			type="text/css"
			href="{{ asset('vendors/bootstrap-5.3.3-dist/js/plugins/datatables/css/dataTables.bootstrap4.min.css') }}"
		/>
		<link
			rel="stylesheet"
			type="text/css"
			href="src/plugins/datatables/css/responsive.bootstrap4.min.css"
			href="{{ asset('vendors/bootstrap-5.3.3-dist/js/plugins/datatables/css/responsive.bootstrap4.min.css') }}"
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
		<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
		<script type="text/javascript">
		google.charts.load("current", {packages:["corechart"]});
		google.charts.setOnLoadCallback(drawChart);
		function drawChart() {
			var data = google.visualization.arrayToDataTable([
			['Task', 'Hours per Day'],
			['Coding & Auto Learning',11],
			['School Learning',4],
			['Eating',2],
			['Sleep',6]
			]);

			var options = {
			title: 'Tdia Life Style',
			is3D: true,
			};

			var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
			chart.draw(data, options);
		}
		</script>
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
					<img src="{{ asset('vendors/images/TDIA-logo.png')}}" alt="" />
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

		<div class="main-container">
			<div class="xs-pd-20-10 pd-ltr-20">
				<div class="title pb-20">
					<h2 id="animated" class="h3 mb-0"><span class="auto-type"></span></h2>
				</div>

				<div class="row pb-10">
					<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
						<div class="card-box height-100-p widget-style3">
							<div class="d-flex flex-wrap">
								<div class="widget-data">
									<div class="weight-700 font-24 text-dark"><a href="{{ route('student.evaluation') }}">{{$evaluationsCount}}</a></div>
									<div class="font-14 text-secondary weight-500">
										Your sended Evaluations
									</div>
								</div>
								<div class="widget-icon">
									<div class="icon" data-color="#00eccf">
										<i class="fa fa-file-text" aria-hidden="true"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
						<div class="card-box height-100-p widget-style3">
							<div class="d-flex flex-wrap">
								<div class="widget-data">
									<div class="weight-700 font-24 text-dark"><a href="{{ route('annonce') }}">{{ $notificationCount }}</a></div>
									<div class="font-14 text-secondary weight-500">
										Notifications
									</div>
								</div>
								<div class="widget-icon">
									<div class="icon" data-color="#ff5b5b">
										<i class="fa fa-commenting" aria-hidden="true"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
						<div class="card-box height-100-p widget-style3">
							<div class="d-flex flex-wrap">
								<div class="widget-data">
									<div class="weight-700 font-24 text-dark"><a href="#">{{ $userCount }}</a></div>
									<div class="font-14 text-secondary weight-500">
										Total students
									</div>
								</div>
								<div class="widget-icon">
									<div class="icon">
										<i class="fa fa-user-circle" 
										aria-hidden="true">
									</i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
						<div class="card-box height-100-p widget-style3">
							<div class="d-flex flex-wrap">
								<div class="widget-data">
									<div class="weight-700 font-24 text-dark"><a href="{{ route('form') }}">{{ $filliere }}</a></div>
									<div class="font-14 text-secondary weight-500">Viewing grades</div>
								</div>
								<div class="widget-icon">
									<div class="icon" data-color="#09cc06">
										<i class="fa fa-address-card-o" aria-hidden="true"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="row pb-10">
					<div class="col-md-8 mb-4">
						<div class="card-box height-100-p pd-10">
							<div
								class="d-flex flex-wrap justify-content-between align-items-center pb-0 pb-md-0">
								<div id="piechart_3d" style="width: 950px; height: 400px; "></div>
							</div>
						</div>
					</div> 
					<div class="col-md-4 mb-20">
						<div
							class="card-box min-height-200px pd-20 mb-20"
							data-bgcolor="#455a64"
						>
							<div class="d-flex justify-content-between pb-20 text-white">
								<div class="icon h1 text-white">
									<i class="fa fa-calendar" aria-hidden="true"></i>
								</div>
								<div class="font-14 text-right">
									<h3 class="text-white">5/4/2024</h3>
									<div class="font-12">La date Aujourd’hui</div>
								</div>
							</div>
							<div class="d-flex justify-content-between align-items-end">
								<div class="text-white">
									<div class="font-14">Aller à la planification</div>
									<div class="font-24 weight-500">de l’année</div>
								</div>
								<div class="max-width-150">
									<div class="text-center mt-2 mr-4">
										<a href={{ route ('user.calendar') }} id="custom-btn" class="btn btn-light" target="_blank" style="color:rgb(69, 90, 100); font-size: 24px;">Voir</a>
									</div>
								</div>
							</div>
						</div>
						<div class="card-box min-height-200px pd-20" data-bgcolor="#265ed7">
							<div class="d-flex justify-content-between pb-20 text-white">
								<div class="icon h1 text-white">
									<i class="fa fa-building-o" aria-hidden="true"></i>
								</div>
								<div class="font-14 text-right">
									<h3 class="text-white">2008</h3>
									<div class="font-12">Date de création</div>
								</div>
							</div>
							<div class="d-flex justify-content-between align-items-end">
								<div class="text-white">
									<div class="font-14">Modele 3D</div>
									<div class="font-24 weight-500">de notre ecole</div>
								</div>
								<div class="max-width-150">
									<div class="text-center mt-2 mr-4">
										<a href={{ route ('student.video') }} id="custom-btn" class="btn btn-light" target="_blank" style="color:rgb(38, 94, 215); font-size: 24px;">Voir</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				

					<div id="box" class="title pb-20 pt-20">
					<h2 id="text" class="h3 mb-0">Des sites peuvent vous aider dans votre carrière :</h2>
				</div>

				<div class="row">
					<div id="custom-btn1" class="col-md-4 mb-20">
						<div class="card-box d-block mx-auto pd-20 text-secondary">
							<div class="img pb-30 position-relative">
								<img src="vendors/images/w3schools-logo-icon.webp" alt="" />
							</div>
							<div class="content">
								<h3 class="h4">3 Web School Services</h3>
								<p class="max-width-300">
									3webschool propose des solutions complètes d’apprentissage en ligne... <a class="text-primary" style="cursor: pointer;" onclick="toggleDetails(this)">More...</a>
								</p>
								<div class="detail" style="display: none;">
									<p>dans les domaines du développement web, de la programmation et de la conception numérique. En mettant l’accent sur l’apprentissage pratique et pratique, nos cours couvrent un large éventail de sujets, des bases HTML et CSS aux frameworks JavaScript avancés et aux outils de conception graphique. Que vous soyez un débutant cherchant à se lancer dans le développement web ou un codeur expérimenté cherchant à développer ses compétences, 3webschool propose des cours interactifs, des tutoriels et des projets pour vous aider à y parvenir.</p>
								</div>
								<div class="text-center mt-2">
									<a href="https://www.w3schools.com/" id="custom-btn" class="btn btn-sm custom-btn" target="_blank" style="background-color: #198754; border-color: #198754; color: #fff;">Go to</a>
								</div>
							</div>
						</div>
					</div>

					<div id="custom-btn1" class="col-md-4 mb-20">
						<div class="card-box d-block mx-auto pd-20 text-secondary">
							<div class="img pb-20">
								<img src="vendors/images/stackoverflow-1024.jpg" alt="" />
							</div>
							<div class="content">
								<h3 class="h4">Stack Overflow Services</h3>
								<p class="max-width-300">
									Des solutions de codage complètes, un partage des connaissances axé sur la... <a class="text-primary" style="cursor: pointer;" onclick="toggleDetails(this)">More...</a>
								</p>
								<div class="detail" style="display: none;">
									<p>communauté, des conseils d’experts, une plateforme de résolution de problèmes. Accès à un vaste référentiel de questions-réponses, d’offres d’emploi, d’outils de développement et de ressources d’apprentissage interactives pour les développeurs de tous niveaux</p>
								</div>
								<div class="text-center mt-2">
									<a href="https://stackoverflow.com/" id="custom-btn" class="btn btn-sm custom-btn" target="_blank" style="background-color: #FFA500; border-color: #FFA500; color: #fff;">Go to</a>
								</div>
							</div>
						</div>
					</div>
					<div id="custom-btn1" class="col-md-4 mb-20">
						<div class="card-box d-block mx-auto pd-20 text-secondary">
							<div class="img pb-20">
								<img src="vendors/images/3029836-slide-codecademy-01.png" alt="" />
							</div>
							<div class="content">
								<h3 class="h4">Code Cademy Services</h3>
								<p class="max-width-300">
									Des tutoriels de codage interactifs, des projets pratiques, des évaluations de... <a class="text-primary" style="cursor: pointer;" onclick="toggleDetails(this)">More...</a>
								</p>
								<div class="detail" style="display: none;">
									<p>compétences, des parcours d’apprentissage personnalisés et une communauté de codage dynamique. Accès à une vaste bibliothèque de cours, à l’aide en direct d’experts, à des ressources de carrière, à une aide au placement et à des opportunités de réseautage professionnel pour les développeurs en herbe.</p>
								</div>
								<div class="text-center mt-2">
									<a href="https://www.codecademy.com/" id="custom-btn" class="btn btn-sm btn-dark" target="_blank">Go to</a>
								</div>
							</div>
						</div>
					</div>
					
				</div>
			</div>
			<div class="footer-wrap pd-20 mb-20 mt-20" style="font-style: italic;">
				TDIA-Service - Ensah website created by
				<a href="" target="_blank"><span class="Owners"></span></a>
			</div>

		</div>
		
		<!-- welcome modal end -->
		<!-- js -->
		<script>
			function toggleDetails(link) {
				var detail = link.parentNode.nextElementSibling;
				if (detail.style.display === 'none' || detail.style.display === '') {
					detail.style.display = 'block';
					link.textContent = 'Less';
				} else {
					detail.style.display = 'none';
					link.textContent = 'More...';
				}
			}
		</script>
		<script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
		<script>
			var typed = new Typed(".auto-type",{
				strings:["Transformation Digitale","&","Intelligence Artificielle","TDIA"],
				typeSpeed: 150,
				backSpeed: 150,
				loop: true
			})
		</script>
		<script>
			var typed = new Typed(".Owners",{
				strings:["Aissam","Massin","Malak"],
				typeSpeed: 150,
				backSpeed: 150,
				loop: true
			})
		</script>
		<script src="{{ asset('vendors/bootstrap-5.3.3-dist/js/scripts/core.js') }}"></script>
		<script src="{{ asset('vendors/bootstrap-5.3.3-dist/js/scripts/script.min.js') }}"></script>
		<script src="{{ asset('vendors/bootstrap-5.3.3-dist/js/scripts/process.js') }}"></script>
		<script src="{{ asset('vendors/bootstrap-5.3.3-dist/js/scripts/layout-settings.js') }}"></script>
		<script src="{{ asset('vendors/bootstrap-5.3.3-dist/js/plugins/datatables/js/jquery.dataTables.min.js') }}"></script>
		<script src="{{ asset('vendors/bootstrap-5.3.3-dist/js/plugins/datatables/js/jquery.dataTables.min.js') }}"></script>
		<script src="{{ asset('vendors/bootstrap-5.3.3-dist/js/plugins/datatables/js/dataTables.bootstrap4.min.js') }}"></script>
		<script src="{{ asset('vendors/bootstrap-5.3.3-dist/js/plugins/datatables/js/dataTables.responsive.min.js') }}"></script>
		<script src="{{ asset('vendors/bootstrap-5.3.3-dist/js/plugins/datatables/js/responsive.bootstrap4.min.js') }}"></script>
		<script src="{{ asset('vendors/bootstrap-5.3.3-dist/js/scripts/dashboard3.js') }}"></script>
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
