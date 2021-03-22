<?php

/**
 * Файл из репозитория SMSCenter-Messenger-PHP-SDK
 * @link https://github.com/itpanda-llc/smscenter-messenger-php-sdk
 */

namespace Panda\SmsCenter\MessengerSdk\Send;

/**
 * Class Viber
 * @package Panda\SmsCenter\MessengerSdk\Send
 * Признак Viber-сообщения
 */
class Viber
{
    /**
     * Обычное сообщение (По умолчанию)
     * @link https://smsc.ru/api/http/send/
     */
    public const NO = '0';

    /**
     * Viber-сообщение
     * @link https://smsc.ru/api/http/send/
     */
    public const YES = '1';
}
