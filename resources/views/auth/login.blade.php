@extends('layouts.auth')

@section('content')
    <div class="connexion" style="top: 100px">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 header">
                <h1>Connexion</h1>
            </div>
        </div>
        <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group row">
                    <label for="email" class="col-lg-4 col-form-label text-lg-right">{{ __('Adresse E-Mail') }}</label>
                    <div class="col-lg-6">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    </div>
                    <div class="form-group row">
                        <label for="password" class="col-lg-4 col-form-label text-lg-right">{{ __('Mot de passe') }}</label>

                        <div class="col-lg-6">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-6 offset-lg-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Se souvenir de moi') }}
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mb-0">
                        <div class="col-lg-8 offset-lg-2">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Se connecter') }}
                            </button>

                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Mot de passe oublié ?') }}
                                </a>
                            @endif
                        </div>
                    </div>
        </form>
        <p class="redirect">
            Vous n'avez pas encore de compte ? <a href="{{route('register')}}">Inscrivez-vous ici</a>
        </p>
    </div>
@endsection
