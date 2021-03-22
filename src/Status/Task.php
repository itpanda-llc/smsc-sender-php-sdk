<?php

/**
 * Файл из репозитория SMSCenter-Messenger-PHP-SDK
 * @link https://github.com/itpanda-llc/smscenter-messenger-php-sdk
 */

namespace Panda\SmsCenter\MessengerSdk\Status;

use Panda\SmsCenter\MessengerSdk;

/**
 * Class Task
 * @package Panda\SmsCenter\MessengerSdk\Status
 * Проверка статуса
 */
class Task extends MessengerSdk\ActionTask
{
    /**
     * Наименование параметра "Номер телефона или список номеров через запятую"
     * @link https://smsc.ru/api/http/status_messages/check_status/
     */
    private const PHONE = 'phone';

    /**
     * Наименование параметра "Идентификатор сообщения или список идентификаторов через запятую"
     * @link https://smsc.ru/api/http/status_messages/check_status/
     */
    private const ID = 'id';

    /**
     * Наименование параметра "Вариант ответа"
     * @link https://smsc.ru/api/http/status_messages/check_status/
     */
    private const ALL = 'all';

    /**
     * @var string URL-адрес
     * @link https://smsc.ru/api/http/status_messages/check_status/
     */
    protected $url = MessengerSdk\Url::STATUS;

    /**
     * Task constructor.
     * @param string $phone Номер телефона или список номеров через запятую
     * @param string $id Идентификатор сообщения или список идентификаторов через запятую
     * @param string|null $all Вариант ответа
     */
    public function __construct(string $phone,
                                string $id,
                                string $all = null)
    {
        parent::__construct();

        $this->task[self::PHONE] = $phone;
        $this->task[self::ID] = $id;
        $this->task[self::ALL] = $all;
    }

    /**
     * @param string $all Вариант ответа
     * @return $this
     */
    public function setAll(string $all): self
    {
        $this->task[self::ALL] = $all;

        return $this;
    }
}
