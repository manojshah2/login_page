<?php
ini_set('display_errors', 1);
require('../vendor/autoload.php');

use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Message\AMQPMessage;
use PhpAmqpLib\Exchange\AMQPExchangeType;

$exchange = 'inTopic';
$queue = 'mqtt-subscription-esp8266 clientqos0';
echo "starting";
$connection = new AMQPStreamConnection("toad.rmq.cloudamqp.com", 1883, "efqgdzpx", "uiiphqstv4wfz7kM4tx2vsBGBpuScnz8", "efqgdzpx");
echo "ok";
$channel = $connection->channel();
//$channel->queue_declare($queue, false, false, false, false);
$channel->exchange_declare($exchange, AMQPExchangeType::DIRECT, false, false, false);

$channel->queue_bind($queue, $exchange);

$messageBody = $_REQUEST['value'];
$message = new AMQPMessage($messageBody, array('content_type' => 'text/plain'));
$channel->basic_publish($message, $exchange);

$channel->close();
$connection->close();

echo "Done";

?>