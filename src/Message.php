<?php

/**
 * Файл из репозитория SMSC-Sender-PHP-SDK
 * @link https://github.com/itpanda-llc
 */

namespace Panda\SMSC\SenderSDK;

/**
 * Class Message
 * @package Panda\SMSC\SenderSDK
 * Сообщение
 */
class Message extends Param
{
    /**
     * Наименование параметра "Имя отправителя"
     */
    private const SENDER = 'sender';

    /**
     * Наименование параметра "Сообщение"
     */
    private const MESSAGE = 'mes';

    /**
     * Наименование параметра "Номера телефонов"
     */
    private const PHONES = 'phones';

    /**
     * Наименование параметра "Время отправки"
     */
    private const TIME = 'time';

    /**
     * Наименование параметра "Часовой пояс"
     */
    private const TIMEZONE = 'tz';

    /**
     * Наименование параметра "Признак soc-сообщения"
     */
    private const SOC = 'soc';

    /**
     * Наименование параметра "Срок "жизни" сообщения"
     */
    private const VALID = 'valid';

    /**
     * @var string URL-адрес web-запроса
     */
    public $url = URL::SEND;

    /**
     * Message constructor.
     * @param string $sender Имя отправителя
     * @param string $message Сообщение
     * @param string|null $phones Номера телефонов
     */
    public function __construct(string $sender,
                                string $message,
                                string $phones = null)
    {
        $this->fields[self::SENDER] = $sender;
        $this->fields[self::MESSAGE] = $message;
        $this->fields[self::PHONES] = $phones;
    }

    /**
     * @param string $phone Номер телефона
     * @return Message
     */
    public function addPhone(string $phone): Message
    {
        $phones = $this->fields[self::PHONES] ?? '';

        if (strpos($phones, $phone) === false) {
            $format = (empty($phones)) ? '%s' : ';%s';
            $phones .= sprintf($format, $phone);

            $this->fields[self::PHONES] = $phones;
        }

        return $this;
    }

    /**
     * @param string $id Идентификатор сообщения
     * @return Message
     */
    public function setId(string $id): Message
    {
        $this->fields[self::ID] = $id;

        return $this;
    }

    /**
     * @param string $time Время отправки
     * @return Message
     */
    public function setTime(string $time): Message
    {
        $this->fields[self::TIME] = $time;

        return $this;
    }

    /**
     * @param string $tz Часовой пояс
     * @return Message
     */
    public function setTimeZone(string $tz): Message
    {
        $this->fields[self::TIMEZONE] = $tz;

        return $this;
    }

    /**
     * @param string $soc Признак soc-сообщения
     * @return Message
     */
    public function setSoc($soc = Soc::YES): Message
    {
        $this->fields[self::SOC] = $soc;

        return $this;
    }

    /**
     * @param string $valid Срок "жизни" сообщения
     * @return Message
     */
    public function setValid(string $valid): Message
    {
        $this->fields[self::VALID] = $valid;

        return $this;
    }
}
