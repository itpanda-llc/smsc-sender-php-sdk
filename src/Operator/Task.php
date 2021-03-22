<?php

/**
 * Файл из репозитория SMSCenter-Messenger-PHP-SDK
 * @link https://github.com/itpanda-llc/smscenter-messenger-php-sdk
 */

namespace Panda\SmsCenter\MessengerSdk\Operator;

use Panda\SmsCenter\MessengerSdk;

/**
 * Class Task
 * @package Panda\SmsCenter\MessengerSdk\Operator
 * Получение информации об операторе
 */
class Task extends MessengerSdk\ActionTask
{
    /**
     * Наименование параметра "Номер телефона абонента или список номеров через запятую"
     * @link https://smsc.ru/api/http/get_data/operator/
     */
    private const PHONE = 'phone';

    /**
     * @var string URL-адрес
     * @link https://smsc.ru/api/http/get_data/operator/
     */
    protected $url = MessengerSdk\Url::INFO;

    /**
     * Task constructor.
     * @param array $action Действие / Команда
     * @param string|null $phone Номер телефона абонента или список номеров через запятую
     */
    public function __construct(array $action,
                                string $phone = null)
    {
        parent::__construct($action);

        $this->task[self::PHONE] = $phone;
    }

    /**
     * @param string $phone Номер телефона абонента или список номеров через запятую
     * @return $this
     */
    public function setPhone(string $phone): self
    {
        $this->task[self::PHONE] = $phone;

        return $this;
    }
}
