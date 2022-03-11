@extends('layouts.auth',['title' => 'Inscription'])

@section('content')
@if(Request()->session()->missing('stape')) 
    @php
         session(['stape' => 1]);
    @endphp
@endif
@php
    $stape = Request()->session()->get('stape');
@endphp
 <!-- ======= Register Section ======= -->
    <div  class="register">
        <div class="container">
            <div  data-aos="fade-up">
                    <div class="stape d-flex flex-row justify-content-center align-self-center align-items-stretch">
                        <div >
                            <span  class = "{{($stape >= 1 and $stape <= 3) ? 'active' : ''}}">01</span>
                        </div>
                        <div>
                            <span class = "{{($stape >= 2 and $stape <= 3) ? 'active' : ''}}">02</span>
                        </div>
                        <div >
                            <span class = "{{($stape  === 3) ? 'active' : ''}}">03</span>
                        </div>
                    </div>
                </div>
                <div class="card-form"> 
                    <div class="card">
                        <div class="header">
                            <h1 class="card-header" >{{ __('Inscription') }}</h1>
                        </div>
                        <div class="card-body" style="padding-bottom:0px">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                @switch($stape)
                                    @case(1)
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
                                        {{--Number--}}
                                        <div class="form-group mt-3">
                                            <input type="text" class="form-control" name="phone" value="{{old('phone')}}" id="phone" placeholder="Numéro" required>
                                            @error('phone')
                                                <span class="error-message" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        {{-- Kind --}}
                                        <div class="mt-2">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="kind" id="feminin" value="F" required>
                                                <label class="form-check-label" for="feminin" value="F">Féminin</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="kind" id="masculin" value="M" required>
                                                <label class="form-check-label" for="masculin" value='M'>Masculin</label>
                                            </div>
                                        </div>
                                        @error('kind')
                                                <span class="error-message" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                        @enderror

                                        {{--etape level --}}
                                            <div class="form-group mt-2">
                                                <div>
                                                    <select class="form-control" id="level" name="level">
                                                        <option selected>Choisir votre niveau d'etude</option>
                                                        <option value="Bachelier">Bachelier</option>
                                                        <option value="Etudiant">Etudiant</option>
                                                    </select>
                                                </div>
                                                @error('level')
                                                    <span class="error-message" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            {{--submit--}}
                                            <div class="form-group mt-2 text-end">
                                                <button type="submit" class="btn btn-primary">
                                                    {{ __("S'inscrir") }}
                                                </button>
                                            </div>
                                        @break
                                    @case(2)
                                        {{--faculty --}}
                                            <div class="form-group">
                                                <div>
                                                    <select class="form-control" id="faculty" name="faculty">
                                                        <option selected>Choisir votre Filière</option>
                                                        <option value="Bachelier">Bachelier</option>
                                                        <option value="Etudiant">Etudiant</option>
                                                    </select>
                                                </div>
                                                @error('faculty')
                                                    <span class="error-message" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                {{--submit--}}
                                                <div class="form-group mt-4 text-end">
                                                    <button type="submit" class="btn btn-primary">
                                                        {{ __('Register') }}
                                                    </button>
                                                </div>
                                            </div>
                                      @break
                                    @case(3)
                                            {{--Email--}}
                                            <div class="form-group">
                                                <input type="email" class="form-control" name="email" id="email" placeholder="Adresse Email" required>
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
                                        @break
                                    @default
                                    
                                @endswitch
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
 
  