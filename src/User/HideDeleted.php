<?php

/**
 * Файл из репозитория SMSCenter-Messenger-SDK
 * @link https://github.com/itpanda-llc/smscenter-messenger-sdk
 */

namespace Panda\SmsCenter\MessengerSdk\User;

/**
 * Class HideDeleted
 * @package Panda\SmsCenter\MessengerSdk\User
 * Скрыть статистику по удаленным субклиентам
 */
class HideDeleted
{
    /**
     * Вывести статистику по всем субклиентам (По умолчанию)
     * @link https://smsc.ru/api/http/users/subclients/
     */
    public const SHOW_STAT_ALL_SUBCLIENTS = '0';

    /**
     * Скрыть статистику по удаленным субклиентам
     * @link https://smsc.ru/api/http/users/subclients/
     */
    public const HIDE_STAT_ALL_SUBCLIENTS = '1';
}
