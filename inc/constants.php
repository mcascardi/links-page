<?php
/**
 * For application constants which are optionally overridden in config.php
 */

if (!defined ('JSON_PATH'))
    define('JSON_PATH', realpath('.'). '/.json' );

if (!defined('DEBUG_MODE'))
    define('DEBUG_MODE', true);

