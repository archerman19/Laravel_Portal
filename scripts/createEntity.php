<?php
require_once "C:/xampp/htdocs/educ.local/config/bootstrap.php";

$message = new Message();

$message->setSenderId(1);
$message->setReceiverId(2);
$message->setText('It is message Orm');

$entityManager->persist($message);
$entityManager->flush();

echo "Created Message with ID " . $message->getId() . "\n";
