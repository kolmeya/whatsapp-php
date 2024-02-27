<?php

namespace Kolmeya\WhatsApp\Resources;

use RuntimeException;

class Groups extends Resource
{
    /**
     * Get groups.
     *
     * @return array
     * @throws RuntimeException
     */
    public function list()
    {
        return $this->client->get('/api/v1/groups');
    }

    /**
     * Get chat details.
     *
     * @param string $id
     * @return array
     * @throws RuntimeException
     */
    public function details(string $id)
    {
        return $this->client->get('/api/v1/groups/' . $id);
    }

    /**
     * Accept a group invitation via code.
     *
     * @param string $code
     * @return array
     * @throws RuntimeException
     */
    public function acceptInvite(string $code)
    {
        return $this->client->post('/api/v1/groups/accept-invite', [
            'json' => [
                'code' => $code
            ]
        ]);
    }

    /**
     * Create a group.
     *
     * @param string $name
     * @param array $params
     * @return array
     * @throws RuntimeException
     */
    public function create(string $name, array $params)
    {
        return $this->client->post('/api/v1/groups', [
            'json' => [
                'title' => $name,
                ...$params
            ]
        ]);
    }
}
