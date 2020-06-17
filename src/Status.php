<?php

/**
 * Файл из репозитория SMSC-Sender-PHP-SDK
 * @link https://github.com/itpanda-llc
 */

namespace Panda\SMSC\SenderSDK;

/**
 * Class Status
 * @package Panda\SMSC\SenderSDK
 * Статус сообщения
 */
class Status extends Param
{
    /**
     * Наименование параметра "Номер телефона"
     */
    private const PHONE = 'phone';

    /**
     * Наименование параметра "Вариант ответа"
     */
    private const ALL = 'all';

    /**
     * @var string URL-адрес web-запроса
     */
    public $url = URL::STATUS;

    /**
     * Status constructor.
     * @param string $id Идентификатор сообщения
     * @param string $phone Номер телефона
     */
    public function __construct(string $id = null,
                                string $phone = null)
    {
        if (!is_null($id) && !is_null($id))
            $this->addMessage($id, $phone);
    }

    /**
     * @param string $id Идентификатор сообщения
     * @param string $phone Номер телефона
     * @return Status
     */
    public function addMessage(string $id,
                               string $phone): Status
    {
        $ids = $this->fields[self::ID] ?? '';
        $phones = $this->fields[self::PHONE] ?? '';

        $idFormat = (empty($this->fields[self::ID]))
            ? '%s'
            : ',%s';

        $phoneFormat = (empty($this->fields[self::PHONE]))
            ? '%s'
            : ',%s';

        $ids .= sprintf($idFormat, $id);
        $phones .= sprintf($phoneFormat, $phone);

        $this->fields[self::ID] = $ids;
        $this->fields[self::PHONE] = $phones;

        return $this;
    }

    /**
     * @param string $all Вариант ответа
     * @return Status
     */
    public function setAll(string $all): Status
    {
        $this->fields[self::ALL] = $all;

        return $this;
    }
}
