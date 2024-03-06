<!doctype html>
<html lang="en">
    <head> 
        @include("Auth::includes.head")
    </head>
    <body data-layout-mode="light">
        <div class="auth-page">
            <div class="container-fluid p-0">
                <div class="row g-0">
                    <div class="col-xxl-7 col-lg-6 col-md-6 d-none d-sm-block" style="background: rgb(0 0 0 / 6%) !important">
                        <div class=" pt-md-5 p-4 d-flex">
                            <div class=" bg-white"></div>
                            <img src="{{ asset('assets/images/device.png') }}" alt="" class="img-fluid"  width="90%">
                        </div>
                    </div>

                    <div class="col-xxl-3 col-lg-4 col-md-5 offset-lg-1 position-relative">
                        <div class="position-relative">
                            <div class="shapes-container">
                                <div class="bg-box-rectangle"></div>
                            </div>
                        </div>
                        <div class="auth-full-page-content d-flex p-sm-5 p-4">
                            <div class="w-100">
                                <div class="d-flex flex-column h-100">
                                    <div class="mb-4 mb-md-5 text-center">
                                        <a href="{{ url()->current() }}" class="d-block auth-logo">
                                            <img src="{{ asset('assets/images/uftcl-logo.png') }}" alt="" height="50"> <span class="logo-txt"></span>
                                        </a>
                                    </div>
                                    <div class="auth-content my-auto">
                                        @yield('content')
                                    </div>

                                    <div class="mt-4 mt-md-5 text-center">
                                        <p class="mb-0">© <script>document.write(new Date().getFullYear())</script> UFTCL </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Js Library & Scripts --}}
        @include("Auth::includes.scripts")

    </body>
</html>