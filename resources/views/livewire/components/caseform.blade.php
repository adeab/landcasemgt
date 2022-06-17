<span>
    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
        <div class="row">
            <div class="col-6 d-flex align-items-center">
                <h6 class="text-white text-capitalize ps-3">নতুন কেইস নিবন্ধন</h6>
            </div>

        </div>

    </div>
    <br>


    <form wire:submit.prevent="submit" role="form">
    {{-- plaintiff section  --}}
    <div class="row">
        <div class="col-md-6">
            <div class="card ">
                <div class="card-body">
                    <h6>বাদী বিস্তারিত</h6>
                    <hr>
                    @foreach ($plaintiffs as $index=>$person)
                    @if ($index>0)
                    <div class="col-1" style="float: right;">
                      <button class="btn bg-gradient-danger w-100 mb-0 toast-btn" type="button" wire:click.prevent="rmvPlaintiff({{$index}})">X</button>
                    </div>
                    <br>
                    <br>
                    @endif
                    <div class="row">
                      <div class="col-md-6">
                        <div class="input-group input-group-outline mb-3">
                          <input type="text" placeholder="নাম" wire:model="plaintiffs.{{$index}}.name" class="form-control" required>
                        </div>

                          <div class="input-group input-group-outline mb-3">
                            <input type="email" placeholder="ইমেইল" wire:model="plaintiffs.{{$index}}.email" class="form-control" required>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="input-group input-group-outline mb-3">
                          <input type="text" placeholder="মোবাইল নাম্বার" wire:model="plaintiffs.{{$index}}.mobile" class="form-control" required>
                        </div>
                        <div class="input-group input-group-outline mb-3">
                            <textarea placeholder="ঠিকানা (যদি প্রযোজ্য হয়)" wire:model="plaintiffs.{{$index}}.address" class="form-control"></textarea>
                          </div>
                      </div>
                    </div>

                    @endforeach
                    <div class="col-lg-3 col-sm-6 col-12 mt-sm-0 mt-2">
                      <button class="btn bg-gradient-info w-100 mb-0 toast-btn" type="button" wire:click.prevent="addPlaintiff">+ আরও একজন</button>
                    </div>
                </div>
              </div>

        </div>
        <div class="col-md-6">
            {{-- defandent section --}}
            <div class="card ">
                <div class="card-body">
                <h6>বিবাদী বিস্তারিত</h6>
                <hr>
                @foreach ($defendants as $index=>$person)
                @if ($index>0)
                <div class="col-1" style="float: right;">
                    <button class="btn bg-gradient-danger w-100 mb-0 toast-btn" type="button" wire:click.prevent="rmvDefendants({{$index}})">X</button>
                </div>
                <br>
                <br>
                @endif
                <div class="row">
                    <div class="col-md-6">
                    <div class="input-group input-group-outline mb-3">
                        <input type="text" placeholder="নাম" wire:model="defendants.{{$index}}.name" class="form-control" required>
                    </div>
                    <div class="input-group input-group-outline mb-3">
                        <input type="email" placeholder="ইমেইল" wire:model="defendants.{{$index}}.email" class="form-control" required>
                    </div>

                    </div>
                    <div class="col-md-6">
                    <div class="input-group input-group-outline mb-3">
                        <input type="text" placeholder="মোবাইল নাম্বার" wire:model="defendants.{{$index}}.mobile" class="form-control" required>
                    </div>
                    <div class="input-group input-group-outline mb-3">
                        <textarea placeholder="ঠিকানা (যদি প্রযোজ্য হয়)" wire:model="defendants.{{$index}}.address" class="form-control"></textarea>
                    </div>
                    </div>
                </div>

                @endforeach
                <div class="col-lg-3 col-sm-6 col-12 mt-sm-0 mt-2">
                    <button class="btn bg-gradient-info w-100 mb-0 toast-btn" type="button" wire:click.prevent="addDefendants">+ আরও একজন</button>
                </div>
                </div>
            </div>
        </div>
    </div>
    <br>
{{--
    <br>

    <br> --}}
    {{-- case section --}}
    <div class="card ">
        <div class="card-body">
          <h6>কেইস বিস্তারিত</h6>
          <hr>
          <div class="row">
            <div class="col-md-6">
              <div class="input-group input-group-outline mb-3">
                <input type="text" placeholder="কেইস নাম্বার" wire:model="number" class="form-control" required>
              </div>
              @error('number')
                <div class="alert alert-danger alert-dismissible text-white" role="alert">
                    <span class="text-sm">{{$message}}</span>
                    {{-- <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button> --}}
                </div>
                @enderror

                <div class="input-group input-group-outline mb-3">
                    <input type="text" placeholder="কেইস শিরোনাম (যদি প্রযোজ্য হয়)" wire:model="title" class="form-control">
                </div>

                <div class="input-group input-group-outline mb-3">
                    <textarea rows="4" placeholder="কেইস বর্ণনা (যদি প্রযোজ্য হয়)" wire:model="description" class="form-control"></textarea>
                </div>

            </div>
            <div class="col-md-6">
                <div class="input-group input-group-outline mb-3">
                    <input type="number" placeholder="অর্থবছর" wire:model="fiscal_year" class="form-control">
                </div>
              <div class="input-group input-group-outline mb-3">
                <select class="form-select form-control" wire:model="case_type_id" aria-label="Default select example">
                    <option selected>কেইস এর ধরণ নির্বাচন করুন</option>
                    @foreach ($types as $type)
                        <option value="{{$type->id}}">{{$type->name}}</option>
                    @endforeach
                </select>
              </div>
              @error('case_type_id')
                <div class="alert alert-danger alert-dismissible text-white" role="alert">
                    <span class="text-sm">কেইস এর ধরণটি ঠিকভাবে নির্বাচন করুন!</span>
                </div>
              @enderror

              <div class="input-group input-group-outline mb-3">
                <select class="form-select form-control" wire:model="case_status_id" aria-label="Default select example">
                    <option selected>কেইস এর বর্তমান অবস্থা বাছুন</option>
                    @foreach ($statuses as $status)
                        <option value="{{$status->id}}">{{$status->title}}</option>
                    @endforeach
                </select>
              </div>
              @error('case_status_id')
                <div class="alert alert-danger alert-dismissible text-white" role="alert">
                    <span class="text-sm">কেইস এর বর্তমান অবস্থা ঠিকভাবে নির্বাচন করুন!</span>
                </div>
              @enderror
              <div class="row">
                <div class="col">
                    <label>কেইস এর পরবর্তী তারিখ</label>
                </div>
                <div class="col">
                    <div class="input-group input-group-outline mb-3">
                        <input type="date" placeholder="কেইস এর পরবর্তী তারিখ" wire:model="next_date" class="form-control" required>
                      </div>
                </div>
              </div>

              @error('next_date')
                <div class="alert alert-danger alert-dismissible text-white" role="alert">
                    <span class="text-sm">{{$message}}</span>
                </div>
                @enderror

            </div>
          </div>






          <div class="row">
            <div class="col-md-6">

            </div>
            <div class="col-md-6">


            </div>

          </div>



      </div>

    </div>
    <div class="text-center">
        <button type="submit" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">জমা দিন</button>
        <button type="button" class="btn btn-lg bg-gradient-secondary btn-lg w-100 mt-4 mb-0" wire:click="$emitUp('switchMode')">বাতিল</button>
      </div>
    </form>
</span>
