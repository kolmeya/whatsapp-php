<?php

use Kolmeya\WhatsApp\WhatsApp;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Client as GuzzleClient;

it('can send a message', function () {
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

    $chat = $whatsapp->chat('1234567890');

    $response = $chat->sendMessage([]);

    expect($response)->toBeArray();
    expect($response['response'])->toBe('ok');
});

it('can clear messages', function () {
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

    $chat = $whatsapp->chat('1234567890');

    $response = $chat->clearMessages();

    expect($response)->toBeArray();
    expect($response['response'])->toBe('ok');
});

it('can get messages', function () {
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

    $chat = $whatsapp->chat('1234567890');

    $response = $chat->messages();

    expect($response)->toBeArray();
    expect($response['response'])->toBe('ok');
});

it('can clear state', function () {
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

    $chat = $whatsapp->chat('1234567890');

    $response = $chat->clearState();

    expect($response)->toBeArray();
    expect($response['response'])->toBe('ok');
});

it('can delete a chat', function () {
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

    $chat = $whatsapp->chat('1234567890');

    $response = $chat->delete();

    expect($response)->toBeArray();
    expect($response['response'])->toBe('ok');
});

it('can get a contact details', function () {
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

    $chat = $whatsapp->chat('1234567890');

    $response = $chat->contact();

    expect($response)->toBeArray();
    expect($response['response'])->toBe('ok');
});

it('can get labels', function () {
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

    $chat = $whatsapp->chat('1234567890');

    $response = $chat->labels();

    expect($response)->toBeArray();
    expect($response['response'])->toBe('ok');
});

it('can get profile picture', function () {
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

    $chat = $whatsapp->chat('1234567890');

    $response = $chat->profilePicture();

    expect($response)->toBeArray();
    expect($response['response'])->toBe('ok');
});

it('can mark as read', function () {
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

    $chat = $whatsapp->chat('1234567890');

    $response = $chat->markAsRead();

    expect($response)->toBeArray();
    expect($response['response'])->toBe('ok');
});

it('can mark as unread', function () {
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

    $chat = $whatsapp->chat('1234567890');

    $response = $chat->markAsUnread();

    expect($response)->toBeArray();
    expect($response['response'])->toBe('ok');
});

it('can mute a chat', function () {
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

    $chat = $whatsapp->chat('1234567890');

    $response = $chat->mute();

    expect($response)->toBeArray();
    expect($response['response'])->toBe('ok');
});

it('can unmute a chat', function () {
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

    $chat = $whatsapp->chat('1234567890');

    $response = $chat->unmute();

    expect($response)->toBeArray();
    expect($response['response'])->toBe('ok');
});

it('can pin a chat', function () {
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

    $chat = $whatsapp->chat('1234567890');

    $response = $chat->pin();

    expect($response)->toBeArray();
    expect($response['response'])->toBe('ok');
});

it('can unpin a chat', function () {
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

    $chat = $whatsapp->chat('1234567890');

    $response = $chat->unpin();

    expect($response)->toBeArray();
    expect($response['response'])->toBe('ok');
});

it('can send recording state', function () {
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

    $chat = $whatsapp->chat('1234567890');

    $response = $chat->recording();

    expect($response)->toBeArray();
    expect($response['response'])->toBe('ok');
});

it('can send typing state', function () {
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

    $chat = $whatsapp->chat('1234567890');

    $response = $chat->typing();

    expect($response)->toBeArray();
    expect($response['response'])->toBe('ok');
});

it('can archive chat messages', function () {
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

    $chat = $whatsapp->chat('1234567890');

    $response = $chat->archive();

    expect($response)->toBeArray();
    expect($response['response'])->toBe('ok');
});

it('can unarchive chat messages', function () {
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

    $chat = $whatsapp->chat('1234567890');

    $response = $chat->unarchive();

    expect($response)->toBeArray();
    expect($response['response'])->toBe('ok');
});
