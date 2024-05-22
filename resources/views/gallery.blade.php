@extends('layouts.app')

@section('content')


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/viewerjs/1.11.0/viewer.min.css">
    <!-- Include Viewer.js script -->
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>

    <style>
        .sliderbox:hover{
            background-color: #007643;
        }
        .sliderbox:hover h3{
            color: white;
        }
        img {
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }

        img:hover {opacity: 0.7;}
        /* The Modal (background) */
        #image-viewer {
            display: none;
            position: fixed;
            z-index: 1;
            padding-top: 100px;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0,0,0);
            background-color: rgba(0,0,0,0.9);
        }
        .modal-content {
            margin: auto;
            display: block;
            width: 80vw;
            max-width: 90vw;
            height: 80vh;
            object-fit: cover;
        }
        .modal-content {
            animation-name: zoom;
            animation-duration: 0.6s;
        }
        @keyframes zoom {
            from {transform:scale(0)}
            to {transform:scale(1)}
        }
        #image-viewer .close {
            position: absolute;
            top: 15px;
            right: 35px;
            color: #f1f1f1;
            font-size: 40px;
            font-weight: bold;
            transition: 0.3s;
        }
        #image-viewer .close:hover,
        #image-viewer .close:focus {
            color: #bbb;
            text-decoration: none;
            cursor: pointer;
        }

        @media only screen and (max-width: 700px){
            .modal-content {
                width: 100%;
            }
        }
    </style>


    <main class="flex p-4 w-full flex-col gap-4 max-w-screen-xl m-auto">
        <div class="flex items-center justify-center w-full">
            <h1 class="text-4xl font-bold text-center text-[#007643]">MUKHTARAN RAFIQ FOUNDATION  Welfare Activities</h1>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 sm:p-4">
        @foreach ($galleries as $index => $gallery)
    <div style="box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 10px;" class="sliderbox shadow-md bg-white p-4 duration-500 transition-all rounded-md flex flex-col cursor-pointer">
        <div class="flex items-center justify-center">
            <h3 class="font-bold text-[#007643] text-2xl">{{ $gallery->name }}</h3>
        </div>
        <div class="w-[80%] min-h-[380px] m-auto flex flex-col gap-3 p-4 swiper gallery_slider">
            <div class="images swiper-wrapper viewer viewer{{ $index }}">
                @foreach ($gallery->galleryitem as $item)
                    <div class="swiper-slide">
                            <img class="rounded-lg min-h-[300px]" src="{{ asset($item->url) }}" alt="img" />
                    </div>
                @endforeach
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
       @endforeach


        </div>

    </main>


    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/viewerjs/1.11.0/viewer.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var gallery_slider = new Swiper(".gallery_slider", {
                // effect: "fade",
                spaceBetween: 30,
                speed: 500,
                loop: true,
                autoplay: true,
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
            });
        });

    document.addEventListener('DOMContentLoaded', function () {
        @foreach ($galleries as $index => $gallery)
            new Viewer(document.querySelector('.viewer{{ $index }}'));
        @endforeach
    });

   

</script>



@endsection

