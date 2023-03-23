@extends('layouts.auth',['title' => 'Inscription'])

@section('content')
 <!-- ======= Register Section ======= -->
    <div  class="register">
        <div class="container">
            <div  data-aos="fade-up">
                <div class="header">
                    <h1 >{{ __('Inscription') }}</h1>
                </div>
                </div>
                <div class="card-form"> 
                    <div class="card">
                        <div class="card-body" style="padding-bottom:0px">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="row">
                                            {{-- firstname --}}
                                            <div class="col-md-6 form-group">
                                                <input type="text" name="firstname" value = "{{old('firstname')}}"class="form-control" id="firstname" placeholder="Prénom" required>
                                                @error('firstname')
                                                    <span class="error-message" >
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            {{-- lastname --}}
                                            <div class="col-md-6 form-group">
                                                <input type="text" class="form-control" value="{{old('lastname')}}" name="lastname" id="lastname" placeholder="Nom" required>
                                                @error('lastname')
                                                    <span class="error-message" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                </div>
                                <div class="row ">
                                            {{--Number--}}
                                            <div class="col-md-6 form-group ">
                                                <input type="text" class="form-control" name="phone" value="{{old('phone')}}" id="phone" placeholder="Numéro" required>
                                                @error('phone')
                                                    <span class="error-message" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            {{-- Kind --}}
                                            <div class=" col-md-6 form-group">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="kind" id="feminin" value="F" required>
                                                    <label class="form-check-label" for="feminin" value="F">Féminin</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="kind" id="masculin" value="M" required>
                                                    <label class="form-check-label" for="masculin" value='M'>Masculin</label>
                                                </div>
                                                @error('kind')
                                                    <span class="error-message" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                </div>
                                {{--etape level --}}
                                {{--Email--}}
                                <div class="form-group">
                                                <input type="email" value="{{old('email')}}" class="form-control" name="email" id="email" placeholder="Adresse Email" required>
                                                @error('email')
                                                    <span class="error-message">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                </div>
                                {{-- password --}}
                                <div class="form-group mt-2">
                                                <input type="password" name="password" class="form-control" id="password" placeholder="Mot de passe" required>
                                                @error('password')
                                                    <span class="error-message">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                </div>
                                {{-- password confirmed--}}
                                <div class="form-group mt-2 ">
                                    <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="Mot de passe de confirmation" required>
                                </div>
                                {{--submit--}}
                                <div class="form-group mt-2 text-end">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <p class = "redirect" style=" margin-top: 0px; padding-top:0px">
                        Vous avez déjà un compte ?<a href="{{route("login")}}">Connectez-vous</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
 <!-- End register Section -->
@endsection
 
  