<?php

if (!defined('APPLICATION_ROOT_DIR')) {
    $directory = realpath(codecept_data_dir() . '/../../');
    define('APPLICATION_ROOT_DIR', $directory);
}
