
    <div class="card ">
      <div class="card-header">
        <h4 class="font-weight-bolder">নতুন কেইস নিবন্ধন</h4>
        <p class="mb-0">নতুন কেইস নিবন্ধন করতে ফর্মটি পূরণ করুনঃ
        </p>
      </div>
      <div class="card-body">
        <form wire:submit.prevent="submit" role="form">
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
            <select class="form-select form-control" wire:model="selected_type" aria-label="Default select example">
                <option selected>কেইস এর ধরণ নির্বাচন করুন</option>
                @foreach ($types as $type)
                    <option value="{{$type->id}}">{{$type->name}}</option>
                @endforeach
            </select>
          </div>
          @error('selected_type')
            <div class="alert alert-danger alert-dismissible text-white" role="alert">
                <span class="text-sm">কেইস এর ধরণটি ঠিকভাবে নির্বাচন করুন!</span>
            </div>
          @enderror

          <div class="input-group input-group-outline mb-3">
            <textarea placeholder="কেইস বর্ণনা (যদি প্রযোজ্য হয়)" wire:model="description" class="form-control"></textarea>
          </div>

          <div class="text-center">
            <button type="submit" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">জমা দিন</button>
            <button type="button" class="btn btn-lg bg-gradient-secondary btn-lg w-100 mt-4 mb-0" wire:click="$emitUp('switchMode')">বাতিল</button>
          </div>
        </form>
      </div>

    </div>

