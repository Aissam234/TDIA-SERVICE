<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>TDIA-Service</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/x-icon" href="{{ asset('vendors/images/Untitled design.png') }}"/>
    <link rel="stylesheet" href="{{ asset('vendors/bootstrap-5.3.3-dist/css/style.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/bootstrap-5.3.3-dist/css/styles/core.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/bootstrap-5.3.3-dist/css/styles/icon-font.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/bootstrap-5.3.3-dist/css/styles/style.css') }}"/>
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
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            padding-top: 50px;
            padding-bottom: 50px;
        }
        .card {
            background: rgba(255, 255, 255, 0.9);
            box-shadow: 0 4px 8px 0 rgba(0, 0, 255, 0.2);
            border-radius: 10px;
            margin-top: auto;
            margin-bottom: auto;
        }
        .card-title {
            color: #007bff;
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
            width: 100%;
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
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 90vh;">
        <div class="card shadow-sm" style="width: 100%; max-width: 700px;">
            <div class="card-body">
                <h5 class="card-title text-center mb-4">Import Students via Excel</h5>
                <form action="{{ route('importStudents') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="file" class="form-label">Choose Excel File</label>
                        <input type="file" name="file" class="form-control" id="file" required>
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">
                            <i class="bi bi-file-earmark-arrow-up"></i> Import Excel
                        </button>
                    </div>
                </form>
                @if ($errors->any())
                    <div class="alert alert-danger mt-3">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if (session('success'))
                    <div class="alert alert-success mt-3">
                        {{ session('success') }}
                    </div>
                @endif

                <button class="btn btn-info mt-4" id="helpBtn">Help</button>

                <div class="alert alert-info mt-3" id="helpText" style="display: none;">
                    <h5>Instructions for Importing Students</h5>
                    <p>Create an Excel file with the following columns: <strong>name, family_name, email, filiere, image</strong>. Do not include a password column as passwords will be generated automatically. Here is an example:</p>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>name</th>
                                <th>family_name</th>
                                <th>email</th>
                                <th>filiere</th>
                                <th>image</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>John</td>
                                <td>Doe</td>
                                <td>john.doe@example.com</td>
                                <td>ID</td>
                                <td>john_doe.jpg</td>
                            </tr>
                            <tr>
                                <td>Jane</td>
                                <td>Smith</td>
                                <td>jane.smith@example.com</td>
                                <td>ID</td>
                                <td>jane_smith.jpg</td>
                            </tr>
                            <tr>
                                <td>Bob</td>
                                <td>Johnson</td>
                                <td>bob.johnson@example.com</td>
                                <td>TDIA</td>
                                <td>bob_johnson.jpg</td>
                            </tr>
                        </tbody>
                    </table>
				</div>
            </div>
        </div>
    </div>

    <div class="footer-wrap pd-20 mb-20 mt-20" style="font-style: italic;">
        TDIA-Service - Ensah website created by
        <a href="" target="_blank"><span class="Owners"></span></a>
    </div>

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

        document.getElementById('helpBtn').addEventListener('click', function () {
            var helpText = document.getElementById('helpText');
            if (helpText.style.display === 'none') {
                helpText.style.display = 'block';
            } else {
                helpText.style.display = 'none';
            }
        });
    </script>
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS" height="0" width="0" style="display: none; visibility: hidden"></iframe>
    </noscript>
</body>
</html>
