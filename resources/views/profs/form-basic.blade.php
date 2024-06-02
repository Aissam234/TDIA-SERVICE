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

					<!-- horizontal Basic Forms Start -->
					<div class="pd-20 card-box mb-30">
						<div class="clearfix">
							<div class="pull-left">
								<h4 class="text-blue h4">horizontal Basic Forms</h4>
								<p class="mb-30">All bootstrap element classies</p>
							</div>
							<!-- <div class="pull-right">
								<a
									href="#horizontal-basic-form1"
									class="btn btn-primary btn-sm scroll-click"
									rel="content-y"
									data-toggle="collapse"
									role="button"
									><i class="fa fa-code"></i> Source Code</a
								>
							</div> -->
						</div>
						<form>
							<div class="form-group">
								<label>Text</label>
								<input
									class="form-control"
									type="text"
									placeholder="Johnny Brown"
								/>
							</div>
							<div class="form-group">
								<label>Email</label>
								<input
									class="form-control"
									value="bootstrap@example.com"
									type="email"
								/>
							</div>
							<div class="form-group">
								<label>URL</label>
								<input
									class="form-control"
									value="https://getbootstrap.com"
									type="url"
								/>
							</div>
							<div class="form-group">
								<label>Telephone</label>
								<input
									class="form-control"
									value="1-(111)-111-1111"
									type="tel"
								/>
							</div>
							<div class="form-group">
								<label>Password</label>
								<input class="form-control" value="password" type="password" />
							</div>
							<div class="form-group">
								<label>Readonly input</label>
								<input
									class="form-control"
									type="text"
									placeholder="Readonly input here…"
									readonly
								/>
							</div>
							<div class="form-group">
								<label>Disabled input</label>
								<input
									type="text"
									class="form-control"
									placeholder="Disabled input"
									disabled=""
								/>
							</div>
							<div class="form-group">
								<div class="row">
									<div class="col-md-6 col-sm-12">
										<label class="weight-600">Custom Checkbox</label>
										<div class="custom-control custom-checkbox mb-5">
											<input
												type="checkbox"
												class="custom-control-input"
												id="customCheck1"
											/>
											<label class="custom-control-label" for="customCheck1"
												>Check this custom checkbox</label
											>
										</div>
										<div class="custom-control custom-checkbox mb-5">
											<input
												type="checkbox"
												class="custom-control-input"
												id="customCheck2"
											/>
											<label class="custom-control-label" for="customCheck2"
												>Check this custom checkbox</label
											>
										</div>
										<div class="custom-control custom-checkbox mb-5">
											<input
												type="checkbox"
												class="custom-control-input"
												id="customCheck3"
											/>
											<label class="custom-control-label" for="customCheck3"
												>Check this custom checkbox</label
											>
										</div>
										<div class="custom-control custom-checkbox mb-5">
											<input
												type="checkbox"
												class="custom-control-input"
												id="customCheck4"
											/>
											<label class="custom-control-label" for="customCheck4"
												>Check this custom checkbox</label
											>
										</div>
									</div>
									<div class="col-md-6 col-sm-12">
										<label class="weight-600">Custom Radio</label>
										<div class="custom-control custom-radio mb-5">
											<input
												type="radio"
												id="customRadio1"
												name="customRadio"
												class="custom-control-input"
											/>
											<label class="custom-control-label" for="customRadio1"
												>Toggle this custom radio</label
											>
										</div>
										<div class="custom-control custom-radio mb-5">
											<input
												type="radio"
												id="customRadio2"
												name="customRadio"
												class="custom-control-input"
											/>
											<label class="custom-control-label" for="customRadio2"
												>Or toggle this other custom radio</label
											>
										</div>
										<div class="custom-control custom-radio mb-5">
											<input
												type="radio"
												id="customRadio3"
												name="customRadio"
												class="custom-control-input"
											/>
											<label class="custom-control-label" for="customRadio3"
												>Or toggle this other custom radio</label
											>
										</div>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label>Disabled select menu</label>
								<select class="form-control" disabled="">
									<option>Disabled select</option>
								</select>
							</div>
							<div class="form-group">
								<label>input plaintext</label>
								<input
									type="text"
									readonly
									class="form-control-plaintext"
									value="email@example.com"
								/>
							</div>
							<div class="form-group">
								<label>Textarea</label>
								<textarea class="form-control"></textarea>
							</div>
							<div class="form-group">
								<label>Help text</label>
								<input type="text" class="form-control" />
								<small class="form-text text-muted">
									Your password must be 8-20 characters long, contain letters
									and numbers, and must not contain spaces, special characters,
									or emoji.
								</small>
							</div>
							<div class="form-group">
								<label>Example file input</label>
								<input
									type="file"
									class="form-control-file form-control height-auto"
								/>
							</div>
							<div class="form-group">
								<label>Custom file input</label>
								<div class="custom-file">
									<input type="file" class="custom-file-input" />
									<label class="custom-file-label">Choose file</label>
								</div>
							</div>
						</form>
						<div class="collapse collapse-box" id="horizontal-basic-form1">
							<div class="code-box">
								<div class="clearfix">
									<a
										href="javascript:;"
										class="btn btn-primary btn-sm code-copy pull-left"
										data-clipboard-target="#horizontal-basic"
										><i class="fa fa-clipboard"></i> Copy Code</a
									>
									<a
										href="#horizontal-basic-form1"
										class="btn btn-primary btn-sm pull-right"
										rel="content-y"
										data-toggle="collapse"
										role="button"
										><i class="fa fa-eye-slash"></i> Hide Code</a
									>
								</div>
								<pre><code class="xml copy-pre" id="horizontal-basic">
<form>
	<div class="form-group">
		<label>Text</label>
		<input class="form-control" type="text" placeholder="Johnny Brown">
	</div>
	<div class="form-group">
		<label>Email</label>
		<input class="form-control" value="bootstrap@example.com" type="email">
	</div>
	<div class="form-group">
		<label>URL</label>
		<input class="form-control" value="https://getbootstrap.com" type="url">
	</div>
	<div class="form-group">
		<label>Telephone</label>
		<input class="form-control" value="1-(111)-111-1111" type="tel">
	</div>
	<div class="form-group">
		<label>Password</label>
		<input class="form-control" value="password" type="password">
	</div>
	<div class="form-group">
		<label>Readonly input</label>
		<input class="form-control" type="text" placeholder="Readonly input here…" readonly>
	</div>
	<div class="form-group">
		<label>Disabled input</label>
		<input type="text" class="form-control" placeholder="Disabled input" disabled="">
	</div>
	<div class="form-group">
		<div class="row">
			<div class="col-md-6 col-sm-12">
				<label class="weight-600">Custom Checkbox</label>
				<div class="custom-control custom-checkbox mb-5">
					<input type="checkbox" class="custom-control-input" id="customCheck1-1">
					<label class="custom-control-label" for="customCheck1-1">Check this custom checkbox</label>
				</div>
				<div class="custom-control custom-checkbox mb-5">
					<input type="checkbox" class="custom-control-input" id="customCheck2-1">
					<label class="custom-control-label" for="customCheck2-1">Check this custom checkbox</label>
				</div>
				<div class="custom-control custom-checkbox mb-5">
					<input type="checkbox" class="custom-control-input" id="customCheck3-1">
					<label class="custom-control-label" for="customCheck3-1">Check this custom checkbox</label>
				</div>
				<div class="custom-control custom-checkbox mb-5">
					<input type="checkbox" class="custom-control-input" id="customCheck4-1">
					<label class="custom-control-label" for="customCheck4-1">Check this custom checkbox</label>
				</div>
			</div>
			<div class="col-md-6 col-sm-12">
				<label class="weight-600">Custom Radio</label>
				<div class="custom-control custom-radio mb-5">
					<input type="radio" id="customRadio4" name="customRadio" class="custom-control-input">
					<label class="custom-control-label" for="customRadio4">Toggle this custom radio</label>
				</div>
				<div class="custom-control custom-radio mb-5">
					<input type="radio" id="customRadio5" name="customRadio" class="custom-control-input">
					<label class="custom-control-label" for="customRadio5">Or toggle this other custom radio</label>
				</div>
				<div class="custom-control custom-radio mb-5">
					<input type="radio" id="customRadio6" name="customRadio" class="custom-control-input">
					<label class="custom-control-label" for="customRadio6">Or toggle this other custom radio</label>
				</div>
			</div>
		</div>
	</div>
	<div class="form-group">
		<label>Disabled select menu</label>
		<select class="form-control" disabled="">
			<option>Disabled select</option>
		</select>
	</div>
	<div class="form-group">
		<label>input plaintext</label>
		<input type="text" readonly class="form-control-plaintext" value="email@example.com">
	</div>
	<div class="form-group">
		<label>Textarea</label>
		<textarea class="form-control"></textarea>
	</div>
	<div class="form-group">
		<label>Help text</label>
		<input type="text" class="form-control">
		<small class="form-text text-muted">
		    Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
		</small>
	</div>
	<div class="form-group">
		<label>Example file input</label>
		<input type="file" class="form-control-file form-control height-auto">
	</div>
	<div class="form-group">
		<label>Custom file input</label>
		<div class="custom-file">
			<input type="file" class="custom-file-input">
			<label class="custom-file-label">Choose file</label>
		</div>
	</div>
</form>

</code></pre>
							</div>
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
