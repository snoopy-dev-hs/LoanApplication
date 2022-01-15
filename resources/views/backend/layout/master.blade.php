<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Loan Application - @yield("title")</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link rel="stylesheet" href="{{ asset('components/mdb/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('components/mdb/css/mdb.min.css') }}">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
{{--    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />--}}
    @stack("styles")

    <style>

    </style>
</head>

<body class="fixed-sn white-skin">

<!-- Main Navigation -->
<header>

    <!-- Sidebar navigation -->
@include("backend.layout.partials.sidebar")
<!-- Sidebar navigation -->

    <!-- Navbar -->
@include("backend.layout.partials.navbar")
<!-- Navbar -->

</header>
<!-- Main Navigation -->

<!-- Main layout -->
<main>

    <div class="container-fluid">

        @yield("contents")

    </div>

</main>
<!-- Main layout -->

<!-- SCRIPTS -->
<!-- JQuery -->
<script src="{{ asset('components/mdb/js/jquery-3.4.1.min.js') }}"></script>
<script src="{{ asset('components/mdb/js/popper.min.js') }}"></script>
<script src="{{ asset('components/mdb/js/bootstrap.js') }}"></script>
<script src="{{ asset('components/mdb/js/mdb.min.js') }}"></script>
{{--<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>--}}
@stack("scripts")

<!-- Initializations -->
<script>
    // SideNav Initialization
    $(".button-collapse").sideNav();

    var container = document.querySelector('.custom-scrollbar');
    var ps = new PerfectScrollbar(container, {
        wheelSpeed: 2,
        wheelPropagation: true,
        minScrollbarLength: 20
    });

    // // Data Picker Initialization
    // $('.datepicker').pickadate();

    // Material Select Initialization
    $(document).ready(function () {
        $('.mdb-select').material_select();
    });

    // Tooltips Initialization
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })

</script>

<!-- Charts -->
<script>

    $(function () {
        // $('h4, button').not('.check').toggleClass('dark-grey-text text-white');
        // $('.list-panel a').toggleClass('dark-grey-text');
        //
        // $('footer, .card').toggleClass('dark-card-admin');
        // $('body, .navbar').toggleClass('white-skin navy-blue-skin');
        // $(this).toggleClass('white text-dark btn-outline-black');
        // $('body').toggleClass('dark-bg-admin');
        // $('h6, .card, p, td, th, i, li a, h4, input, label').not(
        //     '#slide-out i, #slide-out a, .dropdown-item i, .dropdown-item').toggleClass('text-white');
        // $('.btn-dash').toggleClass('grey blue').toggleClass('lighten-3 darken-3');
        // $('.gradient-card-header').toggleClass('white black lighten-4');
        // $('.list-panel a').toggleClass('navy-blue-bg-a text-white').toggleClass('list-group-border');

        $('#dark-mode').on('click', function (e) {

            e.preventDefault();
            $('h4, button').not('.check').toggleClass('dark-grey-text text-white');
            $('.list-panel a').toggleClass('dark-grey-text');

            $('footer, .card').toggleClass('dark-card-admin');
            $('body, .navbar').toggleClass('white-skin navy-blue-skin');
            $(this).toggleClass('white text-dark btn-outline-black');
            $('body').toggleClass('dark-bg-admin');
            $('h6, .card, p, td, th, i, li a, h4, input, label').not(
                '#slide-out i, #slide-out a, .dropdown-item i, .dropdown-item').toggleClass('text-white');
            $('.btn-dash').toggleClass('grey blue').toggleClass('lighten-3 darken-3');
            $('.gradient-card-header').toggleClass('white black lighten-4');
            $('.list-panel a').toggleClass('navy-blue-bg-a text-white').toggleClass('list-group-border');

        });
    });

</script>

</body>

</html>
