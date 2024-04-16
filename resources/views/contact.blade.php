
@extends('layouts.app')

@section('content')


    <div class="px-6 py-12 md:px-12">
        <div class="container mx-auto xl:px-32">
            <div class="grid lg:grid-cols-2 flex items-center">
                <div class="md:mt-12 lg:mt-0 mb-12 lg:mb-0 relative z-[1]">
                    <div class="block border rounded-lg shadow-lg px-6 py-12 md:px-12 lg:-mr-14"
                         style="background: hsla(0, 0%, 100%, 0.55); backdrop-filter: blur(30px)">
                        <h2 class="text-3xl font-bold mb-12">Contact us</h2>

                        <form   action="{{ route('form.submit') }}" method="POST"  class="contact-form">
                          @csrf
                            <div class="form-group mb-6">
                                <input type="text"
                                       class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:outline-none !outline-none"
                                       id="name" name="name" placeholder="Name" />
                            </div>
                            <div class="form-group mb-6">
                                <input type="email" name="email"
                                       class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:outline-none !outline-none"
                                       id="email" placeholder="Email address" />
                            </div>
                            <div class="form-group mb-6">
                                <textarea name="message"
                                          class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:outline-none !outline-none"
                                          id="message"  rows="3" placeholder="Message"></textarea>
                            </div>
                            <button type="submit" name="submit"
                                    class="w-full px-6 py-2.5 bg-[#B11515] text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-[#B11515] hover:shadow-lg focus:bg-[#B11515] focus:shadow-lg focus:outline-none focus:ring-0 active:bg-[#B11515] active:shadow-lg transition duration-150 ease-in-out">
                                Send
                            </button>
                        </form>
                        <div class="text-sm text-[#555555] mt-5">
                            <p class="font-semibold text-black">For queries contact us at:</p>
                            <p class="flex items-center gap-1">
                                <a class="underline" href="tel:042-36548575">042-36548575 </a>,
                                <a class="underline" href="tel:042-36531518">042-36531518</a>
                            </p>
                            <p class="flex items-center gap-1">
                                <a class="underline" href="tel:0309-7773177">0309-7773177</a> ,
                                <a class="underline" href="tel:0309-7774177">0309-7774177</a>
                            </p>
                            <br>
                            <p class="font-semibold"><a href="mailto:info@mrf.org.pk"
                                                        class="underline">info@mrf.org.pk</a></p>
                        </div>
                    </div>
                </div>
                <div class="md:mb-12 lg:mb-0">
                    <div class="h-[40rem] relative shadow-lg z-0 rounded-lg">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d54410.05604644161!2d74.38915909173667!3d31.534361779285593!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39191003a395edab%3A0x66690ba50f3e95c8!2sMukhtaran%20Rafiq%20Welfare%20Hospital!5e0!3m2!1sen!2s!4v1672563213633!5m2!1sen!2s"
                            class="inset-0 h-full w-full absolute rounded-lg" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="px-6 py-8 md:px-12" id="donate_now">
        <div class="container mx-auto xl:px-32 grid lg:grid-cols-2 gap-6">
            <div>

                <h1 class="font-bold !text-[#031D26] text-[2rem] active-nav w-fit after:!left-0 after:!translate-x-0">Donate <span class="!text-[#B11515]">Now</span>
                </h1>
                <div class="flex justify-center flex-col gap-1 text-[#555555] mt-5">
                    <p>You can send your donations to:</p>
                    <p>Bank Alfalah Ltd.</p>
                    <p>Mukhtaran Rafiq Foundation.</p>
                    <p>Mughalpura Branch, Lahore.</p>
                    <p>A/C # 5524-5000338312</p>
                    <p>Swift Code  : ALFHPKKA524</p>
                    <p>
                        IBAN Number : PK72ALFH5524005000338312
                    </p>

                </div>


            </div>


            <div>
                <h1
                    class="pb-2 mb-4 font-bold text-[1.8rem] active-nav !text-black relative after:!translate-x-0 after:w-[5rem] after:left-0 !text-left">
                    MRF <span class='!text-[#B11515]'>Registration</span></h1>
                <ul>
                    <li> Voluntary Social Welfare Agencies (Registration and Control) Ordinance, 1961
                        (XLVI of
                        1961)
                        Registration No. (DC.SW.LHR(R&G)11-1683)
                    </li>
                    <li>
                        Registered with FBR (NTN 3138531-1)
                    </li>
                </ul>

                <ul>
                    <li>Register with Punjab Healthcare Commission (R-66143)</li>
                    <li>Register with Punjab Charity Commission (Registration No.
                        PB-LHR-4311760331314431)
                    </li>
                    <li>Registered with PNRA (License No. X205(695))</li>
                </ul>
            </div>



        </div>
    </div>

    @endsection
