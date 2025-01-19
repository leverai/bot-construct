<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>BotConstruct</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/modal.css">
	<link rel="stylesheet" href="css/media.css">
	<link rel="stylesheet" href="css/medium_editor.css">
	<link rel="stylesheet" href="css/btn_up.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
	<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
	<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
	<!-- <script src="js/FA_all.js"></script> -->
	<!-- <script src="https://use.fontawesome.com/7759714ad8.js"></script> -->

	<script src="https://kit.fontawesome.com/f13bab8528.js" crossorigin="anonymous"></script>
	<script src="//cdn.jsdelivr.net/npm/medium-editor@latest/dist/js/medium-editor.min.js"></script>
	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/medium-editor@latest/dist/css/medium-editor.min.css" type="text/css" media="screen" charset="utf-8">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

</head>
<body>
	<div data-collapse="small" data-animation="default" data-duration="400" data-easing="ease" data-easing2="ease" role="banner" class="nav-bar w-nav">
		<div class="nav-container w-container">
			<div class="logo-div">
				<a href="../" aria-current="page" class="nav-logo w-inline-block w--current">
					<div class="logo_name">
						BotConstruct
					</div>
				</a>
			</div>
			<nav role="navigation" class="nav-content w-nav-menu" style="transform: translateY(0px) translateX(0px);">
				<div class="nav-menu">
					<button class="nav-link" id="logout" type="button">
						Выход
					</button>
				</div>
			</nav>

			<div class="menu-button w-nav-button" style="-webkit-user-select: text;" aria-label="menu" role="button" tabindex="0" aria-controls="w-nav-overlay-0" aria-haspopup="menu" aria-expanded="false">
				<img src="https://uploads-ssl.webflow.com/63f39bfcf9d9240a487e4461/63f39bfcf9d924d8ed7e4484_Menu%20Icon.svg" loading="lazy" width="24" alt="" class="menu-icon">
			</div>
		</div>
		<div class="w-nav-overlay" data-wf-ignore="" id="w-nav-overlay-0" style="display: none;">

		</div>
	</div>
	<div class="page_wrapper">
		<div class="section dark-color-gradient ">
			<div class="container" style="opacity: 1;">
				<div class="list_wrapper">

					<!-- BOTS LIST -->
					<div class="bots_list">
						<div class="list_title">
							<h2>Список ботов</h2> 
							<div class="editable"></div>
						</div>
						<div class="add_bot button add_button">
							Добавить бота
						</div>
						<div class="bots_header">
							<h4>Название</h4>
							<h4>Описание</h4>
						</div>
						<div class="bots_container">
							<div class="bots_row">
								<input class="text-field" placeholder="Название бота">

								<input class="text-field" placeholder="Описание бота">
								<div class="bots_btns">
									<i class="fa-solid fa-gear"></i>
									<i class="fa-solid fa-trash"></i>
								</div>
							</div>
						</div>
					</div>
					

					<!-- /BOTS LIST -->

					<!-- CONSTRUCTOR -->

					<div class="constructor hidden">
						<div class="constructor_nav">
							<div class="back_arrow">
								<i class="fa-solid fa-arrow-left"></i> Вернуться к списку ботов
							</div>
							<div class="start_bot_user button add_button ">
								<i class="fa-solid fa-play"></i> Запустить бота
							</div>
							<div class="stop_bot_user button add_button hidden">
								<i class="fa-solid fa-stop"></i> Остановить бота
							</div>
							<a class="export_script button add_button">
								<i class="fa-solid fa-file-export"></i> Экспорт скрипта
							</a>
							<div class="save_bot button add_button">
								<i class="fa-solid fa-floppy-disk"></i> Сохранить бота
							</div>
						</div>
						
						
						<div class="list_title">
							<h2>Конструктор бота</h2> 
						</div>
						<div class="insctruction">
							<i class="fa-solid fa-circle-info"></i>
							<div class="instruction_text">
								Справочная информация
							</div>
						</div>
						<div class="constructor_content">
							

							<div class="list_field">
								<div class="field_title">
									Название
								</div>
								<input id="bot_name" class="text-field">
							</div>
							<div class="list_field">
								<div class="field_title">
									Описание
								</div>
								<input id="bot_desc" class="text-field">
							</div>
							<div class="list_field">
								<div class="field_title">
									Токен
								</div>
								<input id="bot_token" class="text-field bot_token" value=''>
							</div>
							<div class="list_title">
								<h3>Команды бота</h3> 
							</div>
							<div class="add_cmd button add_button">
								Добавить команду
							</div>
							<div class="cmd_header">
								<h4>Команда</h4>
								<h4>Описание</h4>
							</div>


							<div class="cmd_content">
								

								<div class="cmd_field">
									<div class="cmd_field_number">
										1
									</div>
									<div class="cmd_field_main">
										<input class="text-field cmd_name" value="start">
										<div class="cmd_desc">
											<input class="text-field" value="Описание команды">
										</div>
										<i class="fa-solid fa-trash"></i>
									</div>
									<h4>Ответ</h4> 
									<div class="answer_container">
										<textarea class="answer_text text-field" value="Текст" placeholder="Текст ответа команды">Текст</textarea>
										<input type="file" class="answer_pic text-field hidden" value="" multiple accept=".png, .jpg, .jpeg">
										<select class="answer_menu text-field hidden" value="">
											<option value="">Выбор меню</option>
											<option value="">Меню1</option>
											<option value="">Меню2</option>
										</select>
									</div>
									<h4>Кнопки</h4> 
									<div class="btn_container">
										<div class="add_btn button add_button">
											Добавить кнопку
										</div>
										<div class="btn_header">
											<h4>Текст</h4>
											<h4>Действие</h4>
										</div>

										<div class="btn_content">
											<div class="btn_row">
												<input class="text-field btn_row_text" placeholder="Текст в кнопке">
												<div class="btn_action_container">
													<select class="text-field btn_action" value="url">
														<option value="url">Переход по URL</option>
														<option value="cmd">Команда</option>
													</select>
													<input class="text-field action_cmd hidden" placeholder="Команда">
													<input class="text-field action_url" placeholder="Ссылка URL">
												</div>
												<i class="fa-solid fa-trash"></i>
											</div>
										</div>

									</div>
								</div>
							</div>

						</div>
					</div>

					<!-- /CONSTRUCTOR -->

					<!-- INFO -->
					<div class="info_container hidden">
						<div class="info_back_arrow">
							<i class="fa-solid fa-arrow-left"></i> Назад
						</div>
						<ul>
							<li><a href="#setname">Как изменить имя бота →</a></li>
							<li><a href="#setdescription">Как добавить описание бота →</a></li>
							<li><a href="#setabouttext">Как указать информацию о боте →</a></li>
							<li><a href="#setuserpic">Как добавить аватарку бота →</a></li>
						</ul>
						<div class="list_title">
							
						</div>
						<div class="info_text">
							<h2>Как создать нового бота</h2> 
							<blockquote>Создание и настройка ботов в Telegram происходит с помощью официального бота <a href="https://t.me/BotFather">BotFather</a>.</blockquote>
							<p>1. Откройте в Telegram бота @BotFather.
							</p>
							<p>2. Отправьте ему команду <strong>/newbot</strong>.
							</p>
							<p>3. Задайте имя для вашего нового бота. Имя будет отображаться в контактах и чатах.
							</p>
							<p>4. Придумайте username и отправьте его.
							</p>
							<blockquote><strong>Username</strong> — это короткое имя на латинице, которое используется для упоминаний бота и в ссылках на профиль в telegram.me. Username должен состоять из букв латинского алфавита, подчёркиваний и цифр и быть длиной от 5 до 32 символов. Также имя пользователя обязательно должно заканчиваться на «bot», например: «tetris_bot» или «TetrisBot».
							</blockquote>
							<img src="img/info1.png">
							<p>5. Для работы бота необходимо скопировать полученный токен и вставить в поле "Токен" на форме конструктора.</p>
							<blockquote>
								Во время работы бота через BotConstruct, полученный токен может использоваться только в нашем сервисе. Если подключить токен работающего на нашей платформе бота в еще какой-либо сервис, то бот может перестать работать или работать нестабильно.
							</blockquote>
							<img src="img/info2.png" alt="">
							<blockquote>
								Если вы потеряли токен, отправьте команду <b>/token</b>. Чтобы сгенерировать новый, отправьте команду <b>/revoke</b>.
							</blockquote>
							<h2><a name="setname">Как изменить имя бота</a></h2>
							<p>1. Откройте в Telegram бота @BotFather и отправьте ему команду <strong>/setname</strong>.</p>
							<p>2. Выберите бота, имя которого вы хотите изменить.</p>
							<p>3. Введите новое имя вашего бота и отправьте его.</p>
							<img src="img/info3.png" alt="">
							<h2><a name="setdescription">Как добавить описание бота</a></h2>
							<blockquote>
								Описание бота — это короткий текст, который пользователи увидят еще не написав боту, под заголовком «Что умеет этот робот?».
							</blockquote>
							<p>1. Откройте в Telegram бота @BotFather и отправьте ему команду <b>/setdescription</b>.</p>
							<p>2. Выберите бота, описание которого вы хотите изменить.</p>
							<p>3. Введите новое описание вашего бота (максимум 512 символов) и отправьте его.</p>
							<img src="img/info4.png" alt="">
							<h2><a name="setabouttext">Как указать информацию о боте</a></h2>
							<blockquote>Информация о боте — это ещё более короткий текст, отображающийся в профиле бота. Ещё, если кто-то поделится вашим ботом, то вместе со ссылкой на него отправится этот текст.</blockquote>
							<p>1. Откройте в Telegram бота @BotFather и отправьте ему команду<strong> /setabouttext</strong>.</p>
							<p>2. Выберите бота, информацию о котором вы хотите изменить.</p>
							<p>3. Введите новую информацию о вашем боте (максимум 120 символов) и отправьте ее.</p>
							<img src="img/info5.png" alt="">
							<h2><a name="setuserpic">Как добавить аватарку бота</a></h2>
							<p>1. Откройте в Telegram бота @BotFather и отправьте ему команду <strong>/</strong><strong>setuserpic</strong>.</p>
							<p>2. Выберите бота, аватарку которого вы хотите изменить.</p>
							<p>3. Отправьте боту фото как картинку. Если отправите как файл, @BotFather пришлет ошибку.</p>
							<img src="img/info6.png" alt="">
						</div>
					</div>
					<!-- /INFO -->


					<div class="admin_container hidden">
						<div class="list_title">
							<h2>Панель администратора</h2> 
						</div>
						<!-- <div class="cmd_prompt">
							<input class="text-field prompt_command_text" placeholder="Команда">
							<div class="btn_run_cmd button add_button">
								Выполнить команду
							</div>
						</div> -->
						<div class="manage_bots_container">
							<h3>Боты пользователей</h3>
							<div class="cmd_field">
								<div class="field_user_name">
									<h3>UserName</h3>
								</div>
								<div class="filed_user_header">
									<div>Имя бота</div>
									<div>Статус</div>
									<div></div>
									<div></div>
								</div>
								<div class="users_bot_row">
									<div class="users_bot_row_info__bot_name">
										Bot1
									</div>
									<div class="users_bot_row_info__bot_status">
										<div class="bot_status_enabled">
											Включен
										</div> 
									</div>
									<div class="start_bot button users_bot_row_button">
										<i class="fa-solid fa-play"></i>Запустить бота
									</div>
									<div class="stop_bot button users_bot_row_button">
										<i class="fa-solid fa-stop"></i>Остановить бота
									</div>
								</div>
								<div class="users_bot_row">
									<div class="users_bot_row_info__bot_name">
										Bot2
									</div>
									<div class="users_bot_row_info__bot_status">
										<div class="bot_status_disabled">
											Выключен
										</div> 
									</div>
									<div class="start_bot button users_bot_row_button">
										Запустить бота
									</div>
									<div class="stop_bot button users_bot_row_button">
										Остановить бота
									</div>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="btn-up btn-up_hide"></div>
		<footer>
			<div class="footer_copyright">
				© 2025 Костусев Святослав. Все права защищены.
			</div>
		</footer>
	</div>

	<!-- ERROR NOTICE FORM -->

	<form action="" class="login_form modal" id="error-notice-form" style="display:none;">
		<h3 class='error'>Ошибка заполнения данных!</h3>
		<div class="error_feedback">
			
		</div>
	</form>
</body>
<script src="js/text_editor.js"></script>
<script src="js/bot.js"></script>
<script src="js/script.js"></script>
<script src="js/btn_up.js"></script>


</html>
