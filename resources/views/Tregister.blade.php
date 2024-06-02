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

    <h2 class="text-right mb-10"><a href="{{ route('login') }}">login</a></h2>
    <div class="container">
        <h2 class="text-center mb-4">Teacher Registration Form</h2>
        <form action="{{ route('Tregister') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">First name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
            </div>
            <div class="form-group">
                <label for="family_name">Last name</label>
                <input type="text" class="form-control" id="family_name" name="family_name" placeholder="Enter your name" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
            </div>
            <div class="form-group">
                <label for="password">Confirm Password</label>
                <input type="password" class="form-control" id="password" name="password_confirmation" placeholder="Confirm your password" required>
            </div>
            <div class="form-group">
                <label for="braches">Branches</label>
                <input type="text" class="form-control" name="branches" placeholder="put all braches you teach (TDIA, ID OR GI)" required>
            </div>


            <div class="custom-file">
                <input type="file" class="custom-file-input @error('img') is-invalid @enderror" id="img" name="img" required>
                <label class="custom-file-label" for="img">Choose file</label>
            </div>

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


            <button type="submit" class="btn btn-primary btn-block">Register</button>
        </form>


        
        </div>
        <div class="footer-wrap pd-20 mb-20 mt-20" style="font-style: italic;">
        TDIA-Service - Ensah website created by
        <a href="" target="_blank"><span class="Owners"></span></a>
        </div>
    </div>

</body>
</html>
