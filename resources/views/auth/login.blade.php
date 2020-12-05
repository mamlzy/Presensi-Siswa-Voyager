<style>
  
    .wave{
	position: fixed;
	bottom: 0;
	left: 0;
    height: 100%;
    width: 700px;
	z-index: -1;
}
.flip{
	position: fixed;
	bottom: 0;
	right: -440px;
    height: 100%;
	z-index: -1;
}
.img{
	display: flex;
	justify-content: flex-end;
    align-items: center;
    float: left;
    margin-top: -100px;
    margin-left: -50px;
}

.img img{
    width: 540px;
}



</style>

@extends('layouts.app')
<div style=" height: 100vh; ">

@section('content')
<div class="container">
    <img class="wave" src="assets/img/wave.png">
    <img class="flip" src="assets/img/flip.png">

	<div class="container">

	<div class="img">
		<img src="assets/img/bg.svg">
    </div>
        
    <div class="row" style="margin-left:530px; margin-top:120px">
        <div class="col-md-12">
            <div class="card">
                <center>
                    <div class="card-header">
                        <img src="assets/img/avatar.svg" style="width: 110px;margin-top:-90px;margin-left:-30px;" alt="">
                        <h5 class="float-left">Login</h5>
                    </div>
                </center>
                {{-- <center style="size: 50px"><div class="card-header">{{ __('Login') }}</div></center> --}}
                <div style="background: #ffffff00">
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        {{-- <img src="assets/img/un1.png" alt="" style="width: 150px; margin-top:-30px">                 --}}

                        <div class="form-group row" >
                            <div class="col-md-3 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-success">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link text-success" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </div>

</div>
</div>
@endsection
