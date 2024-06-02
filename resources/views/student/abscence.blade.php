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
		</div>
		<div class="mobile-menu-overlay"></div>

		<div class="main-container">
			<div class="pd-ltr-20 xs-pd-20-10">
				<div class="min-height-200px">
					<div class="page-header">
						<div class="row">
							<div class="col-md-6 col-sm-12">
								<div class="title">
									<h4>Gestion des Absences</h4>
								</div>
								<nav aria-label="breadcrumb" role="navigation">
									<ol class="breadcrumb">
										<li class="breadcrumb-item">
											<a href={{ route('index') }}>Accueil</a>
										</li>
										<li class="breadcrumb-item active" aria-current="page">
											Gestion des Absences
										</li>
									</ol>
								</nav>
							</div>
							<!-- <div class="col-md-6 col-sm-12 text-right">
								<div class="dropdown">
									<a class="btn btn-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
										Janvier 2018
									</a>
									<div class="dropdown-menu dropdown-menu-right">
										<a class="dropdown-item" href="#">Exporter la Liste</a>
										<a class="dropdown-item" href="#">Politiques</a>
										<a class="dropdown-item" href="#">Voir les Ressources</a>
									</div>
								</div>
							</div> -->
						</div>
					</div>
					
					<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
						<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
							<div class="container">
								<div class="row">
									<div class="col-md-12">
										<table class="table table-striped">
											<thead>
												<tr>
													<th>#</th>
													<th>Nom </th>
													<th>Prénom </th>
													<th>Séance 1</th>
													<th>Séance 2</th>
													<th>Séance 3</th>
													<th>Séance 4</th>
													<th>Séance 5</th>
													<th>Total Absences</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>1</td>
													<td>John</td>
													<td>Doe</td>
													<td>
														<input type="checkbox" id="seance1_etudiant1" name="seance1_etudiant1" disabled>
														<label for="seance1_etudiant1">Présent</label>
													</td>
													<td>
														<input type="checkbox" id="seance2_etudiant1" name="seance2_etudiant1" disabled>
														<label for="seance2_etudiant1">Présent</label>
													</td>
													<td>
														<input type="checkbox" id="seance3_etudiant1" name="seance3_etudiant1" disabled>
														<label for="seance3_etudiant1">Présent</label>
													</td>
													<td>
														<input type="checkbox" id="seance4_etudiant1" name="seance4_etudiant1" disabled>
														<label for="seance4_etudiant1">Présent</label>
													</td>
													<td>
														<input type="checkbox" id="seance5_etudiant1" name="seance5_etudiant1" disabled>
														<label for="seance5_etudiant1">Présent</label>
													</td>
													<td id="total_absences_etudiant1">0</td>
												</tr>
												<tr>
													<td>2</td>
													<td>Jane</td>
													<td>Smith</td>
													<td>
														<input type="checkbox" id="seance1_etudiant2" name="seance1_etudiant2" disabled>
														<label for="seance1_etudiant2">Présent</label>
													</td>
													<td>
														<input type="checkbox" id="seance2_etudiant2" name="seance2_etudiant2" disabled>
														<label for="seance2_etudiant2">Présent</label>
													</td>
													<td>
														<input type="checkbox" id="seance3_etudiant2" name="seance3_etudiant2" disabled>
														<label for="seance3_etudiant2">Présent</label>
													</td>
													<td>
														<input type="checkbox" id="seance4_etudiant2" name="seance4_etudiant2" disabled>
														<label for="seance4_etudiant2">Présent</label>
													</td>
													<td>
														<input type="checkbox" id="seance5_etudiant2" name="seance5_etudiant2" disabled>
														<label for="seance5_etudiant2">Présent</label>
													</td>
													<td id="total_absences_etudiant2">0</td>
												</tr>
												<!-- Ajoutez plus de lignes pour plus d'étudiants -->
											</tbody>
										</table>
										<button type="button" class="btn" style="background-color: #142127; color:#fff" onclick="calculateTotalAbsences()">Submit</button>
									</div>
								</div>
							</div>
						</div>
						
						<script>
							function calculateTotalAbsences() {
								// Récupérer toutes les lignes du tableau
								var rows = document.querySelectorAll("tbody tr");
						
								// Parcourir chaque ligne
								rows.forEach(function(row) {
									// Récupérer les cases de la colonne des absences pour cette ligne
									var absenceCells = row.querySelectorAll("td input[type='checkbox']:not(:checked)");
						
									// Calculer le nombre total d'absences
									var totalAbsences = absenceCells.length;
						
									// Mettre à jour la cellule "Total Absences" pour cette ligne
									row.querySelector("td:last-child").textContent = totalAbsences;
								});
							}
						</script>
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
