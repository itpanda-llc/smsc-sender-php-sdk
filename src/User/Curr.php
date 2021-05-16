<?php

/**
 * Файл из репозитория SMSCenter-Messenger-SDK
 * @link https://github.com/itpanda-llc/smscenter-messenger-sdk
 */

namespace Panda\SmsCenter\MessengerSdk\User;

/**
 * Class Curr
 * @package Panda\SmsCenter\MessengerSdk\User
 * Валюта расчетов субклиента
 */
class Curr
{
    /**
     * Российский рубль
     * @link https://smsc.ru/api/http/users/subclients/
     */
    public const RUB = '1';

    /**
     * Доллар США
     * @link https://smsc.ru/api/http/users/subclients/
     */
    public const USD = '2';

    /**
     * Евро
     * @link https://smsc.ru/api/http/users/subclients/
     */
    public const EUR = '3';

    /**
     * Украинская гривна
     * @link https://smsc.ru/api/http/users/subclients/
     */
    public const UAH = '4';

    /**
     * Казахстанский тенге
     * @link https://smsc.ru/api/http/users/subclients/
     */
    public const KZT = '5';
}
