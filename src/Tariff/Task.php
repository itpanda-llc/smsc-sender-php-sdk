<?php

/**
 * Файл из репозитория SMSCenter-Messenger-SDK
 * @link https://github.com/itpanda-llc/smscenter-messenger-sdk
 */

namespace Panda\SmsCenter\MessengerSdk\Tariff;

use Panda\SmsCenter\MessengerSdk;

/**
 * Class Task
 * @package Panda\SmsCenter\MessengerSdk\Tariff
 * Запрос тарифов
 */
class Task extends MessengerSdk\ActionTask
{
    /**
     * @var string URL-адрес
     * @link https://smsc.ru/api/http/get_data/tariffs/
     */
    protected $url = MessengerSdk\Url::GET;
}
