<?php

/**
 * Файл из репозитория SMSCenter-Messenger-PHP-SDK
 * @link https://github.com/itpanda-llc/smscenter-messenger-php-sdk
 */

namespace Panda\SmsCenter\MessengerSdk;

/**
 * Class Fmt
 * @package Panda\SmsCenter\MessengerSdk
 * Формат ответа сервера
 */
class Fmt
{
    /**
     * Строка (По умолчанию)
     * @link https://smsc.ru/api/http/
     */
    public const STRING = '0';

    /**
     * Числа
     * @link https://smsc.ru/api/http/
     */
    public const NUMBERS = '1';

    /**
     * XML
     * @link https://smsc.ru/api/http/
     */
    public const XML = '2';

    /**
     * JSON
     * @link https://smsc.ru/api/http/
     */
    public const JSON = '3';
}
