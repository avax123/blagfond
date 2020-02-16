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
define( 'DB_NAME', 'pise4ka' );

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
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '2R0FUX6YH9L%w7P:-x}MPdT?<%l&nE,B-/t~T*Z5J,Oq|rEzSIC%JLUik>$K^xC^' );
define( 'SECURE_AUTH_KEY',  '/1X5upcWhEo<+S&=2mo*X/ruH>p)M|=Xss5Er*~w<UAVO(cf;X~F[so{&2U[h]1c' );
define( 'LOGGED_IN_KEY',    ',yAIMjxi_4Ujxz&/X|Iffo Qw#p`-/t8=*qRh 8=?W*|?G.V]DM;VZgLv} B,-R}' );
define( 'NONCE_KEY',        'pCbi^kX.5<,N@~O2P2ft|O:u@|${4VV}GNrv9)#xS)Hq;4wr^ yJZGWiZL--3Xno' );
define( 'AUTH_SALT',        '-4kkNf?]x$A T*i;>`juSQ,;x5hGd,?0P8o_:x74}mZ@)7iB(35Km&th.s0U|bbO' );
define( 'SECURE_AUTH_SALT', 'M}HG1^5,B-`(e?N8&kW$T#N$S|G2{){VN@@(%ohuUYVP*=s79$r0+E}JT6/Ja8SH' );
define( 'LOGGED_IN_SALT',   '@:.9$WT.[&!O/wf(Q{!x[t_<1>nH ABE0yN0H.6,kwb~/>Z8:JED9hz4QP*SMvIR' );
define( 'NONCE_SALT',       'UV)F8?YX`l# iU@H7i2Aii*IW81sWCCpxb)OH@Py1IC:,mpMi0|l>_tVUsa57xCR' );

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
