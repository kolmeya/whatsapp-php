<?php

namespace Kolmeya\WhatsApp\Resources;

use RuntimeException;

class GroupChat extends Chat
{
    /**
     * Add participants to the group.
     *
     * @param array $participants
     * @param string $message
     * @param bool $autoSendInviteV4
     * @return array
     * @throws RuntimeException
     */
    public function addParticipants(array $participants, string $message, bool $autoSendInviteV4 = false)
    {
        return $this->client->post('/api/v1/groups/' . $this->id . '/add-participants', [
            'json' => [
                'participants' => $participants,
                'comment' => $message,
                'autoSendInviteV4' => $autoSendInviteV4
            ]
        ]);
    }

    /**
     * Remove participants from the group.
     *
     * @param string $description
     * @return array
     * @throws RuntimeException
     */
    public function updateDescription(string $description)
    {
        return $this->client->post('/api/v1/groups/' . $this->id . '/set-description', [
            'json' => [
                'description' => $description
            ]
        ]);
    }

    /**
     * Update the group name.
     *
     * @param string $name
     * @return array
     * @throws RuntimeException
     */
    public function updateName(string $name)
    {
        return $this->client->post('/api/v1/groups/' . $this->id . '/set-subject', [
            'json' => [
                'subject' => $name
            ]
        ]);
    }

    /**
     * Remove the group picture.
     *
     * @return array
     * @throws RuntimeException
     */
    public function deletePicture()
    {
        return $this->client->post('/api/v1/groups/' . $this->id . '/delete-picture');
    }

    /**
     * Update the group picture.
     *
     * @param string $url
     * @return array
     * @throws RuntimeException
     */
    public function setPicture(string $url)
    {
        return $this->client->post('/api/v1/groups/' . $this->id . '/set-picture', [
            'json' => [
                'url' => $url
            ]
        ]);
    }

    /**
     * Promote participants to admins.
     *
     * @param array $participants
     * @return array
     * @throws RuntimeException
     */
    public function promote(array $participants)
    {
        return $this->client->post('/api/v1/groups/' . $this->id . '/promote-participants', [
            'json' => [
                'participants' => $participants
            ]
        ]);
    }

    /**
     * Demote admins to participants.
     *
     * @param array $participants
     * @return array
     * @throws RuntimeException
     */
    public function demote(array $participants)
    {
        return $this->client->post('/api/v1/groups/' . $this->id . '/demote-participants', [
            'json' => [
                'participants' => $participants
            ]
        ]);
    }

    /**
     * Get group invite code.
     *
     * @return array
     * @throws RuntimeException
     */
    public function inviteCode()
    {
        return $this->client->get('/api/v1/groups/' . $this->id . '/get-invite-code');
    }

    /**
     * Get group participants.
     *
     * @return array
     * @throws RuntimeException
     */
    public function participants()
    {
        return $this->client->get('/api/v1/groups/' . $this->id . '/participants');
    }

    /**
     * Leave the group.
     *
     * @return array
     * @throws RuntimeException
     */
    public function leave()
    {
        return $this->client->post('/api/v1/groups/' . $this->id . '/leave');
    }

    /**
     * Set if only admins can change group info.
     *
     * @param bool $adminsOnly
     * @return array
     * @throws RuntimeException
     */
    public function infoAdminsOnly(bool $adminsOnly)
    {
        return $this->client->post('/api/v1/groups/' . $this->id . '/set-info-admins-only', [
            'json' => [
                'infoAdminsOnly' => $adminsOnly
            ]
        ]);
    }

    /**
     * Set if only admins can send messages.
     *
     * @param bool $adminsOnly
     * @return array
     * @throws RuntimeException
     */
    public function messagesAdminsOnly(bool $adminsOnly)
    {
        return $this->client->post('/api/v1/groups/' . $this->id . '/set-messages-admins-only', [
            'json' => [
                'messagesAdminsOnly' => $adminsOnly
            ]
        ]);
    }
}
