<?php
require_once "C:/xampp/htdocs/educ.local/config/bootstrap.php";

$messageRepository = $entityManager->getRepository('Message');
$messages= $messageRepository->findAll();

foreach ($messages as $message) {
    echo sprintf("-%s\n", $message->getText());
}