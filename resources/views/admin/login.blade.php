<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @section('title', 'Login')
    <link rel="stylesheet" href="{{ asset('admin-assets/css/style.css') }}">
</head>

<body>

    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth px-0">
                <div class="row w-100 mx-0">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left py-5 px-4 px-sm-5">

                            <div class="brand-logo">
                                <img src="{{ asset('admin-assets/images/logo.svg') }}" alt="logo">
                            </div>

                            @if (Session('loginError'))
                                <div class="alert alert-danger">
                                    {{ session('loginError') }}
                                </div>
                            @endif

                            <form class="pt-3" method="post" action="{{ route('login-rec') }}">
                                @csrf

                                <div class="form-group">
                                    <input type="email" class="form-control form-control-lg" placeholder="Email" name="email">
                                    <span class="alert-danger">{{ $errors->first('email') }}</span>
                                </div>

                                <div class="form-group">
                                    <input type="password" class="form-control form-control-lg" placeholder="Password" name="password">
                                    <span class="alert-danger">{{ $errors->first('password') }}</span>
                                </div>

                                <div class="mt-3">
                                    <button type="submit" class="btn btn-primary mr-2 w-100">SIGN IN</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
