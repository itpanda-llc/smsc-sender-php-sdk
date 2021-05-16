<?php

/**
 * Файл из репозитория SMSCenter-Messenger-SDK
 * @link https://github.com/itpanda-llc/smscenter-messenger-sdk
 */

namespace Panda\SmsCenter\MessengerSdk\Statistic;

/**
 * Class Flag
 * @package Panda\SmsCenter\MessengerSdk\Statistic
 * Флаг
 */
class Flag
{
    /**
     * Выводить статистику в текущей валюте Клиента
     * @link https://smsc.ru/api/http/get_data/statistic/
     */
    public const MYCUR = 'mycur';

    /**
     * Получить статистику по отправленным сообщениям, оплаченным с электронного баланса
     * @link https://smsc.ru/api/http/get_data/statistic/
     */
    public const BALANCE2 = 'balance2';
}
