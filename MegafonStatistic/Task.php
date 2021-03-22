<?php

/**
 * Файл из репозитория SMSCenter-Messenger-PHP-SDK
 * @link https://github.com/itpanda-llc/smscenter-messenger-php-sdk
 */

namespace Panda\SmsCenter\MessengerSdk\MegafonStatistic;

use Panda\SmsCenter\MessengerSdk;

/**
 * Class Task
 * @package Panda\SmsCenter\MessengerSdk\MegafonStatistic
 * Получение статистики по оператору Мегафон
 */
class Task extends MessengerSdk\ActionTask
{
    /**
     * Наименование параметра "Номер лицевого счета у оператора Мегафон"
     * @link https://smsc.ru/api/http/get_data/megafon_statistic/
     */
    private const ACCOUNT = 'account';

    /**
     * @var string URL-адрес
     * @link https://smsc.ru/api/http/get_data/megafon_statistic/
     */
    protected $url = MessengerSdk\Url::GET;

    /**
     * @param array $action Действие / Команда
     * @param string $account Номер лицевого счета у оператора Мегафон
     */
    public function __construct(array $action, string $account)
    {
        parent::__construct($action);

        $this->task[self::ACCOUNT] = $account;
    }
}
