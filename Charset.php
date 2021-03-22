<?php

/**
 * Файл из репозитория SMSCenter-Messenger-PHP-SDK
 * @link https://github.com/itpanda-llc/smscenter-messenger-php-sdk
 */

namespace Panda\SmsCenter\MessengerSdk;

/**
 * Class Charset
 * @package Panda\SmsCenter\MessengerSdk
 * Кодировка
 */
class Charset
{
    /**
     * Windows-1251 (По умолчанию)
     * @link https://smsc.ru/api/http/
     */
    public const WINDOWS_1251 = 'windows-1251';

    /**
     * UTF-8
     * @link https://smsc.ru/api/http/
     */
    public const UTF_8 = 'utf-8';

    /**
     * KOI8-R
     * @link https://smsc.ru/api/http/
     */
    public const KOI8_R = 'koi8-r';
}
