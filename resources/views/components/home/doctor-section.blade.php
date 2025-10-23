<section id="dokter" class="wrapper !bg-[#ffffff]">
    <div class="container py-10 lg:py-15 !text-center">
        <div class="flex flex-wrap mx-[-15px]">
            <div
                class="md:w-10/12 xl:w-8/12 lg:w-8/12 w-full flex-[0_0_auto] !px-[15px] max-w-full xl:!ml-[16.66666667%] lg:!ml-[16.66666667%] md:!ml-[8.33333333%]">
                <h2 class="!text-[.75rem] uppercase !text-[#aab0bc] !mb-3 !tracking-[0.02rem] !leading-[1.35]">
                    Tim Dokter Kami
                </h2>
                <h3 class="!text-[calc(1.305rem_+_0.66vw)] font-bold xl:!text-[1.8rem] !leading-[1.3] !mb-10 xl:!px-10">
                    Dokter <span
                        class="!relative z-[2] after:content-[''] after:absolute after:z-[-1] after:block after:bg-no-repeat after:bg-bottom after:bottom-[-0.1em] after:w-[110%] after:h-[0.3em] after:-translate-x-2/4 after:left-2/4 style-2 yellow">Profesional</span>
                    dan
                    <span
                        class="!relative z-[2] after:content-[''] after:absolute after:z-[-1] after:block after:bg-no-repeat after:bg-bottom after:bottom-[-0.1em] after:w-[110%] after:h-[0.3em] after:-translate-x-2/4 after:left-2/4 style-2 yellow">Berpengalaman</span>
                    siap melayani Anda dengan sepenuh hati.
                </h3>
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->

        <div class="!relative">
            <div
                class="flex flex-wrap mx-[-15px] xl:mx-[-12.5px] lg:mx-[-12.5px] md:mx-[-12.5px] !mt-[-25px] !text-center">

                @forelse($doctors as $doctor)
                    <div
                        class="md:w-6/12 lg:w-6/12 xl:w-3/12 w-full flex-[0_0_auto] !px-[15px] xl:!px-[12.5px] lg:!px-[12.5px] md:!px-[12.5px] max-w-full !mt-[25px]">
                        <div class="card !shadow-[0_0.25rem_1.75rem_rgba(30,34,40,0.07)] h-full">
                            <div class="card-body flex-[1_1_auto] p-[20px] flex flex-col">
                                <!-- Doctor Image -->
                                <div class="relative mb-4 mx-auto">
                                    <div
                                        class="w-32 h-32 rounded-full overflow-hidden border-4 border-[#fab758] shadow-lg">
                                        <img src="{{ $doctor->image_url }}" alt="{{ $doctor->name }}"
                                            class="w-full h-full object-cover"
                                            onerror="this.src='https://ui-avatars.com/api/?name={{ urlencode($doctor->name) }}&size=256&background=fab758&color=fff'">
                                    </div>
                                    {{-- <!-- Status Badge -->
                                    <div class="absolute bottom-0 right-0 bg-green-500 text-white px-2 py-1 rounded-full text-xs font-semibold flex items-center gap-1">
                                        <span class="w-2 h-2 bg-white rounded-full animate-pulse"></span>
                                        Aktif
                                    </div> --}}
                                </div>

                                <!-- Doctor Name -->
                                <h4 class="!mb-1 text-lg font-bold">{{ $doctor->name }}</h4>

                                <!-- Specialist -->
                                <p class="!text-[#fab758] font-semibold !mb-3 text-sm">
                                    {{ $doctor->spesialist ?? 'Dokter Umum' }}
                                </p>

                                <!-- Service Badge -->
                                @if ($doctor->service)
                                    <div
                                        class="inline-flex items-center justify-center bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-xs font-medium mx-auto">
                                        <svg class="w-3 h-3 mr-1 text-[#fab758]" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                        </svg>
                                        {{ $doctor->service->name }}
                                    </div>
                                @endif

                            </div>
                            <!--/.card-body -->
                        </div>
                        <!--/.card -->
                    </div>
                @empty
                    <div class="w-full text-center py-10">
                        <svg class="w-20 h-20 mx-auto text-gray-300 mb-3" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                        <p class="text-gray-500 text-sm">Belum ada data dokter tersedia</p>
                    </div>
                @endforelse

            </div>
            <!--/.row -->
        </div>
        <!-- /.relative -->

        <!-- View All Button -->
        @if ($doctors->count() > 0)
            <div class="flex justify-center mt-10">
                {{-- <a href="{{ route('doctors.index') }}" 
               class="btn btn-lg btn-primary text-white !bg-[#3f78e0] border-[#3f78e0] hover:text-white hover:bg-[#3f78e0] hover:border-[#3f78e0] focus:shadow-[rgba(92,140,229,1)] active:text-white active:bg-[#3f78e0] active:border-[#3f78e0] disabled:text-white disabled:bg-[#3f78e0] disabled:border-[#3f78e0] !rounded-[50rem] btn-icon btn-icon-start">
                <i class="uil uil-arrow-right before:content-['\e941']"></i> 
                Lihat Semua Dokter
            </a> --}}
            </div>
        @endif
    </div>
</section>
<!-- /section -->

<style>
    @keyframes pulse {

        0%,
        100% {
            opacity: 1;
        }

        50% {
            opacity: 0.5;
        }
    }

    .animate-pulse {
        animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
    }

    /* Hover effect untuk card */
    .card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 0.5rem 2rem rgba(30, 34, 40, 0.15) !important;
    }

    /* Smooth image loading */
    .card img {
        transition: opacity 0.3s ease;
    }

    .card img:hover {
        opacity: 0.95;
    }
</style>
