<?php

/**
 * Файл из репозитория SMSCenter-Messenger-SDK
 * @link https://github.com/itpanda-llc/smscenter-messenger-sdk
 */

namespace Panda\SmsCenter\MessengerSdk\Send;

/**
 * Class Cost
 * @package Panda\SmsCenter\MessengerSdk\Send
 * Признак необходимости получения стоимости рассылки
 */
class Cost
{
    /**
     * Обычная отправка (По умолчанию)
     * @link https://smsc.ru/api/http/send/
     */
    public const NO = '0';

    /**
     * Получить стоимость рассылки без реальной отправки
     * @link https://smsc.ru/api/http/send/
     */
    public const YES = '1';

    /**
     * Обычная отправка, но добавить в ответ стоимость выполненной рассылки
     * @link https://smsc.ru/api/http/send/
     */
    public const ADD_COST = '2';

    /**
     * Обычная отправка, но добавить в ответ стоимость и новый баланс Клиента
     * @link https://smsc.ru/api/http/send/
     */
    public const ADD_COST_BALANCE = '3';
}
