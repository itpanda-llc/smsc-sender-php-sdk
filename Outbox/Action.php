<?php

/**
 * Файл из репозитория SMSCenter-Messenger-PHP-SDK
 * @link https://github.com/itpanda-llc/smscenter-messenger-php-sdk
 */

namespace Panda\SmsCenter\MessengerSdk\Outbox;

/**
 * Class Action
 * @package Panda\SmsCenter\MessengerSdk\Outbox
 * Действие / Команда
 */
class Action
{
    /**
     * Получение списка отправленных SMS-сообщений
     * @link https://smsc.ru/api/http/get_data/outbox/
     */
    public const GET_MESSAGES_1 = ['get_messages' => '1'];
}
