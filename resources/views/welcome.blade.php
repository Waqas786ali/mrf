@extends('layouts.app')

@section('content')

    <section class="pt-8">
        <div class="text-center flex flex-col gap-4 py-8">
            <h1 class="font-bold text-[#031D26] text-[2rem]">Our Clinical <span class="text-[#B11515]">Services</span></h1>

        </div>
        <div class="swiper people w-[85%] my-[3rem] container bg-[rgba(177,21,21,0.1)] shadow-[0px_4px_8px_8px_rgba(99,99,99,0.1)] py-12 rounded-md">
            <div class="swiper-wrapper w-full">
                <div class="swiper-slide text-center relative">
                    <div class="object-cover mx-auto border-2 border-[#B11515] bg-[#B11515] w-[10rem] h-[10rem] rounded-full" ><img src="{{ asset('assets/images/Clinical_services/img1.png')}}" class="object-cover w-full" /></div>
                    <p class='absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 w-[10rem] font-semibold pt-2 text-[#fff]'>24x7 <span class="text-xs">OPD/Emergency Services</span></p>
                </div>
                <div class="swiper-slide text-center relative">
                    <a href="{{ route('clinical-services') }}">
                    <div class="object-cover mx-auto border-2 border-[#B11515] bg-[#B11515] w-[10rem] h-[10rem] rounded-full" ><img src="{{ asset('assets/images/Clinical_services/img2.png')}}" class="object-cover w-full" /></div>
                      </a>
                    <p class='absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 w-[10rem] font-semibold pt-2 text-[#fff]'>Obstetrics And Gynecology</p>
                </div>
                <div class="swiper-slide text-center relative">
                    <a href="{{ route('clinical-services') }}">
                    <div class="object-cover mx-auto border-2 border-[#B11515] bg-[#B11515] w-[10rem] h-[10rem] rounded-full" ><img src="{{ asset('assets/images/Clinical_services/img3.png')}}" class="object-cover w-full" /></div>
                    </a>
                    <p class='absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 w-[10rem] font-semibold pt-2 text-[#fff]'>Surgeries</p>

                </div>
                <div class="swiper-slide text-center relative">
                    <a href="{{ route('clinical-services') }}">
                    <div class="object-cover mx-auto border-2 border-[#B11515] bg-[#B11515] w-[10rem] h-[10rem] rounded-full" ><img src="{{ asset('assets/images/Clinical_services/img4.png')}}" class="object-cover w-full" /></div>
                    </a>
                    <p class='absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 w-[10rem] font-semibold pt-2 text-[#fff]'>Diabetes</p>
                </div>

                <div class="swiper-slide text-center relative">
                    <a href="{{ route('clinical-services') }}">
                    <div class="object-cover mx-auto border-2 border-[#B11515] bg-[#B11515] w-[10rem] h-[10rem] rounded-full" ><img src="{{ asset('assets/images/Clinical_services/img5.png')}}" class="object-cover w-full" /></div>
                    </a>
                    <p class='absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 w-[10rem] font-semibold pt-2 text-[#fff]'>Hemodialysis</p>
                </div>

                <div class="swiper-slide text-center relative">
                    <a href="{{ route('clinical-services') }}">
                    <div class="object-cover mx-auto border-2 border-[#B11515] bg-[#B11515] w-[10rem] h-[10rem] rounded-full" ><img src="{{ asset('assets/images/Clinical_services/img6.png')}}" class="object-cover w-full" /></div>
                   </a>
                    <p class='absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 w-[10rem] font-semibold pt-2 text-[#fff]'>Medicine</p>
                </div>

                <div class="swiper-slide text-center relative">
                    <a href="{{ route('clinical-services') }}">
                    <div class="object-cover mx-auto border-2 border-[#B11515] bg-[#B11515] w-[10rem] h-[10rem] rounded-full" ><img src="{{ asset('assets/images/Clinical_services/img7.png')}}" class="object-cover w-full" /></div>
                    </a>
                    <p class='absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 w-[10rem] font-semibold pt-2 text-[#fff]'>Nephrology</p>
                </div>
                <div class="swiper-slide text-center relative">
                    <a href="{{ route('clinical-services') }}">
                    <div class="object-cover mx-auto border-2 border-[#B11515] bg-[#B11515] w-[10rem] h-[10rem] rounded-full" ><img src="{{ asset('assets/images/Clinical_services/img8.png')}}" class="object-cover w-full" /></div>
                    </a>
                    <p class='absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 w-[10rem] font-semibold pt-2 text-[#fff]'>Urology</p>
                </div>
                <div class="swiper-slide text-center relative">
                    <a href="{{ route('clinical-services') }}">
                    <div class="object-cover mx-auto border-2 border-[#B11515] bg-[#B11515] w-[10rem] h-[10rem] rounded-full" ><img src="{{ asset('assets/images/Clinical_services/img9.png')}}" class="object-cover w-full" /></div>
                    </a>
                    <p class='absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 w-[10rem] font-semibold pt-2 text-[#fff]'>Cardiology</p>
                </div>
                <div class="swiper-slide text-center relative">
                    <a href="{{ route('clinical-services') }}">
                    <div class="object-cover mx-auto border-2 border-[#B11515] bg-[#B11515] w-[10rem] h-[10rem] rounded-full" ><img src="{{ asset('assets/images/Clinical_services/img10.png')}}" class="object-cover w-full" /></div>
                    </a>
                    <p class='absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 w-[10rem] font-semibold pt-2 text-[#fff]'>Orthopedicy</p>
                </div>
                <div class="swiper-slide text-center relative">
                    <a href="{{ route('clinical-services') }}">
                    <div class="object-cover mx-auto border-2 border-[#B11515] bg-[#B11515] w-[10rem] h-[10rem] rounded-full" ><img src="{{ asset('assets/images/Clinical_services/img11.png')}}" class="object-cover w-full" /></div>
                    </a>
                    <p class='absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 w-[10rem] font-semibold pt-2 text-[#fff]'>Physiotherapy</p>
                </div>
                <div class="swiper-slide text-center relative">
                    <a href="{{ route('clinical-services') }}">
                    <div class="object-cover mx-auto border-2 border-[#B11515] bg-[#B11515] w-[10rem] h-[10rem] rounded-full" ><img src="{{ asset('assets/images/Clinical_services/img12.png')}}" class="object-cover w-full" /></div>
                    </a>
                    <p class='absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 w-[10rem] font-semibold pt-2 text-[#fff]'>Dermatology</p>
                </div>
                <div class="swiper-slide text-center relative">
                    <a href="{{ route('clinical-services') }}">
                    <div class="object-cover mx-auto border-2 border-[#B11515] bg-[#B11515] w-[10rem] h-[10rem] rounded-full" ><img src="{{ asset('assets/images/Clinical_services/img13.png')}}" class="object-cover w-full" /></div>
                    </a>
                    <p class='absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 w-[10rem] font-semibold pt-2 text-[#fff]'>Peads</p>
                </div>
                <div class="swiper-slide text-center relative">
                    <a href="{{ route('clinical-services') }}">
                    <div class="object-cover mx-auto border-2 border-[#B11515] bg-[#B11515] w-[10rem] h-[10rem] rounded-full" ><img src="{{ asset('assets/images/Clinical_services/img14.png')}}" class="object-cover w-full" /></div>
                    </a>
                    <p class='absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 w-[10rem] font-semibold pt-2 text-[#fff]'>Gastroenterology</p>
                </div>
                <div class="swiper-slide text-center relative">
                    <a href="{{ route('clinical-services') }}">
                    <div class="object-cover mx-auto border-2 border-[#B11515] bg-[#B11515] w-[10rem] h-[10rem] rounded-full" ><img src="{{ asset('assets/images/Clinical_services/img15.png')}}" class="object-cover w-full" /></div>
                    </a>
                    <p class='absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 w-[10rem] font-semibold pt-2 text-[#fff]'>Neurology</p>
                </div>
                <div class="swiper-slide text-center relative">
                    <a href="{{ route('clinical-services') }}">
                    <div class="object-cover mx-auto border-2 border-[#B11515] bg-[#B11515] w-[10rem] h-[10rem] rounded-full" ><img src="{{ asset('assets/images/Clinical_services/img16.png')}}" class="object-cover w-full" /></div>
                    </a>
                    <p class='absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 w-[10rem] font-semibold pt-2 text-[#fff]'>E.N.T</p>
                </div>
                <div class="swiper-slide text-center relative">
                    <a href="{{ route('clinical-services') }}">
                    <div class="object-cover mx-auto border-2 border-[#B11515] bg-[#B11515] w-[10rem] h-[10rem] rounded-full" ><img src="{{ asset('assets/images/Clinical_services/img17.png')}}" class="object-cover w-full" /></div>
                    </a>
                    <p class='absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 w-[10rem] font-semibold pt-2 text-[#fff]'>Dentistry</p>
                </div>
                <div class="swiper-slide text-center relative">
                    <a href="{{ route('clinical-services') }}">
                    <div class="object-cover mx-auto border-2 border-[#B11515] bg-[#B11515] w-[10rem] h-[10rem] rounded-full" ><img src="{{ asset('assets/images/Clinical_services/img18.png')}}" class="object-cover w-full" /></div>
                    </a>
                    <p class='absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 w-[10rem] font-semibold pt-2 text-[#fff]'>Radiology</p>
                </div>
                <div class="swiper-slide text-center relative">
                    <a href="{{ route('clinical-services') }}">
                    <div class="object-cover mx-auto border-2 border-[#B11515] bg-[#B11515] w-[10rem] h-[10rem] rounded-full" ><img src="{{ asset('assets/images/Clinical_services/img19.png')}}" class="object-cover w-full" /></div>
                    </a>
                    <p class='absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 w-[10rem] font-semibold pt-2 text-[#fff]'>Diagnostic Laboratory</p>
                </div>
                <div class="swiper-slide text-center relative">
                    <a href="{{ route('clinical-services') }}">
                    <div class="object-cover mx-auto border-2 border-[#B11515] bg-[#B11515] w-[10rem] h-[10rem] rounded-full" ><img src="{{ asset('assets/images/Clinical_services/img20.png')}}" class="object-cover w-full" /></div>
</a>
                    <p class='absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 w-[10rem] font-semibold pt-2 text-[#fff]'>ECG</p>
                </div>
                <div class="swiper-slide text-center relative">
                    <a href="{{ route('clinical-services') }}">
                    <div class="object-cover mx-auto border-2 border-[#B11515] bg-[#B11515] w-[10rem] h-[10rem] rounded-full" ><img src="{{ asset('assets/images/Clinical_services/img21.png')}}" class="object-cover w-full" /></div>
                    </a>
                    <p class='absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 w-[10rem] font-semibold pt-2 text-[#fff]'>Echocardiography</p>
                </div>
            </div>
            <div class="swiper-button-next after:content-none">
                <div class="rounded-full bg-white border-2 border-[#B11515] hover:bg-[#B11515] svg-parent transition-all">
                    <div class="h-[2.5rem] !w-[2.5rem] flex items-center justify-center">
                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="#B11515" stroke-width="2"
                             fill="none" stroke-linecap="round" stroke-linejoin="round" class="svg-child">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="swiper-button-prev after:content-none">
                <div class="rounded-full bg-white border-2 border-[#B11515] hover:bg-[#B11515] svg-parent transition-all">
                    <div class="h-[2.5rem] !w-[2.5rem] flex items-center justify-center">
                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="#B11515" stroke-width="2"
                             fill="none" stroke-linecap="round" stroke-linejoin="round" class="svg-child">
                            <polyline points="15 18 9 12 15 6"></polyline>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="overflow-x-hidden">
        <div data-aos="fade-left" data-aos-duration="500" class="container p-[2rem] mt-[2rem]">
            <div class="text-center flex flex-col gap-4">
                <h1 class="font-bold text-[#031D26] text-[2rem]">About  <span class="text-[#B11515]">Us</span></h1>
            </div>
        </div>
        <div class="grid gap-5 xl:gap-0 xl:grid-cols-2 sm:w-[90%] mx-auto my-[2rem] p-[2rem]">
            <div class="xl:w-50vw">
                <iframe width="100%" height="500" src="https://www.youtube.com/embed/G-nEHN4VCqU?rel=0" frameborder="0" allowfullscreen></iframe>
            </div>

            <div class="flex items-center justify-center xl:justify-start">
                <div class="flex flex-col gap-3 h-fit bg-white shadow-lg border xl:-translate-x-10 rounded-md p-10 3xl:p-16">
                    <p><span class="text-[#B11515] text-2xl">"</span> Welcome to the Mukhtaran Rafiq Welfare Hospital! We are an incredible initiative of the Mukhtaran Rafiq Foundation, committed to offering free medical treatment to underprivileged individuals in Lahore, Pakistan. Our journey began in May 2004, with a small dispensary aimed at addressing the lack of accessible healthcare in our local community. However, in response to the growing number of patients seeking our help, we recognized the need to expand our services. <span class="text-[#B11515] text-2xl">"</span></p>
                    <a href="/"><button class="bg-[#B11515] text-white py-2 px-8 rounded-md w-fit">Read More</button></a>
                </div>
            </div>
        </div>
    </section>

    <section class="overflow-x-hidden">
        <div data-aos="fade-left" data-aos-duration="500"
             class="bg-[linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url('https://mrf.org.pk/wp-content/themes/mukhtaran-rafiq-foundation/assets/images/hands-bg.png')] bg-cover bg-center min-h-[14rem] flex">
            <div
                class="container p-[2rem] mt-[2rem] flex items-center h-full justify-around gap-[2rem] text-white flex-wrap">
                <div class="flex flex-col gap-2 items-center text-center">
                    <h1 class="font-semibold">OPD Patients</h1>
                    <h1 id="counter1" class="font-bold text-[3rem]"></h1>
                </div>
                <div class="flex flex-col gap-2 items-center text-center">
                    <h1 class="font-semibold">Admissions</h1>
                    <h1  id="counter2" class="font-bold text-[3rem]"></h1>
                </div>
                <div class="flex flex-col gap-2 items-center text-center">
                    <h1 class="font-semibold">Dialysis</h1>
                    <h1 id="counter3" class="font-bold text-[3rem]"></h1>
                </div>
                <div class="flex flex-col gap-2 items-center text-center">
                    <h1 class="font-semibold">Free Medical Camps</h1>
                    <h1 id="counter4" class="font-bold text-[3rem]">1</h1>
                </div>
                <div class="flex flex-col gap-2 items-center text-center">
                    <h1 class="font-semibold">Free Tests</h1>
                    <h1 id="counter5" class="font-bold text-[3rem]"></h1>
                </div>
            </div>
        </div>
    </section>



    <section class="overflow-x-hidden">
        <div data-aos="fade-left" data-aos-duration="500" class="container p-[2rem] mt-[2rem]">
            <div class="text-center flex flex-col gap-4">
                <h1 class="font-bold text-[#031D26] text-[2rem]">CSR</h1>

            </div>
        </div>
        <img src="{{ asset('assets/images/about-us.png')}}" class="mx-auto h-[20rem] w-full object-contain">

    </section>








@include('layouts.partner')

@endsection

