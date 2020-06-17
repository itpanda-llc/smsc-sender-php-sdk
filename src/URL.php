<?php

/**
 * Файл из репозитория SMSC-Sender-PHP-SDK
 * @link https://github.com/itpanda-llc
 */

namespace Panda\SMSC\SenderSDK;

/**
 * Class URL
 * @package Panda\SMSC\SenderSDK
 * URL-адреса web-запросов
 */
class URL
{
    /**
     * Отправка сообщения
     * @link https://smsc.ru/api/http/send/
     */
    public const SEND = 'https://smsc.ru/sys/send.php';

    /**
     * Статус сообщения
     * @link https://smsc.ru/api/http/status_messages/
     */
    public const STATUS = 'https://smsc.ru/sys/status.php';
}
