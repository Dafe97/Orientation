@extends("layouts/app")
@section("content")
    <section id="profile">
        <div class="container">
            <div class="main-body">
                  <!-- /Breadcrumb -->
                  <div class="row gutters-sm">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-column align-items-center text-center">
                                    <img src="{{asset($user->profil)}}" alt="Admin" class="rounded-circle p-1 bg-primary" width="110">
                                    <div class="mt-3">
                                        <h4>{{$user->firstName." ".$user->lastName}}</h4>
                                        <p class="text-secondary mb-1">{{$user->level}}</p>
                                        <p class="text-muted font-size-sm">Email: &nbsp; {{$user->email}}</p>
                                        @if(Auth::id() == $user->id)
                                            <form method="post" action="{{ route('profil_img') }}" enctype="multipart/form-data">
                                                @csrf     
                                                <input type="text" name="edit" id="" value="profil" hidden>
                                                <input type="file" name="imgFile" id="imgfile" value="statut" >
                                                        @error('imgFile')
                                                            <span class="error-message" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    <input type="submit" value="valider">
                                            </form>
                                        @endif
                                    </div>
                                </div>
                                <hr class="my-4">
                                @if (Auth::id() == $user->id)
                                    <form method="POST" action="{{ route('profil.edit') }}">
                                        @csrf  
                                        @method('PUT')
                                        <input type="text" name="edit" id="" value="social_network" hidden>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                                <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe me-2 icon-inline"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>Website</h6>
                                                <span class="text-secondary">
                                                    <input type="text" name="web_url" style="border:none ;outline: none;" value="{{ old('web_url') ?? $user->web_url }}" placeholder ="Votre lien ici ....">
                                                </span>
                                                @error('web_url')
                                                    <span class="error-message" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                                <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github me-2 icon-inline"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path></svg>Github</h6>
                                                <span class="text-secondary">
                                                    <input type="text" name="github" id="" style="border:none ;outline: none;" value="{{old('github') ?? $user->github}}" placeholder ="Votre lien ici ....">
                                                </span>
                                                @error('github')
                                                    <span class="error-message" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                                <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter me-2 icon-inline text-info"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>Twitter</h6>
                                                <span class="text-secondary">
                                                    <input type="text" name="twitter" id="" style="border:none ;outline: none;" value="{{old('twitter') ?? $user->twitter}}" placeholder ="Votre lien ici ....">
                                                </span>
                                                @error('twitter')
                                                    <span class="error-message" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                                <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram me-2 icon-inline text-danger"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>Instagram</h6>
                                                <span class="text-secondary">
                                                    <input type="text" name="instagram" id="" style="border:none ;outline: none;" value="{{old("instagram") ?? $user->instagram}}" placeholder ="Votre lien ici ....">
                                                </span>
                                                @error('instagram')
                                                    <span class="error-message" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                                <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook me-2 icon-inline text-primary"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>Facebook</h6>
                                                <span class="text-secondary">
                                                    <input type="text" name="facebook" id="" style="border:none ;outline: none;" value="{{old("facebook") ?? $user->facebook}}" placeholder ="Votre lien ici ....">
                                                </span>
                                                @error('facebook')
                                                    <span class="error-message" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </li>
                                        </ul>
                                        <div class="text-end">
                                            <button type="submit" class="btn btn-primary btn-sm ">modifier</button>
                                        </div>
                                    </form>
                                @else
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                            <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe me-2 icon-inline"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>Website</h6>
                                            <span class="text-secondary">
                                               @if (!empty($user->web_url))
                                                   <a href="{{$user->web_url}}">{{$user->web_url}}</a>
                                               @else
                                                   Lien vide
                                               @endif
                                            </span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                            <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github me-2 icon-inline"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path></svg>Github</h6>
                                            <span class="text-secondary">
                                                @if (!empty($user->github))
                                                    <a href="{{$user->github}}">{{$user->github}}</a>
                                                @else
                                                    Lien vide
                                                @endif
                                             </span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                            <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter me-2 icon-inline text-info"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>Twitter</h6>
                                            <span class="text-secondary">
                                                @if (!empty($user->twitter))
                                                    <a href="{{$user->twitter}}">{{$user->twitter}}</a>
                                                @else
                                                    Lien vide
                                                @endif
                                             </span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                            <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram me-2 icon-inline text-danger"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>Instagram</h6>
                                            <span class="text-secondary">
                                                @if (!empty($user->instagram))
                                                    <a href="{{$user->instagram}}">{{$user->instagram}}</a>
                                                @else
                                                    Lien vide
                                                @endif
                                             </span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                            <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook me-2 icon-inline text-primary"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>Facebook</h6>
                                            <span class="text-secondary">
                                                @if (!empty($user->facebook))
                                                    <a href="{{$user->facebook}}">{{$user->facebook}}</a>
                                                @else
                                                    Lien vide
                                                @endif
                                            </span>
                                        </li>
                                    </ul>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="row gutters-sm">
                            <div class="col-sm-12 mb-3">
                              <div class="card h-100">
                                <div class="card-body">
                                  <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">Statut</i></h6>
                                    @if ($user->statut)
                                        <p>
                                            {{$user->statut}}
                                        </p>
                                    @else
                                        <p>
                                            Votre statut est vide pour le moment....
                                        </p>
                                    @endif
                                    @if(Auth::id() == $user->id)
                                        <form method="POST" action="{{ route('profil.edit') }}">
                                            @csrf     
                                            @method('PUT')
                                            <input type="text" name="edit" id="" value="statut" hidden>
                                            <div>
                                                <textarea class ="form-control"name="statut" id="statut" cols="30" rows="1"></textarea>
                                                @error('statut')
                                                    <span class="error-message" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                </div>
                                            <input class="btn btn-primary sm-btn mt-1 text-end" type="submit" value="Editer">
                                        </form>
                                    @endif
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="card mb-3">
                                <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-3" >
                                        <h6 class="mb-0">Nom</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary" >
                                        {{$user->firstName}}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">prénom</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        {{$user->lastName}}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                     <h6 class="mb-0">sexe</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        @if ($user->kind == "M")
                                            Masculin
                                        @else
                                            Féminin
                                        @endif
                                    </div>
                                </div>
                                <hr>
                                @if (Auth::id() ==  $user->id) 
                                    <div class="row">
                                        <div class="col-sm-3">
                                        <h6 class="mb-0">Phone</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            {{$user->phone}}
                                        </div>
                                    </div><hr>
                                @endif
                                
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Email</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        {{$user->email}}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                         <h6 class="mb-0">Niveau</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        {{$user->level}}
                                    </div>
                                </div>
                                <hr>
                                @if (Auth::id() == $user->id)
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <button id="modal-btn" class="btn btn-primary " target="__blank">Editer</button>
                                        </div>
                                    </div>
                                @endif
                                </div>
                          </div>        
                    </div>
                  </div>
        
                </div>
        </div>
<!------------------------------------------------------------------------------------------------------
---------Madal page
-------------------------------------------------------------------------------------------------------->
      <div class="modal-class" id="modal">
         <form method="POST" action="{{ route('profil.edit') }}">
            @csrf     
            @method('PUT')
             <input type="text" name="edit" id="" value="profil_edit" hidden>
             <div class="modal-content">
                <span class="close">&times;</span>
                <div class="row mb-3">
                    <div class="col-sm-3">
                        <h6 class="mb-0" id="firstname">Nom</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <input type="text" name ="firstname" id="firstname" class="form-control" value="{{old("firstname") ?? $user->firstName}}">
                        @error('firstame')
                             <span class="error-message" role="alert">
                                 <strong>{{ $message }}</strong>
                             </span>
                         @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-3">
                        <h6 class="mb-0" id="lastName">Prénom</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <input type="text" class="form-control" name="lastname" id="lastName" value="{{old("lastname") ?? $user->lastName}}">
                        @error('lastname')
                            <span class="error-message" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Sexe</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="kind" id="feminin" value="F" required >
                            <label class="form-check-label" for="feminin" value="F">Féminin</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="kind" id="masculin" value="M" required >
                            <label class="form-check-label" for="masculin" value='M'>Masculin</label>
                        </div>
                        @error('kind')
                            <span class="error-message" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-3">
                        <h6 class="mb-0" id="phone">Numéro</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <input type="text"name="phone" id="phone" class="form-control" value="{{old('phone') ?? $user->phone}}">
                        @error('phone')
                            <span class="error-message" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-3">
                        <h6 class="mb-0" id="email">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <input type="text" name="email" id="email" class="form-control" value="{{old('email') ?? $user->email}}">
                        @error('email')
                            <span class="error-message" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                       @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Niveau</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <select class="form-control" id="level" name="level">
                            <option selected>Choisir votre niveau d'etude</option>
                            <option value="Bachelier">Bachelier</option>
                            <option value="Etudiant">Etudiant</option>
                        </select>
                        @error('level')
                            <span class="error-message" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-9 text-secondary">
                        <input type = "submit" class="btn btn-primary px-4" value="Valider" >
                    </div>
                </div>
             </div>
          </form>
      </div>
    </section>

    
</div>
@endsection
@section('script')
<script>
  // Get the modal
  var modal = document.getElementById("modal");
  
  // Get the button that opens the modal
  var btn = document.getElementById("modal-btn");
  
  // Get the <span> element that closes the modal
  var span = document.getElementsByClassName("close")[0];
  
  // When the user clicks the button, open the modal 
  btn.onclick = function() {
    modal.style.display = "block";
  }
  
  // When the user clicks on <span> (x), close the modal
  span.onclick = function() {
    modal.style.display = "none";
  }
  
  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }
  </script>
@endsection