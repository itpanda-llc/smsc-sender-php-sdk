<?php

/**
 * Файл из репозитория SMSCenter-Messenger-SDK
 * @link https://github.com/itpanda-llc/smscenter-messenger-sdk
 */

declare(strict_types=1);

namespace Panda\SmsCenter\MessengerSdk;

/**
 * Class Center
 * @package Panda\SmsCenter\MessengerSdk
 * Формирование задачи / Выполнение запроса
 */
class Center extends Request
{
    /**
     * Наименование параметра "Логин"
     * @link https://smsc.ru/api/http/
     */
    private const LOGIN = 'login';

    /**
     * Наименование параметра "Пароль"
     * @link https://smsc.ru/api/http/
     */
    private const PSW = 'psw';

    /**
     * Наименование параметра "Кодировка"
     * @link https://smsc.ru/api/http/
     */
    private const CHARSET = 'charset';

    /**
     * Наименование параметра "Формат ответа сервера"
     * @link https://smsc.ru/api/http/
     */
    private const FMT = 'fmt';

    /**
     * @var array Параметры задачи/запроса
     */
    private $task = [];

    /**
     * Center constructor.
     * @param string $login Логин
     * @param string $psw Пароль
     * @param string|null $charset Кодировка
     * @param string|null $fmt Формат ответа сервера
     */
    public function __construct(string $login,
                                string $psw,
                                string $charset= null,
                                string $fmt = null)
    {
        $this->task[self::LOGIN] = $login;
        $this->task[self::PSW] = $psw;
        $this->task[self::CHARSET] = $charset;
        $this->task[self::FMT] = $fmt;
    }

    /**
     * @param string $charset Кодировка
     * @return $this
     */
    public function setCharset(string $charset): self
    {
        $this->task[self::CHARSET] = $charset;

        return $this;
    }

    /**
     * @param string $fmt Формат ответа сервера
     * @return $this
     */
    public function setFmt(string $fmt): self
    {
        $this->task[self::FMT] = $fmt;

        return $this;
    }

    /**
     * @param string $phones Номер / Список номеров
     * @param string $mes Текст
     * @param string|null $sender Имя отправителя
     * @return string Результат web-запроса
     */
    public function sendSms(string $phones,
                            string $mes,
                            string $sender = null): string
    {
        return $this->request(new Send\Task($phones,
            $mes,
            $sender));
    }

    /**
     * @param string|null $name Название правила или сервера в задании
     * @param string|null $host Адрес или IP проверяемого сервера
     * @param string|null $info Дополнительная информация о событии
     * @return Notification\Macros Макросы
     */
    public function newMacros(string $name = null,
                              string $host = null,
                              string $info = null): Notification\Macros
    {
        return new Notification\Macros($name, $host, $info);
    }

    /**
     * @param string $id Идентификатор группы заданий
     * @param string|null $ok Использование шаблона
     * @param Notification\Macros|null $macros Макросы
     * @return string Результат web-запроса
     */
    public function sendNotification(string $id,
                                     string $ok = null,
                                     Notification\Macros $macros = null): string
    {
        return $this->request(new Notification\Task($id, $ok, $macros));
    }

    /**
     * @param string$phone Номер телефона или список номеров через запятую
     * @param string $id Идентификатор сообщения или список идентификаторов через запятую
     * @param string|null $all Вариант ответа
     * @return string Результат web-запроса
     */
    public function checkStatus(string $phone,
                                string $id,
                                string $all = null): string
    {
        return $this->request(new Status\Task($phone, $id, $all));
    }

    /**
     * @param string $flag Флаг
     * @return string Результат web-запроса
     */
    public function getBalance(string $flag): string
    {
        return $this->request(new Balance\Task($flag));
    }

    /**
     * @param string|null $start Начальная дата в периоде, за который запрашивается статистика
     * @param string|null $end Конечная дата в периоде
     * @return string Результат web-запроса
     */
    public function getStatistic(string $start = null,
                                 string $end = null): string
    {
        return $this->request(new Statistic\Task(
            Statistic\Action::GET_STAT_1,
            $start,
            $end));
    }

    /**
     * @param string $account Номер лицевого счета у оператора Мегафон
     * @return string Результат web-запроса
     */
    public function getMegafonStatistic(string $account): string
    {
        return $this->request(new MegafonStatistic\Task(
            MegafonStatistic\Action::GET_MEGA_ACCOUNTS_1,
            $account));
    }

    /**
     * @return string Результат web-запроса
     */
    public function getTariff(): string
    {
        return $this->request(new Tariff\Task(
            Tariff\Action::GET_PRICE_1));
    }

    /**
     * @param string $phone Номер телефона абонента или список номеров через запятую
     * @return string Результат web-запроса
     */
    public function getOperator(string $phone): string
    {
        return $this->request(new Operator\Task(
            Operator\Action::GET_OPERATOR_1,
            $phone));
    }

    /**
     * @param string $link Исходная полная ссылка
     * @return string Результат web-запроса
     */
    public function getTinyUrl(string $link): string
    {
        return $this->request(new TinyUrl\Task(
            TinyUrl\Action::GET_1,
            $link));
    }

    /**
     * @param string $phone Номер телефона абонента
     * @return string Результат web-запроса
     */
    public function waitCall(string $phone): string
    {
        return $this->request(new WaitCall\Task($phone));
    }

    /**
     * @param Task $task Параметры задачи/запроса
     * @return string Результат web-запроса
     */
    public function request(Task $task): string
    {
        $task->addParam($this->task);

        return $this->send($task->getUrl(),
            $task->getParam(),
            $task->attachments);
    }
}
