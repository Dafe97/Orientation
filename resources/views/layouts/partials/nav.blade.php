
@if (Route::has('login'))
       @auth
          <div id="auth" >
                  <div class="dropdown">
                         <!-- Avatar -->
                         <a class="profil dropdown-toggle d-flex align-items-center "
                            href="#"
                            id="navbarDropdownMenuLink"
                            role="button"
                            data-bs-toggle="dropdown"
                            >
                               <img
                                    src="{{asset(Auth::user()->profil)}}"
                                    class="rounded-circle"
                                    height="40"
                                    alt="profil"
                                    loading="lazy"
                                />
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li>
                                    <a class="dropdown-item" href="{{route('profil',Auth::user()->id)}}">profile <i class="bi bi-person-workspace"></i></a>
                                </li>
                                <li><hr class="dropdown-divider"></li>
                                <li>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                    
                                        <a class="dropdown-item" href="route('logout')"
                                                onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                            <i class="bi bi-box-arrow-left"></i> {{ __('Déconnecter') }} 
                                        </a>
                                    </form>
                                </li>
                         </ul>
                  </div>
           </div>
        @else
            <nav id="navbar" class="navbar">
               <ul>
                    <li>
                        <a class="button-79"  href="{{ route('login') }}"  >se connecter</a>
                    </li>
                    @if (Route::has('register'))
                        <li>
                            <a class="button-79"  href="{{ route('register') }}" >inscription</a>
                        </li>
                    @endif
               </ul>
               <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
       @endauth
   @endif