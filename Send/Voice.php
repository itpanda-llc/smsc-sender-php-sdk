<?php

/**
 * Файл из репозитория SMSCenter-Messenger-PHP-SDK
 * @link https://github.com/itpanda-llc/smscenter-messenger-php-sdk
 */

namespace Panda\SmsCenter\MessengerSdk\Send;

/**
 * Class Voice
 * @package Panda\SmsCenter\MessengerSdk\Send
 * Голос озвучивания текста
 */
class Voice
{
    /**
     * Мужской (По умолчанию)
     * @link https://smsc.ru/api/http/send/
     */
    public const M = 'm';

    /**
     * Мужской альтернативный
     * @link https://smsc.ru/api/http/send/
     */
    public const M2 = 'm2';

    /**
     * Женский
     * @link https://smsc.ru/api/http/send/
     */
    public const W = 'w';

    /**
     * Женский альтернативный
     * @link https://smsc.ru/api/http/send/
     */
    public const W2 = 'w2';
}
