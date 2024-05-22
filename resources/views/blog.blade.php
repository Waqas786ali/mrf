@extends('layouts.app')

@section('content')



    <style>
        .pagination{
            text-align: center;
        }
        .pagination .page-item {
            display: inline-block;
            margin-right: 5px;
        }

        .pagination .page-link {
            color: #3366CC;
            border: 1px solid #3366CC;
            padding: 5px 10px;
            text-decoration: none;
        }

        .pagination .page-link:hover {
            background-color: #3366CC;
            color: #fff;
        }

        .pagination .page-item.active .page-link {
            background-color: #3366CC;
            color: #fff;
            border-color: #3366CC;
        }

    </style>


    <!-- Section -->
    <section>
        <div class="bg-[#fff] py-[5rem]">
            <div class="container xl:w-[75%] md:w-[80%] mx-auto px-[2rem]">
                <div class="flex flex-col gap-5">
                    <div class="flex items-center gap-3 justify-between">
                        <div class="flex items-center gap-3 text-sm">

                        </div>
                        <div>
                        </div>
                    </div>
                    <div class="mt-[2rem] text-center">
    <h1 class="font-bold text-2xl">Latest Blogs</h1>
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
</div>
                    <div class="mt-[2rem]">
                        
                        <div class="grid xl:grid-cols-3 md:grid-cols-2 gap-6">
                            @if ($blogs->isEmpty())
                                <h1 class="font-bold text-2xl text-center not-found-grid">No results found</h1>
                            @endif
                            @foreach($blogs as $blog)
                                <a href="{{route('single.blog', $blog->slug)}}">
                                    <div class="flex flex-col gap-3">
                                            <img src="{{ $blog->image }}" alt="" class="rounded-xl h-[12rem] lg:h-[20rem] border w-full object-cover">

                                        <h1 class="font-bold text-2xl">{{$blog->name}}</h1>
                                        <p class="text-[#676972] text-sm">{!! \Illuminate\Support\Str::limit($blog->content, 100, '...') !!}</p>
                                        <div class="flex items-center gap-3">
                                            <button style="color:red;" class=" px-4 text-white py-2 text-sm rounded-lg">Admin</button>
                                            <div class="flex items-center gap-2">
                                                <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M15.4375 8C15.4375 11.8318 12.3318 14.9375 8.5 14.9375C4.66825 14.9375 1.5625 11.8318 1.5625 8C1.5625 4.16825 4.66825 1.0625 8.5 1.0625C12.3318 1.0625 15.4375 4.16825 15.4375 8Z" stroke="#007AFE" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M11.0736 10.2068L8.24609 8.52002V4.88477" stroke="#007AFE" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                                <p class="text-sm">{{ $blog->created_at->format('j F Y') }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <!-- Code For Paginating blogs as (12 per page) -->


    @if ($blogs->lastPage() > 1)
        <ul class="pagination pb-[3rem]">
            @if ($blogs->onFirstPage())
                <li class="page-item disabled">
                    <span class="page-link">&laquo;</span>
                </li>
            @else
                <li class="page-item">
                    <a href="{{ $blogs->previousPageUrl() }}" class="page-link">&laquo;</a>
                </li>
            @endif

            @for ($i = 1; $i <= $blogs->lastPage(); $i++)
                @if ($i == $blogs->currentPage())
                    <li class="page-item active">
                        <span class="page-link">{{ $i }}</span>
                    </li>
                @else
                    <li class="page-item">
                        <a href="{{ $blogs->url($i) }}" class="page-link">{{ $i }}</a>
                    </li>
                @endif
            @endfor

            @if ($blogs->hasMorePages())
                <li class="page-item">
                    <a href="{{ $blogs->nextPageUrl() }}" class="page-link">&raquo;</a>
                </li>
            @else
                <li class="page-item disabled">
                    <span class="page-link">&raquo;</span>
                </li>
            @endif
        </ul>
    @endif







@endsection

