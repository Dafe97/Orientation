@extends('layouts/app')
@section('content')
      <div class="Instructor2__area pt-110 pb-90 text-center">
        <div class="container Instructor2__width">
            <div class="row">
                <div class="col-xxl-7 offset-xxl-2 col-xl-7 offset-xl-2 col-lg-7 offset-lg-2">
                    <div class="Instructor2__title-content text-center pb-30">
                        <span class="Instructor2__pre-title">Nos utilisateurs</span>
                        <h2 class="Instructor2__title"></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($users as $user)
                    <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-12 col-sm-12">
                        <div class="Instructor2__content mb-30">
                            <div class="Instructor2__content-1">
                                <img src="{{$user->profil}}" alt="profil">
                            </div>
                            <div class="Instructor2__wrapper text-start">
                                <div class="Instructor2__content-2">
                                    <h4><a href="{{route("profil",$user->id)}}">{{$user->firstName}} {{$user->lastName}}</a></h4>
                                    {{-- <p>{{$user->level}}</p> --}}
                                </div>
                                <div class="Instructor2__content-3">
                                <div>
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection