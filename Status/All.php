<?php

/**
 * Файл из репозитория SMSCenter-Messenger-PHP-SDK
 * @link https://github.com/itpanda-llc/smscenter-messenger-php-sdk
 */

namespace Panda\SmsCenter\MessengerSdk\Status;

/**
 * Class All
 * @package Panda\SmsCenter\MessengerSdk\Status
 * Вариант ответа
 */
class All
{
    /**
     * Обычный формат (По умолчанию)
     * @link https://smsc.ru/api/http/status_messages/check_status/
     */
    public const USUAL = '0';

    /**
     * Полная информация
     * @link https://smsc.ru/api/http/status_messages/check_status/
     */
    public const FULL = '1';

    /**
     * Дополнительная информация
     * @link https://smsc.ru/api/http/status_messages/check_status/
     */
    public const ADDITIONAL = '2';
}
