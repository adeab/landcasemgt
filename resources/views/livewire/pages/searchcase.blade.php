<div class="container">
    <p class="sub-title">আপনার মামলা এর নাম্বার দিয়ে বর্তমান অবস্থা দেখুন</p>
    <form role="form" class="text-start" wire:submit.prevent="getCase">
        <div class="row">
            {{-- <div class="col-md-6"> --}}
                <div class="input-group input-group-outline mb-3">
                    <input type="text" placeholder="মামলা নাম্বার" wire:model="case_number" class="form-control"
                        required>
                </div>

            {{-- </div> --}}
            {{-- <div class="col-md-6"> --}}
                <div class="input-group input-group-outline mb-3">
                    <select class="form-select form-control" wire:model="case_type_id"
                        aria-label="Default select example">
                        <option selected>মামলা এর ধরণ</option>
                        @foreach($types as $type)
                            <option value="{{ $type->id }}">{{ $type->name }}</option>
                        @endforeach
                    </select>
                </div>

            {{-- </div> --}}
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary w-100 my-4 mb-2">অবস্থা দেখুন</button>
        </div>
    </form>
    <a href="{{url('/')}}" class="btn btn-danger" style="width: 100%">বাতিল</a>
</div>
