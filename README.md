# Kolmeya WhatsApp SDK

## Requirements

- PHP 8.1 or higher

## Installation

Install the SDK using Composer:

```bash
composer require kolmeya/kolmeya-whatsapp-php
```

## Usage

```php
<?php

use Kolmeya\WhatsApp;

$whatsapp = new WhatsApp([
    'base_uri' => '',
    'bearer_token' => '',
    'channel_id' => '',
]);

$response = $whatsapp->chat('552199999999')->sendMessage([
    'recipient_type' => 'individual',
    'type' => 'text',
    'message' => [
        'body' => 'Hello World!',
    ]
])
```
