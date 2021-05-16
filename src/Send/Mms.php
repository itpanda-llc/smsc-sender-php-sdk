<?php

/**
 * Файл из репозитория SMSCenter-Messenger-SDK
 * @link https://github.com/itpanda-llc/smscenter-messenger-sdk
 */

namespace Panda\SmsCenter\MessengerSdk\Send;

/**
 * Class Mms
 * @package Panda\SmsCenter\MessengerSdk\Send
 * Признак MMS-сообщения
 */
class Mms
{
    /**
     * Обычное сообщение (По умолчанию)
     * @link https://smsc.ru/api/http/send/
     */
    public const NO = '0';

    /**
     * MMS-сообщение
     * @link https://smsc.ru/api/http/send/
     */
    public const YES = '1';
}
