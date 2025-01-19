const TelegramApi = require('node-telegram-bot-api');const token = '5928781607:AAGuPSjim3sptsEfxCe2eJ06mNGiniFzgsA'; 
const bot = new TelegramApi(token, {polling: true}); 
const start = async () => { 
bot.setMyCommands([ 
{command: 'start', description: 'Описание команды'}, 
{command: 'info', description: 'Описание команды'}, 
{command: '', description: ''}
]); 
bot.on('message', async msg => {
        const text = msg.text;
        const chatId = msg.chat.id;

    try {
if (text === '/start') { 
const cmd_start_opts = { 
        reply_markup: JSON.stringify({
          inline_keyboard: [[{text: 'Кнопка', url: 'google.com'}], 
[{text: 'Кнопка', url: 'google.com'}], 
]
            })
          };return bot.sendMessage(chatId, 'Ответ на команду',{ parse_mode: 'HTML' },cmd_start_opts); 
    }if (text === '/info') { 
return bot.sendMessage(chatId, 'Ответ на команду',{ parse_mode: 'HTML' },); 
    }if (text === '/') { 
return bot.sendMessage(chatId, '',{ parse_mode: 'HTML' },); 
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
          inline_keyboard: [[{text: 'Кнопка', url: 'google.com'}], 
[{text: 'Кнопка', url: 'google.com'}], 
]
            })
          };return bot.sendMessage(chatId, 'Ответ на команду',{ parse_mode: 'HTML' },cmd_start_opts); 
    }if (data === '/info') { 
return bot.sendMessage(chatId, 'Ответ на команду',{ parse_mode: 'HTML' },); 
    }if (data === '/') { 
return bot.sendMessage(chatId, '',{ parse_mode: 'HTML' },); 
    }})} 
start()