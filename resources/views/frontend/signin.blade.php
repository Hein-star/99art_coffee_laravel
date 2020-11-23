@extends('frontendtemplate')
<link rel="stylesheet" type="text/css" href="{{asset('frontend_asset/assets/style.css')}}">
@section('content')
<div class="bg-img">
    <div class="content">
        <header>Login From</header>
        <form method="POST" action="{{route('login')}}">
            @csrf
            <div class="field">
                <span class="fa fa-user"></span>
                <input id="email" type="text" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Your Email" required autocomplete="email" autofocus>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="field space">
                <span class="fa fa-lock"></span>
                <input id="password" type="password" name="password" class="password @error('password') is-invalid @enderror" autocomplete="current-password" placeholder="Your Password" required>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="pass">
                <a href="#">Forgot Password?</a>
            </div>
            <div>
                <button type="submit" class="form-control btn btn-primary">
                    {{ __('Login') }}
                </button>
            </div>
            <div class="link">
                <div class="facebook">
                    <a href="https://web.facebook.com/kawe.lay.127/"><i class="fab fa-facebook-f"><span>Fackbook</span></i></a>
                </div>
                <div class="instagram">
                    <a href="https://www.instagram.com/kawe.lay.127/?hl=en"><i class="fab fa-instagram"><span>Instagram</span></i></a>
                </div>
            </div>
            <div class="create">Don't have account?
                <a href="{{route('signuppage')}}">Create Form</a>
            </div>
        </form>
    </div>
</div>
@endsection
@section('script')
    <script type="text/javascript" src="{{asset('my_asset/custom.js')}}"></script>
    <script src="https://kit.fontawesome.com/532f1fcad3.js" crossorigin="anonymous"></script>
@endsection

{{-- <div class="img-fluid">
    <img src="{{asset('frontend_asset/assets/img/detail.jpg')}}" width="1275" height="550">
    <div class="section-title mt-5">
        <h2>Member <span>Login Form</span></h2> 
    </div>
</div>
<div class="container my-5">
    <div class="row">
        <div class="col-md-6">
            <img src="{{asset('frontend_asset/assets/img/coffee-bg.jpg')}}" width="400" height="300">
        </div>
        <form method="POST" action="{{route('login')}}" class="my-5">
            @csrf
            <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                <div class="col-md-6">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter Email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                <div class="col-md-6">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Enter Password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-8 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Login') }}
                    </button>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-6 offset-md-4">
                    <a href="{{route('signuppage')}}" class="text-primary">Create Account</a>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                </div>
            </div>
        </form>
    </div>
</div> --}}