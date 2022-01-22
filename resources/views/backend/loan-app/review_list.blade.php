@extends("backend.layout.master")

@section("title", "Dashboard")

@push("styles")
    <link rel="stylesheet" href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css"/>
@endpush

@section("contents")

    <div class="card card-cascade narrower">
        <div class="view view-cascade gradient-card-header blue-gradient">
            <h3>Review List</h3>
        </div>

        <div class="card-body card-body-cascade text-center table-responsive">
            <table id="myTable">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Applicant Name</th>
                    <th>Date of Birth</th>
                    <th>Branch</th>
                    <th>Application Code</th>
                    <th>Staff Name</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($datas as $data)
                    <tr>
                        <td>{{$loop->index + 1}}</td>
                        <td>{{$data->name_en}}</td>
                        <td>{{date("d-m-Y", strtotime($data->dob))}}</td>
                        <td>{{$data->branch}}</td>
                        <td>{{$data->application_code}}</td>
                        <td>{{$data->staff_name}}</td>
                        <td>
                            @if($data->status == 0) Rejected @elseif ($data->status == 1) Pending @else Approved @endif
                        </td>
                        <td>
                            <div class="btn-group">
                                <a href="{{route("loan.review.show", $data->id)}}" class="btn btn-sm btn-success">View</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection

@push("scripts")
    <script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready( function () {
            $('#myTable').DataTable();
        });
    </script>
@endpush
