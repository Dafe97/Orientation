   @if (Route::has('login'))
       @auth
           <div id="auth" >
                  {{-- <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                  @csrf

                  <a href="route('logout')"
                          onclick="event.preventDefault();
                                      this.closest('form').submit();">
                      {{ __('Log Out') }}
                  </a>
              </form> --}}
              <!-- user -->
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
          <div>
                <a class="btn btn-primary mx-2 btn-sm"  href="{{ route('login') }}"  >se connecter</a>
                @if (Route::has('register'))
                    <a class="btn btn-success btn-sm"  href="{{ route('register') }}" >s'inscrir</a>
                @endif
          </div>
       @endauth
   @endif
     
 
