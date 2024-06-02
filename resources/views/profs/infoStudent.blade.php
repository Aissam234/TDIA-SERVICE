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

		<div class="mobile-menu-overlay"></div>

		<div class="main-container">
			<div class="pd-ltr-20 xs-pd-20-10">
				<div class="min-height-200px">
					<div class="container pd-0">
						<div class="page-header">
							<div class="row">
								<div class="col-md-12 col-sm-12">
									<div class="title">
										<h4>Liste of Students</h4>
									</div>
									<nav aria-label="breadcrumb" role="navigation">
										<ol class="breadcrumb">
											<li class="breadcrumb-item">
												<a href="{{route('profs.index')}}">Home</a>
											</li>
											
										</ol>
									</nav>
								</div>
							</div>
						</div>
						
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<!-- JS (optionnel) -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shCk+0yZnO+UVvE8O+Ib3V9yz5qTA0Q6juzwC" crossorigin="anonymous"></script>
@include('includes.flashbag')
<div class="container mt-5">
    <div class="d-flex mb-3">
        <div>
            <a href="{{ route('createEtudiant') }}" class="btn btn-success mr-2">
                <i class="bi bi-plus"></i> <!-- Ajout de l'icône -->
                Add Student
            </a>
        </div>
        <div>
            <a href="{{ route('import') }}" class="btn btn-secondary ml-2">
                <i class="bi bi-upload"></i> <!-- Ajout de l'icône -->
                Import Students
            </a>
        </div>
    </div>
</div>
	
    <!-- Affichage des messages d'erreur -->
    @if ($errors->any())
        <x-alert type="danger">
			<ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
		</x-alert>
            
    @endif

    <div class="row row-cols-1 row-cols-md-3">
        <!-- Utilisation de row-cols-md-3 pour afficher 3 cartes par ligne sur les écrans de taille moyenne et supérieure -->
        @foreach ($users as $user)
        <div class="col mb-4">
            <!-- Ajout de la classe "mb-4" pour un espacement entre les cartes -->
            <div class="card h-100"> <!-- Utilisation de h-100 pour s'assurer que toutes les cartes ont la même hauteur -->
                <div class="card-img-wrapper">
                    <img src="{{ asset('storage/' . $user->image) }}" class="card-img-top img-fluid" alt="Image de l'étudiant">
                    <!-- Ajout de la classe "img-fluid" pour une image responsive -->
                </div>
                <div class="card-body">
                    <h5 class="card-title">name : {{ $user->name }} </h5>
                    <h5 class="card-title">family name : {{ $user->family_name }}</h5>
                    <p class="card-text"><strong>Email:</strong> {{ $user->email }}</p>
                    <p class="card-text"><strong>Filière:</strong> {{ $user->filliere ? $user->filliere->name : 'N/A' }}</p> <!-- Vérifier si la filière existe -->

                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex justify-content-between align-items-center">
                            <form method="post" action="{{ route('destroyStudent', $user->id) }}">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger mr-1">
                                    Delete
                                    <i class="bi bi-trash"></i> <!-- Ajout de l'icône de suppression -->
                                </button>
                            </form>
                            <a href="{{ route('editStudent', ['id' => $user->id]) }}" class="btn btn-primary ml-1">
                                update
                                <i class="bi bi-pencil"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Pagination -->
    <div class="mt-5 d-flex justify-content-end"> <!-- Aligner la pagination à droite -->
        {{ $users->links('pagination::bootstrap-4') }} <!-- Utiliser Bootstrap 4 pour la pagination -->
    </div>
</div>

<!-- CSS personnalisé -->
<style>
.card-img-wrapper {
    height: 400px; /* Ajuster cette valeur pour changer la hauteur des images */
    overflow: hidden;
}

.card-img-wrapper img {
    height: 100%;
    width: 100%;
    object-fit: cover; /* Assure que l'image couvre entièrement l'espace sans déformer l'image */
}

.card.h-100 {
    height: 100%; /* Assure que toutes les cartes ont la même hauteur */
}
</style>

<!-- Inclure Bootstrap CSS dans le fichier de layout principal -->
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
