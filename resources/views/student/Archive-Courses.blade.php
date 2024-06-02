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


		<style>
  .center-table {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .table-container {
            width: 100%; 
            max-width: 1400px; 

        }
        .table th, .table td {
            text-align: center; 
            vertical-align: middle;
			 
        }
        .table th {
            width: 20%; 
        }
        .table td:nth-child(2) {
            width: 50%; 
        }
        .table td:nth-child(3) {
            width: 30%; 

        }
		</style>
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
                    @elseif(session('Error'))
					<div class="alert alert-danger">
						{{ session('Error') }}
					</div>
					@endif
				</div>

			</div>
			<table class="table table-bordered subjTable">
				<thead>
					<tr>
						<th scope="col">Feild</th>
						<th scope="col" style="width:40%;">Module Name</th>
                        <th scope="col">Available</th>
						<th scope="col" style="width:40%;">Year of publication</th>
					</tr>
				</thead>
				<tbody>
					@foreach($modules as $value)							
						<tr>
							<td>{{ $filiere }}</td>
							<td>{{$value['name']}}</td>
							<td>
								@if(!empty($value['Data']) and !$value["is_archived"])
								
									<a href="{{ route('file.download', $value["Data"]) }}" class="btn btn-primary">Download</a> 
								@else
									<button type="submit" class="btn btn-danger">Archived</button>
								@endif
							</td>

                            <td>
                                {{explode('-', explode(' ', $value['created_at'])[0])[0]}}
                            </td>
						</tr>
					@endforeach
				</tbody>
			</table>

			
		</div>
		
        <div class="footer-wrap pd-20 mb-20 mt-20" style="font-style: italic;">
            TDIA-Service - Ensah website created by
            <a href="" target="_blank"><span class="Owners"></span></a>
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
