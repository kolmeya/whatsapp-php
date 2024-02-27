<?php

use Kolmeya\WhatsApp\WhatsApp;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Client as GuzzleClient;

it('can list chats', function () {
    $mock = new MockHandler([
        new Response(200, [], json_encode(['response' => 'ok']))
    ]);

    $handlerStack = HandlerStack::create($mock);
    $client = new GuzzleClient(['handler' => $handlerStack]);

    $whatsapp = new WhatsApp([
        'base_uri' => 'https://whatsapi.kolmeya.com',
        'bearer_token' => 'secret',
        'channel_id' => '1234567890'
    ]);
    $whatsapp->setClient($client);

    $chats = $whatsapp->chats();

    $response = $chats->list();

    expect($response)->toBeArray();
    expect($response['response'])->toBe('ok');
});

it('can get a chat details', function () {
    $mock = new MockHandler([
        new Response(200, [], json_encode(['response' => 'ok']))
    ]);

    $handlerStack = HandlerStack::create($mock);
    $client = new GuzzleClient(['handler' => $handlerStack]);

    $whatsapp = new WhatsApp([
        'base_uri' => 'https://whatsapi.kolmeya.com',
        'bearer_token' => 'secret',
        'channel_id' => '1234567890'
    ]);
    $whatsapp->setClient($client);

    $chats = $whatsapp->chats();

    $response = $chats->details('1234567890');

    expect($response)->toBeArray();
    expect($response['response'])->toBe('ok');
});
