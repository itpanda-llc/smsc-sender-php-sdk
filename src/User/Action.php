<?php

/**
 * Файл из репозитория SMSCenter-Messenger-SDK
 * @link https://github.com/itpanda-llc/smscenter-messenger-sdk
 */

namespace Panda\SmsCenter\MessengerSdk\User;

/**
 * Class Action
 * @package Panda\SmsCenter\MessengerSdk\User
 * Действие / Команда
 */
class Action
{
    /**
     * Создание субклиента
     * @link https://smsc.ru/api/http/users/subclients/
     */
    public const ADD_1 = ['add' => '1'];

    /**
     * Изменение настроек субклиента
     * @link https://smsc.ru/api/http/users/subclients/
     */
    public const CHG_1 = ['chg' => '1'];

    /**
     * Изменение баланса субклиента
     * @link https://smsc.ru/api/http/users/subclients/
     */
    public const PAY_1 = ['pay' => '1'];

    /**
     * Получение статистики по субклиентам
     * @link https://smsc.ru/api/http/users/subclients/
     */
    public const GET_STAT_1 = ['get_stat' => '1'];

    /**
     * Получение подробной статистики по субклиентам
     * @link https://smsc.ru/api/http/users/subclients/
     */
    public const GET_STAT_ALL_1 = ['get_stat_all' => '1'];
}
