<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Register - SB Admin</title>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body>
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Register</h3>
                                </div>
                                <div class="card-body">
                                    <form action="{{ route('register')}}" method="post" enctype="form-data">
                                        @csrf
                                        <div class="form-group py-3">
                                            <label for="name">User name</label>
                                            <input type="text" name="name" class="form-control" id="user-name"
                                                placeholder="User name">
                                            @if($errors->has('name'))
                                                <div class="error">{{ $errors->first('name') }}</div>
                                            @endif

                                        </div>
                                        <div class="form-group py-3">
                                            <label for="email">Email address</label>
                                            <input type="email" name="email" class="form-control" id="email"
                                                placeholder="Enter email">
                                            @if($errors->has('email'))
                                                <div class="error">{{ $errors->first('email') }}</div>
                                            @endif
                                        </div>
                                        <div class="form-group py-3">
                                            <label for="password">Password</label>
                                            <input type="password" name="password" class="form-control" id="password"
                                                placeholder="Password">
                                            @if($errors->has('password'))
                                                <div class="error">{{ $errors->first('password') }}</div>
                                            @endif
                                        </div>
                                        <div class="form-group py-3">
                                            <label for="confirm_password">Confirm Password</label>
                                            <input type="password" name="password_confirmation" class="form-control" id="confirm_password"
                                                placeholder="Confirm Password">
                                            @if($errors->has('password_confirmation'))
                                                <div class="error">{{ $errors->first('password_confirmation') }}</div>
                                            @endif
                                        </div>
                                        <div class="text-center">
                                            <button class="btn btn-block btn-outline-dark" type="submit">Register Now</button>
                                        </div>
                                    </form>
                                    
                                </div>
                                <div class="card-footer text-center py-3">
                                    <div class="small"><a href="{{ route('login-form') }}">Have an account? Go to login</a></div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="js/scripts.js"></script>
</body>

</html>
