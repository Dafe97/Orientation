@extends('layouts.auth')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        {{-- pseudo --}}
                        {{-- <div class="form-group">
                            <label for="pseudo">Pseudo</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" id="pseudo" name="pseudo" placeholder="Votre pseudo" required>
                        </div> --}}
                        {{-- firstname --}}
                        <div class="form-group">
                            <label for="firstName">Prénom</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" id="firstName" name="firstname" placeholder="Votre prénom" required>
                            @error('firstname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        {{-- lastname --}}
                        <div class="form-group">
                            <label for="lastName">Nom</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" id="lastName" name="lastname" placeholder="Votre prénom" required>
                            @error('lastname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        {{-- Kind --}}
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="kind" id="feminin" value="F" required>
                            <label class="form-check-label" for="feminin" value="F">Feminin</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="kind" id="masculin" value="M" required>
                            <label class="form-check-label" for="masculin" value='M'>Masculin</label>
                        </div>
                        @error('kind')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                        {{-- level --}}
                        <div class="form-group">
                            <label  for="inlineFormCustomSelectPref">Niveau d'etude</label><span class="text-danger">*</span>
                            <div>
                                <select class="form-control" id="level" name="level">
                                    <option selected>Choisir votre niveau</option>
                                    <option value="Bachelier">Bachelier</option>
                                    <option value="Etudiant">Etudiant</option>
                                </select>
                            </div>
                            @error('level')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        {{-- faculty --}}
                        <div class="form-group">
                            <label for="faculty">Filère</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" id="faculty" name="faculty" placeholder="Votre filère" required>
                            @error('faculty')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        {{-- phone --}}
                        <div class="form-group">
                            <label for="phone">Tel</label><span class="text-danger">*</span>
                            <input type="number" class="form-control" id="phone" name="phone" placeholder="Numéro" required>
                            @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        {{-- Email --}}
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email" required>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        {{--password  --}}
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Mot de passe" required>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        {{--password confirm --}}
                        <div class="form-group">
                            <label for="password_confirmation">Mot de passe</label>
                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Mot de passe de confirmation" required>
                            @error('password_confirmation')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                            {{-- <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nom') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

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
                            </div> --}}

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
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

  