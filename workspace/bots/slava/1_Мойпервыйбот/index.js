const TelegramApi = require('node-telegram-bot-api');const token = '5928781607:AAGuPSjim3sptsEfxCe2eJ06mNGiniFzgsA'; 
const bot = new TelegramApi(token, {polling: true}); 
const start = async () => { 
bot.setMyCommands([ 
{command: 'start', description: 'Начать диалог с ботом'}, 
{command: 'info', description: 'Посмотреть информацию о боте'}, 
{command: 'команда', description: 'Описание команды'}
]); 
bot.on('message', async msg => {
        const text = msg.text;
        const chatId = msg.chat.id;

    try {
if (text === '/start') { 
const cmd_start_opts = { 
        reply_markup: JSON.stringify({
          inline_keyboard: [[{text: 'Информация', callback_data: '/info'}], 
[{text: 'Информация', callback_data: '/info'}], 
[{text: 'Кнопка', url: 'google.com'}], 
]
            })
          };return bot.sendMessage(chatId, 'Привет, я бот',{ parse_mode: 'HTML' },cmd_start_opts); 
    }if (text === '/info') { 
return bot.sendMessage(chatId, 'Я просто бот',{ parse_mode: 'HTML' },); 
    }if (text === '/команда') { 
const cmd_команда_opts = { 
        reply_markup: JSON.stringify({
          inline_keyboard: [[{text: 'btn', url: 'vk.com'}], 
]
            })
          };return bot.sendMessage(chatId, '<p><i><u><strike><b>Ответ на команду</b></strike></u></i></p>',{ parse_mode: 'HTML' },cmd_команда_opts); 
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
        reply_markup: JSON.stringify({
          inline_keyboard: [[{text: 'Информация', callback_data: '/info'}], 
[{text: 'Информация', callback_data: '/info'}], 
[{text: 'Кнопка', url: 'google.com'}], 
]
            })
          };return bot.sendMessage(chatId, 'Привет, я бот',{ parse_mode: 'HTML' },cmd_start_opts); 
    }if (data === '/info') { 
return bot.sendMessage(chatId, 'Я просто бот',{ parse_mode: 'HTML' },); 
    }if (data === '/команда') { 
const cmd_команда_opts = { 
        reply_markup: JSON.stringify({
          inline_keyboard: [[{text: 'btn', url: 'vk.com'}], 
]
            })
          };return bot.sendMessage(chatId, '<p><i><u><strike><b>Ответ на команду</b></strike></u></i></p>',{ parse_mode: 'HTML' },cmd_команда_opts); 
    }})} 
start()