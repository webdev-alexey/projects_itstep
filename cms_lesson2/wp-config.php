<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'wordpress');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'x;(BU|t7=cF^^0x&p%V%,P$^mIM.IRGByG:LuMl bE3/ll$e0#*0{bvf8=$1R|By');
define('SECURE_AUTH_KEY',  'kS[nWP2nlQm%.nj%c={Zba#^yOK/~c5P|x?aOUF(@fR/,Mq?H|^TYR(QA[Lu;DwJ');
define('LOGGED_IN_KEY',    'g&n29LFkZQN@K4T4p{0h}8J^l:|(l^$z9$H!36~PBET&PWH!Af:6E;5ZE7|k4Ns+');
define('NONCE_KEY',        '}|fI0oE6t&/zT*JM<_$-=EeioA%!kd05^0_*Esx=MiNR3}hmk8rLt/b$VB6n~Hy>');
define('AUTH_SALT',        'J}`*}-bOf&)v0kap&WQ!_}[/rYVxW}1QQ}5l.N3G1,MI9PR;y!e/Q0,pQ)hl+)!T');
define('SECURE_AUTH_SALT', '?p_@(Es~$|*3u-lZQ]ayLNKJr8LNx~m( 0a@Uth0ux4IY^;G}3#Mrb+-{v[h2`%Z');
define('LOGGED_IN_SALT',   'd^e`[V4/Ky|C;>~Q#C%<!eWcCeso* 0}XZw|7vkHIC42#1cBy@TwAE[u;2pL5Z]W');
define('NONCE_SALT',       'w?@^DQN4>99BDyJ@fiFSjM4>P5KCM8Aqq-lY9y=<4R6uF4&K{H(bcG5*uB>Y%dpO');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
