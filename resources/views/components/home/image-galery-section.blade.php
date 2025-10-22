<section id="galeri" class="wrapper bg-white">
    <div class="container pt-20 xl:pt-28 lg:pt-28 md:pt-28">
        <div class="flex flex-wrap mx-[-15px]">
            <div class="lg:w-9/12 xl:w-8/12 xxl:w-7/12 w-full px-[15px] mx-auto text-center">
                <h2 class="text-[.75rem] uppercase text-[#aab0bc] mb-3 tracking-[0.02rem]">
                    Dokumentasi Kegiatan
                </h2>
                <h3 class="text-[calc(1.305rem_+_0.66vw)] font-bold xl:text-[1.8rem] leading-[1.3] mb-10">
                    Dokumentasi Program, Acara, dan Kegiatan Kami
                </h3>
            </div>
        </div>
    </div>

    <div class="container-fluid xl:px-6 lg:px-6 md:px-6">
        <div class="swiper-container mb-10" id="gallerySwiper">
            <div class="swiper">
                <div class="swiper-wrapper">
                    @foreach ($imageGalleries as $gallery)
                        @php
                            $images = is_string($gallery->image) ? json_decode($gallery->image, true) : $gallery->image;
                        @endphp

                        @if (is_array($images) && count($images))
                            @foreach ($images as $img)
                                <div class="swiper-slide flex justify-center items-center !h-[250px]">
                                    <div
                                        class="w-[250px] h-[250px] rounded-lg overflow-hidden bg-gray-100 flex items-center justify-center">
                                        <img src="{{ asset('storage/' . ltrim($img, '/')) }}"
                                            alt="{{ $gallery->title }}"
                                            class="w-full h-full object-cover object-center block" />
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    @endforeach
                </div>

                <div class="swiper-pagination mt-6"></div>
            </div>
        </div>
    </div>
</section>

<link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">
<script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        new Swiper('#gallerySwiper .swiper', {
            slidesPerView: 4,
            spaceBetween: 10, // beri sedikit ruang biar gak nempel
            loop: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            autoplay: {
                delay: 2000,
                disableOnInteraction: false,
            },
            breakpoints: {
                1280: {
                    slidesPerView: 4
                },
                1024: {
                    slidesPerView: 2
                },
                768: {
                    slidesPerView: 2
                },
                480: {
                    slidesPerView: 1
                },
            },
        });
    });
</script>
