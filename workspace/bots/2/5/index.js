const TelegramApi = require('node-telegram-bot-api');const token = '6088437741:AAE7ilBgKF_Xu27RknqpNfqAZi1w09Qqc-Q'; 
const bot = new TelegramApi(token, {polling: true}); 
const start = async () => { 
bot.setMyCommands([ 
{command: 'start', description: 'Начать диалог'}, 
{command: 'info', description: 'Обо мне'}, 
{command: 'socials', description: 'Социальные сети'}, 
{command: '', description: ''}
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
[{text: 'Резюме', url: 'https://kirill-cherepanov.netlify.app/assets/Kirill%20Cherepanov%20Resume-93e008c7.pdf'}], 
[{text: 'Социальные сети', callback_data: '/socials'}], 
]
            })
          };return bot.sendMessage(chatId, 'Меня зовут Кирилл Черепанов, и я junior фулстек веб-разработчик с акцентом на front-end и MERN плюс Typescript стек.\n', cmd_info_opts); 
    }if (text === '/socials') { 
const cmd_socials_opts = { 
        parse_mode: 'HTML',
        reply_markup: JSON.stringify({
          inline_keyboard: [[{text: 'VK', url: 'https://vk.com/kcherepanov1/'}], 
[{text: 'Discord', url: 'https://discord.com/users/292300959265062922'}], 
[{text: 'Github', url: 'https://github.com/Kirill-Cherepanov'}], 
]
            })
          };return bot.sendMessage(chatId, 'Вы можете узнать некоторую информацию обо мне из социальных сетей или просто связаться со мной.', cmd_socials_opts); 
    }if (text === '/') { 
return bot.sendMessage(chatId, '', ); 
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
[{text: 'Резюме', url: 'https://kirill-cherepanov.netlify.app/assets/Kirill%20Cherepanov%20Resume-93e008c7.pdf'}], 
[{text: 'Социальные сети', callback_data: '/socials'}], 
]
            })
          };return bot.sendMessage(chatId, 'Меня зовут Кирилл Черепанов, и я junior фулстек веб-разработчик с акцентом на front-end и MERN плюс Typescript стек.\n',cmd_info_opts); 
    }if (data === '/socials') { 
const cmd_socials_opts = { 
        parse_mode: 'HTML',
        reply_markup: JSON.stringify({
          inline_keyboard: [[{text: 'VK', url: 'https://vk.com/kcherepanov1/'}], 
[{text: 'Discord', url: 'https://discord.com/users/292300959265062922'}], 
[{text: 'Github', url: 'https://github.com/Kirill-Cherepanov'}], 
]
            })
          };return bot.sendMessage(chatId, 'Вы можете узнать некоторую информацию обо мне из социальных сетей или просто связаться со мной.',cmd_socials_opts); 
    }if (data === '/') { 
return bot.sendMessage(chatId, '',); 
    }})} 
start()