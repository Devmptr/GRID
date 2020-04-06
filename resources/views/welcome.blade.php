<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <title>Halaman Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h5 class="text-center mb-5">Login</h5>
        <div class="col-3 mx-auto my-3 border border-dark rounded-lg p-3">
            <form action="/loginuser" method="POST">  
                <div class="form-group">
                    <label for="">Email Address</label>
                    <input type="email" class="form-control" id="email" name=
                    "Email" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="">Password</label> 
                    <input type="password" class="form-control" id="pass" name="Password" placeholder="Password">
                </div>
                @if (session('alert'))
                    <div class="d-flex justify-content-center mt-2 d-inline alert alert-danger">
                        {{ session('alert') }}
                    </div>
                @endif
                <div class="d-flex justify-content-center mt-4">
                    <button type="submit" class="text-center btn btn-primary">Masuk</button>
                </div>
                {{csrf_field()}}
            </form>
        </div>
        <div class="col-3 mx-auto mb-3 border border-dark rounded-lg p-3">
            <div class="text-center">
                Baru di X Voices? <a href="/register">Daftar</a>
            </div>
        </div>
        <div class="col-3 mx-auto mt-5">
            <hr>
            <div class="d-flex justify-content-around">
                <button class="btn btn-link" data-toggle="modal" data-target="#aboutModal">About</button>
                <button class="btn btn-link" data-toggle="modal" data-target="#privacyModal">Privacy</button>
                <button class="btn btn-link" data-toggle="modal" data-target="#termsModal">Terms</button>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>