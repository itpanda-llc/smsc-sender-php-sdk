<?php

/**
 * Файл из репозитория SMSCenter-Messenger-SDK
 * @link https://github.com/itpanda-llc/smscenter-messenger-sdk
 */

namespace Panda\SmsCenter\MessengerSdk\Status;

/**
 * Class Action
 * @package Panda\SmsCenter\MessengerSdk\Status
 * Действие / Команда
 */
class Action
{
    /**
     * Удаление сообщения
     * @link https://smsc.ru/api/http/status_messages/
     * @link https://smsc.ru/api/http/status_messages/delete/
     */
    public const DEL_1 = ['del' => '1'];
}
