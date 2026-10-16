<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Login</title>
</head>
<body class="bg-white d-flex align-items-center justify-content-center vh-100 m-0">
    
    <form action="{{route('postloginyu') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label>Email</label>
            <input type="email" name="email" id="email" required>
        </div>
        <div>
            <label>Password</label>
            <input type="password" name="password" id="password" required>
        </div>
        <button class="btn btn-primary" type="submit">Login</button>
    </form>
    <h3>Belum punya akun?<a style="color:blue" href="{{ route('registeryu') }}">Register</h3>
        @if(Session::has('error'))
           <div><span style="color:red">{{ Session::get('error') }}</span></div>
        @endif
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>