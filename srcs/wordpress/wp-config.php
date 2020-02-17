<?php
/**
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'wordpress');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'xS}QwTIwco|khj>,5&`Tn<3A!zPbZZEtSx2@7yj@WdWD$R&/0q6u82QNVn7X-&k2');
define('SECURE_AUTH_KEY',  'O$[)],(T),i+e&o1<B-R.j;kr~@~|Ua?+*L F+6~8AR:cVV<0MG$97I{yoD7p+eb');
define('LOGGED_IN_KEY',    '(.|*tj9olOMA,zCMj,)h<;4v#>2J~+qWAmGP0e52yS-3[<>NpE`7_+;+m!w+*`)A');
define('NONCE_KEY',        'eBA1ntl&r ea+X&HA%7r6Q<],)ez>vw-v_()DX;|gb,a<-f-aH|*=x<vG_;AY0rP');
define('AUTH_SALT',        '79bJ-f^HHU*|I#])3 n-JR25V`IT39q{x3 ?T&{nu}:c>AU%C-r?gvml2RvUDy56');
define('SECURE_AUTH_SALT', '&-_S$+}Dv^0:k8P_lv~mb_w9z#}gA)^A5{p|wwX:p{)inl4PzJ1te5:{ZN-&=$Py');
define('LOGGED_IN_SALT',   'b2g}^]=)EI-dy!1g;hmjS{_n Tb%25}8t#P2yAl*-*(!UbB`/v70L)4KXYL]=r>/');
define('NONCE_SALT',       'eS|.O7GTlp&)A^PXAmXWY#lyw`x9xEiWxyb-Y_J-J60HU){+W.[Cf8@6EGLm^.:D');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

