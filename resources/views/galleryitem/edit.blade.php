@extends('adminlayouts.app')
@isset($galleryitem)
    @section('title', 'Edit Gallery Item')
@else
    @section('title', 'Add Gallery Item')
@endisset
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                @isset($galleryitem)
                <h4 class="mb-sm-0 font-size-18">Edit Gallery Item</h4>
                @else
                <h4 class="mb-sm-0 font-size-18">Add New Gallery Item</h4>
                @endisset
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                        <li class="breadcrumb-item active">Gallery Item</li>
                        @isset($galleryitem)
                        <li class="breadcrumb-item active">Edit Gallery Item</li>
                        @else
                        <li class="breadcrumb-item active">Add New GalleryItem</li>
                        @endisset
                    </ol>
                </div>

            </div>
        </div>
    </div>
</div>
<div class="card p-4 rounded cShadow container-fluid">
    @isset($galleryitem)
    <form action="{{ route('update.galleryitem', $galleryitem->id) }}" method="post" enctype="multipart/form-data">
        @else
        <form action="{{route('insert.galleryitem')}}" method="post" enctype="multipart/form-data">
            @endisset
            @csrf
            <div class="row">
                <div class="form-group col-sm-6 mb-2">
                    <label for=""> Gallery<span class="text-danger">*</span></label>
                    <div class="input-group">
                        <select required class="form-control" name="gallery_id">
                            <option value="">Select Gallery</option>
                            @foreach ($galleries as $gallery)
                                <option value="{{ $gallery->id }}" @isset($galleryitem) @if ($galleryitem->gallery_id == $gallery->id) selected @endif @endisset>{{ $gallery->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    @error('gallery_id')
                    <span class="invalid-feedback mt-0" @error('gallery_id') style="display: block" @enderror role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>


                <div class="form-group col-sm-6 mb-2">
                    <label for="image">Image</label>
                    <input type="file" class="form-control" name="url" id="url">
                    @isset($galleryitem)
                        <img src="{{ asset($galleryitem->url) }}" alt="Existing Icon" style="max-width: 100px;">

                    @endisset
                </div>





                <div class="form-group col-sm-12 mb-2">
                    <input type="submit" value="Save" class="btn btn-primary btn-sm">
                </div>
            </div>
        </form>
</div>
@endsection
