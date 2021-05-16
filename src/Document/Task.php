<?php

/**
 * Файл из репозитория SMSCenter-Messenger-SDK
 * @link https://github.com/itpanda-llc/smscenter-messenger-sdk
 */

namespace Panda\SmsCenter\MessengerSdk\Document;

use Panda\SmsCenter\MessengerSdk;

/**
 * Class Task
 * @package Panda\SmsCenter\MessengerSdk\Document
 * Создание и выгрузка счетов и актов
 */
class Task extends MessengerSdk\ActionTask
{
    /**
     * Наименование параметра "Логин субклиента"
     * @link https://smsc.ru/api/http/users/documents/
     */
    private const USER = 'user';

    /**
     * Наименование параметра "Идентификатор субклиента"
     * @link https://smsc.ru/api/http/users/documents/
     */
    private const USER_ID = 'user_id';

    /**
     * Наименование параметра "Сумма, на которую необходимо создать счет в валюте Клиента"
     * @link https://smsc.ru/api/http/users/documents/
     */
    private const SUM = 'sum';

    /**
     * Наименование параметра "Название услуги, указываемой при создании счета"
     * @link https://smsc.ru/api/http/users/documents/
     */
    private const SERVICE = 'service';

    /**
     * Наименование параметра "Идентификатор запрашиваемого счета или акта"
     * @link https://smsc.ru/api/http/users/documents/
     */
    private const ID = 'id';

    /**
     * Наименование параметра "Номер запрашиваемого акта"
     * @link https://smsc.ru/api/http/users/documents/
     */
    private const NUM = 'num';

    /**
     * @var string URL-адрес
     * @link https://smsc.ru/api/http/users/documents/
     */
    protected $url = MessengerSdk\Url::DOCUMENTS;

    /**
     * @param string $user Логин субклиента
     * @return $this
     */
    public function setUser(string $user): self
    {
        $this->task[self::USER_ID] = null;
        $this->task[self::USER] = $user;

        return $this;
    }

    /**
     * @param string $userId Идентификатор субклиента
     * @return $this
     */
    public function setUserId(string $userId): self
    {
        $this->task[self::USER] = null;
        $this->task[self::USER_ID] = $userId;

        return $this;
    }

    /**
     * @param string $sum Сумма, на которую необходимо создать счет в валюте Клиента
     * @return $this
     */
    public function setSum(string $sum): self
    {
        $this->task[self::SUM] = $sum;

        return $this;
    }

    /**
     * @param string $service Название услуги, указываемой при создании счета
     * @return $this
     */
    public function setService(string $service): self
    {
        $this->task[self::SERVICE] = $service;

        return $this;
    }

    /**
     * @param string $id Идентификатор запрашиваемого счета или акта
     * @return $this
     */
    public function setId(string $id): self
    {
        $this->task[self::ID] = $id;

        return $this;
    }

    /**
     * @param string $num Номер запрашиваемого акта
     * @return $this
     */
    public function setNum(string $num): self
    {
        $this->task[self::NUM] = $num;

        return $this;
    }
}
