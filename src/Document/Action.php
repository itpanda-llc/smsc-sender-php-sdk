<?php

/**
 * Файл из репозитория SMSCenter-Messenger-SDK
 * @link https://github.com/itpanda-llc/smscenter-messenger-sdk
 */

namespace Panda\SmsCenter\MessengerSdk\Document;

/**
 * Class Action
 * @package Panda\SmsCenter\MessengerSdk\Document
 * Действие / Команда
 */
class Action
{
    /**
     * Создание нового счета для субклиента
     * @link https://smsc.ru/api/http/users/documents/
     */
    public const ADD_ACCOUNT_1 = ['add_account' => '1'];

    /**
     * Выгрузка существующего счета субклиента
     * @link https://smsc.ru/api/http/users/documents/
     */
    public const GET_ACCOUNT_1 = ['get_account' => '1'];

    /**
     * Выгрузка существующего акта субклиента
     * @link https://smsc.ru/api/http/users/documents/
     */
    public const GET_ACT_1 = ['get_act' => '1'];
}
