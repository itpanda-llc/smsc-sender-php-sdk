<?php

/**
 * Файл из репозитория SMSCenter-Messenger-PHP-SDK
 * @link https://github.com/itpanda-llc/smscenter-messenger-php-sdk
 */

declare(strict_types=1);

namespace Panda\SmsCenter\MessengerSdk\Notification;

use Panda\SmsCenter\MessengerSdk;

/**
 * Class Task
 * @package Panda\SmsCenter\MessengerSdk\Notification
 * Уведомления о событиях
 */
class Task extends MessengerSdk\Task
{
    /**
     * Наименование параметра "Идентификатор группы заданий"
     * @link https://smsc.ru/api/http/send/notification/
     */
    private const ID = 'id';

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
     * Наименование параметра "Использование шаблона"
     * @link https://smsc.ru/api/http/send/notification/
     */
    private const OK = 'ok';

    /**
     * @var string URL-адрес
     * @link https://smsc.ru/api/http/send/notification/
     */
    protected $url = MessengerSdk\Url::PING;

    /**
     * Task constructor.
     * @param string $id Идентификатор группы заданий
     * @param string|null $ok Использование шаблона
     * @param Macros|null $macros Макросы
     */
    public function __construct(string $id,
                                string $ok = null,
                                Macros $macros = null)
    {
        $this->task[self::ID] = $id;
        $this->task[self::OK]= $ok;
        $this->task += $macros->task ?? [];
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

    /**
     * @param string $ok Использование шаблона
     * @return $this
     */
    public function setOk(string $ok): self
    {
        $this->task[self::OK] = $ok;

        return $this;
    }

    /**
     * @param string|null $name Название правила или сервера в задании
     * @param string|null $host Адрес или IP проверяемого сервера
     * @param string|null $info Дополнительная информация о событии
     * @return Macros
     */
    public static function newMacros(string $name = null,
                                     string $host = null,
                                     string $info = null): Macros
    {
        return new Macros($name, $host, $info);
    }
}
