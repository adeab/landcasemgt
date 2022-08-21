<div class="container">
    <div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Responsive Hover Table</h3>
        <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
                <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                <div class="input-group-append">
                    <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="card-body table-responsive p-0">
        <table class="table table-hover text-nowrap">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th></th>

                </tr>
            </thead>
            <tbody>
                @foreach($staffs as $staff)
                    <tr>
                        <td>{{ $staff->name }}</td>
                        <td>{{ $staff->email }}</td>
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

</div>
</div>
