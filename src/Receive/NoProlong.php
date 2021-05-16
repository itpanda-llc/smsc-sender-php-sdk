<?php

/**
 * Файл из репозитория SMSCenter-Messenger-SDK
 * @link https://github.com/itpanda-llc/smscenter-messenger-sdk
 */

namespace Panda\SmsCenter\MessengerSdk\Receive;

/**
 * Class NoProlong
 * @package Panda\SmsCenter\MessengerSdk\Receive
 * Продление выделенного номера
 */
class NoProlong
{
    /**
     * Включить автоматическое продление номера (По умолчанию)
     * @link https://smsc.ru/api/http/miscellaneous/receive/
     */
    public const NO = '0';

    /**
     * Отключить автоматическое продление номера
     * @link https://smsc.ru/api/http/miscellaneous/receive/
     */
    public const YES = '1';
}
