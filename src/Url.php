<?php

/**
 * Файл из репозитория SMSCenter-Messenger-SDK
 * @link https://github.com/itpanda-llc/smscenter-messenger-sdk
 */

namespace Panda\SmsCenter\MessengerSdk;

/**
 * Class Url
 * @package Panda\SmsCenter\MessengerSdk
 * URL-адреса
 */
class Url
{
    /**
     * Отправка сообщений
     * @link https://smsc.ru/api/http/send/
     */
    public const SEND = 'https://smsc.ru/sys/send.php';

    /**
     * Управление шаблонами сообщений
     * @link https://smsc.ru/api/http/send/templates/
     */
    public const TEMPLATES = 'https://smsc.ru/sys/templates.php';

    /**
     * Управление шаблонами операторов
     * @link https://smsc.ru/api/http/send/operators_templates/
     */
    public const OP_TEMPLATES = 'https://smsc.ru/sys/op_templates.php';

    /**
     * Уведомления о событиях
     * @link https://smsc.ru/api/http/send/notification/
     */
    public const PING = 'https://smsc.ru/sys/ping.php';

    /**
     * Управление рассылками
     * @link https://smsc.ru/api/http/jobs/
     */
    public const JOBS = 'https://smsc.ru/sys/jobs.php';

    /**
     * Статусы сообщений
     * @link https://smsc.ru/api/http/status_messages/
     */
    public const STATUS = 'https://smsc.ru/sys/status.php';

    /**
     * Проверка состояния баланса
     * @link https://smsc.ru/api/http/balance/
     */
    public const BALANCE = 'https://smsc.ru/sys/balance.php';

    /**
     * Управление контактами
     * @link https://smsc.ru/api/http/contact/
     */
    public const PHONES = 'https://smsc.ru/sys/phones.php';

    /**
     * Работа с субклиентами
     * @link https://smsc.ru/api/http/users/subclients/
     */
    public const USERS = 'https://smsc.ru/sys/users.php';

    /**
     * Создание и выгрузка счетов и актов
     * @link https://smsc.ru/api/http/users/documents/
     */
    public const DOCUMENTS = 'https://smsc.ru/sys/documents.php';

    /**
     * Управление именами отправителей (Sender ID)
     * @link https://smsc.ru/api/http/senders/
     */
    public const SENDERS = 'https://smsc.ru/sys/senders.php';

    /**
     * Получение данных
     * @link https://smsc.ru/api/http/get_data/
     */
    public const GET = 'https://smsc.ru/sys/get.php';

    /**
     * Получение информации об операторе
     * @link https://smsc.ru/api/http/get_data/operator/
     */
    public const INFO = 'https://smsc.ru/sys/info.php';

    /**
     * Получение данных о короткой ссылке
     * @link https://smsc.ru/api/http/get_data/tinyurl/
     */
    public const TINY_URLS = 'https://smsc.ru/sys/tinyurls.php';

    /**
     * Подключение выделенных номеров для приема сообщений
     * @link https://smsc.ru/api/http/miscellaneous/receive/
     */
    public const RECEIVE_PHONES = 'https://smsc.ru/sys/receive_phones.php';

    /**
     * Подтверждение номера телефона с помощью звонка
     * @link https://smsc.ru/api/http/miscellaneous/waitcall/
     */
    public const WAIT_CALL = 'https://smsc.ru/sys/wait_call.php';
}
