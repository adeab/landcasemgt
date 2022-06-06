<div class="d-flex flex-column justify-content-center align-items-center homepage-content">
    <img src="{{asset('images/bd-gov-logo.png')}}" class="bd-gov-logo">
    <h1 class="logo-title">ভূমি মন্ত্রণালয়</h1>
    <p class="sub-title">আপনার কেইস এর নাম্বার দিয়ে বর্তমান অবস্থা দেখুন</p>
    <form role="form" class="text-start" wire:submit.prevent="getCase">
        <div class="input-group input-group-outline my-3">
          <input type="text" id="case-number" class="form-control" wire:model="case_number" name="case-number" required placeholder="কেইস নাম্বার">
        </div>

        <div class="text-center">
          <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">অবস্থা দেখুন</button>
        </div>

      </form>

</div>
