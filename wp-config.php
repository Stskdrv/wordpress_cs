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
define( 'DB_NAME', 'childhood' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'child_admin' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '12345' );

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
define( 'AUTH_KEY',         'U(4sKdv<hm4=kZ^I[4J;{U`@1MIwrbADZ4-6wAZP(W`|Ea()JVZKo)Dlngp3LXtK' );
define( 'SECURE_AUTH_KEY',  '?07a5D*!`85`zpBAjk,}>Dja4<~V=s%10Kuawuuxda/iC6j]pWkaN}shkW1[#e3K' );
define( 'LOGGED_IN_KEY',    'px`k8ab|v9}Mi#[Rel}3|}^C0r)=X&V!]b&+xa^hFcKn.(jcP^agtB7l: v3k_v%' );
define( 'NONCE_KEY',        'JEm80LSyC`3X?>B6YL[oL// 2!K0YE7*p%U+`wdx*qig,UdSUBs?K+ByFPGBsKiR' );
define( 'AUTH_SALT',        'h}Fa//+[+G{/<aC_k?:e)s{Jstg.W*/Ks_op,7Ef9PU?NtmwaHK4j~fS7oQc^dPH' );
define( 'SECURE_AUTH_SALT', 'J<=)AT,>OC2dkRe$~-n}B$z7~:cu6P7J)K9ue^-M|K[[IHpe-H`7-dI<r<p6l,~B' );
define( 'LOGGED_IN_SALT',   '3:IHe%-JgduTxO+WI[Bga?^>Y8sZw(9_J*0v=4GC{pFk95KW@nEvS?)Oxo%5,qRj' );
define( 'NONCE_SALT',       '^!7q9vCeJsOA&^Js45RM<#1kp7 hb1l&vl `6lZ!ZU;)X1,+[oQZ(YH>*CI-qg@_' );

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
