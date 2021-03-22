<?php

/**
 * Файл из репозитория SMSCenter-Messenger-PHP-SDK
 * @link https://github.com/itpanda-llc/smscenter-messenger-php-sdk
 */

namespace Panda\SmsCenter\MessengerSdk\User;

/**
 * Class Action
 * @package Panda\SmsCenter\MessengerSdk\User
 * Тип учетной записи
 */
class Type
{
    /**
     * Независимые тариф и баланс (По умолчанию)
     * @link https://smsc.ru/api/http/users/subclients/
     */
    public const INDEPENDENT_TARIFF_BALANCE = '0';

    /**
     * Тариф главного аккаунта, независимый баланс
     * @link https://smsc.ru/api/http/users/subclients/
     */
    public const MAIN_ACCOUNT_TARIFF_INDEPENDENT_BALANCE = '1';

    /**
     * Тариф и баланс главного аккаунта
     * @link https://smsc.ru/api/http/users/subclients/
     */
    public const MAIN_ACCOUNT_TARIFF_BALANCE = '2';

    /**
     * Баланс главного аккаунта, независимый тариф
     * @link https://smsc.ru/api/http/users/subclients/
     */
    public const MAIN_ACCOUNT_BALANCE_INDEPENDENT_TARIFF = '3';

    /**
     * Дополнительный логин главного аккаунта
     * @link https://smsc.ru/api/http/users/subclients/
     */
    public const MAIN_ACCOUNT_ADDITIONAL_LOGIN = '4';
}
