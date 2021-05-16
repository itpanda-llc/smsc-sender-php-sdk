<?php

/**
 * Файл из репозитория SMSCenter-Messenger-SDK
 * @link https://github.com/itpanda-llc/smscenter-messenger-sdk
 */

namespace Panda\SmsCenter\MessengerSdk\Statistic;

use Panda\SmsCenter\MessengerSdk;

/**
 * Class Task
 * @package Panda\SmsCenter\MessengerSdk\Statistic
 * Получение статистики
 */
class Task extends MessengerSdk\ActionTask
{
    /**
     * Наименование параметра "Начальная дата в периоде, за который запрашивается статистика"
     * @link https://smsc.ru/api/http/get_data/statistic/
     */
    private const START = 'start';

    /**
     * Наименование параметра "Конечная дата в периоде"
     * @link https://smsc.ru/api/http/get_data/statistic/
     */
    private const END = 'end';

    /**
     * @var string URL-адрес
     * @link https://smsc.ru/api/http/get_data/statistic/
     */
    protected $url = MessengerSdk\Url::GET;

    /**
     * Task constructor.
     * @param array $action Действие / Команда
     * @param string|null $start Начальная дата в периоде, за который запрашивается статистика
     * @param string|null $end Конечная дата в периоде
     */
    public function __construct(array $action,
                                string $start = null,
                                string $end = null)
    {
        parent::__construct($action);

        $this->task[self::START] = $start;
        $this->task[self::END] = $end;
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
     * @param string $start Начальная дата в периоде, за который запрашивается статистика
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
}
