<?php

/**
 * Файл из репозитория SMSCenter-Messenger-PHP-SDK
 * @link https://github.com/itpanda-llc/smscenter-messenger-php-sdk
 */

namespace Panda\SmsCenter\MessengerSdk\OperatorTemplate;

/**
 * Class Flag
 * @package Panda\SmsCenter\MessengerSdk\OperatorTemplate
 * Флаг
 */
class Flag
{
    /**
     * Создать шаблон для оператора МТС (сервисные сообщения)
     * @link https://smsc.ru/api/http/send/operators_templates/
     */
    public const MTS_SRV = 'mts_srv';

    /**
     * Создать шаблон для оператора МТС (транзакционные сообщения)
     * @link https://smsc.ru/api/http/send/operators_templates/
     */
    public const MTS_TRN = 'mts_trn';

    /**
     * Создать шаблон для оператора Мегафон (сервисные сообщения)
     * @link https://smsc.ru/api/http/send/operators_templates/
     */
    public const MEGA_SRV = 'mega_srv';

    /**
     * Создать шаблон для оператора Мегафон (транзакционные сообщения)
     * @link https://smsc.ru/api/http/send/operators_templates/
     */
    public const MEGA_TRN = 'mega_trn';

    /**
     * Создать шаблон для оператора Билайн (сервисные сообщения)
     * @link https://smsc.ru/api/http/send/operators_templates/
     */
    public const BEE_SRV = 'bee_srv';

    /**
     * Создать шаблон для оператора Билайн (транзакционные сообщения)
     * @link https://smsc.ru/api/http/send/operators_templates/
     */
    public const BEE_TRN = 'bee_trn';

    /**
     * Создать шаблон для оператора Теле2 (сервисные сообщения)
     * @link https://smsc.ru/api/http/send/operators_templates/
     */
    public const TELE2_SRV = 'tele2_srv';

    /**
     * Создать шаблон для оператора Теле2 (транзакционные сообщения)
     * @link https://smsc.ru/api/http/send/operators_templates/
     */
    public const TELE2_TRN = 'tele2_trn';
}
