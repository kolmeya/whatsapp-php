<?php

namespace Zapply\Enums;

enum Events: string
{
    case QR_CODE_RECEIVED = 'qr';
    case READY = 'ready';
    case AUTHENTICATED = 'authenticated';
    case AUTH_FAILURE = 'auth_failure';
    case DISCONNECTED = 'disconnected';
    case MESSAGE_RECEIVED = 'message';
    case MESSAGE_REVOKED_EVERYONE = 'message_revoke_everyone';
    case MESSAGE_REVOKED_ME = 'message_revoke_me';
    case MESSAGE_EDIT = 'message_edit';
    case MESSAGE_REACTION = 'message_reaction';
    case MESSAGE_ACK = 'message_ack';
    case GROUP_JOIN = 'group_join';
    case GROUP_LEAVE = 'group_leave';
    case GROUP_ADMIN_CHANGED = 'group_admin_changed';
    case GROUP_UPDATE = 'group_update';
    case CHANGE_BATTERY = 'change_battery';
    case CHANGE_STATE = 'change_state';
    case CHAT_REMOVED = 'chat_removed';
    case CHAT_ARCHIVED = 'chat_archived';
    case UNREAD_COUNT = 'unread_count';
    case MEDIA_UPLOADED = 'media_uploaded';
    case CONTACT_CHANGED = 'contact_changed';
    case LOADING = 'loading_screen';
    case REMOTE_SESSION_SAVED = 'remote_session_saved';
    case CATALOG_READY = 'catalog_ready';
    case CALL_RECEIVED = 'call';
}
