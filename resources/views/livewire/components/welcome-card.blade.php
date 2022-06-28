
<div class="card homepage-card" >
    <div class="card-header">
        <div class="d-flex">
            <button class="btn {{$showForm?'bg-gradient-info':'bg-gradient-light'}}  px-3 mb-2" wire:click="$toggle('showForm')">নাগরিক কর্ণার</button>
            @guest
            <button class="btn {{!$showForm?'bg-gradient-info':'bg-gradient-light'}}  px-3 mb-2 ms-2" wire:click="$toggle('showForm')">অফিস কর্ণার</button>
            @endguest


          </div>
    </div>
    <div class="card-body">
        @if ($showForm)
        <p class="sub-title">আপনার মামলা এর নাম্বার দিয়ে বর্তমান অবস্থা দেখুন</p>
            <form role="form" class="text-start" wire:submit.prevent="getCase">
                <div class="row">
                    <div class="col-md-6">
                    <div class="input-group input-group-outline mb-3">
                        <input type="text" placeholder="মামলা নাম্বার" wire:model="case_number" class="form-control" required>
                    </div>

                    </div>
                    <div class="col-md-6">
                    <div class="input-group input-group-outline mb-3">
                        <select class="form-select form-control" wire:model="case_type_id" aria-label="Default select example">
                            <option selected>মামলা এর ধরণ</option>
                            @foreach ($types as $type)
                                <option value="{{$type->id}}">{{$type->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    </div>
                </div>
                <div class="text-center">
                <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">অবস্থা দেখুন</button>
                </div>
            </form>
        @else
            <p class="sub-title">আপনার তথ্য দিয়ে প্রবেশ করুন</p>
            @livewire('components.login')
        @endif

    </div>
</div>
