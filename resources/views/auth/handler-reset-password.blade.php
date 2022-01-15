<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Material Design Bootstrap Template</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link rel="stylesheet" href="{{ asset('components/mdb/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('components/mdb/css/mdb.min.css') }}">
    <!-- Your custom styles (optional) -->
    <style>
        html,
        body,
        header,
        .view {
            height: 100%;
        }

        @media (min-width: 560px) and (max-width: 740px) {
            html,
            body,
            header,
            .view {
                height: 650px;
            }
        }

        @media (min-width: 800px) and (max-width: 850px) {
            html,
            body,
            header,
            .view {
                height: 650px;
            }
        }

        #forget-password:hover {
            border-bottom: 1px solid #ffffff;
        }
    </style>
</head>

<body class="login-page">

<!-- Main Navigation -->
<header>

    <!-- Intro Section -->
    <section class="view intro-2">
        <div class="mask rgba-stylish-strong h-100 d-flex justify-content-center align-items-center">
            <div class="container">
                <form action="{{ route("password.update") }}" method="POST">
                    @csrf
                    <input type="hidden" name="token" value="{{ $request->route("token") }}">
                    <div class="row">
                        <div class="col-xl-5 col-lg-6 col-md-10 col-sm-12 mx-auto mt-5">

                            <!-- Form with header -->
                            <div class="card wow fadeIn" data-wow-delay="0.3s">
                                <div class="card-body">

                                    <!-- Header -->
                                    <div class="form-header purple-gradient">
                                        <h3 class="font-weight-500 my-2 py-1"><i class="fas fa-user"></i> Log in</h3>
                                    </div>

                                    <div class="md-form">
                                        <i class="fas fa-envelope prefix white-text"></i>
                                        <input type="text" name="email" id="orangeForm-email" class="form-control" value="{{ $request->email }}">
                                        <label for="orangeForm-email">Your email</label>
                                    </div>

                                    <div class="md-form">
                                        <i class="fas fa-lock prefix white-text"></i>
                                        <input type="password" name="password" id="orangeForm-pass"
                                               class="form-control">
                                        <label for="orangeForm-pass">Your password</label>
                                    </div>

                                    @error("password")
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror

                                    <div class="md-form">
                                        <i class="fas fa-lock prefix white-text"></i>
                                        <input type="password" name="password_confirmation" id="orangeForm-con-pass"
                                               class="form-control">
                                        <label for="orangeForm-con-pass">Your confirm-password</label>
                                    </div>

                                    @error("password_confirmation")
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror

                                    <div class="text-center">
                                        <button type="submit" class="btn purple-gradient btn-lg">Reset Password</button>
                                    </div>

                                </div>
                            </div>
                            <!-- Form with header -->

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Intro Section -->

</header>
<!-- Main Navigation -->

<script src="{{ asset('components/mdb/js/jquery-3.4.1.min.js') }}"></script>
<script src="{{ asset('components/mdb/js/popper.min.js') }}"></script>
<script src="{{ asset('components/mdb/js/bootstrap.js') }}"></script>
<script src="{{ asset('components/mdb/js/mdb.min.js') }}"></script>

<!-- Custom scripts -->
<script>

    new WOW().init();

</script>

</body>

</html>
