
@extends('layouts.app')

@section('content')



    <div class="container p-[2rem]">
        <div class="text-center flex flex-col gap-4">
            <h1 class="font-bold text-[#031D26] text-[2rem]">Core <span class="text-[#B11515]">Leadership</span></h1>
            <p class="text-sm text-[#838383]">Our leaders and their contributions to MRF so far.</p>
        </div>
        <div class="mt-[2rem] mx-auto lg:w-[80%]">
            <div class="flex flex-col gap-8">
                <div>
                    <h1
                        class="font-semibold my-5 !mb-[2.5rem] text-2xl active-nav w-fit after:left-0 after:translate-x-0 !text-black">
                        Chair Persons</h1>
                    <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-[2rem] w-[90%] mx-auto">
                        <div class="flex flex-col gap-1 justify-end">
                            <img src="{{ asset('assets/images/people/Ayub%20Ch..jpg')}}" alt=""
                                 class="h-[18rem] rounded-md object-contain w-fit border-double border-[#dddd] border-[0.4rem] mx-auto">
                            <div class="text-center">
                                <h1 class="font-semibold text-lg">M. AYUB CH. Justice (Late).</h1>
                                <p class="text-sm text-[#666666]">(Former Chairman)</p>
                            </div>
                        </div>
                        <div class="flex flex-col gap-1">
                            <img src="{{ asset('assets/images/people/Haji%20sb.jpg')}}" alt=""
                                 class="h-[25rem] rounded-md object-contain w-fit border-double border-[#dddd] border-[0.4rem] mx-auto">
                            <div class="text-center">
                                <h1 class="font-semibold text-lg">HAJI MUHAMMAD RAFIQ (Late).</h1>
                                <p class="text-sm text-[#666666]">(Founder Mukhtaran Rafiq Foundation).</p>
                            </div>
                        </div>
                        <div class="flex flex-col gap-1 justify-end">
                            <img src="{{ asset('assets/images/people/Justice%20Khalil%20ur%20Rehman%20Khan.jpg')}}" alt=""
                                 class="h-[18rem] rounded-md object-contain w-fit border-double border-[#dddd] border-[0.4rem] mx-auto">
                            <div class="text-center">
                                <h1 class="font-semibold text-lg">KHALIL-UR-REHMAN(Rtd).</h1>
                                <p class="text-sm text-[#666666]">(Former Chairman).</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <h1
                        class="font-semibold my-5 !mb-[2.5rem] text-2xl active-nav w-fit after:left-0 after:translate-x-0 !text-black">
                        Executive Members</h1>
                    <div class="grid md:grid-cols-3 gap-[3rem]">
                        <div class="flex flex-col gap-1">
                            <img src="{{ asset('assets/images/Abdul%20Majeed.jpg')}}" alt=""
                                 class="h-[18rem] rounded-md object-contain object-center border-double border-[#dddd] border-[0.4rem]">
                            <div class="text-center">
                                <h1 class="font-semibold text-lg">ABDUL MAJEED.</h1>
                                <p class="text-sm text-[#666666]">(President).</p>
                            </div>
                        </div>
                        <div class="flex flex-col gap-1">
                            <img src="{{ asset('assets/images/people/IMG-20190513-WA0048.jpg')}}" alt=""
                                 class="h-[18rem] rounded-md object-contain object-center border-double border-[#dddd] border-[0.4rem]">
                            <div class="text-center">
                                <h1 class="font-semibold text-lg">KHALID YAQOOB.</h1>
                                <p class="text-sm text-[#666666]">(S. Vice President).</p>
                            </div>
                        </div>
                        <div class="flex flex-col gap-1">
                            <img src="{{ asset('assets/images/people/IMG-20190513-WA0044.jpg')}}" alt=""
                                 class="h-[18rem] rounded-md object-contain object-center border-double border-[#dddd] border-[0.4rem]">
                            <div class="text-center">
                                <h1 class="font-semibold text-lg">CH. SHAFIQ.</h1>
                                <p class="text-sm text-[#666666]">(Vice President).</p>
                            </div>
                        </div>
                        <div class="flex flex-col gap-1">
                            <img src="{{ asset('assets/images/people/IMG-20200804-WA0013.jpg')}}" alt=""
                                 class="h-[18rem] rounded-md object-contain object-center border-double border-[#dddd] border-[0.4rem]">
                            <div class="text-center">
                                <h1 class="font-semibold text-lg">ZAHID JABAAR MUGHAL.</h1>
                                <p class="text-sm text-[#666666]">(Finance Secretary).</p>
                            </div>
                        </div>
                        <div class="flex flex-col gap-1">
                            <img src="{{ asset('assets/images/people/MUHAMMAD%20NASSER.jpg')}}" alt=""
                                 class="h-[18rem] rounded-md object-contain object-center border-double border-[#dddd] border-[0.4rem]">
                            <div class="text-center">
                                <h1 class="font-semibold text-lg">MUHAMMAD NASSER.</h1>
                                <p class="text-sm text-[#666666]">(Joint Secretary).</p>
                            </div>
                        </div>
                        <div class="flex flex-col gap-1">
                            <img src="{{ asset('assets/images/people/PRINCE%20SHAFIQUE.jpg')}}" alt=""
                                 class="h-[18rem] rounded-md object-contain object-center border-double border-[#dddd] border-[0.4rem]">
                            <div class="text-center">
                                <h1 class="font-semibold text-lg">PRINCE SHAFIQUE.</h1>
                                <p class="text-sm text-[#666666]">(General Secretary)</p>
                            </div>
                        </div>
                        <div class="flex flex-col gap-1">
                            <img src="{{ asset('assets/images/people/Hafiz%20Muhammad%20Zohaib.jpg')}}" alt=""
                                 class="h-[18rem] rounded-md object-contain object-center border-double border-[#dddd] border-[0.4rem]">
                            <div class="text-center">
                                <h1 class="font-semibold text-lg">HAFIZ ZUHAIB TAYYAB.</h1>
                                <p class="text-sm text-[#666666]">(Secretary Information).</p>
                            </div>
                        </div>
                        <div class="flex flex-col gap-1">
                            <img src="{{ asset('assets/images/people/Liaqat%20Bhatti.jpg')}}" alt=""
                                 class="h-[18rem] rounded-md object-contain object-center border-double border-[#dddd] border-[0.4rem]">
                            <div class="text-center">
                                <h1 class="font-semibold text-lg">LIAQAT BHATTI.</h1>
                                <p class="text-sm text-[#666666]">(Member).</p>
                            </div>
                        </div>
                        <div class="flex flex-col gap-1">
                            <img src="{{ asset('assets/images/people/Ashfaq%20Jathol.jpg')}}" alt=""
                                 class="h-[18rem] rounded-md object-contain object-center border-double border-[#dddd] border-[0.4rem]">
                            <div class="text-center">
                                <h1 class="font-semibold text-lg">ASHFAQ JATHOL.</h1>
                                <p class="text-sm text-[#666666]">(Member).</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <h1
                        class="font-semibold my-5 !mb-[2.5rem] text-2xl active-nav w-fit after:left-0 after:translate-x-0 !text-black">
                        MEMBERS OF MUKHTARAN RAFIQ FOUNDATION
                    </h1>
                    <div class="grid md:grid-cols-5 gap-[1rem]">
                        <div class="flex flex-col gap-1">
                            <img src="{{ asset('assets/images/people/Shahbaz%20Aslam.jpg')}}" alt=""
                                 class="aa h-[14rem] rounded-md object-contain object-center border-double border-[#dddd] border-[0.4rem]">
                            <div class="text-center">
                                <h1 class="font-semibold text-lg">SHAHBAZ ASLAM</h1>
                            </div>
                        </div>
                        <div class="flex flex-col gap-1">
                            <img src="{{ asset('assets/images/people/Adnan%20Khalid%20Butt.jpg')}}" alt=""
                                 class="aa h-[14rem] rounded-md object-contain object-center border-double border-[#dddd] border-[0.4rem]">
                            <div class="text-center">
                                <h1 class="font-semibold text-lg">ADNAN KHALID BUTT</h1>
                            </div>
                        </div>
                        <div class="flex flex-col gap-1">
                            <img src="{{ asset('assets/images/people/Muhammad%20Ali%20Mian.jpg')}}" alt=""
                                 class="aa h-[14rem] rounded-md object-contain object-center border-double border-[#dddd] border-[0.4rem]">
                            <div class="text-center">
                                <h1 class="font-semibold text-lg">MUHAMMAD ALI MIAN</h1>
                            </div>
                        </div>
                        <div class="flex flex-col gap-1">
                            <img src="{{ asset('assets/images/people/Tanveer%20Ahmed.jpg')}}" alt=""
                                 class="aa h-[14rem] rounded-md object-contain object-center border-double border-[#dddd] border-[0.4rem]">
                            <div class="text-center">
                                <h1 class="font-semibold text-lg">TANVEER AHMED</h1>
                            </div>
                        </div>
                        <div class="flex flex-col gap-1">
                            <img src="{{ asset('assets/images/people/Khawaja%20Shahzeb%20Akram.jpg')}}" alt=""
                                 class="aa h-[14rem] rounded-md object-contain object-center border-double border-[#dddd] border-[0.4rem]">
                            <div class="text-center">
                                <h1 class="font-semibold text-lg">SHAHZEB AKRAM</h1>
                            </div>
                        </div>
                        <div class="flex flex-col gap-1">
                            <img src="{{ asset('assets/images/people/Bau%20Muhammad%20Bashir.jpg')}}" alt=""
                                 class="aa h-[14rem] rounded-md object-contain object-center border-double border-[#dddd] border-[0.4rem]">
                            <div class="text-center">
                                <h1 class="font-semibold text-lg">BAU M. BASHIR</h1>
                            </div>
                        </div>
                        <div class="flex flex-col gap-1">
                            <img src="{{ asset('assets/images/people/Kamran%20Zahoor.jpg')}}" alt=""
                                 class="aa h-[14rem] rounded-md object-contain object-center border-double border-[#dddd] border-[0.4rem]">
                            <div class="text-center">
                                <h1 class="font-semibold text-lg">KAMRAN ZAHOOR</h1>
                            </div>
                        </div>
                        <div class="flex flex-col gap-1">
                            <img src="{{ asset('assets/images/people/Abid%20Qadri.jpg')}}" alt=""
                                 class="aa h-[14rem] rounded-md object-contain object-center border-double border-[#dddd] border-[0.4rem]">
                            <div class="text-center">
                                <h1 class="font-semibold text-lg">ABID QADRI</h1>
                            </div>
                        </div>
                        <div class="flex flex-col gap-1">
                            <img src="{{ asset('assets/images/people/Zahid%20baig.jpg')}}" alt=""
                                 class="aa h-[14rem] rounded-md object-contain object-center border-double border-[#dddd] border-[0.4rem]">
                            <div class="text-center">
                                <h1 class="font-semibold text-lg">ZAHID BAIG</h1>
                            </div>
                        </div>
                        <div class="flex flex-col gap-1">
                            <img src="{{ asset('assets/images/people/Zubair%20Ahmed%20Ansari.jpg')}}" alt=""
                                 class="aa h-[14rem] rounded-md object-contain object-center border-double border-[#dddd] border-[0.4rem]">
                            <div class="text-center">
                                <h1 class="font-semibold text-lg">ZUBAIR AHMED ANSARI</h1>
                            </div>
                        </div>
                        <div class="flex flex-col gap-1">
                            <img src="{{ asset('assets/images/people/Muhammad%20Asif%20(UK%20London).jpg')}}" alt=""
                                 class="aa h-[14rem] rounded-md object-contain object-center border-double border-[#dddd] border-[0.4rem]">
                            <div class="text-center">
                                <h1 class="font-semibold text-lg">MUHAMMAD ASIF</h1>
                            </div>
                        </div>
                        <div class="flex flex-col gap-1">
                            <img src="{{ asset('assets/images/people/Muhammad%20Asif%20(UK%20Manchester).jpg')}}" alt=""
                                 class="aa h-[14rem] rounded-md object-contain object-center border-double border-[#dddd] border-[0.4rem]">
                            <div class="text-center">
                                <h1 class="font-semibold text-lg">MUHAMMAD ASIF</h1>
                            </div>
                        </div>
                        <div class="flex flex-col gap-1">
                            <img src="{{ asset('assets/images/people/Kernal%20Mezhar%20Masood.jpg')}}" alt=""
                                 class="aa h-[14rem] rounded-md object-contain object-center border-double border-[#dddd] border-[0.4rem]">
                            <div class="text-center">
                                <h1 class="font-semibold text-lg">COL. MAZHAR MASOOD</h1>
                            </div>
                        </div>
                        <div class="flex flex-col gap-1">
                            <img src="{{ asset('assets/images/people/Ch.%20Muhammad%20Ashfaq.jpg')}}" alt=""
                                 class="aa h-[14rem] rounded-md object-contain object-center border-double border-[#dddd] border-[0.4rem]">
                            <div class="text-center">
                                <h1 class="font-semibold text-lg">CH. M. ASHFAQ</h1>
                            </div>
                        </div>
                        <div class="flex flex-col gap-1">
                            <img src="{{ asset('assets/images/people/Ayaz%20Musharaf.jpg')}}" alt=""
                                 class="aa h-[14rem] rounded-md object-contain object-center border-double border-[#dddd] border-[0.4rem]">
                            <div class="text-center">
                                <h1 class="font-semibold text-lg">AYAZ MUSHARAF</h1>
                            </div>
                        </div>
                        <div class="flex flex-col gap-1">
                            <img src="{{ asset('assets/images/people/Umer%20Zaib%20Akram.jpg')}}" alt=""
                                 class="aa h-[14rem] rounded-md object-contain object-center border-double border-[#dddd] border-[0.4rem]">
                            <div class="text-center">
                                <h1 class="font-semibold text-lg">UMER ZAIB AKRAM</h1>
                            </div>
                        </div>
                        <div class="flex flex-col gap-1">
                            <img src="{{ asset('assets/images/people/Arshad%20Baig.jpg')}}" alt=""
                                 class="aa h-[14rem] rounded-md object-contain object-center border-double border-[#dddd] border-[0.4rem]">
                            <div class="text-center">
                                <h1 class="font-semibold text-lg">Arshad BAIG</h1>
                            </div>
                        </div>
                        <div class="flex flex-col gap-1">
                            <img src="{{ asset('assets/images/people/Malik%20Tahir%20Javaid.jpg')}}" alt=""
                                 class="aa h-[14rem] rounded-md object-contain object-center border-double border-[#dddd] border-[0.4rem]">
                            <div class="text-center">
                                <h1 class="font-semibold text-lg">MALIK TAHIR JAVAID</h1>
                            </div>
                        </div>
                        <div class="flex flex-col gap-1">
                            <img src="{{ asset('assets/images/people/Muhammad%20Naeem%20(1).jpg')}}" alt=""
                                 class="aa h-[14rem] rounded-md object-contain object-center border-double border-[#dddd] border-[0.4rem]">
                            <div class="text-center">
                                <h1 class="font-semibold text-lg">MUHAMMAD NAEEM</h1>
                            </div>
                        </div>
                        <div class="flex flex-col gap-1">
                            <img src="{{ asset('assets/images/people/Naveed%20Zafar.jpg')}}" alt=""
                                 class="aa h-[14rem] rounded-md object-contain object-center border-double border-[#dddd] border-[0.4rem]">
                            <div class="text-center">
                                <h1 class="font-semibold text-lg">NAVEED ZAFAR</h1>
                            </div>
                        </div>
                        <div class="flex flex-col gap-1">
                            <img src="{{ asset('assets/images/people/Malik%20Muhammad%20Riaz.jpg')}}" alt=""
                                 class="aa h-[14rem] rounded-md object-contain object-center border-double border-[#dddd] border-[0.4rem]">
                            <div class="text-center">
                                <h1 class="font-semibold text-lg">MALIK M. RIAZ</h1>
                            </div>
                        </div>
                        <div class="flex flex-col gap-1">
                            <img src="{{ asset('assets/images/people/Hassan%20Nazam.jpg')}}" alt=""
                                 class="aa h-[14rem] rounded-md object-contain object-center border-double border-[#dddd] border-[0.4rem]">
                            <div class="text-center">
                                <h1 class="font-semibold text-lg">HASSAN NAZAM</h1>
                            </div>
                        </div>
                        <div class="flex flex-col gap-1">
                            <img src="{{ asset('assets/images/people/Muhammad%20Attah%20ur%20Rehman.jpg')}}" alt=""
                                 class="aa h-[14rem] rounded-md object-contain object-center border-double border-[#dddd] border-[0.4rem]">
                            <div class="text-center">
                                <h1 class="font-semibold text-lg">M. ATA-UR-REHMAN</h1>
                            </div>
                        </div>
                        <div class="flex flex-col gap-1">
                            <img src="{{ asset('assets/images/people/Ch.%20Muhammad%20Asif.jpg')}}" alt=""
                                 class="aa h-[14rem] rounded-md object-contain object-center border-double border-[#dddd] border-[0.4rem]">
                            <div class="text-center">
                                <h1 class="font-semibold text-lg">CH. MUHAMMAD ASIF</h1>
                            </div>
                        </div>
                        <div class="flex flex-col gap-1">
                            <img src="{{ asset('assets/images/people/Muhammad%20Rashid%20Khan.jpg')}}" alt=""
                                 class="aa h-[14rem] rounded-md object-contain object-center border-double border-[#dddd] border-[0.4rem]">
                            <div class="text-center">
                                <h1 class="font-semibold text-lg">M. RASHID KHAN</h1>
                            </div>
                        </div>
                        <div class="flex flex-col gap-1">
                            <img src="{{ asset('assets/images/people/Muhammad%20Qaisar.jpg')}}" alt=""
                                 class="aa h-[14rem] rounded-md object-contain object-center border-double border-[#dddd] border-[0.4rem]">
                            <div class="text-center">
                                <h1 class="font-semibold text-lg">MUHAMMAD QAISER</h1>
                            </div>
                        </div>
                        <div class="flex flex-col gap-1">
                            <img src="{{ asset('assets/images/people/Abdullah.jpg')}}" alt=""
                                 class="aa h-[14rem] rounded-md object-contain object-center border-double border-[#dddd] border-[0.4rem]">
                            <div class="text-center">
                                <h1 class="font-semibold text-lg">MUHAMMAD ABDULLAH</h1>
                            </div>
                        </div>
                        <div class="flex flex-col gap-1">
                            <img src="{{ asset('assets/images/people/Salman%20Qasim.jpg')}}" alt=""
                                 class="aa h-[14rem] rounded-md object-contain object-center border-double border-[#dddd] border-[0.4rem]">
                            <div class="text-center">
                                <h1 class="font-semibold text-lg">SALMAN QASIM</h1>
                            </div>
                        </div>
                        <div class="flex flex-col gap-1">
                            <img src="{{ asset('assets/images/people/Khurram%20Shehzad%20(1).jpg')}}" alt=""
                                 class="aa h-[14rem] rounded-md object-contain object-center border-double border-[#dddd] border-[0.4rem]">
                            <div class="text-center">
                                <h1 class="font-semibold text-lg">KHURRAM SHAHZAD</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





@endsection
