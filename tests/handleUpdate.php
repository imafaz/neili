<?php

// include autoload or Neili.php
include('../src/Neili.php');

// use Neili class
use TelegramBot\Neili;

// create Neili object
$token = '6442038046:AAGfKm3q-YaNF38ps1EwMUN0QOeKbg7DX4M'; // setup access token
$bot = new Neili($token);


// handle received update
$update = $bot->handleUpdate('secret-hash'); // or $update = $bot->handleUpdate();

// check chat and send message
$message = $update['message'];
$chatType = $message['chat']['type'];
$chatId = $message['chat']['id'];

if($chatType == '')
$message = 'hello  this message sended with neili!';
$bot->sendMessage($chatId, $message);