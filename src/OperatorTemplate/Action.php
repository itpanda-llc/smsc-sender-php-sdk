<?php

/**
 * Файл из репозитория SMSCenter-Messenger-SDK
 * @link https://github.com/itpanda-llc/smscenter-messenger-sdk
 */

namespace Panda\SmsCenter\MessengerSdk\OperatorTemplate;

/**
 * Class Action
 * @package Panda\SmsCenter\MessengerSdk\OperatorTemplate
 * Действие / Команда
 */
class Action
{
    /**
     * Создание шаблона
     * @link https://smsc.ru/api/http/send/operators_templates/
     */
    public const ADD_1 = ['add' => '1'];

    /**
     * Получение информации о шаблоне
     * @link https://smsc.ru/api/http/send/operators_templates/
     */
    public const GET_1 = ['get' => '1'];
}
