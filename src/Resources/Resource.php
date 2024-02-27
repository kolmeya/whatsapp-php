<?php

namespace Kolmeya\WhatsApp\Resources;

use Kolmeya\WhatsApp\WhatsApp;

class Resource
{
    /**
     * The WhatsApp instance.
     *
     * @var WhatsApp
     */
    public $client;

    /**
     * Create a new resource instance.
     *
     * @param WhatsApp $client
     * @return void
     */
    public function __construct(WhatsApp $client)
    {
        $this->client = $client;
    }
}
