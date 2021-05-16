<?php

/**
 * Файл из репозитория SMSCenter-Messenger-SDK
 * @link https://github.com/itpanda-llc/smscenter-messenger-sdk
 */

namespace Panda\SmsCenter\MessengerSdk\Receive;

/**
 * Class Action
 * @package Panda\SmsCenter\MessengerSdk\Receive
 * Действие / Команда
 */
class Action
{
    /**
     * Получение списка выделенных номеров
     * @link https://smsc.ru/api/http/miscellaneous/receive/
     */
    public const GET_1 = ['gets' => '1'];

    /**
     * Подключение выделенных номеров
     * @link https://smsc.ru/api/http/miscellaneous/receive/
     */
    public const BUY_1 = ['buy' => '1'];

    /**
     * Изменение признака продления выделенного номера
     * @link https://smsc.ru/api/http/miscellaneous/receive/
     */
    public const CHG_1 = ['chg' => '1'];
}
