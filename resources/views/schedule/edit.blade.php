@extends('adminlayouts.app')
@isset($schedule)
    @section('title', 'Edit Doctor Schedule')
@else
    @section('title', 'Add Doctor Schedule')
@endisset
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                @isset($schedule)
                <h4 class="mb-sm-0 font-size-18">Edit Doctor Schedule</h4>
                @else
                <h4 class="mb-sm-0 font-size-18">Add New Doctor Schedule</h4>
                @endisset
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                        <li class="breadcrumb-item active">Doctor Schedule</li>
                        @isset($schedule)
                        <li class="breadcrumb-item active">Edit Doctor Schedule</li>
                        @else
                        <li class="breadcrumb-item active">Add New Doctor Schedule</li>
                        @endisset
                    </ol>
                </div>

            </div>
        </div>
    </div>
</div>
<div class="card p-4 rounded cShadow container-fluid">
    @isset($schedule)
    <form action="{{ route('update.schedule', $schedule->id) }}" method="post" enctype="multipart/form-data">
        @else
        <form action="{{route('insert.schedule')}}" method="post" enctype="multipart/form-data">
            @endisset
            @csrf
            <div class="row">
                <div class="form-group col-sm-6 mb-2">
                    <label for="">Day<span class="text-danger">*</span></label>
                    <div class="input-group">
                        <input type="text" required class="form-control" name="day" @isset($schedule)value="{{$schedule->day}}" @endisset placeholder="Enter Day">
                    </div>
                    @error('day')
                    <span class="invalid-feedback mt-0" @error('day')style="display: block" @enderror role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group col-sm-6 mb-2">
                    <label for=""> Doctor<span class="text-danger">*</span></label>
                    <div class="input-group">
                        <select required class="form-control" name="doctor_id">
                            <option value="">Select Doctor</option>
                            @foreach ($doctors as $doctor)
                                <option value="{{ $doctor->id }}" @isset($schedule) @if ($schedule->doctor_id == $doctor->id) selected @endif @endisset>{{ $doctor->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    @error('doctor_id')
                    <span class="invalid-feedback mt-0" @error('doctor_id') style="display: block" @enderror role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group col-sm-6 mb-2">
                    <label for="">Time<span class="text-danger">*</span></label>
                    <div class="input-group">
                        <input type="text" required class="form-control" name="time" @isset($schedule)value="{{$schedule->time}}" @endisset placeholder="Enter time">
                    </div>
                    @error('time')
                    <span class="invalid-feedback mt-0" @error('time')style="display: block" @enderror role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>


                <div class="form-group col-sm-6 mb-2 d-flex align-items-end">
                    <label for="switch4" data-on-label="Yes" data-off-label="No">
                        <label for="">Status: </label>
                        <div class="form-check form-switch form-switch-lg mb-3" dir="ltr">
                            <input class="form-check-input" name="status" type="checkbox" id="SwitchCheckSizelg" @if(isset($schedule) && $schedule->status == 1) checked="" @endif>
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
