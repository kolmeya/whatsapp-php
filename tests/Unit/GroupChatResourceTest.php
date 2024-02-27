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

    $group = $whatsapp->group('1234567890');

    $response = $group->sendMessage([]);

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

    $group = $whatsapp->group('1234567890');

    $response = $group->clearMessages();

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

    $group = $whatsapp->group('1234567890');

    $response = $group->messages();

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

    $group = $whatsapp->group('1234567890');

    $response = $group->clearState();

    expect($response)->toBeArray();
    expect($response['response'])->toBe('ok');
});

it('can delete a group', function () {
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

    $group = $whatsapp->group('1234567890');

    $response = $group->delete();

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

    $group = $whatsapp->group('1234567890');

    $response = $group->contact();

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

    $group = $whatsapp->group('1234567890');

    $response = $group->labels();

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

    $group = $whatsapp->group('1234567890');

    $response = $group->profilePicture();

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

    $group = $whatsapp->group('1234567890');

    $response = $group->markAsRead();

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

    $group = $whatsapp->group('1234567890');

    $response = $group->markAsUnread();

    expect($response)->toBeArray();
    expect($response['response'])->toBe('ok');
});

it('can mute a group', function () {
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

    $group = $whatsapp->group('1234567890');

    $response = $group->mute();

    expect($response)->toBeArray();
    expect($response['response'])->toBe('ok');
});

it('can unmute a group', function () {
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

    $group = $whatsapp->group('1234567890');

    $response = $group->unmute();

    expect($response)->toBeArray();
    expect($response['response'])->toBe('ok');
});

it('can pin a group', function () {
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

    $group = $whatsapp->group('1234567890');

    $response = $group->pin();

    expect($response)->toBeArray();
    expect($response['response'])->toBe('ok');
});

it('can unpin a group', function () {
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

    $group = $whatsapp->group('1234567890');

    $response = $group->unpin();

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

    $group = $whatsapp->group('1234567890');

    $response = $group->recording();

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

    $group = $whatsapp->group('1234567890');

    $response = $group->typing();

    expect($response)->toBeArray();
    expect($response['response'])->toBe('ok');
});

it('can archive group messages', function () {
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

    $group = $whatsapp->group('1234567890');

    $response = $group->archive();

    expect($response)->toBeArray();
    expect($response['response'])->toBe('ok');
});

it('can unarchive group messages', function () {
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

    $group = $whatsapp->group('1234567890');

    $response = $group->unarchive();

    expect($response)->toBeArray();
    expect($response['response'])->toBe('ok');
});
