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
define('DB_NAME', 'wp');

/** Имя пользователя MySQL */
define('DB_USER', 'root2');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'E200847');

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
define('AUTH_KEY',         'O^sq02H!Fu/-JhW 0;jXLO+kck%6Go^lzRgG;=Dfa*:Er/rsW{z}[X(B|$*%Q+,,');
define('SECURE_AUTH_KEY',  'GT$8V0]nxa4FRA{6#=g0t8;8@uG`E>s!iJ>DQ!A<BaWsOU.H(oiG>~Hvv.rlCN]S');
define('LOGGED_IN_KEY',    's0%ac:(EMC}L~BkvFz)lNo/$02ERE-B8VE7muh6Yp}i&d)|LcxKHS3.+KnXgOhoA');
define('NONCE_KEY',        '5/O`ax,`*EV0YsP0xTdVktbVKWKNnI.,#kwdA=6ls&Nw}zP11MJ|&6;gnQpn0p~9');
define('AUTH_SALT',        '~{XOaQ|ar24^!BSiR)]I7V/pQEf[.9pd@)33[0jh0P*wvKyQ-R&+{6~Nxj-8X>K@');
define('SECURE_AUTH_SALT', 'm{R)u+7gtaLE*z)2l{dUiHVk^;cwKmbh3wfTM|=U~$^vg*q<7)Ah>RkgUl=Tam*y');
define('LOGGED_IN_SALT',   '0r&_MRDaPPbN{DGYA/ADHw#/P{&ysHqx5_Hv:r:4]4+m+F^<~#-jGv;w2~?nC.08');
define('NONCE_SALT',       'Lj[=)dBW/;._icmSx~{c`QhV8}N6Z+`~tlGrvkn3`zpY8qV5)~{YNBE/~[dPVB4?');

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
if(is_admin()) {
    add_filter('filesystem_method', create_function('$a', 'return "direct";' ));
    define( 'FS_CHMOD_DIR', 0751 );
}
