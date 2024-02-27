<?php

namespace Kolmeya\WhatsApp\Resources;

use RuntimeException;

class Device extends Resource
{
    /**
     * Get device info.
     *
     * @return array
     * @throws RuntimeException
     */
    public function info()
    {
        return $this->client->get('/api/v1/device/info');
    }

    /**
     * Get device status.
     *
     * @param string $query
     * @param null|string $number
     * @param int $page
     * @param int $perPage
     * @return array
     * @throws RuntimeException
     */
    public function searchMessages(string $query, ?string $number, int $page = 1, int $perPage = 10)
    {
        return $this->client->post('/api/v1/device/search-messages', [
            'query' => [
                'page' => $page,
                'limit' => $perPage
            ],
            'json' => [
                'query' => $query,
                'number' => $number
            ]
        ]);
    }

    /**
     * Set profile picture.
     *
     * @param string $url
     * @return array
     * @throws RuntimeException
     */
    public function setProfilePicture(string $url)
    {
        return $this->client->post('/api/v1/device/set-profile-picture', [
            'json' => [
                'url' => $url
            ]
        ]);
    }

    /**
     * Delete profile picture.
     *
     * @return array
     * @throws RuntimeException
     */
    public function deleteProfilePicture()
    {
        return $this->client->post('/api/v1/device/delete-profile-picture');
    }

    /**
     * Set about status.
     *
     * @param string $status
     * @return array
     * @throws RuntimeException
     */
    public function setAboutStatus(string $status)
    {
        return $this->client->post('/api/v1/device/set-about-status', [
            'json' => [
                'status' => $status
            ]
        ]);
    }

    /**
     * Set display name.
     *
     * @param string $name
     * @return array
     * @throws RuntimeException
     */
    public function setDisplayName(string $name)
    {
        return $this->client->post('/api/v1/device/set-display-name', [
            'json' => [
                'name' => $name
            ]
        ]);
    }

    /**
     * Set status offline.
     *
     * @return array
     * @throws RuntimeException
     */
    public function displayOfflineStatus()
    {
        return $this->client->post('/api/v1/device/send-presence-unavailable');
    }

    /**
     * Set status online.
     *
     * @return array
     * @throws RuntimeException
     */
    public function displayOnlineStatus()
    {
        return $this->client->post('/api/v1/device/send-presence-available');
    }

    /**
     * Get current WhatsApp Web Version.
     *
     * @return array
     * @throws RuntimeException
     */
    public function getVersion()
    {
        return $this->client->get('/api/v1/device/version');
    }

    public function validateNumber(string $number)
    {
        return $this->client->post('/api/v1/device/validate-number', [
            'json' => [
                'number' => $number
            ]
        ]);
    }
}
