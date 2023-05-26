<!DOCTYPE html>
<html lang="en">
<head>
<title>MindHealthy</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="/css/login.css">
</head>
<body>

<!-- Form Login -->
  <div class="container">
    <h1 class="sign"><b>Sign In</b></h1>
    <p class="mt-3 mb-5 in">Sign in with email to continue</p>
    @if(Session::has('error'))
        <div class="alert alert-danger" role="alert">
            {{ Session::get('error') }}
        </div>
    @endif
    <div class="col-5">
        <form action="{{ route('signin') }}" method="POST">
            @csrf
            <div class="frm form-floating mb-4">
                <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email</label>
            </div>
            <div class="frm form-floating mt-3">
                <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>
            <div>
                <p class="lupa mt-3 mb-4">Forgot Your Password ?</p>
            </div>
            <div class="">
                <button id="btn" class="button-login btn ms-auto">Sign In</button>
            </div>
            <div class="container row mt-3">
                <p class="forgot">Don't have an account ? <a href="{{ route('signup') }}"> Sign Up </a></p>
            </div>
        </form>
    </div>
  </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>