<?php

/**
 * Файл из репозитория SMSCenter-Messenger-SDK
 * @link https://github.com/itpanda-llc/smscenter-messenger-sdk
 */

namespace Panda\SmsCenter\MessengerSdk\Inbox;

use Panda\SmsCenter\MessengerSdk;

/**
 * Class Task
 * @package Panda\SmsCenter\MessengerSdk\Inbox
 * Получение входящих сообщений
 */
class Task extends MessengerSdk\ActionTask
{
    /**
     * Наименование параметра "Период в часах, за который необходимо запросить входящие сообщения"
     * @link https://smsc.ru/api/http/get_data/inbox/
     */
    private const HOUR = 'hour';

    /**
     * Наименование параметра "Идентификатор сообщения, начиная с которого необходимо вернуть входящие сообщения"
     * @link https://smsc.ru/api/http/get_data/inbox/
     */
    private const AFTER_ID = 'after_id';

    /**
     * Наименование параметра "Номер телефона Клиента, на который получены входящие сообщения"
     * @link https://smsc.ru/api/http/get_data/inbox/
     */
    private const TO_PHONE = 'to_phone';

    /**
     * @var string URL-адрес
     * @link https://smsc.ru/api/http/get_data/inbox/
     */
    protected $url = MessengerSdk\Url::GET;

    /**
     * @param int $hour Период в часах, за который необходимо запросить входящие сообщения
     * @return $this
     */
    public function setHour(int $hour): self
    {
        $this->task[self::HOUR] = $hour;

        return $this;
    }

    /**
     * @param int $afterId Идентификатор сообщения, начиная с которого необходимо вернуть входящие сообщения
     * @return $this
     */
    public function setAfterId(int $afterId): self
    {
        $this->task[self::AFTER_ID] = $afterId;

        return $this;
    }

    /**
     * @param string $toPhone Номер телефона Клиента, на который получены входящие сообщения
     * @return $this
     */
    public function setToPhone(string $toPhone): self
    {
        $this->task[self::TO_PHONE] = $toPhone;

        return $this;
    }
}
