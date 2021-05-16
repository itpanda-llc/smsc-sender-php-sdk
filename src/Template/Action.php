<?php

/**
 * Файл из репозитория SMSCenter-Messenger-SDK
 * @link https://github.com/itpanda-llc/smscenter-messenger-sdk
 */

namespace Panda\SmsCenter\MessengerSdk\Template;

/**
 * Class Action
 * @package Panda\SmsCenter\MessengerSdk\Template
 * Действие / Команда
 */
class Action
{
    /**
     * Создание шаблона
     * @link https://smsc.ru/api/http/send/templates/
     */
    public const ADD_1 = ['add' => '1'];

    /**
     * Изменение шаблона
     * @link https://smsc.ru/api/http/send/templates/
     */
    public const CHG_1 = ['chg' => '1'];

    /**
     * Удаление шаблона
     * @link https://smsc.ru/api/http/send/templates/
     */
    public const DEL_1 = ['del' => '1'];

    /**
     * Получение списка шаблонов
     * @link https://smsc.ru/api/http/send/templates/
     */
    public const GET_1 = ['get' => '1'];
}
