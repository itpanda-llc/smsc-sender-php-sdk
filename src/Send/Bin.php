<?php

/**
 * Файл из репозитория SMSCenter-Messenger-PHP-SDK
 * @link https://github.com/itpanda-llc/smscenter-messenger-php-sdk
 */

namespace Panda\SmsCenter\MessengerSdk\Send;

/**
 * Class Bin
 * @package Panda\SmsCenter\MessengerSdk\Send
 * Признак бинарного сообщения
 */
class Bin
{
    /**
     * Обычное сообщение (По умолчанию)
     * @link https://smsc.ru/api/http/send/
     */
    public const NO = '0';

    /**
     * Бинарное сообщение
     * @link https://smsc.ru/api/http/send/
     */
    public const BIN = '1';

    /**
     * Бинарное сообщение, представленное в виде шестнадцатеричной строки
     * @link https://smsc.ru/api/http/send/
     */
    public const HEX = '2';
}
