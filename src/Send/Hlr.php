<?php

/**
 * Файл из репозитория SMSCenter-Messenger-SDK
 * @link https://github.com/itpanda-llc/smscenter-messenger-sdk
 */

namespace Panda\SmsCenter\MessengerSdk\Send;

/**
 * Class Hlr
 * @package Panda\SmsCenter\MessengerSdk\Send
 * Признак HLR-запроса
 */
class Hlr
{
    /**
     * Обычное сообщение (По умолчанию)
     * @link https://smsc.ru/api/http/send/
     */
    public const NO = '0';

    /**
     * HLR-запрос
     * @link https://smsc.ru/api/http/send/
     */
    public const YES = '1';
}
