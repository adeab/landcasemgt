<div class="container">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">নতুন স্টাফ অ্যাকাউন্ট খুলুনঃ</h3>
        </div>


        <form wire:submit.prevent="submit">
            @if($isSuccess)
                <div class="alert alert-success alert-dismissible fade show fade show text-white success-message"
                    role="alert">
                    <span class="text-sm">
                        নতুন স্টাফ অ্যাকাউন্ট সফলভাবে সম্পন্ন হয়েছে!
                        <a href="{{route('stafflist')}}">স্টাফ তালিকা</a>
                    </span>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>

                </div>

            @endif
            <div class="card-body">
                <div class="form-group">
                    <label for="name">নাম</label>
                    <input type="text" wire:model="name" class="form-control" id="name" placeholder="স্টাফ এর নাম দিন">
                </div>
                @error('name')
                    <div class="alert alert-danger alert-dismissible fade show text-white" role="alert">
                        <span class="text-sm">{{ $message }}</span>

                    </div>
                @enderror
                <div class="form-group">
                    <label for="email">ইমেইল</label>
                    <input type="email" wire:model="email" class="form-control" id="email" placeholder="ইমেইল দিন">
                </div>
                @error('email')
                    <div class="alert alert-danger alert-dismissible fade show text-white" role="alert">
                        <span class="text-sm">{{ $message }}</span>

                    </div>
                @enderror

                <div class="form-group">
                    <label for="password">পাসওয়ার্ড</label>
                    <input type="password" wire:model="password" class="form-control" id="password"
                        placeholder="পাসওয়ার্ড দিন">
                </div>
                @error('password')
                    <div class="alert alert-danger alert-dismissible fade show text-white" role="alert">
                        <span class="text-sm">{{ $message }}</span>

                    </div>
                @enderror

                <div class="form-group">
                    <label for="confirm_password">পাসওয়ার্ড পুনরায়</label>
                    <input type="password" wire:model="confirm_password" class="form-control" id="confirm_password"
                        placeholder="পাসওয়ার্ড পুনরায় দিন">
                </div>
                @error('confirm_password')
                    <div class="alert alert-danger alert-dismissible fade show text-white" role="alert">
                        <span class="text-sm">{{ $message }}</span>

                    </div>
                @enderror


            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">জমা দিন</button>
            </div>
        </form>
    </div>

</div>
