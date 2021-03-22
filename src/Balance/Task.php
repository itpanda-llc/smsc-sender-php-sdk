<?php

/**
 * Файл из репозитория SMSCenter-Messenger-PHP-SDK
 * @link https://github.com/itpanda-llc/smscenter-messenger-php-sdk
 */

declare(strict_types=1);

namespace Panda\SmsCenter\MessengerSdk\Balance;

use Panda\SmsCenter\MessengerSdk;

/**
 * Class Task
 * @package Panda\SmsCenter\MessengerSdk\Balance
 * Запрос баланса
 */
class Task extends MessengerSdk\Task
{
    /**
     * @var string URL-адрес
     * @link https://smsc.ru/api/http/balance/get_balance/
     */
    protected $url = MessengerSdk\Url::BALANCE;

    /**
     * Task constructor.
     * @param string|null $flag Флаг
     */
    public function __construct(string $flag = null)
    {
        if (!is_null($flag)) $this->addFlag($flag);
    }

    /**
     * @param string $flag Флаг
     * @return $this
     */
    public function addFlag(string $flag): self
    {
        $this->task += [$flag => '1'];

        return $this;
    }
}
