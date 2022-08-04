    <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary header-div pt-4 pb-3">
                <div class="row">
                    <div class="col-6 d-flex align-items-center">
                        <h6 class="text-white text-capitalize ps-3">মামলা তালিকা</h6>
                    </div>

                  </div>

              </div>

            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0 table-hover">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">মামলা নাম্বার</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">মামলা ধরণ</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">বর্তমান অবস্থা</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">পরবর্তী তারিখ</th>
                      {{-- <th class="text-secondary opacity-7"></th> --}}
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($allcases as $case)
                    <tr class="clickable-row" wire:click="gotocase({{$case->number}},{{$case->case_type_id}})">
                        <td>
                          <div class="d-flex px-2 py-1">

                            <div class="d-flex flex-column justify-content-center">
                              <h6 class="mb-0 text-sm">{{$case->number}}</h6>
                              <p class="text-xs text-secondary mb-0">{{$case->title}}</p>
                            </div>
                          </div>
                        </td>
                        <td>
                          <p class="text-xs font-weight-bold mb-0">{{$case->type->name}}</p>
                          {{-- <p class="text-xs text-secondary mb-0">Organization</p> --}}
                        </td>
                        <td class="align-middle text-center text-sm">
                            <p class="text-xs font-weight-bold mb-0">{{$case->status->title}}</p>
                        </td>
                        <td class="align-middle text-center">
                          <span class="text-secondary text-xs font-weight-bold">{{date('Y-m-d', strtotime($case->next_date))}}</span>
                        </td>
                        {{-- <td class="align-middle">
                          <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit">
                            Edit
                          </a>
                        </td> --}}
                      </tr>
                    @endforeach

                  </tbody>
                </table>

              </div>
            </div>
          </div>
        </div>
        {{ $allcases->links() }}
      </div>

