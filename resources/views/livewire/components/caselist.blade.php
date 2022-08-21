<div class="row">
    <div class="col-md-4">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">ফিল্টার</h3>
            </div>
            <div class="card-body">
                <strong>মামলার ধরণ দিয়ে বাছুনঃ</strong>
                @foreach($types as $type)
                    <div class="form-check filter-option">
                        <input class="form-check-input" wire:model='selected_types.{{ $loop->index }}' type="checkbox"
                            value="{{ $type->id }}" id="{{ $type->id }}">
                        <label class="form-check-label" for="{{ $type->id }}">
                            {{ $type->name }}
                        </label>
                    </div>
                @endforeach
            </div>

        </div>
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">ফিল্টার</h3>
            </div>
            <div class="card-body">
                <strong>মামলার অবস্থা দিয়ে বাছুনঃ</strong>
                @foreach($statuses as $status)
                    <div class="form-check  filter-option">
                        <input class="form-check-input" wire:model='selected_statuses.{{ $loop->index }}'
                            type="checkbox" value="{{ $status->id }}" id="{{ $status->id }}">
                        <label class="form-check-label" for="{{ $status->id }}">
                            {{ $status->title }}
                        </label>
                    </div>
                @endforeach
            </div>
            {{-- <button wire:click="showVal()">Test</button> --}}
        </div>
    </div>

    <div class="col-md-8">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">মামলা তালিকা</h3>
                <div class="card-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                        <input type="text" name="table_search" class="form-control float-right" wire:model="search"
                            placeholder="Search">

                    </div>
                </div>
            </div>

            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                    <thead>
                        <tr>
                            <th>মামলা নাম্বার</th>
                            <th>মামলা ধরণ</th>
                            <th>বর্তমান অবস্থা</th>
                            <th>পরবর্তী তারিখ</th>
                            <th></th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($allcases as $case)
                            <tr wire:click="gotocase({{ $case->number }},{{ $case->case_type_id }})">
                                <td>
                                    {{ $case->number }}<br>
                                    <small>{{ $case->title }}</small>
                                </td>
                                <td>{{ $case->type->name }}</td>
                                <td>{{ $case->status->title }}</td>
                                <td>{{ date('Y-m-d', strtotime($case->next_date)) }}</td>
                                <td>
                                    <button class="btn btn-sm vw-btn"><i class="fa fa-eye"></i></button>
                                    <button class="btn btn-sm edit-btn"><i class="fa fa-edit"></i></button>
                                    <button class="btn btn-sm dlt-btn"><i class="fa fa-trash"></i></button>
                                </td>

                            </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>
            {{-- <div class="card-footer">
        {{ $allcases->links() }}
        </div> --}}

    </div>
</div>
</div>
