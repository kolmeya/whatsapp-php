<?php

use Kolmeya\WhatsApp\WhatsApp;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Client as GuzzleClient;

it('can get the device', function () {
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

    $device = $whatsapp->device();

    $response = $device->info();

    expect($response)->toBeArray();
    expect($response['response'])->toBe('ok');
});

it('can search messages', function () {
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

    $device = $whatsapp->device();

    $response = $device->searchMessages('foo', '1234567890');

    expect($response)->toBeArray();
    expect($response['response'])->toBe('ok');
});

it('can set the profile picture', function () {
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

    $device = $whatsapp->device();

    $response = $device->setProfilePicture('https://example.com/image.jpg');

    expect($response)->toBeArray();
    expect($response['response'])->toBe('ok');
});

it('can delete the profile picture', function () {
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

    $device = $whatsapp->device();

    $response = $device->deleteProfilePicture();

    expect($response)->toBeArray();
    expect($response['response'])->toBe('ok');
});

it('can set the about status', function () {
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

    $device = $whatsapp->device();

    $response = $device->setAboutStatus('foo');

    expect($response)->toBeArray();
    expect($response['response'])->toBe('ok');
});

it('can set the display name', function () {
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

    $device = $whatsapp->device();

    $response = $device->setDisplayName('foo');

    expect($response)->toBeArray();
    expect($response['response'])->toBe('ok');
});

it('can display offline status', function () {
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

    $device = $whatsapp->device();

    $response = $device->displayOfflineStatus();

    expect($response)->toBeArray();
    expect($response['response'])->toBe('ok');
});

it('can display online status', function () {
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

    $device = $whatsapp->device();

    $response = $device->displayOnlineStatus();

    expect($response)->toBeArray();
    expect($response['response'])->toBe('ok');
});

it('can get version', function () {
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

    $device = $whatsapp->device();

    $response = $device->getVersion();

    expect($response)->toBeArray();
    expect($response['response'])->toBe('ok');
});
