<?php
/*
 * InfoAppl Bulletin Board Bot
 * ===================
 * UWiClab, University of Urbino
 * ===================
 * Configuration file.
 * Fill in values and save as config.php.
 *
 * DO NOT COMMIT CONFIG.PHP.
 */

/*  Constants for telegram API */
define('TELEGRAM_BOT_TOKEN', '');
define('TELEGRAM_BOT_NAME', '');
define('TELEGRAM_API_URI_BASE', 'https://api.telegram.org/bot' . TELEGRAM_BOT_TOKEN . '/');
define('TELEGRAM_API_URI_FILE', 'https://api.telegram.org/file/bot' . TELEGRAM_BOT_TOKEN . '/');
define('TELEGRAM_API_URI_ME', TELEGRAM_API_URI_BASE . 'getMe');
define('TELEGRAM_API_URI_MESSAGE', TELEGRAM_API_URI_BASE . 'sendMessage');
define('TELEGRAM_API_URI_LOCATION', TELEGRAM_API_URI_BASE . 'sendLocation');
define('TELEGRAM_API_URI_PHOTO', TELEGRAM_API_URI_BASE . 'sendPhoto');
define('TELEGRAM_API_URI_UPDATES', TELEGRAM_API_URI_BASE . 'getUpdates');
define('TELEGRAM_API_URI_FILE_PATH', TELEGRAM_API_URI_FILE . 'getFile');
define('TELEGRAM_DEEP_LINK_URI_BASE', 'https://telegram.me/' . TELEGRAM_BOT_NAME . '?start=');

/*  Constants for Data Access */
define('DATA_BASE_FILEPATH', '');
define('DATA_DIRECTORY', '');

/*  Feed constant */
define('FEED_URL','');

/* Settings constant */
define('ADMIN_TELEGRAM_ID', 0);
define('LIVE_CHANNEL_ID', '');
define('DEBUG_LIVE_CHANNEL_ID', '');
define('DEBUG', false);

?>
