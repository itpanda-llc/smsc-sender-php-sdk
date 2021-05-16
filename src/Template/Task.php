<?php

/**
 * Файл из репозитория SMSCenter-Messenger-SDK
 * @link https://github.com/itpanda-llc/smscenter-messenger-sdk
 */

namespace Panda\SmsCenter\MessengerSdk\Template;

use Panda\SmsCenter\MessengerSdk;

/**
 * Class Task
 * @package Panda\SmsCenter\MessengerSdk\Template
 * Управление шаблонами сообщений
 */
class Task extends MessengerSdk\ActionTask
{
    /**
     * Наименование параметра "Название шаблона"
     * @link https://smsc.ru/api/http/send/templates/
     */
    private const NAME = 'name';

    /**
     * Наименование параметра "Текст сообщения"
     * @link https://smsc.ru/api/http/send/templates/
     */
    private const MSG = 'msg';

    /**
     * Наименование параметра "Формат сообщения"
     * @link https://smsc.ru/api/http/send/templates/
     */
    private const FORMAT = 'format';

    /**
     * Наименование параметра "Имя отправителя"
     * @link https://smsc.ru/api/http/send/templates/
     */
    private const SENDER = 'sender';

    /**
     * @var string URL-адрес
     * @link https://smsc.ru/api/http/send/templates/
     */
    protected $url = MessengerSdk\Url::TEMPLATES;

    /**
     * @param string $flag Флаг
     * @return $this
     */
    public function addFlag(string $flag): self
    {
        $this->task += [$flag => '1'];

        return $this;
    }

    /**
     * @param string $name Название шаблона
     * @return $this
     */
    public function setName(string $name): self
    {
        $this->task[self::NAME] = $name;

        return $this;
    }

    /**
     * @param string $msg Текст сообщения
     * @return $this
     */
    public function setMsg(string $msg): self
    {
        $this->task[self::MSG] = $msg;

        return $this;
    }

    /**
     * @param string $format Формат сообщения
     * @return $this
     */
    public function setFormat(string $format): self
    {
        $this->task[self::FORMAT] = $format;

        return $this;
    }

    /**
     * @param string $sender Имя отправителя
     * @return $this
     */
    public function setSender(string $sender): self
    {
        $this->task[self::SENDER] = $sender;

        return $this;
    }
}
