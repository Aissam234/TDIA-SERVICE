<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles -->
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            max-width: 500px;
            margin: 100px auto;
            padding: 30px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        .form-group {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <div class="container">
        <h2 class="text-center mb-4">Teacher Registration Form</h2>
        <h5 class="text-center mb-4">Choose ur Modules</h5>
        <form action="{{ route('sendModules', ['param' => 123]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @foreach($modules as $module=> $values)
            <div class="form-group">
                <label>{{ $module }}</label>
                <div class="ml-3">
                    @foreach($values as $name=>$id)
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="modules[]" id="module{{ $id }}" value="{{ $id }}">
                            <label class="form-check-label" for="module{{ $id }}">
                                {{ $name }}
                            </label>
                        </div>
                    @endforeach
                </div>
            </div>
            @endforeach

            <br><br>

            <br>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif


            <button type="submit" class="btn btn-primary btn-block">Submit</button>
        </form>


        
        </div>
        <div class="footer-wrap pd-20 mb-20 mt-20" style="font-style: italic;">
        TDIA-Service - Ensah website created by
        <a href="" target="_blank"><span class="Owners"></span></a>
        </div>
    </div>


</body>
</html>
