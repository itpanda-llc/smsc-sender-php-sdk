<?php

/**
 * Файл из репозитория SMSCenter-Messenger-PHP-SDK
 * @link https://github.com/itpanda-llc/smscenter-messenger-php-sdk
 */

namespace Panda\SmsCenter\MessengerSdk\Notification;

/**
 * Class Macros
 * @package Panda\SmsCenter\MessengerSdk\Notification
 * Макросы
 */
class Macros
{
    /**
     * Наименование параметра "Название правила или сервера в задании"
     * @link https://smsc.ru/api/http/send/notification/
     */
    private const NAME = 'name';

    /**
     * Наименование параметра "Адрес или IP проверяемого сервера"
     * @link https://smsc.ru/api/http/send/notification/
     */
    private const HOST = 'host';

    /**
     * Наименование параметра "Дополнительная информация о событии"
     * @link https://smsc.ru/api/http/send/notification/
     */
    private const INFO = 'info';

    /**
     * @var array Параметры задачи/запроса
     */
    public $task = [];

    /**
     * Macros constructor.
     * @param string|null $name Название правила или сервера в задании
     * @param string|null $host Адрес или IP проверяемого сервера
     * @param string|null $info Дополнительная информация о событии
     */
    public function __construct(string $name = null,
                                string $host = null,
                                string $info = null)
    {
        $this->task[self::NAME] = $name;
        $this->task[self::HOST] = $host;
        $this->task[self::INFO] = $info;
    }

    /**
     * @param string $name Название правила или сервера в задании
     * @return $this
     */
    public function setName(string $name): self
    {
        $this->task[self::NAME] = $name;

        return $this;
    }

    /**
     * @param string $host Адрес или IP проверяемого сервера
     * @return $this
     */
    public function setHost(string $host): self
    {
        $this->task[self::HOST] = $host;

        return $this;
    }

    /**
     * @param string $info Дополнительная информация о событии
     * @return $this
     */
    public function setInfo(string $info): self
    {
        $this->task[self::INFO] = $info;

        return $this;
    }
}
