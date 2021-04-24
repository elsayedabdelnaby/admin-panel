<!DOCTYPE html>
<html lang="en" >
    <!--begin::Head-->
    <head>
        <base href="../../../../">
        <meta charset="utf-8"/>
        <title>Admin</title>
        <meta name="description" content="Login page example"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

        <!--begin::Fonts-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700"/>        <!--end::Fonts-->


        <!--begin::Page Custom Styles(used by this page)-->
        <link href="{{ asset('assets/admin/css/pages/login/classic/login-5.css') }}" rel="stylesheet" type="text/css"/>
        <!--end::Page Custom Styles-->

        <!--begin::Global Theme Styles(used by all pages)-->
        <link href="{{ asset('assets/admin/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('assets/admin/plugins/custom/prismjs/prismjs.bundle.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('assets/admin/css/style.bundle.css') }}" rel="stylesheet" type="text/css"/>
        <!--end::Global Theme Styles-->

        <!--begin::Layout Themes(used by all pages)-->
        <!--end::Layout Themes-->

        <link rel="shortcut icon" href="{{ asset('assets/admin/media/logos/favicon.ico') }}"/>

    </head>
    <!--end::Head-->

    <!--begin::Body-->
    <body  id="kt_body"  class="quick-panel-right demo-panel-right offcanvas-right header-fixed header-mobile-fixed subheader-enabled aside-enabled aside-static page-loading"  >

    	<!--begin::Main-->
	<div class="d-flex flex-column flex-root">
		<!--begin::Login-->
        <div class="login login-5 login-signin-on d-flex flex-row-fluid" id="kt_login">
            <div class="d-flex flex-center bgi-size-cover bgi-no-repeat flex-row-fluid" style="background-image: url({{ asset('assets/admin/media/bg/bg-2.jpg') }});">
                <div class="login-form text-center text-white p-7 position-relative overflow-hidden">
                    <!--begin::Login Header-->
                    <div class="d-flex flex-center mb-15">
                        <a href="#">
                            <img src="{{ asset('assets/admin/media/logos/logo-letter-13.png') }}" class="max-h-75px" alt=""/>
                        </a>
                    </div>
                    <!--end::Login Header-->

                    <!--begin::Login Sign in form-->
                    <div class="login-signin">
                        <div class="mb-20">
                            <h3 class="opacity-40 font-weight-normal">Sign In To Admin</h3>
                            <p class="opacity-40">Enter your details to login to your account:</p>
                        </div>
                        <form class="form fv-plugins-bootstrap fv-plugins-framework" id="login_form" action="{{ route('admin.login') }}" method="POST">
                            @csrf
                            @if(session('message'))
                                <div class="alert alert-danger">
                                    <p>{{ session('message') }}</p>
                                </div>
                            @endif
                            @error('email')
                                <div class="alert alert-danger">
                                    <p>{{ $message }}</p>
                                </div>
                            @enderror
                            <div class="form-group">
                                <input class="form-control h-auto text-white bg-white-o-5 rounded-pill border-0 py-4 px-8" type="text" placeholder="Email" name="email" autocomplete="off" value="{{ old('email') }}"/>
                            </div>
                            <div class="form-group">
                            @error('password')
                                <div class="alert alert-danger">
                                    <p>{{ $message }}</p>
                                </div>
                            @enderror
                                <input class="form-control h-auto text-white bg-white-o-5 rounded-pill border-0 py-4 px-8" type="password" placeholder="Password" name="password"/>
                            </div>
                            <div class="form-group d-flex flex-wrap justify-content-between align-items-center px-8 opacity-60">
                                <div class="checkbox-inline">
                                    <label class="checkbox checkbox-outline checkbox-white text-white m-0">
                                        <input type="checkbox" name="remember"/>
                                        <span></span>
                                        Remember me
                                    </label>
                                </div>
                            </div>
                            <div class="form-group text-center mt-10">
                                <button id="login_submit" type="submit" class="btn btn-pill btn-primary opacity-90 px-15 py-3">Sign In</button>
                            </div>
                        </form>
                    </div>
                    <!--end::Login Sign in form-->
                </div>
            </div>
        </div>
        <!--end::Login-->
	</div>
    <!--end::Main-->


        <script>var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";</script>
        <!--begin::Global Config(global config for global JS scripts)-->
        <script>
            var KTAppSettings = {
    "breakpoints": {
        "sm": 576,
        "md": 768,
        "lg": 992,
        "xl": 1200,
        "xxl": 1200
    },
    "colors": {
        "theme": {
            "base": {
                "white": "#ffffff",
                "primary": "#6993FF",
                "secondary": "#E5EAEE",
                "success": "#1BC5BD",
                "info": "#8950FC",
                "warning": "#FFA800",
                "danger": "#F64E60",
                "light": "#F3F6F9",
                "dark": "#212121"
            },
            "light": {
                "white": "#ffffff",
                "primary": "#E1E9FF",
                "secondary": "#ECF0F3",
                "success": "#C9F7F5",
                "info": "#EEE5FF",
                "warning": "#FFF4DE",
                "danger": "#FFE2E5",
                "light": "#F3F6F9",
                "dark": "#D6D6E0"
            },
            "inverse": {
                "white": "#ffffff",
                "primary": "#ffffff",
                "secondary": "#212121",
                "success": "#ffffff",
                "info": "#ffffff",
                "warning": "#ffffff",
                "danger": "#ffffff",
                "light": "#464E5F",
                "dark": "#ffffff"
            }
        },
        "gray": {
            "gray-100": "#F3F6F9",
            "gray-200": "#ECF0F3",
            "gray-300": "#E5EAEE",
            "gray-400": "#D6D6E0",
            "gray-500": "#B5B5C3",
            "gray-600": "#80808F",
            "gray-700": "#464E5F",
            "gray-800": "#1B283F",
            "gray-900": "#212121"
        }
    },
    "font-family": "Poppins"
};
        </script>
        <!--end::Global Config-->

    <!--begin::Global Theme Bundle(used by all pages)-->
        <script src="{{ asset('assets/admin/plugins/global/plugins.bundle.js') }}"></script>
        <script src="{{ asset('assets/admin/plugins/custom/prismjs/prismjs.bundle.js') }}"></script>
        <script src="{{ asset('assets/admin/js/scripts.bundle.js') }}"></script>
    <!--end::Global Theme Bundle-->


    <!--begin::Page Scripts(used by this page)-->
        <script src="{{ asset('assets/admin/js/pages/custom/login/login-general.js') }}"></script>
    <!--end::Page Scripts-->
    </body>
    <!--end::Body-->
</html>
