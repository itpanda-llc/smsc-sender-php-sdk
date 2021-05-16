<?php

/**
 * Файл из репозитория SMSCenter-Messenger-SDK
 * @link https://github.com/itpanda-llc/smscenter-messenger-sdk
 */

namespace Panda\SmsCenter\MessengerSdk\Receive;

use Panda\SmsCenter\MessengerSdk;

/**
 * Class Task
 * @package Panda\SmsCenter\MessengerSdk\Receive
 * Подключение выделенных номеров для приема сообщений
 */
class Task extends MessengerSdk\ActionTask
{
    /**
     * Наименование параметра "Подключаемый номер"
     * @link https://smsc.ru/api/http/miscellaneous/receive/
     */
    private const PHONE = 'phone';

    /**
     * Наименование параметра "Продление выделенного номера"
     * @link https://smsc.ru/api/http/miscellaneous/receive/
     */
    private const NOPROLONG = 'noprolong';

    /**
     * @var string URL-адрес
     * @link https://smsc.ru/api/http/miscellaneous/receive/
     */
    protected $url = MessengerSdk\Url::RECEIVE_PHONES;

    /**
     * Task constructor.
     * @param array $action Действие / Команда
     * @param string|null $phone Номер телефона абонента
     * @param string|null $noProlong Продление выделенного номера
     */
    public function __construct(array $action,
                                string $phone = null,
                                string $noProlong = null)
    {
        parent::__construct($action);

        $this->task[self::PHONE] = $phone;
        $this->task[self::NOPROLONG] = $noProlong;
    }

    /**
     * @param string $phone Номер телефона абонента
     * @return $this
     */
    public function setPhone(string $phone): self
    {
        $this->task[self::PHONE] = $phone;

        return $this;
    }

    /**
     * @param string $noProlong Продление выделенного номера
     * @return $this
     */
    public function setNoProlong(string $noProlong): self
    {
        $this->task[self::NOPROLONG] = $noProlong;

        return $this;
    }
}
