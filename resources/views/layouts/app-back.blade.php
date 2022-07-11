<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="">
    <meta name="keywords"
        content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
    <meta name="author" content="">
    <meta name="robots" content="noindex, nofollow">
    <title>Dashboard MangeonsAfro</title>
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css"
        integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">

    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets-back/img/favicon.png') }}">


		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('assets-back/css/bootstrap.min.css')}}">

		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="{{ asset('assets-back/css/font-awesome.min.css')}}">

		<!-- Lineawesome CSS -->
        <link rel="stylesheet" href="{{ asset('assets-back/css/line-awesome.min.css')}}">

		<!-- Datatable CSS -->
		<link rel="stylesheet" href="{{ asset('assets-back/css/dataTables.bootstrap4.min.css')}}">

		<!-- Select2 CSS -->
		<link rel="stylesheet" href="{{ asset('assets-back/css/select2.min.css')}}">

		<!-- Datetimepicker CSS -->
		<link rel="stylesheet" href="{{ asset('assets-back/css/bootstrap-datetimepicker.min.css')}}">

		<!-- Main CSS -->
        <link rel="stylesheet" href="{{ asset('assets-back/css/style.css')}}">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />

</head>

<body>
    <!-- Main Wrapper -->
    <div class="main-wrapper">

        @include('layouts.header-back')
        @include('layouts.sidebar-back')
        @yield('content')

    </div>
    <!-- /Main Wrapper -->


    <!-- jQuery -->
        <script src="{{asset('assets-back/js/jquery-3.5.1.min.js')}}"></script>

        <!-- Bootstrap Core JS -->
        <script src="{{asset('assets-back/js/popper.min.js')}}"></script>
        <script src="{{asset('assets-back/js/bootstrap.min.js')}}"></script>

        <!-- Slimscroll JS -->
        <script src="{{asset('assets-back/js/jquery.slimscroll.min.js')}}"></script>

        <!-- Select2 JS -->
        <script src="{{asset('assets-back/js/select2.min.js')}}"></script>

        <!-- Datatable JS -->
        <script src="{{asset('assets-back/js/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('assets-back/js/dataTables.bootstrap4.min.js')}}"></script>

        <!-- Datetimepicker JS -->
        <script src="{{asset('assets-back/js/moment.min.js')}}"></script>
        <script src="{{asset('assets-back/js/bootstrap-datetimepicker.min.js')}}"></script>
        <script src="assets-back/js/jquery-3.5.1.min.js"></script>
		<!-- Chart JS -->
		<script src="{{asset('assets-back/plugins/morris/morris.min.js')}}"></script>
		<script src="{{asset('assets-back/plugins/raphael/raphael.min.js')}}"></script>
		<script src="{{asset('assets-back/js/chart.js')}}"></script>

        <!-- Custom JS -->
        <script src="{{asset('assets-back/js/app.js')}}"></script>


</body>

<script>
function readURL(input, id) {
id = id || '#file-image';
if (input.files && input.files[0]) {
var reader = new FileReader();
reader.onload = function (e) {
$(id).attr('src', e.target.result);
};
reader.readAsDataURL(input.files[0]);
$('#file-image').removeClass('hidden');
$('#start').hide();
}
}
</script>

</html>
