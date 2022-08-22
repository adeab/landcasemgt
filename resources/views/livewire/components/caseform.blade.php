<div class="container">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">নতুন মামলা নিবন্ধন</h3>
        </div>
        <div class="card-body">
            <form wire:submit.prevent="submit">
                <div class="row">
                    <div class="col-md-6">
                        <h6>বাদী বিস্তারিত</h6>
                        <hr>
                        @foreach($plaintiffs as $index=>$person)
                            @if($index>0)
                                <hr>
                                <div style="float: right;">
                                    <button class="btn dlt-btn" wire:click.prevent="rmvPlaintiff({{ $index }})"><i class="fa fa-times"></i></button>
                                </div>
                            @endif
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" placeholder="নাম" wire:model="plaintiffs.{{ $index }}.name"
                                            class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select class="form-select form-control" aria-label="Default select example">
                                            <option value="1">পিতা</option>
                                            <option value="2">স্বামী</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" placeholder="মোবাইল নাম্বার"
                                            wire:model="plaintiffs.{{ $index }}.mobile" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" placeholder="পিতা/স্বামী এর নাম"
                                            wire:model="plaintiffs.{{ $index }}.guardian" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" placeholder="ইমেইল (যদি প্রযোজ্য হয়)"
                                            wire:model="plaintiffs.{{ $index }}.email" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea placeholder="ঠিকানা (যদি প্রযোজ্য হয়)"
                                            wire:model="plaintiffs.{{ $index }}.address"
                                            class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        {{-- <div class="card-footer"> --}}
                        <button class="btn btn-primary w-100" type="button" wire:click.prevent="addPlaintiff">+ আরও
                            একজন</button>
                        {{-- </div> --}}
                    </div>
                    <div class="col-md-6">
                        {{-- defandent section --}}

                        <h6>বিবাদী বিস্তারিত</h6>
                        <hr>
                        @foreach($defendants as $index=>$person)
                            @if($index>0)
                                <hr>
                                <div style="float: right;">
                                    <button class="btn dlt-btn" wire:click.prevent="rmvDefendants({{ $index }})"><i class="fa fa-times"></i></button>
                                </div>
                            @endif
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" placeholder="নাম" wire:model="defendants.{{ $index }}.name"
                                            class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select class="form-select form-control" aria-label="Default select example">
                                            <option value="1">পিতা</option>
                                            <option value="2">স্বামী</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" placeholder="মোবাইল নাম্বার"
                                            wire:model="defendants.{{ $index }}.mobile" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" placeholder="পিতা/স্বামী এর নাম"
                                            wire:model="defendants.{{ $index }}.guardian" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" placeholder="ইমেইল (যদি প্রযোজ্য হয়)"
                                            wire:model="defendants.{{ $index }}.email" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea placeholder="ঠিকানা (যদি প্রযোজ্য হয়)"
                                            wire:model="defendants.{{ $index }}.address"
                                            class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>

                    @endforeach

                        <button class="btn btn-primary w-100" type="button" wire:click.prevent="addDefendants">+
                            আরও একজন</button>

                </div>
        </div>
        <br>

        <div class="">
            <h6>মামলা বিস্তারিত</h6>
            <hr>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" placeholder="মামলা নাম্বার" wire:model="number" class="form-control"
                            required>
                    </div>
                    @error('number')
                        <div class="alert alert-danger alert-dismissible text-white" role="alert">
                            <span class="text-sm">{{ $message }}</span>
                        </div>
                    @enderror

                    <div class="form-group">
                        <input type="text" placeholder="মামলা শিরোনাম (যদি প্রযোজ্য হয়)" wire:model="title"
                            class="form-control">
                    </div>

                    <div class="form-group">
                        <textarea rows="4" placeholder="মামলা বর্ণনা (যদি প্রযোজ্য হয়)" wire:model="description"
                            class="form-control"></textarea>
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="number" placeholder="অর্থবছর" wire:model="fiscal_year" class="form-control">
                    </div>
                    <div class="form-group">
                        <select class="form-select form-control" wire:model="case_type_id"
                            aria-label="Default select example">
                            <option selected>মামলা এর ধরণ নির্বাচন করুন</option>
                            @foreach($types as $type)
                                <option value="{{ $type->id }}">{{ $type->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    @error('case_type_id')
                        <div class="alert alert-danger alert-dismissible text-white" role="alert">
                            <span class="text-sm">মামলা এর ধরণটি ঠিকভাবে নির্বাচন করুন!</span>
                        </div>
                    @enderror

                    <div class="form-group">
                        <select class="form-select form-control" wire:model="case_status_id"
                            aria-label="Default select example">
                            <option selected>মামলা এর বর্তমান অবস্থা বাছুন</option>
                            @foreach($statuses as $status)
                                <option value="{{ $status->id }}">{{ $status->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    @error('case_status_id')
                        <div class="alert alert-danger alert-dismissible text-white" role="alert">
                            <span class="text-sm">মামলা এর বর্তমান অবস্থা ঠিকভাবে নির্বাচন করুন!</span>
                        </div>
                    @enderror
                    <div class="row">
                        <div class="col">
                            <label>মামলা এর পরবর্তী তারিখ</label>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <input type="date" placeholder="মামলা এর পরবর্তী তারিখ" wire:model="next_date"
                                    class="form-control" required>
                            </div>
                        </div>
                    </div>

                    @error('next_date')
                        <div class="alert alert-danger alert-dismissible text-white" role="alert">
                            <span class="text-sm">{{ $message }}</span>
                        </div>
                    @enderror

                </div>
            </div>
        </div>



        <button type="submit" class="btn btn-primary w-100">জমা দিন</button>

        </form>
    </div>
</div>
</div>
