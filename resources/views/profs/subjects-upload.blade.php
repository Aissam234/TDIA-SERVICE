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

		<link rel="stylesheet" href="{{ asset('vendors/styles/subject-student.css') }}">
		
		

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

		<x-navbar-component-profs />

		<x-right-side-bar-component />

		<x-left-side-bar-prof />

		<div class="mobile-menu-overlay">
           
        </div>

		
		<div class=" cntTable">
			<div class="clearfix mb-20">
				<div class="">
					{{-- <h4 class="text-blue titlev">{{$key}}</h4> --}}
					<br>
					@if(session('success'))
					<div class="alert alert-success">
						{{ session('success') }}
					</div>
					@endif
				</div>

			</div>
			<table class="table table-bordered subjTable">
				<thead>
					<tr>
						<th scope="col">Filiere</th>
						<th scope="col" style="width:50%;">Le nom du module</th>
						<th scope="col">Envoyer le cours</th>
						<th scope="col">Tag</th>
					</tr>
				</thead>
				<tbody>
					@foreach($modules as $filiere => $values)
					@foreach($values as $val => $data)							
						<tr>
							<td>{{ $filiere }}</td>
							<td>{{$val}}</td>
							<td>
								@if(!empty($data))
								
									<a href="{{ route('file.download.teacher', $data) }}" class="btn btn-warning">Télécharger</a> 
								@else
								<div class="card-body">
									<form action="{{ route('file.upload') }}" method="POST" enctype="multipart/form-data">
										@csrf
										<input hidden ="text" name="moduleName" value="{{$val}}">
										<div class="form-group">
											<input type="file" class="form-control-file" name="file" required>
										</div>
										<button type="submit" class="btn btn-primary">Upload File</button>
									</form>
								</div>
								@endif
							</td>
							<td>
								@if(!empty($data))
								<div class="card-body">
									<form action="{{ route('file.delete', $data) }}" method="POST">
										@csrf
										@method('DELETE')
										<button type="submit" class="btn btn-danger">Delete File</button>
									</form>
								</div>
								@else
									<span class="badge badge-secondary"> Indisponible</span>
								@endif
							</td>
						</tr>
					@endforeach
					@endforeach
				</tbody>
			</table>

			
		</div>
		

		<div class="main-container">

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
