<!-- /section -->
<section id="snippet-3" class="wrapper !bg-[#ffffff]  border-b-[rgba(164,174,198,0.2)] border-b border-solid py-6">
    <div class="container py-6 lg:py-8">
        <div class="flex flex-wrap mx-[-15px]">
            <div class="xl:w-10/12 w-full flex-[0_0_auto] !px-[15px] max-w-full !mx-auto">
                <div class="card image-wrapper bg-full bg-image bg-overlay bg-cover [background-size:100%] bg-[center_center] bg-no-repeat !bg-scroll !relative z-0 before:rounded-[0.4rem] before:bg-[rgba(30,34,40,.4)] before:content-[''] before:block before:absolute before:z-[1] before:w-full before:h-full before:left-0 before:top-0"
                    data-image-src="../../assets/img/photos/bg2.jpg">
                    <div class="card-body p-[2.25rem] xl:!p-[2.5rem]">
                        
                        <div class="flex flex-wrap mx-[-15px] items-center counter-wrapper !mt-[-40px] !text-center !text-white">
                            
                            @foreach ($counts as $c)
                                <div class="w-6/12 xl:w-3/12 lg:w-3/12 flex-[0_0_auto] !px-[15px] max-w-full !mt-[20px]">
                                    <h3
                                        class="counter counter-lg !text-white xl:!text-[2.2rem] !text-[calc(1.345rem_+_1.14vw)] !tracking-[normal] !leading-none !mb-2">
                                        {{ $c->digit }}</h3>
                                    <p class="!m-0">{{ $c->name }}</p>
                                </div>
                                <!--/column -->
                            @endforeach

                        </div>
                        <!--/.row -->
                    </div>
                    <!--/.card-body -->
                </div>
                <!--/.card -->
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
    </div>
</section>
<!-- /section -->
