   @if (Route::has('login'))
       @auth
           <div id="auth" >
                  <div >
                         <!-- Avatar -->
                         <a
                         class="dropdown dropdown-toggle d-flex align-items-center hidden-arrow"
                         href="#"
                         id="navbarDropdown"
                         data-toggle="dropdown" 
                         aria-haspopup="true" 
                         aria-expanded="false" 
                         role="button"
                         v-pre>
                         <img
                             src="https://mdbootstrap.com/img/new/avatars/2.jpg"
                             class="rounded-circle"
                             height="25"
                             alt=""
                             loading="lazy"
                         />
                         </a>
                         <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown"  >
                                <li>
                                    <a class="dropdown-item" href="#">My profile</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Settings</a>
                                </li>
                                <li>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                    
                                        <a class="dropdown-item" href="route('logout')"
                                                onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                            {{ __('Log Out') }}
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
                        <a class="nav-link scrollto  button-79"  href="{{ route('login') }}"  >se connecter</a>
                    </li>
                    @if (Route::has('register'))
                        <li>
                            <a class="nav-link scrollto button-79"  href="{{ route('register') }}" >s'inscrir</a>
                        </li>
                    @endif
               </ul>
               <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
      
       @endauth
   @endif
     
 
   {{-- <nav id="navbar" class="navbar">
    <ul>
      <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
      <li><a class="nav-link scrollto" href="#about">About</a></li>
      <li><a class="nav-link scrollto" href="#services">Services</a></li>
      <li><a class="nav-link scrollto" href="#portfolio">Portfolio</a></li>
      <li><a class="nav-link scrollto" href="#team">Team</a></li>
    </ul>
    <i class="bi bi-list mobile-nav-toggle"></i>
  </nav> --}}