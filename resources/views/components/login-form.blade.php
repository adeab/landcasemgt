<form role="form" class="text-start" method="POST" action="{{ route('login') }}">
    @csrf
    <div class="input-group input-group-outline my-3">
      <input type="email" id="email" class="form-control" name="email" :value="old('email')" required placeholder="ইমেইল">
    </div>
    <div class="input-group input-group-outline mb-3">
      <input type="password" class="form-control" id="password" type="password" name="password" required autocomplete="current-password" placeholder="পাসওয়ার্ড">
    </div>
    <div class="form-check form-switch d-flex align-items-center mb-3">
      <input class="form-check-input" type="checkbox"  id="remember_me"  name="remember">
      <label class="form-check-label mb-0 ms-2" for="rememberMe">মনে রাখুন</label>
    </div>
    <div class="text-center">
      <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">প্রবেশ করুন</button>
    </div>
    @if (Route::has('password.request'))
    <p class="text-xs text-center">
      <a href="{{ route('password.request') }}" class="text-info text-gradient font-weight-bold">Forgot your password?</a>
    </p>
    @endif




  </form>
