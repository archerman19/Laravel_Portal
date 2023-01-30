<?php

use Doctrine\DBAL\DriverManager;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMSetup;

require_once "vendor/autoload.php";

$isDevMode = true;

// Create a simple "default" Doctrine ORM configuration for Attributes
$config = ORMSetup::createAttributeMetadataConfiguration(
    ["C:/xampp/htdocs/educ.local/src"],
    $isDevMode
);

$connection = DriverManager::getConnection([
    'dbname' => 'lab',
    'user' => 'root',
	'password' => '',
	'host' => '127.0.0.1',
	'driver' => 'pdo_mysql'
], $config);

$entityManager = new EntityManager($connection, $config);