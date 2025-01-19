const TelegramApi = require('node-telegram-bot-api');const token = 'asdasdasd'; 
const bot = new TelegramApi(token, {polling: true}); 
const start = async () => { 
bot.setMyCommands([ 
{command: 'start', description: 'Описание команды'}
]); 
bot.on('message', async msg => {
        const text = msg.text;
        const chatId = msg.chat.id;

    try {
if (text === '/start') { 
const cmd_start_opts = { 
        parse_mode: 'HTML',
        reply_markup: JSON.stringify({
          inline_keyboard: [[{text: 'Кнопка123123123', url: 'google.com'}], 
]
            })
          };return bot.sendMessage(chatId, 'Ответ на команду', cmd_start_opts); 
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
          inline_keyboard: [[{text: 'Кнопка123123123', url: 'google.com'}], 
]
            })
          };return bot.sendMessage(chatId, 'Ответ на команду',cmd_start_opts); 
    }})} 
start()