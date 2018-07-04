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
define('DB_NAME', 'wp_blanktheme');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'miguel');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '992921996');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY', '>Rr)XLa#W+ezwnvF87@hn.Oq7?e;z--})!X(1)r/&*!q*DUHs>@3gXY|F)`C*K)?');
define('SECURE_AUTH_KEY', 'n#{H&FwZ/OL89.ynoy6S.S&Dp:EtR7C {Q>#4mF8tIl;kv].m18VRvER24+mS]Ox');
define('LOGGED_IN_KEY', 'hlK:jm:r$?ZT*j|GT.*V7(L@eLdMnF22Us5Y?j(&<p%60Anp9Gewx4{!>InW>n*m');
define('NONCE_KEY', 'Ib1e//<N8f6%G Y`a0@&~v!u<(ZjaOZ!.dSkV&dyx=H@WO[$Wxs]<NPIlOu <Q(`');
define('AUTH_SALT', '?C/&BXGx~o-C/P^$wuHF)i+#+18c&AY5jNvS;WIG*5+OjT;DKPg,Mya@`m2Y*{r9');
define('SECURE_AUTH_SALT', '&3is!*#!2=DB>ys[rT =h2&Y kI`Uf*D&),_}PB[E j| rpp]rypk[AzYQq>AWKn');
define('LOGGED_IN_SALT', 'nyU,A}$_Xh2#nLUo]EG~DOM4QRQIxK}{$Q4:4EiX76b$:Xvw1Eu,_Ba=I69%6N%&');
define('NONCE_SALT', 'Z{9M/iHyVRC$9G>iOCwJ-J#PC!+ Qc,s22&fs?aB$dg- @)U7:dr8-;4H7vq_.Vy');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


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

