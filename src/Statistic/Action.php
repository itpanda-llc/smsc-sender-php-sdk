<?php

/**
 * Файл из репозитория SMSCenter-Messenger-SDK
 * @link https://github.com/itpanda-llc/smscenter-messenger-sdk
 */

namespace Panda\SmsCenter\MessengerSdk\Statistic;

/**
 * Class Action
 * @package Panda\SmsCenter\MessengerSdk\Statistic
 * Действие / Команда
 */
class Action
{
    /**
     * Получение статистики отправленных сообщений
     * @link https://smsc.ru/api/http/get_data/statistic/
     */
    public const GET_STAT_1 = ['get_stat' => '1'];
}
