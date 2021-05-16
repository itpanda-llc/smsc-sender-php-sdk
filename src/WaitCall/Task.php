<?php

/**
 * Файл из репозитория SMSCenter-Messenger-SDK
 * @link https://github.com/itpanda-llc/smscenter-messenger-sdk
 */

namespace Panda\SmsCenter\MessengerSdk\WaitCall;

use Panda\SmsCenter\MessengerSdk;

/**
 * Class Task
 * @package Panda\SmsCenter\MessengerSdk\WaitCall
 * Подтверждение номера телефона с помощью звонка
 */
class Task extends MessengerSdk\Task
{
    /**
     * Наименование параметра "Номер телефона абонента"
     * @link https://smsc.ru/api/http/miscellaneous/waitcall/
     */
    private const PHONE = 'phone';

    /**
     * @var string URL-адрес
     * @link https://smsc.ru/api/http/miscellaneous/waitcall/
     */
    protected $url = MessengerSdk\Url::WAIT_CALL;

    /**
     * Task constructor.
     * @param string $phone Номер телефона абонента
     */
    public function __construct(string $phone)
    {
        $this->task[self::PHONE] = $phone;
    }
}
