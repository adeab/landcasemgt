<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="#" wire:click="gotopage('landing')">
        {{-- <img src="{{asset('images/bd-gov-logo.png')}}" > --}}
        {{-- <x-project-logo class="navbar-brand-img h-100" alt="main_logo"/> --}}
        <x-project-title class="leftbar-title font-weight-bold text-white"/>
        {{-- <span class="ms-1 "> </span> --}}
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white {{Str::contains(Request::path(), 'overview')? 'active bg-gradient-primary':''}} "  href="#" wire:click="gotopage('dashboard')">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">ড্যাশবোর্ড</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white {{Str::contains(Request::path(), 'case-management')? 'active bg-gradient-primary':''}} " href="#" wire:click="gotopage('casemgt')">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">
               কেইস</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="#">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">receipt_long</i>
            </div>
            <span class="nav-link-text ms-1">
                ডেমো মেনু আইটেম</span>
          </a>
        </li>



        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Account pages</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="#">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">person</i>
            </div>
            <span class="nav-link-text ms-1">পাসওয়ার্ড বদল</span>
          </a>
        </li>


      </ul>
    </div>
  </aside>
