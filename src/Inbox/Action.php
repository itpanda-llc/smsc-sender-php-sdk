<?php

/**
 * Файл из репозитория SMSCenter-Messenger-SDK
 * @link https://github.com/itpanda-llc/smscenter-messenger-sdk
 */

namespace Panda\SmsCenter\MessengerSdk\Inbox;

/**
 * Class Action
 * @package Panda\SmsCenter\MessengerSdk\Inbox
 * Действие / Команда
 */
class Action
{
    /**
     * Получение списка входящих сообщений
     * @link https://smsc.ru/api/http/get_data/inbox/
     */
    public const GET_ANSWERS_1 = ['get_answers' => '1'];
}
