<div class="small-box bg-info">
    <div class="inner">
      <h3>{{$numberofcases}}</h3>

      <p>মামলা সংখ্যা
      </p>
    </div>
    <div class="icon">
      <i class="ion ion-bag"></i>
    </div>

    <div class="small-box-footer">
        <select class="stat-filter-select" wire:model="filter" wire:change="updatenumber" class="" aria-label="Time Filter Options">
            <option value="4" selected>সর্বমোট</option>
            <option value="1">আজকের</option>
            <option value="2">এই মাসের</option>
            <option value="3">এই বছরের</option>
          </select>
    </div>
  </div>
