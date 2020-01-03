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
define( 'DB_NAME', "wwwtamd1" );


/** Имя пользователя MySQL */
define( 'DB_USER', "root" );


/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', "" );


/** Имя сервера MySQL */
define( 'DB_HOST', "www.tamd1" );


/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );


/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'DBN$6[.=kh/P-/jT(=y4BR]YLwPa&M JC#1/m/89.g^gmd4?v2P<@i ot%`9G3X8' );

define( 'SECURE_AUTH_KEY',  '+JW)9u$K:!{Fcne;!G(!~@.R}t`I&wIOrBqTew=A<n`]`a&% m@eA=4~h{3t]T,T' );

define( 'LOGGED_IN_KEY',    '9E/+IbH_CvHHZ[*SRrz47Xz>r4p)}s;GjU,#^D@r?2:OVF632e5q?s~v9n,)NSvB' );

define( 'NONCE_KEY',        '[fj/7Fdboh+3q00y1%flfeoO$.8B#]wv,|F-OTy=p0J,81g/l8W}EGxiB`8gvz#B' );

define( 'AUTH_SALT',        'D<8@!m+s%@kJV9Id_r;:g@tSaUKKgc.1jz,69aSu7oy@dl%d]ch5e`cgiTD(&KY4' );

define( 'SECURE_AUTH_SALT', 'X&kKIg{^yqkslFRA$c{*zr$cZGXA+@1UOr^~ej{~Bpi lZL=|Wr#zf=OVreymXUB' );

define( 'LOGGED_IN_SALT',   'yy{q7J~:+6FQG:yBik#iWd/IK (C,hB.3w`%[ O{wok>`pRF]7gArek/9~W#:by^' );

define( 'NONCE_SALT',       'niFhv%<+ 5Y$^S`(g`mB(6A:m^hlHj8fgM qqFG@G|k=,dYjV!:VdE4f%6+)MeUu' );


/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';


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
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );

define('WP_CACHE', true);
