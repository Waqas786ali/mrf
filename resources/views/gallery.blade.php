@extends('layouts.app')

@section('content')



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
            <h1 class="text-4xl font-bold text-center text-[#007643]">AJK Public Welfare Activities</h1>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 sm:p-4">
            <div style="box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 10px;"
                 class="sliderbox shadow-md bg-white p-4 duration-500 transition-all rounded-md flex flex-col cursor-pointer">
                <div class="flex items-center justify-center">
                    <h3 class="font-bold text-[#007643] text-2xl">Kashmir Premier League 2022</h3>
                </div>
                <div class="w-[80%] m-auto flex flex-col gap-3 p-4 swiper">
                    <div class="images swiper-wrapper gallery_slider">
                        <div class="swiper-slide">
                            <img class="rounded-lg" src="{{ asset('assets/newimages/image4.d2b53f33c1a8f0d32e50.jpg')}}" alt="img" />
                        </div>
                        <div class="swiper-slide">
                            <img class="rounded-lg" src="{{ asset('assets/newimages/image5.4d568e476e3c805f99e2.jpg')}}" alt="img" />
                        </div>
                        <div class="swiper-slide">
                            <img class="rounded-lg" src="{{ asset('assets/newimages/image6.6fa198d1d24d305c5109.jpg')}}" alt="img" />
                        </div>
                        <div class="swiper-slide">
                            <img class="rounded-lg" src="{{ asset('assets/newimages/image8.67052bfde07d04e90036.jpg')}}" alt="img" />
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                    <!-- <div class="flex gap-2 items-center justify-center mt-4">
                        <div class="w-2.5 h-2.5 bg-gray-400 rounded-full"></div>
                        <div class="w-2.5 h-2.5 bg-gray-400 rounded-full"></div>
                        <div class="w-2.5 h-2.5 bg-[#007643] rounded-full"></div>
                        <div class="w-2.5 h-2.5 bg-gray-400 rounded-full"></div>
                    </div> -->
                </div>
            </div>
        </div>
        <div id="image-viewer">
            <span class="close">&times;</span>
            <img class="modal-content" id="full-image">
        </div>
    </main>




@endsection

