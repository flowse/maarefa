<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$databases['default']['default'] = array (
  'database' => 'umedusa_1',
  'username' => 'umedusa_1',
  'password' => '',
  'prefix' => '',
  'host' => 'localhost',
  'port' => '3306',
  'namespace' => 'Drupal\\Core\\Database\\Driver\\mysql',
  'driver' => 'mysql',
);

$config['system.logging']['error_level'] = 'verbose';
$settings['trusted_host_patterns'] = [
  '^umedusa\.work',
];
if (isset($GLOBALS['request']) and
'/web/index.php' === $GLOBALS['request']->server->get('SCRIPT_NAME')) {
$GLOBALS['request']->server->set('SCRIPT_NAME', '/index.php');
}