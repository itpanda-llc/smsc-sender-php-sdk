<?php

/**
 * Файл из репозитория SMSCenter-Messenger-PHP-SDK
 * @link https://github.com/itpanda-llc/smscenter-messenger-php-sdk
 */

namespace Panda\SmsCenter\MessengerSdk\Job;

/**
 * Class Rpt
 * @package Panda\SmsCenter\MessengerSdk\Job
 * Периодичность отправки вновь создаваемой рассылки
 */
class Rpt
{
    /**
     * Вручную (По умолчанию)
     * @link https://smsc.ru/api/http/jobs/
     */
    public const MANUAL = '0';

    /**
     * Каждый час
     * @link https://smsc.ru/api/http/jobs/
     */
    public const HOURLY = '1';

    /**
     * Каждый день
     * @link https://smsc.ru/api/http/jobs/
     */
    public const DAILY = '2';

    /**
     * Каждый день
     * @link https://smsc.ru/api/http/jobs/
     */
    public const WORK_DAILY = '3';

    /**
     * Каждые выходные
     * @link https://smsc.ru/api/http/jobs/
     */
    public const WEEKENDLY = '4';

    /**
     * Каждую неделю
     * @link https://smsc.ru/api/http/jobs/
     */
    public const WEEKLY = '5';

    /**
     * Каждый месяц
     * @link https://smsc.ru/api/http/jobs/
     */
    public const MONTHLY = '6';

    /**
     * Каждый год
     * @link https://smsc.ru/api/http/jobs/
     */
    public const EARLY = '7';
}
