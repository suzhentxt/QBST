<?php

require('vendor/autoload.php');

use \PhpMqtt\Client\MqttClient;
use \PhpMqtt\Client\ConnectionSettings;

$server         = 'broker.emqx.io';
$port           = 1883;
$clientId       = rand(5, 15);
$username       = 'emqx_user';
$password       = 'public';
$clean_session  = false;
$mqtt_version   = MqttClient::MQTT_3_1_1;

$connectionSettings = (new ConnectionSettings)
  ->setUsername($username)
  ->setPassword($password)
  ->setKeepAliveInterval(60)
  ->setLastWillTopic('emqx/test/last-will')
  ->setLastWillMessage('client disconnect')
  ->setLastWillQualityOfService(1);

$mqtt = new MqttClient($server, $port, $clientId, $mqtt_version);

$mqtt->connect($connectionSettings, $clean_session);
printf("client connected\n");

// Adjusted MQTT topics
$topics = [
    '/pH',
    '/wqi',
    '/aquaemiIOT/streamflow',
    '/TDS',
];

// Subscribe to the topics
foreach ($topics as $topic) {
    $mqtt->subscribe($topic, function ($topic, $message) {
        printf("Received message on topic [%s]: %s\n", $topic, $message);
    }, 0);
}

// Adjusted payload format
for ($i = 0; $i < 10; $i++) {
  $payload = [
      'protocol' => 'tcp',
      'date'     => date('Y-m-d H:i:s'),
      'data'     => [
          '/pH'                  => 'pHValue',
          '/wqi'                 => 'wqiValue',
          '/aquaemiIOT/streamflow' => 'SFRateValue',
          '/TDS'                 => 'TDSValue',
      ],
  ];

  $mqtt->publish(
    // topic
    'emqx/test',
    // payload
    json_encode($payload),
    // qos
    0,
    // retain
    true
  );
  printf("msg $i send\n");
  sleep(1);
}

$mqtt->loop(true);
