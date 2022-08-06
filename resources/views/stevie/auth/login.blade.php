<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="description" content="Smarthr - Bootstrap Admin Template">
		<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
        <meta name="author" content="Dreamguys - Bootstrap Admin Template">
        <meta name="robots" content="noindex, nofollow">
		<title>Dashboard MangeonsAfro</title>


		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets-back/img/favicon.png')}}">

		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{asset('assets-back/css/bootstrap.min.css')}}">

		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="{{asset('assets-back/css/font-awesome.min.css')}}">

		<!-- Main CSS -->
        <link rel="stylesheet" href="{{asset('assets-back/css/style.css')}}">

    </head>
    <body class="account-page">
		<!-- Main Wrapper -->
        <div class="main-wrapper">
			<div class="account-content">
				<div class="container">
					<!-- Account Logo -->
					<div class="account-logo">
						<a href="index.html"><img src="{{asset('assets-back/img/logo-mangeonsafro.png')}}" alt="Dreamguy's Technologies"></a>
					</div>
					<!-- /Account Logo -->
					<div class="account-box">
						<div class="account-wrapper">
							<h3 class="account-title">Se connecter</h3>
							<!-- Account Form -->
							<form action="index.html">
								<div class="form-group">
									<label>adresse de messagerie</label>
									<input class="form-control" type="text">
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col">
											<label>Password</label>
										</div>
										<div class="col-auto">
											<a class="text-muted" href="forgot-password.html">
												Mot de passe perdu?
											</a>
										</div>
									</div>
									<input class="form-control" type="password">
								</div>
								<div class="form-group text-center">
									<button class="btn btn-primary account-btn" type="submit">Login</button>
								</div>
								<div class="account-footer">
									<p>Vous n’avez pas encore de compte ? <a href="register.html">S'inscrire</a></p>
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
        <script src="{{asset('assets-back/js/jquery-3.5.1.min.js')}}"></script>

		<!-- Bootstrap Core JS -->
        <script src="{{asset('assets-back/js/popper.min.js')}}"></script>
        <script src="{{asset('assets-back/js/bootstrap.min.js')}}"></script>

		<!-- Custom JS -->
		<script src="{{asset('assets-back/js/app.js')}}"></script>

    </body>
</html>
