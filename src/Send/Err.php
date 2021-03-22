<?php

/**
 * Файл из репозитория SMSCenter-Messenger-PHP-SDK
 * @link https://github.com/itpanda-llc/smscenter-messenger-php-sdk
 */

namespace Panda\SmsCenter\MessengerSdk\Send;

/**
 * Class Err
 * @package Panda\SmsCenter\MessengerSdk\Send
 * Добавление в ответ сервера списка ошибочных номеров
 */
class Err
{
    /**
     * Не добавлять список (обычный ответ сервера) (По умолчанию)
     * @link https://smsc.ru/api/http/send/
     */
    public const NO = '0';

    /**
     * Добавляется список ошибочных номеров
     * @link https://smsc.ru/api/http/send/
     */
    public const YES = '1';
}
