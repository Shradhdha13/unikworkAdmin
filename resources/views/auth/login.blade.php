@extends('layouts.app')
<style>
    .input-group-append .input-group-text, .input-group-prepend .input-group-text{
        font-family: var(--font-family-Poppins);
        padding: .375rem .75rem !important;
        border-radius: .5rem;
        border: 2px solid rgb(239 239 239) !important;
    }
    .form-control:focus{
        font-family: var(--font-family-Poppins);
        background-color: #fff !important;
        border-color: 1px solid rgb(239 239 239) !important;
    }
    .form-control{
        border-left: none !important;
        cursor: pointer;
        font-size: 1rem;
        font-weight: 600;
        font-family: var(--font-family-Poppins);

    }
    .input-group .form-control {
        border: 2px solid rgb(239 239 239) !important; Remove border from input
        box-shadow: none; /* Remove shadow if any */
        border-left:none !important;
        font-family: var(--font-family-Poppins);
    }

    .input-group img {
        border: none; /* Remove border from icon */
        background: none; /* Ensure background is transparent */
    }


    .input-group .input-group-text {
    background: none;
    border: none;
    padding: 0;
    font-family: var(--font-family-Poppins);
    }

    .input-group .form-control {
        border-left: none; /* Remove left border for input */
    }

    .input-group .form-control:focus {
        box-shadow: none; /* Remove focus shadow */
        outline: none; /* Remove focus outline */
    }


</style>
@section('content')
<div class="grid-container">
    <div class="grid-item">
        <div class="bg-login d-flex justify-content-center align-items-center" style="height: 100vh;">
            <img src="../images/login_sideLogo.png" alt="Login Logo">
        </div>
    </div>
    <div class="grid-item">
        <div class="container d-flex justify-content-center align-items-center" style="height: 80vh;">
            <div style="width: 550px">
                <div class="pb-5 col-sm-12"><img src="../images/unikwork-logo3x.png" height="35px" class="login-logo"></div>
                <div class="text-left pb-4">
                    <h1 class="login-h1">Sign in</h1>
                    <span >Please enter your login Details below</span>
                </div>
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-group mb-4 text-left">
                        <label for="email">{{ __('Email Address') }}</label>
                        {{-- <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus> --}}

                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" style="background: none; border-right:none;">
                                    <img src="{{asset('images/envlop.svg')}}" alt="Email Icon" style="width: 20px; height: 20px;">
                                </span>
                            </div>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        </div>
                    
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    
                    <div class="form-group mb-4 text-left">
                        <label for="password">{{ __('Password') }}</label>
                        {{-- <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"> --}}
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" style="background: none; border-right:none;">
                                    <img src="{{asset('images/lock.svg')}}" alt="Password Icon" style="width: 20px; height: 20px;">
                                </span>
                            </div>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            <div class="input-group-prepend" onclick="togglePassword()">
                                <span class="input-group-text" style="background: none; border-left:none; cursor: pointer">
                                    <img src="{{asset('images/eyeclose.svg')}}" alt="Password Icon" style="width: 20px; height: 20px;">
                                </span>
                            </div>
                        </div>
                    
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    

                    <div class="form-group row mb-0">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary" style="width: 100%">
                                {{ __('Continue') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
<script>
    function togglePassword() {
    const passwordInput = document.getElementById('password');
    const toggleIcon = document.getElementById('toggle-icon');
    
    if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        toggleIcon.src = '{{ asset("images/eyeopen.svg") }}'; // Change to open eye icon
    } else {
        passwordInput.type = 'password';
        toggleIcon.src = '{{ asset("images/eyeclose.svg") }}'; // Change back to closed eye icon
    }
}
</script>