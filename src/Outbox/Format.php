<?php

/**
 * Файл из репозитория SMSCenter-Messenger-SDK
 * @link https://github.com/itpanda-llc/smscenter-messenger-sdk
 */

namespace Panda\SmsCenter\MessengerSdk\Outbox;

/**
 * Class Format
 * @package Panda\SmsCenter\MessengerSdk\Outbox
 * Признак запроса e-mail сообщений
 */
class Format
{
    /**
     * SMS-сообщение (По умолчанию)
     * @link https://smsc.ru/api/http/get_data/outbox/
     */
    public const SMS = '0';

    /**
     * E-Mail-сообщение
     * @link https://smsc.ru/api/http/get_data/outbox/
     */
    public const EMAIL = '8';
}
