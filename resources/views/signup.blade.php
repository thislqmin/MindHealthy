<!DOCTYPE html>
<html lang="en">
<head>
<title>MindHealthy</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="/css/signup.css">
</head>
<body>

<!-- Form Login -->
<div class="container col-5 row g-2">
    <h1 class="sign"><b>Sign Up</b></h1>
    <p class="mt-3 mb-5 in">Sign up with email to continue</p>
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <form action="{{ route('signup') }}" method="POST">
        @csrf
        <div class="frm form-floating col-md">
            <input type="text" name="name" class="form-control" id="name" placeholder="Muhammad" value="">
            <label for="name">Name</label>
        </div>
        <div class="frm form-floating mt-2 mb-3">
            <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
            <label for="email">Email</label>
            <!-- <label for="image"><img src="" alt=""></label> -->
        </div>
        <div class="frm form-floating mb-3">
            <input type="password" name="password" class="form-control" id="password" placeholder="Password">
            <label for="password">Password</label>
        </div>
        <!-- <div class=" frm form-floating mt-2">
            <input type="password" class="form-control" id="Password2" placeholder="Password">
            <label for="Password2">Re-type Password</label>
        </div> -->
        <div>
            <p class="lupa mt-3 mb-4">Forgot Your Password ?</p>
        </div>
        <div class="">
            <button id="btn" class="btn button-login ms-auto">Sign Up</button>
        </div>
        <div class="account row mt-3">
            <p class="forgot">Already have an account ? <a href="{{ route('signin') }}">Sign In</a></p>
        </div>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>