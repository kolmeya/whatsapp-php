<?php

namespace Kolmeya\WhatsApp\Resources;

use RuntimeException;

class Chats extends Resource
{
    /**
     * Get chats.
     *
     * @return array
     * @throws RuntimeException
     */
    public function list()
    {
        return $this->client->get('/api/v1/chats');
    }

    /**
     * Get chat details.
     *
     * @param string $number
     * @return array
     * @throws RuntimeException
     */
    public function details(string $number)
    {
        return $this->client->get('/api/v1/chats/' . $number);
    }
}
