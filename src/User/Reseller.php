<?php

/**
 * Файл из репозитория SMSCenter-Messenger-SDK
 * @link https://github.com/itpanda-llc/smscenter-messenger-sdk
 */

namespace Panda\SmsCenter\MessengerSdk\User;

/**
 * Class Reseller
 * @package Panda\SmsCenter\MessengerSdk\User
 * Типы субклиентов
 */
class Reseller
{
    /**
     * Субклиенты, использующие баланс главного аккаунта (По умолчанию)
     * @link https://smsc.ru/api/http/users/subclients/
     */
    public const SUBCLIENTS_BALANCE_MAIN_ACCOUNT = '0';

    /**
     * Субклиенты с независимым балансом
     * @link https://smsc.ru/api/http/users/subclients/
     */
    public const SUBCLIENTS_INDEPENDENT_BALANCE = '1';
}
