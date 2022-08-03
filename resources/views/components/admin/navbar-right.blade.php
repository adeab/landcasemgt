<ul class="navbar-nav ml-auto">
    <li class="nav-item">
        @auth
                      <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-dropdown-link :href="route('logout')" class="nav-link text-body font-weight-bold px-0"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                                            <i class="fa fa-power-off  me-sm-1"></i>
                            {{ __('লগ আউট') }}
                            {{-- <span class="d-sm-inline d-none">Log Out</span> --}}
                        </x-dropdown-link>
                    </form>
                    @endauth
    </li>
  </ul>
