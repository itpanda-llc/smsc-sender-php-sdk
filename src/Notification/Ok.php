<?php

/**
 * Файл из репозитория SMSCenter-Messenger-PHP-SDK
 * @link https://github.com/itpanda-llc/smscenter-messenger-php-sdk
 */

namespace Panda\SmsCenter\MessengerSdk\Notification;

/**
 * Class Ok
 * @package Panda\SmsCenter\MessengerSdk\Notification
 * Использование шаблонов
 */
class Ok
{
    /**
     * Шаблон группы заданий, отправляемый при сбое (По умолчанию)
     * @link https://smsc.ru/api/http/send/notification/
     */
    public const FAIL = '0';

    /**
     * Шаблон группы заданий, отправляемый при восстановлении
     * @link https://smsc.ru/api/http/send/notification/
     */
    public const AFTER_FAIL = '1';
}
