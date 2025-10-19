<section class="py-10 bg-white">
    <div class="container mx-auto px-6 lg:px-12 space-y-16">

        <!-- Sejarah -->
        <div>
            <h2 class="text-3xl font-bold text-indigo-700 mb-4 border-l-4 border-indigo-500 pl-3">Sejarah</h2>
            <div class="prose max-w-none text-gray-700 leading-relaxed text-lg">
                {!! $profileData->story ?? '<p>Belum ada data sejarah yang tersedia.</p>' !!}
            </div>
        </div>

        <!-- Visi -->
        <div>
            <h2 class="text-3xl font-bold text-indigo-700 mb-4 border-l-4 border-indigo-500 pl-3">Visi</h2>
            <p class="text-gray-700 text-lg leading-relaxed whitespace-pre-line">
                {{ $profileData->vision ?? 'Visi belum diisi.' }}
            </p>
        </div>

        <!-- Misi -->
        <div>
            <h2 class="text-3xl font-bold text-indigo-700 mb-4 border-l-4 border-indigo-500 pl-3">Misi</h2>
            <div class="space-y-2 text-gray-700 leading-relaxed">
                <p class="text-gray-700 text-lg leading-relaxed whitespace-pre-line">
                    {{ $profileData->mision ?? 'Visi belum diisi.' }}
                </p>
            </div>
        </div>

        <!-- Motto -->
        <div>
            <h2 class="text-3xl font-bold text-indigo-700 mb-4 border-l-4 border-indigo-500 pl-3">Moto</h2>
            <blockquote class="border-l-4 border-indigo-400 pl-4 italic text-gray-700 text-xl">
                “{{ $profileData->motto ?? 'Moto belum diisi.' }}”
            </blockquote>
        </div>
    </div>
</section>