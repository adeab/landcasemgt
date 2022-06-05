<x-guest-layout>
    <main class="main-content  mt-0">
        <div class="page-header align-items-start min-vh-100" style="background-image: url('https://img.wallpapersafari.com/desktop/1920/1080/29/96/E5iSkn.jpg');">
          <span class="mask bg-gradient-dark opacity-6"></span>
          <div class="container my-auto">
            <div class="row">
              <div class="col-lg-4 col-md-8 col-12 mx-auto">
                <div class="card z-index-0 fadeIn3 fadeInBottom">
                  <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                      <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Sign in</h4>

                    </div>
                  </div>
                  <div class="card-body">
                    <!-- Session Status -->
                    <x-auth-session-status class="mb-4" :status="session('status')" />

                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                    <form role="form" class="text-start" method="POST" action="{{ route('login') }}">
                      @csrf
                      <div class="input-group input-group-outline my-3">
                        <input type="email" id="email" class="form-control" name="email" :value="old('email')" required placeholder="Email">
                      </div>
                      <div class="input-group input-group-outline mb-3">
                        <input type="password" class="form-control" id="password" type="password" name="password" required autocomplete="current-password" placeholder="Password">
                      </div>
                      <div class="form-check form-switch d-flex align-items-center mb-3">
                        <input class="form-check-input" type="checkbox"  id="remember_me"  name="remember">
                        <label class="form-check-label mb-0 ms-2" for="rememberMe">Remember me</label>
                      </div>
                      <div class="text-center">
                        <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">Sign in</button>
                      </div>
                      @if (Route::has('password.request'))
                      <p class="text-xs text-center">
                        <a href="{{ route('password.request') }}" class="text-info text-gradient font-weight-bold">Forgot your password?</a>
                      </p>
                      @endif



                      <p class="mt-4 text-sm text-center">
                        Don't have an account?
                        <a href="../pages/sign-up.html" class="text-primary text-gradient font-weight-bold">Sign up</a>
                      </p>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </main>
</x-guest-layout>

{{-- old part starts here --}}
{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ml-3">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}
