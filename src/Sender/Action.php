<?php

/**
 * Файл из репозитория SMSCenter-Messenger-SDK
 * @link https://github.com/itpanda-llc/smscenter-messenger-sdk
 */

namespace Panda\SmsCenter\MessengerSdk\Sender;

/**
 * Class Action
 * @package Panda\SmsCenter\MessengerSdk\Sender
 * Действие / Команда
 */
class Action
{
    /**
     * Получение списка зарегистрированных в личном кабинете и допущенных модератором имен отправителей
     * @link https://smsc.ru/api/http/senders/
     */
    public const GET_1 = ['get' => '1'];

    /**
     * Добавление нового имени отправителя
     * @link https://smsc.ru/api/http/senders/
     */
    public const ADD_1 = ['add' => '1'];

    /**
     * Изменение имени отправителя
     * @link https://smsc.ru/api/http/senders/
     */
    public const CHG_1 = ['chg' => '1'];

    /**
     * Отправка кода подтверждения для цифрового имени отправителя
     * @link https://smsc.ru/api/http/senders/
     */
    public const SEND_CODE_1 = ['send_code' => '1'];

    /**
     * Подтверждение цифрового имени отправителя
     * @link https://smsc.ru/api/http/senders/
     */
    public const CHECK_CODE_1 = ['check_code' => '1'];

    /**
     * Удаление имени отправителя
     * @link https://smsc.ru/api/http/senders/
     */
    public const DEL_1 = ['del' => '1'];
}
