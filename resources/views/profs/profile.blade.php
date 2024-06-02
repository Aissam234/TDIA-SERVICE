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
		<link
			rel="stylesheet"
			type="text/css"
			href={{asset('vendors/bootstrap-5.3.3-dist/css/plugins/cropperjs/dist/cropper.css')}}
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
		<style>
        .photo-shadow {
            box-shadow: 0 4px 8px rgba(0, 0, 255, 0.2), 0 6px 20px rgba(0, 0, 255, 0.19);
        }
        .card-shadow {
            box-shadow: 0 4px 8px rgba(0, 0, 255, 0.2), 0 6px 20px rgba(0, 0, 255, 0.19);
        }
    </style>
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
					<div class="page-header">
						<div class="container mt-4 mb-4">
							<div class="card p-4 card-shadow">
								<div class="row">
									<div class="col-md-4 d-flex justify-content-center align-items-center">
										<div class="rounded-circle overflow-hidden photo-shadow" style="width: 150px; height: 150px;">
											<img class="w-100 h-auto" src="{{ $teacher->Image ? asset($teacher->Image) : asset('vendors/images/default.jpg') }}" alt="{{ $teacher->name }}" />
										</div>
									</div>
									<div class="col-md-8">
										<h1 class="mt-3 mb-2">{{ $teacher->name }} {{ $teacher->family_name }}</h1>
										<p class="mb-1">@tdia-service</p>
										<p class="mb-1"><strong>First name: </strong>{{ $teacher->name }}</p>
										<p class="mb-1"><strong>Last name: </strong>{{ $teacher->family_name }}</p>
										
										<div class="d-flex flex-row gap-2 align-items-center">
											<p class="mb-1"><strong>Filieres that you teach:</strong></p>
											@if($fillieres)
							@foreach($fillieres as $filiere)
								<p class="mb-1">{{ $filiere->name }} , </p>
							@endforeach
						@endif
                </div>
                <p><strong>Academic Email:</strong> {{ $teacher->email }}</p>
                <p class="mb-4">Officially as a prof in the National School of Applied Sciences</p>
                <div class="mt-4 text-muted">
                    Joined at: {{ $teacher->created_at }}
                </div>
            </div>
        </div>
    </div>
</div>
<div class="mt-4 text-muted mb-4 text-center">
	All notifications that you sent ...
</div>
<div class="container">
    @if ($notifications->isEmpty())
        <p class="text-center">No notifications found.</p>
    @else
        <div class="list-group">
            @foreach ($notifications as $notification)
                <div class="list-group-item">
                    <h5 class="mb-1">Sended by: <strong>{{ $notification->teacher->name }}</strong></h5>
                    <p class="mb-1"><strong>Object :</strong> {{ $notification->filliere }}</p>
                    <p class="mb-1"><strong>Content :</strong></p>
                    <p>{{ $notification->data }}</p>
                    @if ($notification->file)
                        <p><a href="{{ asset('storage/' . $notification->file) }}" class="btn" style="background-color: #031E23; border-color: #031E23;color:white;" >Download File</a></p>
                    @endif
                    <small class="text-muted">Posted at: {{ $notification->created_at }}</small>
                </div>
            @endforeach
        </div>
    @endif
</div>
				</div>
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
		<script src="{{ asset('vendors/bootstrap-5.3.3-dist/js/plugins/cropperjs/dist/cropper.js') }}"></script>
		<script>
			window.addEventListener("DOMContentLoaded", function () {
				var image = document.getElementById("image");
				var cropBoxData;
				var canvasData;
				var cropper;

				$("#modal")
					.on("shown.bs.modal", function () {
						cropper = new Cropper(image, {
							autoCropArea: 0.5,
							dragMode: "move",
							aspectRatio: 3 / 3,
							restore: false,
							guides: false,
							center: false,
							highlight: false,
							cropBoxMovable: false,
							cropBoxResizable: false,
							toggleDragModeOnDblclick: false,
							ready: function () {
								cropper.setCropBoxData(cropBoxData).setCanvasData(canvasData);
							},
						});
					})
					.on("hidden.bs.modal", function () {
						cropBoxData = cropper.getCropBoxData();
						canvasData = cropper.getCanvasData();
						cropper.destroy();
					});
			});
		</script>
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
