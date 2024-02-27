<?php

namespace Kolmeya\WhatsApp\Resources;

use Kolmeya\WhatsApp\WhatsApp;
use RuntimeException;

class Chat extends Resource
{
    /**
     * The chat number.
     *
     * @var string
     */
    public string $id;

    public function __construct(WhatsApp $client, string $id)
    {
        parent::__construct($client);
        $this->id = $id;
    }

    /**
     * Send messages.
     *
     * @param array $params
     * @return array
     * @throws RuntimeException
     */
    public function sendMessage(array $params)
    {
        return $this->client->post('/api/v1/chats/' . $this->id . '/messages', [
            'json' => $params
        ]);
    }

    /**
     * Clear messages.
     *
     * @return array
     * @throws RuntimeException
     */
    public function clearMessages()
    {
        return $this->client->post('/api/v1/chats/' . $this->id . '/clear-messages');
    }

    /**
     * Clear state.
     *
     * @return array
     * @throws RuntimeException
     */
    public function clearState()
    {
        return $this->client->post('/api/v1/chats/' . $this->id . '/clear-state');
    }

    /**
     * Delete chat.
     *
     * @return array
     * @throws RuntimeException
     */
    public function delete()
    {
        return $this->client->delete('/api/v1/chats/' . $this->id);
    }

    /**
     * Get chat contact.
     *
     * @return array
     * @throws RuntimeException
     */
    public function contact()
    {
        return $this->client->get('/api/v1/chats/' . $this->id . '/contact');
    }

    /**
     * Get chat labels.
     *
     * @return array
     * @throws RuntimeException
     */
    public function labels()
    {
        return $this->client->get('/api/v1/chats/' . $this->id . '/labels');
    }

    /**
     * Get chat messages.
     *
     * @param int $page
     * @param int $perPage
     * @return array
     * @throws RuntimeException
     */
    public function messages(int $page = 1, int $perPage = 10)
    {
        return $this->client->get('/api/v1/chats/' . $this->id . '/messages', [
            'query' => [
                'page' => $page,
                'limit' => $perPage
            ]
        ]);
    }

    /**
     * Get chat profile picture.
     *
     * @return array
     * @throws RuntimeException
     */
    public function profilePicture()
    {
        return $this->client->get('/api/v1/chats/' . $this->id . '/profile-picture');
    }

    /**
     * Mark chat as read.
     *
     * @return array
     * @throws RuntimeException
     */
    public function markAsRead()
    {
        return $this->client->post('/api/v1/chats/' . $this->id . '/mark-read');
    }

    /**
     * Mark chat as unread.
     *
     * @return array
     * @throws RuntimeException
     */
    public function markAsUnread()
    {
        return $this->client->post('/api/v1/chats/' . $this->id . '/mark-unread');
    }

    /**
     * Mute chat.
     *
     * @return array
     * @throws RuntimeException
     */
    public function mute()
    {
        return $this->client->post('/api/v1/chats/' . $this->id . '/mute');
    }

    /**
     * Unmute chat.
     *
     * @return array
     * @throws RuntimeException
     */
    public function unmute()
    {
        return $this->client->post('/api/v1/chats/' . $this->id . '/unmute');
    }

    /**
     * Pin chat.
     *
     * @return array
     * @throws RuntimeException
     */
    public function pin()
    {
        return $this->client->post('/api/v1/chats/' . $this->id . '/pin');
    }

    /**
     * Unpin chat.
     *
     * @return array
     * @throws RuntimeException
     */
    public function unpin()
    {
        return $this->client->post('/api/v1/chats/' . $this->id . '/unpin');
    }

    /**
     * Send recording state
     *
     * @return array
     * @throws RuntimeException
     */
    public function recording()
    {
        return $this->client->post('/api/v1/chats/' . $this->id . '/recording');
    }

    /**
     * Send typing state
     *
     * @return array
     * @throws RuntimeException
     */
    public function typing()
    {
        return $this->client->post('/api/v1/chats/' . $this->id . '/typing');
    }

    /**
     * Archive chat.
     *
     * @return array
     * @throws RuntimeException
     */
    public function archive()
    {
        return $this->client->post('/api/v1/chats/' . $this->id . '/archive');
    }

    /**
     * Unarchive chat.
     *
     * @return array
     * @throws RuntimeException
     */
    public function unarchive()
    {
        return $this->client->post('/api/v1/chats/' . $this->id . '/unarchive');
    }
}
