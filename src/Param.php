<?php

/**
 * Файл из репозитория SMSC-Sender-PHP-SDK
 * @link https://github.com/itpanda-llc
 */

namespace Panda\SMSC\SenderSDK;

/**
 * Class Param
 * @package Panda\SMSC\SenderSDK
 * Параметры запроса
 */
class Param
{
    /**
     * Наименование параметра "Идентификатор сообщения"
     */
    protected const ID = 'id';

    /**
     * Наименование параметра "Кодировка сообщения"
     */
    protected const CHARSET = 'charset';

    /**
     * Наименование параметра "Формат ответа"
     */
    protected const FORMAT = 'fmt';

    /**
     * @var string URL-адрес web-запроса
     */
    public $url;

    /**
     * @var array Параметры запроса
     */
    public $fields = [];

    /**
     * @param string $charset Кодировка сообщения
     * @return Param
     */
    public function setCharset(string $charset): Param
    {
        $this->fields[self::CHARSET] = $charset;

        return $this;
    }

    /**
     * @param string $format Формат ответа
     * @return Param
     */
    public function setFormat(string $format): Param
    {
        $this->fields[self::FORMAT] = $format;

        return $this;
    }
}
