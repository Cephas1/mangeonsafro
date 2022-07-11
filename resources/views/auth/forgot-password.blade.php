{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Email Password Reset Link') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}


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
						<a href="index.html"><img src="{{ asset("assets-back/img/logo-mangeonsafro.png") }}" alt="Mangeons Afro"></a>
					</div>
					<!-- /Account Logo -->
					
					
					<div class="account-box">
						<div class="account-wrapper">
							<h3 class="account-title">Mot de passe perdu?</h3>
							<p class="account-subtitle">Entrez votre adresse e-mail pour obtenir un lien de réinitialisation de mot de passe</p>
							
                            <!-- Session Status -->
                            <x-auth-session-status class="mb-4" :status="session('status')" />

                            <!-- Validation Errors -->
                            <x-auth-validation-errors class="mb-4" :errors="$errors" />

                            <!-- Account Form -->
							<form method="POST" action="{{ route('password.email') }}">
                                @csrf

                                <!-- Email Address -->
								<div class="form-group">
									<label>Adresse email</label>
									<input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus />
								</div>
								<div class="form-group text-center">
									<button class="btn btn-primary account-btn" type="submit">Réinitialiser le mot de passe</button>
								</div>
								<div class="account-footer">
									<p>Vous vous souvenez de votre mot de passe ? <a href="login">Se connecter</a></p>
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
