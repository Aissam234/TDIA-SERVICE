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
        <style>
        .form-container {
            width: 100%;
            max-width: 600px;
            padding: 30px;
            background-color: white;
            box-shadow: 0 4px 8px rgba(255, 255, 255, 0.8);
            border-radius: 8px;
        }
        .form-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .form-group label {
            font-weight: bold;
        }
        .form-group input[type="text"] {
            margin-bottom: 10px;
        }
        .btn {
            width: 100%;
            padding: 10px;
            background-color: #031E23; 
            color:white;
        }
        #studentsContainer {
            margin-top: 20px;
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
		</div>
		<div class="mobile-menu-overlay"></div>

		<div class="main-container">
			<div class="pd-ltr-20 xs-pd-20-10">
				<div class="min-height-200px">
					<div class="page-header">
                        <div class="d-flex justify-content-center align-items-center min-vh-100">
						<div class="form-container">
                            <h1 class="text-center">Send Notes</h1>
                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif

                            <form action="{{ route('sendNotes') }}" method="POST">
                                @csrf
                                <label for="filliere">Choose a Filliere:</label>
                                <select name="filliere_id" id="filliere" class="form-control" onchange="getStudents(this.value)">
                                    <option value="">Select Filliere</option>
                                    @foreach($fillieres as $filliere)
                                        <option value="{{ $filliere->id }}">{{ $filliere->name }}</option>
                                    @endforeach
                                </select>

                                <label for="module" class="mt-2">Choose a Module:</label>
                                <select name="module_id" id="module" class="form-control">
                                    <option value="">Select Module</option>
                                    <!-- Options will be loaded dynamically -->
                                </select>

                                <div id="studentsContainer">
                                    <!-- Student inputs will be loaded dynamically -->
                                </div>

                                <button type="submit" class="btn">Send Notes</button>

                            </form>
                        </div>
						@if ($errors->any())
						<div class="alert alert-danger">
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
                    </div>
                </div>
                <script>
                    function getStudents(filliereId) {
                        if (!filliereId) {
                            document.getElementById('studentsContainer').innerHTML = '';
                            document.getElementById('module').innerHTML = '<option value="">Select Module</option>';
                            return;
                        }

                        fetch(`/teacher/students/${filliereId}`)
                            .then(response => response.json())
                            .then(data => {
                                const studentsContainer = document.getElementById('studentsContainer');
                                const moduleSelect = document.getElementById('module');

                                // Populate modules
                                moduleSelect.innerHTML = '<option value="">Select Module</option>';
                                data.modules.forEach(module => {
                                    const option = document.createElement('option');
                                    option.value = module.id;
                                    option.text = module.name;
                                    moduleSelect.appendChild(option);
                                });

                                // Populate students
                                studentsContainer.innerHTML = '';
                                data.users.forEach(user => {
                                    const div = document.createElement('div');
                                    div.classList.add('form-group');
                                    div.innerHTML = `
                                        <input type="hidden" name="user_ids[]" value="${user.id}">
                                        <label>${user.name} ${user.family_name} :</label>
                                        <input type="number" name="notes[]" class="form-control" placeholder="Inserer la note ..." min="0" max="20" step="0.01" required>
                                    `;
                                    studentsContainer.appendChild(div);
                                });
                            });
                    }
                </script>
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