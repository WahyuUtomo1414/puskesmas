<x-layout.base title="{{ $service->name }}">
    <div class="bg-white grow shrink-0">

        <x-layout.navbar />

        <!-- Banner -->
        <section class="relative w-full h-[350px] overflow-hidden">
            <img 
                src="{{ asset('storage/' . $service->banner) }}" 
                alt="{{ $service->name }}" 
                class="object-cover w-full h-full brightness-75">
            <div class="absolute inset-0 flex flex-col justify-center items-center text-center text-white">
                <img 
                    src="{{ asset('storage/' . $service->icon) }}" 
                    alt="icon {{ $service->name }}" 
                    class="w-16 h-16 mb-4">
                <h1 class="text-4xl font-bold">{{ $service->name }}</h1>
            </div>
        </section>

        <!-- Header Informasi Layanan -->
        <div class="max-w-4xl mx-auto text-center mt-12 mb-10">
            <div class="inline-flex items-center justify-center gap-4 bg-indigo-50 px-6 py-4 rounded-2xl shadow-sm">
                <img 
                    src="{{ asset('storage/' . $service->icon) }}" 
                    alt="icon {{ $service->name }}" 
                    class="w-14 h-14 object-contain"
                >
                <h1 class="text-3xl font-bold text-indigo-700">
                    {{ $service->name }}
                </h1>
            </div>
        </div>

        <!-- Content -->
        <section class="py-16 bg-white">
            <div class="container mx-auto px-6 lg:px-12">

                <!-- Deskripsi -->
                <div class="max-w-4xl mx-auto mb-12">
                    <h2 class="text-2xl font-semibold text-indigo-700 mb-4 border-l-4 border-indigo-500 pl-3">Deskripsi Layanan</h2>
                    <div class="prose max-w-none text-gray-700 leading-relaxed">
                        {!! $service->description !!}
                    </div>
                </div>

                <!-- Jadwal -->
                <div class="max-w-4xl mx-auto mb-16">
                    <h2 class="text-2xl font-semibold text-indigo-700 mb-4 border-l-4 border-indigo-500 pl-3">Jadwal Pelayanan</h2>

                    @if(!empty($service->schedule))
                        <div class="overflow-hidden bg-gray-50 rounded-xl shadow-sm">
                            <table class="min-w-full border-collapse text-gray-700">
                                <thead class="bg-indigo-600 text-white">
                                    <tr>
                                        <th class="py-3 px-4 text-left">Hari</th>
                                        <th class="py-3 px-4 text-left">Waktu</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($service->schedule as $sch)
                                        <tr class="border-b border-gray-200 hover:bg-indigo-50">
                                            <td class="py-3 px-4 font-medium">{{ $sch['day'] }}</td>
                                            <td class="py-3 px-4">{{ $sch['time'] }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <p class="text-gray-500 italic">Jadwal pelayanan belum tersedia.</p>
                    @endif
                </div>

                <!-- Galeri -->
                <div class="max-w-6xl mx-auto">
                    <h2 class="text-2xl font-semibold text-indigo-700 mb-4 border-l-4 border-indigo-500 pl-3">
                        Galeri Layanan
                    </h2>

                    @if ($service->image)
                        <div class="flex flex-wrap mx-[-15px] mt-3 mb-10">
                            @foreach ($service->image as $img)
                                <div class="xl:w-6/12 lg:w-6/12 md:w-6/12 w-full flex-[0_0_auto] px-[15px] mt-[30px]">
                                    <figure class="overflow-hidden group rounded-lg cursor-pointer shadow-md hover:shadow-xl transition-all duration-300">
                                        <img 
                                            src="{{ asset('storage/' . $img) }}" 
                                            alt="Foto {{ $service->name }}" 
                                            class="w-full h-[300px] object-cover rounded-lg transform group-hover:scale-105 transition-transform duration-500 ease-out"
                                        >
                                    </figure>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <p class="text-gray-500 italic">Belum ada foto untuk layanan ini.</p>
                    @endif
                </div>

            </div>
        </section>

        <x-layout.footer/>
    </div>
</x-layout.base>