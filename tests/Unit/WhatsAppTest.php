<?php

use Kolmeya\WhatsApp\WhatsApp;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Client as GuzzleClient;

it('can send a GET request', function () {
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

    $response = $whatsapp->get('/api/v1/test');

    expect($response)->toBeArray();
    expect($response['response'])->toBe('ok');
});

it('can send a POST request', function () {
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

    $response = $whatsapp->post('/api/v1/test', [
        'form_params' => [
            'foo' => 'bar'
        ]
    ]);

    expect($response)->toBeArray();
    expect($response['response'])->toBe('ok');
});

it('can send a PUT request', function () {
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

    $response = $whatsapp->put('/api/v1/test', [
        'form_params' => [
            'foo' => 'bar'
        ]
    ]);

    expect($response)->toBeArray();
    expect($response['response'])->toBe('ok');
});

it('can send a DELETE request', function () {
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

    $response = $whatsapp->delete('/api/v1/test');

    expect($response)->toBeArray();
    expect($response['response'])->toBe('ok');
});
