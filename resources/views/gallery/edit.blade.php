@extends('adminlayouts.app')
@isset($gallery)
    @section('title', 'Edit Gallery')
@else
    @section('title', 'Add Gallery')
@endisset
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                @isset($gallery)
                <h4 class="mb-sm-0 font-size-18">Edit Gallery</h4>
                @else
                <h4 class="mb-sm-0 font-size-18">Add New Gallery</h4>
                @endisset
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                        <li class="breadcrumb-item active">Gallery</li>
                        @isset($gallery)
                        <li class="breadcrumb-item active">Edit Gallery</li>
                        @else
                        <li class="breadcrumb-item active">Add New Gallery</li>
                        @endisset
                    </ol>
                </div>

            </div>
        </div>
    </div>
</div>
<div class="card p-4 rounded cShadow container-fluid">
    @isset($gallery)
    <form action="{{ route('update.gallery', $gallery->id) }}" method="post" enctype="multipart/form-data">
        @else
        <form action="{{route('insert.gallery')}}" method="post" enctype="multipart/form-data">
            @endisset
            @csrf
            <div class="row">
                <div class="form-group col-sm-6 mb-2">
                    <label for="">Name<span class="text-danger">*</span></label>
                    <div class="input-group">
                        <input type="text" required class="form-control" name="name" @isset($gallery)value="{{$gallery->name}}" @endisset placeholder="Enter Name">
                    </div>
                    @error('name')
                    <span class="invalid-feedback mt-0" @error('name')style="display: block" @enderror role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>


                <div class="form-group col-sm-6 mb-2">
                    <label for="image">Image</label>
                    <input type="file" class="form-control" name="image" id="image">
                    @isset($gallery)
                        <img src="{{ asset($gallery->image) }}" alt="Existing Icon" style="max-width: 100px;">

                    @endisset
                </div>



                <div class="form-group col-sm-6 mb-2 d-flex align-items-end">
                    <label for="switch4" data-on-label="Yes" data-off-label="No">
                        <label for="">Status: </label>
                        <div class="form-check form-switch form-switch-lg mb-3" dir="ltr">
                            <input class="form-check-input" name="status" type="checkbox" id="SwitchCheckSizelg" @if(isset($gallery) && $gallery->status == 1) checked="" @endif>
                        </div>
                    </label>
                </div>


                <div class="form-group col-sm-12 mb-2">
                    <input type="submit" value="Save" class="btn btn-primary btn-sm">
                </div>
            </div>
        </form>
</div>
@endsection
