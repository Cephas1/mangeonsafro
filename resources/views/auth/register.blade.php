<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="Smarthr - Bootstrap Admin Template">
    <meta name="keywords"
        content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
    <meta name="author" content="Dreamguys - Bootstrap Admin Template">
    <meta name="robots" content="noindex, nofollow">
    <title>Dashboard MangeonsAfro</title>


    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="/public/assets-back/img/favicon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets-back/css/bootstrap.min.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="assets-back/css/font-awesome.min.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="assets-back/css/style.css">

</head>

<body class="account-page">

    <!-- Main Wrapper -->
    <div class="main-wrapper">
        <div class="account-content">

            <div class="container">

                <!-- Account Logo -->
                <div class="account-logo">
                    <a href="/"><img src="{{ asset('assets-back/img/logo-mangeonsafro.png') }}"
                            alt="Mangeons Afro"></a>
                </div>
                <!-- /Account Logo -->

                <div class="account-box">
                    <div class="account-wrapper">
                        <h3 class="account-title">Se connecter</h3>

                        <x-auth-validation-errors class="mb-4" :errors="$errors" />
                        <!-- Account Form -->
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group">
                                <label>Nom</label>
                                <input id="name" class="form-control" type="text" name="name" :value="old('name')"
                                    required autofocus>
                            </div>
                            <div class="form-group">
                                <label>adresse de messagerie</label>
                                <input id="email" class="form-control" type="email" name="email" :value="old('email')"
                                    required autofocus>
                            </div>
                            <div class="form-group">
                                <label>Mot de passe</label>
                                <input id="password" class="form-control" type="password" name="password" required
                                    autocomplete="new-password">
                            </div>
                            <div class="form-group">
                                <label>Confirmez mot de passe</label>
                                <input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required
                                    autocomplete="new-password">
                            </div>
                            <div class="form-group text-center">
                                <button class="btn btn-primary account-btn" type="submit">{{ __('Register') }}</button>
                            </div>
                            <div class="account-footer">
                                <p>Vous avez déjà un compte? <a href="{{route('login')}}">Login</a></p>
                            </div>
                        </form>
                        <!-- /Account Form -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Main Wrapper -->



    <!-- jQuery -->
    <script src="assets-back/js/jquery-3.5.1.min.js"></script>

    <!-- Bootstrap Core JS -->
    <script src="assets-back/js/popper.min.js"></script>
    <script src="assets-back/js/bootstrap.min.js"></script>

    <!-- Custom JS -->
    <script src="assets-back/js/app.js"></script>

</body>

</html>
