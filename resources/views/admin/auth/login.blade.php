<!DOCTYPE html>
<html lang="en">


<!--***************************-->
@include('admin.auth.head')
<!--***************************-->

<!-- [Body] Start -->

<body data-pc-preset="preset-1" data-pc-sidebar-theme="dark" data-pc-sidebar-caption="true" data-pc-direction="ltr"
    data-pc-theme="dark">
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    <!-- [ Pre-loader ] End -->

    <div class="auth-main v1">
        <div class="auth-wrapper">
            <div class="auth-form">
                <div class="card my-5">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="{{ asset('admin-assets') }}/images/authentication/img-auth-login.png"
                                alt="images" class="img-fluid mb-3">
                            <h4 class="f-w-500 mb-2">Login with your email</h4>

                        </div>
                        <!--**************************START FORM*******************************-->
                        @livewire('admin.auth.admin-login-component')
                        <!--***************************END FORM********************************-->


                    </div>
                </div>
            </div>

            <div class="auth-sidefooter">

                <hr class="mb-3 mt-4" />
                <div class="row">
                    <div class="col my-1">
                        <p class="m-0">Made with ♥ by Team <a href="https://themeforest.net/user/phoenixcoded"
                                target="_blank"> Phoenixcoded</a></p>
                    </div>
                    <div class="col-auto my-1">
                        <ul class="list-inline footer-link mb-0">
                            <li class="list-inline-item"><a href="../index.html">Home</a></li>
                            <li class="list-inline-item"><a href="https://pcoded.gitbook.io/light-able/"
                                    target="_blank">Documentation</a></li>
                            <li class="list-inline-item"><a href="https://phoenixcoded.support-hub.io/"
                                    target="_blank">Support</a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- [ Main Content ] end -->

    <!--***************************-->
    @include('admin.auth.scripts')
    <!--***************************-->

</body>
<!-- [Body] end -->

</html>
