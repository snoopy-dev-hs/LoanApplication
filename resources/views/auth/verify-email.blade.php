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
                <form action="{{ route("password.email") }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-xl-5 col-lg-6 col-md-10 col-sm-12 mx-auto mt-5">

                            <!-- Form with header -->
                            <div class="card wow fadeIn" data-wow-delay="0.3s">
                                <div class="card-body">

                                    <!-- Header -->
                                    <div class="form-header purple-gradient">
                                        <h5 class="font-weight-500 my-2 py-1"> Please visit your mail box to verify</h5>
                                    </div>

                                    @if (session("status"))
                                        <span class="text-info">{{ session("status") }}</span>
                                    @endif

                                    <form action="{{ route("verification.send") }}" method="POST">
                                        @csrf
                                        <div class="text-center">
                                            <button type="submit" name="login" class="btn purple-gradient btn-lg">Resend Link</button>
                                        </div>
                                    </form>

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
