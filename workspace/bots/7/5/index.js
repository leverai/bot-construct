const TelegramApi = require('node-telegram-bot-api');const token = '6088437741:AAE7ilBgKF_Xu27RknqpNfqAZi1w09Qqc-Q'; 
const bot = new TelegramApi(token, {polling: true}); 
const start = async () => { 
bot.setMyCommands([ 
{command: 'start', description: 'Начать диалог'}, 
{command: 'info', description: 'Обо мне'}, 
{command: 'socials', description: 'Социальные сети'}, 
{command: 'stack', description: 'Стек навыков'}, 
{command: 'works', description: 'Мои работы'}
]); 
bot.on('message', async msg => {
        const text = msg.text;
        const chatId = msg.chat.id;

    try {
if (text === '/start') { 
const cmd_start_opts = { 
        parse_mode: 'HTML',
        reply_markup: JSON.stringify({
          inline_keyboard: [[{text: 'Информация обо мне', callback_data: '/info'}], 
]
            })
          };return bot.sendMessage(chatId, 'Приветствую Вас! Это мой персональный бот-портфолио.\nЗдесь вы можете узнать основные данные обо мне.', cmd_start_opts); 
    }if (text === '/info') { 
const cmd_info_opts = { 
        parse_mode: 'HTML',
        reply_markup: JSON.stringify({
          inline_keyboard: [[{text: 'Сайт-портфолио', url: 'https://kirill-cherepanov.netlify.app/'}], 
[{text: 'Соц сети', callback_data: '/socials'}], 
[{text: 'Резюме', url: 'https://kirill-cherepanov.netlify.app/assets/Kirill%20Cherepanov%20Resume-93e008c7.pdf'}], 
[{text: 'Мои навыки', callback_data: '/stack'}], 
[{text: 'Мои проекты', callback_data: '/works'}], 
]
            })
          };return bot.sendMessage(chatId, 'Меня зовут Кирилл Черепанов, и я junior фулстек веб-разработчик с акцентом на front-end и MERN плюс Typescript стек.', cmd_info_opts); 
    }if (text === '/socials') { 
const cmd_socials_opts = { 
        parse_mode: 'HTML',
        reply_markup: JSON.stringify({
          inline_keyboard: [[{text: 'VK', url: 'https://vk.com/kcherepanov1/'}], 
[{text: 'Discord', url: 'https://discord.com/users/292300959265062922'}], 
[{text: 'Github', url: 'https://github.com/Kirill-Cherepanov'}], 
]
            })
          };return bot.sendMessage(chatId, 'Вы можете узнать некоторую информацию обо мне из социальных сетей или связаться со мной.', cmd_socials_opts); 
    }if (text === '/stack') { 
const cmd_stack_opts = { parse_mode: 'HTML'};return bot.sendMessage(chatId, 'Ниже представлены навыки, которыми я владею:\n\n<b><i>Первичные:</i></b>\nJavascript, Typescript, React, Node.js, Express, Mongodb,HTML5\nCSS3, sass, tailwind\n\n\n<b><i>Вторичные:</i></b>\nPython, C++, Webpack, Socket.io/Websockets, git, figma, redux\nDocker, Cypress, Markdown, Three.js, SolidWorks\n<i>\n</i>\n<b><i>Развёртывание:</i></b>\nRender.com, fly.io, Heroku, Netlify, Local\n\n\n<b>Английский</b>: B2-C1\n<b>Русский</b>: Родной\n<b>Японский</b>: N-5', cmd_stack_opts); 
    }if (text === '/works') { 
const cmd_works_opts = { parse_mode: 'HTML'};return bot.sendMessage(chatId, 'Ниже представлен список выполненных мною проектов:\n\n<b>Bloggy</b>\n<b>\n</b><a href=\"asd\">Приложение </a>для социальных сетей, ориентированное на публикации.<b>\n</b><b><i><a href=\"https://github.com/kirill-cherepanov/Bloggy\">Репозиторий </a></i></b>\n<b><i><a href=\"https://bloggy-kirill-cherepanov.netlify.app/\">Демо</a></i></b>\n\n\n<b>Tic-tac-toe Multiplayer</b>\n\nОнлайн Крестики-нолики. Полностью адаптивное веб-приложение, представляющее собой Одиночная игра + Игра против игроков + Игра против ИИ\n<b><i><a href=\"https://github.com/kirill-cherepanov/tic-tac-toe-multiplayer-react\">Репозиторий</a> </i></b>\n<b><i><a href=\"https://tic-tac-toe-kirill-cherepanov.netlify.app/\">Демо</a></i></b>\n<b><i>\n</i></b>\n<b>Meme generator</b>\n\nПолностью адаптивное веб-приложение для редактирования изображений, в основном ориентированное на добавление к ним текста, а также применение базовых фильтров изображений.\n<b><i><a href=\"https://github.com/kirill-cherepanov/meme-generator\">Репозиторий </a></i></b>\n<b><i><a href=\"https://kirill-cherepanov.github.io/meme-generator/\">Демо</a></i></b>', cmd_works_opts); 
    }return bot.sendMessage(chatId, 'Такой команды нет!');
        } catch (e) {
            return bot.sendMessage(chatId, 'Произошла какая то ошибка!'+ e);
        }

    }); 
bot.on('callback_query', async msg => {
        const data = msg.data;
        const chatId = msg.message.chat.id;
if (data === '/start') { 
const cmd_start_opts = { 
        parse_mode: 'HTML',
        reply_markup: JSON.stringify({
          inline_keyboard: [[{text: 'Информация обо мне', callback_data: '/info'}], 
]
            })
          };return bot.sendMessage(chatId, 'Приветствую Вас! Это мой персональный бот-портфолио.\nЗдесь вы можете узнать основные данные обо мне.',cmd_start_opts); 
    }if (data === '/info') { 
const cmd_info_opts = { 
        parse_mode: 'HTML',
        reply_markup: JSON.stringify({
          inline_keyboard: [[{text: 'Сайт-портфолио', url: 'https://kirill-cherepanov.netlify.app/'}], 
[{text: 'Соц сети', callback_data: '/socials'}], 
[{text: 'Резюме', url: 'https://kirill-cherepanov.netlify.app/assets/Kirill%20Cherepanov%20Resume-93e008c7.pdf'}], 
[{text: 'Мои навыки', callback_data: '/stack'}], 
[{text: 'Мои проекты', callback_data: '/works'}], 
]
            })
          };return bot.sendMessage(chatId, 'Меня зовут Кирилл Черепанов, и я junior фулстек веб-разработчик с акцентом на front-end и MERN плюс Typescript стек.',cmd_info_opts); 
    }if (data === '/socials') { 
const cmd_socials_opts = { 
        parse_mode: 'HTML',
        reply_markup: JSON.stringify({
          inline_keyboard: [[{text: 'VK', url: 'https://vk.com/kcherepanov1/'}], 
[{text: 'Discord', url: 'https://discord.com/users/292300959265062922'}], 
[{text: 'Github', url: 'https://github.com/Kirill-Cherepanov'}], 
]
            })
          };return bot.sendMessage(chatId, 'Вы можете узнать некоторую информацию обо мне из социальных сетей или связаться со мной.',cmd_socials_opts); 
    }if (data === '/stack') { 
const cmd_stack_opts = { parse_mode: 'HTML'};return bot.sendMessage(chatId, 'Ниже представлены навыки, которыми я владею:\n\n<b><i>Первичные:</i></b>\nJavascript, Typescript, React, Node.js, Express, Mongodb,HTML5\nCSS3, sass, tailwind\n\n\n<b><i>Вторичные:</i></b>\nPython, C++, Webpack, Socket.io/Websockets, git, figma, redux\nDocker, Cypress, Markdown, Three.js, SolidWorks\n<i>\n</i>\n<b><i>Развёртывание:</i></b>\nRender.com, fly.io, Heroku, Netlify, Local\n\n\n<b>Английский</b>: B2-C1\n<b>Русский</b>: Родной\n<b>Японский</b>: N-5',cmd_stack_opts); 
    }if (data === '/works') { 
const cmd_works_opts = { parse_mode: 'HTML'};return bot.sendMessage(chatId, 'Ниже представлен список выполненных мною проектов:\n\n<b>Bloggy</b>\n<b>\n</b><a href=\"asd\">Приложение </a>для социальных сетей, ориентированное на публикации.<b>\n</b><b><i><a href=\"https://github.com/kirill-cherepanov/Bloggy\">Репозиторий </a></i></b>\n<b><i><a href=\"https://bloggy-kirill-cherepanov.netlify.app/\">Демо</a></i></b>\n\n\n<b>Tic-tac-toe Multiplayer</b>\n\nОнлайн Крестики-нолики. Полностью адаптивное веб-приложение, представляющее собой Одиночная игра + Игра против игроков + Игра против ИИ\n<b><i><a href=\"https://github.com/kirill-cherepanov/tic-tac-toe-multiplayer-react\">Репозиторий</a> </i></b>\n<b><i><a href=\"https://tic-tac-toe-kirill-cherepanov.netlify.app/\">Демо</a></i></b>\n<b><i>\n</i></b>\n<b>Meme generator</b>\n\nПолностью адаптивное веб-приложение для редактирования изображений, в основном ориентированное на добавление к ним текста, а также применение базовых фильтров изображений.\n<b><i><a href=\"https://github.com/kirill-cherepanov/meme-generator\">Репозиторий </a></i></b>\n<b><i><a href=\"https://kirill-cherepanov.github.io/meme-generator/\">Демо</a></i></b>',cmd_works_opts); 
    }})} 
start()