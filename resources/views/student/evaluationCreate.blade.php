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
					<div class="page-header" style="background-color: #031E23;">
						<h1 class="text-center"style="color: white;" >Your opinion will be respected</h1>
					</div>
					<div class="page-header" >

                            <div class="container">
								@if(session('success'))
									<div class="alert alert-success">{{ session('success') }}</div>
								@endif

								<form method="POST" action="{{ route('evaluations.store') }}">
    @csrf
	<div class="mb-3">
		<div class="form-group">
			<label for="teacher">Teacher</label>
			<select class="form-control" id="teacher" name="teacher_id">
				@foreach($teachers as $teacher)
					<option value="{{ $teacher->id }}">{{ $teacher->name }} {{ $teacher->family_name }}</option>
				@endforeach
			</select>
			@error('teacher_name')
            <div class="text-danger">{{ $message }}</div>
       		@enderror
		</div>
    </div>

    <div class="mb-3">
        <label for="evaluation" class="form-label">Your Evaluation:</label>
        <textarea class="form-control" id="evaluation" name="evaluation" placeholder="required ..." required>{{ old('evaluation') }}</textarea>
        @error('evaluation')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="rating" class="form-label">Rating Method of education (out of 10):</label>
        <input type="number" class="form-control" id="rating" name="rating" min="0" max="10" placeholder="required ..." required value="{{ old('rating') }} ">
        @error('rating')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="difficulties" class="form-label">Difficulties (optional):</label>
        <textarea class="form-control" id="difficulties" name="difficulties">{{ old('difficulties') }}</textarea>
        @error('difficulties')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="problems" class="form-label">Problems (optional):</label>
        <textarea class="form-control" id="problems" name="problems">{{ old('problems') }}</textarea>
        @error('problems')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary" style="background-color: #031E23; border-color: #031E23;color:white;">Submit</button>
</form>

								@if ($evaluations->isEmpty())
									<p class="mt-3">You have no evaluations.</p>
								@else
									<form method="POST" action="{{ route('evaluations.hide') }}">
										@csrf
										@foreach ($evaluations as $evaluation)
											<div class="mb-3 mt-3">
												<input type="checkbox" id="hide_evaluation_{{ $evaluation->id }}" name="hide_evaluations[]" value="{{ $evaluation->id }}">
												<label for="hide_evaluation_{{ $evaluation->id }}">{{ $evaluation->evaluation }}</label>
											</div>
										@endforeach
										<button type="submit" class="btn btn-danger">Delete</button>
									</form>
								@endif
							</div>
						</div>
					</div>
				</div>
			{{-- </div>
		</div> --}}
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
