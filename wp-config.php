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
define( 'DB_NAME', 'blagfond' );

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
define( 'AUTH_KEY',         'B1MEC8A!A?%W^~[`5XycLICSC4L zvYAqLrn6][d5t~Yvf}>zXz}Dnzl9_~AY,`8' );
define( 'SECURE_AUTH_KEY',  '54?rq[sen<f%hbe~y<KLbwKTje{l0T]Y2~asc}bL71RlT}]70Ouax]*8eO Od%gw' );
define( 'LOGGED_IN_KEY',    '|Gbl<R ^5QJ@/h{tn{OB^C-3tu=R-XxRNwrP[EyWL>kQnMy+kjN7;X:>EV+ai7*{' );
define( 'NONCE_KEY',        'Y(5~n!1x!H/p+~r?XGtaM|M42[,IlN(1*PS?S?%ZZW|y[]:vxCsfvs*[%z5{EJe:' );
define( 'AUTH_SALT',        'T$ta;X&Lrh#C,]k{6k*!X&_X-u)4lzl,W2C^Znrliw.Ir_K`,q)*2}nhwvEo6HVC' );
define( 'SECURE_AUTH_SALT', '6r}N|#&f|cnJFnwU*NXBW|A8+Gq-S:6x*w5aaF{WSm@:[Y1APY;_%R`x>anlk|WE' );
define( 'LOGGED_IN_SALT',   '~,3NC6#f9q[Vmf/jcI9{0nOu_E(?bJxDQGpqz,g((f5(a%;xL_Z<m 6k[;v8`7|1' );
define( 'NONCE_SALT',       'hG->ppc jP0+zl#Cg0_r&!++eSvPVJw R=3Vv>G,};BGC&m:uz%6oH+}>S.w>huk' );

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
