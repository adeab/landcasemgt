<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
    <div class="container-fluid py-1 px-3">
      <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          @if (Request::path()!="/" AND !Str::contains(Request::path(), 'dashboard'))
          <livewire:components.navlogo />
          @endif
        <div class="ms-md-auto pe-md-3 d-flex align-items-center">
          <ul class="navbar-nav  justify-content-end">
            @auth
            <li class="nav-item d-flex align-items-center">
                @if (!Str::contains(Request::path(), 'dashboard'))
                <a href="{{ route('dashboard') }}" class="nav-link text-body font-weight-bold px-0" style="margin-left: 5px;">
                <i class="fa fa-tachometer  me-sm-1"></i>
                <span class="d-sm-inline d-none">ড্যাশবোর্ড</span>
                </a>
                @endif
            </li>
            @endauth
              <li class="nav-item d-flex align-items-center">
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
                  @else
                      <a href="{{ route('login') }}" class="nav-link text-body font-weight-bold px-0">
                        <i class="fa fa-sign-in me-sm-1"></i>
                        <span class="d-sm-inline d-none">লগ ইন</span>
                      </a>
                      @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="nav-link text-body font-weight-bold px-0" style="margin-left: 5px;">
                            <i class="fa fa-user me-sm-1"></i>
                            <span class="d-sm-inline d-none">Register</span>
                        </a>
                      @endif
                  @endauth
              </li>
            </ul>
        </div>
      </div>
    </div>
  </nav>
