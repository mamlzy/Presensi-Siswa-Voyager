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
    margin-top: -120px;
    margin-left: -50px;
}

.img img{
    margin-top: 200px;
    width: 500px;
}

</style>
@extends('layouts.app')

@section('content')
<div class="container">
    <img class="wave" src="assets/img/wave.png">
    <img class="flip" src="assets/img/flip.png">
    <div class="img">
		<img src="assets/img/bg2.svg">
    </div>
    <div class="row justify-content-center">
        <div class="col-md-12 mt-5 ml-5">
            <div class="card mt-5 ml-5">
                <div class="card-header">
                    <h5 class="float-left pt-1">{{ __('Register') }}</h5></div>
                   <img src="assets/img/avatar2.svg" style="width: 180px;margin-top:-138px;margin-left:174px;" alt="">

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row pt-2">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        {{-- <img src="assets/img/un4.png" alt="" style="width: 150px; margin-top:7px;margin-left:-18px">      --}}

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-success">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
