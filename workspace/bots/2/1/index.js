const TelegramApi = require('node-telegram-bot-api');const token = '5928781607:AAGuPSjim3sptsEfxCe2eJ06mNGiniFzgsA'; 
const bot = new TelegramApi(token, {polling: true}); 
const start = async () => { 
bot.setMyCommands([ 
{command: 'start', description: 'Начать диалог с ботом'}, 
{command: 'info', description: 'Посмотреть информацию о боте'}, 
{command: 'command', description: 'Описание команды'}, 
{command: 'sdsdffds', description: 'Описание команды'}, 
{command: '', description: ''}, 
{command: '', description: ''}
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
    }if (text === '/command') { 
const cmd_command_opts = { 
        reply_markup: JSON.stringify({
          inline_keyboard: [[{text: 'btn', url: 'vk.com'}], 
]
            })
          };return bot.sendMessage(chatId, '<i><u><strike><b>Ответ на команду</b></strike></u></i>',{ parse_mode: 'HTML' },cmd_command_opts); 
    }if (text === '/sdsdffds') { 
const cmd_sdsdffds_opts = { 
        reply_markup: JSON.stringify({
          inline_keyboard: [[{text: 'Привет', url: 'google.com'}], 
[{text: 'Пока', url: 'google.com'}], 
]
            })
          };return bot.sendMessage(chatId, '\nПривет',{ parse_mode: 'HTML' },cmd_sdsdffds_opts); 
    }if (text === '/') { 
return bot.sendMessage(chatId, '',{ parse_mode: 'HTML' },); 
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
          inline_keyboard: [[{text: 'Информация', callback_data: '/info'}], 
[{text: 'Информация', callback_data: '/info'}], 
[{text: 'Кнопка', url: 'google.com'}], 
]
            })
          };return bot.sendMessage(chatId, 'Привет, я бот',{ parse_mode: 'HTML' },cmd_start_opts); 
    }if (data === '/info') { 
return bot.sendMessage(chatId, 'Я просто бот',{ parse_mode: 'HTML' },); 
    }if (data === '/command') { 
const cmd_command_opts = { 
        reply_markup: JSON.stringify({
          inline_keyboard: [[{text: 'btn', url: 'vk.com'}], 
]
            })
          };return bot.sendMessage(chatId, '<i><u><strike><b>Ответ на команду</b></strike></u></i>',{ parse_mode: 'HTML' },cmd_command_opts); 
    }if (data === '/sdsdffds') { 
const cmd_sdsdffds_opts = { 
        reply_markup: JSON.stringify({
          inline_keyboard: [[{text: 'Привет', url: 'google.com'}], 
[{text: 'Пока', url: 'google.com'}], 
]
            })
          };return bot.sendMessage(chatId, '\nПривет',{ parse_mode: 'HTML' },cmd_sdsdffds_opts); 
    }if (data === '/') { 
return bot.sendMessage(chatId, '',{ parse_mode: 'HTML' },); 
    }if (data === '/') { 
return bot.sendMessage(chatId, '',{ parse_mode: 'HTML' },); 
    }})} 
start()