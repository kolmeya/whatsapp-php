<?php

namespace Kolmeya\WhatsApp\Resources;

use RuntimeException;

class Auth extends Resource
{
    /**
     * Get a QR code.
     *
     * @return array
     * @throws RuntimeException
     */
    public function getQrCode()
    {
        return $this->client->get('/api/v1/auth/qr-code');
    }

    /**
     * Logout.
     *
     * @return array
     * @throws RuntimeException
     */
    public function logout()
    {
        return $this->client->post('/api/v1/auth/logout');
    }

    /**
     * Restart.
     *
     * @return array
     * @throws RuntimeException
     */
    public function restart()
    {
        return $this->client->post('/api/v1/auth/restart');
    }
}
