@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow">
                <div class="card-header text-center">Registrarse</div>
                <div class="card-body mt-4">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="/img/registrarse.png" alt="" height="250" class="mx-auto d-block">
                        </div>
                        <div class="col-md-8">
                            <form method="POST" action="{{ route('register') }}" novalidate>
                                @csrf
                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                                    <div class="col-md-8">
                                        <input id="name" type="text" class="form-control rounded-pill @error('name') is-invalid @enderror" name="name" 
                                            value="{{ old('name') }}" required autocomplete="name" autofocus>
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                                    <div class="col-md-8">
                                        <input id="email" type="email" class="form-control rounded-pill @error('email') is-invalid @enderror" name="email" 
                                            value="{{ old('email') }}" required autocomplete="email">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                                    <div class="col-md-8">
                                        <input id="password" type="password" class="form-control rounded-pill @error('password') is-invalid @enderror" 
                                            name="password" required autocomplete="new-password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
                                    <div class="col-md-8">
                                        <input id="password-confirm" type="password" class="form-control rounded-pill" name="password_confirmation" required 
                                            autocomplete="new-password">
                                    </div>
                                </div>
                                <div class="form-group row justify-content-center mt-5 mb-5">
                                    <div class="col-md-6">
                                        <button type="submit" class="btn btn-success rounded-pill form-control shadow">
                                            Registro
                                        </button>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6 d-flex justify-content-center">
                                        <a href="{{route('login')}}" class="btn btn-link text-success">
                                            ¡Ya tengo una cuenta!
                                        </a>
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
