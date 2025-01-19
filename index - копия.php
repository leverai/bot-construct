<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>BotConstruct</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/modal.css">
	<link rel="stylesheet" href="css/media.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
	<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
	<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
	<!-- <script src="js/FA_all.js"></script> -->
	<!-- <script src="https://use.fontawesome.com/7759714ad8.js"></script> -->

	<script src="https://kit.fontawesome.com/f13bab8528.js" crossorigin="anonymous"></script>

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

</head>
<body>
	<div data-collapse="small" data-animation="default" data-duration="400" data-easing="ease" data-easing2="ease" role="banner" class="nav-bar w-nav">
		<div class="nav-container w-container">
			<div class="logo-div">
				<a href="" aria-current="page" class="nav-logo w-inline-block w--current">
					<div class="logo_name">
						BotConstruct
					</div>
				</a>
			</div>
			<nav role="navigation" class="nav-content w-nav-menu">
				<div class="nav-menu">
					<button class="nav-link" type="button" id="login_btn">
						Вход
					</button>
				</div>
				<div class="nav-cta-button-container">
					<a href="/sign-up" id="reg_btn" class="nav-link cta-button w-nav-link" style="max-width: 1230px;">
						Регистрация 
					</a>
				</div>
			</nav>

			<div class="menu-button w-nav-button" style="-webkit-user-select: text;" aria-label="menu" role="button" tabindex="0" aria-controls="w-nav-overlay-0" aria-haspopup="menu" aria-expanded="false">
				<img src="https://uploads-ssl.webflow.com/63f39bfcf9d9240a487e4461/63f39bfcf9d924d8ed7e4484_Menu%20Icon.svg" loading="lazy" width="24" alt="" class="menu-icon">
			</div>
		</div>
		<div class="w-nav-overlay" id="w-nav-overlay-0" style="display: none;">

		</div>
	</div>
	<div class="page_wrapper">
		<div class="section light-color-gradient wf-section">
			<div class="container" style="opacity: 1;">
				<div class="w-layout-grid hero-grid">
					<div class="text-box _600">
						<h1 class="heading h1">
							Ультимативный конструктор чат-ботов
						</h1>
						<p class="paragraph large">Наш конструктор чат-ботов - это простой и удобный способ создать своего собственного чат-бота без необходимости знать кодирование. Мы предоставляем множество готовых шаблонов, которые вы можете настроить под свои нужды, чтобы создать уникального чат-бота, который поможет вам взаимодействовать с вашими клиентами и улучшить опыт их обслуживания. Наш конструктор также позволяет настраивать ответы на часто задаваемые вопросы и проводить анализ поведения пользователей, чтобы оптимизировать работу чат-бота. Начните создавать своего собственного чат-бота уже сегодня с нашим удобным конструктором!
						</p>
						<div class="spacer _16">

						</div>
						<a href="workspace/" class="button w-button">Попробовать</a>
					</div>
					<img src="https://uploads-ssl.webflow.com/63f39bfcf9d9240a487e4461/63f39bfcf9d92484677e447b_Design%20Resources%20Home.svg" loading="eager" width="337" id="w-node-_2c511369-eabb-a0ff-6024-6e8ecffbdf82-427e4465" alt="" class="hero-illustration">
				</div>
			</div>
		</div>
	</div>
	<!-- LOGIN FORM -->
	<form action="" class="login_form modal" id="login-form" style="display:none;">
		<h3>Вход в аккаунт</h3>
		<div class="text-field text-field_floating-2">
			<input class="text-field__input" type="text" id="login" name="login" placeholder="Логин">
			<label class="text-field__label" for="login">Логин</label>
		</div>
		<div class="text-field text-field_floating-2">
			<input class="text-field__input" type="password" id="pass" name="pass" placeholder="Пароль">
			<label class="text-field__label" for="pass">Пароль</label>
		</div>
		<div class="error">
			
		</div>
		<button class="button" id="sub_login_btn">Войти</button>
	</form>

	<!-- REGISTRATION FORM -->

	<form action="" class="login_form modal" id="reg-form" style="display:none;">
		<h3>Регистрация аккаунта</h3>
		<div class="text-field text-field_floating-2">
			<input class="text-field__input" type="email" id="reg_mail" name="reg_mail" placeholder="Логин">
			<label class="text-field__label" for="reg_mail">Почта</label>
		</div>
		<div class="text-field text-field_floating-2">
			<input class="text-field__input" type="password" id="reg_pass" name="reg_pass" placeholder="Пароль">
			<label class="text-field__label" for="reg_pass">Пароль</label>
		</div>
		<div class="error">
			
		</div>
		<button class="button" id="sub_reg_btn">Зарегистрироваться</button>
	</form>
</body>
<script src="js/script.js"></script>
</html>
