<?php
/**
 * Created by Ahmed Dabak
 * Date: 25.12.2017
 * Time: 22:42
 */

/**
 * Plugin Name: Elequent For Wordpress
 */

use Illuminate\Database\Capsule\Manager as DB;

require_once( __DIR__ . "/vendor/autoload.php" );

global $table_prefix;
$db = new DB;

$db->addConnection( [
	'driver'    => 'mysql',
	'host'      => DB_HOST,
	'database'  => DB_NAME,
	'username'  => DB_USER,
	'password'  => DB_PASSWORD,
	'charset'   => DB_CHARSET,
	'collation' => empty( DB_COLLATE ) ? 'utf8mb4_unicode_520_ci' : DB_COLLATE,
	'prefix'    => $table_prefix
] );


$db->setAsGlobal();
$db->bootEloquent();