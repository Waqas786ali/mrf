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
                    <div class="object-cover mx-auto border-2 border-[#B11515] bg-[#B11515] w-[10rem] h-[10rem] rounded-full" ><img src="{{ asset('assets/images/Clinical_services/img2.png')}}" class="object-cover w-full" /></div>

                    <p class='absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 w-[10rem] font-semibold pt-2 text-[#fff]'>Obstetrics And Gynecology</p>
                </div>
                <div class="swiper-slide text-center relative">
                    <div class="object-cover mx-auto border-2 border-[#B11515] bg-[#B11515] w-[10rem] h-[10rem] rounded-full" ><img src="{{ asset('assets/images/Clinical_services/img3.png')}}" class="object-cover w-full" /></div>

                    <p class='absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 w-[10rem] font-semibold pt-2 text-[#fff]'>Surgeries</p>

                </div>
                <div class="swiper-slide text-center relative">
                    <div class="object-cover mx-auto border-2 border-[#B11515] bg-[#B11515] w-[10rem] h-[10rem] rounded-full" ><img src="{{ asset('assets/images/Clinical_services/img4.png')}}" class="object-cover w-full" /></div>

                    <p class='absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 w-[10rem] font-semibold pt-2 text-[#fff]'>Diabetes</p>
                </div>

                <div class="swiper-slide text-center relative">
                    <div class="object-cover mx-auto border-2 border-[#B11515] bg-[#B11515] w-[10rem] h-[10rem] rounded-full" ><img src="{{ asset('assets/images/Clinical_services/img5.png')}}" class="object-cover w-full" /></div>

                    <p class='absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 w-[10rem] font-semibold pt-2 text-[#fff]'>Hemodialysis</p>
                </div>


                    <div class="swiper-slide text-center relative">
                    <div  class="object-cover mx-auto border-2 border-[#B11515] bg-[#B11515] w-[10rem] h-[10rem] rounded-full" ><img src="{{ asset('assets/images/Clinical_services/img6.png')}}" class="object-cover w-full" /></div>

                    <p class='absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 w-[10rem] font-semibold pt-2 text-[#fff]'>Medicine</p>
                </div>
                </a>

                <div class="swiper-slide text-center relative">
                    <div class="object-cover mx-auto border-2 border-[#B11515] bg-[#B11515] w-[10rem] h-[10rem] rounded-full" ><img src="{{ asset('assets/images/Clinical_services/img7.png')}}" class="object-cover w-full" /></div>

                    <p class='absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 w-[10rem] font-semibold pt-2 text-[#fff]'>Nephrology</p>
                </div>
                <div class="swiper-slide text-center relative">
                    <div class="object-cover mx-auto border-2 border-[#B11515] bg-[#B11515] w-[10rem] h-[10rem] rounded-full" ><img src="{{ asset('assets/images/Clinical_services/img8.png')}}" class="object-cover w-full" /></div>

                    <p class='absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 w-[10rem] font-semibold pt-2 text-[#fff]'>Urology</p>
                </div>
                <div class="swiper-slide text-center relative">
                    <div class="object-cover mx-auto border-2 border-[#B11515] bg-[#B11515] w-[10rem] h-[10rem] rounded-full" ><img src="{{ asset('assets/images/Clinical_services/img9.png')}}" class="object-cover w-full" /></div>

                    <p class='absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 w-[10rem] font-semibold pt-2 text-[#fff]'>Cardiology</p>
                </div>
                <div class="swiper-slide text-center relative">
                    <div class="object-cover mx-auto border-2 border-[#B11515] bg-[#B11515] w-[10rem] h-[10rem] rounded-full" ><img src="{{ asset('assets/images/Clinical_services/img10.png')}}" class="object-cover w-full" /></div>

                    <p class='absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 w-[10rem] font-semibold pt-2 text-[#fff]'>Orthopedicy</p>
                </div>
                <div class="swiper-slide text-center relative">
                    <div class="object-cover mx-auto border-2 border-[#B11515] bg-[#B11515] w-[10rem] h-[10rem] rounded-full" ><img src="{{ asset('assets/images/Clinical_services/img11.png')}}" class="object-cover w-full" /></div>

                    <p class='absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 w-[10rem] font-semibold pt-2 text-[#fff]'>Physiotherapy</p>
                </div>
                <div class="swiper-slide text-center relative">
                    <div class="object-cover mx-auto border-2 border-[#B11515] bg-[#B11515] w-[10rem] h-[10rem] rounded-full" ><img src="{{ asset('assets/images/Clinical_services/img12.png')}}" class="object-cover w-full" /></div>

                    <p class='absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 w-[10rem] font-semibold pt-2 text-[#fff]'>Dermatology</p>
                </div>
                <div class="swiper-slide text-center relative">
                    <div class="object-cover mx-auto border-2 border-[#B11515] bg-[#B11515] w-[10rem] h-[10rem] rounded-full" ><img src="{{ asset('assets/images/Clinical_services/img13.png')}}" class="object-cover w-full" /></div>

                    <p class='absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 w-[10rem] font-semibold pt-2 text-[#fff]'>Peads</p>
                </div>
                <div class="swiper-slide text-center relative">
                    <div class="object-cover mx-auto border-2 border-[#B11515] bg-[#B11515] w-[10rem] h-[10rem] rounded-full" ><img src="{{ asset('assets/images/Clinical_services/img14.png')}}" class="object-cover w-full" /></div>

                    <p class='absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 w-[10rem] font-semibold pt-2 text-[#fff]'>Gastroenterology</p>
                </div>
                <div class="swiper-slide text-center relative">
                    <div class="object-cover mx-auto border-2 border-[#B11515] bg-[#B11515] w-[10rem] h-[10rem] rounded-full" ><img src="{{ asset('assets/images/Clinical_services/img15.png')}}" class="object-cover w-full" /></div>

                    <p class='absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 w-[10rem] font-semibold pt-2 text-[#fff]'>Neurology</p>
                </div>
                <div class="swiper-slide text-center relative">
                    <div class="object-cover mx-auto border-2 border-[#B11515] bg-[#B11515] w-[10rem] h-[10rem] rounded-full" ><img src="{{ asset('assets/images/Clinical_services/img16.png')}}" class="object-cover w-full" /></div>

                    <p class='absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 w-[10rem] font-semibold pt-2 text-[#fff]'>E.N.T</p>
                </div>
                <div class="swiper-slide text-center relative">
                    <div class="object-cover mx-auto border-2 border-[#B11515] bg-[#B11515] w-[10rem] h-[10rem] rounded-full" ><img src="{{ asset('assets/images/Clinical_services/img17.png')}}" class="object-cover w-full" /></div>

                    <p class='absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 w-[10rem] font-semibold pt-2 text-[#fff]'>Dentistry</p>
                </div>
                <div class="swiper-slide text-center relative">
                    <div class="object-cover mx-auto border-2 border-[#B11515] bg-[#B11515] w-[10rem] h-[10rem] rounded-full" ><img src="{{ asset('assets/images/Clinical_services/img18.png')}}" class="object-cover w-full" /></div>

                    <p class='absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 w-[10rem] font-semibold pt-2 text-[#fff]'>Radiology</p>
                </div>
                <div class="swiper-slide text-center relative">
                    <div class="object-cover mx-auto border-2 border-[#B11515] bg-[#B11515] w-[10rem] h-[10rem] rounded-full" ><img src="{{ asset('assets/images/Clinical_services/img19.png')}}" class="object-cover w-full" /></div>

                    <p class='absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 w-[10rem] font-semibold pt-2 text-[#fff]'>Diagnostic Laboratory</p>
                </div>
                <div class="swiper-slide text-center relative">
                    <div class="object-cover mx-auto border-2 border-[#B11515] bg-[#B11515] w-[10rem] h-[10rem] rounded-full" ><img src="{{ asset('assets/images/Clinical_services/img20.png')}}" class="object-cover w-full" /></div>

                    <p class='absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 w-[10rem] font-semibold pt-2 text-[#fff]'>ECG</p>
                </div>
                <div class="swiper-slide text-center relative">
                    <div class="object-cover mx-auto border-2 border-[#B11515] bg-[#B11515] w-[10rem] h-[10rem] rounded-full" ><img src="{{ asset('assets/images/Clinical_services/img21.png')}}" class="object-cover w-full" /></div>
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



    <section class="overflow-x-hidden" id="Clinical">
        <div class="container p-[2rem]" data-aos="fade-right" data-aos-duration="500">
            <div class="text-center flex flex-col gap-4">
                <h1 class="font-bold text-[#031D26] text-[2rem]">Clinical <span class="text-[#B11515]">Services</span>
                </h1>
            </div>
            <div class="mt-[2rem] grid md:grid-cols-2 grid-cols-1 gap-6">
                <div>
                    <div class="rounded-md shadow-cstm-1 p-[1.5rem] flex flex-col gap-4">
                        <h1
                            class="font-bold text-[1.8rem] active-nav !text-black relative after:!translate-x-0 after:w-[5rem] after:left-0 !text-left">
                            MRF Clinical Services
                        </h1>
                        <div class="text-sm text-[#555555]">

                            Mukhtaran Rafiq Welfare Hospital provides following medical facilities to the
                            patients:
                            <li>24x7 Emergency Services</li>
                            <li>Obstetrics and Gynecology</li>
                            <li>General Surgery</li>
                            <li>Medicine</li>
                            <li>Diabetes</li>
                            <li>Dermatology</li>
                            <li>Pediatrics</li>
                            <li>Dentistry</li>
                            <li>Gastroenterology</li>
                            <li>Orthopedics</li>
                            <li>Physiotherapy</li>
                            <li>Dialysis</li>
                            <li>X-Ray</li>
                            <li>Laboratory</li>
                            <br>

                            </li>
                        </div>
                    </div>
                </div>
                <div class="flex items-center">
                    <img src="{{ asset('assets/images/services.png')}}" alt="">
                </div>
            </div>
        </div>
    </section>



    <section class="overflow-x-hidden" id="Featured">
        <div class="container p-[2rem]" data-aos="fade-right" data-aos-duration="500">
            <div class="text-center flex flex-col gap-4">
                <h1 class="font-bold text-[#031D26] text-[2rem]">Featured <span class="text-[#B11515]">Cases</span></h1>
                <p class="text-sm text-[#838383]">The hospital is expanding, Help us to grow so we can so we cater to
                    more needy people.</p>
            </div>
            <div class="mt-[2rem] grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-6 w-[90%] mx-auto">
                <div class="shadow-cstm-1 relative h-fit rounded-lg">
                    <img src="{{ asset('assets/images/Dialysis%20Patients%20-1.jpg')}}"
                        class="h-[14rem] relative z-[1] w-full object-cover rounded-md">
                    <div class="translate-y-[-10px] relative z-[2] p-4 flex flex-col gap-3 bg-white rounded-xl">
                        <h1 class="font-semibold text-xl">Dialysis Patients</h1>
                        <p class="text-[#838383] text-sm">At our hospital, we have a team of highly skilled and experienced healthcare professionals who are dedicated to providing exceptional care for patients with kidney disease. We use state-of-the-art technology and evidence-based treatments to ensure that our patients receive the highest standard of care.
                        </p>
                        <a href="../contact-us/index.html#donate_now">
                            <button type="button"
                                class="text-white bg-[#B11515] font-semibold hover:bg-white hover:text-[#B11515] border border-[#B11515] transition-all rounded-sm text-sm px-5 py-2.5 focus:outline-none">
                                Donate Now
                            </button>
                        </a>
                    </div>
                </div>
                <div class="shadow-cstm-1 relative h-fit rounded-lg">
                    <img src="{{ asset('assets/images/Dialysis%20Patients%20-2.jpg')}}"
                        class="h-[14rem] relative z-[1] w-full object-cover rounded-md">
                    <div class="translate-y-[-10px] relative z-[2] p-4 flex flex-col gap-3 bg-white rounded-xl">
                        <h1 class="font-semibold text-xl">Dialysis Patients</h1>
                        <p class="text-[#838383] text-sm">We are proud to say that we have successfully treated many dialysis patients over the years. Our patients have reported improved symptoms, increased energy levels, and an overall better quality of life as a result of their treatment. We believe that our success is due to our commitment to personalized care.
                        </p>
                        <a href="../contact-us/index.html#donate_now">
                            <button type="button"
                                class="text-white bg-[#B11515] font-semibold hover:bg-white hover:text-[#B11515] border border-[#B11515] transition-all rounded-sm text-sm px-5 py-2.5 focus:outline-none">
                                Donate Now
                            </button>
                        </a>
                    </div>
                </div>
                <div class="shadow-cstm-1 relative h-fit rounded-lg">
                  <img src="{{ asset('assets/images/cancer-patient.png')}}"
                        class="h-[14rem] relative z-[1] w-full object-cover rounded-md">
                    <div class="translate-y-[-10px] relative z-[2] p-4 flex flex-col gap-3 bg-white rounded-xl">
                        <h1 class="font-semibold text-xl">Dialysis Patients</h1>
                        <p class="text-[#838383] text-sm">MRF understands that living with kidney disease can be challenging, and we are here to help our patients navigate their treatment journey with compassion and expertise. Our goal is to provide our patients with the best possible care and to help them achieve optimal health outcomes
                        </p>
                        <a href="../contact-us/index.html#donate_now">
                            <button type="button"
                                class="text-white bg-[#B11515] font-semibold hover:bg-white hover:text-[#B11515] border border-[#B11515] transition-all rounded-sm text-sm px-5 py-2.5 focus:outline-none">
                                Donate Now
                            </button>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>




    <section class="overflow-x-hidden">
        <div data-aos="fade-right" data-aos-duration="500" class="container p-[2rem]">
            <div class="text-center flex flex-col gap-4">
                <h1 class="font-bold text-[#031D26] text-[2rem]">Hospital <span class="text-[#B11515]">Facility</span>
                </h1>
                <p class="text-sm text-[#838383]">MRF Ensures Quality Care with State-of-the-Art Hospital
                    Facility!</p>
            </div>
            <div class="mt-[2rem] grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-6 w-[90%] mx-auto">
                <div class="shadow-cstm-1 relative h-fit rounded-lg">
                    <img src="{{ asset('assets/images/ICU.jpg')}}" class="h-[14rem] relative z-[1] w-full object-cover rounded-md">
                    <div class="translate-y-[-10px] relative z-[2] p-4 flex flex-col gap-3 bg-white rounded-xl">
                        <h1 class="font-semibold text-xl">ICU Facility</h1>
                        <p class="text-[#838383] text-sm">MRF Delivers Life-saving ICU Facilities to Deserving Needy
                            People. .
                        </p>
                    </div>
                </div>
                <div class="shadow-cstm-1 relative h-fit rounded-lg">
                    <img src="{{ asset('assets/images/incubator.jpg')}}"
                         class="h-[14rem] relative z-[1] w-full object-cover rounded-md">
                    <div class="translate-y-[-10px] relative z-[2] p-4 flex flex-col gap-3 bg-white rounded-xl">
                        <h1 class="font-semibold text-xl">Incubator for Premature Babies</h1>
                        <p class="text-[#838383] text-sm">MRF Pioneers Incubator Facility to Give Preemies a Fighting
                            Chance at Life! .</p>
                    </div>
                </div>
                <div class="shadow-cstm-1 relative h-fit rounded-lg">
                    <img src="{{ asset('assets/images/opertaion.jpg')}}"
                         class="h-[14rem] relative z-[1] w-full object-cover rounded-md">
                    <div class="translate-y-[-10px] relative z-[2] p-4 flex flex-col gap-3 bg-white rounded-xl">
                        <h1 class="font-semibold text-xl">Operation Theater</h1>
                        <p class="text-[#838383] text-sm">MRF Delivers High-Quality Operation Theatre Facility for
                            Optimal Healthcare Outcomes!</p>
                    </div>
                </div>
            </div>

        </div>
    </section>



@endsection

