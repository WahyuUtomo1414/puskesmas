<section class="wrapper !bg-[#ffffff] ">
    <div class="container pt-20 xl:pt-28 lg:pt-28 md:pt-28 pb-16 xl:pb-2 lg:pb-2 md:pb-[5rem]">
        <figure class="rounded-[0.4rem] overflow-hidden w-full h-[700px]">
            <img 
                class="w-full h-full object-cover" 
                src="{{ $profile }}" 
                alt="Struktur Organisasi"
            >
        </figure>
            <div class="flex flex-wrap mx-[-15px]">
                <div class="xl:w-10/12 w-full flex-[0_0_auto] !px-[15px] max-w-full !mx-auto">
                    <div class="card image-wrapper bg-full bg-image bg-overlay bg-overlay-400 !text-white !mt-[-1.25rem] xl:!mt-0 lg:!mt-0  xl:-translate-y-2/4 lg:-translate-y-2/4 bg-cover [background-size:100%] bg-[center_center] bg-no-repeat !bg-scroll !relative z-0 before:rounded-[0.4rem] before:bg-[rgba(30,34,40,.4)] before:content-[''] before:block before:absolute before:z-[1] before:w-full before:h-full before:left-0 before:top-0" data-image-src="../../assets/img/photos/bg3.jpg">
                        <div class="card-body p-[2.25rem] xl:!p-[2.5rem]">
                            <div class="flex flex-wrap mx-[-15px] items-center counter-wrapper !mt-[-20px] !text-center">
                                @foreach ($counts as $c)
                                    <div class="w-6/12 xl:w-3/12 lg:w-3/12 flex-[0_0_auto] !px-[15px] max-w-full !mt-[20px]">
                                        <h3 class="counter counter-lg !text-white xl:!text-[2.2rem] !text-[calc(1.345rem_+_1.14vw)] !tracking-[normal] !leading-none !mb-2">
                                            {{ $c->value }}
                                        </h3>
                                        <p class="!text-[0.8rem] font-medium !mb-0 !text-white">
                                            {{ $c->name }}
                                        </p>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            <!--/.card -->
    </div>
    <!-- /.row -->
    </div>
<!-- /.container -->
</section>