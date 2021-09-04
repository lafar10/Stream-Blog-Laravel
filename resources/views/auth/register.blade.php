@extends('app')

@section('content')
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card"  style="border-radius:0%;border-color:rgb(39, 190, 39);">
                <div class="card-header bg-success text-white text-center"><i class="fas fa-user-plus"></i></div>

                <div class="card-body" >
                    <form method="POST" action="{{ route('register') }}" >
                        @csrf

                        <div class="form-group row"  align="center">

                            <div class="col-md-12">
                                <label class="text-center">الإسم الكامل</label>

                                <input id="name" type="text" style="text-align:center;border-radius:0%;border-color:green;" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12" align="center">
                                <label for="email" class="text-md-center">البريد الإلكتروني</label>

                                <input id="email" type="email" style="text-align:center;border-radius:0%;border-color:green;" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12" align="center">
                                <label for="password" class="text-md-center">الرمز السري</label>

                                <input id="password" type="password" style="text-align:center;border-radius:0%;border-color:green;" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row" align="center">
                            <label for="password-confirm" >تأكيد الرمز السري </label>

                            <div class="col-md-12">
                                <input id="password-confirm" style="text-align:center;border-radius:0%;border-color:green;" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-12" align="center">
                                <button type="submit" class="btn btn-outline-success" style="border-radius:0%;">
                                    تسجيل   
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
