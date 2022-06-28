{{-- <div class="d-flex flex-column justify-content-center align-items-center homepage-content">
    <div class="h-100">
        <h5 class="mb-1">
            মামলা বিস্তারিত
        </h5>

      </div>
      <br>

    <p class=""><span class="font-weight-bold">নামঃ </span>রাফায়েতুল কবীর</p>
    <p class=""><span class="font-weight-bold">মোবাইলঃ </span>০১৭XXXXXXXX</p>
    <p class=""><span class="font-weight-bold">ইমেইলঃ </span>demo@demo.com</p>
    <p class=""><span class="font-weight-bold">মামলা নংঃ </span>{{$case}}</p>

    <p class=""><span class="font-weight-bold">মামলা বিবরণ </span></p>
    <div class="container" style="padding-left: 9rem; padding-right: 9rem;">
    <p class="">ডেমো ডাটা ডেমো ডাটা ডেমো ডাটা ডেমো ডাটা ডেমো ডাটা ডেমো ডাটা ডেমো ডাটা ডেমো ডাটা ডেমো ডাটা ডেমো ডাটা ডেমো ডাটা ডেমো ডাটা ডেমো ডাটা ডেমো ডাটা ডেমো ডাটা ডেমো ডাটা ডেমো ডাটা ডেমো ডাটা ডেমো ডাটা ডেমো ডাটা ডেমো ডাটা ডেমো ডাটা ডেমো ডাটা ডেমো ডাটা ডেমো ডাটা ডেমো ডাটা ডেমো ডাটা ডেমো ডাটা ডেমো ডাটা ডেমো ডাটা ডেমো ডাটা ডেমো ডাটা </p>
    </div>

    <p class=""><span class="font-weight-bold">মামলা এর বর্তমান অবস্থাঃ </span>ULAO/ULSAO-এর নিকট রিপোর্ট এর জন্যে দেয়া হয়েছে</p>
    <p class=""><span class="font-weight-bold">পরবর্তী তারিখঃ </span>৫ জুলাই, ২০২২</p>
    <div class="text-center">
        <button type="input" class="btn bg-gradient-info w-100 my-4 mb-2"  wire:click="gotohome">ঠিক আছে</button>
    </div>

</div> --}}
<div class="d-flex flex-column justify-content-center align-items-center homepage-content-custom main-content">
<div class="card">
    <div class="card-body">
        @if($case)
        <h5>মামলা বিস্তারিত</h5>
        <hr>
        <div class="row">
            <div class="col-md d-flex justify-content-start">
                <p>মামলা নাম্বারঃ <strong class="outlined-text">{{$case->number}}</strong></p>
            </div>
            <div class="col-md d-flex justify-content-end">
                <p>মামলা ধরণঃ <strong class="outlined-text">{{$case->type->name}}</strong></p>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-6">
              <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                  <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                    <h6 class="text-white text-capitalize ps-3">বাদী</h6>
                  </div>
                </div>
                <div class="card-body px-0 pb-2">
                  <div class="table-responsive p-0">
                    <table class="table align-items-center justify-content-center mb-0">
                      <thead>
                        <tr>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">নং</th>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">বৃতান্ত</th>
                        </tr>
                      </thead>
                      <tbody>
                        @php
                            $number=1;
                        @endphp
                        @foreach ($case->people as $person)
                        @if ($person->involvedAs == 'plaintiff')
                            <tr>
                                <td>
                                <p class="text-sm text-center font-weight-bold mb-0">{{$number++}}</p>
                                </td>
                                <td class="">
                                    <div class="row col-12">
                                        <div class="col-md-6">
                                            <p class="text-sm"><strong>নামঃ </strong>{{$person->name}}</p>
                                            <p class="text-sm"><strong>পিতা/স্বামীঃ </strong>{{$person->guardian}}</p>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="text-sm"><strong>মোবাইলঃ </strong>{{$person->mobile?$person->mobile:'নাই'}}</p>
                                            <p class="text-sm"><strong>ইমেইলঃ </strong>{{$person->email?$person->email:'নাই'}}</p>
                                        </div>
                                    </div>
                                    <p class="text-sm"><strong>ঠিকানাঃ </strong>{{$person->address?$person->address:'নাই'}}</p>

                                </td>

                            </tr>
                        @endif


                        @endforeach

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                  <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                    <h6 class="text-white text-capitalize ps-3">বিবাদী</h6>
                  </div>
                </div>
                <div class="card-body px-0 pb-2">
                  <div class="table-responsive p-0">
                    <table class="table align-items-center justify-content-center mb-0">
                        <thead>
                          <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">নং</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">বৃতান্ত</th>
                          </tr>
                        </thead>
                        <tbody>
                          @php
                              $number=1;
                          @endphp
                          @foreach ($case->people as $person)
                          @if ($person->involvedAs == 'defendant')
                              <tr>
                                  <td>
                                  <p class="text-sm text-center font-weight-bold mb-0">{{$number++}}</p>
                                  </td>
                                  <td class="">
                                    <div class="row col-12">
                                        <div class="col-md-6">
                                            <p class="text-sm"><strong>নামঃ </strong>{{$person->name}}</p>
                                            <p class="text-sm"><strong>পিতা/স্বামীঃ </strong>{{$person->guardian}}</p>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="text-sm"><strong>মোবাইলঃ </strong>{{$person->mobile?$person->mobile:'নাই'}}</p>
                                            <p class="text-sm"><strong>ইমেইলঃ </strong>{{$person->email?$person->email:'নাই'}}</p>
                                        </div>
                                    </div>
                                    <p class="text-sm"><strong>ঠিকানাঃ </strong>{{$person->address?$person->address:'নাই'}}</p>

                                </td>

                              </tr>
                          @endif


                          @endforeach

                        </tbody>
                      </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <br>
          <p class=""><span class="font-weight-bold">অর্থবছরঃ </span>{{$case->fiscal_year}}</p>
          <p class=""><span class="font-weight-bold">মামলার শিরোনামঃ </span>{{$case->title?$case->title:'নাই'}}</p>
          <p class=""><span class="font-weight-bold">মামলার সংক্ষিপ্ত বিবরণঃ</p>
          <p class="container">{{$case->description?$case->description:'নাই'}}</p>
          <p class=""><span class="font-weight-bold">বর্তমান অবস্থাঃ</span>{{$case->status->title}}</p>
          <p class=""><span class="font-weight-bold">পরবর্তী তারিখঃ </span>{{date('Y-m-d', strtotime($case->next_date))}}</p>


        @else
        <div class="container text-center" style="padding:2rem;">
            <h2>দুঃখিত!</h2>
            <h4>আপনার দেয়া নাম্বার ও ধরণের সাথে মিলে এমন কোন মামলা পাওয়া যায় নি!</h4>
        </div>
        @endif
        <div class="text-center">
            <button type="input" class="btn bg-gradient-info w-100 my-4 mb-2"  wire:click="gotohome">ঠিক আছে</button>
        </div>

    </div>
</div>
<x-credit class="container text-center py-3"/>
</div>

