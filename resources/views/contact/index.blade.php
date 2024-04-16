@extends('adminlayouts.app')
@section('title', 'Contact requests')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Contact requests</h4>
                {{--                {{ $errors }}--}}
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                        <li class="breadcrumb-item active">Contact requests</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <div class="w-100">
        <div class="row justify-content-center">
            <div class="col-md-12 mt-4">
                <div class="card p-4 rounded cShadow">
                    <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Message</th>
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
            processing: true,
            serverSide: true,
            ajax: '/contacts',
            columns: [
                {data: 'name', name: 'name'},
                {data: 'email', name: 'email'},
                {data: 'message', name: 'message'},
            ]
        });

    </script>
@endsection
