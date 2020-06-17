<?php

/**
 * Файл из репозитория SMSC-Sender-PHP-SDK
 * @link https://github.com/itpanda-llc
 */

namespace Panda\SMSC\SenderSDK;

/**
 * Class Sender
 * @package Panda\SMSC\SenderSDK
 * Формирование и выполнение запроса
 */
class Sender extends Request
{
    /**
     * Наименование параметра "Логин клиента"
     */
    private const LOGIN = 'login';

    /**
     * Наименование параметра "Пароль клиента"
     */
    private const PASSWORD = 'psw';

    /**
     * Наименование параметра "Формат ответа"
     */
    private const FORMAT = 'fmt';

    /**
     * @var array Параметры запроса
     */
    private $fields = [];

    /**
     * Sender constructor.
     * @param string $login Логин клиента
     * @param string $password Пароль клиента
     * @param string|null $format Формат ответа
     */
    public function __construct(string $login,
                                string $password,
                                string $format = null)
    {
        $this->fields[self::LOGIN] = $login;
        $this->fields[self::PASSWORD] = $password;
        $this->fields[self::FORMAT] = $format;
    }

    /**
     * @param string $format Формат ответа
     * @return Sender
     */
    public function setFormat(string $format): Sender
    {
        $this->fields[self::FORMAT] = $format;

        return $this;
    }

    /**
     * @param Param $param Сообщение
     * @return string Результат web-запроса
     */
    public function request(Param $param): string
    {
        return $this->send($param->url,
            http_build_query(array_merge($this->fields,
                $param->fields)));
    }
}
