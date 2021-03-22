<?php

/**
 * Файл из репозитория SMSCenter-Messenger-PHP-SDK
 * @link https://github.com/itpanda-llc/smscenter-messenger-php-sdk
 */

namespace Panda\SmsCenter\MessengerSdk\Outbox;

use Panda\SmsCenter\MessengerSdk;

/**
 * Class Task
 * @package Panda\SmsCenter\MessengerSdk\Outbox
 * Получение истории отправленных сообщений
 */
class Task extends MessengerSdk\ActionTask
{
    /**
     * Наименование параметра "Начальная дата в периоде, за который запрашивается история"
     * @link https://smsc.ru/api/http/get_data/outbox/
     */
    private const START = 'start';

    /**
     * Наименование параметра "Конечная дата в периоде"
     * @link https://smsc.ru/api/http/get_data/outbox/
     */
    private const END = 'end';

    /**
     * Наименование параметра "Номер или разделенный запятыми список номеров телефонов, для которых необходимо получить историю отправленных SMS-сообщений"
     * @link https://smsc.ru/api/http/get_data/outbox/
     */
    private const PHONE = 'phone';

    /**
     * Наименование параметра "E-mail адрес или разделенный запятыми список адресов, для которых необходимо получить историю отправленных e-mail сообщений"
     * @link https://smsc.ru/api/http/get_data/outbox/
     */
    private const EMAIL = 'email';

    /**
     * Наименование параметра "Признак запроса e-mail сообщений"
     * @link https://smsc.ru/api/http/get_data/outbox/
     */
    private const FORMAT = 'format';

    /**
     * Наименование параметра "Количество возвращаемых в ответе сообщений"
     * @link https://smsc.ru/api/http/get_data/outbox/
     */
    private const CNT = 'cnt';

    /**
     * Наименование параметра "Глобальный идентификатор сообщения"
     * @link https://smsc.ru/api/http/get_data/outbox/
     */
    private const PREV_ID = 'prev_id';

    /**
     * @var string URL-адрес
     * @link https://smsc.ru/api/http/get_data/outbox/
     */
    protected $url = MessengerSdk\Url::GET;

    /**
     * @param string $start Начальная дата в периоде, за который запрашивается история
     * @return $this
     */
    public function setStart(string $start): self
    {
        $this->task[self::START] = $start;

        return $this;
    }

    /**
     * @param string $end Конечная дата в периоде
     * @return $this
     */
    public function setEnd(string $end): self
    {
        $this->task[self::END] = $end;

        return $this;
    }

    /**
     * @param string $phone Номер или разделенный запятыми список номеров телефонов, для которых необходимо получить историю отправленных SMS-сообщений
     * @return $this
     */
    public function setPhone(string $phone): self
    {
        $this->task[self::PHONE] = $phone;

        return $this;
    }

    /**
     * @param string $email E-mail адрес или разделенный запятыми список адресов, для которых необходимо получить историю отправленных e-mail сообщений
     * @return $this
     */
    public function setEmail(string $email): self
    {
        $this->task[self::EMAIL] = $email;

        return $this;
    }

    /**
     * @param string $format Признак запроса e-mail сообщений
     * @return $this
     */
    public function setFormat(string $format): self
    {
        $this->task[self::FORMAT] = $format;

        return $this;
    }

    /**
     * @param int $cnt Количество возвращаемых в ответе сообщений
     * @return $this
     */
    public function setCnt(int $cnt): self
    {
        $this->task[self::CNT] = $cnt;

        return $this;
    }

    /**
     * @param int $prevId Глобальный идентификатор сообщения
     * @return $this
     */
    public function setPrevId(int $prevId): self
    {
        $this->task[self::PREV_ID] = $prevId;

        return $this;
    }
}
