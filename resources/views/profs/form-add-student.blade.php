<!DOCTYPE html>
<html>
	<head>
		<!-- Basic Page Info -->
		<meta charset="utf-8" />
		<title>TDIA-Service</title>

		<!-- Site favicon -->
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

		<x-navbar-component-profs />

		<x-right-side-bar-component />

		<x-left-side-bar-prof />


		<div class="mobile-menu-overlay"></div>

		<div class="main-container">
            <div class="pd-ltr-20 xs-pd-20-10">
                <div class="min-height-200px">
                    <style>
                        /* CSS personnalisé pour le titre */
                        .custom-title {
                            color: blue;
                        }
                        /* Ajout d'une opacité bleue autour du cadre du formulaire */
                        .card {
                            box-shadow: 0 0 20px rgba(0, 0, 255, 0.2); /* Opacité bleue */
                        }
                    </style>
                    <d<div class="main-container">
						<div class="pd-ltr-20 xs-pd-20-10">
							<div class="min-height-200px">
								<style>
									/* CSS personnalisé pour le titre */
									.custom-title {
										color: blue;
									}
									/* Ajout d'une opacité bleue autour du cadre du formulaire */
									.card {
										box-shadow: 0 0 20px rgba(0, 0, 255, 0.2); /* Opacité bleue */
									}
								</style>
								<div class="container">
									<div class="row justify-content-center">
										<div class="col-md-8">
											<div class="card">
												<div class="card-header text-center">
													<h4 class="text-primary">Add New Student</h4>
												</div>
												@if ($errors->any())
												<x-alert type="danger">
													<ul>
														@foreach ($errors->all() as $error)
														<li>{{ $error }}</li>
														@endforeach
													</ul>
												</x-alert>
												@endif
												<div class="card-body">
													<form method="POST" action="{{route('storeEtudiant')}}" enctype="multipart/form-data">
														@csrf
					
														<div class="form-group row">
															<label for="name" class="col-md-4 col-form-label text-md-right">Name</label>
															<div class="col-md-6">
																<input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{old('name')}}" placeholder="enter your name">
																@error('name')
																<div class="invalid-feedback">{{ $message }}</div>
																@enderror
															</div>
														</div>
					
														<div class="form-group row">
															<label for="family_name" class="col-md-4 col-form-label text-md-right">family name</label>
															<div class="col-md-6">
																<input id="family_name" type="text" class="form-control @error('family_name') is-invalid @enderror" name="family_name" value="{{old('prenom')}}" placeholder="Enter your family name">
																@error('family_name')
																<div class="invalid-feedback">{{ $message }}</div>
																@enderror
															</div>
														</div>
					
														<div class="form-group row">
															<label for="email" class="col-md-4 col-form-label text-md-right">Email</label>
															<div class="col-md-6">
																<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{old('email')}}" placeholder="Entrez l'email" >
																@error('email')
																<div class="invalid-feedback">{{ $message }}</div>
																@enderror
															</div>
														</div>
					
														<div class="form-group row">
															<label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
															<div class="col-md-6">
																<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Entrez le mot de passe">
																@error('password')
																<div class="invalid-feedback">{{ $message }}</div>
																@enderror
															</div>
														</div>
														<div class="form-group row">
															<label for="filiere" class="col-md-4 col-form-label text-md-right">Filiere</label>
															<div class="col-md-6">
																<input id="filiere" type="text" class="form-control @error('filiere') is-invalid @enderror" name="filiere" value="{{old('filiere')}}" placeholder="Enter filiere">
																@error('filiere')
																	<div class="invalid-feedback">{{ $message }}</div>
																@enderror
															</div>
														</div>
					
														<div class="form-group row">
															<label for="image" class="col-md-4 col-form-label text-md-right">Picture</label>
															<div class="col-md-6">
																<div class="input-group">
																	<div class="custom-file">
																		<input type="file" class="custom-file-input @error('image') is-invalid @enderror" id="image" name="image" required>
																		<label class="custom-file-label" for="image">Choose file </label>
																	</div>
																	@error('image')
																	<div class="invalid-feedback">{{ $message }}</div>
																	@enderror
																</div>
															</div>
														</div>

														
														<div class="form-group row mb-0">
															<div class="col-md-6 offset-md-4">
																<button type="submit" class="btn btn-primary btn-block">Add</button>
															</div>
														</div>
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
        
                    

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<!-- JS (optionnel) -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shCk+0yZnO+UVvE8O+Ib3V9yz5qTA0Q6juzwC" crossorigin="anonymous"></script>

				<div class="footer-wrap pd-20 mb-20 mt-20" style="font-style: italic;">
				TDIA-Service - Ensah website created by
				<a href="" target="_blank"><span class="Owners"></span></a>
			</div>
			</div>
		</div>
		
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
