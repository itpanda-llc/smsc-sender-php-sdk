<?php

/**
 * Файл из репозитория SMSCenter-Messenger-PHP-SDK
 * @link https://github.com/itpanda-llc/smscenter-messenger-php-sdk
 */

namespace Panda\SmsCenter\MessengerSdk\Send;

/**
 * Class Push
 * @package Panda\SmsCenter\MessengerSdk\Send
 * Признак Push-сообщения
 */
class Push
{
    /**
     * Обычное сообщение (По умолчанию)
     * @link https://smsc.ru/api/http/send/
     */
    public const NO = '0';

    /**
     * Wap-push-сообщение
     * @link https://smsc.ru/api/http/send/
     */
    public const YES = '1';
}
