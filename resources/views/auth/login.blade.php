@extends('app')

@section('content')
<br>
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card" style="border-radius:0%;border-color:rgb(39, 190, 39);" >
                <div class="card-header bg-success text-white text-center"><i class="fas fa-shield-alt"></i></div>

                <div class="card-body" >
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row" align="center">

                            <div class="col-md-12" align="center">
                                <label for="email" class="text-md-right">البريد الإلكتروني</label>

                                <input id="email" type="email" style="text-align:center;border-radius:0%;border-color:green;"  class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                        </div>

                        <div class="form-group row">

                            <div class="col-md-12" align="center">
                                <label for="password" class="ctext-md-right">الرمز السري</label>

                                <input id="password" type="password" style="text-align:center;border-radius:0%;border-color:green;"  class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input bg-success"  style="border-radius:0%;" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        تذكرني
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-12 offset-md-4">
                                <button type="submit" class="btn btn-outline-success" style="border-radius:0%;">
                                    دخول
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        نسيت على الرمز السري 
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
@endsection
