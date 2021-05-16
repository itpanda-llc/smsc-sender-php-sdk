<?php

/**
 * Файл из репозитория SMSCenter-Messenger-SDK
 * @link https://github.com/itpanda-llc/smscenter-messenger-sdk
 */

namespace Panda\SmsCenter\MessengerSdk\OperatorTemplate;

use Panda\SmsCenter\MessengerSdk;

/**
 * Class Task
 * @package Panda\SmsCenter\MessengerSdk\OperatorTemplate
 * Управление шаблонами сообщений
 */
class Task extends MessengerSdk\ActionTask
{
    /**
     * Наименование параметра "Имя отправителя для которого создается шаблон"
     * @link https://smsc.ru/api/http/send/operators_templates/
     */
    private const SENDER = 'sender';

    /**
     * Наименование параметра "Название шаблона"
     * @link https://smsc.ru/api/http/send/operators_templates/
     */
    private const MSG = 'msg';

    /**
     * @var string URL-адрес
     * @link https://smsc.ru/api/http/send/operators_templates/
     */
    protected $url = MessengerSdk\Url::OP_TEMPLATES;

    /**
     * Task constructor.
     * @param array $action Действие / Команда
     * @param string|null $sender Имя отправителя для которого создается шаблон
     * @param string|null $msg Название шаблона
     */
    public function __construct(array $action,
                                string $sender = null,
                                string $msg = null)
    {
        parent::__construct($action);

        $this->task[self::SENDER] = $sender;
        $this->task[self::MSG] = $msg;
    }

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
     * @param string $sender Имя отправителя для которого создается шаблон
     * @return $this
     */
    public function setSender(string $sender): self
    {
        $this->task[self::SENDER] = $sender;

        return $this;
    }

    /**
     * @param string $msg Текст шаблона
     * @return $this
     */
    public function setMsg(string $msg): self
    {
        $this->task[self::MSG] = $msg;

        return $this;
    }
}
