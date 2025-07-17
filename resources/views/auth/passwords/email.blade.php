<!doctype html>
<html lang="en" class="minimal-theme">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="admin/images/favicon-32x32.png" type="image/png" />
    <link href="{{ asset('admin/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/css/bootstrap-extended.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/css/icons.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <link href="{{ asset('admin/css/pace.min.css') }}" rel="stylesheet" />

    <title>Construction Site</title>
</head>
<body>

    <div class="wrapper">

        <main class="authentication-content">
            <div class="container-fluid">
                <div class="authentication-card">
                    <div class="card shadow rounded-0 overflow-hidden">
                        <div class="row g-0">
                            <div class="col-lg-6 d-flex align-items-center justify-content-center border-end">
                                <img src="{{ asset('admin/images/error/forgot-password-frent-img.jpg') }}" class="img-fluid" alt="">
                            </div>
                            @if (session('status'))
                            <div>{{ session('status') }}</div>
                            @endif
                            <div class="col-lg-6">
                                <div class="card-body p-4 p-sm-5">
                                    <h5 class="card-title">Forgot Password?</h5>
                                    <p class="card-text mb-5">Enter your registered email ID to reset the password</p>
                                    <form method="POST" action="{{ route('password.email') }}">
                                        @csrf
                                        <div class="row g-3">
                                            <div class="col-12">
                                                <label for="inputEmailid" class="form-label">Email id</label>
                                                <input type="email" class="form-control form-control-lg radius-30" name="email" id="inputEmailid" placeholder="Email id" required>
                                            </div>
                                            <div class="col-12">
                                                <div class="d-grid gap-3">
                                                    <button type="submit" class="btn btn-lg btn-primary radius-30">Send</button>

                                                </div>
                                                @if (session('status'))
                                                <div>{{ session('status') }}</div>
                                                @endif
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>


    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/pace.min.js"></script>


</body>

</html>
