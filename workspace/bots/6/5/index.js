const TelegramApi = require('node-telegram-bot-api');const token = '6088437741:AAE7ilBgKF_Xu27RknqpNfqAZi1w09Qqc-Q'; 
const bot = new TelegramApi(token, {polling: true}); 
const start = async () => { 
bot.setMyCommands([ 
{command: 'start', description: 'Начать диалог'}, 
{command: 'info', description: 'Обо мне'}, 
{command: 'socials', description: 'Социальные сети'}, 
{command: 'stack', description: 'Стек навыков'}
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
          inline_keyboard: [[{text: 'Сайт обо мне', url: 'https://kirill-cherepanov.netlify.app/'}], 
[{text: 'Соц сети', callback_data: '/socials'}], 
[{text: 'Резюме', url: 'https://kirill-cherepanov.netlify.app/assets/Kirill%20Cherepanov%20Resume-93e008c7.pdf'}], 
[{text: 'Мои навыки', callback_data: '/stack'}], 
]
            })
          };return bot.sendMessage(chatId, 'Меня зовут Кирилл Черепанов, и я junior фулстек веб-разработчик с акцентом на front-end и MERN плюс Typescript стек.', cmd_info_opts); 
    }if (text === '/socials') { 
const cmd_socials_opts = { 
        parse_mode: 'HTML',
        reply_markup: JSON.stringify({
          inline_keyboard: [[{text: 'VK', url: 'https://vk.com/kcherepanov1/'}], 
[{text: 'Кнопка', url: 'google.com'}], 
[{text: 'Кнопка', url: 'google.com'}], 
]
            })
          };return bot.sendMessage(chatId, 'Вы можете узнать некоторую информацию обо мне из социальных сетей или просто связаться со мной.', cmd_socials_opts); 
    }if (text === '/stack') { 
const cmd_stack_opts = { parse_mode: 'HTML'};return bot.sendMessage(chatId, 'В списке ниже представлены языки программирования, которыми я владею:\n<b><i>Первичные:</i></b>\nJavascript\nTypescript\nReact\nNode.js\nExpress\nMongodb\nHTML5\nCSS3\nsass\ntailwind\n<b><i>Вторичные:</i></b>\nPython\nC++\nWebpack\nSocket.io/Websockets\ngit\nfigma\nredux\nDocker\nCypress\nMarkdown\nThree.js\nSolidWorks', cmd_stack_opts); 
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
          inline_keyboard: [[{text: 'Сайт обо мне', url: 'https://kirill-cherepanov.netlify.app/'}], 
[{text: 'Соц сети', callback_data: '/socials'}], 
[{text: 'Резюме', url: 'https://kirill-cherepanov.netlify.app/assets/Kirill%20Cherepanov%20Resume-93e008c7.pdf'}], 
[{text: 'Мои навыки', callback_data: '/stack'}], 
]
            })
          };return bot.sendMessage(chatId, 'Меня зовут Кирилл Черепанов, и я junior фулстек веб-разработчик с акцентом на front-end и MERN плюс Typescript стек.',cmd_info_opts); 
    }if (data === '/socials') { 
const cmd_socials_opts = { 
        parse_mode: 'HTML',
        reply_markup: JSON.stringify({
          inline_keyboard: [[{text: 'VK', url: 'https://vk.com/kcherepanov1/'}], 
[{text: 'Кнопка', url: 'google.com'}], 
[{text: 'Кнопка', url: 'google.com'}], 
]
            })
          };return bot.sendMessage(chatId, 'Вы можете узнать некоторую информацию обо мне из социальных сетей или просто связаться со мной.',cmd_socials_opts); 
    }if (data === '/stack') { 
const cmd_stack_opts = { parse_mode: 'HTML'};return bot.sendMessage(chatId, 'В списке ниже представлены языки программирования, которыми я владею:\n<b><i>Первичные:</i></b>\nJavascript\nTypescript\nReact\nNode.js\nExpress\nMongodb\nHTML5\nCSS3\nsass\ntailwind\n<b><i>Вторичные:</i></b>\nPython\nC++\nWebpack\nSocket.io/Websockets\ngit\nfigma\nredux\nDocker\nCypress\nMarkdown\nThree.js\nSolidWorks',cmd_stack_opts); 
    }})} 
start()