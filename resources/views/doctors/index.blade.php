@extends('adminlayouts.app')
@section('title')
    {{ ' Doctors' }}
@endsection
@section('content')
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Doctors</h4>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                    <li class="breadcrumb-item active">Doctors</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="w-100">
    <a href="{{route('add.doctor')}}" class="btn btn-primary">Add Doctor</a>
    <div class="row justify-content-center">
        <div class="col-md-12 mt-4">
            <div class="card p-4 rounded cShadow">
                <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                    <thead>
                        <tr>
                        <th>Name</th>
                        <th>Type</th>
                        <th>Image</th>
                        <th>Icon</th>
                        <th>Status</th>
                        <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('adminassets/libs/jquery/jquery.min.js')}}"></script>
<script src="{{ asset('adminassets/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('adminassets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script>
    $('#datatable').DataTable({
            responsive: true,
            scrollX: true,
            processing: true,
            serverSide: true,
            ordering: false,
            ajax: '/doctor',
            columns: [
                {data: 'name', name: 'name'},
                {data: 'type', name: 'type'},
                {
                    data: 'image',
                    name: 'image',
                    render: function(data, type, full, meta) {
                        return '<img src="' + data + '" alt="Doctor Image" class="img-fluid" style="max-width: 100px;">';
                    }
                },
                {
                    data: 'icon',
                    name: 'icon',
                    render: function(data, type, full, meta) {
                        return '<img src="' + data + '" alt="Doctor Icon" class="img-fluid" style="max-width: 50px;">';
                    }
                },
                {data: 'status', name: 'status'},
                {data: 'actions', name: 'actions'},
            ]
        });

    $('#datatable').on('click', '.delete-doctor', function () {
        var packageId = $(this).data('id');

        if (confirm('Are you sure you want to delete this doctor?')) {
            $.ajax({
                url: '/delete/doctor/' + packageId,
                type: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function (data) {
                    dataTable.ajax.reload();
                    showSnackbar('Doctor deleted successfully.');
                    setTimeout(function () {
                        location.reload(); // Reload the window after a short delay
                    }, 2000); // 2000 milliseconds (adjust as needed)
                },
                error: function (error) {
                    location.reload();
                }
            });
        }
    });

    function showSnackbar(message, type = 'success') {
        Snackbar.show({
            text: message,
            pos: 'bottom-center',
            backgroundColor: type === 'success' ? '#28a745' : '#dc3545',
            actionTextColor: '#fff'
        });
    }
</script>
@endsection
