@extends('adminlayouts.app')
@section('title')
    {{ 'Blogs' }}
@endsection
@section('content')
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Blogs</h4>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                    <li class="breadcrumb-item active">Blogs</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="w-100">
    <a href="{{route('add.blog')}}" class="btn btn-primary">Add Blog</a>
    <div class="row justify-content-center">
        <div class="col-md-12 mt-4">
            <div class="card p-4 rounded cShadow">
                <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                    <thead>
                        <tr>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Content</th>
                        <th>Slug</th>
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
            ajax: '/blog',
            columns: [
                {data: 'name', name: 'name'},
                {
                    data: 'image',
                    name: 'image',
                    render: function(data, type, full, meta) {
                        return '<img src="' + data + '" alt="Doctor Image" class="img-fluid" style="max-width: 100px;">';
                    }
                },
                {data: 'content', name: 'content'},
                {data: 'slug', name: 'slug'},
                {data: 'status', name: 'status'},
                {data: 'actions', name: 'actions'},
            ]
        });

    $('#datatable').on('click', '.delete-blog', function () {
        var packageId = $(this).data('id');

        if (confirm('Are you sure you want to delete this blog?')) {
            $.ajax({
                url: '/delete/blog/' + packageId,
                type: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function (data) {
                    dataTable.ajax.reload();
                    showSnackbar('Blog deleted successfully.');
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
