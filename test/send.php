<?php
require('../vendor/autoload.php');

use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Message\AMQPMessage;
use PhpAmqpLib\Exchange\AMQPExchangeType;

$exchange = 'router';
$queue = 'msgs';

$connection = new AMQPStreamConnection("52.91.158.17", 5672, "efqgdzpx", "uiiphqstv4wfz7kM4tx2vsBGBpuScnz8", "efqgdzpx");

$channel = $connection->channel();
$channel->queue_declare($queue, false, true, false, false);
$channel->exchange_declare($exchange, AMQPExchangeType::DIRECT, false, true, false);

$channel->queue_bind($queue, $exchange);

$messageBody = "test";
$message = new AMQPMessage($messageBody, array('content_type' => 'text/plain', 'delivery_mode' => AMQPMessage::DELIVERY_MODE_PERSISTENT));
$channel->basic_publish($message, $exchange);

$channel->close();
$connection->close();

?>