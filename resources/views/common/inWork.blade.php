<div class="account-body" style="background: #{{ rand(0, 9) * 100000 + rand(0, 9) * 1000 }}">
    <div class="container">
        <div class="row vh-100 ">
            <div class="col-12 align-self-center">
                <div class="auth-page">
                    <div class="card auth-card shadow-lg">
                        <div class="card-body">
                            <div class="px-3">

                                <div class="auth-logo-box">
                                    <a href="{{ route('home') }}" class="logo logo-admin"><img
                                            src="{{ asset('assets/img/logo-alb.png') }}" height="55" alt="logo"
                                            class="auth-logo"></a>
                                </div>

                                <div class="text-center auth-logo-text">
                                    <h4 class="mt-0 mb-3 mt-5">This zone is still in work</h4>
                                    <p class="text-muted mb-0">Please contact us for more details.</p>
                                </div>

                            </div>
                            <!--end /div-->
                        </div>
                        <!--end card-body-->
                    </div>
                    <!--end card-->

                </div>
                <!--end auth-page-->
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</div>
