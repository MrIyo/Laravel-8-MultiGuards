<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Login</title>
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4" style="margin-top: 45px;" >
                <h4>User Register</h4> <hr>
                <form action="{{ route('user.create') }}" method="post" autocomplete="off">
                    @if(Session::get('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                        </div>
                    @endif
                    @if(Session::get('fail'))
                        <div class="alert alert-success">
                            {{ Session::get('fail') }}
                        </div>
                    @endif

                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter Fullname" value="{{ old ('name') }}">
                        <span class="text-danger">
                            @error('name') {{ $message }} @enderror
                        </span>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" name="email" placeholder="Enter Email Address" value="{{ old ('email') }}">
                        <span class="text-danger">
                            @error('email') {{ $message }} @enderror
                        </span>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Enter Password" value="{{ old ('password') }}">
                        <span class="text-danger">
                            @error('password') {{ $message }} @enderror
                        </span>
                    </div>
                    <div class="form-group">
                        <label for="cpassword">Confirm Password</label>
                        <input type="password" class="form-control" name="cpassword" placeholder="Enter Confirm Password" value="{{ old ('cpassword') }}">
                        <span class="text-danger">
                            @error('cpassword') {{ $message }} @enderror
                        </span>
                    </div>
                    <br>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Register</button>
                    </div>
                    <br>
                    <a href="{{ route('user.login') }}">I already have an Account</a>

                </form>
            </div>
        </div>
    </div>

</body>
</html>
