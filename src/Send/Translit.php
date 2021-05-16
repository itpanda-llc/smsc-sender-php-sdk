<?php

/**
 * Файл из репозитория SMSCenter-Messenger-SDK
 * @link https://github.com/itpanda-llc/smscenter-messenger-sdk
 */

namespace Panda\SmsCenter\MessengerSdk\Send;

/**
 * Class Translit
 * @package Panda\SmsCenter\MessengerSdk\Send
 * Перевод в транслит
 */
class Translit
{
    /**
     * Не переводить (По умолчанию)
     * @link https://smsc.ru/api/http/send/
     */
    public const NO = '0';

    /**
     * В виде "translit"
     * @link https://smsc.ru/api/http/send/
     */
    public const TRANSLIT = '1';

    /**
     * В виде "mpaHc/Ium"
     * @link https://smsc.ru/api/http/send/
     */
    public const MPAHC_IUM = '2';
}
