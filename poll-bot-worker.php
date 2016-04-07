<?php

set_time_limit(0);

require_once 'PollBot.php';

define('BOT_TOKEN', '203026916:AAHFv8qCoeUIJpW6UbKbYKbXEDz2aUceIcM');

$bot = new PollBot(BOT_TOKEN, 'PollBotChat');
$bot->runLongpoll();
