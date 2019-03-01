<?php
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/functions.php';
require_once __DIR__ . '/connection.php';

$dotenv = Dotenv\Dotenv::create(__DIR__, 'myenvconfig');
$dotenv->load();

if($_SERVER['HTTP_HOST'] == 'localhost:8888') {
    $url = '/csu_hardpoint';
} else {
    $url = '';
}