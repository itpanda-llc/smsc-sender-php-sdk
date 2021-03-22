<?php

/**
 * Файл из репозитория SMSCenter-Messenger-PHP-SDK
 * @link https://github.com/itpanda-llc/smscenter-messenger-php-sdk
 */

namespace Panda\SmsCenter\MessengerSdk\Job;

/**
 * Class Action
 * @package Panda\SmsCenter\MessengerSdk\Job
 * Действие / Команды
 */
class Action
{
    /**
     * Создание рассылки
     * @link https://smsc.ru/api/http/jobs/
     */
    public const ADD_1 = ['add' => '1'];

    /**
     * Удаление рассылки
     * @link https://smsc.ru/api/http/jobs/
     */
    public const DEL_1 = ['del' => '1'];

    /**
     * Отключение рассылки
     * @link https://smsc.ru/api/http/jobs/
     */
    public const CANCEL_1 = ['cancel' => '1'];

    /**
     * Получение информации о конкретной рассылке
     * @link https://smsc.ru/api/http/jobs/
     */
    public const GET_1 = ['get' => '1'];

    /**
     * Получение списка рассылок
     * @link https://smsc.ru/api/http/jobs/
     */
    public const GET_ALL_1 = ['get_all' => '1'];
}
