<?php

/**
 * Файл из репозитория SMSCenter-Messenger-PHP-SDK
 * @link https://github.com/itpanda-llc/smscenter-messenger-php-sdk
 */

namespace Panda\SmsCenter\MessengerSdk\Send;

/**
 * Class Ping
 * @package Panda\SmsCenter\MessengerSdk\Send
 * Признак Ping-сообщения
 */
class Ping
{
    /**
     * Обычное сообщение (По умолчанию)
     * @link https://smsc.ru/api/http/send/
     */
    public const NO = '0';

    /**
     * Ping-сообщение
     * @link https://smsc.ru/api/http/send/
     */
    public const YES = '1';
}
