<?php
$url = parse_url(getenv('CLEARDB_DATABASE_URL'));

// ** MySQL settings ** //
/** The name of the database for WordPress */
define('DB_NAME', substr($url["path"], 1));

/** MySQL database username */
define('DB_USER', $url["user"]);

/** MySQL database password */
define('DB_PASSWORD', $url["pass"]);

/** MySQL hostname */
define('DB_HOST',  $url["host"]);

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('AUTH_KEY',         'd2;wLZa[G?+,66hwbsHHI$xv11K@6BdI:u*z{)JQ[Xf zc4yY<8=V**J?QAS/^ow');
define('SECURE_AUTH_KEY',  'dig<1- ZQM5WS6;!z+c9dIZ1#gabM2L`lAc{^7}3#SC,tNBxA9F1>{HIUsy#)7I$');
define('LOGGED_IN_KEY',    'E>{^co<!Y7 @e8c|8 f:1J}0T-=@wwPg.`g0>iob{NNi%:*8fM&M*+EdHb1f==#E');
define('NONCE_KEY',        'M%Jp59kNdPW[kF]A7WK$0i/]ZA<6^E>k9c(m-an+2jHD^U-4pM(g+5z;8F|HbuH[');
define('AUTH_SALT',        '3R#5!A{[@6$p-b+6!>!FmMo;|&>=lZx7BfF5tWwmms ^kb+euwm0aS=--Cs@}Wa~');
define('SECURE_AUTH_SALT', 'Gob/H,}b3$%=+gt,>%XwCJQT)]iUE(>,:k-7P~HVcO3$m=`3?{,?r*sL-ObYk4Xi');
define('LOGGED_IN_SALT',   '{$rseYA|7{6+@8VXvzXJ<D@L,HC6siR|M,V9loMA8|/!pN2/lG[?6aoq-!L*wrpd');
define('NONCE_SALT',       'Bd|p.>dAIUZS+G/~Q3egyXw%jA[c1+QRu/n+F5/a=n#b3B1!eIW!-C-U{6nnx<V~');


$table_prefix = 'wp_';


define('WP_DEBUG', true );
define('WP_POST_REVISIONS', 50 );
define("WP_SITEURL", "http://" . $_SERVER["HTTP_HOST"]);
define("WP_HOME", "http://" . $_SERVER["HTTP_HOST"]);
define('WP_LANG', 'ja');

/**
 * AWS Plugin Auth Keys
 */
define( "AWS_ACCESS_KEY_ID", getenv("AWS_ACCESS_KEY_ID") );
define( "AWS_SECRET_ACCESS_KEY", getenv("AWS_SECRET_ACCESS_KEY") );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
