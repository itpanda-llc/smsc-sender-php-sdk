<?php

/**
 * Файл из репозитория SMSCenter-Messenger-PHP-SDK
 * @link https://github.com/itpanda-llc/smscenter-messenger-php-sdk
 */

namespace Panda\SmsCenter\MessengerSdk\Sender;

/**
 * Class Flag
 * @package Panda\SmsCenter\MessengerSdk\Sender
 * Флаг
 */
class Flag
{
    /**
     * Зарегистрировать имя у оператора Мегафон по тарифу с бесплатными именами
     * @link https://smsc.ru/api/http/senders/
     */
    public const MEGA = 'mega';

    /**
     * Зарегистрировать платное имя у оператора Мегафон
     * @link https://smsc.ru/api/http/senders/
     */
    public const MEGA_STEP = 'mega_step';

    /**
     * Зарегистрировать имя у оператора MTS
     * @link https://smsc.ru/api/http/senders/
     */
    public const MTS = 'mts';

    /**
     * Зарегистрировать платное имя у оператора MTS
     * @link https://smsc.ru/api/http/senders/
     */
    public const MTS_STEP = 'mts_step';

    /**
     * Зарегистрировать имя у оператора Tele2 по тарифу с бесплатными именами
     * @link https://smsc.ru/api/http/senders/
     */
    public const TELE2 = 'tele2';

    /**
     * Зарегистрировать платное имя у оператора Tele2
     * @link https://smsc.ru/api/http/senders/
     */
    public const TELE2_STEP = 'tele2_step';

    /**
     * Зарегистрировать платное имя у оператора Билайн
     * @link https://smsc.ru/api/http/senders/
     */
    public const BEE_STEP = 'bee_step';

    /**
     * Зарегистрировать платное имя у оператора MOTIV
     * @link https://smsc.ru/api/http/senders/
     */
    public const MOTIV_STEP = 'motiv_step';

    /**
     * Зарегистрировать имя для Украины на пониженный тариф по национальному трафику
     * @link https://smsc.ru/api/http/senders/
     */
    public const UA_REG = 'ua_reg';

    /**
     * Зарегистрировать имя для Украины по более высокому тарифу для международного трафика
     * @link https://smsc.ru/api/http/senders/
     */
    public const UA_INT = 'ua_int';
}
