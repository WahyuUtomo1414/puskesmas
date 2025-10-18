<nav class="navbar navbar-expand-lg fancy navbar-light bg-white caret-none xl:[background:0_0!important] lg:[background:0_0!important]">
    <div class="container">
        <div class="navbar-collapse-wrapper bg-[rgba(255,255,255)] opacity-100 flex flex-row !flex-nowrap w-full justify-between items-center shadow-2xl border-gray-900">
            
            <div class="navbar-brand w-full flex items-center space-x-3">
                <a href="/" class="block">
                    <img src="{{ asset('images/logo1.jpg') }}" alt="HIMSI Logo" class="h-16 w-auto max-h-16" style="max-width:150px;">
                </a>
            </div>


            <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
                <div class="offcanvas-header xl:!hidden lg:!hidden">
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body xl:!ml-auto lg:!ml-auto flex  flex-col !h-full">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">Profile</a></li>
                        
                        <li class="nav-item"><a class="nav-link" href="#divisi">Layanan</a>
                        </li>
                        
                        <div class="offcanvas-footer xl:!hidden lg:!hidden">
                        </div>
                        <!-- /.offcanvas-footer -->
                    </ul>
                </div>
                <!-- /.offcanvas-body -->
            </div>

            <!-- /.navbar-collapse -->
            <div class="navbar-other w-full !flex !ml-auto">
                <ul class="navbar-nav !flex-row !items-center !ml-auto">
                    <li class="nav-item xl:!hidden lg:!hidden">
                        <button class="hamburger offcanvas-nav-btn"><span></span></button>
                    </li>
                </ul>
                <!-- /.navbar-nav -->
            </div>
            <!-- /.navbar-other -->

        </div>
        <!-- /.navbar-collapse-wrapper -->
    </div>
    <!-- /.container -->
</nav>