
@extends('layouts.app')

@section('content')


    <section data-aos="fade-left" data-aos-duration="500" class="aos-init aos-animate">
        <div class="container p-[2rem]">
            <div class="text-center flex flex-col gap-4">
                <h1 class="font-bold text-[#031D26] text-[2rem]">Financial <span class="text-[#B11515]">Reports</span>
                </h1>
            </div>
            <div class="grid grid-cols-3 justify-center gap-[2rem] mt-[2rem]">
                <a href="../wp-content/themes/mukhtaran-rafiq-foundation/assets/images/reports/Annual%20Report%202019%20.pdf" download target="_blank">
                    <div
                        class="border rounded-xl transition-all cursor-pointer hover:bg-gray-100 p-5 flex flex-col gap-4">
                        <h1 class="text-lg font-semibold">Annual Report 2019</h1>
                        <p class="text-sm text-[#555555]">Annual Report for the year of 2019</p>
                        <div class="flex items-center gap-1 text-sm">
                            <p class="text-[#B11515]">Date</p>
                            <p class="text-[#555555]">- 2019</p>
                        </div>
                    </div>
                </a>
                <a href="../wp-content/themes/mukhtaran-rafiq-foundation/assets/images/reports/Annual%20Report%202020.pdf" download target="_blank">
                    <div
                        class="border rounded-xl transition-all cursor-pointer hover:bg-gray-100 p-5 flex flex-col gap-4">
                        <h1 class="text-lg font-semibold">Annual Report 2020</h1>
                        <p class="text-sm text-[#555555]">Annual Report for the year of 2020</p>
                        <div class="flex items-center gap-1 text-sm">
                            <p class="text-[#B11515]">Date</p>
                            <p class="text-[#555555]">- 2020</p>
                        </div>
                    </div>
                </a>
                <a href="{{ asset('assets/images/reports/Annual%20Report%202021.pdf')}}" download target="_blank">
                    <div
                        class="border rounded-xl transition-all cursor-pointer hover:bg-gray-100 p-5 flex flex-col gap-4">
                        <h1 class="text-lg font-semibold">Annual Report 2021</h1>
                        <p class="text-sm text-[#555555]">Annual Report for the year of 2021</p>
                        <div class="flex items-center gap-1 text-sm">
                            <p class="text-[#B11515]">Date</p>
                            <p class="text-[#555555]">- 2021</p>
                        </div>
                    </div>
                </a>
                <a href="{{ asset('assets/images/reports/Annual%20Report%202022%20(urdu).pdf')}}" download target="_blank">
                    <div
                        class="border rounded-xl transition-all cursor-pointer hover:bg-gray-100 p-5 flex flex-col gap-4">
                        <h1 class="text-lg font-semibold">Annual Report 2022 (urdu)</h1>
                        <p class="text-sm text-[#555555]">Annual Report for the year of 2022 in URDU.</p>
                        <div class="flex items-center gap-1 text-sm">
                            <p class="text-[#B11515]">Date</p>
                            <p class="text-[#555555]">- 2022</p>
                        </div>
                    </div>
                </a>
                <a href="{{ asset('assets/images/reports/Audited%20Financials%202019.pdf')}}" download target="_blank">
                    <div
                        class="border rounded-xl transition-all cursor-pointer hover:bg-gray-100 p-5 flex flex-col gap-4">
                        <h1 class="text-lg font-semibold">Audited Financials 2019</h1>
                        <p class="text-sm text-[#555555]">Audited Financials for the year of 2019</p>
                        <div class="flex items-center gap-1 text-sm">
                            <p class="text-[#B11515]">Date</p>
                            <p class="text-[#555555]">- 2019</p>
                        </div>
                    </div>
                </a>
                <a href="../wp-content/themes/mukhtaran-rafiq-foundation/assets/images/reports/Audited%20Financials%202020.pdf" download target="_blank">
                    <div
                        class="border rounded-xl transition-all cursor-pointer hover:bg-gray-100 p-5 flex flex-col gap-4">
                        <h1 class="text-lg font-semibold">Audited Financials 2020</h1>
                        <p class="text-sm text-[#555555]">Audited Financials for the year of 2020</p>
                        <div class="flex items-center gap-1 text-sm">
                            <p class="text-[#B11515]">Date</p>
                            <p class="text-[#555555]">- 2020</p>
                        </div>
                    </div>
                </a>
                <a href="{{ asset('assets/images/reports/Audited%20Financials%202021.pdf')}}" download target="_blank">
                    <div
                        class="border rounded-xl transition-all cursor-pointer hover:bg-gray-100 p-5 flex flex-col gap-4">
                        <h1 class="text-lg font-semibold">Audited Financials 2021</h1>
                        <p class="text-sm text-[#555555]">Audited Financials for the year of 2021</p>
                        <div class="flex items-center gap-1 text-sm">
                            <p class="text-[#B11515]">Date</p>
                            <p class="text-[#555555]">- 2021</p>
                        </div>
                    </div>
                </a>





            </div>
        </div>
    </section>


@endsection
