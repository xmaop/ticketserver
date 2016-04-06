<?php
require_once('class/ticket.php');
$token=$_GET['token']."\n";
file_put_contents('lista.txt', $token, FILE_APPEND | LOCK_EX);
$current= rand(1, 15000);
file_put_contents('dato.txt', $current);
$ticket = new ticket;
$ticket->id=123;
$ticket->user="miguel";
echo json_encode($ticket);
?>