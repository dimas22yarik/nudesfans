<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'nudefans_db' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '@M`0;xi@tZG=Amm6l;l9QbV,uO&x2hJX_M)gcpN0RIXha7anu% SI|%JGF(`8YV2' );
define( 'SECURE_AUTH_KEY',  '#S/x=zfi!P~/h8W:1:mKsp5#0Ifb<39;4u;lA&F~Ni|CNcP^8|lE1QfK+dKyB(c&' );
define( 'LOGGED_IN_KEY',    '<(;bHbw0-{oxeZ88qBi~yNgOqS@2gWtq=t^m6#]l4h4zBjj{=X71t/xS==DT=`wt' );
define( 'NONCE_KEY',        '%kGv=-hCkm zPvAC{fOfui1x{ChdyfLN(2,(avor@bYFfI~-N{*q720z[Bx|hVqC' );
define( 'AUTH_SALT',        '&rcpTe`OjEGKtaGzVvS0u(-B,[R6we*QD11n<HV$bs1;q<leq=]200t{3/bD%)%v' );
define( 'SECURE_AUTH_SALT', '8vu!^H(}uxd=Jd0t}L|X^<^G<mPoyJ~<Ck&q*;r(y.CHt5m!HW,5LD(6lh[4=uqJ' );
define( 'LOGGED_IN_SALT',   'H^Y<<uH,<EA<QztZL$tu<0LXpuH%CuNvt(86 UqYoBYRFB]s?l]G<T-#Fyp>nC89' );
define( 'NONCE_SALT',       '%GLxsemcnMUOvJ`cjxkhOOQ;KV`xTuZ669S_N(9+%kP@ri<{wrsQr<t9V!vf(k0h' );

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
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
