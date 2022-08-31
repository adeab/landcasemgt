
<div  style="width: 100%">
<div class="card">
    <div class="card-body" >
        @if($case)
        <h5>মামলা বিস্তারিত</h5>
        <hr>
        <div class="row">
            <div class="">
                <p>মামলা নাম্বারঃ <strong class="outlined-text">{{$case->number}}</strong></p>
            </div>
            <div class="">
                <p>মামলা ধরণঃ <strong class="outlined-text">{{$case->type->name}}</strong></p>
            </div>
        </div>



        <div class="row">
            <div class="col-md-6">
                <div class="card card-primary">
                    <div class="card-header">
                        <h6>বাদী</h6>
                    </div>

                        <table class="table table-hover">
                            <thead>
                              <tr>
                                <th class="">নং</th>
                                <th class="">বৃতান্ত</th>
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
                                      <p class="">{{$number++}}</p>
                                      </td>
                                      <td style="text-align: left">
                                        <p class=""><strong>নামঃ </strong>{{$person->name}}</p>
                                        <p class=""><strong>পিতা/স্বামীঃ </strong>{{$person->guardian}}</p>

                                        <p class=""><strong>মোবাইলঃ </strong>{{$person->mobile?$person->mobile:'নাই'}}</p>
                                        <p class=""><strong>ইমেইলঃ </strong>{{$person->email?$person->email:'নাই'}}</p>
                                        <p class=""><strong>ঠিকানাঃ </strong>{{$person->address?$person->address:'নাই'}}</p>
                                      </td>
                                    </tr>
                              @endif
                              @endforeach
                            </tbody>
                          </table>

                </div>
            </div>
            <div class="col-md-6">
                <div class="card card-primary">
                    <div class="card-header">
                        <h6 class="">বিবাদী</h6>
                    </div>
                    {{-- <div class="card-body"> --}}
                        <table class="table table-hover">
                            <thead>
                              <tr>
                                <th class="">নং</th>
                                <th class="">বৃতান্ত</th>
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
                                      <p class="">{{$number++}}</p>
                                      </td>
                                      <td style="text-align: left">
                                        <p class="text-sm"><strong>নামঃ </strong>{{$person->name}}</p>
                                        <p class="text-sm"><strong>পিতা/স্বামীঃ </strong>{{$person->guardian}}</p>
                                        <p class="text-sm"><strong>মোবাইলঃ </strong>{{$person->mobile?$person->mobile:'নাই'}}</p>
                                        <p class="text-sm"><strong>ইমেইলঃ </strong>{{$person->email?$person->email:'নাই'}}</p>
                                        <p class="text-sm"><strong>ঠিকানাঃ </strong>{{$person->address?$person->address:'নাই'}}</p>

                                    </td>

                                  </tr>
                              @endif


                              @endforeach

                            </tbody>
                          </table>
                    {{-- </div> --}}
                </div>
            </div>
        </div>
        {{-- <div class="row">

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
          </div> --}}
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
            <button type="input" class="btn btn-primary w-100 "  wire:click="gotohome">ঠিক আছে</button>
        </div>

    </div>
</div>
<x-credit class="container text-center py-3"/>
</div>

