<?php


use App\Service\RandomCardService;

require __DIR__ . '/../vendor/autoload.php';
//
$randomCard = new RandomCardService();
$randomCard->getData();
