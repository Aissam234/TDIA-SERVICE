

<!DOCTYPE html>
<html>
	<head>
		<!-- Basic Page Info -->
		<meta charset="utf-8" />
		<title>TDIA-Service</title>

		<!-- Site favicon -->
		<link rel="icon" type="image/x-icon" href="{{ asset('vendors/images/Untitled design.png') }}"/>
		
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
		<link rel="stylesheet" type="text/css" href="{{ asset('vendors/styles/core.css') }}" />
		<link
			rel="stylesheet"
			type="text/css"
			href=" {{ asset('vendors/styles/icon-font.min.css') }}"
		/>
		<link rel="stylesheet" type="text/css" href="{{ asset('vendors/styles/style.css') }}" />



		<!-- toggles Css && js scripts -->
		<link rel="stylesheet" type="text/css" href="{{ asset('vendors/styles/toggles.css') }}" />
		<link rel="stylesheet" type="text/js" href="{{ asset('vendors/scripts/toggles.js') }}" />
		<!--  -->
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

		<script>
			function togglePasswordVisibility(icon) {
				var passwordField = document.querySelector(icon.getAttribute('toggle'));
				if (passwordField.type === 'password') {
					passwordField.type = 'text';
					icon.classList.remove('fa-eye-slash');
					icon.classList.add('fa-eye');
				} else {
					passwordField.type = 'password';
					icon.classList.remove('fa-eye');
					icon.classList.add('fa-eye-slash');
				}
			}
		</script>
		<script>
			function updateEmailDomain() {
			var domain = '';
			var emailDomain = document.getElementById('emailDomain');
			var studentRadio = document.getElementById('student');
			if (studentRadio.checked) {
				domain = '@etu.uae.ac.ma';
				emailDomain.innerHTML = '@etu.uae.ac.ma';
			} else {
				domain = '@uae.ac.ma';
				emailDomain.innerHTML = '@uae.ac.ma';
			}
			document.getElementById('email-domain-input').value = domain;
		}
		document.addEventListener("DOMContentLoaded", function() {
		var roleButtons = document.querySelectorAll('.select-role .btn');

		roleButtons.forEach(function(button) {
			button.addEventListener('click', function() {
				roleButtons.forEach(function(btn) {
					btn.classList.remove('active');
				});
				this.classList.add('active');
			});
		});
		});
		</script>

	</head>
	<body class="login-page">
		<div class="login-header box-shadow">
			<div
				class="container-fluid d-flex justify-content-between align-items-center"
			>
				<div class="brand-logo">
					<a href="login.html">
						<img src="{{ asset('vendors/images/TDIA-logo.png') }}" alt="" class="dark-logo" />


					</a>
				</div>
			</div>
		</div>
		<div
			class="login-wrap d-flex align-items-center flex-wrap justify-content-center"
		>
			<div class="container">
				<div class="row align-items-center">
					<div class="col-md-6 col-lg-7">
						{{-- here --}}
						<img src="{{ asset('vendors/images/login-page-img.png') }}" alt="" />
					</div>
					<div class="col-md-6 col-lg-5">
						<div class="login-box bg-white box-shadow border-radius-10">
							<div class="login-title">
								<h2 class="text-center text-primary">TDIA-Service</h2>
							</div>
							<form method="POST" action="{{ route('login.post') }}">
								@csrf							
								<div class="select-role">
									<div class="btn-group btn-group-toggle" data-toggle="buttons ">
										
									
										<label class="btn active" id="card-element">
											<input type="radio" name="options" id="student" onchange="updateEmailDomain()" checked />
											<div class="icon">
												<img
													src="{{ asset('vendors/images/briefcase.svg') }}"
													class="svg"
													alt=""
												/>
											</div>
											<span>I'm</span>Student
										</label>

									
										<label class="btn">
											<input type="radio" name="options" id="teacher" onchange="updateEmailDomain()" />
											<div class="icon">
												<img
													src="{{ asset('vendors/images/person.svg') }}"
													class="svg"
													alt=""
												/>
											</div>
											
											<span>I'm</span>Teacher
										</label>
									</div>
								</div>

								<div class="form-group">
									<div class="input-group">
										<input type="text" class="form-control" name="firstPartEmail" id="firstPart" placeholder="First Part of Email" required>

										<div class="input-group-append">
											<span id="emailDomain" name="emailDomain" class="input-group-text">@etu.uae.ac.ma</span>
										</div>
									</div>
								</div>
								<input type="hidden" name="email_domain" id="email-domain-input" value="@etu.uae.ac.ma">
								<div class="input-group custom">
									<input
										id = "password-field"
										type="password"
										name="password"
										class="form-control form-control-lg"
										placeholder="**********"
									/>
						
									<div class="input-group-append custom">
									</div>
								</div>

								<div class="row pb-30">
									<div class="col-6">
										<div class="custom-control custom-checkbox">
											<input
												type="checkbox"
												class="custom-control-input"
												id="customCheck1"
											/>
											<label class="custom-control-label" for="customCheck1"
												>Remember</label
											>
										</div>
									</div>
		
								</div>
								@csrf
								@error('email')
								<div class="alert alert-danger">{{ $message }}</div>
								@enderror
								{{-- Errors --}}
								@if ($errors->has('error'))
								<div class="alert alert-danger">{{ $errors->first('error') }}</div>
								@endif
								<div class="row">
									<div class="col-sm-12">
										<div class="input-group mb-0">

											<button class="custom-btn btn-5 btn-lg"><span>Login</span></button>
											<br>

										</div>

									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
