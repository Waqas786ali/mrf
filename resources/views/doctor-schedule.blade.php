
@extends('layouts.app')
<style>
    .card {
        overflow: hidden;
        transition: all .5s ease;
    }

    .overlay {
        transform: translateY(-100%);
        transition: all .5s ease;
    }

    .card:hover .overlay {
        transform: translateY(0%);
        transition: all .5s ease;
    }
    span{
        font-size: 12px;
    }

</style>
@section('content')


    <div class="container mx-auto px-5 lg:px-20 xl:px-32 py-16">
        <div class="grid justify-center grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-5 items-center">
            <!-- Card 1 -->
            @foreach($doctors as $doctor)
            <div class="card w-full relative">
                <div>
                    <img class="h-[300px] w-[300px] object-cover rounded-t-xl" src="{{ asset($doctor->image)}}" alt="{{ $doctor->name }}">
                </div>
                <div class="relative -translate-y-10">
                    <div class=" flex justify-center">
                        <div class="bg-[#B11515] h-[80px] w-[80px] flex justify-center items-center rounded-full">
                            <img class="" src="{{ asset($doctor->icon)}}" alt="{{ $doctor->name }}">
                        </div>                    </div>
                    <div class="pt-2 text-center">
                        <h4 class="text-lg font-semibold">{{ $doctor->name }}</h4>
                        <p class="text-[#B11515] text-sm">{{ $doctor->type }}</p>
                    </div>
                </div>
                <div class="overlay absolute top-0 left-0 bottom-0 right-0 rounded-2xl py-5 px-5 bg-[rgba(0,0,0,0.8)] text-white">
                    <h5 class="text-xl font-bold mb-4 border-b border-white pb-2">Available Times</h5>
                    <div class="space-y-2">
                        @foreach($doctor->schedules as $schedule)
                            <div class="flex justify-between items-center">
                                <span>{{ $schedule->day }}:</span>
                                <span>{{ $schedule->time }}</span>
                            </div>
                        @endforeach
                </div>
            </div>
            </div>
            @endforeach

        </div>
    </div>


    @endsection
