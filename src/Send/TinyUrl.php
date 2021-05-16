<?php

/**
 * Файл из репозитория SMSCenter-Messenger-SDK
 * @link https://github.com/itpanda-llc/smscenter-messenger-sdk
 */

namespace Panda\SmsCenter\MessengerSdk\Send;

/**
 * Class TinyUrl
 * @package Panda\SmsCenter\MessengerSdk\Send
 * Сокращение ссылок
 */
class TinyUrl
{
    /**
     * Оставить без изменений (По умолчанию)
     * @link https://smsc.ru/api/http/send/
     */
    public const NO = '0';

    /**
     * Сократить
     * @link https://smsc.ru/api/http/send/
     */
    public const YES = '1';
}
