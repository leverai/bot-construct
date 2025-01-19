const TelegramApi = require('node-telegram-bot-api');const token = '7870663354:AAH0Xw4GRnCsgCpB_BwuOC1KGWPKYO8fQxk'; 
const bot = new TelegramApi(token, {polling: true}); 
const start = async () => { 
bot.setMyCommands([ 
{command: 'start', description: 'Начать диалог с ботом'}, 
{command: 'info', description: 'Посмотреть информацию о боте'}, 
{command: 'command', description: 'Описание команды'}, 
{command: 'sdsdffds', description: 'Описание команды'}
]); 
bot.on('message', async msg => {
        const text = msg.text;
        const chatId = msg.chat.id;

    try {
if (text === '/start') { 
const cmd_start_opts = { 
        parse_mode: 'HTML',
        reply_markup: JSON.stringify({
          inline_keyboard: [[{text: 'Информация', callback_data: '/info'}], 
[{text: 'Информация', callback_data: '/info'}], 
[{text: 'Кнопка', url: 'google.com'}], 
]
            })
          };return bot.sendMessage(chatId, 'asdasdasd', cmd_start_opts); 
    }if (text === '/info') { 
const cmd_info_opts = { parse_mode: 'HTML'};return bot.sendMessage(chatId, 'Я просто бот', cmd_info_opts); 
    }if (text === '/command') { 
const cmd_command_opts = { 
        parse_mode: 'HTML',
        reply_markup: JSON.stringify({
          inline_keyboard: [[{text: 'btn', url: 'vk.com'}], 
[{text: 'Кнопка', url: 'google.com'}], 
]
            })
          };return bot.sendMessage(chatId, '<b><i><u><strike>hui</strike></u></i></b>', cmd_command_opts); 
    }if (text === '/sdsdffds') { 
const cmd_sdsdffds_opts = { 
        parse_mode: 'HTML',
        reply_markup: JSON.stringify({
          inline_keyboard: [[{text: 'Кнопка', url: 'google.com'}], 
[{text: 'Кнопка', url: 'google.com'}], 
]
            })
          };return bot.sendMessage(chatId, '\nПривет', cmd_sdsdffds_opts); 
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
          inline_keyboard: [[{text: 'Информация', callback_data: '/info'}], 
[{text: 'Информация', callback_data: '/info'}], 
[{text: 'Кнопка', url: 'google.com'}], 
]
            })
          };return bot.sendMessage(chatId, 'asdasdasd',cmd_start_opts); 
    }if (data === '/info') { 
const cmd_info_opts = { parse_mode: 'HTML'};return bot.sendMessage(chatId, 'Я просто бот',cmd_info_opts); 
    }if (data === '/command') { 
const cmd_command_opts = { 
        parse_mode: 'HTML',
        reply_markup: JSON.stringify({
          inline_keyboard: [[{text: 'btn', url: 'vk.com'}], 
[{text: 'Кнопка', url: 'google.com'}], 
]
            })
          };return bot.sendMessage(chatId, '<b><i><u><strike>hui</strike></u></i></b>',cmd_command_opts); 
    }if (data === '/sdsdffds') { 
const cmd_sdsdffds_opts = { 
        parse_mode: 'HTML',
        reply_markup: JSON.stringify({
          inline_keyboard: [[{text: 'Кнопка', url: 'google.com'}], 
[{text: 'Кнопка', url: 'google.com'}], 
]
            })
          };return bot.sendMessage(chatId, '\nПривет',cmd_sdsdffds_opts); 
    }})} 
start()