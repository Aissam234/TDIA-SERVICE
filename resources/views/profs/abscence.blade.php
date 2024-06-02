<!DOCTYPE html>
<html>
<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8" />
    <title>TDIA-Service</title>
    <!-- Site favicon -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/x-icon" href="{{ asset('vendors/images/Untitled design.png') }}"/>
    <link rel="stylesheet" href="{{ asset('vendors/bootstrap-5.3.3-dist/css/style.css') }}">
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet" />
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/bootstrap-5.3.3-dist/css/styles/core.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/bootstrap-5.3.3-dist/css/styles/icon-font.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/bootstrap-5.3.3-dist/css/styles/style.css') }}"/>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-GBZ3SGGX85"></script>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2973766580778258" crossorigin="anonymous"></script>
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
        .card-shadow {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 255, 0.2), 0 6px 20px 0 rgba(0, 0, 255, 0.19);
        }
        .delete-all-btn {
            margin-left: auto;
        }
        .header-module {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .header-reports {
            display: flex;
            justify-content: space-between;
            align-items: center;
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
                    <div class="row">
                        
                            <nav aria-label="breadcrumb" role="navigation">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href={{ route('index2') }} class="ml-4">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        Absence Management
                                    </li>
                                </ol>
                                <p class="mt-2 ml-4">
                                    <b>This page allows you to manage student absences for each session in the selected module. You can mark absences and ensure they are recorded for future reference.
                                    </b>
                                </p>
                            </nav>
                        </div>
                    </div>
                </div>

                <div class="container mt-2">
                    <h2 class="text-center mb-3 breadcrumb-item active bold">Absence Management</h2>
                    @foreach($modules as $module)
                        <div class="card mb-4 card-shadow">
                            <div class="card-body">
                                <h5 class="card-title text-center">Filliere: {{ $module->filliere->name }}</h5>
                                <h5 class="card-title text-center">Module: {{ $module->name }}</h5>
                                <hr>
                                <form action="{{ route('absences.store') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="module_id" value="{{ $module->id }}">
                                    <input type="hidden" name="month" value="{{ $date->format('Y-m') }}">
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Student</th>
                                                    @for($i = 1; $i <= $date->daysInMonth; $i++)
                                                        <th>Session {{ $i }}</th>
                                                    @endfor
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($module->filliere->users as $student)
                                                    <tr>
                                                        <td>{{ $student->name }} {{ $student->family_name }}</td>
                                                        @for($i = 1; $i <= $date->daysInMonth; $i++)
                                                            @php
                                                                $absence_date = $date->format('Y-m') . '-' . str_pad($i, 2, '0', STR_PAD_LEFT);
                                                                $absence = $absences->where('student_id', $student->id)
                                                                                   ->where('module_id', $module->id)
                                                                                   ->where('absence_date', $absence_date)
                                                                                   ->first();
                                                            @endphp
                                                            <td>
                                                                <input type="checkbox" name="absences[{{ $student->id }}][{{ $i }}]" value="1" 
                                                                    @if($absence) checked readonly @endif>
                                                            </td>
                                                        @endfor
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Save Absences</button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="footer-wrap pd-20 mb-20 mt-20" style="font-style: italic;">
                    TDIA-Service - Ensah website created by
                    <a href="" target="_blank"><span class="Owners"></span></a>
                </div>
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
        var typed = new Typed(".Owners", {
            strings: ["Aissam", "Massin", "Malak"],
            typeSpeed: 150,
            backSpeed: 150,
            loop: true
        });
    </script>
    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS" height="0" width="0" style="display: none; visibility: hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->
</body>
</html>
